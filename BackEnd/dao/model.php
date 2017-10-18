<?php

class Model
{
    private $connection;

    public function connect()
    {
        //$this->connection = mysqli_connect("sql202.rf.gd", "rfgd_20472940", "1151267ufps", "rfgd_20472940_zapatos") or die(("Error..."));

        $this->connection = mysqli_connect("localhost", "root", "ufps1151267", "zapatos") or die(("Error..."));
    }

    public function query($sql)
    {
        return mysqli_query($this->connection, $sql);
    }

    public function terminate()
    {
        mysqli_close($this->connection);
    }

    public function lastInsertId()
    {
        return mysqli_insert_id($this->connection);
    }

    public function parseParams($params)
    {
        $condition = "";

        $f = false;
        while ($param = current($params)) {
            if (!$f) {
                $condition = "WHERE ";
                $f = true;
            } else {
                $condition = $condition . "AND ";
            }
            $condition = $condition . key($params) . " = '" . $param . "' ";
            next($params);
        }

        return $condition;
    }

    function utf8_converter($array)
    {
        array_walk_recursive($array, function (&$item) {
            if (!mb_detect_encoding($item, 'utf-8', true)) {
                $item = utf8_encode($item);
            }
        });

        return $array;
    }


}

?>
