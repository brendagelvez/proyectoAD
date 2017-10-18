<?php

include_once "dao/model.php";

class TrabajadorDAO extends Model
{


    public function __CONSTRUCT()
    {

    }


    /**
     * metodo que realiza el registro del Trabajador
     * @param $pDTO
     * @return string
     */
    public function createT($pDTO)
    {
        $this->connect();
        $consulta = " INSERT INTO `trabajador`(`codigozona`, `codigotrabajador`, `cedula`, `nombre`, `telefono`) VALUES 
                      ($pDTO->codzona,$pDTO->codtra,'$pDTO->cedula','$pDTO->nombre','$pDTO->telefono')";
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
     * consulta el id de la zona que se va a registrar
     * @param $zona
     * @return array|mixed|null|string
     */
    public function consultZona($zona)
    {
        $this->connect();
        $consulta = " SELECT codigo from Zona WHERE nombre = '$zona' ";
        $query = $this->query($consulta);
        $this->terminate();

        if ($query) {
            $row = mysqli_fetch_array($query);
            $row = $this->utf8_converter($row);
            $row = $row[0];
            return $row;
        } else {
            return "error";
        }

    }

    /**
     * consulta el nombre de la zona que se va a registrar
     * @param $codigo
     * @return array|mixed|null|string
     */
    public function consultZonaN($codigo)
    {

        $this->connect();
        $consulta = " SELECT z.nombre from trabajador t INNER JOIN zona z on (t.codigozona=z.codigo) WHERE concat(t.codigozona,t.codigotrabajador) = $codigo";
        $query = $this->query($consulta);
        $this->terminate();

        if ($query) {
            $row = mysqli_fetch_array($query);
            $row = $this->utf8_converter($row);
            $row = $row[0];
            return $row;
        } else {
            return "error";
        }

    }

    /**
     * consulta id del ultimo trabajador agregado para registrar el siguiente
     * @param $codzona
     * @return array|mixed|null|string
     */
    public function consultTra($codzona)
    {
        $this->connect();
        $consulta = " SELECT codigotrabajador FROM `trabajador` WHERE codigozona = $codzona ORDER BY codigotrabajador DESC LIMIT 1";
        $query = $this->query($consulta);
        $this->terminate();

        if ($query) {
            $row = mysqli_fetch_array($query);
            $row = $this->utf8_converter($row);
            $row = $row[0];
            return $row;
        } else {
            return "error";
        }
    }

    /**
     * consulta los trabajadores
     * @return array|string
     */
    public function consultTrabajadores()
    {
        $this->connect();
        $consulta = " SELECT * from trabajador";
        $query = $this->query($consulta);
        $this->terminate();

        if ($query) {
            $array = array();

            while ($row = mysqli_fetch_array($query)) {
                $row = $this->utf8_converter($row);
                $arr = array("codzona" => $row["codigozona"], "codtra" => $row["codigotrabajador"], "name" => $row["nombre"], "tele" => $row["telefono"]);
                array_push($array, $arr);
            }
            return $array;
        } else {
            return "error";
            throw new mysqli_sql_exception("Error al consultar los torneos");
        }
    }

    /**
     * consulta todos los datos de un trabajador
     * @param $codigo
     * @return array|string
     */
    public function consultDatos($codigo)
    {
        $this->connect();

        $consulta = " SELECT * from trabajador where concat(codigozona,codigotrabajador) = $codigo";
        $query = $this->query($consulta);
        $this->terminate();

        if ($query) {
            $array = array();

            while ($row = mysqli_fetch_array($query)) {
                $row = $this->utf8_converter($row);
                $arr = array("codzona" => $row["codigozona"], "codtra" => $row["codigotrabajador"], "ci" => $row["cedula"],
                    "name" => $row["nombre"], "tel" => $row["telefono"]);
                array_push($array, $arr);
            }

            return $array;
        } else {
            return "error";
            throw new mysqli_sql_exception("Error al consultar la modalidad de ese torneo");
        }
    }

//-----------------------------------------Modificar-----------------------------------------------

    /**
     * metodo que modifica la información del Trabajador
     * @param $pDTO
     * @return string
     */
    public function modifT($pDTO)
    {

        $codzona = substr($pDTO->codtra, 0, 3);
        $codtra = substr($pDTO->codtra, 3, strlen($pDTO->codtra));

        $val = $this->validacionExiste($pDTO->codzona, $codtra);

        //cuando no se le cambia la zona ni el codigo al trabajador
        if ($val == $codtra && $pDTO->codzona == $codzona) {

            $this->connect();
            $consulta = " UPDATE trabajador SET cedula= '$pDTO->cedula',nombre='$pDTO->nombre',
              telefono= '$pDTO->telefono' WHERE concat(codigozona,codigotrabajador) = $pDTO->codtra";

            $query = $this->query($consulta);
            $this->terminate();

            if ($query) {
                return "Se actualizaron los datos del trabajador";
            } else {
                return "error";
                throw new mysqli_sql_exception("Error al modificar el trabajador.");
            }
        } else if ($val == $codtra && $pDTO->codzona != $codzona) { //cuando no se le cambia la zona pero si el codigo al trabajador

            $cn = ($this->consultTra($pDTO->codzona) + 1);

            $this->connect();
            $consulta = " UPDATE trabajador SET codigozona=$pDTO->codzona,codigotrabajador= $cn, cedula= '$pDTO->cedula',
              nombre='$pDTO->nombre',telefono= '$pDTO->telefono' WHERE concat(codigozona,codigotrabajador) = $pDTO->codtra";

            $query = $this->query($consulta);
            $this->terminate();

            if ($query) {
                return "Habia alguien con ese codigo de trabajador, el nuevo codigo del trabajador es $pDTO->codzona$cn";
            } else {
                return "error";
                throw new mysqli_sql_exception("Error al modificar el trabajador.");
            }

        } else { //cuando se crea al trabajador en esa zona con su antiguo codigo porque estaba disponible

            $this->connect();
            $consulta = " UPDATE trabajador SET codigozona=$pDTO->codzona,codigotrabajador= $codtra, cedula= '$pDTO->cedula',
              nombre='$pDTO->nombre',telefono= '$pDTO->telefono' WHERE concat(codigozona,codigotrabajador) = $pDTO->codtra";

            $query = $this->query($consulta);
            $this->terminate();

            if ($query) {
                return "se ha realizado el cambio correctamente";
            } else {
                return "error";
                throw new mysqli_sql_exception("Error al modificar el trabajador.");
            }
        }
    }

    /**
     * funcion para validar si ya existe el trabajador en la zona que se pondra
     * @param $codzona
     * @param $codtra
     * @return string
     */
    public function validacionExiste($codzona, $codtra)
    {
        $this->connect();
        $consulta = " SELECT nombre,codigozona,codigotrabajador FROM trabajador WHERE concat(codigozona,codigotrabajador) = concat($codzona,$codtra) ";
        $query = $this->query($consulta);
        $this->terminate();

        if ($query) {
            $array = array();

            while ($row = mysqli_fetch_array($query)) {
                $row = $this->utf8_converter($row);
                $arr = array("name" => $row["nombre"], "codzona" => $row["codigozona"], "codtra" => $row["codigotrabajador"]);
                array_push($array, $arr);
            }
            $rta = "";
            foreach ($array as $key) {
                $rta .= $key["codtra"];
            }
            return $rta;
        } else {
            return "error";
            throw new mysqli_sql_exception("Error al validar el trabajador");
        }
    }


//----------------------------------Listar Trabajadores---------------------------------------------
    /**
     * consulta todos datos de los trabajadores para llenar la tabla
     * @return array|string
     */
    public function consultTrabajadores2()
    {
        $resultado = Array();
        $this->connect();
        $consulta = " SELECT codigozona, codigotrabajador, cedula, t.nombre as 'nombre',telefono, 
              z.nombre as 'nombrezona' from trabajador t INNER JOIN zona z on (t.codigozona=z.codigo)";
        $query = $this->query($consulta);
        $this->terminate();

        if (mysqli_num_rows($query) > 0) {
            while ($fila = mysqli_fetch_assoc($query)) {
                array_push($resultado, $fila);
            }
        }
        return $resultado;
    }
//-----------------------------------Eliminar Trabajador------------------------------------------------
    /**
     * metodo que elimina al trabajador
     * @param $codigo
     * @return string
     */
    public function deleteT($codigo)
    {
        $this->connect();
        $consulta = " DELETE FROM trabajador WHERE concat(codigozona,codigotrabajador) = $codigo";
        $query = $this->query($consulta);
        $this->terminate();

        if ($query) {
            return "ok";
        } else {
            return "error";
            throw new mysqli_sql_exception("Error al consultar los partidos.");
        }
    }
//--------------------------------------Login Trabajador--------------------------------------------------
    /**
     * metodo que permite hacer el login de los trabajadores
     * @param $user
     * @param $pass
     * @return string
     */
    public function loginT($user, $pass)
    {
        $this->connect();
        $consulta = "SELECT * FROM trabajador WHERE concat(codigozona,codigotrabajador) = $user and contraseña = '$pass' LIMIT 1";
        $query = $this->query($consulta);
        $this->terminate();

        if ($query) {
            $row = mysqli_fetch_array($query);
            $row = $this->utf8_converter($row)[0];

            if ($row[0] != null && $row[4] == 'administrador') {
                session_start();
                $_SESSION['administrador'] = $user;
                return 'ok';
            } else if ($row[0] != null && $row[4] == 'empleado') {
                session_start();
                $_SESSION['empleado'] = $user;
                return 'ok';
            } else {
                return 'no existe el usuario';
            }

        } else {
            return "error";
            throw new mysqli_sql_exception("Error al consultar los partidos.");
        }
    }
//-------------------------------------Registro de Tickets---------------------------------------------------

    /**
     * @param $codigoT
     * @param $idPedido
     * @return string
     */
    public function regTicket($codigoT,$idPedido)
    {
        $this->connect();
        $consulta = "";
        $query = $this->query($consulta);
        $this->terminate();

        if ($query) {
            return "ok";
        } else {
            return "error";
            throw new mysqli_sql_exception("Error al registrar el partido.");
        }
    }


//--------------------------------------------------------------------------------------------------------

}

?>