<?php

class productoguardar extends Controlador
{
    function __construct()
    {

        parent::__construct();
    }
    function inicio()
    {
        $this->vista->titulo = 'Pagina de Productos';
        $this->vista->url = 'productoguardar/inicio';
        $this->setModelo('productos');
        $this->vista->datos = $this->modelo->listar();
        $this->vista->datosproveedor = $this->modelo->listarproveedores();
        $this->vista->render($this->vista->url);
    }
    function guardar()
    {
        try {
            print_r($_POST);
            $IdProd = $_POST['IdProd'];
            $NomProd = $_POST['NomProd'];
            $PrecProd = $_POST['PrecProd'];
            $PrecCompra = $_POST['PrecCompra'];
            $stock = $_POST['stock'];
            $Descripcion = $_POST['Descripcion'];
            $IdProv = $_POST['IdProv'];
            $Estado = $_POST['Estado'];
            $IdCat = $_POST['IdCat'];
            $FechaCad = $_POST['FechaCad'];
            $numero_lote = $_POST['numero_lote'];
            $IdSucursal = $_POST['IdSucursal'];
            $this->setModelo('productos');
            $this->modelo->guardar(["IdProd" => $IdProd, "NomProd" => $NomProd, "PrecProd" => $PrecProd, "PrecCompra" => $PrecCompra, "stock" => $stock, "Descripcion" => $Descripcion, "IdProv" => $IdProv, "Estado" => $Estado, "IdCat" => $IdCat, "FechaCad" => $FechaCad, "numero_lote" => $numero_lote, "IdSucursal" => $IdSucursal]);
            echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro'));
        }
    }
}