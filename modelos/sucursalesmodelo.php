<?php

class sucursalesModelo extends Modelo
{
    function __construct()
    {
        parent::__construct();
    }
    function listar()
    {
        $lista = [];
        try {
            $sql = "select IdSucursal, DescSucursal, telsucursal, email, direccionsucursal from sucursales";
            $datos = $this->db->conectar()->query($sql); //capturan los datos que resultan del pdo, llama a la conexion db que esta en modelo base
            foreach ($datos as $f) {
                $sucursales = [
                    'IdSucursal' => $f['IdSucursal'],
                    'DescSucursal' => $f['DescSucursal'],
                    'telsucursal' => $f['telsucursal'],
                    'email' => $f['email'],
                    'direccionsucursal' => $f['direccionsucursal']
                ];
                array_push($lista, $sucursales);
            }
            return $lista;
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
