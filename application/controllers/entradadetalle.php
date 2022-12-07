<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;
use Dompdf\Option;
use Dompdf\Exception as DomException;
use Dompdf\Options;


class entradadetalle extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->model('proveedores_model');
        $this->load->model('entradas_model');
        $this->load->model('productos_model');
        $this->load->model('personal_model');
    }
    public function index()
    {
        //$this->load->view->titulo= 'Gestion de entradas';
        $data['lista']= $this->proveedores_model->listarProveedores();
        $data['listarIdCompra']= $this->entradas_model->listarEntradasId();
        $data['listarProductos']= $this->productos_model->listarProductos();
        $data['listarUsuarios']= $this->personal_model->listarNomUsr();
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('entradadetalle/inicio', $data);
        $this->load->view('plantilla/pie');
        $this->load->view('plantilla/js');
        $this->load->view('plantilla/fin');
    }
    public function guardar()
    {
        try{
            if($this->input->post()){
                // print_r($_POST);
                $Fechaentrada = $this->db->escape($_POST["Fechaentrada"]);
                $IdProv = $this->db->escape($_POST["IdProv"]);
                $NomUsr = $this->db->escape($_POST["NomUsr"]);
                $this->entradas_model->guardarEntrada($Fechaentrada,$IdProv,$NomUsr);
                echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
            }
        }catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro'));
        }
    }
    public function guardardetalle()
    {
        try {
            // print_r($_POST);
            $IdCompra =  $this->db->escape($_POST["IdCompra"]);
            $IdProd = $this->db->escape($_POST["IdProd"]);
            $Cantidad = $this->db->escape($_POST["Cantidad"]);
            $Precio = $this->db->escape($_POST["Precio"]);
            $this->entradas_model->guardarDetEntrada($IdCompra,$IdProd,$Cantidad,$Precio);
            echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro'));
        }
    }
    public function modificardetalle()
    {
        try {
            // print_r($_POST);
            $IdCompra =  $this->db->escape($_POST["IdCompra"]);
            $IdProd = $this->db->escape($_POST["IdProd"]);
            $Cantidad = $this->db->escape($_POST["Cantidad"]);
            $Precio = $this->db->escape($_POST["Precio"]);
            $this->entradas_model->modificarDetalle($IdCompra,$IdProd,$Cantidad,$Precio);
            echo json_encode(array('success' => 1, 'msj' => 'Registro actualizado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al actualizar registro'));
        }
    }
    public function eliminardetalle()
    {
        try {
            // print_r($_POST);
            $IdCompra =  $this->db->escape($_POST["IdCompra"]);
            $IdProd = $this->db->escape($_POST["IdProd"]);
            $this->entradas_model->eliminarDetalle($IdCompra,$IdProd);
            echo json_encode(array('success' => 1, 'msj' => 'Registro eliminado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al eliminar registro'));
        }
    }
}