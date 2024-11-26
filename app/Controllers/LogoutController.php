<?php

namespace App\Controllers;

class LogoutController extends BaseController
{
    public function index()
    {
        // Destroy session data
        $this->session->destroy();

        // Redirect to login page
        return redirect()->to('/login');
    }
}
