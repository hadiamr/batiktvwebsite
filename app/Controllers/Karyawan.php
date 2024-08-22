<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\KaryawanMod;
use App\Models\JabatanMod;

class Karyawan extends BaseController
{
    /** Data Karyawan */
    public function view()
    {
        $model = new KaryawanMod();
        $data['tambah'] = "no";
        $data['jenis'] = "karyawan";
        $data['judulTemp'] = "Karyawan";
        if (!$this->validate([])) {
            $data['validation'] = $this->validator;
            $data['karyawan'] = $model->orderBy('nama_lengkap', 'ASC')->asObject()->paginate(15, 'no');
            $data['pager'] = $model->pager;
            echo view('admin/v_header', $data);
            echo view('admin/karyawan', $data);
            echo view('admin/v_footer', $data);
        }
    }

    public function tambah()
    {
        $model = new JabatanMod();
        helper('form');
        $data['tambah'] = "yes";
        $data['judulTemp'] = "Tambah Karyawan";
        $data['jabatan'] = $model->orderBy('nama_jabatan', 'ASC')->findAll();
        echo view('admin/v_header', $data);
        echo view('admin/karyawanAdd', $data);
        echo view('admin/v_footer', $data);
    }

    public function simpan()
    {
        $model = new KaryawanMod();
        $model2 = new AdminModel();
        $faker = \Faker\Factory::create(10);
        $user = $this->request->getPost('username');
        $email = $user . '@user.com';
        $data = array(
            'username' => $this->request->getPost('username'),
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'phone' => $this->request->getPost('phone'),
            'jabatan1' => $this->request->getPost('jabatan1'),
            'jabatan2' => $this->request->getPost('jabatan2'),
            'jabatan3' => $this->request->getPost('jabatan3')
        );
        $data2 = array(
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'username' => $this->request->getPost('username'),
            'password' => password_hash($user, PASSWORD_DEFAULT),
            'role' => 'user',
            'email' => $email
        );
        $model->insert($data);
        $model2->insert($data2);
        return redirect()->to('/karyawan/view')->with('berhasil', 'Data Karyawan Berhasil disimpan');
    }

    public function edit($username)
    {
        $model = new KaryawanMod();
        $model2 = new JabatanMod();
        helper('form');
        $data['tambah'] = "yes";
        $data['karyawan'] = $model->getWhere(['username' => $username])->getRow();
        $data['jabatan'] = $model2->orderBy('nama_jabatan', 'ASC')->findAll();
        $data['judulTemp'] = "Edit Karyawan";
        echo view('admin/v_header', $data);
        echo view('admin/karyawanEdit', $data);
        echo view('admin/v_footer', $data);
    }

    public function update()
    {
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('/karyawan/view');
        }
        $model = new KaryawanMod();
        $model2 = new AdminModel();
        $usr = $this->request->getPost('usr');
        $data = array(
            'username' => $this->request->getPost('username'),
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'phone' => $this->request->getPost('phone'),
            'jabatan1' => $this->request->getPost('jabatan1'),
            'jabatan2' => $this->request->getPost('jabatan2'),
            'jabatan3' => $this->request->getPost('jabatan3')
        );
        $data2 = array(
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'username' => $this->request->getPost('username'),
        );
        $model->update($usr, $data);
        $model2->update($usr, $data2);
        return redirect()->to('/karyawan/view')->with('berhasil', 'Data Karyawan Berhasil diubah');
    }

    public function hapus($id)
    {
        $model = new KaryawanMod();
        $model->delete($id);
        return redirect()->to('/karyawan/view')->with('berhasil', 'Data Karyawan Berhasil dihapus');
    }
}
