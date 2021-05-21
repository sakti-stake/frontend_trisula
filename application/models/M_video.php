<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_video extends CI_Model {

    public function DataVideo()
    {
        return $this->db->get('videos')->result_array();
    }

    public function proses_tambah_video()
    {
        $data =[

            "judul_videos" => $this->input->post('judul_videos',true),
            "video" => $this->input->post('video',true),
            "tanggal"  => $this->input->post('tanggal',true),
        ];

        $this->db->insert('videos', $data);
    }

    public function hapus_data_video($id_video)
    {
        $this->db->where('id_video', $id_video);
        $this->db->delete('videos');
    }

    public function ambil_id_data_video($id_video)
    {
        return $this->db->get_where('videos', ['id_video' => $id_video])->row_array();
    }

    public function proses_edit_video()
    {
        $data =[

            "judul_videos" => $this->input->post('judul_videos',true),
            "video" => $this->input->post('video',true),
            "tanggal"  => $this->input->post('tanggal',true),

        ];
        $this->db->where('id_video' , $this->input->post('id_video'));
        $this->db->update('videos', $data);
    }

}