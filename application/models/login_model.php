<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }
    public function iniciarSesion(string $NomUsr,string $Contra){

        $sql = "SELECT FROM usuarios WHERE NomUsr='$NomUsr' AND Contra='$Contra' ";
        $results=$this->db->query($sql)->result();
        return $results;

    }
}