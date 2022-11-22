<?php
defined('BASEPATH') or exit('No direct script access allowed');

class productoguardar extends CI_Controller
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
        $this->load->view('productoguardar/inicio');
        $this->load->view('plantilla/pie');
        $this->load->view('plantilla/js');
        $this->load->view('plantilla/fin');
        // $this->setModelo('productos');
        // $this->vista->datos = $this->modelo->listar();
        // $this->vista->datosproveedor = $this->modelo->listarproveedores();
        // $this->vista->render($this->vista->url);
    }
    // function guardar()
    // {
    //     try {
    //         print_r($_POST);
    //         $IdProd = $_POST['IdProd'];
    //         $NomProd = $_POST['NomProd'];
    //         $PrecProd = $_POST['PrecProd'];
    //         $PrecCompra = $_POST['PrecCompra'];
    //         $stock = $_POST['stock'];
    //         $Descripcion = $_POST['Descripcion'];
    //         $IdProv = $_POST['IdProv'];
    //         $Estado = $_POST['Estado'];
    //         $IdCat = $_POST['IdCat'];
    //         $FechaCad = $_POST['FechaCad'];
    //         $numero_lote = $_POST['numero_lote'];
    //         $IdSucursal = $_POST['IdSucursal'];
    //         $this->setModelo('productos');
    //         $this->modelo->guardar(["IdProd" => $IdProd, "NomProd" => $NomProd, "PrecProd" => $PrecProd, "PrecCompra" => $PrecCompra, "stock" => $stock, "Descripcion" => $Descripcion, "IdProv" => $IdProv, "Estado" => $Estado, "IdCat" => $IdCat, "FechaCad" => $FechaCad, "numero_lote" => $numero_lote, "IdSucursal" => $IdSucursal]);
    //         echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
    //     } catch (\Throwable $th) {
    //         echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro'));
    //     }
    // }
}