<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProgramMod;
use App\Models\TayanganMod;
use Dompdf\Dompdf;
use CodeIgniter\Database\Config;

class Laporan extends BaseController
{
    /** Data Laporan */
    public function view()
    {
        $data['tambah'] = "yes";
        $data['jenis'] = "laporan";
        $data['judulTemp'] = "Laporan";
        $bulan  = $this->request->getPost('bulan');
        if (empty($bulan)) {
            $data['bulan']  = date('Y-m');
        } else {
            $data['bulan']  = $this->request->getPost('bulan');
        }
        $db = Config::connect();
        $query = $db->query('
        SELECT p.nama_program as nama, s.*
        FROM program p
        LEFT JOIN(
        SELECT nama_program as nm, bulan,
        MAX(CASE WHEN MINGGU = 1 THEN episode ELSE NULL END)AS minggu_1,
        MAX(CASE WHEN MINGGU = 2 THEN episode ELSE NULL END)AS minggu_2,
        MAX(CASE WHEN MINGGU = 3 THEN episode ELSE NULL END)AS minggu_3,
        MAX(CASE WHEN MINGGU = 4 THEN episode ELSE NULL END)AS minggu_4,
        MAX(CASE WHEN MINGGU = 5 THEN episode ELSE NULL END)AS minggu_5
        FROM tayangan t
        GROUP BY nama_program
        ) s
        ON s.nm = p.nama_program
        ')
            ->getResult();

        if (!$this->validate([])) {
            $data['validation'] = $this->validator;
            $data['query'] = $query;
            echo view('admin/v_header', $data);
            echo view('admin/laporan', $data);
            echo view('admin/v_footer', $data);
        }
    }
    public function pdf($bulan)
    {
        $data['tambah'] = "yes";
        $data['jenis'] = "laporan";
        $data['judulTemp'] = "Laporan";
        $data['bulan']  = $bulan;
        $db = Config::connect();
        $query = $db->query('
        SELECT p.nama_program as nama, s.*
        FROM program p
        LEFT JOIN(
        SELECT nama_program as nm, bulan,
        MAX(CASE WHEN MINGGU = 1 THEN episode ELSE NULL END)AS minggu_1,
        MAX(CASE WHEN MINGGU = 2 THEN episode ELSE NULL END)AS minggu_2,
        MAX(CASE WHEN MINGGU = 3 THEN episode ELSE NULL END)AS minggu_3,
        MAX(CASE WHEN MINGGU = 4 THEN episode ELSE NULL END)AS minggu_4,
        MAX(CASE WHEN MINGGU = 5 THEN episode ELSE NULL END)AS minggu_5
        FROM tayangan t
        GROUP BY nama_program
        ) s
        ON s.nm = p.nama_program
        ')
            ->getResult();
        $data['query'] = $query;

        $filename =  'Laporan Tayang Batik TV' . date(" m-Y", strtotime($bulan));

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content
        $dompdf->loadHtml(view('admin/laporanpdf', $data));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
    }
}
