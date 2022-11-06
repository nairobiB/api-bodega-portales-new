<?php

class login extends Controlador
{
    function __construct()
    {

        parent::__construct();
    }
    function inicio()
    {
        $this->vista->titulo = 'Login';
        $this->vista->url = 'login/inicio';
        $this->vista->render($this->vista->url);
    }
}