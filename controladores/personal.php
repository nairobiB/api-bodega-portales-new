<?php

class personal extends Controlador
{
    function __construct()
    {

        parent::__construct();
    }
    function inicio()
    {
        $this->vista->titulo = 'Pagina de Personal';
        $this->vista->url = 'personal/inicio';
        $this->setModelo('personal');
        $this->vista->datos = $this->modelo->listar();
        $this->vista->datosusuario = $this->modelo->listarusuarios();

        $this->vista->render($this->vista->url); //llama a la vista
    }
    function modificarP()
    {
        try {
            print_r($_POST);
            $IdPer = $_POST['IdPer'];
            $TelPer = $_POST['TelPer'];
            $NomPer = $_POST['NomPer'];
            $ApePer = $_POST['ApePer'];
            $DirPer = $_POST['DirPer'];
            $Email = $_POST['Email'];
            $Estado = $_POST['Estado'];
            $fecha_nacimineto = $_POST['fecha_nacimineto'];
            $this->setModelo('personal');
            $this->modelo->modificarpersonal(["IdPer" => $IdPer, "TelPer" => $TelPer, "NomPer" => $NomPer, "ApePer" => $ApePer, "DirPer" => $DirPer, "Email" => $Email, "Estado" => $Estado, "fecha_nacimineto" => $fecha_nacimineto]);
            echo json_encode(array('success' => 1, 'msj' => 'Registro actualizado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al actualizar registro' + $th));
        }
    }
    function eliminarP()
    {
        try {
            print_r($_POST);
            $IdPer = $_POST['IdPer'];
            $this->setModelo('personal');
            $this->modelo->eliminarpersonal(["IdPer" => $IdPer]);
            echo json_encode(array('success' => 1, 'msj' => 'Registro eliminado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al eliminar registro'));
        }
    }
    function modificarU()
    {
        try {
            print_r($_POST);
            $NomUsr = $_POST['NomUsr'];
            $Contra = $_POST['Contra'];
            $IdPer = $_POST['IdPer'];
            $Estado = $_POST['Estado'];
            $nivel = $_POST['nivel'];
            $IdSucursal = $_POST['IdSucursal'];
            $this->setModelo('personal');
            $this->modelo->modificarusuario(["NomUsr" => $NomUsr, "Contra" => $Contra, "IdPer" => $IdPer, "Estado" => $Estado, "nivel" => $nivel, "IdSucursal" => $IdSucursal]);
            echo json_encode(array('success' => 1, 'msj' => 'Registro actualizado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al actualizar registro' + $th));
        }
    }
    function eliminarU()
    {
        try {
            print_r($_POST);
            $NomUsr = $_POST['NomUsr'];
            $this->setModelo('personal');
            $this->modelo->eliminarusuario(["NomUsr" => $NomUsr]);
            echo json_encode(array('success' => 1, 'msj' => 'Registro eliminado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al eliminar registro'));
        }
    }
}
