<?php

class productosModelo extends Modelo
{
    function __construct()
    {
        parent::__construct();
    }
    function listar()
    {
        $lista = [];
        try {
            $sql = "select IdProd, NomProd, PrecProd, PrecCompra, stock, Descripcion, IdProv, Estado, IdCat, FechaCad, numero_lote, IdSucursal from productos";
            $datos = $this->db->conectar()->query($sql); //capturan los datos que resultan del pdo, llama a la conexion db que esta en modelo base
            foreach ($datos as $f) {
                $producto = [
                    'IdProd' => $f['IdProd'],
                    'NomProd' => $f['NomProd'],
                    'PrecProd' => $f['PrecProd'],
                    'PrecCompra' => $f['PrecCompra'],
                    'stock' => $f['stock'],
                    'Descripcion' => $f['Descripcion'],
                    'IdProv' => $f['IdProv'],
                    'Estado' => $f['Estado'],
                    'IdCat' => $f['IdCat'],
                    'FechaCad' => $f['FechaCad'],
                    'numero_lote' => $f['numero_lote'],
                    'IdSucursal' => $f['IdSucursal'],
                ];
                array_push($lista, $producto);
            }
            return $lista;
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    function listarproveedores()
    {
        $lista = [];
        try {
            $sql = "select IdProv, Nomproveedor, Telproveedor, Dirproveedor, Estado, email from proveedores";
            $datosproveedor = $this->db->conectar()->query($sql); //capturan los datos que resultan del pdo, llama a la conexion db que esta en modelo base
            foreach ($datosproveedor as $f) {
                $proveedor = [
                    'IdProv' => $f['IdProv'],
                    'Nomproveedor' => $f['Nomproveedor'],
                    'Telproveedor' => $f['Telproveedor'],
                    'Dirproveedor' => $f['Dirproveedor'],
                    'Estado' => $f['Estado'],
                    'email' => $f['email']
                ];
                array_push($lista, $proveedor);
            }
            return $lista;
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
