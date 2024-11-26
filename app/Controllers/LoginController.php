<?php

namespace App\Controllers;

use App\Models\CarModel;
use App\Models\CategoryModel;
use App\Models\UserModel;
use CodeIgniter\RESTful\ResourceController;

use App\Models\ImageModel;
use CodeIgniter\HTTP\ResponseInterface;

class LoginController extends BaseController
{


    public function index()
    {
        return view('login');
    }

    public function login_function()
    {
        $userModel = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $userModel->where('username', $username)->first();
        if ($user && password_verify($password, $user['password'])) {
            $token = bin2hex(random_bytes(16));
            $this->session->set("user", $user);
            $this->session->set("token", $token);
            return redirect()->to('/admin/dashboard');
        } else {
            $this->session->setFlashdata('error', 'Invalid username or password.');
            return redirect()->back()->withInput();
        }
        //        print_r($user->username);
    }



}
