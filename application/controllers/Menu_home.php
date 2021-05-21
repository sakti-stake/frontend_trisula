<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_home extends CI_Controller {

    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('auth/index');
        $this->load->view('layout/footer');

    }
}