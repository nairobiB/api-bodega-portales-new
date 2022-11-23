<?php

class productos extends Controlador
{
    function __construct()
    {

        parent::__construct();
    }
    function inicio()
    {
        $this->vista->titulo = 'Pagina de Productos';
        $this->vista->url = 'productos/inicio';
        $this->setModelo('productos');
        $this->vista->datos = $this->modelo->listar();
        $this->vista->datosproveedor = $this->modelo->listarproveedores();
        $this->vista->render($this->vista->url);
    }
}
