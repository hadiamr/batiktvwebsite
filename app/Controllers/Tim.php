<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TimModel;
use App\Models\KaryawanMod;
use App\Models\ProgramMod;

class Tim extends BaseController
{
    /** Data tim */
    public function view()
    {
        $model = new TimModel();
        $model2 = new ProgramMod();
        $data['tambah'] = "yes";
        $data['jenis'] = "tim";
        $data['judulTemp'] = "Tim";
        if (!$this->validate([])) {
            $data['validation'] = $this->validator;
            $data['tim'] = $model->orderBy('nama_tim', 'ASC')->findAll();
            $data['program'] = $model2->orderBy('nama_program', 'ASC')->findAll();
            echo view('admin/v_header', $data);
            echo view('admin/timAdd', $data);
            echo view('admin/tim', $data);
            echo view('admin/v_footer', $data);
        }
    }
    public function simpan()
    {
        $model = new TimModel();
        $data = array(
            'nama_tim' => $this->request->getPost('nama_tim'),
        );
        $model->insert($data);
        return redirect()->to('/tim/view')->with('berhasil', 'Data Tim Berhasil disimpan');
    }

    public function edit($id)
    {
        $model = new TimModel();
        helper('form');
        $data['tambah'] = "yes";
        $data['tim'] = $model->getWhere(['id' => $id])->getRow();
        $data['judulTemp'] = "Edit Tim";
        echo view('admin/v_header', $data);
        echo view('admin/timEdit', $data);
        echo view('admin/v_footer', $data);
    }

    public function update()
    {
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('/tim/view');
        }
        $model = new TimModel();
        $id = $this->request->getPost('id');
        $data = array(
            'nama_tim' => $this->request->getPost('nama_tim')
        );
        $model->update($id, $data);
        return redirect()->to('/tim/view')->with('berhasil', 'Data Tim Berhasil diubah');
    }

    public function hapus($id)
    {
        $model = new TimModel();
        $model->delete($id);
        return redirect()->to('/tim/view')->with('berhasil', 'Data Tim Berhasil dihapus');
    }
}
