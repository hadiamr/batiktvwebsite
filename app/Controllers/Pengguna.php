<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\KaryawanMod;
use App\Models\RoleModel;

class Pengguna extends BaseController
{
    /** Data Pengguna */
    public function view()
    {
        $model = new AdminModel();
        $data['tambah'] = "no";
        $data['jenis'] = "pengguna";
        $data['judulTemp'] = "Pengguna";
        if (!$this->validate([])) {
            $data['validation'] = $this->validator;
            $data['pengguna'] = $model->orderBy('nama_lengkap', 'ASC')->asObject()->paginate(15, 'no');
            $data['pager'] = $model->pager;
            echo view('admin/v_header', $data);
            echo view('admin/pengguna', $data);
            echo view('admin/v_footer', $data);
        }
    }

    public function tambah()
    {
        $model = new RoleModel();
        helper('form');
        $data['tambah'] = "yes";
        $data['judulTemp'] = "Tambah Data Pengguna";
        $data['role'] = $model->orderBy('id', 'ASC')->findAll();
        echo view('admin/v_header', $data);
        echo view('admin/penggunaAdd', $data);
        echo view('admin/v_footer', $data);
    }

    public function simpan()
    {
        $model = new AdminModel();
        $pass = $this->request->getPost('password');
        $user = $this->request->getPost('username');
        $role = $this->request->getPost('role');
        if (empty($email)) {
            $mail = $user . '@' . $role . '.com';
        } else {
            $mail = $this->request->getPost('email');
        }
        $validation = $this->validate([
            'foto' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto,4096]'
        ]);
        if ($validation == FALSE) {
            $data = array(
                'username' => $this->request->getPost('username'),
                'password' => password_hash($pass, PASSWORD_DEFAULT),
                'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                'email' => $mail,
                'role' => $this->request->getPost('role')
            );
        } else {
            $upload = $this->request->getFile('foto');
            $upload->move(WRITEPATH . '../../public_html/admin/img/user/');
            $data = array(
                'username' => $this->request->getPost('username'),
                'password' => password_hash($pass, PASSWORD_DEFAULT),
                'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                'foto' =>  $upload->getName(),
                'email' => $mail,
                'role' => $this->request->getPost('role')
            );
        }
        $model->insert($data);
        return redirect()->to('/pengguna/view')->with('berhasil', 'Data Pengguna Berhasil disimpan');
    }

    public function edit($username)
    {
        $model = new AdminModel();
        $model2 = new RoleModel();
        helper('form');
        $data['tambah'] = "yes";
        $data['pengguna'] = $model->getWhere(['username' => $username])->getRow();
        $data['role'] = $model2->orderBy('id', 'ASC')->findAll();
        $data['judulTemp'] = "Edit Data Pengguna";
        echo view('admin/v_header', $data);
        echo view('admin/penggunaEdit', $data);
        echo view('admin/v_footer', $data);
    }

    public function update()
    {
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('/pengguna/view');
        }
        $model = new KaryawanMod();
        $model2 = new AdminModel();
        $usr = $this->request->getPost('usr');
        $pass = $this->request->getPost('password');
        $validation = $this->validate([
            'foto' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto,4096]'
        ]);
        if ($validation == FALSE) {
            $data = array(
                'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                'username' => $this->request->getPost('username')
            );
            if (empty($pass)) {
                $data2 = array(
                    'username' => $this->request->getPost('username'),
                    'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                    'email' => $this->request->getPost('email'),
                    'role' => $this->request->getPost('role')
                );
            } else {
                $data2 = array(
                    'username' => $this->request->getPost('username'),
                    'password' => password_hash($pass, PASSWORD_DEFAULT),
                    'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                    'email' => $this->request->getPost('email'),
                    'role' => $this->request->getPost('role')
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
                'username' => $this->request->getPost('username')
            );
            if (empty($pass)) {
                $data2 = array(
                    'username' => $this->request->getPost('username'),
                    'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                    'foto' =>  $upload->getName(),
                    'email' => $this->request->getPost('email'),
                    'role' => $this->request->getPost('role')
                );
            } else {
                $data2 = array(
                    'username' => $this->request->getPost('username'),
                    'password' => password_hash($pass, PASSWORD_DEFAULT),
                    'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                    'foto' =>  $upload->getName(),
                    'email' => $this->request->getPost('email'),
                    'role' => $this->request->getPost('role')
                );
            }
        }
        $model->update($usr, $data);
        $model2->update($usr, $data2);
        return redirect()->to('/pengguna/view')->with('berhasil', 'Data Pengguna Berhasil diubah');
    }

    public function hapus($id)
    {
        $model = new AdminModel();
        $model->delete($id);
        return redirect()->to('/pengguna/view')->with('berhasil', 'Data Pengguna Berhasil dihapus');
    }
}
