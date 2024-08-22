<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JabatanMod;

class Jabatan extends BaseController
{
    /** Data Jabatan */
    public function view()
    {
        $model = new JabatanMod();
        $data['tambah'] = "yes";
        $data['jenis'] = "Jabatan";
        $data['judulTemp'] = "Jabatan";
        if (!$this->validate([])) {
            $data['validation'] = $this->validator;
            $data['jabatan'] = $model->orderBy('nama_jabatan', 'ASC')->asObject()->paginate(15, 'no');
            $data['pager'] = $model->pager;
            echo view('admin/v_header', $data);
            echo view('admin/jabatanAdd', $data);
            echo view('admin/jabatan', $data);
            echo view('admin/v_footer', $data);
        }
    }

    public function simpan()
    {
        $model = new JabatanMod();
        $data = array(
            'nama_jabatan' => $this->request->getPost('nama_jabatan'),
        );
        $model->insert($data);
        return redirect()->to('/jabatan/view')->with('berhasil', 'Data Jabatan Berhasil disimpan');
    }

    public function edit($id)
    {
        $model = new JabatanMod();
        helper('form');
        $data['tambah'] = "yes";
        $data['jabatan'] = $model->getWhere(['id' => $id])->getRow();
        $data['judulTemp'] = "Edit Data Jabatan";
        echo view('admin/v_header', $data);
        echo view('admin/jabatanEdit', $data);
        echo view('admin/v_footer', $data);
    }

    public function update()
    {
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('/Jabatan/view');
        }
        $model = new JabatanMod();
        $id = $this->request->getPost('id');
        $data = array(
            'nama_jabatan' => $this->request->getPost('nama_jabatan'),
        );
        $model->update($id, $data);
        return redirect()->to('/jabatan/view')->with('berhasil', 'Data Jabatan Berhasil diubah');
    }

    public function hapus($id)
    {
        $model = new JabatanMod();
        $model->delete($id);
        return redirect()->to('/jabatan/view')->with('berhasil', 'Data Jabatan Berhasil dihapus');
    }
}
