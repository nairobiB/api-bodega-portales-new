<?php

class salidasModelo extends Modelo
{
    function __construct()
    {
        parent::__construct();
    }
    function listar()
    {
        $lista = [];
        try {
            $sql = "select Codsalida, FechaVenta, NomUsr from salida";
            $datos = $this->db->conectar()->query($sql); //capturan los datos que resultan del pdo, llama a la conexion db que esta en modelo base
            foreach ($datos as $f) {
                $salida = [
                    'Codsalida' => $f['Codsalida'],
                    'FechaVenta' => $f['FechaVenta'],
                    'NomUsr' => $f['NomUsr'],
                ];
                array_push($lista, $salida);
            }
            return $lista;
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    function listardetalle()
    {
        $lista2 = [];
        try {
            $sql2 = "select Codsalida, IdProd, Cantidad, PrecSalida from detallesalida";
            $datosdetalle = $this->db->conectar()->query($sql2);
            foreach ($datosdetalle as $f2) {
                $salidadetalle = [
                    'Codsalida' => $f2['Codsalida'],
                    'IdProd' => $f2['IdProd'],
                    'Cantidad' => $f2['Cantidad'],
                    'PrecSalida' => $f2['PrecSalida']
                ];
                array_push($lista2, $salidadetalle);
            }
            return $lista2;
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    function guardar($datos)
    {
        $query = $this->db->conectar()->prepare('insert into salida (FechaVenta, NomUsr) value(:FechaVenta, :NomUsr)');
        $query->execute($datos);
    }
    function guardardetalle($datos)
    {
        $query = $this->db->conectar()->prepare('insert into detallesalida (Codsalida, IdProd, Cantidad, Precsalida) value(:Codsalida, :IdProd, :Cantidad, :Precsalida)');
        $query->execute($datos);
    }
    function modificarsalida($datos)
    {
        $query = $this->db->conectar()->prepare("UPDATE salida SET `FechaVenta` = :FechaVenta, `NomUsr` = :NomUsr WHERE (`Codsalida` = :Codsalida)");
        $query->execute($datos);
    }
    function eliminarsalida($datos)
    {
        $query = $this->db->conectar()->prepare("DELETE from salida WHERE (`Codsalida` = :Codsalida)");
        $query->execute($datos);
    }
}
