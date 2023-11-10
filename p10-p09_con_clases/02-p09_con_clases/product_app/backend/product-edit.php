<?php
    use LiriosEngine\Actualizar\Actualizar;
    require_once __DIR__.'/LiriosEngine/start.php';

    $actualizar = new Actualizar('marketzone');
    $actualizar->edit( json_decode( json_encode($_POST) ) );
    echo $actualizar->getResponse();
?>