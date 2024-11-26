<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\SubCategoryModel;

class Category extends ResourceController
{
    use ResponseTrait;
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }
    public function index()
    {
        $model = new CategoryModel();
        $data = $model->findAll();
        return $this->respond($data);
    }

    public function show($id = null)
    {
        $model = new CategoryModel();
        $data = $model->find($id);
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Category not found');
        }
    }


    public function create()
    {
        if (!$this->session->has('user') || !$this->session->has('token')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Page not found');
        }
        // Get form data
        $categoryName = $this->request->getPost('categoryName');
        $categoryImage = $this->request->getFile('categoryImage');

        // Validate input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'categoryName' => 'required|min_length[3]|max_length[255]',
            'categoryImage' => 'uploaded[categoryImage]|is_image[categoryImage]|mime_in[categoryImage,image/jpg,image/jpeg,image/png]|max_size[categoryImage,2048]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return $this->failValidationErrors($validation->getErrors());
        }

        // Save the category (database interaction)
        $model = new CategoryModel();
        $data = [
            'category_name' => $categoryName,
            'status' => 'active', // or any default status
        ];

        // Handle file upload
        if ($categoryImage && $categoryImage->isValid() && !$categoryImage->hasMoved()) {
            // Set the upload path
            $uploadPath = FCPATH . 'uploads/category';

            // Check if the directory exists, if not create it
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }

            // Generate a random file name
            $fileName = $categoryImage->getRandomName();

            // Move the file to the public/uploads/category directory
            $categoryImage->move($uploadPath, $fileName);

            // Resize the image to a fixed size (e.g., 150x150 pixels)
            \Config\Services::image()
                ->withFile($uploadPath . '/' . $fileName)
                ->resize(90, 98, true, 'height') // Adjust the size as needed
                ->save($uploadPath . '/' . $fileName);

            // Save the file URL to the database
            $data['image_url'] = base_url('uploads/category/' . $fileName);
        }

        if ($model->save($data)) {
            return redirect()->to('/admin/category')->with('message', 'Category created successfully');
        } else {
            return $this->failServerError('Failed to create category');
        }
    }


    public function getAll()
    {
        $category = new CategoryModel();
        $results = $category->getCategoriesWithSubcategories();

        $data['categories'] = [];

        foreach ($results as $result) {
            $mainCategoryId = $result['id'];

            if (!isset($data['categories'][$mainCategoryId])) {
                $data['categories'][$mainCategoryId] = [
                    'id' => $result['id'],
                    'category_name' => $result['category_name'],
                    'status' => $result['status'],
                    'created_date' => $result['created_date'],
                    'sub_categories' => [],
                    'image_url' => $result['image_url']
                ];
            }

            if ($result['sub_category_id']) {
                $data['categories'][$mainCategoryId]['sub_categories'][] = [
                    'id' => $result['sub_category_id'],
                    'model_name' => $result['model_name'],
                    'status' => $result['sub_status'],
                    'main_category_id' => $result['id'],
                    'created_date' => $result['sub_created_date']

                ];
            }
        }

        $data['categories'] = array_values($data['categories']);
        return $this->respond($data);
    }

    public function update($id = null)
    {
        // Check for user session
        if (!$this->session->has('user') || !$this->session->has('token')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Page not found');
        }

        $model = new CategoryModel();

        // Get JSON data
        $data = $this->request->getJSON(true);
        $data['id'] = $id;

        // Handle the image file if it's uploaded
        $file = $this->request->getFile('categoryImage');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            // Set the new file name and move it to the designated folder
            $newName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads/category', $newName);

            // Save the image path in the data array
            $data['image_url'] = 'uploads/category' . $newName;
        }

        // Update the category details including image
        if ($model->save($data)) {
            return $this->respond(['message' => 'Category updated']);
        } else {
            log_message('error', json_encode($model->errors()));
            return $this->failValidationErrors($model->errors());
        }
    }


    public function delete($id = null)
    {
        if (!$this->session->has('user') || !$this->session->has('token')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Page not found');
        }
        $db = \Config\Database::connect();
        if ($id !== null) {
            $categoryModel = new CategoryModel();
            $subcategoryModel = new SubCategoryModel();

            try {

                $sql = "DELETE FROM tbl_cars WHERE sub_category_id IN (
                                SELECT id FROM tbl_sub_category WHERE main_category_id = $id
                              );";

                $query = $db->query($sql, [$id]);

                $subcategoryModel->where('main_category_id', $id)->delete();

                $categoryModel->delete($id);

                return $this->respond(['message' => 'Category and its subcategories deleted']);

                if ($query) {
                    return $this->respond(['message' => 'Category and its subcategories deleted']);
                } else {
                    return $this->fail(['message' => 'Failed to delete category']);
                }
            } catch (\Exception $e) {
                return $this->fail(['message' => 'An error occurred: ' . $e->getMessage()]);
            }
        } else {
            return $this->failNotFound('Category not found');
        }
    }



    public function category_page()
    {

        // Use the session service initialized in BaseController
        if (!$this->session->has('user') || !$this->session->has('token')) {
            // Debugging information
            echo "Session User: " . print_r($this->session->get('user'), true) . "<br>";
            echo "Session Token: " . print_r($this->session->get('token'), true) . "<br>";
            return redirect()->to('/login');
        }
        $category = new CategoryModel();
        $results = $category->getCategoriesWithSubcategories();

        $data['categories'] = [];

        foreach ($results as $result) {
            $mainCategoryId = $result['id'];

            if (!isset($data['categories'][$mainCategoryId])) {
                $data['categories'][$mainCategoryId] = [
                    'id' => $result['id'],
                    'category_name' => $result['category_name'],
                    'status' => $result['status'],
                    'created_date' => $result['created_date'],
                    'sub_categories' => [],
                    'image_url' => $result['image_url']
                ];
            }

            if ($result['sub_category_id']) {
                $data['categories'][$mainCategoryId]['sub_categories'][] = [
                    'id' => $result['sub_category_id'],
                    'model_name' => $result['model_name'],
                    'status' => $result['sub_status'],
                    'main_category_id' => $result['id'],
                    'created_date' => $result['sub_created_date']

                ];
            }
        }

        $data['categories'] = array_values($data['categories']);
        //return $this->respond($data);
        return view('category', $data);
        // echo json_encode($data);
        if (empty($subcategories)) {
            return $this->response->setJSON(['message' => 'No subcategories']);
        } else {
            return $this->response->setJSON($subcategories);
        }
    }

    public function getImage($categoryId = null)
    {
        if ($categoryId === null) {
            return $this->fail('Category ID is required');
        }

        $model = new CategoryModel();
        $image = $model->getImageByCategoryId($categoryId);

        if ($image) {
            return $this->respond($image);
        } else {
            return $this->failNotFound('Image not found for the given category');
        }
    }
    public function updateName()
    {
        // Check if the user is logged in and has a valid token
        if (!$this->session->has('user') || !$this->session->has('token')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Page not found');
        }

        // Ensure that category ID is provided
        $catgId = $this->request->getPost('catg_id');
        if ($catgId === null) {
            return $this->fail('Category ID is required');
        }

        // Load the model
        $model = new CategoryModel();

        // Prepare the data for updating
        $updateData = [
            'category_name' => $this->request->getPost('category_name'),
        ];

        // Handle file upload if a new image is uploaded
        $categoryImage = $this->request->getFile('categoryImage');

        // Check if the image is valid and has not been moved
        if ($categoryImage) {
            // Set the upload path
            $uploadPath = FCPATH . 'uploads/category';

            // Check if the directory exists; if not, create it
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }

            // Generate a random file name
            $fileName = $categoryImage->getRandomName();

            // Move the file to the public/uploads/category directory
            if ($categoryImage->move($uploadPath, $fileName)) {
                // Resize the image to a fixed size (e.g., 90x98 pixels)
                \Config\Services::image()
                    ->withFile($uploadPath . '/' . $fileName)
                    ->save($uploadPath . '/' . $fileName);

                // Save the file URL to the update data
                $updateData['image_url'] = base_url('uploads/category/' . $fileName);
            } else {
                return $this->failServerError('Failed to move uploaded file.');
            }
        } else {
            // If no new image, retain the existing image URL from the database
            $category = $model->find($catgId);
            if ($category) {
                $updateData['image_url'] = $category['image_url'];
            } else {
                return $this->failNotFound('Category not found');
            }
        }

        // Update the category in the database
        if ($model->update($catgId, $updateData)) {
            return redirect()->to('/admin/category')->with('message', 'Category updated successfully');
        } else {
            log_message('error', json_encode($model->errors()));
            return $this->failValidationErrors($model->errors());
        }
    }

    public function updateNamesub()
    {
        if (!$this->session->has('user') || !$this->session->has('token')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Page not found');
        }
        $subcatgId = $this->request->getPost('subcatg_id'); // Ensure this matches your JavaScript
        $modelName = $this->request->getPost('model_name');

        if (empty($subcatgId) || empty($modelName)) {
            return $this->fail('Sub-Category ID and Model Name are required');
        }

        $model = new SubCategoryModel();

        $updateData = [
            'model_name' => $modelName
        ];


        if ($model->update($subcatgId, $updateData)) {
            return redirect()->to('/admin/category')->with('message', 'Category created successfully');
        } else {

            log_message('error', json_encode($model->errors()));
            return $this->failValidationErrors($model->errors());
        }
    }


}