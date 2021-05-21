<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_players extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {

            $data ['title']= 'Trisula Fc';
            $this->load->view('layout/header');
            $this->load->view('auth/players');
            $this->load->view('layout/footer');
        }
    }