<?php

require('../config.php');
require('../librerias/db_mysql.php');

$num_pagina=isset($_GET['p']) ? $_GET['p'] : 1;
$offset=($num_pagina-1)*9;
$conn=db_open();
$productos=db_query($conn, 'SELECT * from productos LIMIT 9 OFFSET '.$offset);
db_close($conn);

$titulo="Catálogo";
$vista="products";
require('../vistas/public/plantilla.html.php');