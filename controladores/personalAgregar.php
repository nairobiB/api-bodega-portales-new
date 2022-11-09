<?php

class personalAgregar extends Controlador
{
    function __construct()
    {

        parent::__construct();
    }
    function inicio()
    {
        $this->vista->titulo = 'Gestion de Personal';
        $this->vista->url = 'personalAgregar/inicio';
        $this->setModelo('personal');
        $this->vista->datos = $this->modelo->listar();
        $this->vista->datos = $this->modelo->listarusuarios();
        $this->vista->render($this->vista->url); //llama a la vista
    }

    function guardar()
    {
        try {
            print_r($_POST);
            $IdPer = $_POST['IdPer'];
            $TelPer = $_POST['TelPer'];
            $NomPer = $_POST['NomPer'];
            $ApePer = $_POST['ApePer'];
            $DirPer = $_POST['DirPer'];
            $Email = $_POST['Email'];
            $FechaNac = $_POST['fecha_nacimiento'];
            $this->setModelo('personal');
            $this->modelo->guardarpersonal(["IdPer" => $IdPer, "TelPer" => $TelPer, "NomPer" => $NomPer, "ApePer" => $ApePer,"DirPer" => $DirPer, "Email" => $Email, "fecha_nacimiento" => $FechaNac]);
            echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro'));
        }
    }

    function guardarusuario()
    {
        try {
            print_r($_POST);
            $NomUsr = $_POST['NomUsr'];
            $Contra = $_POST['Contra'];
            $IdPer = $_POST['IdPer'];
            $nivel = $_POST['nivel'];
            $IdSucursal = $_POST['IdSucursal'];
            $this->setModelo('personal');
            $this->modelo->guardarusuario(["NomUsr" => $NomUsr, "Contra" => $Contra, "IdPer" => $IdPer, "nivel" => $nivel,"IdSucursal" => $IdSucursal]);
            echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro'));
        }
    }

}