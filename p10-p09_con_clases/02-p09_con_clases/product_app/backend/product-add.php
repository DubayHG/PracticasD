<?php

use LiriosEngine\Crear\Crear;

require_once __DIR__.'/LiriosEngine/start.php';

    $Crear = new Crear('marketzone');
    $Crear->add( json_decode( json_encode($_POST) ) );
    echo $Crear->getResponse();
?>