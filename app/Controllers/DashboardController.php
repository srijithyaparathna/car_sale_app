<?php

namespace App\Controllers;

use App\Models\CarModel;
use App\Models\CategoryModel;
use CodeIgniter\RESTful\ResourceController;

use App\Models\ImageModel;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function index()
    {
        // Use the session service initialized in BaseController
        if (!$this->session->has('user') || !$this->session->has('token')) {
            // Debugging information
            echo "Session User: " . print_r($this->session->get('user'), true) . "<br>";
            echo "Session Token: " . print_r($this->session->get('token'), true) . "<br>";
            return redirect()->to('/login');
        } else {
            return view('dashboard');
        }
    }
}