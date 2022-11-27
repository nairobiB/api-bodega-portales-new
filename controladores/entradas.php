<?php

class entradas extends Controlador
{
    function __construct()
    {

        parent::__construct();
    }
    function inicio()
    {
        $this->vista->titulo = 'Pagina de Entradas';
        $this->vista->url = 'entradas/inicio';
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
    function modificar()
    {   try{
        print_r($_POST);
            $IdCompra = $_POST['IdCompra'];
            $Fechaentrada = $_POST['Fechaentrada'];
            $IdProv = $_POST['IdProv'];
            $NomUsr = $_POST['NomUsr'];
            $this->setModelo('entradas');
            $this->modelo->modificarentrada(["IdCompra" => $IdCompra,"Fechaentrada" => $Fechaentrada, "IdProv" => $IdProv, "NomUsr" => $NomUsr]);
            echo json_encode(array('success' => 1, 'msj' => 'Registro actualizado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al actualizar registro'));
        }
    }
    function eliminar()
    {   try{
        print_r($_POST);
            $IdCompra = $_POST['IdCompra'];
            $this->setModelo('entradas');
            $this->modelo->eliminarentrada(["IdCompra" => $IdCompra]);
            echo json_encode(array('success' => 1, 'msj' => 'Registro eliminado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al eliminar registro'));
        }
    }
}
