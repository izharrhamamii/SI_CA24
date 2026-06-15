<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Pasien_model');

        if(
            !$this->session->userdata('login')
            ||
            $this->session->userdata('role')!='admin'
        ){
            redirect('login-admin');
        }
    }

    /* ==========================
        LIST DATA PASIEN
    ========================== */

    public function index()
    {
        $data['title']='Data Pasien';

        $data['pasien']=
        $this->Pasien_model
        ->get_all();

        $this->load->view(
            'admin/template/header',
            $data
        );

        $this->load->view(
            'admin/template/sidebar'
        );

        $this->load->view(
            'admin/template/topbar'
        );

        $this->load->view(
            'admin/pasien/index',
            $data
        );

        $this->load->view(
            'admin/template/footer'
        );
    }

    /* ==========================
        FORM TAMBAH PASIEN
    ========================== */

    public function tambah()
    {
        $data['title']='Tambah Pasien';

        $this->load->view(
            'admin/template/header',
            $data
        );

        $this->load->view(
            'admin/template/sidebar'
        );

        $this->load->view(
            'admin/template/topbar'
        );

        $this->load->view(
            'admin/pasien/tambah'
        );

        $this->load->view(
            'admin/template/footer'
        );
    }

    /* ==========================
        SIMPAN PASIEN
    ========================== */

    public function simpan()
    {
        $data=[

            'nama'=>
            $this->input->post('nama'),

            'tanggal_lahir'=>
            $this->input->post('tanggal_lahir'),

            'alamat'=>
            $this->input->post('alamat'),

            'telepon'=>
            $this->input->post('telepon'),

            'username'=>
            $this->input->post('username'),

            'password'=>
            md5(
                $this->input
                ->post('password')
            )

        ];

        $this->Pasien_model
        ->insert($data);

        redirect('pasien');
    }

    /* ==========================
        FORM EDIT PASIEN
    ========================== */

    public function edit($id)
    {
        $data['title']='Edit Pasien';

        $data['pasien']=
        $this->Pasien_model
        ->detail($id);

        $this->load->view(
            'admin/template/header',
            $data
        );

        $this->load->view(
            'admin/template/sidebar'
        );

        $this->load->view(
            'admin/template/topbar'
        );

        $this->load->view(
            'admin/pasien/edit',
            $data
        );

        $this->load->view(
            'admin/template/footer'
        );
    }

    /* ==========================
        UPDATE PASIEN
    ========================== */

    public function update($id)
    {
        $data=[

            'nama'=>
            $this->input->post('nama'),

            'tanggal_lahir'=>
            $this->input->post('tanggal_lahir'),

            'alamat'=>
            $this->input->post('alamat'),

            'telepon'=>
            $this->input->post('telepon'),

            'username'=>
            $this->input->post('username')

        ];

        $this->Pasien_model
        ->update(
            $id,
            $data
        );

        redirect('pasien');
    }

    /* ==========================
        HAPUS PASIEN
    ========================== */

    public function hapus($id)
    {
        $this->Pasien_model
        ->delete($id);

        redirect('pasien');
    }

}