<?php
ini_set('display_errors','On');
ini_set('error_reporting', E_ALL );
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
define('DEBUG', true);
define('DB_HOST', 'localhost');
define('DB_USER', 'prueba');
define('DB_PASS', '1234');
define('DB_NAME', 'prueba');
define('DB_PORT', 3306);

define('SMTP_SERVER', 'smtp.gmail.com');    // dirección del servidor
define('SMTP_PORT', 465);       // puerto
define('SMTP_AUTH', true);      // true si utiliza usuario y contraseña
define('SMTP_SECURE', 'ssl');   // Tipo de seguridad. ssl/tls o vacío
define('MAIL_USER', '');        // usuario
define('MAIL_PASS', '');        // contraseña

define('MAIL_WEB', ''); // Dirección a la cual enviar los mensajes