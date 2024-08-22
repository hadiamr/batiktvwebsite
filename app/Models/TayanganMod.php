<?php

namespace App\Models;

use CodeIgniter\Model;

class TayanganMod extends Model
{
    protected $table                = 'tayangan';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['id_prod', 'jam', 'minggu', 'bulan', 'episode', 'nama_program', 'tanggal'];

    function getTayangan()
    {
        $waktu = date('d/m/y');
        return $this->db->table('tayangan')
            // ->join('jadwalprod', 'jadwalprod.id_prod=tayangan.id_prod', 'left')
            ->where('tanggal', $waktu)
            ->orderBy('nama_program', 'ASC')
            ->get()->getResultArray();
    }
}
