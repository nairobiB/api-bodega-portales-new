<?php
defined('BASEPATH') or exit('No direct script access allowed');

class productos extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->model('productos_model');
        $this->load->model('proveedores_model');
    }
    public function index()
    {
        //$this->load->view->titulo= 'Gestion de entradas';
        $data['titulo']= 'Gestion de productos';
        $data['lista']= $this->productos_model->listar();
        $data['listaProvs']= $this->proveedores_model->listar();
        // $data['listadetalle']= $this->productos_model->listardetalle();
        // $data['listarcategorias']= $this->productos_model->listarcategorias();
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('productos/inicio', $data);
        $this->load->view('plantilla/pie');
        $this->load->view('plantilla/js');
        $this->load->view('plantilla/fin');
        // $this->setModelo('productos');
        // $this->vista->datos = $this->modelo->listar();
        // $this->vista->datosproveedor = $this->modelo->listarproveedores();
        // $this->vista->render($this->vista->url);
    }
    public function guardarproductos()
    {
        try {
            print_r($_POST);
            $IdProd =  $this->db->escape($_POST["IdProd"]);
            $NomProd = $this->db->escape($_POST["NomProd"]);
            $PrecProd = $this->db->escape($_POST["PrecProd"]);
            $PrecCompra = $this->db->escape($_POST["PrecCompra"]);
            $stock = $this->db->escape($_POST["stock"]);
            $Descripcion = $this->db->escape($_POST["Descripcion"]);
            $IdProv = $this->db->escape($_POST["IdProv"]);
            $Estado = $this->db->escape($_POST["Estado"]);
            $IdCat = $this->db->escape($_POST["IdCat"]);
            $FechaCad = $this->db->escape($_POST["FechaCad"]);
            $numero_lote = $this->db->escape($_POST["numero_lote"]);
            $IdSucursal = $this->db->escape($_POST["IdSucursal"]);
            $this->entradas_model->guardarProductos($IdProd,$NomProd,$PrecProd,$PrecCompra,$stock,$Descripcion,$IdProv,$Estado, $IdCat,$FechaCad,$numero_lote,$IdSucursal);
            echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro'));
        }
    }
    public function modicarproductos()
    {
        try {
            print_r($_POST);
            $IdProd =  $this->db->escape($_POST["IdProd"]);
            $NomProd = $this->db->escape($_POST["NomProd"]);
            $PrecProd = $this->db->escape($_POST["PrecProd"]);
            $PrecCompra = $this->db->escape($_POST["PrecCompra"]);
            $stock = $this->db->escape($_POST["stock"]);
            $Descripcion = $this->db->escape($_POST["Descripcion"]);
            $IdProv = $this->db->escape($_POST["IdProv"]);
            $Estado = $this->db->escape($_POST["Estado"]);
            $IdCat = $this->db->escape($_POST["IdCat"]);
            $FechaCad = $this->db->escape($_POST["FechaCad"]);
            $numero_lote = $this->db->escape($_POST["numero_lote"]);
            $IdSucursal = $this->db->escape($_POST["IdSucursal"]);
            $this->entradas_model->modicarProductos($IdProd,$NomProd,$PrecProd,$PrecCompra,$stock,$Descripcion,$IdProv,$Estado, $IdCat,$FechaCad,$numero_lote,$IdSucursal);
            echo json_encode(array('success' => 1, 'msj' => 'Registro actualizado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al actualizar registro'));
        }
    }
    public function eliminarproductos()
    {
        try {
            print_r($_POST);
            $IdProd = $this->db->escape($_POST["IdProd"]);
            $this->entradas_model->eliminarProductos($IdProd);
            echo json_encode(array('success' => 1, 'msj' => 'Registro eliminado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al eliminar registro'));
        }
    }
    // function modificar()
    // {   try{
    //         print_r($_POST);
    //         $IdProd = $_POST['IdProd'];
    //         $NomProd = $_POST['NomProd'];
    //         $PrecProd = $_POST['PrecProd'];
    //         $PrecCompra = $_POST['PrecCompra'];
    //         $stock = $_POST['stock'];
    //         $Descripcion = $_POST['Descripcion'];
    //         $IdProv = $_POST['IdProv'];
    //         $IdCat = $_POST['IdCat'];
    //         $FechaCad = $_POST['FechaCad'];
    //         $numero_lote = $_POST['numero_lote'];
    //         $IdSucursal = $_POST['IdSucursal'];
    //         $this->setModelo('productos');
    //         $this->modelo->modificaproducto(["IdProd" => $IdProd,"NomProd" => $NomProd, "PrecProd" => $PrecProd, "PrecCompra" => $PrecCompra,
    //         "stock" => $stock,"Descripcion" => $Descripcion, "IdProv" => $IdProv, "IdCat" => $IdCat,
    //         "FechaCad" => $FechaCad, "numero_lote" => $numero_lote, "IdSucursal" => $IdSucursal]);
    //         echo json_encode(array('success' => 1, 'msj' => 'Registro actualizado'));
    //     } catch (\Throwable $th) {
    //         echo json_encode(array('success' => 0, 'msj' => 'Error al actualizar registro'));
    //     }
    // }
    // function eliminar()
    // {   try{
    //     print_r($_POST);
    //         $IdProd = $_POST['IdProd'];
    //         $this->setModelo('productos');
    //         $this->modelo->eliminarproducto(["IdProd" => $IdProd]);
    //         echo json_encode(array('success' => 1, 'msj' => 'Registro eliminado'));
    //     } catch (\Throwable $th) {
    //         echo json_encode(array('success' => 0, 'msj' => 'Error al eliminar registro'));
    //     }
    // }
}