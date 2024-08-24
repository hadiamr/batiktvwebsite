<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NewsModel;

class Sitemap extends BaseController
{
    public function index()
    {
        $model = new NewsModel();
        $data['url'] = $model->get()->getResultArray();
        echo view('sitemap', $data);
    }
}
