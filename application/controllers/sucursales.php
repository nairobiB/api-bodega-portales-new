<?php
defined('BASEPATH') or exit('No direct script access allowed');

class sucursales extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->model('sucursal_model');
    }
    public function index()
    {
        // $data['titulo']= 'Gestion de sucursales';
        $data['lista']= $this->sucursal_model->listar();
        // $data['listaUsuarios']= $this->sucursal_model->listarUsuarios();
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('sucursales/inicio', $data);
        $this->load->view('plantilla/pie');
        $this->load->view('plantilla/js');
        $this->load->view('plantilla/fin');
    }
    // function modificar()
    // {
    //     try {
    //         print_r($_POST);
    //         $IdSucursal = $_POST['IdSucursal'];
    //         $DescSucursal = $_POST['DescSucursal'];
    //         $telsucursal = $_POST['telsucursal'];
    //         $email = $_POST['email'];
    //         $direccionsucursal = $_POST['direccionsucursal'];
    //         $this->setModelo('sucursales');
    //         $this->modelo->modificarsucursal(["IdSucursal" => $IdSucursal, "DescSucursal" => $DescSucursal, "telsucursal" => $telsucursal, "email" => $email,"direccionsucursal" => $direccionsucursal]);
    //         echo json_encode(array('success' => 1, 'msj' => 'Registro actualizado'));
    //     } catch (\Throwable $th) {
    //         echo json_encode(array('success' => 0, 'msj' => 'Error al actualizar registro'));
    //     }
    // }
    // function eliminar()
    // {   try{
    //     print_r($_POST);
    //         $IdSucursal = $_POST['IdSucursal'];
    //         $this->setModelo('sucursales');
    //         $this->modelo->eliminarS(["IdSucursal" => $IdSucursal]);
    //         echo json_encode(array('success' => 1, 'msj' => 'Registro eliminado'));
    //     } catch (\Throwable $th) {
    //         echo json_encode(array('success' => 0, 'msj' => 'Error al eliminar registro'));
    //     }
    // }
}