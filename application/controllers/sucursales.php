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
    public function guardarsucursales()
    {
        try {
            print_r($_POST);
            $IdSucursal =  $this->db->escape($_POST["IdSucursal"]);
            $DescSucursal = $this->db->escape($_POST["DescSucursal"]);
            $TelSucursal = $this->db->escape($_POST["TelSucursal"]);
            $email = $this->db->escape($_POST["email"]);
            $direccionsucursal = $this->db->escape($_POST["direccionsucursal"]);
            $this->entradas_model->guardarSucursales($IdSucursal,$DescSucursal,$TelSucursal,$email,$direccionsucursal);
            echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro'));
        }
    }
    public function modificarsucursales()
    {
        try {
            print_r($_POST);
            print_r($_POST);
            $IdSucursal =  $this->db->escape($_POST["IdSucursal"]);
            $DescSucursal = $this->db->escape($_POST["DescSucursal"]);
            $TelSucursal = $this->db->escape($_POST["TelSucursal"]);
            $email = $this->db->escape($_POST["email"]);
            $direccionsucursal = $this->db->escape($_POST["direccionsucursal"]);
            $this->entradas_model->modificarSucursales($IdSucursal,$DescSucursal,$TelSucursal,$email,$direccionsucursal);
            echo json_encode(array('success' => 1, 'msj' => 'Registro actualizado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al actualizar registro'));
        }
    }
    public function eliminarsucursales()
    {
        try {
            print_r($_POST);
            $IdSucursal =  $this->db->escape($_POST["IdSucursal"]);
            $this->entradas_model->eliminarSucursales($IdSucursal);
            echo json_encode(array('success' => 1, 'msj' => 'Registro eliminado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al eliminar registro'));
        }
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