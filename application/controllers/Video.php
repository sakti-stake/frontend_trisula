<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

    public function datavideo()
    {
        $data ['videos']= $this->M_video->DataVideo();
        $this->load->view('auth/datavideo' , $data);
     }
     public function tambah_video()
     {
        $data ['videos']= $this->M_video->DataVideo();
        $this->load->view('data/tambah_video' , $data);
     }

     public function proses_tambah_video()
     {
         $this->M_video->proses_tambah_video();
         redirect('Video/datavideo');
     }

     public function hapus_data_video($id_video)
     {
         $this->M_video->hapus_data_video($id_video);
         redirect('Video/datavideo');
     }

     public function edit_data_video($id_video)
     {
         $data ['videos']= $this->M_video->
         ambil_id_data_video($id_video);
        $this->load->view('data/edit_video', $data);
     }

     public function proses_edit_berita($id_video)
     {
         $this->M_video->proses_edit_berita($id_video);
         redirect('Videos/datavideo');
     }
}