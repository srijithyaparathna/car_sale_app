<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Page404 extends BaseController
{

    public function notFound(): string{
        return view('404Page');
    }
}