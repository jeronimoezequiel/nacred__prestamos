<?php

$nombre = $_POST['name'];
$apellido = $_POST['last_name'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['message'];

//cuerpo del mensaje
$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su email es: " . $mail . " \r\n";
$mensaje .= "El asunto es: " . $asunto . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el: " . date('d/m/Y', time());

$destinatario = 'jeronimonunez96@gmail.com';
$asunto = 'Mail enviado desde nacred.site';

//funcion mail delcarada desde php
mail($destinatario, $asunto, utf8_decode($mensaje), $header);

//Redireccion al haber enviado el formulario
header('Location:exito.html');
?>