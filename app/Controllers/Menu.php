<?php

namespace App\Controllers;

use App\Models\NewsModel;
use App\Models\SetelanModel;
use App\Models\TayangMod;

class Menu extends BaseController
{
    public function news()
    {
        $model = new NewsModel();
        $model2 = new TayangMod();
        $model3 = new SetelanModel();
        $data['tanggal']  = date('Y-m-d');
        $tanggal  = date('D');
        $data['title'] = 'Batik TV News';
        $data['logo'] = '/assets/img/logo2.svg';
        $data['lebar'] = '230';

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
            echo view('home/header', $data);
            echo view('home/news', $data);
            echo view('home/footer', $data);
        }
    }

    public function program()
    {
        $model = new SetelanModel();
        $model2 = new TayangMod();
        $model3 = new NewsModel();

        $tanggal  = date('D');
        $data['title'] = 'Daftar Program';
        $data['logo'] = '/assets/img/logo.svg';
        $data['lebar'] = '160';

        $data['setelan'] = $model->getWhere(['id' => 1])->getRow();
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
        if ($data['news'] = $model3->where('post_type', 'article')->orderBy('post_id', 'DESC')) {
            $data['news'] = $model3->where('post_status', 'Aktif')->findAll(7);
        }

        echo view('home/header', $data);
        echo view('home/program', $data);
        echo view('home/footer', $data);
    }

    public function jadwal()
    {
        $model = new TayangMod();
        $model2 = new SetelanModel();
        $model3 = new NewsModel();

        $data['title'] = 'Jadwal Tayang Program';
        $data['logo'] = '/assets/img/logo.svg';
        $data['lebar'] = '160';
        $data['setelan'] = $model2->getWhere(['id' => 1])->getRow();

        $data['senin'] = $model->where('hari', 'senin')->orderBy('jam', 'ASC')->findAll();
        $data['selasa'] = $model->where('hari', 'selasa')->orderBy('jam', 'ASC')->findAll();
        $data['rabu'] = $model->where('hari', 'rabu')->orderBy('jam', 'ASC')->findAll();
        $data['kamis'] = $model->where('hari', 'kamis')->orderBy('jam', 'ASC')->findAll();
        $data['jumat'] = $model->where('hari', 'jumat')->orderBy('jam', 'ASC')->findAll();
        $data['sabtu'] = $model->where('hari', 'sabtu')->orderBy('jam', 'ASC')->findAll();
        $data['minggu'] = $model->where('hari', 'minggu')->orderBy('jam', 'ASC')->findAll();

        if ($data['news'] = $model3->where('post_type', 'article')->orderBy('post_id', 'DESC')) {
            $data['news'] = $model3->where('post_status', 'Aktif')->findAll(7);
        }

        echo view('home/header', $data);
        echo view('home/jadwal', $data);
        echo view('home/footer', $data);
    }

    public function profil()
    {
        $model = new NewsModel();
        $model2 = new TayangMod();
        $model3 = new SetelanModel();

        $tanggal  = date('D');
        $data['title'] = 'Profil Batik TV';
        $data['logo'] = '/assets/img/logo.svg';
        $data['lebar'] = '160';
        $data['setelan'] = $model3->getWhere(['id' => 1])->getRow();

        if ($data['news'] = $model->where('post_type', 'article')->orderBy('post_id', 'DESC')) {
            $data['news'] = $model->where('post_status', 'Aktif')->findAll(7);
        }

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
        echo view('home/header', $data);
        echo view('home/profil', $data);
        echo view('home/footer', $data);
    }
}
