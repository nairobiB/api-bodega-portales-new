<?php
defined('BASEPATH') or exit('No direct script access allowed');

class salidas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->model('salidas_model');
    }
    public function index()
    {
        $data['titulo']= 'Gestion de salidas';
        $data['lista']= $this->salidas_model->listar();
        $data['listadetalle']= $this->salidas_model->listardetalleS();
        //$data['listarcategorias']= $this->salidas_model->listarcategorias();
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('salidas/inicio', $data);
        $this->load->view('plantilla/pie');
        $this->load->view('plantilla/js');
        $this->load->view('plantilla/fin');
    }
    // function modificar()
    // {
    //     try {
    //         print_r($_POST);
    //         $Codsalida = $_POST['Codsalida'];
    //         $FechaVenta = $_POST['FechaVenta'];
    //         $NomUsr = $_POST['NomUsr'];
    //         $this->setModelo('salidas');
    //         $this->modelo->modificarsalida(["Codsalida" => $Codsalida, "FechaVenta" => $FechaVenta, "NomUsr" => $NomUsr]);
    //         echo json_encode(array('success' => 1, 'msj' => 'Registro actualizado'));
    //     } catch (\Throwable $th) {
    //         echo json_encode(array('success' => 0, 'msj' => 'Error al actualizar registro'));
    //     }
    // }
    // function eliminar()
    // {
    //     try {
    //         print_r($_POST);
    //         $Codsalida = $_POST['Codsalida'];
    //         $this->setModelo('salidas');
    //         $this->modelo->eliminarsalida(["Codsalida" => $Codsalida]);
    //         echo json_encode(array('success' => 1, 'msj' => 'Registro eliminado'));
    //     } catch (\Throwable $th) {
    //         echo json_encode(array('success' => 0, 'msj' => 'Error al eliminar registro'));
    //     }
    // }
}