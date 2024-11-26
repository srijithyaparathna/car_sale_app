<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\CarModel;
use App\Models\CategoryModel;
use App\Models\SubCategoryModel;
use App\Models\InquiryModel;
use App\Models\ImageModel;
use CodeIgniter\HTTP\ResponseInterface;

class EditCarController extends ResourceController
{
    public function update($id = null)
    {
        $model = new CarModel();

        // Collect data from the request
        $data = [
            'title' => $this->request->getVar('title'),
            'main_category_id' => $this->request->getVar('main-category'),
            'sub_category_id' => $this->request->getVar('sub-category'),
            'type' => $this->request->getVar('type'),
            'year' => $this->request->getVar('year'),
            'condition' => $this->request->getVar('condition'),
            'stock_number' => $this->request->getVar('stock_number'),
            'vin_number' => $this->request->getVar('vin_number'),
            'mileage' => $this->request->getVar('mileage'),
            'transmission' => $this->request->getVar('transmission'),
            'driver_type' => $this->request->getVar('driver_type'),
            'engine_size' => $this->request->getVar('engine_size'),
            'cylinders' => $this->request->getVar('cylinders'),
            'fuel_type' => $this->request->getVar('fuel_type'),
            'doors' => $this->request->getVar('doors'),
            'color' => $this->request->getVar('color'),
            'seats' => $this->request->getVar('seats'),
            'city_mpg' => $this->request->getVar('city_mpg'),
            'highway_mpg' => $this->request->getVar('highway_mpg'),
            'metakeywords' => $this->request->getVar('metakeywords'),
            'description' => $this->request->getVar('description'),
            'price_type' => $this->request->getVar('price_type'),
            'regular_price' => $this->request->getVar('regular_price'),
            'sale_price' => $this->request->getVar('sale_price'),
            'features' => json_encode($this->formatFeatures($this->request->getVar('features'))),
            'ad_status' => $this->request->getVar('ad_status') ?? 'published',
        ];

        log_message('info', 'Updating car with ID: ' . $id . ' Data: ' . json_encode($data));

        // Update the car with the given ID
        if ($model->update($id, $data)) {
            return view('editCar', ['message' => 'Car updated successfully', 'car' => $data]);
        } else {
            log_message('error', 'Error updating car: ' . json_encode($model->errors()));
            return view('editCar', ['errors' => $model->errors(), 'car' => $data]);
        }
    }

    private function getCategoryData()
    {
        $categoryModel = new CategoryModel();
        $results = $categoryModel->getCategoriesWithSubcategories();

        $categories = [];
        $subCategories = [];

        foreach ($results as $result) {
            $mainCategoryId = $result['id'];

            if (!isset($categories[$mainCategoryId])) {
                $categories[$mainCategoryId] = [
                    'id' => $result['id'],
                    'category_name' => $result['category_name'],
                    'status' => $result['status'],
                    'created_date' => $result['created_date'],
                    'sub_categories' => []
                ];
            }

            if ($result['sub_category_id']) {
                $categories[$mainCategoryId]['sub_categories'][] = [
                    'id' => $result['sub_category_id'],
                    'model_name' => $result['model_name'],
                    'status' => $result['sub_status'],
                    'main_category_id' => $result['id'],
                    'created_date' => $result['sub_created_date']
                ];
                // Also store subcategories in a separate array if needed
                $subCategories[] = [
                    'id' => $result['sub_category_id'],
                    'model_name' => $result['model_name'],
                    'main_category_id' => $mainCategoryId
                ];
            }
        }

        return [
            'categories' => array_values($categories), // Return the categories array
            'subCategories' => $subCategories // Return the subcategories array
        ];
    }



    private function formatFeatures($features)
    {
        // Process the features as needed
        // This function should return the correctly formatted features array or object
        return $features; // Example return, adjust as needed
    }

    // Get a specific car
    public function show($id = null)
    {
        $carModel = new CarModel();

        // Retrieve car details
        $car = $carModel->find($id);

        // Check if car exists
        if (!$car) {
            return $this->failNotFound('Car not found');
        }

        // Retrieve car images
        $imageModel = new ImageModel();
        $images = $imageModel->where('car_id', $id)->findAll();

        // Retrieve main category
        $maincategoryModel = new CategoryModel();
        $maincategory = $maincategoryModel->where('id', $car['main_category_id'])->first();

        // Retrieve sub-category
        $subCategoryModel = new SubCategoryModel();
        $subCategory = $subCategoryModel->where('id', $car['sub_category_id'])->first();

        // Decode features
        $car['features'] = json_decode($car['features'], true);

        // Process images into separate fields with numeric keys
        $indexedImages = [];
        foreach ($images as $index => $image) {
            if ($image['type'] === 'image') {
                $indexedImages[$index + 1] = $image['img_url'];
            }
        }

        // Retrieve category data
        $categoriesData = $this->getCategoryData(); // Get the categories and subcategories data

        // Combine car details and images with the image index
        $data = [
            'car' => $car,
            'images' => $images,
            'indexedImages' => $indexedImages,
            'maincategory' => $maincategory,
            'subCategory' => $subCategory,
            'categories' => $categoriesData['categories'], // Pass the categories array
            'subCategories' => $categoriesData['subCategories'] // Pass the subcategories array
        ];

        // Return response with status code
        if (empty($images)) {
            return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)->setJSON([
                'message' => 'No images found for the car',
                'car' => $car
            ]);
        }

