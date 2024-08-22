<?php

namespace App\Controllers;

use App\Models\NewsModel;
use App\Models\SetelanModel;
use App\Models\TayangMod;

class News extends BaseController
{
    public function index()
    {
        $model = new NewsModel();
        $model2 = new TayangMod();
        $model3 = new SetelanModel();
        $data['tanggal']  = date('Y-m-d');
        $tanggal  = date('D');

        if (!$this->validate([])) {
            $data['validation'] = $this->validator;
            // Tayang
            switch ($tanggal) {
                case 'Mon':
                    $query = $model2->where('hari', 'senin');
                    $data['hari'] = 'Senin';
                    break;
                case 'Tue':
                    $query = $model2->where('hari', 'selasa');
                    $data['hari'] = 'Selasa';
                    break;
                case 'Wed':
                    $query = $model2->where('hari', 'rabu');
                    $data['hari'] = 'Rabu';
                    break;
                case 'Thu':
                    $query = $model2->where('hari', 'kamis');
                    $data['hari'] = 'Kamis';
                    break;
                case 'Fri':
                    $query = $model2->where('hari', 'jumat');
                    $data['hari'] = 'Jumat';
                    break;
                case 'Sat':
                    $query = $model2->where('hari', 'sabtu');
                    $data['hari'] = 'Sabtu';
                    break;
                case 'Sun':
                    $query = $model2->where('hari', 'minggu');
                    $data['hari'] = 'Minggu';
                    break;
            }
            $data['tayang'] = $query->orderBy('jam', 'ASC')->findAll();
            $data['setelan'] = $model3->getWhere(['id' => 1])->getRow();
            if ($data['news'] = $model->where('post_type', 'article')->orderBy('post_id', 'DESC')) {
                $data['news'] = $model->where('post_status', 'Aktif')->asObject()->paginate(6, 'no');
                $data['pager'] = $model->pager;
            }
            echo view('home/news', $data);
            echo view('home/footer', $data);
        }
    }
}
