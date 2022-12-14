<?php
defined('BASEPATH') or exit('No direct script access allowed');

class salidadetalle extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->model('productos_model');
        $this->load->model('personal_model');
        $this->load->model('salidas_model');
    }
    public function index()
    {
        $data['titulo'] = 'Gestion de salidas';
        $data['listarProductos'] = $this->productos_model->listarProductos();
        $data['listarUsuarios'] = $this->personal_model->listarNomUsr();
        $data['listarIdVenta'] = $this->salidas_model->listarSalidasId();
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('salidadetalle/inicio', $data);
        $this->load->view('plantilla/pie');
        $this->load->view('plantilla/js');
        $this->load->view('plantilla/fin');
        // $this->setModelo('salidas');
        // $this->vista->datos = $this->modelo->listar();
        // /* $this->vista->datosdetalle = $this->modelo->listardetalle();
        // $this->vista->datoscate = $this->modelo->listarcategorias();*/
        // $this->vista->render($this->vista->url); //llama a la vista
    }

    // function guardar()
    // {
    //     try {
    //         print_r($_POST);
    //         $FechaVenta = $_POST['FechaVenta'];
    //         $NomUsr = $_POST['NomUsr'];
    //         $this->setModelo('salidas');
    //         $this->modelo->guardar(["FechaVenta" => $FechaVenta,  "NomUsr" => $NomUsr]);
    //         echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
    //     } catch (\Throwable $th) {
    //         echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro'));
    //     }
    // }
    // function guardardetalle()
    // {
    //     try {
    //         print_r($_POST);
    //         $Codsalida = $_POST['Codsalida'];
    //         $IdProd = $_POST['IdProd'];
    //         $Cantidad = $_POST['Cantidad'];
    //         $Precsalida = $_POST['Precsalida'];
    //         $this->setModelo('salidas');
    //         $this->modelo->guardardetalle(["Codsalida" => $Codsalida, "IdProd" => $IdProd, "Cantidad" => $Cantidad, "Precsalida" => $Precsalida]);
    //         echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
    //     } catch (\Throwable $th) {
    //         echo json_encode(array('success' => 0, 'msj' => ('Error al guardar registro' + $th)));
    //     }
    // }
    // function modificardetalle()
    // {
    //     try {
    //         print_r($_POST);
    //         $Codsalida = $_POST['Codsalida'];
    //         $IdProd = $_POST['IdProd'];
    //         $Cantidad = $_POST['Cantidad'];
    //         $Precsalida = $_POST['Precsalida'];
    //         $this->setModelo('salidas');
    //         $this->modelo->modificardetalle(["Codsalida" => $Codsalida, "IdProd" => $IdProd, "Cantidad" => $Cantidad, "Precsalida" => $Precsalida]);
    //         echo json_encode(array('success' => 1, 'msj' => 'Registro actualizado'));
    //     } catch (\Throwable $th) {
    //         echo json_encode(array('success' => 0, 'msj' => 'Error al actualizar registro'));
    //     }
    // }
    // function eliminardetalle()
    // {
    //     try {
    //         print_r($_POST);
    //         $Codsalida = $_POST['Codsalida'];
    //         $IdProd = $_POST['IdProd'];
    //         $this->setModelo('salidas');
    //         $this->modelo->eliminarDetalle(["Codsalida" => $Codsalida, "IdProd" => $IdProd]);
    //         echo json_encode(array('success' => 1, 'msj' => 'Registro eliminado'));
    //     } catch (\Throwable $th) {
    //         echo json_encode(array('success' => 0, 'msj' => 'Error al eliminar registro'));
    //     }
    // }
}
