<?php

/*
 * //-- Variables por metodo Get
 *
 * Controller
 * Action
 *
 */

if(isset($_GET["controller"]) && isset($_GET["action"])){
    $controller = $_GET["controller"]."Controller";
    require 'app/Controllers/'.$controller.'.php';
    $action = $_GET["action"];
    $objeto = new $controller();
    $objeto->{$action}();
}else{
    echo "Error en la peticion";
}
