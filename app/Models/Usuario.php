<?php
namespace Models;
require 'app/Models/Conexion.php';
use Models\Conexion;

class Usuario extends Conexion
{
    public $nombre;
    public $apellidoPaterno;
    public $apellidoMaterno;
    public $genero;
    public $correo;
    public $contrasenia;
    public $fecha_registro;
    public $foto;
    public $tipo;
    function __construct()
    {
        parent::__construct();
    }
    //insertar usuario
    function crear()
    {
        $this -> fecha_registro = date("Y-m-d");
        $pre = mysqli_prepare($this->conexion, "INSERT INTO usuarios (nombre,apellido_paterno,apellido_materno, genero ,correo,contrasenia,fecha_registro,foto,tipo) VALUES(?,?,?,?,?,?,?,?,?)");
        $pre->bind_param("sssssssss", $this->nombre, $this->apellidoPaterno, $this->apellidoMaterno,$this->genero ,$this->correo, $this->contrasenia, $this->fecha_registro,$this->foto,$this->tipo);
        $pre->execute();
    }//actualizar foto
    function actualizarFoto($id)
    {
        $pre = mysqli_prepare($this->conexion, "UPDATE usuarios SET foto=?,tipo=? WHERE id_usuario=?");
        $pre->bind_param("sss", $this->foto,$this->tipo,$id);
        $pre->execute();
    }
    //obtener datos de usuario
    static function vereficarUsuario($correo)
    {
        $conexion = new Conexion();
        $pre = mysqli_prepare($conexion->conexion,"SELECT * FROM usuarios WHERE correo=?");
        $pre->bind_param("s", $correo);
        $pre->execute();
        $resultado = $pre->get_result();
        return $resultado->fetch_object();
    }
    //verificar si exite el correo
    static function verificarCorreo($correo){
        $conexion = new Conexion();
        $pre = mysqli_prepare($conexion->conexion,"SELECT correo FROM usuarios WHERE correo=?");
        $pre->bind_param("s", $correo);
        $pre->execute();
        $resultado = $pre->get_result();
        return $resultado->fetch_object();
    }
    static function top(){
        $conexion = new Conexion();
        $pre = mysqli_prepare($conexion->conexion,"CREATE TEMPORARY TABLE IF NOT EXISTS t1 AS SELECT * FROM respuestas ORDER BY aciertos DESC");
        $pre->execute();
        $pre = mysqli_prepare($conexion->conexion,"SELECT DISTINCT id_Usuario FROM t1");
        $pre->execute();
        $resultado=$pre->get_result();
        while ($y=mysqli_fetch_assoc($resultado)){
            $t[]=$y;
        }
        return $t;
    }
    static function usuarios(){
        $conexion = new Conexion();
        $pre = mysqli_prepare($conexion->conexion,"SELECT * FROM usuarios");
        $pre->execute();
        $resultado=$pre->get_result();
        while ($y=mysqli_fetch_assoc($resultado)){
            $t[]=$y;
        }
        return $t;
    }
    static function historial($id){
        $conexion = new Conexion();
        $pre = mysqli_prepare($conexion->conexion,"SELECT * FROM respuestas where id_Usuario=?");
        $pre->bind_param("s", $id);
        $pre->execute();
        $resultado=$pre->get_result();
        while ($y=mysqli_fetch_assoc($resultado)){
            $t[]=$y;
        }
        return $t;
    }
    static function dia(){
        $dia=(int)date("d");
        $conexion = new Conexion();
        $pre = mysqli_prepare($conexion->conexion,"SELECT * FROM respuestas where dia=?");
        $pre->bind_param("i", $dia);
        $pre->execute();
        $resultado=$pre->get_result();
        while ($y=mysqli_fetch_assoc($resultado)){
            $t[]=$y;
        }
        return $t;
    }
    static function semana(){
        $dia=(int)date("W");
        $conexion = new Conexion();
        $pre = mysqli_prepare($conexion->conexion,"SELECT * FROM respuestas where semana=?");
        $pre->bind_param("i", $dia);
        $pre->execute();
        $resultado=$pre->get_result();
        while ($y=mysqli_fetch_assoc($resultado)){
            $t[]=$y;
        }
        return $t;
    }
}