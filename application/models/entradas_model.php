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
            $sql = "SELECT IdCompra,productos.IdProd, NomProd, Cantidad, Precio FROM detalleentrada
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
    public function guardarEntrada(string $Fechaentrada, string $IdProv, string $NomUsr){
        $this->db->query("INSERT INTO entradas (Fechaentrada, IdProv, NomUsr) values({$Fechaentrada}, {$IdProv}, {$NomUsr})");
    }
    public function guardarDetEntrada(string $IdCompra, string $IdProd, string $Cantidad, string $Precio){
        $this->db->query("INSERT INTO detalleentrada (IdCompra, IdProd, Cantidad, Precio) values({$IdCompra}, {$IdProd}, {$Cantidad}, {$Precio})");
    }
    public function modificarEntrada(string $IdCompra, string $Fechaentrada, string $IdProv, string $NomUsr){
        $this->db->query("UPDATE entradas SET `Fechaentrada` = {$Fechaentrada},`IdProv` = {$IdProv} ,`NomUsr` = {$NomUsr} WHERE (`IdCompra` = {$IdCompra})");
    }
    public function eliminarEntrada(string $IdCompra){
        $this->db->query("DELETE from entradas WHERE (`IdCompra` = {$IdCompra})");
    }
    public function modificarDetalle(string $IdCompra, string $IdProd,string $Cantidad,string $Precio){
        $this->db->query("UPDATE detalleentrada SET `Cantidad` = {$Cantidad}, `Precio` = {$Precio} WHERE (`IdCompra` = {$IdCompra}) and (`IdProd` = {$IdProd})");
    }
    public function eliminarDetalle(string $IdCompra, string $IdProd){
        $this->db->query("DELETE FROM detalleentrada  WHERE (`IdCompra` = {$IdCompra}) and (`IdProd` = {$IdProd})");
    }

}
