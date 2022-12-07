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
        $data['titulo'] = 'Gestion de productos';
        $data['lista'] = $this->productos_model->listar();
        $data['listaProvs'] = $this->proveedores_model->listar();
        $data['listarProveedores'] = $this->proveedores_model->listarProveedores();
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
    public function imprimirproducto()
    {
        $data['titulo']='productos';
        $data['lista']= $this->productos_model->listar();
        $this->load->view('productos/imprimirproducto', $data);
    }
    public function pdf()
    {
        $data['titulo']='productos';
        $data['lista']= $this->productos_model->listar();
        $dompdf = new Dompdf();
        $dompdf->loadHtml('<h1>Ejemplo de pdf</h1>');

        $dompdf->setPaper('A4', 'landscape');


        $dompdf->render();


        $dompdf->stream();
    }
    public function guardar()
    {
        try {
            // print_r($_POST);
            $IdProd =  $this->db->escape($_POST["IdProd"]);
            $NomProd = $this->db->escape($_POST["NomProd"]);
            $PrecProd = $this->db->escape($_POST["PrecProd"]);
            $PrecCompra = $this->db->escape($_POST["PrecCompra"]);
            $stock = $this->db->escape($_POST["stock"]);
            $Descripcion = $this->db->escape($_POST["Descripcion"]);
            $IdProv = $this->db->escape($_POST["IdProv"]);
            $IdCat = $this->db->escape($_POST["IdCat"]);
            $FechaCad = $this->db->escape($_POST["FechaCad"]);
            $numero_lote = $this->db->escape($_POST["numero_lote"]);
            $IdSucursal = $this->db->escape($_POST["IdSucursal"]);
            $this->productos_model->guardarProductos($IdProd, $NomProd, $PrecProd, $PrecCompra, $stock, $Descripcion, $IdProv, $IdCat, $FechaCad, $numero_lote, $IdSucursal);
            echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro'));
        }
    }
    public function modificar()
    {
        try {
            // print_r($_POST);
            $IdProd =  $this->db->escape($_POST["IdProd"]);
            $NomProd = $this->db->escape($_POST["NomProd"]);
            $PrecProd = $this->db->escape($_POST["PrecProd"]);
            $PrecCompra = $this->db->escape($_POST["PrecCompra"]);
            $stock = $this->db->escape($_POST["stock"]);
            $Descripcion = $this->db->escape($_POST["Descripcion"]);
            $IdProv = $this->db->escape($_POST["IdProv"]);
            $IdCat = $this->db->escape($_POST["IdCat"]);
            $FechaCad = $this->db->escape($_POST["FechaCad"]);
            $numero_lote = $this->db->escape($_POST["numero_lote"]);
            $IdSucursal = $this->db->escape($_POST["IdSucursal"]);
            $this->productos_model->modificarProductos($IdProd, $NomProd, $PrecProd, $PrecCompra, $stock, $Descripcion, $IdProv, $IdCat, $FechaCad, $numero_lote, $IdSucursal);
            echo json_encode(array('success' => 1, 'msj' => 'Registro actualizado'));
        } catch (\Throwable $th) {
            echo json_encode(array("success' => 0, 'msj' => 'Error al actualizar registro {$th}"));
        }
    }
    public function eliminar()
    {
        try {
            // print_r($_POST);
            $IdProd = $this->db->escape($_POST["IdProd"]);
            $this->productos_model->eliminarProductos($IdProd);
            echo json_encode(array('success' => 1, 'msj' => 'Registro eliminado'));
        } catch (\Throwable $th) {
            echo json_encode(array("success' => 0, 'msj' => 'Error al eliminar registro{$th}"));
        }
    }
}
