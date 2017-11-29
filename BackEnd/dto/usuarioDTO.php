<?php

  class usuarioDTO{

         public $compañia;
         public $nombre;
         public $direccion;
         public $correo;
         public $departamento;
         public $contraseña;
         public $ciudad;
         public $numero;
         public $tipo;
         public $cedula;



         public function __construct($tipo,$nombre,$documento,$compañia,$correo,$contraseña,$direccion,$departamento,$ciudad,$numero){
             $this->nombre=$nombre;
             $this->compañia=$compañia;
             $this->correo=$correo;
             $this->contraseña=$contraseña;
             $this->direccion=$direccion;
             $this->departamento=$departamento;
             $this->ciudad=$ciudad;
             $this->numero=$numero;
             $this->tipo=$tipo;
             $this->cedula=$documento;

            
         }

     }   

?>