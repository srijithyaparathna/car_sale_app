<?php

namespace App\Controllers;

use App\Models\TestimonialModel;
use CodeIgniter\RESTful\ResourceController;

class TestimonialController extends ResourceController
{
    protected $modelName = 'App\Models\TestimonialModel';
    protected $format = 'json';
    protected $session;
    protected $email;

    public function __construct() {
        $this->model = new $this->modelName();
        $this->session = \Config\Services::session();
        $this->email = \Config\Services::email();
    }

    public function index() {
        // Use the session service initialized in BaseController
        if (!$this->session->has('user') || !$this->session->has('token')) {
            // Debugging information
            echo "Session User: " . print_r($this->session->get('user'), true) . "<br>";
            echo "Session Token: " . print_r($this->session->get('token'), true) . "<br>";
            return redirect()->to('/login');
        }

        $testimonials = $this->model->findAll();

        $data['testimonials'] = $testimonials;

        return view('testimonialsList', $data);

    }

    public function create()
    {
        // Ensure the user is logged in and has a valid session
        if (!$this->session->has('user') || !$this->session->has('token')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Page not found');
        }

        // Retrieve form data
        $customerName = $this->request->getPost('customer_name');
        $customerAddress = $this->request->getPost('customer_address');
        $title = $this->request->getPost('title');
        $description = $this->request->getPost('description');
        $imgFile = $this->request->getFile('img_url');

        // Validate input data
        $validation = \Config\Services::validation();
        $validation->setRules([
            'customer_name' => 'required',
            'customer_address' => 'required',
            'title' => 'required',
            'description' => 'required',
            'img_url' => 'uploaded[img_url]|is_image[img_url]|mime_in[img_url,image/jpg,image/jpeg,image/png]|max_size[img_url,2048]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return $this->failValidationErrors($validation->getErrors());
        }

        // Save the testimonial data
        $data = [
            'customer_name' => $customerName,
            'customer_address' => $customerAddress,
            'title' => $title,
            'description' => $description,
            'status' => 'pending', // Set a default status if required
            'created_at' => date('Y-m-d H:i:s')
        ];

        // Handle image file upload
        if ($imgFile && $imgFile->isValid() && !$imgFile->hasMoved()) {
            // Define the upload path
            $uploadPath = FCPATH . 'uploads/testimonials';

            // Create the directory if it doesn't exist
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }

            // Generate a random file name and move the file to the uploads folder
            $fileName = $imgFile->getRandomName();
            $imgFile->move($uploadPath, $fileName);

            // Optionally resize the image (adjust dimensions as needed)
            \Config\Services::image()
                ->withFile($uploadPath . '/' . $fileName)
                ->resize(150, 150, true, 'height')
                ->save($uploadPath . '/' . $fileName);

            // Save the image URL in the database
            $data['img_url'] = base_url('uploads/testimonials/' . $fileName);
        }

        // Insert testimonial data into the database
        $model = new TestimonialModel();
        if ($model->save($data)) {
            return redirect()->to('/admin/testimonials')->with('message', 'Testimonial added successfully');
        } else {
            return $this->failServerError('Failed to add testimonial');
        }
    }

    public function updateTestimonial()
    {
        // Check if the user is logged in and has a valid token
        if (!$this->session->has('user') || !$this->session->has('token')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Page not found');
        }

        // Ensure that testimonial ID is provided
        $testimonialId = $this->request->getPost('testimonial_id');
        if ($testimonialId === null) {
            return $this->fail('Testimonial ID is required');
        }

        // Load the model
        $model = new TestimonialModel();

        // Prepare the data for updating
        $updateData = [
            'customer_name' => $this->request->getPost('customer_name'),
            'customer_address' => $this->request->getPost('customer_address'),
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
        ];

        // Handle file upload if a new image is uploaded
        $testimonialImage = $this->request->getFile('img_url');

        // Check if the image is valid and has not been moved
        if ($testimonialImage) {
            // Set the upload path
            $uploadPath = FCPATH . 'uploads/testimonials';

            // Check if the directory exists; if not, create it
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }

            // Generate a random file name
            $fileName = $testimonialImage->getRandomName();

            // Move the file to the public/uploads/testimonials directory
            if ($testimonialImage->move($uploadPath, $fileName)) {
                // Resize the image if necessary (e.g., 90x98 pixels)
                \Config\Services::image()
                    ->withFile($uploadPath . '/' . $fileName)
                    ->save($uploadPath . '/' . $fileName);

                // Save the file URL to the update data
                $updateData['img_url'] = base_url('uploads/testimonials/' . $fileName);
            } else {
                return $this->failServerError('Failed to move uploaded file.');
            }
        } else {
            // If no new image, retain the existing image URL from the database
            $testimonial = $model->find($testimonialId);
            if ($testimonial) {
                $updateData['img_url'] = $testimonial['img_url'];
            } else {
                return $this->failNotFound('Testimonial not found');
            }
        }

        // Update the testimonial in the database
        if ($model->update($testimonialId, $updateData)) {
            return redirect()->to('/admin/testimonials')->with('message', 'Testimonial updated successfully');
        } else {
            log_message('error', json_encode($model->errors()));
            return $this->failValidationErrors($model->errors());
        }
    }

    // Delete a testimonial
    public function delete($id = null)
    {
        // Find the testimonial by ID
        $testimonial = $this->model->find($id);

        if (!$testimonial) {
            return $this->failNotFound('Testimonial not found');
        }

        // Attempt to delete the testimonial
        if ($this->model->delete($id)) {
            return $this->respond(['message' => 'Testimonial deleted successfully']);
        } else {
            log_message('error', 'Error deleting testimonial: ' . json_encode($this->model->errors()));
            return $this->failServerError('Failed to delete the testimonial');
        }
    }



}