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
    <title>Perfil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../../repo/Public/css/inicio.css">
</head>
<body>
<!-- Navbar en la parte superior que se deliza lo largo de la pagina -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="../../../test/index.php?controller=Usuario&action=dologin">Aner Vinyl</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!--Items, titulos -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <!--Menu desplegable -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
        <!--Busqueda -->
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <!--Elementos de la derecha -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="../../../test/index.php?controller=Usuario&action=carrito">Carrito(0)</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="true">
                    <?php
                    if(isset($_SESSION["nombre"])){
                        echo "Bienvenido ".$_SESSION["nombre"];
                    }
                    ?>
                </a>
                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../../../test/index.php?controller=Usuario&action=perfil">Perfil</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../../../test/index.php?controller=Usuario&action=logout">Cerrar Sesion</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <br>
    <form action="index.php?controller=Usuario&action=actualizarFoto&id=<?php echo $_SESSION['idUsuario']; ?>" method="post" enctype="multipart/form-data">
        <div class="image-upload">
            <center><label for="file-input">
                    <img  src="data:<?php echo $_SESSION['tipo']; ?>;base64,<?php echo  base64_encode($_SESSION['foto']); ?>" alt ="Click aquí para subir tu foto" title ="Click aquí para subir tu foto"
                         data-toggle="popover"
                         data-content="Cambiar Foto">
                </label></center>
            <input id="file-input" name="image" type="file" required/>
        </div>
        <div class="mostrar" id="mostrar">
            <center><button  class="btn btn-success form-control col-md-3" style="margin-bottom: 3%;" id="guardar">Actualizar Foto</button></center>
        </div>

    </form>
    <br>
            <div class="row">
                <div class="form-group col-md-3">
                    <label for="nombre">Nombre: </label>
                    <input type="text" name="nombre" id="nombre" readonly class="form-control" placeholder="Nombre" required value="<?php echo $_SESSION['nombre']; ?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="paterno">Apellido Paterno: </label>
                    <input type="text" name="paterno" id="paterno" readonly class="form-control" placeholder="Apellido Paterno" required value="<?php echo $_SESSION['apellidoPaterno']; ?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="materno">Apellido Materno: </label>
                    <input type="text" name="materno" id="materno" readonly class="form-control" placeholder="Apellido Materno" required value="<?php echo $_SESSION['apellidoMaterno']; ?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="correo">Correo:</label>
                    <input type="email" id="correo" name="correo" readonly class="form-control" value="<?php echo $_SESSION['correo']; ?>">
                </div>
            </div>
    <form name="form" action="" method="post" enctype="multipart/form-data">
        <button class="btn btn-success form-control" style="margin-bottom: 3%;" id="guardar">Actualizar Datos</button>
    </form>
    </div>
</div>

<script src="../../../repo/Public/js/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="../../../repo/Public/js/foto.js"></script>
</body>
</html>
