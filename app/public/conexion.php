<?php  // reutilizar conexion.php



$Nombre = $_POST['Nombre'];                               
$Apellido = $_POST['Apellido'];
$Telefono = $_POST['Telefono'];
$Correo = $_POST['Correo'];                               
$Contraseña = $_POST['Contraseña'];

$conexion = mysqli_connect("mysql8-service", "root", "2000EEGR", "BestMovie"); 



$consulta = "INSERT INTO BestMovie.Perfil_Usuario(Nombre, Apellido, Contraseña, Telefono, Correo) VALUES 
                                        ('$_POST[Nombre]','$_POST[Apellido]','$_POST[Contraseña]','$_POST[Telefono]','$_POST[Correo]')";



 

//$resultado = mysqli_query($conexion, $consulta) or die(mysqli_connect_error()); 


$resultado = mysqli_query($conexion, $consulta);
mysqli_close($conexion);

if ($resultado) {
?>


<?php
    include("Correo1.php");

} else {
?>
    <?php
    include("Registro.php");
    ?>
    <h2>Error en el registro</h2>
<?php
    echo "lo sentimos llenaste algun campo erroneo";
    

}

include("ingresar.php");
?>

