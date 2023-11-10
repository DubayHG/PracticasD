<?php
    use LiriosEngine\Leer\Leer;

    require_once __DIR__.'/LiriosEngine/start.php';

    $leer = new Leer('marketzone');
    $leer->list();
    echo $leer->getResponse();
?>