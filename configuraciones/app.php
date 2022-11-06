<?php
class App
{
    function __construct()
    {

        //$url = $_POST['url']; //captura el url
        //if (isset($_GET['url'])) {
        $url = $_GET['url'];


        if (empty($url)) {

            require_once('controladores/login.php');
            $controlador = new login();
            $controlador->inicio(); //nos carga esto, el metodo, el controlador en el inicio de controlador
        } else {
            $url = rtrim($url, '/'); //captura lo que esta entre plecas, lo divide y elimina las plecas, como un arreglo la primera parte es el controlador y la segunda parte es el metodo
            $url = explode('/', $url); //metodo
            $archivoControlador = 'controladores/' . $url[0] . '.php'; //la url como es un arreglo, va tomar lo que esta en la primera posicion y entra al archivo
            if (file_exists($archivoControlador)) { //valida si existe el archivo, si existe lo va cargar
                require_once $archivoControlador; //carga el archivo
                $controlador = new $url[0]; //carga el nuevo objeto

                if (isset($url[1])) { //verifica que existe el metodo si es que hay
                    try {
                        $controlador->{$url[1]}();
                    } catch (\Throwable $th) {
                        var_dump($th);
                    }
                } //si no hay metodo, llama al inicio siempre
                else {
                    $controlador->inicio(); //este controlador es el que se carga en $archivoControlador

                }
            } /*else {
                require_once('controladores/error.php');
                $controlador = new er();
                $controlador->er();
            }*/
        }
        // }
    }
}
