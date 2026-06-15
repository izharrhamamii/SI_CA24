<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter_model extends CI_Model {

    public function get_all()
    {
        return $this->db
        ->get('dokter')
        ->result();
    }

    public function detail($id)
    {
        return $this->db
        ->get_where(
            'dokter',
            ['id_dokter'=>$id]
        )
        ->row();
    }

    public function insert($data)
    {
        return $this->db
        ->insert(
            'dokter',
            $data
        );
    }

    public function update($id,$data)
    {
        return $this->db
        ->where(
            'id_dokter',
            $id
        )
        ->update(
            'dokter',
            $data
        );
    }

    public function delete($id)
    {
        return $this->db
        ->where(
            'id_dokter',
            $id
        )
        ->delete('dokter');
    }

}