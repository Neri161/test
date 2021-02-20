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

        echo $resultado;
    }

}