<?php
defined('BASEPATH') or exit('No direct script access allowed');

class sucursalesguardar extends CI_Controller
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
        $this->load->view('sucursalesguardar/inicio');
        $this->load->view('plantilla/pie');
        $this->load->view('plantilla/js');
        $this->load->view('plantilla/fin');
        // $this->setModelo('sucursales');
        // $this->vista->datos = $this->modelo->listar();
        // $this->vista->render($this->vista->url);
    }
    // function guardar()
    // {
    //     try {
    //         print_r($_POST);
    //         $IdSucursal = $_POST['IdSucursal'];
    //         $DescSucursal = $_POST['DescSucursal'];
    //         $telsucursal = $_POST['telsucursal'];
    //         $email = $_POST['email'];
    //         $direccionsucursal = $_POST['direccionsucursal'];
    //         $this->setModelo('sucursales');
    //         $this->modelo->guardar(["IdSucursal" => $IdSucursal, "DescSucursal" => $DescSucursal, "telsucursal" => $telsucursal, "email" => $email, "direccionsucursal" => $direccionsucursal,]);
    //         echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
    //     } catch (\Throwable $th) {
    //         echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro'));
    //     }
    // }
}