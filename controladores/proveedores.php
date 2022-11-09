<?php

class proveedores extends Controlador
{
    function __construct()
    {

        parent::__construct();
    }
    function inicio()
    {
        $this->vista->titulo = 'Pagina de Proveedores';
        $this->vista->url = 'proveedores/inicio';
        $this->setModelo('proveedores');
        $this->vista->datos = $this->modelo->listar();
        $this->vista->datosproveedor = $this->modelo->listarproveedores();
        $this->vista->render($this->vista->url);
    }
}
