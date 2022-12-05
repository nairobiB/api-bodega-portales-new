<?php
defined('BASEPATH') or exit('No direct script access allowed');

class productos_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }
    public function listar($filtros = FALSE)
    {

        if ($filtros === FALSE) {
            $sql = "SELECT IdProd, NomProd, PrecProd, PrecCompra, stock,Descripcion, proveedores.IdProv, Nomproveedor,categorias.IdCat, NombreCat, FechaCad, numero_lote,sucursales.IdSucursal, DescSucursal from productos
            inner join proveedores on proveedores.IdProv=productos.IdProv
            inner join categorias on categorias.IdCat=productos.IdCat
            inner join sucursales on sucursales.IdSucursal=productos.IdSucursal;";
            // $query = $this->db->get('salidas');
            // return $query->result_array();
            $results = $this->db->query($sql)->result();
            return $results;
        }

        // $query = $this->db->get_where('productos',$filtros);
        // return $query->row_array();
    }
    public function listarProductos($filtros = FALSE)
    {

        if ($filtros === FALSE) {
            $sql = "SELECT IdProd,NomProd FROM productos";
            // $query = $this->db->get('entradas');
            // return $query->result_array();
            $results = $this->db->query($sql)->result();
            return $results;
        }

        $query = $this->db->get_where('entradas', $filtros);
        $query = $this->db->get_where('productos', $filtros);
        return $query->row_array();
    }
    public function listarcate($filtros = FALSE)
    {

        if ($filtros === FALSE) {
            $sql = "SELECT IdCat, NombreCat FROM categorias";

            $results = $this->db->query($sql)->result();
            return $results;
        }
    }
    public function guardarProductos(string $IdProd, string $NomProd, string $PrecProd, string $PrecCompra, string $stock, string $Descripcion, string $IdProv, string $IdCat, string $FechaCad, string $numero_lote, string $IdSucursal){
        $this->db->query("INSERT INTO productos (IdProd, NomProd, PrecProd, PrecCompra, stock, Descripcion, IdProv, IdCat, FechaCad, numero_lote, IdSucursal) values({$IdProd}, {$NomProd}, {$PrecProd}, {$PrecCompra}, {$stock}, {$Descripcion}, {$IdProv}, {$IdCat}, {$FechaCad}, {$numero_lote}, {$IdSucursal})");
    }
    public function modificarProductos(string $IdProd, string $NomProd, string $PrecProd, string $PrecCompra, string $stock, string $Descripcion, string $IdProv, string $IdCat, string $FechaCad, string $numero_lote, string $IdSucursal){
        $this->db->query("UPDATE productos SET `NomProd` = {$NomProd}, `PrecProd` = {$PrecProd}, `PrecCompra` = {$PrecCompra}, `stock` = {$stock}, `Descripcion` = {$Descripcion}, `IdProv` = {$IdProv}, `IdCat` = {$IdCat}, `FechaCad` = {$FechaCad}, `numero_lote` = {$numero_lote}, `IdSucursal` = {$IdSucursal} WHERE `IdProd` = {$IdProd}");
    }
    public function eliminarProductos(string $IdProd){
        $this->db->query("DELETE from productos WHERE (`IdProd` = {$IdProd})");
    }
}
