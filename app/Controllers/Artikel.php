<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\NewsModel;
use App\Models\SetelanModel;
use App\Models\TayangMod;

class Artikel extends BaseController
{
    function news()
    {
        $model = new NewsModel();
        $keyword = $this->request->getGet('keyword');
        $bulan = $this->request->getGet('bulan');
        $data['keyword'] = $keyword;
        $data['bulan'] = $bulan;
        $data['judulTemp'] = "Artikel";
        $data['tambah'] = "no";
        $data['jenis'] = "news";
        if (!$this->validate([])) {
            $data['validation'] = $this->validator;
            $query = $model->where('post_type', 'article');
            if (!empty($keyword && $bulan)) {
                $query
                    ->like('post_title', $keyword)
                    ->orLike('author', $keyword)
                    ->orLike('post_time', $bulan);
            }
            if (!empty($keyword)) {
                $query
                    ->like('post_title', $keyword)
                    ->orLike('author', $keyword)
                    ->orLike('post_time', $keyword);
            }
            if (!empty($bulan)) {
                $query
                    ->like('post_time', $bulan);
            }
            $data['news'] = $query->orderBy('post_id', 'DESC')->asObject()->paginate(25, 'no');
            $data['pager'] = $model->pager;
            echo view('admin/v_header', $data);
            echo view('admin/v_news', $data);
            echo view('admin/v_footer', $data);
        }
    }
    function page()
    {
        $model = new NewsModel();
        $keyword = $this->request->getGet('keyword');
        $bulan = $this->request->getGet('bulan');
        $data['keyword'] = $keyword;
        $data['bulan'] = $bulan;
        $data['tambah'] = "no";
        $data['jenis'] = "news";
        $data['judulTemp'] = "Halaman";
        if (!$this->validate([])) {
            $data['validation'] = $this->validator;
            $query = $model->where('post_type', 'page');
            if (!empty($keyword && $bulan)) {
                $query
                    ->like('post_title', $keyword)
                    ->orLike('author', $keyword)
                    ->orLike('post_time', $bulan);
            }
            if (!empty($keyword)) {
                $query
                    ->like('post_title', $keyword)
                    ->orLike('author', $keyword)
                    ->orLike('post_time', $keyword);
            }
            if (!empty($bulan)) {
                $query
                    ->like('post_time', $bulan);
            }
            $data['news'] = $query->orderBy('post_id', 'DESC')->asObject()->paginate(15, 'no');
            $data['pager'] = $model->pager;
            echo view('admin/v_header', $data);
            echo view('admin/v_news', $data);
            echo view('admin/v_footer', $data);
        }
    }
    function view($post_title_seo)
    {
        $model = new NewsModel();
        $model2 = new TayangMod();
        $model3 = new SetelanModel();
        $data['tanggal']  = date('Y-m-d');
        $tanggal  = date('D');
        $data['logo'] = '/assets/img/logo2.svg';
        $data['lebar'] = '230';

        if (!$this->validate([])) {
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
            $data['setelan'] = $model3->getWhere(['id' => 1])->getRow();
            $data['validation'] = $this->validator;
            $data['news'] = $model->getWhere(['post_title_seo' => $post_title_seo])->getRow();
            $data['title'] = $data['news']->post_title;
            if ($data['news2'] = $model->where('post_type', 'article')->orderBy('post_id', 'DESC')) {
                $data['news2'] = $model->where('post_status', 'Aktif')->whereNotIn('post_id', [$data['news']->post_id])->findAll(10);
            }
            echo view('home/artikel', $data);
            echo view('home/footer', $data);
        }
    }
    function tambah()
    {
        helper('form');
        $model = new AdminModel();
        $data['admin'] = $model->getAdmin();
        $data['tambah'] = "yes";
        $data['judulTemp'] = "Tambah Artikel / Halaman";
        $data['penulis'] = $model->where("role = 'admin' OR role = 'wartawan'")->orderBy('nama_lengkap', 'ASC')->findAll();
        echo view('admin/v_header', $data);
        echo view('admin/v_newsAdd', $data);
        echo view('admin/v_footer', $data);
    }

    function simpan()
    {
        $model = new NewsModel();

        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('/artikel/news');
        }
        $title = $this->request->getPost('post_title');
        $url = strip_tags($title);
        $url = preg_replace('/[^A-Za-z0-9]/', " ", $url);
        $url = trim($url);
        $url = preg_replace('/[^A-Za-z0-9]/', "-", $url);
        $url = strtolower($url);

        $validation = $this->validate([
            'post_thumbnail' => 'uploaded[post_thumbnail]|mime_in[post_thumbnail,image/jpg,image/jpeg,image/gif,image/png]|max_size[post_thumbnail,4096]'
        ]);

