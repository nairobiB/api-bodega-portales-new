<?php

class BaseDatos
{
    //definir atributos
    private $host;
    private $db;
    private $usuario;
    private $contrasena;
    private $caracteres;

    function __construct()
    {
        //define los parametros
<<<<<<< HEAD
        $this->host = '192.168.0.54'; //se coloca la ip del servidor de la bd
        //$this->host = '192.168.1.86';
        //$this->host = '192.168.0.10';
=======
        //$this->host = '192.168.0.54'; //se coloca la ip del servidor de la bd
        $this->host = '192.168.1.86';
        //$this->host = '192.168.100.37';
>>>>>>> c2b6eb179ca2bead00c38ffe369b31b60fc46a4e
        $this->db = 'bodegajn';
        $this->usuario = 'portales';
        $this->contrasena = 'Portales2.';
        $this->caracteres = 'utf8'; //codificacion de caracteres

    }
    function conectar()
    {
        try {
            $conexion = "mysql:host=" . $this->host . ";port = 3306;dbname=" . $this->db . ";charset=" . $this->caracteres;
            $opciones = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

            $pdo = new PDO($conexion, $this->usuario, $this->contrasena, $opciones);
            return $pdo;
        } catch (PDOException $e) {
            print_r('Error de conexion ' . $e->getMessage());
        }
    }
}
