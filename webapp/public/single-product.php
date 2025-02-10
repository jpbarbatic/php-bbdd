<?php

require('../config.php');
require('../librerias/db_mysql.php');

// Comprueba que se pasa un id y es un número
if(isset($_REQUEST['id']) and filter_var($_REQUEST['id'], FILTER_VALIDATE_INT))
{
    $conn=db_open();
    $res=db_query($conn, 'SELECT * from productos WHERE id=?', [$_REQUEST['id']]);
    db_close($conn);

    if($res and count($res)==1)
    {
        $producto=$res[0]; // Nos quedamos con el primer elemento
        $titulo=$producto['nombre'];
        $vista="single-product";
        require('../vistas/public/plantilla.html.php');        
    }    
}else{
    header('Location: products.php');
}