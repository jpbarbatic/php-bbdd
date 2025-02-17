<?php
session_start();
require("../config.php");
require("../librerias/email.php");

$mensaje="<b>Nombre: </b>".$_REQUEST['nombre'];
$mensaje.="<br><b>Email: </b>".$_REQUEST['email'];
$mensaje.="<br><b>Asunto: </b>".$_REQUEST['asunto'];
$mensaje.="<br><b>Mensaje: </b>".$_REQUEST['mensaje'];

if(enviar_mail('jpablo.tic@gmail.com', "Mensaje enviado desde la web", $mensaje))
{
    $_SESSION['ok']="El mensaje se ha enviado correctamente";
}else{
    $_SESSION['ko']="No se ha podido ennviar el mensaje";
}

header('Location: contact.php#formulario');
