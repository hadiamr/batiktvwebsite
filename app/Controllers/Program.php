<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProgramMod;
use App\Models\KaryawanMod;
use App\Models\TimModel;

class Program extends BaseController
{
    /** Data Program */
    public function view()
    {
        $model = new ProgramMod();
        $data['tambah'] = "no";
        $data['jenis'] = "program";
        $data['judulTemp'] = "Program";
        if (!$this->validate([])) {
            $data['validation'] = $this->validator;
            $data['program'] = $model->orderBy('nama_program', 'ASC')->asObject()->paginate(15, 'no');
            $data['pager'] = $model->pager;
            echo view('admin/v_header', $data);
            echo view('admin/program', $data);
            echo view('admin/v_footer', $data);
        }
    }

    public function tambah()
    {
        $model = new KaryawanMod();
        $model2 = new TimModel();
        helper('form');
        $data['tambah'] = "yes";
        $data['judulTemp'] = "Tambah Program";
        $data['host'] = $model->where("jabatan1 = 'host' OR jabatan2 = 'host' OR jabatan3 = 'host' OR jabatan1 = 'presenter' OR jabatan2 = 'presenter' OR jabatan3 = 'presenter'")->orderBy('username', 'ASC')->findAll();
        $data['cam'] = $model->where("jabatan1 = 'kameramen' OR jabatan2 = 'kameramen' OR jabatan3 = 'kameramen'")->orderBy('username', 'ASC')->findAll();
        $data['editor'] = $model->where("jabatan1 = 'editor' OR jabatan2 = 'editor' OR jabatan3 = 'editor'")->orderBy('username', 'ASC')->findAll();
        $data['tim'] = $model2->findAll();
        echo view('admin/v_header', $data);
        echo view('admin/programAdd', $data);
        echo view('admin/v_footer', $data);
    }

    public function simpan()
    {
        $model = new ProgramMod();
        $data = array(
            'nama_program' => $this->request->getPost('nama_program'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'host1' => $this->request->getPost('host1'),
            'host2' => $this->request->getPost('host2'),
            'host3' => $this->request->getPost('host3'),
            'cam1' => $this->request->getPost('cam1'),
            'cam2' => $this->request->getPost('cam2'),
            'cam3' => $this->request->getPost('cam3'),
            'editor' => $this->request->getPost('editor'),
            'tim' => $this->request->getPost('tim')
        );
        $model->insert($data);
        return redirect()->to('/program/view')->with('berhasil', 'Data Program Berhasil disimpan');
    }

    public function edit($id)
    {
        $model = new ProgramMod();
        $model2 = new KaryawanMod();
        $model3 = new TimModel();
        helper('form');
        $data['tambah'] = "yes";
        $data['program'] = $model->getWhere(['id' => $id])->getRow();
        $data['judulTemp'] = "Edit Program";
        $data['host'] = $model2->where("jabatan1 = 'host' OR jabatan2 = 'host' OR jabatan3 = 'host' OR jabatan1 = 'presenter' OR jabatan2 = 'presenter' OR jabatan3 = 'presenter'")->orderBy('username', 'ASC')->findAll();
        $data['cam'] = $model2->where("jabatan1 = 'kameramen' OR jabatan2 = 'kameramen' OR jabatan3 = 'kameramen'")->orderBy('username', 'ASC')->findAll();
        $data['editor'] = $model2->where("jabatan1 = 'editor' OR jabatan2 = 'editor' OR jabatan3 = 'editor'")->orderBy('username', 'ASC')->findAll();
        $data['tim'] = $model3->findAll();
        echo view('admin/v_header', $data);
        echo view('admin/programEdit', $data);
        echo view('admin/v_footer', $data);
    }

    public function update()
    {
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('/program/view');
        }
        $model = new ProgramMod();
        $id = $this->request->getPost('id');
        $data = array(
            'nama_program' => $this->request->getPost('nama_program'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'host1' => $this->request->getPost('host1'),
            'host2' => $this->request->getPost('host2'),
            'host3' => $this->request->getPost('host3'),
            'cam1' => $this->request->getPost('cam1'),
            'cam2' => $this->request->getPost('cam2'),
            'cam3' => $this->request->getPost('cam3'),
            'editor' => $this->request->getPost('editor'),
            'tim' => $this->request->getPost('tim')
        );
        $model->update($id, $data);
        return redirect()->to('/program/view')->with('berhasil', 'Data Program Berhasil diubah');
    }

    public function hapus($id)
    {
        $model = new ProgramMod();
        $model->delete($id);
        return redirect()->to('/program/view')->with('berhasil', 'Data Program Berhasil dihapus');
    }
}
