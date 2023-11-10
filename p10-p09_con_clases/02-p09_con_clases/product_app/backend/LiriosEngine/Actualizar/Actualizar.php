<?php

namespace LiriosEngine\Actualizar;

use LiriosEngine\BD\DataBase;

require_once __DIR__ . '/../BD/DataBase.php';

class Actualizar extends DataBase
{

    public function edit($jsonOBJ)
    {
        $this->response = array(
            'status'  => 'error',
            'message' => 'La consulta falló'
        );
        if (isset($jsonOBJ->id)) {
            $sql =  "UPDATE producto SET nombre='{$jsonOBJ->nombre}', marca='{$jsonOBJ->marca}',";
            $sql .= "modelo='{$jsonOBJ->modelo}', precio={$jsonOBJ->precio}, detalles='{$jsonOBJ->detalles}',";
            $sql .= "unidades={$jsonOBJ->unidades}, imagen='{$jsonOBJ->imagen}' WHERE id={$jsonOBJ->id}";
            $this->conexion->set_charset("utf8");
            if ($this->conexion->query($sql)) {
                $this->response['status'] =  "success";
                $this->response['message'] =  "Producto actualizado";
            } else {
                $this->response['message'] = "ERROR: No se ejecuto $sql. " . mysqli_error($this->conexion);
            }
            $this->conexion->close();
        }
    }
}
