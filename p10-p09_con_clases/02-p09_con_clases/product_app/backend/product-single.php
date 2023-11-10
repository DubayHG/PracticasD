<?php

use LiriosEngine\Leer\Leer;

require_once __DIR__.'/LiriosEngine/start.php';

$single = new Leer('marketzone');
$single->single($_POST['id']);
echo $single->getResponse();
