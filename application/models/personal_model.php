<?php
defined('BASEPATH') or exit('No direct script access allowed');

class personal_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }
    public function listar($filtros = FALSE){

        if ($filtros === FALSE) {
            $query = $this->db->get('personal');
            return $query->result_array();
        }

        $query = $this->db->get_where('personal',$filtros);
        return $query->row_array();
    }
    public function listarUsuarios($filtros = FALSE){

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
    public function listarNomUsr($filtros = FALSE){

        if ($filtros === FALSE) {
            $sql = "SELECT NomUsr FROM usuarios";
            // $query = $this->db->get('entradas');
            // return $query->result_array();
            $results=$this->db->query($sql)->result();
            return $results;
        }
    }

}