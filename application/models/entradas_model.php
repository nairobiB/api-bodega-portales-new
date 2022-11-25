<?php
defined('BASEPATH') or exit('No direct script access allowed');

class entradas_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }
    public function listar($filtros = FALSE){

        if ($filtros === FALSE) {
            $sql = "SELECT IdCompra, Fechaentrada,e.IdProv, Nomproveedor, NomUsr FROM entradas e INNER JOIN proveedores p on e.IdProv=p.IdProv";
            // $query = $this->db->get('entradas');
            // return $query->result_array();
            $results=$this->db->query($sql)->result();
            return $results;
        }

    //     $query = $this->db->get_where('entradas',$filtros);
    //     return $query->row_array();
    }
    public function listardetalle($filtros = FALSE){

        if ($filtros === FALSE) {
            $sql = "SELECT IdCompra, NomProd, Cantidad, Precio FROM detalleentrada
            inner join productos on productos.IdProd=detalleentrada.IdProd;";
            // $query = $this->db->get('salidas');
            // return $query->result_array();
            $results = $this->db->query($sql)->result();
            return $results;
        }
        // $query = $this->db->get_where('detalleentrada',$filtros);
        // return $query->row_array();
    }
    public function listarEntradasId($filtros = FALSE){

        if ($filtros === FALSE) {
            $sql = "SELECT IdCompra FROM entradas";
            // $query = $this->db->get('entradas');
            // return $query->result_array();
            $results=$this->db->query($sql)->result();
            return $results;
        }
    }
    public function listarcategorias($filtros = FALSE){

        if ($filtros === FALSE) {
            $query = $this->db->get('categorias');
            return $query->result_array();
        }

        $query = $this->db->get_where('categorias',$filtros);
        return $query->row_array();
    }

}
