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

define('SMTP_SERVER', 'smtp.gmail.com');
define('SMTP_PORT', 465);
define('SMTP_AUTH', true);
define('SMTP_SECURE', 'ssl');
define('MAIL_USERNAME', '');
define('MAIL_USER', '');
define('MAIL_PASS', '');