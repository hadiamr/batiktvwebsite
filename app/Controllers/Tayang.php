<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TayangMod;
use App\Models\HariMod;
use App\Models\ProgramMod;
use Dompdf\Dompdf;

class Tayang extends BaseController
{
    /** Data Tayang */
    public function view()
    {
        $model = new TayangMod();
        $model2 = new HariMod();
        $model3 = new ProgramMod();
        $data['tambah'] = "yes";
        $data['jenis'] = "tayang";
        $data['judulTemp'] = "Jadwal Tayang";
        if (!$this->validate([])) {
            $data['validation'] = $this->validator;
            $data['hari'] = $model2->findAll();
            $data['program'] = $model3->orderBy('nama_program', 'ASC')->findAll();
            $data['senin'] = $model->where('hari', 'senin')->orderBy('jam', 'ASC')->findAll();
            $data['selasa'] = $model->where('hari', 'selasa')->orderBy('jam', 'ASC')->findAll();
            $data['rabu'] = $model->where('hari', 'rabu')->orderBy('jam', 'ASC')->findAll();
            $data['kamis'] = $model->where('hari', 'kamis')->orderBy('jam', 'ASC')->findAll();
            $data['jumat'] = $model->where('hari', 'jumat')->orderBy('jam', 'ASC')->findAll();
            $data['sabtu'] = $model->where('hari', 'sabtu')->orderBy('jam', 'ASC')->findAll();
            $data['minggu'] = $model->where('hari', 'minggu')->orderBy('jam', 'ASC')->findAll();
            echo view('admin/v_header', $data);
            echo view('admin/tayangAdd', $data);
            echo view('admin/tayang', $data);
            echo view('admin/v_footer', $data);
        }
    }

    public function simpan()
    {
        $model = new TayangMod();
        $kategori = $this->request->getPost('kategori');
        if (empty($kategori)) {
            $data = array(
                'hari' => $this->request->getPost('hari'),
                'program' => $this->request->getPost('program'),
                'jam' => $this->request->getPost('jam'),
            );
        } else {
            $data = array(
                'hari' => $this->request->getPost('hari'),
                'program' => $this->request->getPost('program'),
                'jam' => $this->request->getPost('jam'),
                'kategori' => $this->request->getPost('kategori')
            );
        }
        $model->insert($data);
        return redirect()->to('/tayang/view')->with('berhasil', 'Data Tayang Berhasil disimpan');
    }

    public function edit($id_tayang)
    {
        $model = new TayangMod();
        $model2 = new HariMod();
        $model3 = new ProgramMod();
        helper('form');
        $data['tambah'] = "yes";
        $data['tayang'] = $model->getWhere(['id_tayang' => $id_tayang])->getRow();
        $data['judulTemp'] = "Edit Jadwal Tayang";
        if (!$this->validate([])) {
            $data['validation'] = $this->validator;
            $data['hari'] = $model2->findAll();
            $data['program'] = $model3->orderBy('nama_program', 'ASC')->findAll();
            $data['senin'] = $model->where('hari', 'senin')->orderBy('jam', 'ASC')->findAll();
            $data['selasa'] = $model->where('hari', 'selasa')->orderBy('jam', 'ASC')->findAll();
            $data['rabu'] = $model->where('hari', 'rabu')->orderBy('jam', 'ASC')->findAll();
            $data['kamis'] = $model->where('hari', 'kamis')->orderBy('jam', 'ASC')->findAll();
            $data['jumat'] = $model->where('hari', 'jumat')->orderBy('jam', 'ASC')->findAll();
            $data['sabtu'] = $model->where('hari', 'sabtu')->orderBy('jam', 'ASC')->findAll();
            $data['minggu'] = $model->where('hari', 'minggu')->orderBy('jam', 'ASC')->findAll();
            echo view('admin/v_header', $data);
            echo view('admin/tayangEdit', $data);
            echo view('admin/tayang', $data);
            echo view('admin/v_footer', $data);
        }
    }

    public function update()
    {
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('/tayang/view');
        }
        $model = new TayangMod();
        $id_tayang = $this->request->getPost('id_tayang');
        $data = array(
            'hari' => $this->request->getPost('hari'),
            'program' => $this->request->getPost('program'),
            'jam' => $this->request->getPost('jam'),
            'kategori' => $this->request->getPost('kategori')
        );
        $model->update($id_tayang, $data);
        return redirect()->to('/tayang/view')->with('berhasil', 'Data Tayang Berhasil diubah');
    }

    public function hapus($id_tayang)
    {
        $model = new TayangMod();
        $model->delete($id_tayang);
        return redirect()->to('/tayang/view')->with('berhasil', 'Data Tayang Berhasil dihapus');
    }
    public function pdf()
    {
        $model = new TayangMod();
        $model2 = new HariMod();
        $model3 = new ProgramMod();
        $data['tambah'] = "yes";
        $data['jenis'] = "tayang";
        $data['judulTemp'] = "Jadwal Tayang";
        $data['hari'] = $model2->findAll();
        $data['program'] = $model3->orderBy('nama_program', 'ASC')->findAll();
        $data['senin'] = $model->where('hari', 'senin')->orderBy('jam', 'ASC')->findAll();
        $data['selasa'] = $model->where('hari', 'selasa')->orderBy('jam', 'ASC')->findAll();
        $data['rabu'] = $model->where('hari', 'rabu')->orderBy('jam', 'ASC')->findAll();
        $data['kamis'] = $model->where('hari', 'kamis')->orderBy('jam', 'ASC')->findAll();
        $data['jumat'] = $model->where('hari', 'jumat')->orderBy('jam', 'ASC')->findAll();
        $data['sabtu'] = $model->where('hari', 'sabtu')->orderBy('jam', 'ASC')->findAll();
        $data['minggu'] = $model->where('hari', 'minggu')->orderBy('jam', 'ASC')->findAll();

        $filename = 'Jadwal Tayang Batik TV' . date(' M Y');

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content
        $dompdf->loadHtml(view('admin/tayangpdf', $data));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
    }
}
