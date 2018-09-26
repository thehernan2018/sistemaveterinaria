<?php
    date_default_timezone_set('America/Lima');
    /*-------------------------  
    Autor: HCDD_MAH
    ---------------------------*/
    # conectare la base de datos
    $conexion= mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if(!$conexion){
        die("imposible conectarse: ".mysqli_error($conexion));
    }
    if (mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }

    mysqli_set_charset($conexion, 'utf8');
?>
