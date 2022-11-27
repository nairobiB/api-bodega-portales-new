<?php
defined('BASEPATH') or exit('No direct script access allowed');

class salidas_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }
    public function listar($filtros = FALSE)
    {

        if ($filtros === FALSE) {
            $query = $this->db->get('salida');
            return $query->result_array();
        }

        $query = $this->db->get_where('salida', $filtros);
        return $query->row_array();
    }
    public function listardetalleS($filtros = FALSE)
    {

        if ($filtros === FALSE) {
            $sql = "SELECT Codsalida, NomProd,Cantidad, Precsalida FROM detallesalida
            inner join productos on productos.IdProd=detallesalida.IdProd;";
            // $query = $this->db->get('salidas');
            // return $query->result_array();
            $results = $this->db->query($sql)->result();
            return $results;
        }

        $query = $this->db->get_where('detallesalida', $filtros);
        return $query->row_array();
    }
    public function listarSalidasId($filtros = FALSE)
    {

        if ($filtros === FALSE) {
            $sql = "SELECT Codsalida FROM salida";

            $results = $this->db->query($sql)->result();
            return $results;
        }
    }
}
