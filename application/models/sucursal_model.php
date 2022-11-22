<?php
defined('BASEPATH') or exit('No direct script access allowed');

class sucursal_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }
    public function listar($filtros = FALSE){

        if ($filtros === FALSE) {
            $query = $this->db->get('sucursales');
            return $query->result_array();
        }

        $query = $this->db->get_where('sucursales',$filtros);
        return $query->row_array();
    }
}