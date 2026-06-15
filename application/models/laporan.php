<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model {

    public function get_all()
    {

        $this->db->select('
            pasien.nama,
            dokter.nama_dokter,
            pendaftaran.tanggal_kunjungan,
            pendaftaran.status
        ');

        $this->db->from('pendaftaran');

        $this->db->join(
            'pasien',
            'pasien.id_pasien=
            pendaftaran.id_pasien'
        );

        $this->db->join(
            'dokter',
            'dokter.id_dokter=
            pendaftaran.id_dokter'
        );

        return $this->db
        ->get()
        ->result();

    }

}