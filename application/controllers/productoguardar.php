<?php
defined('BASEPATH') or exit('No direct script access allowed');

class productoguardar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->model('proveedores_model');
        $this->load->model('productos_model');
        $this->load->model('sucursal_model');
    }
    public function index()
    {
        //$this->load->view->titulo= 'Gestion de entradas';
        $data['listar'] = $this->proveedores_model->listarProveedoresProductos();
        $data['listarcat'] = $this->productos_model->listarcate();
        $data['listarSuc'] = $this->sucursal_model->listarSucursales();
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('productoguardar/inicio', $data);
        $this->load->view('plantilla/pie');
        $this->load->view('plantilla/js');
        $this->load->view('plantilla/fin');
        // $this->setModelo('productos');
        // $this->vista->datos = $this->modelo->listar();
        // $this->vista->datosproveedor = $this->modelo->listarproveedores();
        // $this->vista->render($this->vista->url);
    }
}
