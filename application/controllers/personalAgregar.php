<?php
defined('BASEPATH') or exit('No direct script access allowed');

class personalAgregar extends CI_Controller
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
        $this->load->view('personalAgregar/inicio');
        $this->load->view('plantilla/pie');
        $this->load->view('plantilla/js');
        $this->load->view('plantilla/fin');
        // $this->setModelo('personal');
        // $this->vista->datos = $this->modelo->listar();
        // $this->vista->datosusuario = $this->modelo->listarusuarios();
    }
    // function guardar()
    // {
    //     try {
    //         print_r($_POST);
    //         $IdPer = $_POST['IdPer'];
    //         $TelPer = $_POST['TelPer'];
    //         $NomPer = $_POST['NomPer'];
    //         $ApePer = $_POST['ApePer'];
    //         $DirPer = $_POST['DirPer'];
    //         $Email = $_POST['Email'];
    //         $FechaNac = $_POST['fecha_nacimineto'];
    //         $this->setModelo('personal');
    //         $this->modelo->guardarpersonal(["IdPer" => $IdPer, "TelPer" => $TelPer, "NomPer" => $NomPer, "ApePer" => $ApePer, "DirPer" => $DirPer, "Email" => $Email, "fecha_nacimineto" => $FechaNac]);
    //         echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
    //     } catch (\Throwable $th) {
    //         echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro'));
    //     }
    // }

    // function guardarusuario()
    // {
    //     try {
    //         print_r($_POST);
    //         $NomUsr = $_POST['NomUsr'];
    //         $Contra = $_POST['Contra'];
    //         $IdPer = $_POST['IdPer'];
    //         $nivel = $_POST['nivel'];
    //         $IdSucursal = $_POST['IdSucursal'];
    //         $this->setModelo('personal');
    //         $this->modelo->guardarusuario(["NomUsr" => $NomUsr, "Contra" => $Contra, "IdPer" => $IdPer, "nivel" => $nivel, "IdSucursal" => $IdSucursal]);
    //         echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
    //     } catch (\Throwable $th) {
    //         echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro'));
    //     }
    // }
}