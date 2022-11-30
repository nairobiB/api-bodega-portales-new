<?php
defined('BASEPATH') or exit('No direct script access allowed');

class sucursal_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }
    public function listar($filtros = FALSE)
    {

        if ($filtros === FALSE) {
            $query = $this->db->get('sucursales');
            return $query->result_array();
        }

        $query = $this->db->get_where('sucursales', $filtros);
        return $query->row_array();
    }
    public function listarSucursales($filtros = FALSE)
    {

        if ($filtros === FALSE) {
            $sql = "SELECT IdSucursal,DescSucursal FROM sucursales";
            $results = $this->db->query($sql)->result();
            return $results;
        }
    }
    public function guardarSucursales(string $IdSucursal,string $DescSucursal,string $TelSucursal,string $email,string $direccionsucursal){
        $this->db->query("INSERT INTO sucursales (IdSucursal, DescSucursal, TelSucursal, email, direccionsucursal) values({$IdSucursal}, {$DescSucursal}, {$TelSucursal}, {$email}, {$direccionsucursal})");
    }
    public function modificarSucursales(string $IdSucursal,string $DescSucursal,string $TelSucursal,string $email,string $direccionsucursal){
        $this->db->query("UPDATE sucursales SET `IdSucursal` = {$IdSucursal},`DescSucursal` = {$DescSucursal} ,`TelSucursal` = {$TelSucursal}, `email` = {$email} and (`direccionsucursal` = {$direccionsucursal})");
    }
    public function eliminarSucursales(string $IdSucursal){
        $this->db->query("DELETE from sucursales WHERE (`IdSucursal` = {$IdSucursal})");
    }
}
