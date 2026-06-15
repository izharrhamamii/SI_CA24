<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login')){
            redirect('login-admin');
        }

        $this->load->model('Pendaftaran_model');
    }

    public function index()
    {
        $data['title'] = 'Dashboard Admin';

        // TOTAL PASIEN
        $data['total_pasien'] = $this->Pendaftaran_model->total_pasien();

        // TOTAL PENDAFTARAN
        $data['total_daftar'] = $this->Pendaftaran_model->total_pendaftaran();

        // TOTAL DISETUJUI
        $data['total_setuju'] = $this->Pendaftaran_model->total_disetujui();

        // TOTAL DITOLAK
        $data['total_tolak'] = $this->Pendaftaran_model->total_ditolak();

        // ✅ FIX: TAMBAHKAN INI (WAJIB)
        $data['total_dokter'] = $this->db->count_all('dokter');

        // LOAD VIEW
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/template/footer');
        $this->load->view('admin/template/script');
    }
}