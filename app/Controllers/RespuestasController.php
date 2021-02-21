<?php
require 'app/Models/Respuestas.php';
use Models\Respuestas;

class RespuestasController
{
    function verificarRespuestas(){
        $resultado=new Respuestas();
        $resultado=0;
        if ($_POST["1"])
            $resultado+=1;
        if ($_POST["2"])
            $resultado+=1;
        if ($_POST["3"])
            $resultado+=1;
        if ($_POST["4"])
            $resultado+=1;
        if ($_POST["5"])
            $resultado+=1;
        if ($_POST["6"])
            $resultado+=1;
        if ($_POST["7"])
            $resultado+=1;
        if ($_POST["8"])
            $resultado+=1;
        if ($_POST["9"])
            $resultado+=1;
        if ($_POST["10"])
            $resultado+=1;
        $respuesta = new Respuestas();
        $respuesta->aciertos=$resultado;
        $respuesta->idUsuario=(int)$_GET["idUsuario"];
        $respuesta->dia=(int)date("d");
        $respuesta->semana=(int)date ( "W");
        $respuesta->anio=(int)date("Y");
        $resultadoAnterior=Respuestas::respuestaAnterior();
        session_start();
        $_SESSION["respuesta"]=$resultadoAnterior->aciertos;
        $_SESSION["aciertos"]=$resultado;
        echo  var_dump($_SESSION["respuesta"]);
        $respuesta->crear();
        header("location:../../../test/index.php?controller=Usuario&action=resultado");

    }

}