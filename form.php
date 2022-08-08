<?php
$name = $_POST['name'];
$Telefono = $_POST['celular'];
$Email = $_POST['mail'];
$Direccion = $_POST['lugar'];
$Postal = $_POST['codPostal'];
$Comentario = $_POST['elmensaje'];

//Cabecera
//$header . = "Content-Type: text/plain";

//Envio del mail

$mensaje1 = "Enviado Por:"  . $name . ",\r\n";
$mensaje2 = "Telefono:"  . $Telefono . ",\r\n";
$mensaje3 = "Email:"  . $Email . ",\r\n";
$mensaje4 = "Direccion:"  . $Direccion . ",\r\n";
$mensaje5 = "Codigo Postal:"  . $Postal . ",\r\n";
$mensaje6 = "Comentario:"  . $_POST['elmensaje'] . ",\r\n";

$mensajes7 = 'Enviado Por:' .$mensaje1  .$mensaje2 .$mensaje3 .$mensaje4 .$mensaje5 .$mensaje6 . 'FIN';

//Destinatario
$para = 'pruebas@apb.net.ar';
$asunto = 'Enviado desde Apb.net';

//Mail
mail($para, $asunto, $mensajes7);

//A donde va despues de enviar el formulario
header('Location:exito.html');
?>