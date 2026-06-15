<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model(
            'Pendaftaran_model'
        );

        $this->load->model(
            'Dokter_model'
        );

        $this->load->library(
            'form_validation'
        );

        if(
            !$this->session
            ->userdata('login')
        ){
            redirect(
                'login-pasien'
            );
        }

        if(
            $this->session
            ->userdata('role')
            !='pasien'
        ){
            redirect(
                'login-pasien'
            );
        }
    }

    public function index()
    {
        $data['title']=
        'Pendaftaran Berobat';

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

    public function simpan()
    {

        $this->form_validation
        ->set_rules(
            'id_dokter',
            'Dokter',
            'required'
        );

        $this->form_validation
        ->set_rules(
            'keluhan',
            'Keluhan',
            'required|min_length[5]'
        );

        $this->form_validation
        ->set_rules(
            'tanggal_kunjungan',
            'Tanggal',
            'required'
        );

        $this->form_validation
        ->set_rules(
            'jam_kunjungan',
            'Jam',
            'required'
        );

        if(
            $this->form_validation
            ->run()==FALSE
        )
        {
            $this->index();
            return;
        }

        $data=[

            'id_pasien'=>
            $this->session
            ->userdata(
                'id_pasien'
            ),

            'id_dokter'=>
            $this->input
            ->post(
                'id_dokter'
            ),

            'keluhan'=>
            $this->input
            ->post(
                'keluhan'
            ),

            'tanggal_kunjungan'=>
            $this->input
            ->post(
                'tanggal_kunjungan'
            ),

            'jam_kunjungan'=>
            $this->input
            ->post(
                'jam_kunjungan'
            ),

            'status'=>'Menunggu'

        ];

        $this->Pendaftaran_model
        ->insert($data);

        redirect(
            'pendaftaran/status'
        );
    }

    public function status()
    {
        $id=
        $this->session
        ->userdata(
            'id_pasien'
        );

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