<?php

/**
 * Proyecto de software para UFPS - BD (TORNEO DE TENIS GRAND SLAM )
 * @author - Gino Góngora  <ginoamaurygc@ufps.edu.co>
 * @author - Gabriel Contreras <cristiangabrielcg@ufps.edu.co>
 * @author - Daniel Caballero <danieljosecs@ufps.edu.co>
 * @version - 1.0.0
 * 2016
 */
class HomeController
{

    public function __construct()
    {

    }
//-----------------------------Registro------------------------------------------------
    //registra un partido
    public function registrarTrabajador($cedula, $nombre, $telefono, $zona)
    {
        if ($cedula != "" && $nombre != "" && $telefono != "" && $zona != "") {

            try {
                $tDAO = new trabajadorDAO;
                $codzona = $tDAO->consultZona($zona);
                $codtra = $tDAO->consultTra($codzona);


                $tDTO = new TrabajadorDTO ($codzona, ($codtra + 1), $cedula, $nombre, $telefono);
                $response = $tDAO->createT($tDTO);

                echo json_encode($response);

            } catch (mysqli_sql_exception $e) {
                http_response_code(200);
                $array = array("error" => $e->getMessage());
            }
        } else {
            echo "error";
        }

    }

    //consulta todos los trabajadores
    public function consultarTrabajadores()
    {
        $tDAO = new trabajadorDAO;
        $response = $tDAO->consultTrabajadores();
        $rta = "";
        $rta .= '<option value="null">SELECCIONE UN TRABAJADOR</option>';
        foreach ($response as $key) {
            $rta .= '<option value="' . $key["codzona"] . $key["codtra"] . '">' . $key["codzona"] . $key["codtra"] . "-" . $key["name"] . '</option> ';
        }

        echo $rta;

    }

    //consulta la cedula de un trabajador en especifico
    public function consultarCi($codigo)
    {
        $tDAO = new trabajadorDAO;
        $response = $tDAO->consultDatos($codigo);
        $rta = "";
        foreach ($response as $key) {
            $rta .= $key["ci"];
        }
        echo $rta;

    }

    //consulta el nombre de un trabajador en especifico
    public function consultarName($codigo)
    {
        $tDAO = new trabajadorDAO;
        $response = $tDAO->consultDatos($codigo);
        $rta = "";
        foreach ($response as $key) {
            $rta .= $key["name"];
        }
        echo $rta;

    }

    //consulta el telefono de un trabajador en especifico
    public function consultarTele($codigo)
    {
        $tDAO = new trabajadorDAO;
        $response = $tDAO->consultDatos($codigo);
        $rta = "";
        foreach ($response as $key) {
            $rta .= $key["tel"];
        }
        echo $rta;

    }

