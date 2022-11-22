<?php
defined('BASEPATH') or exit('No direct script access allowed');

class entradadetalle extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('html');
        $this->load->helper('url');
    }
    public function index()
    {
        //$this->load->view->titulo= 'Gestion de entradas';
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('entradadetalle/inicio');
        $this->load->view('plantilla/pie');
        $this->load->view('plantilla/js');
        $this->load->view('plantilla/fin');
        //$this->load->model('entradas');
        /*$this->load->view->datos = $this->load->model->listar();
        $this->load->view->datosdetalle = $this->load->model->listardetalle();
        $this->load->view->datoscate = $this->modelo->listarcategorias();*/
    }
    /*function guardar()
    {
        try {
            print_r($_POST);
            $Fechaentrada = $_POST['Fechaentrada'];
            $IdProv = $_POST['IdProv'];
            $NomUsr = $_POST['NomUsr'];
            $this->setModelo('entradas');
            $this->modelo->guardar(["Fechaentrada" => $Fechaentrada, "IdProv" => $IdProv, "NomUsr" => $NomUsr]);
            echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro'));
        }
    }
    function guardardetalle()
    {
        try {
            print_r($_POST);
            $IdCompra = $_POST['IdCompra'];
            $IdProd = $_POST['IdProd'];
            $Cantidad = $_POST['Cantidad'];
            $Precio = $_POST['Precio'];
            $this->setModelo('entradas');
            $this->modelo->guardardetalle(["IdCompra" => $IdCompra, "IdProd" => $IdProd, "Cantidad" => $Cantidad, "Precio" => $Precio]);
            echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro'));
        }
    }
    function guardarcategoria()
    {
        try {
            print_r($_POST);
            $IdCat = $_POST['IdCat'];
            $NombreCat = $_POST['NombreCat'];
            $this->setModelo('entradas');
            $this->modelo->guardarcategoria(["IdCat" => $IdCat, "NombreCat" => $NombreCat]);
            echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro'));
        }
    }
    function modificardetalle()
    {
        try {
            print_r($_POST);
            $IdCompra = $_POST['IdCompra'];
            $IdProd = $_POST['IdProd'];
            $Cantidad = $_POST['Cantidad'];
            $Precio = $_POST['Precio'];
            $this->setModelo('entradas');
            $this->modelo->modificardetalle(["IdCompra" => $IdCompra, "IdProd" => $IdProd, "Cantidad" => $Cantidad, "Precio" => $Precio]);
            echo json_encode(array('success' => 1, 'msj' => 'Registro actualizado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al actualizar registro'));
        }
    }
    function eliminardetalle()
    {
        try {
            print_r($_POST);
            $IdCompra = $_POST['IdCompra'];
            $IdProd = $_POST['IdProd'];
            $this->setModelo('entradas');
            $this->modelo->eliminarDetalle(["IdCompra" => $IdCompra, "IdProd" => $IdProd]);
            echo json_encode(array('success' => 1, 'msj' => 'Registro eliminado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al eliminar registro'));
        }
    }*/
}