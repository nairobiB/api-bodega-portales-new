<?php
defined('BASEPATH') or exit('No direct script access allowed');

class categorias extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->model('categorias_model');
    }
    public function index()
    {
        //$this->load->view->titulo= 'Gestion de entradas';
        $data['titulo']= 'Gestion de categorias';
        $data['listarcategorias']= $this->categorias_model->listarcategorias();
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('categorias/inicio', $data);
        $this->load->view('plantilla/pie');
        $this->load->view('plantilla/js');
        $this->load->view('plantilla/fin');
    }
    public function guardar()
    {
        try{
            if($this->input->post()){
                print_r($_POST);
                //$IdCat = $this->db->escape($_POST["IdCat"]);
                $NombreCat = $this->db->escape($_POST["NombreCat"]);
                $this->categorias_model->guardar($NombreCat);
                echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
            }
        }catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro'));
        }
    }
}