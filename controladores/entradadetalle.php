<?php
class entradadetalle extends Controlador
{
    function __construct()
    {
        parent::__construct();
    }
    function inicio()
    {
        $this->vista->titulo = 'Gestion de entradas';
        $this->vista->url = 'entradadetalle/inicio';
        $this->setModelo('entradas');
        $this->vista->datos = $this->modelo->listar();
        $this->vista->datosdetalle = $this->modelo->listardetalle();
        $this->vista->datoscate = $this->modelo->listarcategorias();
        $this->vista->render($this->vista->url); //llama a la vista
    }
    function guardar()
    {
        try {
            print_r($_POST);
            $Fechaentrada = $_POST['Fechaentrada'];
            $IdProv = $_POST['IdProv'];
            $NomUsr = $_POST['NomUsr'];
            $this->setModelo('entradas');
            $this->modelo->guardar(["Fechaentrada" => $Fechaentrada, "IdProv" => $IdProv, "NomUsr" => $NomUsr]);
            echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro'));
        }
    }
    function guardardetalle()
    {
        try {
            print_r($_POST);
            $IdCompra = $_POST['IdCompra'];
            $IdProd = $_POST['IdProd'];
            $Cantidad = $_POST['Cantidad'];
            $Precio = $_POST['Precio'];
            $this->setModelo('entradas');
            $this->modelo->guardardetalle(["IdCompra" => $IdCompra, "IdProd" => $IdProd, "Cantidad" => $Cantidad, "Precio" => $Precio]);
            echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro'));
        }
    }
    function guardarcategoria()
    {
        try {
            print_r($_POST);
            $IdCat = $_POST['IdCat'];
            $NombreCat = $_POST['NombreCat'];
            $this->setModelo('entradas');
            $this->modelo->guardarcategoria(["IdCat" => $IdCat, "NombreCat" => $NombreCat]);
            echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro'));
        }
    }
    function modificardetalle()
    {
        try {
            print_r($_POST);
            $IdCompra = $_POST['IdCompra'];
            $IdProd = $_POST['IdProd'];
            $Cantidad = $_POST['Cantidad'];
            $Precio = $_POST['Precio'];
            $this->setModelo('entradas');
            $this->modelo->modificardetalle(["IdCompra" => $IdCompra, "IdProd" => $IdProd, "Cantidad" => $Cantidad, "Precio" => $Precio]);
            echo json_encode(array('success' => 1, 'msj' => 'Registro actualizado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al actualizar registro'));
        }
    }
    function eliminardetalle()
    {
        try {
            print_r($_POST);
            $IdCompra = $_POST['IdCompra'];
            $IdProd = $_POST['IdProd'];
            $this->setModelo('entradas');
            $this->modelo->eliminarDetalle(["IdCompra" => $IdCompra, "IdProd" => $IdProd]);
            echo json_encode(array('success' => 1, 'msj' => 'Registro eliminado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al eliminar registro'));
        }
    }
}
