<?php

namespace App\Controllers;

use App\Models\ImageModel;
use CodeIgniter\HTTP\ResponseInterface;

class ImageController extends BaseController

{


    public function getwatermarkImage()
    {
        // $watermarkPath1 = 'C:/xampp/htdocs/car-sale-app-php/images/watermark.png';
        $watermarkPath = FCPATH . '/assets/images/watermark/watermark.png';
        $watermarkPath1 = FCPATH . '/images/watermark.png';
        echo $watermarkPath;
        if (!file_exists($watermarkPath)) {
            return $this->response->setStatusCode(ResponseInterface::HTTP_BAD_REQUEST)->setJSON(['message' => 'Watermark image not found']);
        }

        if (!file_exists($watermarkPath1)) {
            echo $watermarkPath .' '. $watermarkPath1 .' '. FCPATH;
            return $this->response->setStatusCode(ResponseInterface::HTTP_BAD_REQUEST)->setJSON(['message' => 'Watermark1 image not found']);
        }
        
    }

    public function addImages()
    {
        $imageModel = new ImageModel();
    
        // Retrieve the uploaded files and YouTube URL
        $files = $this->request->getFiles();
        
        $youtubeUrl = $this->request->getVar('img_url');
    
        // Get the last car ID to associate images and URLs with
        $carId = $imageModel->getLastCarId();
        if (!$carId) {
            $carID = 1;
        }
    
        $fileCount = 0;
        $failedFiles = [];
    
        // Path to the watermark image
        // $watermarkPath = 'C:\xampp\htdocs\car-sale-app-php\images\watermark.png';
    //    $watermarkPath = FCPATH.'/images/watermark.png';
        $watermarkPath = FCPATH . '/assets/images/watermark/watermark.png';
        
    
        // Check if the watermark image exists
        if (!file_exists($watermarkPath)) {
            log_message('error', 'Watermark path: ' . $watermarkPath);
            return $this->response->setStatusCode(ResponseInterface::HTTP_BAD_REQUEST)->setJSON(['message' => 'Watermark image not found']);
        }
    
        // Process each uploaded file
        if (isset($files['images'])) {
            foreach ($files['images'] as $index => $file) {
                // Check if the file is valid and has not been moved
                if ($file->isValid() && !$file->hasMoved()) {
                    // Retrieve the 'type' value for this file from request variables
                    $typeKey = 'type' . ($index + 1);
                    $type = $this->request->getVar($typeKey);
    
                    // Prepare image data for insertion into the database
                    $imageData = [
                        'type' => $type,
                        'img_url' => '', // Placeholder for the image URL
                        'status' => 'active',
                        'car_id' => $carId,
                    ];
    
                    // Insert image data and get the new image ID
                    $newImageId = $imageModel->insert($imageData);
    
                    // Create a folder for the car if it doesn't exist in the public directory
                    $uploadPath = FCPATH . 'uploads/' . $carId;
                    if (!is_dir($uploadPath)) {
                        if (!mkdir($uploadPath, 0755, true)) {
                            $failedFiles[] = $file->getName();
                            continue; // Skip to the next file
                        }
                    }
    
                    // Move the uploaded file to the car's folder
                    $newFileName = $file->getRandomName();
                    $filePath = $uploadPath . '/' . $newFileName;
                    $file->move($uploadPath, $newFileName);
    
                    // Compress and resize the image
                    $this->compressImage($filePath, 1 * 1024 * 1024); // Compress to ~1 MB
    
                    // Set the new URL for the uploaded image
                    $imageData['img_url'] = 'uploads/' . $carId . '/' . $newFileName;
                    // Update the image record in the database with the URL
                    $imageModel->update($newImageId, $imageData);
    
                    // Add a watermark to the uploaded image
                    $this->addWatermark($filePath, $watermarkPath);
    
                    // Compress the image again after adding the watermark
                    $this->compressImage($filePath, 1 * 1024 * 1024); // Compress to ~1 MB
    
                    // Increment the successful file count
                    $fileCount++;
                } else {
                    $failedFiles[] = $file->getName();
                }
            }
        }
    
        // Process the YouTube URL
        if ($youtubeUrl) {
            $imageData = [
                'type' => 'YouTube_URL',
                'img_url' => $youtubeUrl,
                'status' => 'active',
                'car_id' => $carId,
            ];
    
            // Insert the YouTube URL data into the database
            $newImageId = $imageModel->insert($imageData);
            if ($newImageId) {
                $fileCount++;
            } else {
                $failedFiles[] = $youtubeUrl;
            }
        }
    
        // Prepare response message based on the outcome
        $responseMessage = "$fileCount items added successfully.";
    
        if (!empty($failedFiles)) {
            $responseMessage .= ' Failed to add the following items: ' . implode(', ', $failedFiles);
        }
    
        // Redirect to the car listing page
        return redirect()->to('admin/car_listing');
    }
    

