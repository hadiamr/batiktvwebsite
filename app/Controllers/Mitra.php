<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MitraModel;

class Mitra extends BaseController
{
    /** Data Mitra */
    public function view()
    {
        $model = new MitraModel();
        $data['tambah'] = "no";
        $data['jenis'] = "mitra";
        $data['judulTemp'] = "Mitra";
        if (!$this->validate([])) {
            $data['validation'] = $this->validator;
            $data['mitra'] = $model->orderBy('nama', 'ASC')->asObject()->paginate(15, 'no');
            $data['pager'] = $model->pager;
            echo view('admin/v_header', $data);
            echo view('admin/mitra', $data);
            echo view('admin/v_footer', $data);
        }
    }

    public function tambah()
    {
        helper('form');
        $data['tambah'] = "yes";
        $data['judulTemp'] = "Tambah Mitra";
        echo view('admin/v_header', $data);
        echo view('admin/mitraAdd', $data);
        echo view('admin/v_footer', $data);
    }

    public function simpan()
    {
        $model = new MitraModel();
        $validation = $this->validate([
            'logo' => 'uploaded[logo]|mime_in[logo,image/jpg,image/jpeg,image/gif,image/png]|max_size[logo,4096]'
        ]);
        if ($validation == FALSE) {
            $data = array(
                'nama' => $this->request->getPost('nama')
            );
        } else {
            $upload = $this->request->getFile('logo');
            $upload->move(WRITEPATH . '../../public_html/admin/img/mitra/');
            $data = array(
                'nama' => $this->request->getPost('nama'),
                'logo' =>  $upload->getName()
            );
        }
        $model->insert($data);
        return redirect()->to('/mitra/view')->with('berhasil', 'Data Mitra Berhasil disimpan');
    }

    public function edit($id)
    {
        $model = new MitraModel();
        helper('form');
        $data['tambah'] = "yes";
        $data['mitra'] = $model->getWhere(['id' => $id])->getRow();
        $data['judulTemp'] = "Edit Mitra";
        echo view('admin/v_header', $data);
        echo view('admin/mitraEdit', $data);
        echo view('admin/v_footer', $data);
    }

    public function update()
    {
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('/mitra/view');
        }
        $model = new MitraModel();
        $id = $this->request->getPost('id');
        $validation = $this->validate([
            'logo' => 'uploaded[logo]|mime_in[logo,image/jpg,image/jpeg,image/gif,image/png]|max_size[logo,4096]'
        ]);
        if ($validation == FALSE) {
            $data = array(
                'nama' => $this->request->getPost('nama')
            );
        } else {
            $dt = $model->getWhere(['id' => $id])->getRow();
            $logo = $dt->logo;
            $path = '../public/admin/img/mitra/';
            @unlink($path . $logo);
            $upload = $this->request->getFile('logo');
            $upload->move(WRITEPATH . '../../public_html/admin/img/mitra/');
            $data = array(
                'nama' => $this->request->getPost('nama'),
                'logo' =>  $upload->getName(),
            );
        }
        $model->update($id, $data);
        return redirect()->to('/mitra/view')->with('berhasil', 'Data Mitra Berhasil diubah');
    }

    public function hapus($id)
    {
        $model = new MitraModel();
        $model->delete($id);
        return redirect()->to('/mitra/view')->with('berhasil', 'Data Mitra Berhasil dihapus');
    }
}
