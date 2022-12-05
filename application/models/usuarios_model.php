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
            $results=$this->db->query($sql)->result();
            return $results;
    }
    public function guardarUsuario(string $NomUsr, string $Contra, string $IdPer, string $nivel, string $IdSucursal)
    {
        $this->db->query("INSERT INTO usuarios (NomUsr, Contra, IdPer, nivel, IdSucursal) values({$NomUsr},{$Contra},{$IdPer},{$nivel},{$IdSucursal})");
    }
    public function modificarUsuarios(string $NomUsr, string $Contra,string $IdPer,string $nivel,string $IdSucursal){
        $this->db->query("UPDATE usuarios SET `Contra` = {$Contra} ,`IdPer` = {$IdPer}, `nivel` = {$nivel},`IdSucursal` = {$IdSucursal} WHERE (`NomUsr` = {$NomUsr})");
    }
    public function eliminarUsuario(string $NomUsr){
        $this->db->query("DELETE FROM usuarios  WHERE (`NomUsr` = {$NomUsr})");
    }
}
