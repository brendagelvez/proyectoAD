<?php

 include_once "dao/model.php";
  class UDAO extends Model{


      public function crearU($pDTO){
          $this->connect();
          $consulta=" INSERT INTO usuario(documento,nombre,apellido,correo,tipo,contraseña)VALUES 
            ('".$pDTO->documento."','".$pDTO->nombre."','".$pDTO->apellido."','".$pDTO->correo."',
              '".$pDTO->tipo."','".$pDTO->contraseña."')";
          $query = $this-> query($consulta);
          $this->terminate();

          if( $query ){
              return "ok";
          }else{
              return "error";
              throw new mysqli_sql_exception( "Error al registrar el usuario.");
          }
      }


    // Realiza la insercion en la base de datos de un entrenador que entrena a un jugador en determinada fecha
    public function registryJE($jeDTO){
        
        $this->connect();
        $consulta = " INSERT INTO jugadorentrenador(idjugador,identrenador,fechainicio)VALUES 
            ('".$jeDTO->idJugador."','".$jeDTO->idEntrenador."','".$jeDTO->fechaI."')";
        $query = $this-> query($consulta);
        $this->terminate();
            
            if( $query ){
                
                return "ok";
            }else{
                return "error";
                throw new mysqli_sql_exception( "Error al registrar el el entrenador de dicho jugador.");
            }    
    }    

    //actualiza la fecha de fin a determinado jugador con determinado entrenador
    public function updateFechaFinJE($idJugador,$idEntrenador,$fechaF){
          $this->connect();
        $consulta = " UPDATE jugadorentrenador SET fechaFin = '$fechaF' WHERE idjugador ='$idJugador' AND identrenador ='$idEntrenador'";
        $query = $this-> query($consulta);
            $this->terminate();
            
            if( $query ){
                return "ok";
            }else{
                return "error";
                throw new mysqli_sql_exception( "Error al actualizar la fecha de jugadorEntrenador.");
            } 
    }     

    // metodo que consulta el ultimo Entrenador de determinado jugador //revisar!!!
    public function consultLastEntrenador($idJugador){
         $this->connect();
            $consulta=" SELECT identrenador from jugadorentrenador WHERE idjugador='$idJugador' ORDER BY identrenador DESC LIMIT 1";
            $query = $this-> query($consulta);
            $this->terminate();
            
            if( $query ){
                $row = mysqli_fetch_array( $query );
                $row = $row[0]; 
                return $row;
            }else{
                return "error";
                throw new mysqli_sql_exception( "Error al consultar ese partido.");
            }
    }

    // metodo que consulta los entrenadores de los jugadores
    public function consultJE(){
         $this->connect();
            $consulta=" SELECT j.idjugador, j.nombre, e.identrenador , e.nombre FROM jugadorentrenador je JOIN jugador j ON (j.idjugador = je.idjugador) JOIN entrenador e ON(e.identrenador=je.identrenador) ";
            $query = $this-> query($consulta);
            $this->terminate();
            
            if( $query ){
               $array = array();

                 while( $row = mysqli_fetch_array( $query ) ){
                     $row = $this->utf8_converter($row);
                     $arr = array("idJ"=>$row["idjugador"], "nameJ"=>$row["nombrej"], "idE"=>$row["identrenador"], "nameE"=>$row["nombree"]);
                     array_push( $array, $arr);
                 }

                return $array;
            }else{
                return "error";
                throw new mysqli_sql_exception( "Error al consultar ese partido.");
            }
    }
    // metodo que consulta los entrenadores de determinado jugador
    public function consultJE2($idJ){
         $this->connect();
            $consulta=" SELECT  e.identrenador , e.nombre FROM jugadorentrenador je  JOIN entrenador e ON(e.identrenador=je.identrenador) WHERE idjugador='$idJ'";
            $query = $this-> query($consulta);
            $this->terminate();
            
            if( $query ){
               $array = array();

                 while( $row = mysqli_fetch_array( $query ) ){
                     $row = $this->utf8_converter($row);
                     $arr = array( "idE"=>$row["identrenador"], "nameE"=>$row["nombre"]);
                     array_push( $array, $arr);
                 }

                return $array;
            }else{
                return "error";
                throw new mysqli_sql_exception( "Error al consultar ese partido.");
            }
    }

    public function deleteJE($idJ,$idE){
         $this->connect();
            $consulta=" DELETE FROM jugadorentrenador WHERE idjugador='$idJ' AND identrenador='$idE'";
            $query = $this-> query($consulta);
            $this->terminate();
            
            if( $query ){
               
                return "ok";
            }else{
                return "error";
                throw new mysqli_sql_exception( "Error al eliminar jugador Entrenador.");
            }
    }
    public function updateJE($idJ,$idEM,$idEMN){
         $this->connect();
            $consulta=" UPDATE jugadorentrenador SET identrenador='$idEMN' WHERE idjugador='$idJ' AND identrenador='$idEM'";
            $query = $this-> query($consulta);
            $this->terminate();
            
            if( $query ){
               
                return "ok";
            }else{
                return "error";
                throw new mysqli_sql_exception( "Error al eliminar jugador Entrenador.");
            }
    }

  
  }
  

?>