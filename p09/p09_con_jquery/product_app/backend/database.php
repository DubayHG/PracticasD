<?php
    $conexion = @mysqli_connect(
        'localhost',
        'root',
        'Lirio',
        'marketzone'
    );
    
    if(!$conexion) {
        die('¡Base de datos NO conectada!');
    }
?>