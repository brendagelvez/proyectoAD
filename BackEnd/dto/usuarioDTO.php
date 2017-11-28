<?php

  class UDTO{

         public $idUsuario;
         public $documento;
         public $nombre;
         public $apellido;
         public $correo;
         public $tipo;
         public $contraseña;


         public function __construct($documento, $nombre, $apellido, $correo, $tipo, $contraseña){
             $this->documento=$documento;
             $this->nombre=$nombre;
             $this->apellido=$apellido;
             $this->correo=$correo;
             $this->tipo=$tipo;
             $this->contraseña=$contraseña;
            
         }

     }   

?>