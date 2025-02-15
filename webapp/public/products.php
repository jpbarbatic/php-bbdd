<?php

require('../config.php');
require('../librerias/db_mysql.php');
$conn=db_open();

$num_por_pagina=9;  // Items por página
$pagina=isset($_GET['p']) ? $_GET['p'] : 1; // Obtenemos el número de la página

$total=db_query($conn, "select count(*) as total from productos")[0]['total'];  // Obtenemos el total

$num_paginas=ceil($total/$num_por_pagina);  // Obtenemos el número de páginas
$offset=($pagina-1)*$num_por_pagina;

$productos=db_query($conn, "SELECT * from productos LIMIT $num_por_pagina OFFSET $offset");
db_close($conn);

$titulo="Catálogo";
$vista="products";
require('../vistas/public/plantilla.html.php');