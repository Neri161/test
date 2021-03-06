<?php
error_reporting(0);
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
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Promedio</title>
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
            <div class="col-md-6">
                <h1 class="text-center">HOMBRES</h1>
                <table class="table table-hover table-active" border="1"; >
                    <thead>
                    <tr>
                        <th>Dia</th>
                        <th>Promedio</th>
                        <th>Semana</th>
                        <th>Promedio</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo date("d");?></td>
                        <td><?php if (isset($promedioHD)){echo $promedioHD;}?></td>
                        <td><?php if(isset($semanaElegida)){echo $semanaElegida;}else{echo (int)date("W");}?></td>
                        <td><?php if (isset($promedioHS)){echo $promedioHS;}?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <h1 class="text-center">MUJERES</h1>
                <table class="table table-hover table-active" border="1";>
                    <thead>
                    <tr>
                        <th>Dia</th>
                        <th>Promedio</th>
                        <th>Semana</th>
                        <th>Promedio</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo date("d");?></td>
                        <td><?php if (isset($promedioMD)){echo $promedioMD;}?></td>
                        <td><?php if(isset($semanaElegida)){echo $semanaElegida;}else{echo (int)date("W");}?></td>
                        <td><?php if (isset($promedioMS)){echo $promedioMS;}?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
    </div>
    <div class="row">
        <form action="index.php?controller=Usuario&action=dia" class="col-md-12" method="post">
            <div class="form-group col-md-12">
                <label for="semanas">SEMANAS: </label>
                <select name="semanas" class="form-control" id="semanas">
                    <option value="" selected="selected">--Selecciona Semana--</option>
                    <?php
                    if (isset($semanas)){
                        foreach ($semanas as $valor){
                            ?>
                            <option value="<?php echo $valor["semana"];?>" name="semanas"><?php echo $valor["semana"];?></option>
                            <?php
                        }
                    }
                    ?>
                </select>
                <br>
                <button class="btn btn-primary form-control">BUSCAR</button>
            </div>

        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>