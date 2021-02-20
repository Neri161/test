<?php
error_reporting(0);
if(!isset($_SESSION["idUsuario"]))
    session_start();
if(isset($_SESSION["idUsuario"])){
    require 'app/Views/usuario/inicio.php';
    die();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../../repo/Public/css/estilos.css">
</head>
<body>
<div class="container col-md-12" id="contenedor">
    <div class="container col-md-offset-4 col-md-4" id="contenedor-2">
        <div class="panel panel-body col-md-12" id="formulario">
            <br>
            <center><img src="../../../../repo/Public/img/1.png" alt="usuario" width="70px"></center>
            <form name="form" action="index.php?controller=Usuario&action=verificarRegistro" method="post" enctype="multipart/form-data">
                <div class="row" id="col">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nombre">Nombre: </label>
                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="paterno">Apellido Paterno: </label>
                            <input type="text" name="paterno" id="paterno" class="form-control" placeholder="Apellido Paterno" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="materno">Apellido Materno: </label>
                            <input type="text" name="materno" id="materno" class="form-control" placeholder="Apellido Materno" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="correo">Correo:</label>
                            <input type="email" id="correo" name="correo" placeholder="Correo" required class="form-control">
                            <?php
                            if(isset($usuarioNoExiste)){
                                echo '<h5 class="alert-danger text-center">'.$usuarioNoExiste.'</h5>';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <?php
                            if(isset($error_encontrado)){
                                echo '<h5 class="alert-danger text-center">Contraseña no valida'.$error_encontrado.'</h5>';
                            }
                            ?>
                            <label for="contrasenia">Contraseña:</label>
                            <input type="password" id="contrasenia-1" name="contrasenia" placeholder="Contraseña" required class="form-control">
                            <span id="mensaje"></span>
                            <br>
                            <span id="alerta" role="alert"><strong>!</strong> La contraseña debe contener al menos 6 caracteres</span>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="contrasenia-2">Contraseña</label>
                            <input type="password" id="contrasenia-2" name="contrasenia2" placeholder="Contraseña" required class="form-control">
                            <span  id="mensaje-2"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="padding-bottom: 3%;">
                       <button class="btn-success form-control" id="guardar">Guardar</button>
                        <div class="form-group">
                         <a href="index.php?controller=Usuario&action=login">¿Tienes una cuenta?</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="../../../repo/Public/js/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="../../../repo/Public/js/verificacion.js"></script>
<script src="../../../repo/Public/js/contrasenia.js"></script>
</body>
</html>