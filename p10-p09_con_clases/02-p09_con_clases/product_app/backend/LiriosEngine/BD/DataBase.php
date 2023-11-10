<?php
namespace LiriosEngine\BD;

abstract class DataBase {
    protected $conexion;
    protected $response;

    public function __construct($database="marketzone") {
        $this->conexion = @mysqli_connect(
            'localhost',
            'root',
            'Lirio',
            $database
        );

        if(!$this->conexion) {
            die('¡Base de datos NO conextada!');
        }

        $this->response = array();
    }

    public function getResponse() {

        return json_encode($this->response, JSON_PRETTY_PRINT);
    }
}
?>