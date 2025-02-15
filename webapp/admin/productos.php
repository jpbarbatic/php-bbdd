<?php
require('comun.inc.php');
require('../librerias/html_helper.php');
$conn = db_open();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	if(isset($_FILES['foto']))
	{
		copy($_FILES['foto']['tmp_name'], 'imagenes/productos/'.$_REQUEST['id'].'.jpg');
		header('Location: productos.php?editar=' .$_REQUEST['id']);
		exit;
		/*print_r($_FILES);
		print_r($_REQUEST);
		exit;*/
	}
	
	$producto['id'] = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
	$producto['nombre'] = $_REQUEST['nombre'];
	$producto['cantidad'] = $_REQUEST['cantidad'];
	$producto['codigo_barras'] = $_REQUEST['codigo_barras'];
	$producto['categoria_id'] = $_REQUEST['categoria_id'];
	$producto['precio'] = $_REQUEST['precio'];

	if ($producto['id'] == null) {
		$id = db_insert($conn, 'productos', $producto);
	} else {
		db_update($conn, 'productos', $producto);
		$id = $producto['id'];
	}


	$conn = db_close($conn);
	header('Location: productos.php?editar=' . $id);
} else {
	// Para borrar
	if (isset($_REQUEST['borrar']) and is_integer(intval($_REQUEST['borrar']))) {
		db_delete_by_id($conn, 'productos', $_REQUEST['borrar']);
		// Para editar. Comprobamos que está el parámetro editar y es un número entero
	} else if (isset($_REQUEST['editar']) and is_integer(intval($_REQUEST['editar']))) {
		$id = intval($_REQUEST['editar']);
		// Cargamos el producto con el id
		$res = db_query($conn, "SELECT * FROM productos WHERE id=?", [$id]);

		if (count($res) == 1) {
			$producto = $res[0];
		}
	}
}

$categorias = db_query($conn, "SELECT * FROM categorias");

$num_por_pagina=9;  // Items por página
$pagina=isset($_GET['p']) ? $_GET['p'] : 1; // Obtenemos el número de la página

$total=db_query($conn, "select count(*) as total from productos")[0]['total'];  // Obtenemos el total

$num_paginas=ceil($total/$num_por_pagina);  // Obtenemos el número de páginas
$offset=($pagina-1)*$num_por_pagina;

$productos = db_query($conn, "SELECT p.*, c.nombre as categoria FROM productos p INNER JOIN categorias c ON p.categoria_id=c.id  LIMIT $num_por_pagina OFFSET $offset");

$conn = db_close($conn);

$titulo = "Gestión de productos";
$vista = 'productos';
require("../vistas/admin/plantilla.html.php");
