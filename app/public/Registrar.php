<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion</title>

    <link rel="stylesheet" href="CSS/estilosLogin.css" >
<link rel="stylesheet" href="CSS/Estilos_PeliculasPrueba.css">


</head>

<body>

  
  

    
  <div id="et-top-navigation" data-height="30" data-fixed-height="40" style="padding-left: 350px;">
        <nav id="top-menu-nav">

            <ul id="Menu_Barr">




      <a href="index.php">Principal</a>
          <a href="Principal.php">Peliculas</a>
          <a href="series.php">Series</a>
          <a href="generos.php">Generos</a>
          <a href="Registrar.php">Registrar</a>
          <a href="ingresar.php">Ingresar</a>
          
        
      </ul>
     </nav>
    </div>
  </div>



  <div class="buscar">
  <input type = "text" placeholder="Buscar" required>
</div>
</header>


    <div class="Contenedor_Imagenes">

                <div class="logo">   
                          <img src="ImagenesPeliculas/Avenger.png" alt="">

   
                </div>

    </div>

                <div class="linea">
                    <hr width="100%" size="5px" color="white" >
                </div>







<div>
  <form action="conexion.php" method="post">


  <div class = "campos">
    <h1>Registrar</h1>

    <div class="grupo">
    <input type="text" id="Nombre" name="Nombre" required><br><span class="barra"></span>
    <label for="Nombre">Nombre</label><br>
    </div>
    
    <div class="grupo">
    <input type="text" id="Apellido" name="Apellido" required><br><span class="barra"></span>
      <label for="Apellido">Apellido</label><br>
    </div>

    <div class="grupo">
      <input type="tel" id="Telefono" name="Telefono" required><span class="barra"></span>
      <label for="Telefono">Telefono</label><br>
    </div>

    <div class="grupo">
      <input type="email" id="Correo" name="Correo" required><br><span class="barra"></span>
      <label for="Correo">Correo</label><br>
    </div>

    <div class="grupo">
      <input type="password" id="Contraseña" name="Contraseña" required><br><span class="barra"></span>
      <label for="Contraseña">Contraseña</label><br>
    </div>

    <nav id="ingresar">
    <ul id="ingre">
    <div data-v-4cf449c5="" class="switch-mode">¿Ya tienes cuenta?<a href="ingresar.php"> Ingresar</a> </div> </ul>
</nav>







    <button type="Submit">Registrar</button>


 

</div>

</form>
</div>
</body>
</html>