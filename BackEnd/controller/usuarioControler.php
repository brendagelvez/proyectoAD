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
                 $uDTO = new usuarioDTO ('',$nombre,'', $compañia, $correo, $contraseña, $direccion, $departamento, $ciudad, $numero);
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

     public function registrarAdmin($tipo,$nombre,$correo,$contraseña,$lastname,$document)
     {


         if ($tipo != "" && $nombre != "" && $lastname != "" && $correo != "" && $document != "" && $contraseña != "") {

             try {
                 $nombre = $nombre .' '. $lastname;
                 $uDAO = new usuarioDAO;
                 $uDTO = new usuarioDTO ($tipo,$nombre,$document,'',$correo,$contraseña,'','','','');
                 $response = $uDAO->creaAdm($uDTO);
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

     public function loguearAdmin($email,$contraseña)
     {

         if ($email != "" && $contraseña != "") {
             try {

                 $uDAO = new usuarioDAO;
                 $response = $uDAO->loginA($email, $contraseña);
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

     public function consUsuarios()
     {
         $tDAO = new usuarioDAO;
         $response = $tDAO->consultUser();

         foreach ($response as $valor) {
             echo "<tr>
                    <td align='center'>" . $valor["idusuario"] . "</td>
                    <td align='center'>" . $valor["nombre"] . "</td>
                    <td align='center'>" . $valor["compania"] . "</td>
                    <td align='center'>" . $valor["correo"] . "</td>
                    <td align='center'>" . $valor["direccion"] . "</td>
                    <td align='center'>" . $valor["numero"] . "</td>
                  </tr>";
         }

     }

     public function consProductos()
     {
         $tDAO = new usuarioDAO;
         $response = $tDAO->consultProd();

         foreach ($response as $valor) {
             echo "<tr>
                    <td align='center'>" . $valor["idproductos"] . "</td>
                    <td align='center'>" . $valor["nombre"] . "</td>
                    <td align='center'>" . $valor["descripcion"] . "</td>
                    <td align='center'>" . $valor["cantidad"] . "</td>
                    <td align='center'>" . $valor["tipo"] . "</td>
                    <td align='center'>" . $valor["precio"] . "</td>
                  </tr>";
         }

     }


     //---------------prod---------------------------

     public function registrarProd($nombre,$descripcion,$tipop,$cantidad,$precio)
     {


         if ($tipop != "" && $nombre != "" && $descripcion != "" && $cantidad != "" && $precio != "") {

             try {
                 $uDAO = new usuarioDAO;
                 //$uDTO = new usuarioDTO ($nombre,$descripcion,$tipop,$cantidad,$precio);
                 $response = $uDAO->creaPro($nombre,$descripcion,$tipop,$cantidad,$precio);
                 echo json_encode($response);

             } catch (mysqli_sql_exception $e) {
                 http_response_code(200);
                 $array = array("error" => $e->getMessage());

             }

         } else {
             echo "complete todos los campos...";
         }

     }

     //---------------Gallina---------------------------

     public function registrarGa($tipo,$cantidad,$edad)
     {


         if ($tipo != "" && $cantidad != "" && $edad != "") {

             try {
                 $uDAO = new usuarioDAO;
                 //$uDTO = new usuarioDTO ($nombre,$descripcion,$tipop,$cantidad,$precio);
                 $response = $uDAO->creaGa($tipo,$cantidad,$edad);
                 echo json_encode($response);

             } catch (mysqli_sql_exception $e) {
                 http_response_code(200);
                 $array = array("error" => $e->getMessage());

             }

         } else {
             echo "complete todos los campos...";
         }

     }
 }
?>
 