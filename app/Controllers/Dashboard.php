<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\ProduksiMod;
use App\Models\TayangMod;

class Dashboard extends BaseController
{
    public function index()
    {
        // Produksi
        $model = new ProduksiMod();
        $model2 = new TayangMod();
        $data['tanggal']  = date('Y-m-d');
        $data['sekarang'] = date('ymd');
        $data['jadwal'] = $model->getProduksi();
        $tanggal  = date('D');

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
        $data['tambah'] = "yes";
        $data['judulTemp'] = "Dashboard";
        echo view('admin/v_header', $data);
        echo view('admin/v_admin', $data);
        echo view('admin/v_footer', $data);
    }
}
