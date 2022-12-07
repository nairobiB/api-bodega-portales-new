<?php
defined('BASEPATH') or exit('No direct script access allowed');

class salidadetalle extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->model('productos_model');
        $this->load->model('personal_model');
        $this->load->model('salidas_model');
    }
    public function index()
    {
        $data['titulo'] = 'Gestion de salidas';
        $data['listarProductos'] = $this->productos_model->listarProductos();
        $data['listarUsuarios'] = $this->personal_model->listarNomUsr();
        $data['listarIdVenta'] = $this->salidas_model->listarSalidasId();
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('salidadetalle/inicio', $data);
        $this->load->view('plantilla/pie');
        $this->load->view('plantilla/js');
        $this->load->view('plantilla/fin');
    }

    public function guardar()
    {
        try {
            if ($this->input->post()) {
                // print_r($_POST);
                $FechaVenta = $this->db->escape($_POST["FechaVenta"]);
                $NomUsr = $this->db->escape($_POST["NomUsr"]);
                $this->salidas_model->guardarSalida($FechaVenta, $NomUsr);
                echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
            }
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro'));
        }
    }
    public function guardardetalle()
    {
        try {
            // print_r($_POST);
            $Codsalida =  $this->db->escape($_POST["Codsalida"]);
            $IdProd = $this->db->escape($_POST["IdProd"]);
            $Cantidad = $this->db->escape($_POST["Cantidad"]);
            $Precsalida = $this->db->escape($_POST["Precsalida"]);
            $this->salidas_model->guardarDetSalida($Codsalida, $IdProd, $Cantidad, $Precsalida);
            echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro'));
        }
    }

    public function modificardetalleS()
    {
        try {
            // print_r($_POST);
            $Codsalida =  $this->db->escape($_POST["Codsalida"]);
            $IdProd = $this->db->escape($_POST["IdProd"]);
            $Cantidad = $this->db->escape($_POST["Cantidad"]);
            $Precsalida = $this->db->escape($_POST["Precsalida"]);
            $this->salidas_model->modificarDetalleS($Codsalida, $IdProd, $Cantidad, $Precsalida);
            echo json_encode(array('success' => 1, 'msj' => 'Registro actualizado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al actualizar registro'));
        }
    }
    public function eliminardetalleS()
    {
        try {
            // print_r($_POST);
            $Codsalida =  $this->db->escape($_POST["Codsalida"]);
            $IdProd = $this->db->escape($_POST["IdProd"]);
            $this->salidas_model->eliminarDetalleS($Codsalida, $IdProd);
            echo json_encode(array('success' => 1, 'msj' => 'Registro eliminado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al eliminar registro'));
        }
    }
}
