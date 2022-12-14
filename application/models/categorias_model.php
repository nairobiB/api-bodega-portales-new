<?php
defined('BASEPATH') or exit('No direct script access allowed');

class categorias_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }
    public function listarcategorias($filtros = FALSE){

        if ($filtros === FALSE) {
            $query = $this->db->get('categorias');
            return $query->result_array();
        }

        $query = $this->db->get_where('categorias',$filtros);
        return $query->row_array();
    }
    public function guardar(string $NombreCat){
        $this->db->query("INSERT INTO categorias (NombreCat) values({$NombreCat})");
    }
}