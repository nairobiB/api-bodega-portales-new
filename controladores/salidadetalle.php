<?php
class salidadetalle extends Controlador
{
    function __construct()
    {

        parent::__construct();
    }
    function inicio()
    {
        $this->vista->titulo = 'Gestion de salidas';
        $this->vista->url = 'salidadetalle/inicio';
        $this->setModelo('salidas');
        $this->vista->datos = $this->modelo->listar();
        /* $this->vista->datosdetalle = $this->modelo->listardetalle();
        $this->vista->datoscate = $this->modelo->listarcategorias();*/
        $this->vista->render($this->vista->url); //llama a la vista
    }
    function guardar()
    {
        try {
            print_r($_POST);
            $FechaVenta = $_POST['FechaVenta'];
            $NomUsr = $_POST['NomUsr'];
            $this->setModelo('salidas');
            $this->modelo->guardar(["FechaVenta" => $FechaVenta,  "NomUsr" => $NomUsr]);
            echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro'));
        }
    }
    function guardardetalle()
    {
        try {
            print_r($_POST);
            $Codsalida = $_POST['Codsalida'];
            $IdProd = $_POST['IdProd'];
            $Cantidad = $_POST['Cantidad'];
            $Precsalida = $_POST['Precsalida'];
            $this->setModelo('salidas');
            $this->modelo->guardardetalle(["Codsalida" => $Codsalida, "IdProd" => $IdProd, "Cantidad" => $Cantidad, "Precsalida" => $Precsalida]);
            echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => ('Error al guardar registro' + $th)));
        }
    }
    function modificardetalle()
    {
        try {
            print_r($_POST);
            $Codsalida = $_POST['Codsalida'];
            $IdProd = $_POST['IdProd'];
            $Cantidad = $_POST['Cantidad'];
            $Precsalida = $_POST['Precsalida'];
            $this->setModelo('salidas');
            $this->modelo->modificardetalle(["Codsalida" => $Codsalida, "IdProd" => $IdProd, "Cantidad" => $Cantidad, "Precsalida" => $Precsalida]);
            echo json_encode(array('success' => 1, 'msj' => 'Registro actualizado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al actualizar registro'));
        }
    }
    function eliminardetalle()
    {
        try {
            print_r($_POST);
            $Codsalida = $_POST['Codsalida'];
            $IdProd = $_POST['IdProd'];
            $this->setModelo('salidas');
            $this->modelo->eliminarDetalle(["Codsalida" => $Codsalida, "IdProd" => $IdProd]);
            echo json_encode(array('success' => 1, 'msj' => 'Registro eliminado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al eliminar registro'));
        }
    }
}
