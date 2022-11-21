<?php

class personalModelo extends Modelo
{
    function __construct()
    {
        parent::__construct();
    }
    function listar()
    {
        $lista = [];
        try {
            $sql = "select IdPer, TelPer, NomPer, ApePer, DirPer, Email, Estado, fecha_nacimineto from personal";
            $datos = $this->db->conectar()->query($sql); //capturan los datos que resultan del pdo, llama a la conexion db que esta en modelo base
            foreach ($datos as $f) {
                $personal = [
                    'IdPer' => $f['IdPer'],
                    'TelPer' => $f['TelPer'],
                    'NomPer' => $f['NomPer'],
                    'ApePer' => $f['ApePer'],
                    'DirPer' => $f['DirPer'],
                    'Email' => $f['Email'],
                    'Estado' => $f['Estado'],
                    'fecha_nacimineto' => $f['fecha_nacimineto']
                ];
                array_push($lista, $personal);
            }
            return $lista;
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    function listarusuarios()
    {
        $lista = [];
        try {
            $sql = "select NomUsr, Contra, IdPer, Estado, nivel, IdSucursal from usuarios";
            $datosusuario = $this->db->conectar()->query($sql); //capturan los datos que resultan del pdo, llama a la conexion db que esta en modelo base
            foreach ($datosusuario as $f) {
                $usuario = [
                    'NomUsr' => $f['NomUsr'],
                    'Contra' => $f['Contra'],
                    'IdPer' => $f['IdPer'],
                    'Estado' => $f['Estado'],
                    'nivel' => $f['nivel'],
                    'IdSucursal' => $f['IdSucursal']
                ];
                array_push($lista, $usuario);
            }
            return $lista;
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    function guardarpersonal($datos)
    {
        $query = $this->db->conectar()->prepare('insert into personal (IdPer, TelPer, NomPer, ApePer, DirPer, Email, fecha_nacimineto) value(:IdPer, :TelPer, :NomPer, :ApePer, :DirPer, :Email, :fecha_nacimineto)');
        $query->execute($datos);
    }

    function guardarusuario($datos)
    {
        $query = $this->db->conectar()->prepare('insert into usuarios (NomUsr, Contra, IdPer, nivel, IdSucursal) value(:NomUsr, :Contra, :IdPer, :nivel, :IdSucursal)');
        $query->execute($datos);
    }

    function modificarpersonal($datos)
    {
        $query = $this->db->conectar()->prepare("UPDATE personal SET `TelPer` = :TelPer, `NomPer` = :NomPer, `ApePer` = :ApePer, `DirPer` = :DirPer, `Email` = :Email, `Estado` = :Estado, `fecha_nacimineto` = :fecha_nacimineto  WHERE (`IdPer` = :IdPer)");
        $query->execute($datos);
    }
    function eliminarpersonal($datos)
    {
        $query = $this->db->conectar()->prepare("DELETE FROM personal  WHERE (`IdPer` = :IdPer)");
        $query->execute($datos);
    }
    function modificarusuario($datos)
    {
        $query = $this->db->conectar()->prepare("UPDATE usuarios SET `Contra` = :Contra, `IdPer` = :IdPer, `Estado` = :Estado, `nivel` = :nivel, `IdSucursal` = :IdSucursal  WHERE (`NomUsr` = :NomUsr)");
        $query->execute($datos);
    }
    function eliminarusuario($datos)
    {
        $query = $this->db->conectar()->prepare("DELETE FROM usuarios  WHERE (`NomUsr` = :NomUsr)");
        $query->execute($datos);
    }
}
