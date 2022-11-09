<?php

class sucursales extends Controlador
{
    function __construct()
    {

        parent::__construct();
    }
    function inicio()
    {
        $this->vista->titulo = 'Pagina de Sucursales';
        $this->vista->url = 'sucursales/inicio';
        $this->setModelo('sucursales');
        $this->vista->datos = $this->modelo->listar();
        $this->vista->render($this->vista->url);
    }
    function guardar()
    {
        try {
            print_r($_POST);
            $IdSucursal = $_POST['IdSucursal'];
            $DescSucursal = $_POST['DescSucursal'];
            $telsucursal = $_POST['telsucursal'];
            $email = $_POST['email'];
            $direccionsucursal = $_POST['direccionsucursal'];
            $this->setModelo('sucursales');
            $this->modelo->guardar(["IdSucursal" => $IdSucursal, "DescSucursal" => $DescSucursal, "telsucursal" => $telsucursal, "email" => $email, "direccionsucursal" => $direccionsucursal,]);
            echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro'));
        }
    }
}