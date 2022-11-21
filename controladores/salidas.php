<?php

class salidas extends Controlador
{
    function __construct()
    {

        parent::__construct();
    }
    function inicio()
    {
        $this->vista->titulo = 'Pagina de Salidas';
        $this->vista->url = 'salidas/inicio';
        $this->setModelo('salidas');
        $this->vista->datos = $this->modelo->listar();
        $this->vista->datosdetalle = $this->modelo->listardetalle();
        $this->vista->render($this->vista->url);
    }
    function modificar()
    {
        try {
            print_r($_POST);
            $Codsalida = $_POST['Codsalida'];
            $FechaVenta = $_POST['FechaVenta'];
            $NomUsr = $_POST['NomUsr'];
            $this->setModelo('salidas');
            $this->modelo->modificarsalida(["Codsalida" => $Codsalida, "FechaVenta" => $FechaVenta, "NomUsr" => $NomUsr]);
            echo json_encode(array('success' => 1, 'msj' => 'Registro actualizado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al actualizar registro'));
        }
    }
    function eliminar()
    {
        try {
            print_r($_POST);
            $Codsalida = $_POST['Codsalida'];
            $this->setModelo('salidas');
            $this->modelo->eliminarsalida(["Codsalida" => $Codsalida]);
            echo json_encode(array('success' => 1, 'msj' => 'Registro eliminado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al eliminar registro'));
        }
    }
}
