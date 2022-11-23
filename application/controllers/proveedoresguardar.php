<?php
defined('BASEPATH') or exit('No direct script access allowed');

class proveedoresguardar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->model('proveedores_model');
    }
    public function index()
    {
        $data['titulo']= 'Gestion de proveedores';
        $data['lista']= $this->proveedores_model->listar();
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('proveedoresguardar/inicio', $data);
        $this->load->view('plantilla/pie');
        $this->load->view('plantilla/js');
        $this->load->view('plantilla/fin');
        // $this->setModelo('productos');
        // $this->vista->datosproveedor = $this->modelo->listarproveedores();
        // $this->vista->render($this->vista->url);
    }
    // function guardar()
    // {
    //     try {
    //         print_r($_POST);
    //         $IdProv = $_POST['IdProv'];
    //         $Nomproveedor = $_POST['Nomproveedor'];
    //         $Telproveedor = $_POST['Telproveedor'];
    //         $Dirproveedor = $_POST['Dirproveedor'];
    //         $Estado = $_POST['Estado'];
    //         $email = $_POST['email'];
    //         $this->setModelo('proveedores');
    //         $this->modelo->guardar(["IdProv" => $IdProv, "Nomproveedor" => $Nomproveedor, "Telproveedor" => $Telproveedor, "Dirproveedor" => $Dirproveedor, "Estado" => $Estado, "email" => $email]);
    //         echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
    //     } catch (\Throwable $th) {
    //         echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro'));
    //     }
    // }
    // function modificar() 
    // {   try{
    //         print_r($_POST);
    //         $IdProv= $_POST['IdProv'];
    //         $Nomproveedor = $_POST['Nomproveedor'];
    //         $Telproveedor = $_POST['Telproveedor'];
    //         $Dirproveedor = $_POST['Dirproveedor'];
    //         $email = $_POST['email'];
    //         $this->setModelo('proveedores');
    //         $this->modelo->modificarproveedor(["IdProv" => $IdProv,"Nomproveedor" => $Nomproveedor, "Telproveedor" => $Telproveedor, "Dirproveedor" => $Dirproveedor, "email" => $email]);
    //         echo json_encode(array('success' => 1, 'msj' => 'Registro actualizado'));
    //     } catch (\Throwable $th) {
    //         echo json_encode(array('success' => 0, 'msj' => 'Error al actualizar registro'));
    //     }
    // }
    // function eliminar()
    // {   try{
    //     print_r($_POST);
    //         $IdProv = $_POST['IdProv'];
    //         $this->setModelo('proveedores');
    //         $this->modelo->eliminarProv(["IdProv" => $IdProv]);
    //         echo json_encode(array('success' => 1, 'msj' => 'Registro eliminado'));
    //     } catch (\Throwable $th) {
    //         echo json_encode(array('success' => 0, 'msj' => 'Error al eliminar registro'));
    //     }
    // }
}