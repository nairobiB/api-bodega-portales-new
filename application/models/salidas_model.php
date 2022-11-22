<?php
defined('BASEPATH') or exit('No direct script access allowed');

class salidas_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }
    public function listar($filtros = FALSE){

        if ($filtros === FALSE) {
            $query = $this->db->get('salida');
            return $query->result_array();
        }

        $query = $this->db->get_where('salida',$filtros);
        return $query->row_array();
    }
    public function listardetalleS($filtros = FALSE){

        if ($filtros === FALSE) {
            $query = $this->db->get('detallesalida');
            return $query->result_array();
        }

        $query = $this->db->get_where('detallesalida',$filtros);
        return $query->row_array();
    }
}
?>