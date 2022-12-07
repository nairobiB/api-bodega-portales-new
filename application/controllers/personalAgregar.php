<?php
defined('BASEPATH') or exit('No direct script access allowed');

class personalAgregar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->model('personal_model');
    }
    public function index()
    {
        //$this->load->view->titulo= 'Gestion de entradas';
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('personalAgregar/inicio');
        $this->load->view('plantilla/pie');
        $this->load->view('plantilla/js');
        $this->load->view('plantilla/fin');
        // $this->setModelo('personal');
        // $this->vista->datos = $this->modelo->listar();
        // $this->vista->datosusuario = $this->modelo->listarusuarios();
    }

    public function guardar()
    {
        try {
            // print_r($_POST);
            $IdPer =  $this->db->escape($_POST["IdPer"]);
            $TelPer = $this->db->escape($_POST["TelPer"]);
            $NomPer = $this->db->escape($_POST["NomPer"]);
            $ApePer = $this->db->escape($_POST["ApePer"]);
            $DirPer = $this->db->escape($_POST["DirPer"]);
            $Email = $this->db->escape($_POST["Email"]);
            $fecha_nacimineto = $this->db->escape($_POST["fecha_nacimineto"]);
            $this->personal_model->guardarPersonal($IdPer, $TelPer, $NomPer, $ApePer, $DirPer, $Email, $fecha_nacimineto);
            echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
        } catch (\Throwable $th) {

            echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro '));
        }
    }
    public function modificar()
    {
        try {
            // print_r($_POST);
            $IdPer =  $this->db->escape($_POST["IdPer"]);
            $TelPer = $this->db->escape($_POST["TelPer"]);
            $NomPer = $this->db->escape($_POST["NomPer"]);
            $ApePer = $this->db->escape($_POST["ApePer"]);
            $DirPer = $this->db->escape($_POST["DirPer"]);
            $Email = $this->db->escape($_POST["Email"]);
            $Estado = $this->db->escape($_POST["Estado"]);
            $fecha_nacimineto = $this->db->escape($_POST["fecha_nacimineto"]);
            $this->personal_model->modificarPersonal($IdPer, $TelPer, $NomPer, $ApePer, $DirPer, $Email, $Estado, $fecha_nacimineto);
            echo json_encode(array('success' => 1, 'msj' => 'Registro actualizado'));
        } catch (\Throwable $th) {
            echo json_encode(array("success' => 0, 'msj' => 'Error al actualizar registro {$th}"));
        }
    }
    public function eliminar()
    {
        try {
            if ($this->input->post()) {
                // print_r($_POST);
                $IdPer = $this->db->escape($_POST["IdPer"]);
                $this->personal_model->eliminarPersonal($IdPer);
                echo json_encode(array('success' => 1, 'msj' => 'Registro Eliminado'));
            }
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al eliminar registro'));
        }
    }
}
