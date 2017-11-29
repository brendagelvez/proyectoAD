<?php

// la clase router encanrgada de enrutar las peticiones

  class Router{
       
        private $user;     
       public function __CONSTRUCT(){
            $this->user = new usuarioController();
       }

       public function router(){

           if(isset($_POST['mode'])){

               // peticiones de registros que deben ser enrutadas

               if($_POST['mode']=="regUsuario"){
                   //registro de un usuario

                   $nombre = $_POST['name'];
                   $compañia = $_POST['nameCompany'];
                   $correo = $_POST['email'];
                   $contraseña = $_POST['password'];
                   $direccion = $_POST['direction'];
                   $departamento = $_POST['department'];
                   $ciudad = $_POST['city'];
                   $indicativo = $_POST['indicative'];
                   $numerotelefonico = $_POST['numberPhone'];

                   $this->user->registrarUsuario($nombre,$compañia,$correo,$contraseña,$direccion,$departamento,$ciudad,$indicativo,$numerotelefonico);

               }else if($_POST['mode']=="loginUser"){
                   //login de un usuario
                   $nombre = $_POST['email'];
                   $contraseña = $_POST['password'];

                   $this->user->loguearUsuario($nombre,$contraseña);

               }else if($_POST['mode']=="regMens"){
                   $nombre = $_POST['name'];
                   $compañia = $_POST['company'];
                   $correo = $_POST['email'];
                   $asunto = $_POST['subject'];
                   $mensaje = $_POST['message'];

                   $this->user->registrarMensaje($nombre,$compañia,$correo,$asunto,$mensaje);
                   //
               }else if($_POST['mode']=="loginAdmin"){
                   $email = $_POST['email'];
                   $contraseña = $_POST['password'];

                   $this->user->loguearAdmin($email,$contraseña);

               }else if($_POST['mode']=="regisAdmin"){
                   $nombre = $_POST['name'];
                   $lastname = $_POST['lastname'];
                   $correo = $_POST['email'];
                   $contraseña = $_POST['password'];
                   $document = $_POST['document'];
                   $tipo = 1;

                   $this->user->registrarAdmin($tipo,$nombre,$correo,$contraseña,$lastname,$document);

               }else if($_POST['mode']=="regisProd"){
                   $nombre = $_POST['name'];
                   $descripcion = $_POST['descripcion'];
                   $tipop = $_POST['tipo'];
                   $cantidad = $_POST['cantidad'];
                   $precio = $_POST['precio'];

                   $this->user->registrarProd($nombre,$descripcion,$tipop,$cantidad,$precio);

               }else if($_POST['mode']=="regisAni"){
                   $tipo = $_POST['tipo'];
                   $cantidad = $_POST['cantidad'];
                   $edad = $_POST['edad'];


                   $this->user->registrarGa($tipo,$cantidad,$edad);

               }
               
               

           }
               // peticiones de consultas que deben ser enrutadas
               if(isset($_GET['mode'])){
                
               if($_GET['mode']=="consTabla"){
                   $this->user->consUsuarios();
               }else if($_GET['mode']=="consTablaProd"){
                   $this->user->consProductos();


               }else if($_GET['mode']=="consEtapa"){
                   $idTorneo = $_GET['idT'];
                   $idModalidad = $_GET['idM'];
                   $this->user->consultarEtapaMT($idTorneo,$idModalidad);

               }else if($_GET['mode']=="consPartido"){
                   $this->user->consultarPartido();

               }else if($_GET['mode']=="consJugador"){
                   $this->user->consultarJugadores();

               }else if($_GET['mode']=="consArbitro"){
                   $this->user->consultarArbitros();

               }else if($_GET['mode']=="consEntrenador"){
                   $this->user->consultarEntrenadores();
               
               }else if($_GET['mode']=="consJE"){
                   $this->user->consultarJugadorEntrenadores();
               
               }else if($_GET['mode']=="consJE2"){
                   $idJ = $_GET['idJ'];
                  
                   $this->user->consultarJugadorE($idJ);
               
               }else if($_GET['mode']=="eliminarJE"){
                   $idJ = $_GET['idJ'];
                   $idE = $_GET['idE'];
                   $this->user->eliminarJugadorEntrenadores($idJ,$idE);
               
               }else if($_GET['mode']=="consPartido2"){
                   $idT = $_GET['idT'];
                   $idM = $_GET['idM'];
                   $idE = $_GET['idE'];
                   $this->user->consultarPartido2($idT,$idM,$idE);

               }else if($_GET['mode']=="consultJP"){
                   $idT = $_GET['idT'];
                   $idM = $_GET['idM'];
                   $idE = $_GET['idE'];
                   $idP = $_GET['idP'];
                   $this->user->consultarJP($idT,$idM,$idE,$idP);

               }else if($_GET['mode']=="consultAP"){
                   $idT = $_GET['idT'];
                   $idM = $_GET['idM'];
                   $idE = $_GET['idE'];
                   $idP = $_GET['idP'];
                   $this->user->consultarAP($idT,$idM,$idE,$idP);

               }


               
           
       }
       }

  }
?>