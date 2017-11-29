<?php

    class Model {
        private $connection;

    public function connect()
    {
        //$this->connection = mysqli_connect("host", "user", "password", "bd_name") or die(("Error " . mysqli_error($connect)));
        //$this->connection = mysqli_connect("sql200.epizy.com", "epiz_20606903", "ufps1151267", "epiz_20606903_sicoavi") or die(("Error al conectarse a la base de datos"));
        $this->connection = mysqli_connect("localhost", "root", "ufps1151267", "sicoavi") or die(("Error " . mysqli_error($connect)));
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
        array_walk_recursive($array, function (&$item, $key) {
            if (!mb_detect_encoding($item, 'utf-8', true)) {
                $item = utf8_encode($item);
            }
        });

        return $array;
    }



    }
?>
