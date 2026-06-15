
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Auth_model');

        $this->load->library(array(
            'session',
            'form_validation'
        ));
    }

    /* ======================
        LOGIN ADMIN
    ====================== */

    public function login_admin()
    {
        $this->load->view(
            'auth/login_admin'
        );
    }

    public function proses_admin()
    {
        $username = trim(
            $this->input->post('username')
        );

        $password = md5(
            $this->input->post('password')
        );

        $admin =
        $this->Auth_model
        ->cek_admin(
            $username,
            $password
        );

        if($admin)
        {

            $this->session
            ->set_userdata(array(

                'id_admin' =>
                $admin->id_admin,

                'nama_admin' =>
                $admin->nama_admin,

                'username' =>
                $admin->username,

                'role' =>
                'admin',

                'login' =>
                TRUE

            ));

            redirect(
                'dashboard_admin'
            );
        }
        else
        {

            $this->session
            ->set_flashdata(
                'error',
                'Username / Password Admin salah!'
            );

            redirect(
                'login-admin'
            );
        }
    }

    /* ======================
        LOGIN PASIEN
    ====================== */

    public function login_pasien()
    {
        $this->load->view(
            'auth/login_pasien'
        );
    }

    public function proses_pasien()
    {
        $username = trim(
            $this->input->post('username')
        );

        $password = md5(
            $this->input->post('password')
        );

        $pasien =
        $this->Auth_model
        ->cek_pasien(
            $username,
            $password
        );

        if($pasien)
        {

            $this->session
            ->set_userdata(array(

                'id_pasien' =>
                $pasien->id_pasien,

                'nama' =>
                $pasien->nama,

                'username' =>
                $pasien->username,

                'role' =>
                'pasien',

                'login' =>
                TRUE

            ));

            redirect(
                'dashboard_pasien'
            );
        }
        else
        {

            $this->session
            ->set_flashdata(
                'error',
                'Username / Password Pasien salah!'
            );

            redirect(
                'login-pasien'
            );
        }
    }

    /* ======================
        REGISTER PASIEN
    ====================== */

    public function register()
    {
        $this->load->view(
            'auth/register'
        );
    }

    public function simpan_register()
    {

        $this->form_validation
        ->set_rules(
            'nama',
            'Nama',
            'required'
        );

        $this->form_validation
        ->set_rules(
            'telepon',
            'Telepon',
            'required|numeric'
        );

        $this->form_validation
        ->set_rules(
            'username',
            'Username',
            'required|is_unique[pasien.username]'
        );

        $this->form_validation
        ->set_rules(
            'password',
            'Password',
            'required|min_length[4]'
        );

        if(
            $this->form_validation
            ->run() == FALSE
        )
        {
            $this->register();
            return;
        }

        $data = array(

            'nama' => trim(
                $this->input
                ->post('nama')
            ),

            'tanggal_lahir' =>
            $this->input
            ->post('tanggal_lahir'),

            'alamat' => trim(
                $this->input
                ->post('alamat')
            ),

            'telepon' => trim(
                $this->input
                ->post('telepon')
            ),

            'username' => trim(
                $this->input
                ->post('username')
            ),

            'password' => md5(
                $this->input
                ->post('password')
            )

        );

        $this->Auth_model
        ->register_pasien(
            $data
        );

        $this->session
        ->set_flashdata(
            'success',
            'Registrasi berhasil! Silahkan login.'
        );

        redirect(
            'login-pasien'
        );
    }

    /* ======================
        LOGOUT
    ====================== */

    public function logout()
    {

        $this->session
        ->sess_destroy();

        redirect(
            'login-admin'
        );
    }

}
