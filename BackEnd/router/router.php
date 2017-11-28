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

                   $documento = $_POST['documento_txt'];
                   $nombre = $_POST['nombre_txt'];
                   $apellido = $_POST['apellido_txt'];
                   $correo = $_POST['correo_txt'];
                   $tipo = $_POST['tipo_txt'];
                   $contraseña = $_POST['contraseña_txt'];

                   $this->user->registrarUsuario($documento,$nombre,$apellido,$correo,$tipo,$contraseña);

               }else if($_POST['mode']=="regJugador"){
                   //registro de un jugador
                   $nombre = $_POST['nombreJ_txt'];
                   $edad = $_POST['edadJ_txt'];
                   $idNacionalidades = $_POST['nacinalidades_txt'];

               }else if($_POST['mode']=="regArbitro"){
                   //registro de un arbitro
                   $nombre = $_POST['nombreA_txt'];
                   $nacionalidad = $_POST['nacionalidad_txt'];

               }else if($_POST['mode']=="regEntrenador"){
                   //registro de un entrenador
                   $nombre = $_POST['nombreE_txt'];
                   $nacionalidad = $_POST['nacionalidad_txt'];

               }else if($_POST['mode']=="regEJ"){
                   //asignacion de un entrenador a un jugador
                   $idEntrenador = $_POST['entrenador_txt'];
                   $idJugador = $_POST['jugador_txt'];
                   $this->user->registrarJE($idEntrenador,$idJugador);
                   //eliminar partido
               }else if($_POST['mode']=="eliminarPartido"){
                   $idpa = $_POST['delete_txt'];
                   $this->user->eliminarPartido($idpa);
                   //este no se usa
               }else if($_POST['mode']=="updatePartido"){
                   $idpa = $_POST['partido_txt'];
                   $idT = $_POST['torneo_txt'];
                   $idM = $_POST['modalidad_txt'];
                   $idE = $_POST['etapa_txt'];
                   $arbitro=$_POST['arbitro_txt'];
                   if($idM==1 || $idM==2){
                        $idJugador1 = $_POST['jugador1_txt'];
                        $idJugador2 = $_POST['jugador2_txt'];
                        $jugadores= array($idJugador1,$idJugador2);
                   }else{
                       $idJugador1 = $_POST['jugador1_txt'];
                        $idJugador2 = $_POST['jugador2_txt'];
                        $idJugador3 = $_POST['jugador3_txt'];
                        $idJugador4 = $_POST['jugador4_txt'];
                        $jugadores= array($idJugador1,$idJugador2,$idJugador3,$idJugador4);
                   }
                   $this->user->updatePartido($idT,$idM,$idE,$jugadores,$arbitro,$idpa);

               }else if($_POST['mode']=="updatePartido2"){
                   $idP = $_POST['partido_txt'];
                   $idT = $_POST['torneo_txt'];
                   $idM = $_POST['modalidad_txt'];
                   $idE = $_POST['etapa_txt'];
                   
                   if(isset($_POST['jugadorM_txt'])&&isset($_POST['jugadorMN_txt'])){
                   $idJM=$_POST['jugadorM_txt'];
                   $idJMN=$_POST['jugadorMN_txt'];
                        $this->user->updateJP($idT,$idM,$idE,$idP,$idJM,$idJMN);
                    
                   }else if(isset($_POST['arbitroM_txt'])&&isset($_POST['arbitroMN_txt'])){
                   $idAM=$_POST['arbitroM_txt'];
                   $idAMN=$_POST['arbitroMN_txt'];
                        $this->user->updateAP($idT,$idM,$idE,$idP,$idAM,$idAMN);
                   }
                  
                   

               }else if($_POST['mode']=="modificarJE"){
                   $idJ = $_POST['jugador_txt'];
                   $idEM = $_POST['entrenadorM_txt'];
                   $idEMN = $_POST['entrenadorMN_txt'];
                   $this->user->updateJE($idJ,$idEM,$idEMN);
               }
               
               

           }
               // peticiones de consultas que deben ser enrutadas
               if(isset($_GET['mode'])){
                
               if($_GET['mode']=="consTorneo"){
                   $this->user->consultarTorneos();
               }else if($_GET['mode']=="consModalidad"){
                   $idTorneo = $_GET['id'];
                   $this->user->consultarModalidadesTorneo($idTorneo);

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