<?php
session_start();

$titulo="Contactar";
$vista="contact";
require('../vistas/public/plantilla.html.php');

unset($_SESSION['ok']);
unset($_SESSION['ko']);
