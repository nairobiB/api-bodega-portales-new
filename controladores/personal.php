<?php

class personal extends Controlador
{
    function __construct()
    {

        parent::__construct();
    }
    function inicio()
    {
        $this->vista->titulo = 'Pagina de Personal';
        $this->vista->url = 'personal/inicio';
        $this->setModelo('personal');
        $this->vista->datos = $this->modelo->listar();
        $this->vista->datosusuario = $this->modelo->listarusuarios();

        $this->vista->render($this->vista->url); //llama a la vista
    }
}
