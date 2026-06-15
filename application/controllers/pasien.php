<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Pendaftaran_model');
        $this->load->model('Dokter_model');

        if(!$this->session->userdata('login')){
            redirect('login-pasien');
        }

        if(
            $this->session
            ->userdata('role')
            != 'pasien'
        ){
            redirect('login-pasien');
        }
    }

    public function dashboard()
    {
        $data['title']='Dashboard Pasien';

        $this->load->view(
            'pasien/template/header',
            $data
        );

        $this->load->view(
            'pasien/template/sidebar'
        );

        $this->load->view(
            'pasien/template/topbar'
        );

        $this->load->view(
            'pasien/dashboard'
        );

        $this->load->view(
            'pasien/template/footer'
        );

        $this->load->view(
            'pasien/template/script'
        );
    }

    public function pendaftaran()
    {
        $data['title']='Pendaftaran Berobat';

        $data['dokter']=
        $this->Dokter_model
        ->get_all();

        $this->load->view(
            'pasien/template/header',
            $data
        );

        $this->load->view(
            'pasien/template/sidebar'
        );

        $this->load->view(
            'pasien/template/topbar'
        );

        $this->load->view(
            'pasien/pendaftaran/form',
            $data
        );

        $this->load->view(
            'pasien/template/footer'
        );

        $this->load->view(
            'pasien/template/script'
        );
    }

    public function status()
    {
        $id =
        $this->session
        ->userdata('id_pasien');

        $data['title']=
        'Status Pendaftaran';

        $data['status']=
        $this->Pendaftaran_model
        ->status($id);

        $this->load->view(
            'pasien/template/header',
            $data
        );

        $this->load->view(
            'pasien/template/sidebar'
        );

        $this->load->view(
            'pasien/template/topbar'
        );

        $this->load->view(
            'pasien/pendaftaran/status',
            $data
        );

        $this->load->view(
            'pasien/template/footer'
        );

        $this->load->view(
            'pasien/template/script'
        );
    }

}