<?php
    use LiriosEngine\Leer\Leer;
    require_once __DIR__.'/LiriosEngine/start.php';

    $buscar = new Leer('marketzone');
    $buscar->search( $_GET['search'] );
    echo $buscar->getResponse();
?>