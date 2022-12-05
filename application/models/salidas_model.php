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
            $sql = "SELECT Codsalida,productos.IdProd, NomProd, Cantidad, Precsalida FROM detallesalida
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

    public function guardarSalida(string $FechaVenta, string $NomUsr)
    {
        $this->db->query("INSERT INTO salida (FechaVenta, NomUsr) values({$FechaVenta}, {$NomUsr})");
    }
    public function guardarDetSalida(string $Codsalida, string $IdProd, string $Cantidad, string $Precsalida)
    {
        $this->db->query("INSERT INTO detallesalida (Codsalida, IdProd, Cantidad, Precsalida) values({$Codsalida}, {$IdProd}, {$Cantidad}, {$Precsalida})");
    }
    public function modificarSalida(string $Codsalida, string $FechaVenta, string $NomUsr)
    {
        $this->db->query("UPDATE salida SET `FechaVenta` = {$FechaVenta},`NomUsr` = {$NomUsr} WHERE (`Codsalida` = {$Codsalida})");
    }
    public function eliminarSalida(string $Codsalida)
    {
        $this->db->query("DELETE from salida WHERE (`Codsalida` = {$Codsalida})");
    }
    public function modificarDetalleS(string $Codsalida, string $IdProd, string $Cantidad, string $Precsalida)
    {
        $this->db->query("UPDATE detallesalida SET `Cantidad` = {$Cantidad}, `Precsalida` = {$Precsalida} WHERE (`Codsalida` = {$Codsalida}) and (`IdProd` = {$IdProd})");
    }
    public function eliminarDetalleS(string $Codsalida, string $IdProd)
    {
        $this->db->query("DELETE FROM detallesalida  WHERE (`Codsalida` = {$Codsalida}) and (`IdProd` = {$IdProd})");
    }
}