        //  return $this->respond($data);
        return view('editCar', $data); // Return the view with the data
    }

    public function editImages($carId = null)
    {
        $imageModel = new ImageModel();

        // Validate car ID
        if (!$carId) {
            return $this->response->setStatusCode(ResponseInterface::HTTP_BAD_REQUEST)->setJSON(['message' => 'Car ID is required']);
        }

        // Retrieve the uploaded files and form variables
        $files = $this->request->getFiles();
        $existingImageIds = $this->request->getVar('image_id'); // Get existing image IDs
        $existingDocumentId = $this->request->getVar('existing_document_id'); // Get existing document ID
        $youtubeUrl = $this->request->getVar('img_url');

        // Path to the watermark image
        $watermarkPath = FCPATH . '/assets/images/watermark/watermark2.png';

        // Check if the watermark image exists
        if (!file_exists($watermarkPath)) {
            log_message('error', 'Watermark path: ' . $watermarkPath);
            return $this->response->setStatusCode(ResponseInterface::HTTP_BAD_REQUEST)->setJSON(['message' => 'Watermark image not found']);
        }

        // Process the uploaded files (if any)
        if (isset($files['images'])) {
            foreach ($files['images'] as $index => $file) {
                // Check if the file is valid
                if ($file->isValid() && !$file->hasMoved()) {
                    // Determine the file type and get the corresponding ID
                    $fileType = $this->request->getVar('type' . ($index + 1)); // Get file type ('image' or 'Document')
                    $imageId = ($fileType === 'Document') ? $existingDocumentId : $existingImageIds[$index] ?? null;

                    // If replacing an existing image or document
                    if ($imageId) {
                        // Find the old file
                        $oldFile = $imageModel->find($imageId);
                        if ($oldFile) {
                            // Delete the old file
                            $oldFilePath = FCPATH . $oldFile['img_url'];
                            if (file_exists($oldFilePath)) {
                                unlink($oldFilePath); // Delete the old file
                            }
                        }
                    }

                    // Prepare data for insertion into the database
                    $fileData = [
                        'type' => $fileType,
                        'img_url' => '', // Placeholder for the file URL
                        'status' => 'active',
                        'car_id' => $carId,
                    ];

                    // Create a folder for the car if it doesn't exist in the public directory
                    $uploadPath = FCPATH . 'uploads/' . $carId;
                    if (!is_dir($uploadPath)) {
                        mkdir($uploadPath, 0755, true);
                    }

                    // Move the uploaded file to the car's folder
                    $newFileName = $file->getRandomName();
                    $filePath = $uploadPath . '/' . $newFileName;
                    $file->move($uploadPath, $newFileName);

                    // Set the new URL for the uploaded file
                    $fileData['img_url'] = 'uploads/' . $carId . '/' . $newFileName;

                    // Add a watermark to the uploaded file
                    $this->addWatermark($filePath, $watermarkPath);

                    // Compress the file
                    $this->compressImage($filePath, 1 * 1024 * 1024); // Compress to ~1 MB

                    // Insert or update file data in the database
                    if ($imageId) {
                        $imageModel->update($imageId, $fileData); // Update existing file
                    } else {
                        $imageModel->insert($fileData); // Insert new file
                    }
                }
            }
        }

        // Process the YouTube URL
        if (isset($youtubeUrl)) {
            // Check if the existing YouTube URL already exists in the database
            $existingYoutubeImage = $imageModel->where('type', 'YouTube_URL')->where('car_id', $carId)->first();

            // If it exists, update it; otherwise, insert a new one
            if ($existingYoutubeImage) {
                // Update the existing record with the new YouTube URL (or an empty string if it's empty)
                $imageModel->update($existingYoutubeImage['id'], [
                    'img_url' => $youtubeUrl, // This can be an empty string
                    'status' => 'active'
                ]);
            } else {
                // Insert a new record with the YouTube URL (or an empty string)
                $imageModel->insert([
                    'type' => 'YouTube_URL',
                    'img_url' => $youtubeUrl, // This can be an empty string
                    'status' => 'active',
                    'car_id' => $carId,
                ]);
            }
        }


        // Prepare response message and redirect
        return redirect()->to('admin/car_listing');
    }
    // The existing addWatermark and compressImage functions should be included here

    private function addWatermark($imagePath, $watermarkPath)
    {
        // Check if the image and watermark files exist
        if (!file_exists($imagePath) || !file_exists($watermarkPath)) {
            throw new \RuntimeException('Image or watermark file does not exist.');
        }
        // Load the main image from the given file path
        $image = imagecreatefromstring(file_get_contents($imagePath));
        // Load the watermark from the given file path
        $watermark = imagecreatefromstring(file_get_contents($watermarkPath));
        // Get dimensions of the main image (width and height)
        $imageWidth = imagesx($image);
        $imageHeight = imagesy($image);
        // Get dimensions of the watermark (width and height)
        $watermarkOriginalWidth = imagesx($watermark);
        $watermarkOriginalHeight = imagesy($watermark);
        // Define the size of the watermark as 20% of the main image width
        $watermarkWidth = $imageWidth * 0.5;
        // Maintain the watermark's aspect ratio when resizing
        $aspectRatio = $watermarkOriginalHeight / $watermarkOriginalWidth;
        $watermarkHeight = $watermarkWidth * $aspectRatio;
        // Create a new true color image for the resized watermark
        $resizedWatermark = imagecreatetruecolor($watermarkWidth, $watermarkHeight);
        // Preserve transparency in the resized watermark
        imagesavealpha($resizedWatermark, true);
        $transColor = imagecolorallocatealpha($resizedWatermark, 0, 0, 0, 127); // Fully transparent color
        imagefill($resizedWatermark, 0, 0, $transColor);
        // Resize the original watermark to fit the new dimensions
        imagecopyresampled(
            $resizedWatermark,   // Destination image (resized)
            $watermark,          // Source image (original watermark)
            0,
            0,                // Destination x and y (top left of the resized watermark)
            0,
            0,                // Source x and y (top left of the original watermark)
            $watermarkWidth,     // New width of the resized watermark
            $watermarkHeight,    // New height of the resized watermark
            $watermarkOriginalWidth,  // Original width of the watermark
            $watermarkOriginalHeight  // Original height of the watermark
        );
        // *** Update: Calculate position for the watermark (center of the image) ***
        // Calculate the x-coordinate to center the watermark horizontally
        $destX = ($imageWidth / 2) - ($watermarkWidth / 2);
        // Calculate the y-coordinate to center the watermark vertically
        $destY = ($imageHeight / 2) - ($watermarkHeight / 2);
        // Merge the watermark with the main image at the calculated position
        imagecopy(
            $image,               // Destination image (main image)
            $resizedWatermark,     // Source image (resized watermark)
            $destX,
            $destY,        // Destination x and y (center of the image)
            0,
            0,                 // Source x and y (top left of the resized watermark)
            $watermarkWidth,       // Width of the watermark
            $watermarkHeight       // Height of the watermark
        );
        // Save the final image with the watermark to the same path
        imagepng($image, $imagePath);
        // Free up memory used by the images
        imagedestroy($image);
        imagedestroy($watermark);
        imagedestroy($resizedWatermark);
    }

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




    public function update_page_2($id = null)
    {
        $model = new CarModel();
        $imageModel = new ImageModel();

        // Collect data from the request 
        $data = [
            'title' => $this->request->getVar('title'),
            'main_category_id' => $this->request->getVar('main-category'),
            'sub_category_id' => $this->request->getVar('sub-category'),
            'type' => $this->request->getVar('type'),
            'year' => $this->request->getVar('year'),
            'condition' => $this->request->getVar('condition'),
            'stock_number' => $this->request->getVar('stock_number'),
            'vin_number' => $this->request->getVar('vin_number'),
            'mileage' => $this->request->getVar('mileage'),
            'transmission' => $this->request->getVar('transmission'),
            'driver_type' => $this->request->getVar('driver_type'),
            'engine_size' => $this->request->getVar('engine_size'),
            'cylinders' => $this->request->getVar('cylinders'),
            'fuel_type' => $this->request->getVar('fuel_type'),
            'doors' => $this->request->getVar('doors'),
            'color' => $this->request->getVar('color'),
            'seats' => $this->request->getVar('seats'),
            'city_mpg' => $this->request->getVar('city_mpg'),
            'highway_mpg' => $this->request->getVar('highway_mpg'),
            'description' => $this->request->getVar('description'),
            'price_type' => $this->request->getVar('price_type'),
            'regular_price' => $this->request->getVar('regular_price'),
            'sale_price' => $this->request->getVar('sale_price'),
            'features' => json_encode($this->formatFeatures($this->request->getVar('features'))),
            'ad_status' => $this->request->getVar('ad_status') ?? 'published',
        ];

        // Validate the data 
        if (!$id) {
            return $this->response->setStatusCode(ResponseInterface::HTTP_BAD_REQUEST)
                ->setJSON(['message' => 'Car ID is required']);
        }

        // Retrieve the uploaded files and form variables
        $files = $this->request->getFiles();
        $existingImageIds = $this->request->getVar('image_id'); // Get existing image IDs
        $existingDocumentId = $this->request->getVar('existing_document_id'); // Get existing document ID
        $youtubeUrl = $this->request->getVar('img_url');

        // Path to the watermark image 
        $watermarkPath = FCPATH . '/assets/images/watermark/watermark2.png';

        // Check if the watermark exists in the specified path 
        if (!file_exists($watermarkPath)) {
            return $this->response->setStatusCode(ResponseInterface::HTTP_BAD_REQUEST)
                ->setJSON(['message' => 'Watermark image not found']);
        }

        // Process the uploaded files (if any)
        if (isset($files['images'])) {
            foreach ($files['images'] as $index => $file) {
                // File validation
                if ($file->isValid() && !$file->hasMoved()) {
                    // Determine the file type and get the corresponding ID
                    $fileType = $this->request->getVar('type' . ($index + 1)); // Get file type ('image' or 'Document')
                    $imageId = ($fileType === 'Document') ? $existingDocumentId : ($existingImageIds[$index] ?? null);

                    // Replacing an existing image or document
                    if ($imageId) {
                        // Find the old file 
                        $oldFile = $imageModel->find($imageId);
                        if ($oldFile) {
                            // Delete the old file
                            $oldFilePath = FCPATH . $oldFile['img_url'];
                            if (file_exists($oldFilePath)) {
                                unlink($oldFilePath); // Delete the old file
                            }
                        }
                    }

                    // Prepare data for insertion into the database
                    $fileData = [
                        'type' => $fileType,
                        'img_url' => '', // Placeholder for the file URL
                        'status' => 'active',
                        'car_id' => $id,
                    ];

                    // Create the upload file to the car's folder
                    $uploadPath = FCPATH . 'uploads/' . $id;
                    if (!is_dir($uploadPath)) {
                        mkdir($uploadPath, 0755, true);
                    }

                    // Move the uploaded file to the car's folder
                    $newFileName = $file->getRandomName();
                    $filePath = $uploadPath . '/' . $newFileName;
                    $file->move($uploadPath, $newFileName);

                    // Set the new URL for the uploaded file
                    $fileData['img_url'] = 'uploads/' . $id . '/' . $newFileName;

                    // Add a watermark to the uploaded file
                    $this->addWatermark($filePath, $watermarkPath);

                    // Compress the file
                    $this->compressImage($filePath, 1 * 1024 * 1024); // Compress to ~1 MB

                    // Insert or update file data in the database
                    if ($imageId) {
                        $imageModel->update($imageId, $fileData); // Update existing file
                    } else {
                        $imageModel->insert($fileData); // Insert new file
                    }
                }
            }
        }

        // Process the YouTube URL if provided
        if ($youtubeUrl) {
            // Check if the existing YouTube URL already exists in the database
            $existingYoutubeImage = $imageModel->where('type', 'YouTube_URL')->where('car_id', $id)->first();

            // If it exists, update it; otherwise, insert a new one
            if ($existingYoutubeImage) {
                $imageModel->update($existingYoutubeImage['id'], [
                    'img_url' => $youtubeUrl,
                    'status' => 'active'
                ]);
            } else {
                $imageModel->insert([
                    'type' => 'YouTube_URL',
                    'img_url' => $youtubeUrl,
                    'status' => 'active',
                    'car_id' => $id, // Changed to car_id
                ]);
            }
        }

        // Update the car with the given ID
        if ($model->update($id, $data)) {
            return view('editCar2', ['message' => 'Car updated successfully', 'car' => $data]);
        } else {
            log_message('error', 'Error updating car: ' . json_encode($model->errors()));
            return view('editCar2', ['errors' => $model->errors(), 'car' => $data]);
        }
    }
















    // public function view_edit_car($id = null)
    // {
    //     $data = $this->getCategoryData();

    //     // Pass the data to the view
    //     return view('editCar', $data);
    // }
}
