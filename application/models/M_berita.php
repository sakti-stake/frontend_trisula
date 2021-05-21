<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_berita extends CI_Model {

    public function DataBerita()
    {
        return $this->db->get('berita_bola')->result_array();
    }

    public function proses_tambah_berita()
    {
        $data =[

            "judul_berita" => $this->input->post('nama_berita'),
            "penulis_berita" => $this->input->post('penulis_berita'),
            "isi_berita"  => $this->input->post('isi_berita'),
            "foto_berita" => $this->input->post('foto_berita'),
            "tgl_berita" => $this->input->post('tgl_pemain'),

        ];

        $this->db->insert('berita_bola', $data);
    }
    public function hapus_data_berita($id_berita)
    {
        $this->db->where('id_berita', $id_berita);
        $this->db->delete('berita_bola');
    }

    public function ambil_id_data_berita($id_berita)
    {
        return $this->db->get_where('berita_bola', ['id_berita' => $id_berita])->row_array();
    }

    public function proses_edit()
    {
        $data =[
            "judul_berita" => $this->input->post('nama_berita'),
            "penulis_berita" => $this->input->post('penulis_berita'),
            "isi_berita"  => $this->input->post('isi_berita'),
            "foto_berita" => $this->input->post('foto_berita'),
            "tgl_berita" => $this->input->post('tgl_berita'),

        ];
        $this->db->where('id_berita' , $this->input->post('id_berita'));
        $this->db->update('berita_bola', $data);
    }

}