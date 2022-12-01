<?php
defined('BASEPATH') or exit('No direct script access allowed');

class usuarios_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }
    public function listarUsuarios($filtros = FALSE)
    {
        $sql = "SELECT NomUsr, Contra,u.IdPer, NomPer,nivel,u.IdSucursal,DescSucursal FROM usuarios u INNER JOIN personal p on u.IdPer=p.IdPer INNER JOIN sucursales s on u.IdSucursal=s.IdSucursal";
        // $query = $this->db->get('entradas');
        // return $query->result_array();
        $results = $this->db->query($sql)->result();
        return $results;
        // if ($filtros === FALSE) {
        //     $query = $this->db->get('usuarios');
        //     return $query->result_array();
        // }

        // $query = $this->db->get_where('usuarios',$filtros);
        // return $query->row_array();
    }
    public function guardar(string $NomUsr, string $Contra, string $IdPer, string $nivel, string $IdSucursal)
    {
        $this->db->query("INSERT INTO usuarios (NomUsr, Contra, IdPer, nivel, IdSucursal) values({$NomUsr},{$Contra},{$IdPer},{$nivel},{$IdSucursal})");
    }
    public function modificarUsuarios(string $NomUsr, string $Contra, string $IdPer, string $nivel, string $IdSucursal)
    {
        $this->db->query("UPDATE usuarios SET `NomUsr` = {$NomUsr},`Contra` = {$Contra} ,`IdPer` = {$IdPer}, `nivel` = {$nivel} WHERE (`IdSucursal` = {$IdSucursal})");
    }
    public function eliminarDetalle(string $NomUsr, string $IdPer)
    {
        $this->db->query("DELETE FROM usuarios  WHERE (`NomUsr` = {$NomUsr}) and (`IdPer` = {$IdPer})");
    }
}
