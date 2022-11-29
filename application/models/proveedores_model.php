<?php
defined('BASEPATH') or exit('No direct script access allowed');

class proveedores_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }
    public function listar($filtros = FALSE)
    {

        if ($filtros === FALSE) {
            $query = $this->db->get('proveedores');
            return $query->result_array();
        }

        $query = $this->db->get_where('proveedores', $filtros);
        return $query->row_array();
    }
    public function listarProveedores($filtros = FALSE)
    {

        if ($filtros === FALSE) {
            $sql = "SELECT IdProv, Nomproveedor FROM proveedores";
            // $query = $this->db->get('entradas');
            // return $query->result_array();
            $results = $this->db->query($sql)->result();
            return $results;
        }

        $query = $this->db->get_where('entradas', $filtros);
        return $query->row_array();
    }

    public function listarProveedoresProductos($filtros = FALSE)
    {

        if ($filtros === FALSE) {
            $sql = "SELECT IdProv, Nomproveedor FROM proveedores";

            $results = $this->db->query($sql)->result();
            return $results;
        }
    }

    public function guardarProveedor(string $Nomproveedor, string $Telproveedor, string $Dirproveedor, string $email){
        $this->db->query("INSERT INTO proveedores ( Nomproveedor, Telproveedor, Dirproveedor, email) values({$Nomproveedor}, {$Telproveedor}, {$Dirproveedor}, {$email})");
    }
    public function modificarProveedor(string $IdProv, string $Nomproveedor, string $Telproveedor, string $Dirproveedor, string $email){
        $this->db->query("UPDATE proveedores SET `Nomproveedor` = {$Nomproveedor},`Telproveedor` = {$Telproveedor} ,`Dirproveedor` = {$Dirproveedor}, `email` = {$email} WHERE (`IdProv` = {$IdProv})");
    }
    public function eliminarProveedor(string $IdProv){
        $this->db->query("DELETE from proveedores WHERE (`IdProv` = {$IdProv})");
    }
}
