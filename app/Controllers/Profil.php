<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\KaryawanMod;

class Profil extends BaseController
{
    public function view()
    {
        $model = new AdminModel();
        $model2 = new KaryawanMod();
        helper('form');
        $data['tambah'] = "yes";
        $data['judulTemp'] = "Profil";
        $id = session()->get('akun_id');
        $user = session()->get('akun_username');
        $data['profil'] = $model->getWhere(['id' => $id])->getRow();
        $data['profil2'] = $model2->getWhere(['username' => $user])->getRow();
        echo view('admin/v_header', $data);
        echo view('admin/profil', $data);
        echo view('admin/v_footer', $data);
    }

    public function simpan()
    {
        $model = new KaryawanMod();
        $model2 = new AdminModel();
        $usr = $this->request->getPost('username');
        $pass = $this->request->getPost('password');
        $validation = $this->validate([
            'foto' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto,4096]'
        ]);
        if ($validation == FALSE) {
            $data = array(
                'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                'username' => $this->request->getPost('username'),
                'phone' => $this->request->getPost('handphone')
            );
            if (empty($pass)) {
                $data2 = array(
                    'username' => $this->request->getPost('username'),
                    'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                    'email' => $this->request->getPost('email'),
                );
            } else {
                $data2 = array(
                    'username' => $this->request->getPost('username'),
                    'password' => password_hash($pass, PASSWORD_DEFAULT),
                    'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                    'email' => $this->request->getPost('email'),
                );
            }
        } else {
            $dt = $model2->getWhere(['username' => $usr])->getRow();
            $foto = $dt->foto;
            $path = '../../public_html/admin/img/user/';
            @unlink($path . $foto);
            $upload = $this->request->getFile('foto');
            $upload->move(WRITEPATH . '../../public_html/admin/img/user/');
            $data = array(
                'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                'username' => $this->request->getPost('username'),
                'phone' => $this->request->getPost('handphone')
            );
            if (empty($pass)) {
                $data2 = array(
                    'username' => $this->request->getPost('username'),
                    'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                    'foto' =>  $upload->getName(),
                    'email' => $this->request->getPost('email')
                );
            } else {
                $data2 = array(
                    'username' => $this->request->getPost('username'),
                    'password' => password_hash($pass, PASSWORD_DEFAULT),
                    'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                    'foto' =>  $upload->getName(),
                    'email' => $this->request->getPost('email')
                );
            }
        }
        $model->update($usr, $data);
        $model2->update($usr, $data2);
        return redirect()->to('/profil/view')->with('berhasil', 'Profil Berhasil diubah');
    }
}
