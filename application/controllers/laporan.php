<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Pendaftaran_model');

        if(!$this->session->userdata('login') || $this->session->userdata('role') != 'admin'){
            redirect('login-admin');
        }
    }

    public function index()
    {
        $data['pendaftaran'] = $this->Pendaftaran_model->get_all();
        $this->load->view('admin/laporan/index', $data);
    }

    public function csv()
    {
        $data = $this->Pendaftaran_model->get_all();

        header("Content-type: application/csv");
        header("Content-Disposition: attachment; filename=laporan.csv");

        $output = fopen("php://output", "w");

        fputcsv($output, ["Nama Pasien","Dokter","Keluhan","Tanggal","Jam","Status"]);

        foreach($data as $row){
            fputcsv($output, [
                $row->nama_pasien,
                $row->nama_dokter,
                $row->keluhan,
                $row->tanggal_kunjungan,
                $row->jam_kunjungan,
                $row->status
            ]);
        }

        fclose($output);
        exit;
    }

    public function pdf()
{
    $data['pendaftaran'] = $this->Pendaftaran_model->get_all();

    $this->load->view('admin/laporan/pdf', $data);
}
}