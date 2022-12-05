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
    public function guardarSucursales(string $DescSucursal, string $telsucursal, string $email, string $direccionsucursal)
    {
        $this->db->query("INSERT INTO sucursales (DescSucursal, telsucursal, email, direccionsucursal) values({$DescSucursal}, {$telsucursal}, {$email}, {$direccionsucursal})");
    }
    public function modificarSucursales(string $IdSucursal, string $DescSucursal, string $telsucursal, string $email, string $direccionsucursal)
    {
        $this->db->query("UPDATE sucursales SET `DescSucursal` = {$DescSucursal} ,`telsucursal` = {$telsucursal}, `email` = {$email}, `direccionsucursal` = {$direccionsucursal} WHERE `IdSucursal` = {$IdSucursal}");
    }
    public function eliminarSucursales(string $IdSucursal)
    {
        $this->db->query("DELETE from sucursales WHERE (`IdSucursal` = {$IdSucursal})");
    }
}
