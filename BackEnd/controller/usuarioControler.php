<?php


 class usuarioController
 {

     public function __construct()
     {

     }

     //registra un partido
     public function registrarUsuario($nombre, $compañia, $correo, $contraseña, $direccion, $departamento, $ciudad, $indicativo, $numerotelefonico)
     {


         if ($compañia != "" && $nombre != "" && $direccion != "" && $correo != "" && $departamento != "" && $contraseña != "" && $ciudad != "" && $indicativo != "" && $numerotelefonico != "") {

             try {
                 $numero = $indicativo . $numerotelefonico;
                 $uDAO = new usuarioDAO;
                 $uDTO = new usuarioDTO ($nombre, $compañia, $correo, $contraseña, $direccion, $departamento, $ciudad, $numero);
                 $response = $uDAO->crearU($uDTO);
                 echo json_encode($response);

             } catch (mysqli_sql_exception $e) {
                 http_response_code(200);
                 $array = array("error" => $e->getMessage());

             }

         } else {
             echo "complete todos los campos...";
         }

     }

     public function loguearUsuario($email, $contraseña)
     {

         if ($email != "" && $contraseña != "") {
             try {

                 $uDAO = new usuarioDAO;
                 $response = $uDAO->loginU($email, $contraseña);
                 echo json_encode($response);

             } catch (mysqli_sql_exception $e) {
                 http_response_code(200);
                 $array = array("error" => $e->getMessage());

             }
         } else {
             echo "complete todos los campos";
         }

     }

     public function registrarMensaje($nombre, $compañia, $correo, $asunto, $mensaje)
     {
         if ($nombre != "" && $compañia != "" && $correo != "" && $asunto != "" && $mensaje != "") {

             try {

                 $uDAO = new usuarioDAO;
                 $response = $uDAO->regMessage($nombre, $compañia, $correo, $asunto, $mensaje);
                 echo json_encode($response);

             } catch (mysqli_sql_exception $e) {
                 http_response_code(200);
                 $array = array("error" => $e->getMessage());

             }
         } else {
             echo "complete todos los campos";
         }
     }

 }
?>
 