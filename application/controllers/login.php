<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->model('login_model');
    }
    public function index()
    {
        $this->load->view('plantilla/head');
        $this->load->view('login/inicio');
    }
    public function iniciosesion()
    {
        print_r($_POST);
        redirect('inicio');
        // if($this->input->post()){
        //     print_r($_POST);
            // $NomUsr =  $this->db->escape($_POST["NomUsr"]);
            // $Contra = $this->db->escape($_POST["Contra"]);
            // $r = $this->login_model->iniciarSesion($NomUsr,$Contra);
            // if($r){
            //     redirect('inicio');
            // }
        //}
    }
}