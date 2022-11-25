<?php
defined('BASEPATH') or exit('No direct script access allowed');

class entradas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->model('entradas_model');
    }
    public function index()
    {
        //$this->load->view->titulo= 'Gestion de entradas';
        $data['titulo']= 'Gestion de entradas';
        $data['lista']= $this->entradas_model->listar();
        $data['listadetalle']= $this->entradas_model->listardetalle();
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('entradas/inicio', $data);
        $this->load->view('plantilla/pie');
        $this->load->view('plantilla/js');
        $this->load->view('plantilla/fin');
        //$this->load->model('entradas');
        /*$this->load->view->datos = $this->load->model->listar();
        $this->load->view->datosdetalle = $this->load->model->listardetalle();
        $this->load->view->datoscate = $this->modelo->listarcategorias();*/
    }
    // function guardar()
    // {
    //     try {
    //         print_r($_POST);
    //         $Fechaentrada = $_POST['Fechaentrada'];
    //         $IdProv = $_POST['IdProv'];
    //         $NomUsr = $_POST['NomUsr'];
    //         $this->setModelo('entradas');
    //         $this->modelo->guardar(["Fechaentrada" => $Fechaentrada, "IdProv" => $IdProv, "NomUsr" => $NomUsr]);
    //         echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
    //     } catch (\Throwable $th) {
    //         echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro'));
    //     }
    // }
    // function modificar()
    // {
    //     try {
    //         print_r($_POST);
    //         $IdCompra = $_POST['IdCompra'];
    //         $Fechaentrada = $_POST['Fechaentrada'];
    //         $IdProv = $_POST['IdProv'];
    //         $NomUsr = $_POST['NomUsr'];
    //         $this->setModelo('entradas');
    //         $this->modelo->modificarentrada(["IdCompra" => $IdCompra, "Fechaentrada" => $Fechaentrada, "IdProv" => $IdProv, "NomUsr" => $NomUsr]);
    //         echo json_encode(array('success' => 1, 'msj' => 'Registro actualizado'));
    //     } catch (\Throwable $th) {
    //         echo json_encode(array('success' => 0, 'msj' => 'Error al actualizar registro'));
    //     }
    // }
    // function eliminar()
    // {
    //     try {
    //         print_r($_POST);
    //         $IdCompra = $_POST['IdCompra'];
    //         $this->setModelo('entradas');
    //         $this->modelo->eliminarentrada(["IdCompra" => $IdCompra]);
    //         echo json_encode(array('success' => 1, 'msj' => 'Registro eliminado'));
    //     } catch (\Throwable $th) {
    //         echo json_encode(array('success' => 0, 'msj' => 'Error al eliminar registro'));
    //     }
    // }
    // function modificarcategoria()
    // {
    //     try {
    //         print_r($_POST);
    //         $IdCat = $_POST['IdCat'];
    //         $NombreCat = $_POST['NombreCat'];
    //         $this->setModelo('entradas');
    //         $this->modelo->modificarcate(["IdCat" => $IdCat, "NombreCat" => $NombreCat]);
    //         echo json_encode(array('success' => 1, 'msj' => 'Registro actualizado'));
    //     } catch (\Throwable $th) {
    //         echo json_encode(array('success' => 0, 'msj' => 'Error al actualizar registro'));
    //     }
    // }
    // function eliminarcategoria()
    // {
    //     try {
    //         print_r($_POST);
    //         $IdCat = $_POST['IdCat'];
    //         $this->setModelo('entradas');
    //         $this->modelo->eliminarcate(["IdCat" => $IdCat]);
    //         echo json_encode(array('success' => 1, 'msj' => 'Registro eliminado'));
    //     } catch (\Throwable $th) {
    //         echo json_encode(array('success' => 0, 'msj' => 'Error al eliminar registro'));
    //     }
    // }
}