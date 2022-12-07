<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;
use Dompdf\Option;
use Dompdf\Exception as DomException;
use Dompdf\Options;


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

    public function imprimir()
    {
        $data['titulo']='personal';
        $data['lista']= $this->personal_model->listar();
        $this->load->view('personal/imprimir', $data);
    }
    public function pdf()
    {
        $data['titulo']='personal';
        $data['lista']= $this->personal_model->listar();
        $dompdf = new Dompdf();
        $dompdf->loadHtml('<h1>Ejemplo de pdf</h1>');

        $dompdf->setPaper('A4', 'landscape');


        $dompdf->render();


        $dompdf->stream();
    }
}