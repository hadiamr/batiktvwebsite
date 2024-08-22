<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SetelanModel;

class Setelan extends BaseController
{
    public function view()
    {
        $model = new SetelanModel();
        helper('form');
        $data['tambah'] = "yes";
        $data['jenis'] = "setelan";
        $data['judulTemp'] = "Setelan";
        $data['setelan'] = $model->getWhere(['id' => 1])->getRow();
        echo view('admin/v_header', $data);
        echo view('admin/setelan', $data);
        echo view('admin/v_footer', $data);
    }

    public function simpan()
    {
        $model = new SetelanModel();
        $data = array(
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'tentang1' => $this->request->getPost('tentang1'),
            'tentang2' => $this->request->getPost('tentang2'),
            'alamat' => $this->request->getPost('alamat'),
            'operasional' => $this->request->getPost('operasional'),
            'jangkauan' => $this->request->getPost('jangkauan'),
            'facebook' => $this->request->getPost('facebook'),
            'twitter' => $this->request->getPost('twitter'),
            'instagram' => $this->request->getPost('instagram'),
            'youtube' => $this->request->getPost('youtube')
        );
        $model->update(1, $data);
        return redirect()->to('/setelan/view')->with('berhasil', 'Data Berhasil disimpan');
    }
}
