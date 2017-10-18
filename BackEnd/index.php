<?php

include_once "controller/homeControler.php";

include_once "dao/trabajadorDAO.php";
include_once "dao/clienteDAO.php";


include_once "dto/trabajadorDTO.php";
include_once "dto/clienteDTO.php";

require_once "router/router.php";

$router = new Router();
$router->router();


?>