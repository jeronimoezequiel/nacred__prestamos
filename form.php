<?php

$nombre = $_POST['name'];
$apellido = $_POST['last_name'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensajeUsuario = $_POST['message'];

// Construir el cuerpo del mensaje del correo electrónico
$mensajeCorreo = "Este mensaje fue enviado por " . $nombre . " " . $apellido . ",\r\n";
$mensajeCorreo .= "Su email es: " . $email . " \r\n";
$mensajeCorreo .= "El teléfono es: " . $telefono . " \r\n";
$mensajeCorreo .= "El asunto es: " . $asunto . " \r\n";
$mensajeCorreo .= "Mensaje: " . $mensajeUsuario . " \r\n";
$mensajeCorreo .= "Enviado el: " . date('d/m/Y', time());

$destinatario = 'jeronimonunez96@gmail.com';
$asuntoCorreo = 'Mail enviado desde nacred.site';

// Envío del correo electrónico
$mailEnviado = mail($destinatario, $asuntoCorreo, utf8_decode($mensajeCorreo));

// Redireccionamiento después de enviar el formulario
if ($mailEnviado) {
    header('Location: exito.html');
} else {
    echo 'Hubo un error al enviar el formulario. Por favor, inténtalo de nuevo.';
}
?>
