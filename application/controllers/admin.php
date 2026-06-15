<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

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

        $this->load->view('admin/pendaftaran/index', $data);
    }

    public function setuju($id)
    {
        $this->Pendaftaran_model->setuju($id);
        redirect('admin/pendaftaran');
    }

    public function tolak($id)
    {
        $this->Pendaftaran_model->tolak($id);
        redirect('admin/pendaftaran');
    }
}