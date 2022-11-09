<?php

class proveedoresModelo extends Modelo
{
    function __construct()
    {
        parent::__construct();
    }
    function listar()
    {
        $lista = [];
        try {
            $sql = "select IdProv, Nomproveedor, Telproveedor, Dirproveedor, Estado, email from proveedores";
            $datos = $this->db->conectar()->query($sql); //capturan los datos que resultan del pdo, llama a la conexion db que esta en modelo base
            foreach ($datos as $f) {
                $producto = [
                    'IdProv' => $f['IdProv'],
                    'Nomproveedor' => $f['Nomproveedor'],
                    'Telproveedor' => $f['Telproveedor'],
                    'Dirproveedor' => $f['Dirproveedor'],
                    'Estado' => $f['Estado'],
                    'email' => $f['email'],
                ];
                array_push($lista, $proveedores);
            }
            return $lista;
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    function guardar($datos)
    {
        $query = $this->db->conectar()->prepare('insert into proveedores (IdProv, Nomproveedor, Telproveedor, Dirproveedor, Estado, email) value(:IdProv, :Nomproveedor, :Telproveedor, :Dirproveedor, :Estado, :email)');
        $query->execute($datos);
    }
}