<?php
defined('BASEPATH') or exit('No direct script access allowed');

class productos_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }
    public function listar($filtros = FALSE){

        if ($filtros === FALSE) {
            $query = $this->db->get('productos');
            return $query->result_array();
        }

        $query = $this->db->get_where('productos',$filtros);
        return $query->row_array();
    }
    // public function listardetalleS($filtros = FALSE){

    //     if ($filtros === FALSE) {
    //         $query = $this->db->get('detallesalida');
    //         return $query->result_array();
    //     }

    //     $query = $this->db->get_where('detallesalida',$filtros);
    //     return $query->row_array();
    // }
}