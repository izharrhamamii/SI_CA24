<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Pendaftaran_model');

        // CEK LOGIN ADMIN
        if(
            !$this->session->userdata('login')
            ||
            $this->session->userdata('role') != 'admin'
        ){
            redirect('login-admin');
        }
    }

    /* ==========================
        DATA PENDAFTARAN ADMIN
    ========================== */

    public function index()
    {
        $data['title'] =
        'Data Pendaftaran Pasien';

        $data['pendaftaran'] =
        $this->Pendaftaran_model
        ->get_all();

        // TEMPLATE ADMIN FULL
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
            'admin/pendaftaran/index',
            $data
        );

        $this->load->view(
            'admin/template/footer'
        );

        $this->load->view(
            'admin/template/script'
        );
    }

    /* ==========================
        APPROVE PENDAFTARAN
    ========================== */

    public function setuju($id=NULL)
    {
        if(empty($id))
        {
            redirect('pendaftaran_admin');
        }

        $this->Pendaftaran_model
        ->setuju($id);

        $this->session->set_flashdata(
            'success',
            'Pendaftaran berhasil disetujui.'
        );

        redirect('pendaftaran_admin');
    }

    /* ==========================
        TOLAK PENDAFTARAN
    ========================== */

    public function tolak($id=NULL)
    {
        if(empty($id))
        {
            redirect('pendaftaran_admin');
        }

        $this->Pendaftaran_model
        ->tolak($id);

        $this->session->set_flashdata(
            'success',
            'Pendaftaran berhasil ditolak.'
        );

        redirect('pendaftaran_admin');
    }

}