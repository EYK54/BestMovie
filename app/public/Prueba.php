<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
 

    </head>


<body>


<form action="Correo.php" method="post">


<div class = "campos">
  <h1>Registrar</h1>

  <div class="grupo">
  <input type="text" id="Nombre" name="Nombre" required><br><span class="barra"></span>
  <label for="Nombre">Nombre</label><br>
  </div>

 

  <div class="grupo">
    <input type="email" id="Correo" name="Correo" required><br><span class="barra"></span>
    <label for="Correo">Correo</label><br>
  </div>

 

  <button type="Submit">Registrar</button>

 
<?php

include("Correo.php");



    ?>

</body>
</html>