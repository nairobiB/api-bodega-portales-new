<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;
use Dompdf\Option;
use Dompdf\Exception as DomException;
use Dompdf\Options;

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
    }
    public function imprimirproveedores()
    {
        $data['titulo']='proveedoresguardar';
        $data['lista']= $this->proveedores_model->listar();
        $this->load->view('proveedoresguardar/imprimirproveedores', $data);
    }
    public function pdf()
    {
        $data['titulo']='proveedoresguardar';
        $data['lista']= $this->proveedores_model->listar();
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
            $Nomproveedor = $this->db->escape($_POST["Nomproveedor"]);
            $Telproveedor = $this->db->escape($_POST["Telproveedor"]);
            $Dirproveedor = $this->db->escape($_POST["Dirproveedor"]);
            $email = $this->db->escape($_POST["email"]);
            $this->proveedores_model->guardarProveedor($Nomproveedor,$Telproveedor,$Dirproveedor, $email);
            echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro'));
        }
    }
    public function modificar()
    {
        try {
            // print_r($_POST);
            $IdProv =  $this->db->escape($_POST["IdProv"]);
            $Nomproveedor = $this->db->escape($_POST["Nomproveedor"]);
            $Telproveedor = $this->db->escape($_POST["Telproveedor"]);
            $Dirproveedor = $this->db->escape($_POST["Dirproveedor"]);
            $email = $this->db->escape($_POST["email"]);
            $this->proveedores_model->modificarProveedor($IdProv,$Nomproveedor,$Telproveedor,$Dirproveedor, $email);
            echo json_encode(array('success' => 1, 'msj' => 'Registro actualizado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al actualizar registro'));
        }
    }

    public function eliminar()
    {
        try{
            if($this->input->post()){
                // print_r($_POST);
                $IdProv = $this->db->escape($_POST["IdProv"]);
                $this->proveedores_model->eliminarProveedor($IdProv);
                echo json_encode(array('success' => 1, 'msj' => 'Registro Eliminado'));
            }
        }catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al eliminar registro'));
        }
    }
}