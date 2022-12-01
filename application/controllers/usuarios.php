<?php
defined('BASEPATH') or exit('No direct script access allowed');

class usuarios extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->model('usuarios_model');
        $this->load->model('personal_model');
        $this->load->model('sucursal_model');
    }
    public function index()
    {
        //$this->load->view->titulo= 'Gestion de entradas';
        $data['titulo'] = 'Gestion de Usuarios';
        $data['listaUsuarios'] = $this->usuarios_model->listarUsuarios();
        $data['listarPersonal'] = $this->personal_model->listarPersonal();
        $data['listarSucursales'] = $this->sucursal_model->listarSucursales();
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('usuarios/inicio', $data);
        $this->load->view('plantilla/pie');
        $this->load->view('plantilla/js');
        $this->load->view('plantilla/fin');
    }
    public function guardar()
    {
        try {
            if ($this->input->post()) {
                print_r($_POST);
                $NomUsr = $this->db->escape($_POST["NomUsr"]);
                $Contra = $this->db->escape($_POST["Contra"]);
                $IdPer = $this->db->escape($_POST["IdPer"]);
                $nivel = $this->db->escape($_POST["nivel"]);
                $IdSucursal = $this->db->escape($_POST["IdSucursal"]);
                $this->usuarios_model->guardar($NomUsr, $Contra, $IdPer, $nivel, $IdSucursal);
                echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
            }
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro'));
        }
    }
    public function modificarusuario()
    {
        try {
            print_r($_POST);
            $NomUsr = $this->db->escape($_POST["NomUsr"]);
            $Contra = $this->db->escape($_POST["Contra"]);
            $IdPer = $this->db->escape($_POST["IdPer"]);
            $nivel = $this->db->escape($_POST["nivel"]);
            $IdSucursal = $this->db->escape($_POST["IdSucursal"]);
            $this->usuarios_model->modificarUsuario($NomUsr, $Contra, $IdPer, $nivel, $IdSucursal);
            echo json_encode(array('success' => 1, 'msj' => 'Registro actualizado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al actualizar registro'));
        }
    }
    public function eliminarusuario()
    {
        try {
            print_r($_POST);
            $NomUsr = $this->db->escape($_POST["NomUsr"]);
            $IdPer = $this->db->escape($_POST["IdPer"]);
            $this->entradas_model->eliminarUsuario($NomUsr, $IdPer);
            echo json_encode(array('success' => 1, 'msj' => 'Registro eliminado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al eliminar registro'));
        }
    }
}
