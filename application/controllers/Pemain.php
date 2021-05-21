<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemain extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_pemain");
    }
    public function datapemain()
    {
        $data ['pemain_bola']= $this->M_pemain->DataPemain();
        $this->load->view('auth/datapemain' , $data);
     }

     public function tambah_data()
     {
        $data ['pemain_bola']= $this->M_pemain->DataPemain();
        $this->load->view('data/tambah_data' , $data);
     }

     public function proses_tambah_data()
     {
        $nama = $this->input->post('nama_pemain');//nama file menggunakan nama mahasiswa
        $config['file_name'] = $nama;
        $config['upload_path'] = 'image/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 5000;
        $this->load->library('upload', $config);
 
        if (!$this->upload->do_upload('file')){
            $error = array('error' => $this->upload->display_errors());
            redirect(base_url('dashboard/daftar-proposal',$error));
        }else{
            $data = array(
                    'nama_pemain' => $this->input->post('nama_pemain'),
                    'tgl_pemain' => $this->input->post('tgl_pemain'),
                    'alamat_pemain' => $this->input->post('alamat_pemain'),
                    'umur_pemain' =>  $this->input->post('umur_pemain'),
                    'nohp_pemain' => $this->input->post('nohp_pemain'),
                    'email_pemain' =>  $this->input->post('email_pemain'),
                    'nm_ortu_pemain' => $this->input->post('nm_ortu_pemain'),
                    'asalkota_pemain' => $this->input->post('asalkota_pemain'),
                    'posisi_pemain' => $this->input->post('posisi_pemain'),
                    'image'=> $this->upload->file_name
            );
            $this->db->insert('pemain_bola', $data);
        }
     }

     public function hapus_data($id_pemain)
     {
         $this->M_pemain->hapus_data($id_pemain);
         redirect('Berita/datapemain');
     }

     public function edit_data($id_pemain)
     {
         $data ['pemain_bola']= $this->M_pemain->
         ambil_id_data($id_pemain);
        $this->load->view('data/edit_data', $data);
     }

     public function proses_edit_data($id_pemain)
     {
         $this->M_pemain->proses_edit($id_pemain);
         redirect('Pemain/datapemain');
     }
}
