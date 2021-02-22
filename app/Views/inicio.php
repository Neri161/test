<?php
if(!isset($_SESSION["idUsuario"]))
    session_start();
$varsesion='';
if(isset($_SESSION["idUsuario"]))
    $varsesion = $_SESSION["idUsuario"];

if($varsesion==null || $varsesion=''){
    require 'app/Views/login.php';
    die();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../../test/public/css/inicio.css">
</head>
<body>
<!-- Navbar en la parte superior que se deliza lo largo de la pagina -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
            <a class="navbar-brand" href="../../../test/index.php?controller=Usuario&action=dologin">ANGKET</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--Items, titulos -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <!--Menu desplegable -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Promedio
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../../../test/index.php?controller=Usuario&action=dia">Semana/Dia</a>
                        </div>
                    </li>
                </ul>
                <!--Elementos de la derecha -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="true">
                            <?php
                            if(isset($_SESSION["nombre"])){
                            echo "Bienvenido ".$_SESSION["nombre"];
                            }
                            ?>
                        </a>
                        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../../../test/index.php?controller=Usuario&action=perfil&id=<?php echo $_SESSION["idUsuario"];?>">Perfil</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../../../test/index.php?controller=Usuario&action=logout">Cerrar Sesion</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
<div class="container">
    <br>
    <div class="row">
            <form action="index.php?controller=Usuario&action=cuestionario" method="post" class="col-md-12">
                <button class="btn btn-primary form-control" style="margin-bottom: 3%;" id="guardar"> Contestar Cuestionario</button>
            </form>
    </div>
    <div class="row">
        <div class="row col-md-12">
            <h1 class="text-center col-md-12">TOP 10</h1>
        </div>
        <div class="col-md-6">
            <h2 class="text-center col-md-12">HOMBRES</h2>
            <table class="table table-hover table-active" border="1">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                </tr>
                </thead>
                <tbody>

                <?php
                if (isset($top)){
                    if(isset($hombre)){
                        foreach ($top as $valor){
                            foreach ($hombre as $valor1){
                                if ($valor1["id_usuario"]==$valor["id_Usuario"] && $valor1["genero"]=="H"){
                                    ?>
                            <tr>
                                <td><?php echo $valor1["nombre"];?></td>
                                <td><?php echo $valor1["apellido_paterno"];?></td>
                                <td><?php echo $valor1["apellido_materno"];?></td>
                            </tr>
                                    <?php
                                }
                            }
                        }
                    }
                }
                ?>


                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <h2 class="text-center">MUJERES</h2>
            <table class="table table-hover table-active" border="1">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <?php
                if (isset($top)){
                    if(isset($hombre)){
                        foreach ($top as $valor){
                            foreach ($hombre as $valor1){
                                if ($valor1["id_usuario"]==$valor["id_Usuario"] && $valor1["genero"]=="M"){
                                    ?>
                <tr>
                    <td><?php echo $valor1["nombre"];?></td>
                    <td><?php echo $valor1["apellido_paterno"];?></td>
                    <td><?php echo $valor1["apellido_materno"];?></td>
                </tr>
                <?php
                                }
                            }
                        }
                    }
                }
                ?>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>