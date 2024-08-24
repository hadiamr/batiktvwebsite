<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NewsModel;

class Sitemap extends BaseController
{
    public function index()
    {
        $model = new NewsModel();
        $data['url'] = $model->where('post_type', 'article')->orderBy('post_id', 'DESC')->asObject();
        echo view('sitemap.xml', $data);
    }
}
