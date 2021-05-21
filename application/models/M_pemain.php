<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pemain extends CI_Model {

    public function DataPemain()
    {
        return $this->db->get('pemain_bola')->result_array();
    }

    public function proses_tambah_data()
    {
        $data =[

            "nama_pemain" => $this->input->post('nama_pemain'),
            "tgl_pemain" => $this->input->post('tgl_pemain'),
            "alamat_pemain"  => $this->input->post('alamat_pemain'),
            "umur_pemain" => $this->input->post('umur_pemain'),
            "nohp_pemain" => $this->input->post('nohp_pemain'),
            "email_pemain" =>  $this->input->post('email_pemain'),
            "nm_ortu_pemain" => $this->input->post('nm_ortu_pemain'),
            "asalkota_pemain" => $this->input->post('asalkota_pemain'),
            "posisi_pemain" => $this->input->post('posisi_pemain'),
            "image" => $this->input->post('image'),

        ];

        $this->db->insert('pemain_bola', $data);
    }

    // public function input_data($table, $data){
    //     $q = $this->db->insert($table,$data);
    //     return $q;
    // }

    public function hapus_data($id_pemain)
    {
        $this->db->where('id_pemain', $id_pemain);
        $this->db->delete('pemain_bola');
    }

    public function ambil_id_data($id_pemain)
    {
        return $this->db->get_where('pemain_bola', ['id_pemain' => $id_pemain])->row_array();
    }

    public function proses_edit_data()
    {
        $data =[

            "nama_pemain" =>  $this->input->post('nama_pemain'),
            "tgl_pemain" => $this->input->post('tgl_pemain'),
            "alamat_pemain" => $this->input->post('alamat_pemain'),
            "umur_pemain" => $this->input->post('umur_pemain'),
            "nohp_pemain" => $this->input->post('nohp_pemain'),
            "email_pemain" => $this->input->post('email_pemain'),
            "nm_ortu__pemain" => $this->input->post('nn_ortu_pemain'),
            "asalkota_pemain" => $this->input->post('asalkota_pemain'),
            "posisi_pemain" => $this->input->post('posisi_pemain'),
            "image" => '',

        ];
        $this->db->where('id_pemain' , $this->input->post('id_pemain'));
        $this->db->update('pemain_bola', $data);
    }

}