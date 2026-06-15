<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_model extends CI_Model {

    /* =========================
       AMBIL SEMUA PENDAFTARAN
    ========================= */

    public function get_all()
    {
        $this->db->select('
            pendaftaran.*,
            pasien.nama AS nama_pasien,
            dokter.nama_dokter
        ');

        $this->db->from('pendaftaran');

        $this->db->join(
            'pasien',
            'pasien.id_pasien = pendaftaran.id_pasien',
            'left'
        );

        $this->db->join(
            'dokter',
            'dokter.id_dokter = pendaftaran.id_dokter',
            'left'
        );

        return $this->db
            ->get()
            ->result();
    }

    /* =========================
       INSERT PENDAFTARAN
    ========================= */

    public function insert($data)
    {
        return $this->db
            ->insert(
                'pendaftaran',
                $data
            );
    }

    /* =========================
       STATUS PASIEN
    ========================= */

    public function status($id)
    {
        $this->db->select('
            pendaftaran.*,
            dokter.nama_dokter
        ');

        $this->db->from('pendaftaran');

        $this->db->join(
            'dokter',
            'dokter.id_dokter = pendaftaran.id_dokter',
            'left'
        );

        $this->db->where(
            'pendaftaran.id_pasien',
            $id
        );

        return $this->db
            ->get()
            ->result();
    }

    /* =========================
       APPROVE
    ========================= */

    public function setuju($id)
    {
        return $this->db
            ->where(
                'id_pendaftaran',
                $id
            )
            ->update(
                'pendaftaran',
                [
                    'status'=>'Disetujui'
                ]
            );
    }

    /* =========================
       TOLAK
    ========================= */

    public function tolak($id)
    {
        return $this->db
            ->where(
                'id_pendaftaran',
                $id
            )
            ->update(
                'pendaftaran',
                [
                    'status'=>'Ditolak'
                ]
            );
    }
    public function total_pendaftaran()
{
    return $this->db
    ->count_all(
        'pendaftaran'
    );
}

public function total_disetujui()
{
    return $this->db
    ->where(
        'status',
        'Disetujui'
    )
    ->count_all_results(
        'pendaftaran'
    );
}

public function total_ditolak()
{
    return $this->db
    ->where(
        'status',
        'Ditolak'
    )
    ->count_all_results(
        'pendaftaran'
    );
}

public function total_pasien()
{
    return $this->db
    ->count_all(
        'pasien'
    );
}

}