    //consulta la Zona de un trabajador especifico
    public function consultarZona($codigo)
    {
        $tDAO = new trabajadorDAO;
        $response = $tDAO->consultZonaN($codigo);

        echo $response;
    }

//-----------------------------------Modificar---------------------------------------------
    public function modificarTrabajador($codigoT, $cedula, $nombre, $telefono, $zona)
    {
        if ($codigoT != "" && $cedula != "" && $nombre != "" && $telefono != "" && $zona != "") {

            try {
                $tDAO = new trabajadorDAO;
                $codzona = $tDAO->consultZona($zona); //codigo de la zona
                //$codtra = $tDAO->consultTra($codzona); //codigo del ultimo trabajador de esa zona


                $tDTO = new TrabajadorDTO ($codzona, $codigoT, $cedula, $nombre, $telefono);
                $response = $tDAO->modifT($tDTO);

                echo json_encode($response);

            } catch (mysqli_sql_exception $e) {
                http_response_code(200);
                $array = array("error" => $e->getMessage());
            }
        } else {
            echo "error";
        }

    }

//---------------------------------Listar Trabajadores-------------------------------------------------
//consulta todos los trabajadores
    public function consTrabajadores()
    {
        $tDAO = new trabajadorDAO;
        $response = $tDAO->consultTrabajadores2();

        foreach ($response as $valor) {
            echo "<tr>
                    <td align='center'>" . $valor["codigozona"] . "</td>
                    <td align='center'>" . $valor["codigotrabajador"] . "</td>
                    <td align='center'>" . $valor["nombrezona"] . "</td>
                    <td align='center'>" . $valor["nombre"] . "</td>
                    <td align='center'>" . $valor["telefono"] . "</td>
			      </tr>";
        }

    }

//-------------------------------------Eliminar Trabajador---------------------------------------------------
//para eliminar a un trabajador
    public function eliminarTrabajador($codigo)
    {
        $tDAO = new trabajadorDAO;
        $response = $tDAO->deleteT($codigo);
        echo $response;
    }

//------------------------------------------------Login-----------------------------------------------------
//para el login de un trabajador
    public function login($user, $pass)
    {
        $tDAO = new trabajadorDAO;
        $response = $tDAO->loginT($user, $pass);
        echo $response;
    }

//-------------------------------------------Registro de Tickets--------------------------------------------
//para el registro de un ticket
    public function registrarTicket($codigoT, $idPedido)
    {
        $tDAO = new trabajadorDAO;
        $response = $tDAO->regTicket($codigoT, $idPedido);
        echo $response;
    }

//------------------------------------------Registro de clientes--------------------------------------------
    public function registrarCliente($nombre, $direccion, $telefono)
    {
        if ($nombre != "" && $direccion != "" && $telefono != "") {

            try {

                $cDAO = new clienteDAO;
                $cDTO = new ClienteDTO ($nombre, $direccion, $telefono);
                $response = $cDAO->regCliente($cDTO);

                echo json_encode($response);

            } catch (mysqli_sql_exception $e) {
                http_response_code(200);
                $array = array("error" => $e->getMessage());
            }
        } else {
            echo "error";
        }

    }
//--------------------------------------------Modificar Cliente---------------------------------------------
    public function modificarCliente($codigoT, $nombre, $direccion, $telefono)
    {
        if ($codigoT != "" && $nombre != "" && $direccion != "" && $telefono != "") {

            try {
                $cDAO = new clienteDAO;
                $cDTO = new ClienteDTO ($nombre, $direccion, $telefono);

                $response = $cDAO->modifC($codigoT, $cDTO);

                echo json_encode($response);

            } catch (mysqli_sql_exception $e) {
                http_response_code(200);
                $array = array("error" => $e->getMessage());
            }
        } else {
            echo "error";
        }

    }

    public function consClientes()
    {
        $cDAO = new ClienteDAO();
        $response = $cDAO->consultClientes();
        $rta = "";
        $rta .= '<option value="null">SELECCIONE UN TRABAJADOR</option>';
        foreach ($response as $key) {
            $rta .= '<option value="' . $key["codigo"] . '">' . $key["codigo"] . "-" . $key["name"] . '</option> ';
        }

        echo $rta;

    }

    //consulta el nombre de un cliente en especifico
    public function consultarNameC($codigo)
    {
        $cDAO = new ClienteDAO();
        $response = $cDAO->consultDatosC($codigo);
        $rta = "";
        foreach ($response as $key) {
            $rta .= $key["name"];
        }
        echo $rta;

    }

    //consulta la Direccion de un cliente en especifico
    public function consultarDirC($codigo)
    {
        $cDAO = new ClienteDAO();
        $response = $cDAO->consultDatosC($codigo);
        $rta = "";
        foreach ($response as $key) {
            $rta .= $key["direccion"];
        }
        echo $rta;

    }

    //consulta el telefono de un cliente en especifico
    public function consultarTeleC($codigo)
    {
        $cDAO = new ClienteDAO();
        $response = $cDAO->consultDatosC($codigo);
        $rta = "";
        foreach ($response as $key) {
            $rta .= $key["tele"];
        }
        echo $rta;

    }

    //-------------------------------------Eliminar Trabajador---------------------------------------------------

    public function eliminarCliente($codigo)
    {
        $cDAO = new ClienteDAO();
        $response = $cDAO->deleteC($codigo);
        echo $response;
    }
    //---------------------------------Listar Trabajadores-------------------------------------------------
//consulta todos los trabajadores
    public function consulClientes()
    {
        $cDAO = new ClienteDAO();
        $response = $cDAO->consultClientes();

        foreach ($response as $valor) {
            echo "<tr>
                    <td align='center'>" . $valor["codigo"] . "</td>
                    <td align='center'>" . $valor["name"] . "</td>
                    <td align='center'>" . $valor["direccion"] . "</td>
                    <td align='center'>" . $valor["tele"] . "</td>
			      </tr>";
        }

    }
    //----------------------------------------------------------------------------------------------------------
}

?>
 