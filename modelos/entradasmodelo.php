<?php

class entradasModelo extends Modelo
{
    function __construct()
    {
        parent::__construct();
    }
    function listar()
    {
        $lista = [];
        try {
            $sql = "select IdCompra, Fechaentrada, IdProv, NomUsr, Estado from entradas";
            $datos = $this->db->conectar()->query($sql); //capturan los datos que resultan del pdo, llama a la conexion db que esta en 

            foreach ($datos as $f) {
                $entrada = [
                    'IdCompra' => $f['IdCompra'],
                    'Fechaentrada' => $f['Fechaentrada'],
                    'IdProv' => $f['IdProv'],
                    'NomUsr' => $f['NomUsr'],
                ];
                array_push($lista, $entrada);
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
            $sql2 = "select IdCompra, IdProd, Cantidad, Precio from detalleentrada";
            $datosdetalle = $this->db->conectar()->query($sql2);
            foreach ($datosdetalle as $f2) {
                $entradadetalle = [
                    'IdCompra' => $f2['IdCompra'],
                    'IdProd' => $f2['IdProd'],
                    'Cantidad' => $f2['Cantidad'],
                    'Precio' => $f2['Precio'],
                ];
                array_push($lista2, $entradadetalle);
            }
            return $lista2;
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    function listarcategorias()
    {
        $lista3 = [];
        try {
            $sql3 = "select IdCat, NombreCat, Estado from categorias";
            $datoscate = $this->db->conectar()->query($sql3);
            foreach ($datoscate as $f2) {
                $categoria = [
                    'IdCat' => $f2['IdCat'],
                    'NombreCat' => $f2['NombreCat'],
                    'Estado' => $f2['Estado'],

                ];
                array_push($lista3, $categoria);
            }
            return $lista3;
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    function guardar($datos)
    {
        $query = $this->db->conectar()->prepare('insert into entradas (Fechaentrada, IdProv, NomUsr) value(:Fechaentrada, :IdProv, :NomUsr)');
        $query->execute($datos);
    }
    function guardardetalle($datos)
    {
        $query = $this->db->conectar()->prepare('insert into detalleentrada (IdCompra, IdProd, Cantidad, Precio) value(:IdCompra, :IdProd, :Cantidad, :Precio)');
        $query->execute($datos);
    }
    function modificarentrada($datos)
    {
        $query = $this->db->conectar()->prepare("UPDATE entradas SET `Fechaentrada` = :Fechaentrada,`IdProv` = :IdProv ,`NomUsr` = :NomUsr WHERE (`IdCompra` = :IdCompra)");
        $query->execute($datos);
    }
    function eliminarentrada($datos)
    {
        $query = $this->db->conectar()->prepare("DELETE from entradas WHERE (`IdCompra` = :IdCompra)");
        $query->execute($datos);
    }
}
