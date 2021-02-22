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
    <title>Cuetsionario</title>
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
<div class="container" id="contenedor">
    <form action="index.php?controller=Respuestas&action=verificarRespuestas&idUsuario=<?php echo $_SESSION["idUsuario"];?>" method="post" name="formulario" id="formulario">
        <div class="row">
            <div class="col-md-6">
                <div class="form-check">
                    <label>1. ¿Cuál es el Río más largo del mundo?</label>
                    <br>
                    <input class="form-check-input" name="1" type="radio" value="1" id="rio1">
                    <label class="form-check-label" for="rio1">El Amazonas</label>
                    <br>
                    <input class="form-check-input" name="1"  type="radio" value="0" id="rio2">
                    <label class="form-check-label" for="rio2">Misisipi</label>
                    <br>
                    <input class="form-check-input" name="1" type="radio" value="0" id="rio3">
                    <label class="form-check-label" for="rio3">Nilo</label>
                </div>
                <div class="form-check">
                    <label for="rio">2. ¿Dónde originaron los juegos olímpicos?</label>
                    <br>
                    <input class="form-check-input" name="2" type="radio" value="0" id="juegos1">
                    <label class="form-check-label" for="juegos">Atenas</label>
                    <br>
                    <input class="form-check-input" name="2" type="radio" value="0" id="juegos2">
                    <label class="form-check-label"  for="radio">Austria</label>
                    <br>
                    <input class="form-check-input" name="2" type="radio" value="1" id="juegos3">
                    <label class="form-check-label" for="radio">Grecia</label>
                    <br>
                </div>
                <div class="form-check">
                    <label for="rio">3. ¿Quién pintó "La ultima Cena"?</label>
                    <br>
                    <input class="form-check-input" name="3" type="radio" value="0" id="cena">
                    <label class="form-check-label" for="cena">Miguel Angelo</label>
                    <br>
                    <input class="form-check-input" name="3" type="radio" value="0" id="cena">
                    <label class="form-check-label" for="cena">Vangog</label>
                    <br>
                    <input class="form-check-input" name="3" type="radio" value="1" id="cena">
                    <label class="form-check-label" for="cena">da Vinci</label>
                    <br>
                </div>
                <div class="form-check">
                    <label>4. ¿En qué año llegó Cristobal Colón a América?</label>
                    <br>
                    <input class="form-check-input" type="radio" name="4" value="1" id="colon">
                    <label class="form-check-label" for="colon">1492</label>
                    <br>
                    <input class="form-check-input" type="radio" name="4" value="0" id="colon">
                    <label class="form-check-label" for="colon">1576</label>
                    <br>
                    <input class="form-check-input" type="radio" name="4" value="0" id="colon">
                    <label class="form-check-label" for="colon">1429</label>
                    <br>
                </div>
                <div class="form-check">
                    <label for="rio">5. ¿En qué se especializa la cartografía?</label>
                    <br>
                    <input class="form-check-input" type="radio" name="5" value="0" id="carto">
                    <label class="form-check-label" for="carto">Estudio de la Tierra</label>
                    <br>
                    <input class="form-check-input" type="radio" name="5" value="1" id="carto">
                    <label class="form-check-label" for="colon">Estudio de mapas</label>
                    <br>
                    <input class="form-check-input" type="radio" name="5" value="0" id="carto">
                    <label class="form-check-label" for="carto">Estudio de cartas</label>
                    <br>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check">
                    <label for="rio">6. ¿Cuál es tercer planeta en el sistema solar?</label>
                    <br>
                    <input class="form-check-input" type="radio" name="6" value="0" id="planeta">
                    <label class="form-check-label" for="planeta">Marte</label>
                    <br>
                    <input class="form-check-input" type="radio" name="6" value="0" id="planeta">
                    <label class="form-check-label" for="planeta">Venus</label>
                    <br>
                    <input class="form-check-input" type="radio" name="6" value="1" id="planeta">
                    <label class="form-check-label" for="planeta">La Tierra</label>
                    <br>
                </div>
                <div class="form-check">
                    <label for="rio">7. ¿Cuál es la moneda del Reino Unido?</label>
                    <br>
                    <input class="form-check-input" type="radio" name="7" value="1" id="moneda">
                    <label class="form-check-label" for="moneda">Libra</label>
                    <br>
                    <input class="form-check-input" type="radio" name="7" value="0" id="moneda">
                    <label class="form-check-label" for="moneda">Euro</label>
                    <br>
                    <input class="form-check-input" type="radio" name="7" value="0" id="moneda">
                    <label class="form-check-label" for="moneda">Franco</label>
                    <br>
                </div>
                <div class="form-check">
                    <label for="rio">8. ¿Cuál es el país más poblado del mundo?</label>
                    <br>
                    <input class="form-check-input" type="radio" name="8" value="0" id="pais">
                    <label class="form-check-label" for="pais">India</label>
                    <br>
                    <input class="form-check-input" type="radio" name="8" value="0" id="pais">
                    <label class="form-check-label" for="pais">Estados Unidos</label>
                    <br>
                    <input class="form-check-input" type="radio" name="8" value="1" id="pais">
                    <label class="form-check-label" for="pais">China</label>
                    <br>
                </div>
                <div class="form-check">
                    <label for="rio">9. ¿Cuál es el primero de la lista de los números primos?</label>
                    <br>
                    <input class="form-check-input" type="radio" name="9" value="0" id="primos">
                    <label class="form-check-label" for="primos">1</label>
                    <br>
                    <input class="form-check-input" type="radio" name="9" value="1" id="primos">
                    <label class="form-check-label" for="primos">2</label>
                    <br>
                    <input class="form-check-input" type="radio" name="9" value="0" id="primos">
                    <label class="form-check-label" for="primos">0</label><br>
                </div>
                <div class="form-check">
                    <label for="rio">10. ¿Cuál es el animal que tiene mayor facilidad para repetir las frases y palabras que escucha?</label>
                    <br>
                    <input class="form-check-input" type="radio" name="10" value="0" id="animal">
                    <label class="form-check-label" for="animal">Loro</label>
                    <br>
                    <input class="form-check-input" type="radio" name="10" value="1" id="animal">
                    <label class="form-check-label" for="animal">Cuervo</label>
                    <br>
                    <input class="form-check-input" type="radio" name="10" value="0" id="animal">
                    <label class="form-check-label" for="animal">Chimpancé</label>
                    <br>
                </div>
            </div>
        </div>
        <br>
        <button class="btn-success form-control" id="guardar2">Guardar</button>
        <br>
    </form>
</div>
<script src="../../../test/public/js/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="../../../test/public/js/verificacion.js"></script>
</body>
</html>