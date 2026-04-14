<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

    public function index()
    {
        $data['anggota'] = $this->db->get('anggota')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('anggota/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('anggota/tambah');
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'telepon' => $this->input->post('telepon'),
            'email' => $this->input->post('email'),
            'tanggal_daftar' => $this->input->post('tanggal'),
            'status' => 'Aktif'
        ];

        $this->db->insert('anggota', $data);
        redirect('anggota');
    }

    // 🔥 EDIT
    public function edit($id)
    {
        $data['anggota'] = $this->db->get_where('anggota', [
            'nomor_anggota' => $id
        ])->row();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('anggota/edit', $data);
        $this->load->view('templates/footer');
    }

    // 🔥 UPDATE
    public function update()
    {
        $id = $this->input->post('nomor');

        $data = [
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'telepon' => $this->input->post('telepon'),
            'email' => $this->input->post('email'),
            'tanggal_daftar' => $this->input->post('tanggal'),
            'status' => $this->input->post('status')
        ];

        $this->db->where('nomor_anggota', $id);
        $this->db->update('anggota', $data);

        redirect('anggota');
    }

    // 🔥 HAPUS
    public function hapus($id)
    {
        $this->db->where('nomor_anggota', $id);
        $this->db->delete('anggota');

        redirect('anggota');
    }
}