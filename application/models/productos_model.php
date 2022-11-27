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
            $sql = "SELECT IdProd, NomProd, PrecProd, PrecCompra, stock, Descripcion, Nomproveedor, NombreCat, FechaCad, numero_lote, DescSucursal from productos
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
    // public function listardetalleS($filtros = FALSE){

    //     if ($filtros === FALSE) {
    //         $query = $this->db->get('detallesalida');
    //         return $query->result_array();
    //     }

    //     $query = $this->db->get_where('detallesalida',$filtros);
    //     return $query->row_array();
    // }
}
