<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProduksiMod;
use App\Models\KaryawanMod;
use App\Models\ProgramMod;
use App\Models\StokMod;

class Produksi extends BaseController
{
    /** Jadwal Produksi */
    public function jadwal()
    {
        $model = new ProduksiMod();
        $data['tambah'] = "no";
        $data['jenis'] = "produksi";
        $data['judulTemp'] = "Jadwal Produksi";
        $tanggal  = $this->request->getGet('tanggal');
        $data['sekarang'] = date('ymd');
        if (empty($tanggal)) {
            $data['tanggal']  = date('Y-m-d');
        } else {
            $data['tanggal']  = $this->request->getGet('tanggal');
        }
        if (!$this->validate([])) {
            $data['validation'] = $this->validator;
            $data['jadwal'] = $model->getProduksi();
            echo view('admin/v_header', $data);
            echo view('admin/jadwalProd', $data);
            echo view('admin/v_footer', $data);
        }
    }

    function tambahJadwal()
    {
        $model = new KaryawanMod();
        $model2 = new ProgramMod();
        helper('form');
        $data['tambah'] = "yes";
        $data['judulTemp'] = "Tambah Jadwal";
        $data['program'] = $model2->orderBy('nama_program', 'ASC')->findAll();
        $data['driver'] = $model->where("jabatan1 = 'driver' OR jabatan2 = 'driver' OR jabatan3 = 'driver'")->orderBy('username', 'ASC')->findAll();
        echo view('admin/v_header', $data);
        echo view('admin/jadwalProdAdd', $data);
        echo view('admin/v_footer', $data);
    }

    public function simpanJadwal()
    {
        $model = new ProduksiMod();
        $data = array(
            'waktu'  => $this->request->getPost('waktu'),
            'driver' => $this->request->getPost('driver'),
            'program_id' => $this->request->getPost('program_id'),
            'episode' => $this->request->getPost('episode'),
            'tempat' => $this->request->getPost('tempat'),
        );
        $model->insert($data);
        return redirect()->to('/produksi/jadwal')->with('berhasil', 'Jadwal Berhasil disimpan');
    }

    public function editJadwal($id_prod)
    {
        $model = new ProduksiMod();
        $model2 = new ProgramMod();
        $model3 = new KaryawanMod();
        helper('form');
        $data['tambah'] = "yes";
        $data['program'] = $model2->orderBy('nama_program', 'ASC')->findAll();
        $data['jadwalProd'] = $model->getWhere(['id_prod' => $id_prod])->getRow();
        $data['judulTemp'] = "Edit Jadwal Produksi";
        $data['driver'] = $model3->where("jabatan1 = 'driver' OR jabatan2 = 'driver' OR jabatan3 = 'driver'")->orderBy('username', 'ASC')->findAll();
        echo view('admin/v_header', $data);
        echo view('admin/jadwalProdEdit', $data);
        echo view('admin/v_footer', $data);
    }

    public function updateJadwal()
    {
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('/produksi/jadwal');
        }
        $model = new ProduksiMod();
        $id_prod = $this->request->getPost('id_prod');
        $data = array(
            'waktu'  => $this->request->getPost('waktu'),
            'driver' => $this->request->getPost('driver'),
            'program_id' => $this->request->getPost('program_id'),
            'episode' => $this->request->getPost('episode'),
            'tempat' => $this->request->getPost('tempat')
        );
        $model->update($id_prod, $data);
        return redirect()->to('/produksi/jadwal')->with('berhasil', 'Jadwal Berhasil diubah');
    }

    public function hapusJadwal($id_prod)
    {
        $model = new ProduksiMod();
        $model->delete($id_prod);
        return redirect()->to('/produksi/jadwal')->with('berhasil', 'Jadwal Berhasil dihapus');
    }
}
