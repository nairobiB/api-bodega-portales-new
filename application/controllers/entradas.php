<?php
defined('BASEPATH') or exit('No direct script access allowed');

class entradas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->model('entradas_model');
    }
    public function index()
    {
        //$this->load->view->titulo= 'Gestion de entradas';
        $data['titulo']= 'Gestion de entradas';
        $data['lista']= $this->entradas_model->listar(); 
        $data['listadetalle']= $this->entradas_model->listardetalle();
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('entradas/inicio', $data);
        $this->load->view('plantilla/pie');
        $this->load->view('plantilla/js');
        $this->load->view('plantilla/fin');
        //$this->load->model('entradas');
        /*$this->load->view->datos = $this->load->model->listar();
        $this->load->view->datosdetalle = $this->load->model->listardetalle();
        $this->load->view->datoscate = $this->modelo->listarcategorias();*/
    }
    public function imprimirentradas()
    {
        $data['titulo']='entradas';
        $data['lista']= $this->entradas_model->listardetalle();
        $this->load->view('entradas/imprimirentradas', $data);
    }
    public function pdf()
    {
        $data['titulo']='entradas';
        $data['lista']= $this->entradas_model->listardetalle();
        $dompdf = new Dompdf();
        $dompdf->loadHtml('<h1>Ejemplo de pdf</h1>');

        $dompdf->setPaper('A4', 'landscape');


        $dompdf->render();


        $dompdf->stream();
    }
    public function modificarEntrada()
    {
        try{
            if($this->input->post()){
                // print_r($_POST);
                $IdCompra = $this->db->escape($_POST["IdCompra"]);
                $Fechaentrada = $this->db->escape($_POST["Fechaentrada"]);
                $IdProv = $this->db->escape($_POST["IdProv"]);
                $NomUsr = $this->db->escape($_POST["NomUsr"]);
                $this->entradas_model->modificarEntrada($IdCompra,$Fechaentrada,$IdProv,$NomUsr);
                echo json_encode(array('success' => 1, 'msj' => 'Registro Actualizado'));
            }
        }catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al actualizar registro'));
        }
    }
    public function eliminarEntrada()
    {
        try{
            if($this->input->post()){
                // print_r($_POST);
                $IdCompra = $this->db->escape($_POST["IdCompra"]);
                $this->entradas_model->eliminarEntrada($IdCompra);
                echo json_encode(array('success' => 1, 'msj' => 'Registro Eliminado'));
            }
        }catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al eliminar registro'));
        }
    }
}