<?php
defined('BASEPATH') or exit('No direct script access allowed');

class personal extends CI_Controller
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
        $data['titulo']= 'Gestion de personal';
        $data['lista']= $this->personal_model->listar();
        // $data['listadetalle']= $this->entradas_model->listardetalle();
        // $data['listarcategorias']= $this->entradas_model->listarcategorias();
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('personal/inicio', $data);
        $this->load->view('plantilla/pie');
        $this->load->view('plantilla/js');
        $this->load->view('plantilla/fin');
    }
    // function modificarP()
    // {
    //     try {
    //         print_r($_POST);
    //         $IdPer = $_POST['IdPer'];
    //         $TelPer = $_POST['TelPer'];
    //         $NomPer = $_POST['NomPer'];
    //         $ApePer = $_POST['ApePer'];
    //         $DirPer = $_POST['DirPer'];
    //         $Email = $_POST['Email'];
    //         $Estado = $_POST['Estado'];
    //         $fecha_nacimineto = $_POST['fecha_nacimineto'];
    //         $this->setModelo('personal');
    //         $this->modelo->modificarpersonal(["IdPer" => $IdPer, "TelPer" => $TelPer, "NomPer" => $NomPer, "ApePer" => $ApePer, "DirPer" => $DirPer, "Email" => $Email, "Estado" => $Estado, "fecha_nacimineto" => $fecha_nacimineto]);
    //         echo json_encode(array('success' => 1, 'msj' => 'Registro actualizado'));
    //     } catch (\Throwable $th) {
    //         echo json_encode(array('success' => 0, 'msj' => 'Error al actualizar registro' + $th));
    //     }
    // }
    // function eliminarP()
    // {
    //     try {
    //         print_r($_POST);
    //         $IdPer = $_POST['IdPer'];
    //         $this->setModelo('personal');
    //         $this->modelo->eliminarpersonal(["IdPer" => $IdPer]);
    //         echo json_encode(array('success' => 1, 'msj' => 'Registro eliminado'));
    //     } catch (\Throwable $th) {
    //         echo json_encode(array('success' => 0, 'msj' => 'Error al eliminar registro'));
    //     }
    // }
    // function modificarU()
    // {
    //     try {
    //         print_r($_POST);
    //         $NomUsr = $_POST['NomUsr'];
    //         $Contra = $_POST['Contra'];
    //         $IdPer = $_POST['IdPer'];
    //         $Estado = $_POST['Estado'];
    //         $nivel = $_POST['nivel'];
    //         $IdSucursal = $_POST['IdSucursal'];
    //         $this->setModelo('personal');
    //         $this->modelo->modificarusuario(["NomUsr" => $NomUsr, "Contra" => $Contra, "IdPer" => $IdPer, "Estado" => $Estado, "nivel" => $nivel, "IdSucursal" => $IdSucursal]);
    //         echo json_encode(array('success' => 1, 'msj' => 'Registro actualizado'));
    //     } catch (\Throwable $th) {
    //         echo json_encode(array('success' => 0, 'msj' => 'Error al actualizar registro' + $th));
    //     }
    // }
    // function eliminarU()
    // {
    //     try {
    //         print_r($_POST);
    //         $NomUsr = $_POST['NomUsr'];
    //         $this->setModelo('personal');
    //         $this->modelo->eliminarusuario(["NomUsr" => $NomUsr]);
    //         echo json_encode(array('success' => 1, 'msj' => 'Registro eliminado'));
    //     } catch (\Throwable $th) {
    //         echo json_encode(array('success' => 0, 'msj' => 'Error al eliminar registro'));
    //     }
    // }
}