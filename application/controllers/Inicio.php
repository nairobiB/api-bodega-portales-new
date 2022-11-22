<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inicio extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->helper('html');
        $this->load->helper('url');
    }
    public function index()
    {
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('inicio/inicio');
        $this->load->view('plantilla/pie');
        $this->load->view('plantilla/js');
        $this->load->view('plantilla/fin');
    }
}
