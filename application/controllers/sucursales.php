<?php
defined('BASEPATH') or exit('No direct script access allowed');
use Dompdf\Dompdf;
use Dompdf\Option;
use Dompdf\Exception as DomException;
use Dompdf\Options;

class sucursales extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->model('sucursal_model');
    }
    public function index()
    {
        // $data['titulo']= 'Gestion de sucursales';
        $data['lista']= $this->sucursal_model->listar();
        // $data['listaUsuarios']= $this->sucursal_model->listarUsuarios();
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('sucursales/inicio', $data);
        $this->load->view('plantilla/pie');
        $this->load->view('plantilla/js');
        $this->load->view('plantilla/fin');
    }
    public function imprimirsucursal()
    {
        $data['titulo']='sucursales';
        $data['lista']= $this->sucursal_model->listar();
        $this->load->view('sucursales/imprimirsucursal', $data);
    }
    public function pdf()
    {
        $data['titulo']='sucursales';
        $data['lista']= $this->sucursal_model->listar();
        $dompdf = new Dompdf();
        $dompdf->loadHtml('<h1>Ejemplo de pdf</h1>');

        $dompdf->setPaper('A4', 'landscape');


        $dompdf->render();


        $dompdf->stream();
    }
    public function guardar()
    {
        try {
            print_r($_POST);
            // $IdSucursal =  $this->db->escape($_POST["IdSucursal"]);
            $DescSucursal = $this->db->escape($_POST["DescSucursal"]);
            $telsucursal = $this->db->escape($_POST["telsucursal"]);
            $email = $this->db->escape($_POST["email"]);
            $direccionsucursal = $this->db->escape($_POST["direccionsucursal"]);
            $this->sucursal_model->guardarSucursales($DescSucursal,$telsucursal,$email,$direccionsucursal);
            echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro'));
        }
    }
    public function modificar()
    {
        try {
            print_r($_POST);
            print_r($_POST);
            $IdSucursal =  $this->db->escape($_POST["IdSucursal"]);
            $DescSucursal = $this->db->escape($_POST["DescSucursal"]);
            $telsucursal = $this->db->escape($_POST["telsucursal"]);
            $email = $this->db->escape($_POST["email"]);
            $direccionsucursal = $this->db->escape($_POST["direccionsucursal"]);
            $this->sucursal_model->modificarSucursales($IdSucursal,$DescSucursal,$telsucursal,$email,$direccionsucursal);
            echo json_encode(array('success' => 1, 'msj' => 'Registro actualizado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al actualizar registro'));
        }
    }
    public function eliminar()
    {
        try {
            print_r($_POST);
            $IdSucursal =  $this->db->escape($_POST["IdSucursal"]);
            $this->sucursal_model->eliminarSucursales($IdSucursal);
            echo json_encode(array('success' => 1, 'msj' => 'Registro eliminado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al eliminar registro'));
        }
    }
    // function modificar()
    // {
    //     try {
    //         print_r($_POST);
    //         $IdSucursal = $_POST['IdSucursal'];
    //         $DescSucursal = $_POST['DescSucursal'];
    //         $telsucursal = $_POST['telsucursal'];
    //         $email = $_POST['email'];
    //         $direccionsucursal = $_POST['direccionsucursal'];
    //         $this->setModelo('sucursales');
    //         $this->modelo->modificarsucursal(["IdSucursal" => $IdSucursal, "DescSucursal" => $DescSucursal, "telsucursal" => $telsucursal, "email" => $email,"direccionsucursal" => $direccionsucursal]);
    //         echo json_encode(array('success' => 1, 'msj' => 'Registro actualizado'));
    //     } catch (\Throwable $th) {
    //         echo json_encode(array('success' => 0, 'msj' => 'Error al actualizar registro'));
    //     }
    // }
    // function eliminar()
    // {   try{
    //     print_r($_POST);
    //         $IdSucursal = $_POST['IdSucursal'];
    //         $this->setModelo('sucursales');
    //         $this->modelo->eliminarS(["IdSucursal" => $IdSucursal]);
    //         echo json_encode(array('success' => 1, 'msj' => 'Registro eliminado'));
    //     } catch (\Throwable $th) {
    //         echo json_encode(array('success' => 0, 'msj' => 'Error al eliminar registro'));
    //     }
    // }
}