<?php

 include_once "dao/model.php";
  class usuarioDAO extends Model{


      public function crearU($pDTO){
          $this->connect();
          $consulta="INSERT INTO usuarios(tipo,nombre,compania,correo,contrasena,direccion,departamento,ciudad,numero)VALUES"
              . " (0,'$pDTO->nombre','$pDTO->compañia','$pDTO->correo','$pDTO->contraseña','$pDTO->direccion','$pDTO->departamento','$pDTO->ciudad','$pDTO->numero')";
          $query = $this->query($consulta);
          $this->terminate();

          if( $query ){
              return "ok";
          }else{
              return "error";
              throw new mysqli_sql_exception( "Error al registrar el usuario.");
          }
      }

      public function creaAdm($pDTO){
          $this->connect();
          $consulta="INSERT INTO usuarios(tipo,nombre,cedula,correo,contrasena)VALUES"
              . " ('$pDTO->tipo','$pDTO->nombre','$pDTO->cedula','$pDTO->correo','$pDTO->contraseña')";
          $query = $this->query($consulta);
          $this->terminate();

          if( $query ){
              return "ok";
          }else{
              return "error";
              throw new mysqli_sql_exception( "Error al registrar el usuario.");
          }
      }
      public function loginU($email,$contraseña){
          $this->connect();
          $consulta=" SELECT * from usuarios WHERE correo='$email'and contrasena='$contraseña'ORDER BY idusuario DESC LIMIT 1";
          $query = $this->query($consulta);
          $this->terminate();

          if( $row = mysqli_fetch_array( $query )[0] != '' ){
              $ok = "ok";
              return $ok;
          }else{
              return "error";
              throw new mysqli_sql_exception( "Error al consultar ese partido.");
          }
      }

      public function loginA($email,$contraseña){
          $this->connect();
          $consulta=" SELECT * from usuarios WHERE correo='$email'and contrasena='$contraseña' and tipo = 1 ORDER BY idusuario DESC LIMIT 1";
          $query = $this->query($consulta);
          $this->terminate();

          if( $row = mysqli_fetch_array( $query )[0] != '' ){
              $ok = "ok";
              return $ok;
          }else{
              return "error";
              throw new mysqli_sql_exception( "Error al consultar ese partido.");
          }
      }

      public function regMessage($nombre,$compañia,$correo,$asunto,$mensaje){
          $this->connect();
          $consulta="INSERT INTO mensajes(nombre,compania,correo,asunto,mensaje)VALUES"
              . " ('$nombre','$compañia','$correo','$asunto','$mensaje')";
          $query = $this->query($consulta);
          $this->terminate();

          if( $query ){
              return "ok";
          }else{
              return "error";
              throw new mysqli_sql_exception( "Error al registrar el usuario.");
          }
      }


      public function consultUser()
      {
          $resultado = Array();
          $this->connect();
          $consulta = "SELECT idusuario,nombre,compania,correo,direccion,numero from usuarios where nombre <> '' and tipo <> 1";
          $query = $this->query($consulta);
          $this->terminate();

          if (mysqli_num_rows($query) > 0) {
              while ($fila = mysqli_fetch_assoc($query)) {
                  array_push($resultado, $fila);
              }
          }
          return $resultado;
      }

      public function consultProd()
      {
          $resultado = Array();
          $this->connect();
          $consulta = "SELECT idproductos,nombre,descripcion,tipo,cantidad,precio from productos where nombre <> '' ";
          $query = $this->query($consulta);
          $this->terminate();

          if (mysqli_num_rows($query) > 0) {
              while ($fila = mysqli_fetch_assoc($query)) {
                  array_push($resultado, $fila);
              }
          }
          return $resultado;
      }

      public function creaPro($nombre,$descripcion,$tipop,$cantidad,$precio){
          $this->connect();
          $consulta="INSERT INTO productos(nombre,descripcion,tipo,cantidad,precio)VALUES"
              . " ('$nombre','$descripcion','$tipop',$cantidad,$precio)";
          $query = $this->query($consulta);
          $this->terminate();

          if( $query ){
              return "ok";
          }else{
              return "error";
              throw new mysqli_sql_exception( "Error al registrar el usuario.");
          }
      }

      public function creaGa($tipo,$cantidad,$edad){
          $this->connect();
          $consulta="INSERT INTO gallinas(clase,cantidad,edad)VALUES"
              . " ('$tipo',$cantidad,'$edad')";
          $query = $this->query($consulta);
          $this->terminate();

          if( $query ){
              return "ok";
          }else{
              return "error";
              throw new mysqli_sql_exception( "Error al registrar el usuario.");
          }
      }

      public function creaTra($id,$tipo,$nivel,$fecha){
          $this->connect();
          $consulta="INSERT INTO tratamientos(id_gallina,tipo,nivel,fecha)VALUES"
              . " ($id,$tipo,'$nivel','$fecha')";
          $query = $this->query($consulta);
          $this->terminate();

          if( $query ){
              return "ok";
          }else{
              return "error";
              throw new mysqli_sql_exception( "Error al registrar el usuario.");
          }
      }

      //----------------------------------------------------------------------------------------------------



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