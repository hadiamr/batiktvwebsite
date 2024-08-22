<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AdminModel;
use App\Models\KaryawanMod;

class Login extends Controller
{
    public function index()
    {
        echo view('admin/v_login');
    }

    public function auth()
    {
        $session = session();
        $model = new AdminModel();
        $request = \Config\Services::request();

        $username = $request->getVar('username');
        $password = $request->getVar('password');
        $remember_me = $request->getVar('remember_me');

        $data = $model->where('username', $username)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'akun_id'            => $data['id'],
                    'akun_nama_lengkap'  => $data['nama_lengkap'],
                    'akun_username'      => $data['username'],
                    'akun_email'         => $data['email'],
                    'akun_foto'          => $data['foto'],
                    'akun_role'          => $data['role'],
                ];
                if ($remember_me == '1') {
                    set_cookie("cookie_username", $username, 3600 * 24 * 30);
                    set_cookie("cookie_password", $data['password'], 3600 * 24 * 30);
                }

                $session->set($ses_data);
                return redirect()->to('/dashboard')->withCookies();
            } else {
                $session->setFlashdata('msg', 'Password salah!');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Username tidak ditemukan');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
    public function forgot()
    {
        echo view('admin/v_forgot');
    }
}