        if ($validation == FALSE) {
            $data = array(
                'post_title'  => $this->request->getPost('post_title'),
                'post_title_seo' => $url,
                // 'tag' => $this->request->getPost('tag'),
                'post_status' => $this->request->getPost('post_status'),
                'post_type' => $this->request->getPost('post_type'),
                'author' => $this->request->getPost('penulis'),
                'post_link' => $this->request->getPost('post_link'),
                'post_content' => $this->request->getPost('post_content')
            );
        } else {
            $upload = $this->request->getFile('post_thumbnail');
            $upload->move(WRITEPATH . '../../public_html//home/assets/img/news/');
            $data = array(
                'post_title'  => $this->request->getPost('post_title'),
                'post_title_seo' => $url,
                // 'tag' => $this->request->getPost('tag'),
                'post_status' => $this->request->getPost('post_status'),
                'post_type' => $this->request->getPost('post_type'),
                'author' => $this->request->getPost('penulis'),
                'post_link' => $this->request->getPost('post_link'),
                'post_content' => $this->request->getPost('post_content'),
                'post_thumbnail' => $upload->getName()
            );
        }
        $model->insert($data);
        return redirect()->to('/artikel/news')->with('berhasil', 'Data Berhasil disimpan');
    }
    function edit($post_id)
    {
        $model = new NewsModel();
        $model2 = new AdminModel();
        helper('form');
        $data['tambah'] = "yes";
        $data['news'] = $model->getWhere(['post_id' => $post_id])->getRow();
        $data['penulis'] = $model2->where("role = 'admin' OR role = 'wartawan'")->orderBy('nama_lengkap', 'ASC')->findAll();
        $data['judulTemp'] = "Edit Artikel / Halaman";
        echo view('admin/v_header', $data);
        echo view('admin/v_newsEdit', $data);
        echo view('admin/v_footer', $data);
    }
    function update()
    {
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('/artikel/news');
        }
        $model = new NewsModel();
        $title = $this->request->getPost('post_title');
        $url = strip_tags($title);
        $url = preg_replace('/[^A-Za-z0-9]/', " ", $url);
        $url = trim($url);
        $url = preg_replace('/[^A-Za-z0-9]/', "-", $url);
        $url = strtolower($url);
        $post_id = $this->request->getPost('post_id');
        $validation = $this->validate([
            'post_thumbnail' => 'uploaded[post_thumbnail]|mime_in[post_thumbnail,image/jpg,image/jpeg,image/gif,image/png]|max_size[post_thumbnail,4096]'
        ]);

        if ($validation == FALSE) {
            $data = array(
                'post_title'  => $this->request->getPost('post_title'),
                'post_title_seo' => $url,
                // 'tag' => $this->request->getPost('tag'),
                'post_status' => $this->request->getPost('post_status'),
                'post_type' => $this->request->getPost('post_type'),
                'author' => $this->request->getPost('penulis'),
                'post_link' => $this->request->getPost('post_link'),
                'post_content' => $this->request->getPost('post_content')
            );
        } else {
            $dt = $model->getWhere(['post_id' => $post_id])->getRow();
            $post_thumbnail = $dt->post_thumbnail;
            $path = '../../public_html/home/assets/img/news/';
            @unlink($path . $post_thumbnail);
            $upload = $this->request->getFile('post_thumbnail');
            $upload->move(WRITEPATH . '../../public_html/home/assets/img/news/');
            $data = array(
                'post_title'  => $this->request->getPost('post_title'),
                'post_title_seo' => $url,
                // 'tag' => $this->request->getPost('tag'),
                'post_status' => $this->request->getPost('post_status'),
                'post_type' => $this->request->getPost('post_type'),
                'author' => $this->request->getPost('penulis'),
                'post_link' => $this->request->getPost('post_link'),
                'post_content' => $this->request->getPost('post_content'),
                'post_thumbnail' => $upload->getName()
            );
        }
        $model->update($post_id, $data);
        if ($data['post_type'] == 'article') {
            return redirect()->to('/artikel/news')->with('berhasil', 'Data Artikel Berhasil diubah');
        } else {
            return redirect()->to('/artikel/page')->with('berhasil', 'Data Halaman Berhasil diubah');
        }
    }
    function hapus($post_id)
    {
        $model = new NewsModel();
        $dt = $model->getWhere(['post_id' => $post_id])->getRow();
        $model->delete($post_id);
        $post_thumbnail = $dt->post_thumbnail;
        $path = '../public/home/assets/img/news/';
        @unlink($path . $post_thumbnail);
        return redirect()->to('/artikel/news')->with('berhasil', 'Data Berhasil dihapus');
    }
}
