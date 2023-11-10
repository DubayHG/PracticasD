<?php

namespace LiriosEngine\Leer;

use LiriosEngine\BD\DataBase;

require_once __DIR__ . '/../BD/DataBase.php';

class Leer extends DataBase
{

    public function list()
    {
       
        if ($result = $this->conexion->query("SELECT * FROM producto WHERE eliminado = 0")) {
            $rows = $result->fetch_all(MYSQLI_ASSOC);

            if (!is_null($rows)) {
              
                foreach ($rows as $num => $row) {
                    foreach ($row as $key => $value) {
                        $this->response[$num][$key] = ($value);
                    }
                }
            }
            $result->free();
        } else {
            die('Query Error: ' . mysqli_error($this->conexion));
        }
        $this->conexion->close();
    }

    public function search($search)
    {
        if (isset($search)) {
            $sql = "SELECT * FROM producto WHERE (id = '{$search}' OR nombre LIKE '%{$search}%' OR marca LIKE '%{$search}%' OR detalles LIKE '%{$search}%') AND eliminado = 0";
            if ($result = $this->conexion->query($sql)) {
                $rows = $result->fetch_all(MYSQLI_ASSOC);

                if (!is_null($rows)) {
                    foreach ($rows as $num => $row) {
                        foreach ($row as $key => $value) {
                            $this->response[$num][$key] = ($value);
                        }
                    }
                }
                $result->free();
            } else {
                die('Query Error: ' . mysqli_error($this->conexion));
            }
            $this->conexion->close();
        }
    }

    public function single($id)
    {
        if (isset($id)) {
            if ($result = $this->conexion->query("SELECT * FROM producto WHERE id = {$id}")) {
                $row = $result->fetch_assoc();

                if (!is_null($row)) {
                    foreach ($row as $key => $value) {
                        $this->response[$key] = ($value);
                    }
                }
                $result->free();
            } else {
                die('Query Error: ' . mysqli_error($this->conexion));
            }
            $this->conexion->close();
        }
    }
}
