<?php
include("conexion.php");
$conectar =conectar();
$correo=$_POST["correo"];

// Varios destinatarios
//$para  = 'jmeneseslicona22@gmail.com' . ', '; // atención a la coma
//$para .= 'wez@example.com';
$header="From: $correo". "\r\n";
$header.="Reply-to: jemeneses66@misena.edu.co". "\r\n";
$header.="x-Mailer: PHP/".phpversion();

// título
$título = 'codigo de verificacion';

$codigo=rand(1000,9999);

// mensaje
$mensaje = '
<html>
<head>
  <title>codigo de verificacion</title>
</head>
<body>
  <p>¡Este es tu codigo de verificacion!</p>
  <h2>'.$codigo.'</h2>
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
/*
// Cabeceras adicionales
$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";
*/
// Enviarlo
@mail($header, $título, $mensaje, $cabeceras);
echo"
<script>alert('Se envio un correo con el codigo'); window.location.href='http://localhost/baguette/olvideContrase%C3%B1a.html'</script>";

?>