<?php

class sucursales extends Controlador
{
    function __construct()
    {

        parent::__construct();
    }
    function inicio()
    {
        $this->vista->titulo = 'Pagina de Sucursales';
        $this->vista->url = 'sucursales/inicio';
        $this->setModelo('sucursales');
        $this->vista->datos = $this->modelo->listar();
        $this->vista->render($this->vista->url);
    }
}
