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