    private function addWatermark($imagePath, $watermarkPath)
    {
        if (!file_exists($imagePath) || !file_exists($watermarkPath)) {
            throw new \RuntimeException('Image or watermark file does not exist.');
        }

        // Load the main image
        $image = imagecreatefromstring(file_get_contents($imagePath));
        // Load the watermark
        $watermark = imagecreatefromstring(file_get_contents($watermarkPath));

        // Get dimensions of the main image
        $imageWidth = imagesx($image);
        $imageHeight = imagesy($image);

        // Define the size of the watermark (e.g., 20% of the main image width)
        $watermarkWidth = $imageWidth * 0.2;
        $aspectRatio = imagesy($watermark) / imagesx($watermark);
        $watermarkHeight = $watermarkWidth * $aspectRatio;

        // Create a new true color image for the resized watermark
        $resizedWatermark = imagecreatetruecolor($watermarkWidth, $watermarkHeight);
        // Preserve transparency
        imagesavealpha($resizedWatermark, true);
        $transColor = imagecolorallocatealpha($resizedWatermark, 0, 0, 0, 127);
        imagefill($resizedWatermark, 0, 0, $transColor);

        // Resize the watermark
        imagecopyresampled($resizedWatermark, $watermark, 0, 0, 0, 0, $watermarkWidth, $watermarkHeight, imagesx($watermark), imagesy($watermark));

        // Calculate position for the watermark (bottom right corner)
        $destX = $imageWidth - $watermarkWidth - 10; // 10px padding from the right
        $destY = $imageHeight - $watermarkHeight - 10; // 10px padding from the bottom

        // Merge the watermark with the main image
        imagecopy($image, $resizedWatermark, $destX, $destY, 0, 0, $watermarkWidth, $watermarkHeight);

        // Save the image
        imagepng($image, $imagePath);
        // Free up memory
        imagedestroy($image);
        imagedestroy($watermark);
        imagedestroy($resizedWatermark);
    }


    /**
     * Compress the image to a target size
     *
     * @param string $imagePath The path to the image to be compressed
     * @param int $targetSize The target size in bytes
     * @return void
     */
    private function compressImage($imagePath, $targetSize)
    {
        // Load the image
        $imageInfo = getimagesize($imagePath);
        if ($imageInfo === false) {
            return;
        }

        // Create a new image resource from the file
        switch ($imageInfo['mime']) {
            case 'image/jpeg':
                $image = imagecreatefromjpeg($imagePath);
                break;
            case 'image/png':
                $image = imagecreatefrompng($imagePath);
                break;
            case 'image/gif':
                $image = imagecreatefromgif($imagePath);
                break;
            default:
                return; // Unsupported format
        }


        $quality = 100; // Start at max quality
        $step = 5; // Reduce quality in steps

        // Compress the image until the desired size is reached
        do {
            ob_start(); // Start output buffering
            imagejpeg($image, null, $quality); // Output the image to the buffer
            $imageData = ob_get_contents(); // Get the contents of the buffer
            ob_end_clean(); // Clean the buffer

            // Check the current size
            $currentSize = strlen($imageData);
            if ($currentSize > $targetSize) {
                $quality -= $step; // Decrease quality
            }
        } while ($currentSize > $targetSize && $quality > 0);

        // Save the compressed image back to the file
        imagejpeg($image, $imagePath, $quality);

        // Free up memory
        imagedestroy($image);
    }


    // get all image using carid
    public function getImages($carID)
    {


        $imageModel = new ImageModel();


        // retrive images using car id 

        $images = $imageModel->where('car_id', $carID)->findAll();


        if (empty($images)) {
            return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)->setJSON(['message' => 'No images found for the car']);
        }

        return $this->response->setStatusCode(ResponseInterface::HTTP_OK)->setJSON($images);
    }


    //get first image using car id

    public function getFirstImage($carID)
    {

        $ImageModel = new ImageModel();

        $image = $ImageModel->where('car_id', $carID)->first();

        if (empty($image)) {
            return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)->setJSON(['message' => 'No images found for the car']);
        }
        return $this->response->setStatusCode(ResponseInterface::HTTP_OK)->setJSON($image);
    }
}
