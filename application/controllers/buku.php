<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

    public function index()
    
    {
        $this->db->select('buku.*, kategori.nama_kategori');
        $this->db->from('buku');
        $this->db->join('kategori', 'kategori.id = buku.id_kategori', 'left');
        $data['buku'] = $this->db->get()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('buku/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['kategori'] = $this->db->get('kategori')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('buku/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = [
            'kode_buku' => $this->input->post('kode_buku'),
            'judul' => $this->input->post('judul'),
            'penulis' => $this->input->post('penulis'),
            'penerbit' => $this->input->post('penerbit'),
            'tahun' => $this->input->post('tahun'),
            'id_kategori' => $this->input->post('id_kategori'),
            'stok' => $this->input->post('stok'),
            'lokasi_rak' => $this->input->post('lokasi_rak')
        ];

        $this->db->insert('buku', $data);
        redirect('buku');
    }

    public function edit($id)
    {
        $data['buku'] = $this->db->get_where('buku', ['id' => $id])->row();
        $data['kategori'] = $this->db->get('kategori')->result();

        if (!$data['buku']) {
            show_404();
        }

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('buku/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');

        $data = [
            'kode_buku' => $this->input->post('kode_buku'),
            'judul' => $this->input->post('judul'),
            'penulis' => $this->input->post('penulis'),
            'penerbit' => $this->input->post('penerbit'),
            'tahun' => $this->input->post('tahun'),
            'id_kategori' => $this->input->post('id_kategori'),
            'stok' => $this->input->post('stok'),
            'lokasi_rak' => $this->input->post('lokasi_rak')
        ];

        $this->db->where('id', $id);
        $this->db->update('buku', $data);

        redirect('buku');
    }

    public function hapus($id)
    {
        $this->db->delete('buku', ['id' => $id]);
        redirect('buku');
    }
}