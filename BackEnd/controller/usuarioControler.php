<?php


 class usuarioController{

     public function __construct()
    {

    }

    //registra un partido
   public function registrarUsuario($documento,$nombre,$apellido,$correo,$tipo,$contraseña){

       
       if($documento!= "" && $nombre !="" && $apellido!="" && $correo!="" && $tipo!="" && $contraseña!=""){

            try{

                $uDAO = new usuarioDAO;
                $uDTO = new usuarioDTO ($documento,$nombre,$apellido,$correo,$tipo,$contraseña);
                $response = $uDAO->crearU($uDTO);
                echo json_encode($response);

            }catch (mysqli_sql_exception $e){
                http_response_code(200);
                $array = array("error" => $e->getMessage());
                
            }

       }else{
             echo "complete todos los campos";
       }

   }

    //registrar todos los jugadores en determinado partido
    public function registrarJugadoresP ($idJugador,$idP,$pDTO){
        
        
         foreach ($idJugador as $key) {
            
             $this->registrarJP($key,$idP,$pDTO);
         }
        
        
    }

    //registrar todos los jugadores en determinado partido
    public function registrarArbitrosP ($idArbitro,$idP,$pDTO){
       
         foreach ($idArbitro as $key) {
             $this->registrarAP($key,$idP,$pDTO);
         }
        
        
    }
   


   //registra un solo jugador en determinado partido
   public function registrarJP($idJugador,$idPartido,$pDTO){
      
       if($idPartido!="" && $idJugador!=""){
           
            try{
                
                $pDAO = new partidoDAO;
               
                $response = $pDAO->createJXP($idJugador,$idPartido,$pDTO);
                echo json_encode($response);
            }catch (mysqli_sql_exception $e){
                http_response_code(200);
                $array = array("error" => $e->getMessage());
                
            }
          
       }else{

       }
   }
   
     //registra un solo jugador en determinado partido
   public function registrarAP($idArbitro,$idPartido,$pDTO){
       if($idArbitro!="" && $idPartido!=""){
            try{
                $pDAO = new partidoDAO;
                $response = $pDAO->createAXP($idArbitro,$idPartido,$pDTO);
                echo json_encode($response);
            }catch (mysqli_sql_exception $e){
                http_response_code(200);
                $array = array("error" => $e->getMessage());
                
            }
          
       }else{

       }
   }

   //registra un entrenador a determinado jugador asignandole la fecha final al ultimo y asignando la nueva
   public function registrarJE($idEntrenador,$idJugador){
         if($idEntrenador!="" && $idJugador!=""){
             $fechaI = date("Y-m-d"); 
             $jeDTO = new JEDTO ($idJugador,$idEntrenador,$fechaI);
            try{
                $jeDAO = new JEDAO;
                $this->actualizarFechaFin($fechaI,$idJugador);
                $response = $jeDAO->registryJE($jeDTO);
                echo json_encode($response);
            }catch (mysqli_sql_exception $e){
                http_response_code(200);
                $array = array("error" => $e->getMessage());
                
            }
          
       }else{

       }
   }
    //actualiza la fecha fin del ultimo entrenador de ese jugador
      public function actualizarFechaFin($fechaI,$idJugador){
            if( $fechaI!=""){
               
            try{
                $jeDAO = new JEDAO;
                $idE = $jeDAO->consultLastEntrenador($idJugador);
                $response = $jeDAO->updateFechaFinJE($idJugador,$idE,$fechaI);
                echo json_encode($response);
            }catch (mysqli_sql_exception $e){
                http_response_code(200);
                $array = array("error" => $e->getMessage());
                
            }
          
       }else{

       }
      } 

      //consulta todo los torneos
      public function consultarTorneos(){
          $pDAO = new partidoDAO;
          $response = $pDAO->consultTorneos();
          $rta="";
          $rta.= '<option value="null">SELECCIONE UN TORNEO</option>';
          foreach ($response as $key) {
              $rta .= '<option value="'.$key["id"].'">'.$key["id"]."-".$key["name"].'</option> ';
          }

          echo $rta;
         
      }

      public function consultarModalidadesTorneo($idTorneo){
          $pDAO = new partidoDAO;
          $response = $pDAO->consultModalidadTorneo($idTorneo);
          $rta="";
          $rta.= '<option value="null">SELECCIONE UNA MODALIDAD </option>';
          foreach ($response as $key) {
              $rta .= '<option value="'.$key["id"].'">'.$key["id"]."-".$key["name"].'</option> ';
          }

          echo $rta;
         
      }

      public function consultarEtapaMT($idTorneo,$idModalidad){
          $pDAO = new partidoDAO;
          $response = $pDAO->consultEtapaModalidadT($idTorneo,$idModalidad);
          $rta="";
          $rta.= '<option value="null">SELECCIONE UNA ETAPA </option>';
          foreach ($response as $key) {
              $rta .= '<option value="'.$key["id"].'">'.$key["id"]."-".$key["name"].'</option> ';
          }

          echo $rta;
      }
      
      public function consultarArbitros(){
           $pDAO = new partidoDAO;
          $response = $pDAO->consultArbitros();
          $rta="";
          $rta.= '<option value="null">SELECCIONE UN ARBITRO</option>';
          foreach ($response as $key) {
              $rta .= '<option value="'.$key["id"].'">'.$key["id"]."-".$key["name"].'</option> ';
          }

          echo $rta;
         

      }
      
      public function consultarJugadores(){
          $pDAO = new partidoDAO;
          $response = $pDAO->consultJugadores();
          $rta="";
          $rta.= '<option value="null">SELECCIONE UN JUGADOR</option>';
          foreach ($response as $key) {
              $rta .= '<option value="'.$key["id"].'">'.$key["id"]."-".$key["name"].'</option> ';
          }

          echo $rta;
      }

       public function consultarEntrenadores(){
          $pDAO = new partidoDAO;
          $response = $pDAO->consultEntrenadores();
          $rta="";
          $rta.= '<option value="null">SELECCIONE UN ENTRENADOR</option>';
          foreach ($response as $key) {
              $rta .= '<option value="'.$key["id"].'">'.$key["id"]."-".$key["name"].'</option> ';
          }

          echo $rta;
      }
      public function consultarPartido(){
          $pDAO = new partidoDAO;
          $response = $pDAO->consultP();
          $rta="";
          $rta.= '<option value="null">SELECCIONE UN PARTIDO A ELIMINAR</option>';
          foreach ($response as $key) {
              $rta .= '<option value="'.$key["idP"].'">'."Partido ".$key["idP"]."-"."Torneo ".$key["idT"]."-"."Modalidad ".$key["idM"]."-"."Etapa ".$key["idE"]."-"."Premio ".$key["premio"].'</option> ';
          }

          echo $rta;
      }

      public function eliminarPartido($idP){
          
          $pDAO = new partidoDAO;
          $pDAO->deleteAP($idP);
          $pDAO->deleteJP($idP);
          $response = $pDAO->deleteP($idP);
          echo $response;
      }

      public function consultarJugadorEntrenadores(){
          $jeDAO = new JEDAO;
          $response = $jeDAO->consultJE();
          $rta="";
          $rta.= '<option value="null">SELECCIONE UN ENTRENADOR DE ESE JUGADOR A ELIMINAR</option>';
          foreach ($response as $key) {
              $rta .= '<option value="'.$key["idJ"]."-".$key["idE"].'">'."Jugador :".$key["idJ"]."-"."Nombre J: ".$key["nameJ"]."/"."Entrenador ".$key["idE"]."-"."Nombre E ".$key["nameE"].'</option> ';
          }

          echo $rta;
      }

      public function consultarJugadorE($idJ){
          $jeDAO = new JEDAO;
          $response = $jeDAO->consultJE2($idJ);
          $rta="";
          $rta.= '<option value="null">SELECCIONE UN ENTRENADOR A CAMBIAR</option>';
          foreach ($response as $key) {
              $rta .= '<option value="'.$key["idE"].'">'."Entrenador ".$key["idE"]."-"."Nombre E ".$key["nameE"].'</option> ';
          }

          echo $rta;
      }

      public function eliminarJugadorEntrenadores($idJ,$idE){
          $jeDAO = new JEDAO;
          $response = $jeDAO->deleteJE($idJ,$idE);
          echo $response;
      }

      public function consultarPartido2($idT,$idM,$idE){
          $pDAO = new partidoDAO;
          $response = $pDAO->consultP2($idT,$idM,$idE);
          $rta="";
          $rta.= '<option value="null">SELECCIONE UN PARTIDO </option>';
          foreach ($response as $key) {
              $rta .= '<option value="'.$key["idP"].'">'."Partido ".$key["idP"]."-"."Premio ".$key["premio"].'</option> ';
          }

          echo $rta;
      }

      public function consultarJP($idT,$idM,$idE,$idP){
           $pDAO = new partidoDAO;
          $response = $pDAO->consultJP($idT,$idM,$idE,$idP);
          $rta="";
          $rta.= '<option value="null">SELECCIONE UN JUGADOR A MODIFICAR </option>';
          foreach ($response as $key) {
              $rta .= '<option value="'.$key["idJ"].'">'."Partido ".$key["idP"]."-"."Jugador ".$key["nombre"].'</option> ';
          }

          echo $rta;
      }
      public function consultarAP($idT,$idM,$idE,$idP){
           $pDAO = new partidoDAO;
          $response = $pDAO->consultAP($idT,$idM,$idE,$idP);
          $rta="";
          $rta.= '<option value="null">SELECCIONE UN ARBITRO A MODIFICAR </option>';
          foreach ($response as $key) {
              $rta .= '<option value="'.$key["idA"].'">'."Partido ".$key["idP"]."-"."Arbitro ".$key["nombre"].'</option> ';
          }

          echo $rta;
      }

       public function updatePartido($idTorneo,$idModalidad,$idEtapa,$idJugador,$idArbitro,$idP){

       
       if($idTorneo!= "" && $idModalidad !="" && $idEtapa!=""&&$idJugador!=""&&$idArbitro!=""){
       
       
       try{
                $pDAO = new partidoDAO;
                 $pDTO = new PartidoDTO ($idTorneo,$idModalidad,$idEtapa,"");
                
                $response = $this->updateJugadoresP($idJugador,$idP,$pDTO);
                $response .= $this->updateAP($idArbitro,$idP,$pDTO);
                echo $response;
                
                
            }catch (mysqli_sql_exception $e){
                http_response_code(200);
                $array = array("error" => $e->getMessage());
                
            }
       }else{
             
             echo "error";
       }

   }
    //actualiza todos los jugadores en determinado partido
    public function updateJugadoresP ($idJugador,$idP,$pDTO){
        
        
         foreach ($idJugador as $key) {
            
             $this->updateJP($key,$idP,$pDTO);
         }
        
        
    }

    //actualiza un solo jugador en determinado partido
   public function updateJP($idT,$idM,$idE,$idP,$idJM,$idJMN){
          
            try{
                
                $pDAO = new partidoDAO;
               
                $response = $pDAO->updateJXP($idT,$idM,$idE,$idP,$idJM,$idJMN);
                echo $response;
            }catch (mysqli_sql_exception $e){
                http_response_code(200);
                $array = array("error" => $e->getMessage());
                
            }
          
       
   }

     //actualiza un solo arbitro en determinado partido
   public function updateAP($idT,$idM,$idE,$idP,$idAM,$idAMN){
      
            try{
                $pDAO = new partidoDAO;
                
                $response = $pDAO->updateAXP($idT,$idM,$idE,$idP,$idAM,$idAMN);
                echo $response;
            }catch (mysqli_sql_exception $e){
                http_response_code(200);
                $array = array("error" => $e->getMessage());
                
            }
          
       
   }
     //actualiza un entrenador de un jugador
   public function updateJE($idJ,$idEM,$idEMN){
      
            try{
                $jeDAO = new JEDAO;
                $response = $jeDAO->updateJE($idJ,$idEM,$idEMN);
                echo $response;
            }catch (mysqli_sql_exception $e){
                http_response_code(200);
                $array = array("error" => $e->getMessage());
                
            }
          
       
   }

 }
?>
 