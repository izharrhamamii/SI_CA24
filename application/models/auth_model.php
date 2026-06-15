
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    /* ==========================
            LOGIN ADMIN
    ========================== */

    public function cek_admin($username,$password)
    {
        return $this->db

            ->where(
                'username',
                trim($username)
            )

            ->where(
                'password',
                trim($password)
            )

            ->get('admin')

            ->row();
    }

    /* ==========================
            LOGIN PASIEN
    ========================== */

    public function cek_pasien($username,$password)
    {
        return $this->db

            ->where(
                'username',
                trim($username)
            )

            ->where(
                'password',
                trim($password)
            )

            ->get('pasien')

            ->row();
    }

    /* ==========================
            REGISTER PASIEN
    ========================== */

    public function register_pasien($data)
    {
        return $this->db
            ->insert(
                'pasien',
                $data
            );
    }

    /* ==========================
            CEK USERNAME
    ========================== */

    public function cek_username($username)
    {
        return $this->db

            ->where(
                'username',
                trim($username)
            )

            ->get('pasien')

            ->num_rows();
    }

    /* ==========================
            GET PASIEN BY ID
    ========================== */

    public function get_pasien($id)
    {
        return $this->db

            ->where(
                'id_pasien',
                $id
            )

            ->get('pasien')

            ->row();
    }

    /* ==========================
            UPDATE PASIEN
    ========================== */

    public function update_pasien($id,$data)
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

    public function delete_pasien($id)
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
