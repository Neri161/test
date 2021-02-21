<?php

namespace Models;
require 'app/Models/Conexion.php';
use Models\Conexion;

class Respuestas extends Conexion
{
    public $idUsuario;
    public $aciertos;
    public $dia;
    public $semana;
    public $anio;

    function crear(){
        $pre = mysqli_prepare($this->conexion, "INSERT INTO respuestas (id_Usuario,aciertos,dia,semana,anio) VALUES(?,?,?,?,?)");
        $pre->bind_param("iiiii", $this->idUsuario,$this->aciertos,$this->dia,$this->semana,$this->anio);
        $pre->execute();
    }
    static function respuestaAnterior(){
        $conexion = new Conexion();
        $pre = mysqli_prepare($conexion->conexion,"SELECT * FROM respuestas ORDER BY id DESC");
        $pre->execute();
        $resultado=$pre->get_result();
        return $resultado->fetch_object();
    }
}