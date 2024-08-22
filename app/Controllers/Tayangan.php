<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TayangMod;
use App\Models\TayanganMod;
use App\Models\ProduksiMod;

class Tayangan extends BaseController
{
    /** Data Tayang */
    public function tambah()
    {
        $model = new TayangMod();
        $model2 = new ProduksiMod();
        $data['tambah'] = "yes";
        $data['jenis'] = "tayangan";
        $data['judulTemp'] = "Tambah Jadwal Tayangan";
        if (!$this->validate([])) {
            $data['validation'] = $this->validator;
            $tanggal  = date('D');
            $data['tanggal'] = date('d/m/y');

            // Tayang
            switch ($tanggal) {
                case 'Mon':
                    $query = $model->where('hari', 'senin');
                    $data['hari'] = 'Senin';
                    break;
                case 'Tue':
                    $query = $model->where('hari', 'selasa');
                    $data['hari'] = 'Selasa';
                    break;
                case 'Wed':
                    $query = $model->where('hari', 'rabu');
                    $data['hari'] = 'Rabu';
                    break;
                case 'Thu':
                    $query = $model->where('hari', 'kamis');
                    $data['hari'] = 'Kamis';
                    break;
                case 'Fri':
                    $query = $model->where('hari', 'jumat');
                    $data['hari'] = 'Jumat';
                    break;
                case 'Sat':
                    $query = $model->where('hari', 'sabtu');
                    $data['hari'] = 'Sabtu';
                    break;
                case 'Sun':
                    $query = $model->where('hari', 'minggu');
                    $data['hari'] = 'Minggu';
                    break;
            }
            $data['tayang'] = $query->where('kategori', 'baru')->orderBy('jam', 'ASC')->findAll();
            $data['produksi'] = $model2->get()->getResultArray();
            echo view('admin/v_header', $data);
            echo view('admin/tayanganAdd', $data);
            echo view('admin/v_footer', $data);
        }
    }

    public function simpan()
    {
        $model = new TayanganMod();
        $model2 = new TayangMod();
        $tanggal = date('D');
        $waktu = date('d/m/y');
        $bulan = date('m/y');
        $data['tanggal'] = date('d/m/y');

        // Tayang
        if ($tanggal == 'Mon') {
            $tayang = $model2->where('hari', 'senin')->where('kategori', 'baru')->orderBy('jam', 'ASC')->findAll();
            $data['hari'] = 'Senin';
        } elseif ($tanggal == 'Tue') {
            $tayang = $model2->where('hari', 'selasa')->where('kategori', 'baru')->orderBy('jam', 'ASC')->findAll();
            $data['hari'] = 'Selasa';
        } elseif ($tanggal == 'Wed') {
            $tayang = $model2->where('hari', 'rabu')->where('kategori', 'baru')->orderBy('jam', 'ASC')->findAll();
            $data['hari'] = 'Rabu';
        } elseif ($tanggal == 'Thu') {
            $tayang = $model2->where('hari', 'kamis')->where('kategori', 'baru')->orderBy('jam', 'ASC')->findAll();
            $data['hari'] = 'Kamis';
        } elseif ($tanggal == 'Fri') {
            $tayang = $model2->where('hari', 'jumat')->where('kategori', 'baru')->orderBy('jam', 'ASC')->findAll();
            $data['hari'] = 'Jumat';
        } elseif ($tanggal == 'Sat') {
            $tayang = $model2->where('hari', 'sabtu')->where('kategori', 'baru')->orderBy('jam', 'ASC')->findAll();
            $data['hari'] = 'Sabtu';
        } elseif ($tanggal == 'Sun') {
            $tayang = $model2->where('hari', 'minggu')->where('kategori', 'baru')->orderBy('jam', 'ASC')->findAll();
            $data['hari'] = 'Minggu';
        }

        $tgl = date('d');

        if ($tgl <= 7) {
            $minggu = 1;
        } elseif ($tgl <= 14) {
            $minggu = 2;
        } elseif ($tgl <= 21) {
            $minggu = 3;
        } elseif ($tgl <= 28) {
            $minggu = 4;
        } elseif ($tgl <= 31) {
            $minggu = 5;
        }
        // $episode = $model3->where('id_prod', $id_prod)->getRaw();
        $banyak = count($tayang);
        for ($i = 0; $i < $banyak; $i++) {
            $data[$i] = array(
                'jam' => $this->request->getPost('jam[' . $i . ']'),
                'nama_program' => $this->request->getPost('program[' . $i . ']'),
                'episode' => $this->request->getPost('episode[' . $i . ']'),
                'minggu' => $minggu,
                'bulan' => $bulan,
                'tanggal' => $waktu,
            );
            $model->insert($data[$i]);
        }
        return redirect()->to('/tayangan/view')->with('berhasil', 'Jadwal Tayangan Berhasil disimpan');
    }
    public function edit($id)
    {
        $model = new TayanganMod();
        $model2 = new ProduksiMod();
        helper('form');
        $data['tanggal'] = date('d/m/y');
        $data['tambah'] = "yes";
        $data['jenis'] = "tayangan";
        $data['judulTemp'] = "Edit Jadwal Tayangan";
        $data['tayangan'] = $model->getWhere(['id' => $id])->getRow();
        if (!$this->validate([])) {
            $data['validation'] = $this->validator;
            $data['episode'] = $model2->get()->getResultArray();
            echo view('admin/v_header', $data);
            echo view('admin/tayanganEdit', $data);
            echo view('admin/v_footer', $data);
        }
    }

    public function update()
    {
        $model = new TayanganMod();
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('/tayangan/view');
        }
        $id = $this->request->getPost('id');
        $data = array(
            'episode' => $this->request->getPost('episode')
        );
        $model->update($id, $data);
        return redirect()->to('/tayangan/view')->with('berhasil', 'Data Tayang Berhasil diubah');
    }
    public function view()
    {
        $model = new TayanganMod();
        $data['jenis'] = "tayangan";
        $data['judulTemp'] = "Tayangan";
        $data['tanggal'] = date('d/m/y');
        $tayangan = $model->getTayangan();
        if (empty($tayangan)) {
            $data['tambah'] = "no";
        } else {
            $data['tambah'] = "yes";
        }
        if (!$this->validate([])) {
            $data['validation'] = $this->validator;
            $data['tayangan'] = $model->getTayangan();
            echo view('admin/v_header', $data);
            echo view('admin/tayangan', $data);
            echo view('admin/v_footer', $data);
        }
    }
}
