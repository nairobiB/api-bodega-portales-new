<?php
defined('BASEPATH') or exit('No direct script access allowed');

class entradas_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }
    public function listar($filtros = FALSE){

        if ($filtros === FALSE) {
            $query = $this->db->get('entradas');
            return $query->result_array();
        }

        $query = $this->db->get_where('entradas',$filtros);
        return $query->row_array();
    }
    public function listardetalle($filtros = FALSE){

        if ($filtros === FALSE) {
            $query = $this->db->get('detalleentrada');
            return $query->result_array();
        }

        $query = $this->db->get_where('detalleentrada',$filtros);
        return $query->row_array();
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
