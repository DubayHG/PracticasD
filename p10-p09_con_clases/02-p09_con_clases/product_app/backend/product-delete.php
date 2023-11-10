<?php
    use LiriosEngine\Eliminar\Eliminar;
    require_once __DIR__.'/LiriosEngine/start.php';

    $eliminar = new Eliminar('marketzone');
    $eliminar->delete( $_POST['id'] );
    echo $eliminar->getResponse();
?>