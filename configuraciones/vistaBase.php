<?php

    class Vista {
        function __construct()
        {

        }
        function render($nombre){
            require 'vistas/'.$nombre.'.php';
        }
    }
