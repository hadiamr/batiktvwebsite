<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Sitemap extends BaseController
{
    public function index()
    {
        echo view('sitemap.xml');
    }
}
