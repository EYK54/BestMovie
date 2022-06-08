
<?php

$nombre = $_POST["Nombre"];
$para = $_POST["Correo"];
$asunto = "REGISTRO";
$contenido = "BIENVENIDO A BESTMOVIE SU REGISTRO A SIDO EXITOSO!!";


//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


 
    try {
        /*
      // Contenido del correo
      $asunto    = clean($_POST["prueba"]);
      $contenido = clean($_POST["si se pudo"]);
      $para      = clean($_POST["eliastecnologico9@gmail.com"]);
   
 
      if (!filter_var($para, FILTER_VALIDATE_EMAIL)) {
        throw new Exception('Dirección de correo electrónico no válida.');
      }   */
 
      // Intancia de PHPMailer
      $mail = new PHPMailer\PHPMailer\PHPMailer();
   
      // Es necesario para poder usar un servidor SMTP como gmail
      $mail->isSMTP();
   
      // Si estamos en desarrollo podemos utilizar esta propiedad para ver mensajes de error
      //SMTP::DEBUG_OFF    = off (for production use) 0
      //SMTP::DEBUG_CLIENT = client messages 1 
      //SMTP::DEBUG_SERVER = client and server messages 2
      $mail->SMTPDebug     = 0;
   
      //Set the hostname of the mail server
      $mail->Host          = 'smtp.gmail.com';
      $mail->Port          = 587; // o 587
   
      // Propiedad para establecer la seguridad de encripción de la comunicación
      $mail->SMTPSecure    = "tls"; // tls o ssl para gmail obligado
   
      // Para activar la autenticación smtp del servidor
      $mail->SMTPAuth      = "login";
 
      // Credenciales de la cuenta
      $email              = 'elias.phpcorreo@gmail.com';
      $mail->Username     = $email;
      $mail->Password     = '2000EEgR';
   
      // Quien envía este mensaje
      $mail->setFrom($email, 'BESTMOVIE');
 
      // Si queremos una dirección de respuesta
      // $mail->addReplyTo('replyto@panchos.com', 'Pancho Doe');
   
      // Destinatario
      $mail->addAddress($para, $nombre);
   
      // Asunto del correo
      $mail->Subject = $asunto;
 
      // Contenido
      $mail->IsHTML(true);
      $mail->CharSet = 'UTF-8';
      $mail->Body    = sprintf($contenido);
   
      // Texto alternativo
      //$mail->AltBody = 'No olvides suscribirte a nuestro canal.';
 
      // Agregar algún adjunto
      //$mail->addAttachment(IMAGES_PATH.'logo.png');
   
      // Enviar el correo

      $mail->send();

     if($mail->send()){
      echo '<script>
      alert("el mensaje se envio correctamente");
      </script>';
     }

      else if (!$mail->send()) {
        throw new Exception($mail->ErrorInfo);
      }
 
 
    } catch (Exception $e) {
      //Flasher::error($e->getMessage());
      //Redirect::back();
    }


  ?>