<?php

include_once "dao/model.php";

class ClienteDAO extends Model
{


    public function __CONSTRUCT()
    {

    }

//-------------------------------------Registro de Clientes---------------------------------------------------

    /**
     * @param $codigoT
     * @param $idPedido
     * @return string
     */
    public function regCliente($cDto)
    {
        $this->connect();
        $consulta = "INSERT INTO cliente (nombre, direccion, telefono) VALUES ('$cDto->nombre','$cDto->direccion','$cDto->telefono')";
        $query = $this->query($consulta);
        $this->terminate();

        if ($query) {
            return "ok";
        } else {
            return "error";
            throw new mysqli_sql_exception("Error al registrar el partido.");
        }
    }

    /**
     * consulta todos los datos de un Cliente
     * @param $codigo
     * @return array|string
     */
    public function consultDatosC($codigo)
    {
        $this->connect();

        $consulta = " SELECT * from cliente where codigo = $codigo";
        $query = $this->query($consulta);
        $this->terminate();

        if ($query) {
            $array = array();

            while ($row = mysqli_fetch_array($query)) {
                $row = $this->utf8_converter($row);
                $arr = array("codigo" => $row["codigo"], "direccion" => $row["direccion"],
                    "name" => $row["nombre"], "tele" => $row["telefono"]);
                array_push($array, $arr);
            }

            return $array;
        } else {
            return "error";
            throw new mysqli_sql_exception("Error al consultar la modalidad de ese torneo");
        }
    }

    //----------------------------------Consultar Trabajadores---------------------------------------------
    /**
     * consulta los trabajadores
     * @return array|string
     */
    public function consultClientes()
    {
        $this->connect();
        $consulta = " SELECT * from cliente";
        $query = $this->query($consulta);
        $this->terminate();

        if ($query) {
            $array = array();

            while ($row = mysqli_fetch_array($query)) {
                $row = $this->utf8_converter($row);
                $arr = array("codigo" => $row["codigo"], "name" => $row["nombre"], "direccion" => $row["direccion"], "tele" => $row["telefono"]);
                array_push($array, $arr);
            }
            return $array;
        } else {
            return "error";
            throw new mysqli_sql_exception("Error al consultar los torneos");
        }
    }

    //-------------------------------------Modificar de Clientes---------------------------------------------------

    /**
     * @param $cDTO
     * @return string
     */
    public function modifC($codigo, $cDTO)
    {
        $this->connect();
        $consulta = "UPDATE cliente SET nombre= '$cDTO->nombre', direccion='$cDTO->direccion',telefono='$cDTO->telefono'
                     WHERE codigo = $codigo";
        $query = $this->query($consulta);
        $this->terminate();

        if ($query) {
            return "ok";
        } else {
            return "error";
            throw new mysqli_sql_exception("Error al registrar el partido.");
        }
    }
    //-------------------------------------Eliminar de Clientes---------------------------------------------------
    /**
     * metodo que elimina al Cliente
     * @param $codigo
     * @return string
     */
    public function deleteC($codigo)
    {
        $this->connect();
        $consulta = " DELETE FROM cliente WHERE codigo = $codigo";
        $query = $this->query($consulta);
        $this->terminate();

        if ($query) {
            return "ok";
        } else {
            return "error";
            throw new mysqli_sql_exception("Error al consultar los partidos.");
        }
    }
    //--------------------------------------------------------------------------------------------------------

}

?>