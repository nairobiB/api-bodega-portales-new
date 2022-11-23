<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
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
        $this->load->view('login/inicio');
    }
}