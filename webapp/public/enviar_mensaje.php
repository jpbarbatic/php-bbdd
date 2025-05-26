<?php
session_start();

require("../config.php");
require("../librerias/email.php");

function validar_formulario()
{
    $res=[];
    
    $f=filter_var($_POST['nombre'], FILTER_SANITIZE_SPECIAL_CHARS);
    if(!$f){
        return false;
    }
    $res['nombre']=$f;

    $f=filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    if(!$f){
        return false;
    }
    $res['email']=$f;

    $f=filter_var($res['email'], FILTER_VALIDATE_EMAIL);
    if(!$f){
        return false;
    }
    $res['email']=$f;

    $f=filter_var($_POST['asunto'], FILTER_SANITIZE_SPECIAL_CHARS);
    if(!$f){
        return false;
    }
    $res['asunto']=$f;

    $f=filter_var($_POST['mensaje'], FILTER_SANITIZE_SPECIAL_CHARS);
    if(!$f){
        return false;
    }
    $res['mensaje']=$f;

    return $res;
}

// Comprobamos que se hace a través de POST
// Es importante para no permitir llamadas desde la URL
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $formulario=validar_formulario();
        if($formulario){
            //TODO: Habría que validar y sanitizar los datos del formulario 
            $mensaje = "<b>Nombre: </b>" .  $formulario['nombre'];
            $mensaje .= "<br><b>Email: </b>" . $formulario['email'];
            $mensaje .= "<br><b>Asunto: </b>" . $formulario['asunto'];
            $mensaje .= "<br><b>Mensaje: </b>" . $formulario['mensaje'];

            if (enviar_mail(MAIL_WEB, "Mensaje enviado desde la web", $mensaje)) {
                $_SESSION['ok'] = "El mensaje se ha enviado correctamente";
            } else {
                $_SESSION['ko'] = "No se ha podido enviar el mensaje";
            }
        }else{
            $_SESSION['ko'] = "Introduzca valores correctos en el formulario";
        }
}

header('Location: contact.php#formulario');
