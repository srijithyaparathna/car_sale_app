<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AboutUsController extends Controller
{
    public function aboutUs(){
        return view('about_us');
    }

}