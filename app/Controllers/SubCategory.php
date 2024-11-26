<?php

namespace App\Controllers;

use App\Models\SubCategoryModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

class SubCategory extends ResourceController
{
    use ResponseTrait;
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $model = new SubCategoryModel();
        $data = $model->findAll();
        return $this->respond($data);
    }

    public function show($id = null)
    {
        $model = new SubCategoryModel();
        $data = $model->find($id);
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Sub-category not found');
        }
    }

    public function createsub()
    {
        if (!$this->session->has('user') || !$this->session->has('token')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Page not found');
        }
        $model = new SubCategoryModel();
        $data = [
            'model_name' => $this->request->getVar('model_name'),
            'status' => $this->request->getVar('status'),
            'main_category_id' => $this->request->getVar('main_category_id'),
        ];

        if ($model->save($data)) {
            // Return success response
            return redirect()->to('/admin/category')->with('message', 'Category created successfully');
        } else {
            // Return validation errors if save fails
            return $this->response->setJSON(['errors' => $model->errors()], 400);
        }
    }

    public function getAllsub()
    {
        if (!$this->session->has('user') || !$this->session->has('token')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Page not found');
        }
        $model = new SubCategoryModel();
        $data = $model->findAll();
        return $this->respond($data);
    }

    public function updatesub($id = null)
    {
        if (!$this->session->has('user') || !$this->session->has('token')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Page not found');
        }
        $model = new SubCategoryModel();
        $data = $this->request->getJSON(true);
        $data['id'] = $id;

        if ($model->save($data)) {
            return $this->respond(['message' => 'Sub-category updated']);
        } else {
            return $this->failValidationErrors($model->errors());
        }
    }

    public function deletesub($id = null)
    {
        if (!$this->session->has('user') || !$this->session->has('token')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Page not found');
        }
        $model = new SubCategoryModel();
        $data = $model->find($id);
        if ($data) {
            $model->delete($id);
            return $this->respondDeleted(['message' => 'Sub-category deleted']);
        } else {
            return $this->failNotFound('Sub-category not found');
        }
    }

    // public function getAllWithMainCategory()
    // {
    //     $model = new SubCategoryModel();
    //     $data = $model->getSubCategoriesWithMainCategory();
    //     return $this->respond($data);
    // }
    // Assuming this is in a controller method
    public function getSubCategories($id)
    {
        if (!$this->session->has('user') || !$this->session->has('token')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Page not found');
        }
        $model = new SubCategoryModel();
        $data = $model->where('main_category_id', $id)->findAll(); // Adjust to fetch based on main_category_id

        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Sub-category not found');
        }
    }



}
