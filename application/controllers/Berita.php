<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

    public function databerita()
    {
        $data ['berita_bola']= $this->M_berita->DataBerita();
        $this->load->view('auth/databerita' , $data);
     }
     public function tambah_berita()
     {
        $data ['berita_bola']= $this->M_berita->DataBerita();
        $this->load->view('data/tambah_berita' , $data);
     }

     public function proses_tambah_berita()
     {
         $this->M_berita->proses_tambah_berita();
         redirect('Berita/databerita');
     }

     public function hapus_data_berita($id_berita)
     {
         $this->M_berita->hapus_data_berita($id_berita);
         redirect('Berita/databerita');
     }

     public function edit_data_berita($id_berita)
     {
         $data ['berita_bola']= $this->M_berita->
         ambil_id_data_berita($id_berita);
        $this->load->view('data/edit_berita', $data);
     }

     public function proses_edit_berita($id_berita)
     {
         $this->M_berita->proses_edit_berita($id_berita);
         redirect('Berita/databerita');
     }
}