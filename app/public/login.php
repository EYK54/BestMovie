

<?php

$Correo = $_POST['Correo'];                               
$Contraseña = $_POST['Contraseña'];


session_start();

$conexion = mysqli_connect("mysql8-service", "root", "2000EEGR", "BestMovie");              //realiza la conexion de php a mysql con el usuario root

mysqli_set_charset($conexion,"utf8");

$consulta = "SELECT*FROM Perfil_Usuario WHERE Correo ='$Correo' and Contraseña ='$Contraseña'";     //consulta en la base de datos si la contraseña y el nombre de usuario son correctos

$resultado = mysqli_query($conexion, $consulta) or die(mysqli_connect_error());         //sintaxis por si truena el codigo poder ver que error es 



$filas = mysqli_num_rows($resultado);


if ($filas) {                                                       //evalua si en la bd hay filas entonces quiere decir que si realizo la conexion exitosa
  //  header("location: Prueba.php");
    
    echo ("si  se conecto");
    
} else {                                                            //si no existen filas entonces nos da por echo de que ingresamos mal el usuario por que no encontro registro de el
?>
    <?php
    //include("Prueba.php");
    echo ("error usuario o contraseña incorrecto");
    ?>
    <h1>error usuario o contraseña incorrecto</h1>
<?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);






