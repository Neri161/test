<?php

if(!isset($_SESSION["nombre"]))
    session_start();
if(isset($_SESSION["nombre"])){
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
    <title>Cuetsionario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container col-md-12" id="contenedor">
    <div class="container col-md-offset-4 col-md-4" id="contenedor-2">
        <div class="panel panel-body col-md-12" id="formulario">
            <form action="index.php?controller=Usuario&action=verificarRegistro" method="post">
            <div class="form-check">
            <label for="rio">1. ¿Cuál es el Río más largo del mundo?</label>    <br>
  <input class="form-check-input" type="checkbox" value="1" id="rio">
  <label class="form-check-label" for="rio">
    El Amazonas
  </label>
</div>
<input class="form-check-input" type="checkbox" value="0" id="rio">
  <label class="form-check-label" for="rio">
    Misisipi
  </label>
  </div>
<input class="form-check-input" type="checkbox" value="0" id="rio">
  <label class="form-check-label" for="rio">
    Nilo
  </label>
<br>
</div>
<div class="form-check">
  <label for="rio">2. ¿Dónde originaron los juegos olímpicos?</label>    <br>
  <input class="form-check-input" type="checkbox" value="0" id="juegos">
  <label class="form-check-label" for="juegos">
    Atenas
  </label>
  <br>
</div>
<input class="form-check-input" type="checkbox" value="0" id=juegos>
  <label class="form-check-label" for="juegos">
    Austria
  </label>
  </div>
<input class="form-check-input" type="checkbox" value="1" id="juegos">
  <label class="form-check-label" for="juegos">
    Grecia
  </label>
<br>
</div>
<div class="form-check">
            <label for="rio">3. ¿Quién pintó "La ultima Cena"?</label>    <br>
  <input class="form-check-input" type="checkbox" value="0" id="cena">
  <label class="form-check-label" for="cena">
    Miguel Angelo
  </label>
</div>
<input class="form-check-input" type="checkbox" value="0" id="cena">
  <label class="form-check-label" for="cena">
    Vangog
  </label>
  </div>
  <br>
<input class="form-check-input" type="checkbox" value="1" id="cena">
  <label class="form-check-label" for="cena">
    da Vinci
  </label>
<br>
</div>
<div class="form-check">
            <label for="rio">4. ¿En qué año llegó Cristobal Colón a América?</label>    <br>
  <input class="form-check-input" type="checkbox" value="1" id="colon">
  <label class="form-check-label" for="colon">
    1492
  </label>
</div>
<input class="form-check-input" type="checkbox" value="0" id="colon">
  <label class="form-check-label" for="colon">
    1576
  </label>
  </div>
  <br>
<input class="form-check-input" type="checkbox" value="0" id="colon">
  <label class="form-check-label" for="colon">
    1429
  </label>
<br>
</div>
<div class="form-check">
            <label for="rio">5. ¿En qué se especializa la cartografía?</label>    <br>
  <input class="form-check-input" type="checkbox" value="0" id="carto">
  <label class="form-check-label" for="carto">
    Estudio de la Tierra
  </label>
</div>
<input class="form-check-input" type="checkbox" value="1" id="carto">
  <label class="form-check-label" for="colon">
    Estudio de mapas
  </label>
  </div>
  <br>
<input class="form-check-input" type="checkbox" value="0" id="carto">
  <label class="form-check-label" for="carto">
    Estudio de cartas 
  </label>
<br>
</div>
<div class="form-check">
            <label for="rio">6. ¿Cuál es tercer planeta en el sistema solar?</label>    <br>
  <input class="form-check-input" type="checkbox" value="0" id="planeta">
  <label class="form-check-label" for="planeta">
    Marte
  </label>
</div>
<input class="form-check-input" type="checkbox" value="0" id="planeta">
  <label class="form-check-label" for="planeta">
    Venus
  </label>
  </div>
  <br>
<input class="form-check-input" type="checkbox" value="1" id="planeta">
  <label class="form-check-label" for="planeta">
    La Tierra
  </label>
<br>
</div>
<div class="form-check">
            <label for="rio">7. ¿Cuál es la moneda del Reino Unido?</label>    <br>
  <input class="form-check-input" type="checkbox" value="1" id="moneda">
  <label class="form-check-label" for="moneda">
    Libra
  </label>
</div>
<input class="form-check-input" type="checkbox" value="0" id="moneda">
  <label class="form-check-label" for="moneda">
    Euro
  </label>
  </div>
  <br>
<input class="form-check-input" type="checkbox" value="0" id="moneda">
  <label class="form-check-label" for="moneda">
    Franco
  </label>
<br>
</div>
<div class="form-check">
            <label for="rio">8. ¿Cuál es el país más poblado del mundo?</label>    <br>
  <input class="form-check-input" type="checkbox" value="0" id="pais">
  <label class="form-check-label" for="pais">
    India
  </label>
</div>
<input class="form-check-input" type="checkbox" value="0" id="pais">
  <label class="form-check-label" for="pais">
    Estados Unidos
  </label>
  </div>
  <br>
<input class="form-check-input" type="checkbox" value="1" id="pais">
  <label class="form-check-label" for="pais">
    China
  </label>
<br>
</div>
<div class="form-check">
            <label for="rio">9. ¿Cuál es el primero de la lista de los números primos?</label>    <br>
  <input class="form-check-input" type="checkbox" value="0" id="primos">
  <label class="form-check-label" for="primos">
    1
  </label>
</div>
<input class="form-check-input" type="checkbox" value="1" id="primos">
  <label class="form-check-label" for="primos">
   2
  </label>
  </div>
  <br>
<input class="form-check-input" type="checkbox" value="0" id="primos">
  <label class="form-check-label" for="primos">
    0
  </label>
<br>
</div>
<div class="form-check">
            <label for="rio">10. ¿Cuál es el animal que tiene mayor facilidad para repetir las frases y palabras que escucha?</label>    <br>
  <input class="form-check-input" type="checkbox" value="0" id="animal">
  <label class="form-check-label" for="animal">
    Loro
  </label>
</div>
<input class="form-check-input" type="checkbox" value="1" id="animal">
  <label class="form-check-label" for="animal">
Cuervo
  </label>
  </div>
  <br>
<input class="form-check-input" type="checkbox" value="0" id="animal">
  <label class="form-check-label" for="animal">
Chimpancé
  </label>
<br>
</div>
           
                <div class="row">
                    <div class="col-md-12" style="padding-bottom: 3%;">
                        <button class="btn-success form-control" id="guardar">Guardar</button>
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