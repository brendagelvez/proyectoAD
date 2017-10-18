<?php

// la clase router encanrgada de enrutar las peticiones

class Router
{

    private $home;

    public function __CONSTRUCT()
    {
        $this->home = new HomeController();
    }

    public function router()
    {

        if (isset($_POST['mode'])) {

            // peticiones de registro
            if ($_POST['mode'] == "regTrabajador") {
                $cedula = $_POST['cedulatxt'];
                $nombre = $_POST['nombretxt'];
                $telefono = $_POST['telefonotxt'];
                $zona = $_POST['zonatxt'];

                $this->home->registrarTrabajador($cedula, $nombre, $telefono, $zona);

            }//peticiones para modificar

            else if ($_POST['mode'] == "modTrabajador") {
                $codigoT = $_POST['trabajadortxt'];
                $cedula = str_replace(" ", "", $_POST['cedulatxt']);
                $nombre = str_replace(" ", "", $_POST['nombretxt']);
                $telefono = str_replace(" ", "", $_POST['telefonotxt']);
                $zona = str_replace(" ", "", $_POST['zonatxt']);


                $this->home->modificarTrabajador($codigoT, $cedula, $nombre, $telefono, $zona);

            }//peticiones para eliminar
            else if ($_POST['mode'] == "eliTrabajador") {
                $codigo = $_POST['trabajadortxt'];
                $this->home->eliminarTrabajador($codigo);
            }//peticiones para login
            else if ($_POST['mode'] == "loginT") {
                $user = $_POST['usuariotxt'];
                $pass = $_POST['contraseñatxt'];
                $this->home->login($user, $pass);
            }//peticiones para registrar el Ticket
            else if ($_POST['mode'] == "regTicket") {
                $codigoT = $_POST['trabajadortxt'];
                $idPedido = $_POST['contraseñatxt'];
                $this->home->registrarTicket($codigoT, $idPedido);
            }//peticiones para registrar Clientes
            else if ($_POST['mode'] == "regCliente") {
                $nombre = $_POST['nombretxt'];
                $direccion = $_POST['direcciontxt'];
                $telefono = $_POST['telefonotxt'];
                $this->home->registrarCliente($nombre, $direccion, $telefono);
            }//peticiones para modificar Clientes
            else if ($_POST['mode'] == "modCliente") {
                $codigoT = $_POST['clientetxt'];
                $nombre = str_replace(" ", "", $_POST['nombretxt']);
                $direccion = str_replace(" ", "", $_POST['direcciontxt']);
                $telefono = str_replace(" ", "", $_POST['telefonotxt']);
                $this->home->modificarCliente($codigoT, $nombre, $direccion, $telefono);
            }//peticiones para eliminar Cliente
            else if ($_POST['mode'] == "eliCliente") {
                $codigo = $_POST['clientetxt'];
                $this->home->eliminarCliente($codigo);
            }


            //--------------------------Peticiones Get------------------------------------


        }
        // peticiones de consultas que deben ser enrutadas
        if (isset($_GET['mode'])) {

            if ($_GET['mode'] == "consTrabajador") {
                $this->home->consultarTrabajadores();
            } else if ($_GET['mode'] == "consCi") {
                $codigo = $_GET['id'];
                $this->home->consultarCi($codigo);
            } else if ($_GET['mode'] == "consName") {
                $codigo = $_GET['id'];
                $this->home->consultarName($codigo);
            } else if ($_GET['mode'] == "consTele") {
                $codigo = $_GET['id'];
                $this->home->consultarTele($codigo);
            } else if ($_GET['mode'] == "consZona") {
                $codigo = $_GET['id'];
                $this->home->consultarZona($codigo);
            } else if ($_GET['mode'] == "consTabla") {
                $this->home->consTrabajadores();
            } else if ($_GET['mode'] == "consCliente") {
                $this->home->consClientes();
            } else if ($_GET['mode'] == "consNameC") {
                $codigo = $_GET['id'];
                $this->home->consultarNameC($codigo);
            } else if ($_GET['mode'] == "consDirC") {
                $codigo = $_GET['id'];
                $this->home->consultarDirC($codigo);
            } else if ($_GET['mode'] == "consTeleC") {
                $codigo = $_GET['id'];
                $this->home->consultarTeleC($codigo);
            } else if ($_GET['mode'] == "consTablaC") {
                $this->home->consulClientes();
            }

        }
    }

}

?>