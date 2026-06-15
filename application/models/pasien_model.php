<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_model extends CI_Model {

    /* ==========================
        AMBIL SEMUA DATA PASIEN
    ========================== */

    public function get_all()
    {
        return $this->db
        ->order_by(
            'id_pasien',
            'DESC'
        )
        ->get('pasien')
        ->result();
    }

    /* ==========================
        DETAIL PASIEN
    ========================== */

    public function detail($id)
    {
        return $this->db
        ->get_where(
            'pasien',
            [
                'id_pasien'=>$id
            ]
        )
        ->row();
    }

    /* ==========================
        INSERT PASIEN
    ========================== */

    public function insert($data)
    {
        return $this->db
        ->insert(
            'pasien',
            $data
        );
    }

    /* ==========================
        UPDATE PASIEN
    ========================== */

    public function update($id,$data)
    {
        return $this->db
        ->where(
            'id_pasien',
            $id
        )
        ->update(
            'pasien',
            $data
        );
    }

    /* ==========================
        DELETE PASIEN
    ========================== */

    public function delete($id)
    {
        return $this->db
        ->where(
            'id_pasien',
            $id
        )
        ->delete(
            'pasien'
        );
    }

}