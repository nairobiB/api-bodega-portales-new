<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;
use Dompdf\Option;
use Dompdf\Exception as DomException;
use Dompdf\Options;


class salidas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->model('salidas_model');
    }
    public function index()
    {
        $data['titulo'] = 'Gestion de salidas';
        $data['lista'] = $this->salidas_model->listar();
        $data['listadetalle'] = $this->salidas_model->listardetalleS();
        //$data['listarcategorias']= $this->salidas_model->listarcategorias();
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('salidas/inicio', $data);
        $this->load->view('plantilla/pie');
        $this->load->view('plantilla/js');
        $this->load->view('plantilla/fin');
    }

    public function imprimirsalidas()
    {
        $data['titulo']='salida';
        $data['lista']= $this->salidas_model->listardetalleS();
        $this->load->view('salida/imprimirsalidas', $data);
    }
    public function pdf()
    {
        $data['titulo']='salida';
        $data['lista']= $this->salidas_model->listardetalleS();
        $dompdf = new Dompdf();
        $dompdf->loadHtml('<h1>Ejemplo de pdf</h1>');

        $dompdf->setPaper('A4', 'landscape');


        $dompdf->render();


        $dompdf->stream();
    }


    public function modificarSalida()
    {
        try {
            if ($this->input->post()) {
                print_r($_POST);
                $Codsalida = $this->db->escape($_POST["Codsalida"]);
                $FechaVenta = $this->db->escape($_POST["FechaVenta"]);

                $NomUsr = $this->db->escape($_POST["NomUsr"]);
                $this->salidas_model->modificarSalida($Codsalida, $FechaVenta, $NomUsr);
                echo json_encode(array('success' => 1, 'msj' => 'Registro Actualizado'));
            }
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al actualizar registro'));
        }
    }
    public function eliminarSalida()
    {
        try {
            if ($this->input->post()) {
                print_r($_POST);
                $Codsalida = $this->db->escape($_POST["Codsalida"]);
                $this->salidas_model->eliminarSalida($Codsalida);
                echo json_encode(array('success' => 1, 'msj' => 'Registro Eliminado'));
            }
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al eliminar registro'));
        }
    }

    // function modificar()
    // {
    //     try {
    //         print_r($_POST);
    //         $Codsalida = $_POST['Codsalida'];
    //         $FechaVenta = $_POST['FechaVenta'];
    //         $NomUsr = $_POST['NomUsr'];
    //         $this->setModelo('salidas');
    //         $this->modelo->modificarsalida(["Codsalida" => $Codsalida, "FechaVenta" => $FechaVenta, "NomUsr" => $NomUsr]);
    //         echo json_encode(array('success' => 1, 'msj' => 'Registro actualizado'));
    //     } catch (\Throwable $th) {
    //         echo json_encode(array('success' => 0, 'msj' => 'Error al actualizar registro'));
    //     }
    // }
    // function eliminar()
    // {
    //     try {
    //         print_r($_POST);
    //         $Codsalida = $_POST['Codsalida'];
    //         $this->setModelo('salidas');
    //         $this->modelo->eliminarsalida(["Codsalida" => $Codsalida]);
    //         echo json_encode(array('success' => 1, 'msj' => 'Registro eliminado'));
    //     } catch (\Throwable $th) {
    //         echo json_encode(array('success' => 0, 'msj' => 'Error al eliminar registro'));
    //     }
    // }
}
