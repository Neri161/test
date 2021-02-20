<?php
require 'app/Models/Usuario.php';
use Models\Usuario;
class UsuarioController
{
    function __construct()
    {
    }
    //muestra vista de registro
    function registro(){
        require "app/Views/registro.php";
    }
    //verifica eñ registro de usuario
    function verificarRegistro(){
        $correo=&$_POST["correo"];
        $verificar = Usuario::verificarCorreo($correo);
        $image = '10160';
        $imageSubida=fopen('C:\xampp\htdocs\test\public\img\defecto.jpg','r');
        $binariosImagen=fread($imageSubida,$image);
        if($verificar==null){
            $usario = new Usuario();
            $usario->nombre=$_POST["nombre"];
            $usario->apellidoPaterno=$_POST["paterno"];
            $usario->apellidoMaterno=$_POST["materno"];
            $usario->correo=$_POST["correo"];
            $usario->contrasenia=password_hash($_POST["contrasenia"],PASSWORD_DEFAULT,['cost' => 5]);
            $usario->foto=$binariosImagen;
            $usario->tipo='image/jpg';
            $usario->crear();
            header("location:../../../test/index.php?controller=Usuario&action=login");
        }else{
            $usuarioNoExiste="El usuario ya existe";
            require "app/Views/registro.php";
        }
    }
    //muestra vista de login
    function login(){
        require "app/Views/login.php";
    }
    function perfil(){
        require 'app/Views/perfil.php';
    }
    //muestra inicio y carga los datos de productos
    function dologin(){
       require 'app/Views/inicio.php';
    }
    //cerrar sesion
    function logout(){
        session_start();
        session_destroy();
        header("location:../../../test/index.php?controller=Usuario&action=login");
    }
    //verifica datos del usuario para acceder a la sesion
    function verificarCredenciales(){
        if ((!isset($_POST["correo"])) || !isset($_POST["contrasenia"])){
            echo "Datos incorrectos";
            return false;
        }
        $correo=$_POST["correo"];
        $contrasenia=$_POST["contrasenia"];
        $verificar = Usuario::vereficarUsuario($correo);
        if ($verificar){
            if (password_verify($contrasenia,$verificar->contrasenia)){
                session_start();
                $_SESSION["idUsuario"]=$verificar->id_usuario;
                $_SESSION["nombre"]=$verificar->nombre;
                $_SESSION["apellidoPaterno"]=$verificar->apellido_paterno;
                $_SESSION["apellidoMaterno"]=$verificar->apellido_materno;
                $_SESSION["correo"]=$verificar->correo;
                $_SESSION["foto"]=$verificar->foto;
                $_SESSION["tipo"]=$verificar->tipo;
                header("location:../../../test/index.php?controller=Usuario&action=dologin");
            }else{
                $Contrasenia="La contraseña es incorrecta";
                require "app/Views/login.php";
            }
        }else{
                $estatus="Datos incorectos";
                require "app/Views/login.php";
        }
    }
    //actualizar foto de perfil
    function actualizarFoto(){
        $usuario = new Usuario();

        $nombre=$_FILES['image']['name'];
        $tamanio=$_FILES['image']['size'];
        $imagenSubida=fopen($_FILES['image']['tmp_name'],'r');
        $binarioImagen=fread($imagenSubida,$tamanio);
        $usuario->tipo=$_FILES['image']['type'];
        $usuario->foto=$binarioImagen;
        $usuario->actualizarFoto($_GET["id"]);
        session_start();
        $_SESSION["foto"]=$binarioImagen;
        $_SESSION["tipo"]=$_FILES['image']['type'];
        header("location:../../../test/index.php?controller=Usuario&action=perfil");
    }
}