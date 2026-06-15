<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(
            !$this->session->userdata('login')
            ||
            $this->session->userdata('role')!='admin'
        ){
            redirect('login-admin');
        }

        $this->load->model('Dokter_model');
    }

    /* ======================
        LIST DOKTER
    ====================== */

    public function index()
    {
        $data['title']='Data Dokter';

        $data['dokter']=
        $this->Dokter_model
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
            'dokter/index',
            $data
        );

        $this->load->view(
            'admin/template/footer'
        );

        $this->load->view(
            'admin/template/script'
        );
    }

    /* ======================
        TAMBAH DOKTER
    ====================== */

    public function tambah()
    {
        $data['title']='Tambah Dokter';

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
            'dokter/tambah',
            $data
        );

        $this->load->view(
            'admin/template/footer'
        );

        $this->load->view(
            'admin/template/script'
        );
    }

    /* ======================
        SIMPAN DOKTER
    ====================== */

    public function simpan()
    {
        $data=[

            'nama_dokter'=>
            $this->input->post(
                'nama_dokter'
            ),

            'spesialis'=>
            $this->input->post(
                'spesialis'
            ),

            'jadwal_praktek'=>
            $this->input->post(
                'jadwal_praktek'
            )

        ];

        $this->Dokter_model
        ->insert($data);

        redirect('dokter');
    }

    /* ======================
        HAPUS DOKTER
    ====================== */

    public function hapus($id)
    {
        $this->Dokter_model
        ->delete($id);

        redirect('dokter');
    }

}