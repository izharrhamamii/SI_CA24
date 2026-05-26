<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

    public function index()
    {
        $data['anggota'] = $this->db->get('anggota')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('anggota/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('anggota/tambah');
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = [
            'nomor_anggota' => $this->input->post('nomor_anggota'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'telepon' => $this->input->post('telepon'),
            'email' => $this->input->post('email'),
            'tanggal_daftar' => $this->input->post('tanggal_daftar'),
            'status' => 'Aktif'
        ];

        $this->db->insert('anggota', $data);
        redirect('anggota');
    }

    // ✅ EDIT
    public function edit($id)
    {
        $data['anggota'] = $this->db->get_where('anggota', [
            'id' => $id
        ])->row();

        if (!$data['anggota']) {
            show_404();
        }

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('anggota/edit', $data);
        $this->load->view('templates/footer');
    }

    // ✅ UPDATE
    public function update()
    {
        $id = $this->input->post('id');

        $data = [
            'nomor_anggota' => $this->input->post('nomor_anggota'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'telepon' => $this->input->post('telepon'),
            'email' => $this->input->post('email'),
            'tanggal_daftar' => $this->input->post('tanggal_daftar'),
            'status' => $this->input->post('status')
        ];

        $this->db->where('id', $id);
        $this->db->update('anggota', $data);

        redirect('anggota');
    }

    // ✅ HAPUS
    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('anggota');

        redirect('anggota');
    }
}