<?php

class proveedores extends Controlador
{
    function __construct()
    {

        parent::__construct();
    }
    function inicio()
    {
        $this->vista->titulo = 'Pagina de Proveedores';
        $this->vista->url = 'proveedores/inicio';
        $this->setModelo('proveedores');
        $this->vista->datos = $this->modelo->listar();
        $this->vista->datosproveedor = $this->modelo->listarproveedores();
        $this->vista->render($this->vista->url);
    }
    function guardar()
    {
        try {
            print_r($_POST);
            $IdProv = $_POST['IdProv'];
            $Nomproveedor = $_POST['Nomproveedor'];
            $Telproveedor = $_POST['Telproveedor'];
            $Dirproveedor = $_POST['Dirproveedor'];
            $Estado = $_POST['Estado'];
            $email = $_POST['email'];
            $this->setModelo('proveedores');
            $this->modelo->guardar(["IdProv" => $IdProv, "Nomproveedor" => $Nomproveedor, "Telproveedor" => $Telproveedor, "Dirproveedor" => $Dirproveedor, "Estado" => $Estado, "email" => $email]);
            echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro'));
        }
    }
}