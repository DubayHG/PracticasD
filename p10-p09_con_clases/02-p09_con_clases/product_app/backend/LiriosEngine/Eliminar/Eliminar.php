<?php

namespace LiriosEngine\Eliminar;

use LiriosEngine\BD\DataBase;

require_once __DIR__ . '/../BD/DataBase.php';

class Eliminar extends DataBase
{

    public function delete($id)
    {
        $this->response = array(
            'status'  => 'error',
            'message' => 'La consulta falló'
        );
        if (isset($id)) {
            $sql = "UPDATE producto SET eliminado=1 WHERE id = {$id}";
            if ($this->conexion->query($sql)) {
                $this->response['status'] =  "success";
                $this->response['message'] =  "Producto eliminado";
            } else {
                $this->response['message'] = "ERROR: No se ejecuto $sql. " . mysqli_error($this->conexion);
            }
            $this->conexion->close();
        }
    }
}
