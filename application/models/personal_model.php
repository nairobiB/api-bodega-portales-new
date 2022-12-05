<?php
defined('BASEPATH') or exit('No direct script access allowed');

class personal_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }
    public function listar($filtros = FALSE)
    {

        if ($filtros === FALSE) {
            $query = $this->db->get('personal');
            return $query->result_array();
        }

        $query = $this->db->get_where('personal', $filtros);
        return $query->row_array();
    }
    public function listarUsuarios($filtros = FALSE)
    {

        if ($filtros === FALSE) {
            $sql = "SELECT NomUsr, Contra, NomPer, DescSucursal, nivel FROM usuarios
            inner join personal on personal.IdPer=usuarios.IdPer
            inner join sucursales on sucursales.IdSucursal=usuarios.IdSucursal;";
            // $query = $this->db->get('salidas');
            // return $query->result_array();
            $results = $this->db->query($sql)->result();
            return $results;
        }

        // $query = $this->db->get_where('usuarios',$filtros);
        // return $query->row_array();
    }
    public function listarNomUsr($filtros = FALSE)
    {

        if ($filtros === FALSE) {
            $sql = "SELECT IdPer,NomUsr FROM usuarios";
            // $query = $this->db->get('entradas');
            // return $query->result_array();
            $results = $this->db->query($sql)->result();
            return $results;
        }
    }
    public function listarPersonal($filtros = FALSE)
    {
        if ($filtros === FALSE) {
            $sql = "SELECT IdPer,NomPer FROM personal";
            $results = $this->db->query($sql)->result();
            return $results;
        }
    }

    public function guardarPersonal(string $IdPer, string $TelPer, string $NomPer, string $ApePer, string $DirPer, string $Email, string $fecha_nacimineto)
    {
        $this->db->query("INSERT INTO personal (IdPer, TelPer, NomPer, ApePer, DirPer, Email, fecha_nacimineto) values({$IdPer},{$TelPer}, {$NomPer}, {$ApePer}, {$DirPer}, {$Email}, {$fecha_nacimineto})");
    }
    public function modificarPersonal(string $IdPer, string $TelPer, string $NomPer, string $ApePer, string $DirPer, string $Email, string $Estado, string $fecha_nacimineto)
    {
        $this->db->query("UPDATE personal SET `TelPer` = {$TelPer},`NomPer` = {$NomPer} ,`ApePer` = {$ApePer}, `DirPer` = {$DirPer} , `Email` = {$Email}, `Estado` = {$Estado}, `fecha_nacimineto` = {$fecha_nacimineto} WHERE (`IdPer` = {$IdPer})");
    }
    public function eliminarPersonal(string $IdPer)
    {
        $this->db->query("DELETE from personal WHERE (`IdPer` = {$IdPer})");
    }
}
