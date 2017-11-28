<?php

include_once "controller/usuarioControler.php";

include_once "dao/usuarioDAO.php";

include_once "dto/usuarioDTO.php";

require_once "router/router.php";

$router = new Router();
$router->router();


?>