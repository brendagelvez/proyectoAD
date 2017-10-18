<?php
/**
 * Proyecto de software para UFPS - BD (TORNEO DE TENIS GRAND SLAM )
 * @author - Gino Góngora  <ginoamaurygc@ufps.edu.co>
 * @author - Gabriel Contreras <cristiangabrielcg@ufps.edu.co>
 * @author - Daniel Caballero <danieljosecs@ufps.edu.co>
 * @version - 1.0.0
 * 2016
 */
  class TrabajadorDTO{

        
         public $codzona;
         public $codtra;
         public $cedula;
         public $nombre;
         public $telefono;

      /**
       * TrabajadorDTO constructor.
       * @param $codzona
       * @param $codtra
       * @param $cedula
       * @param $nombre
       * @param $telefono
       */
      public function __construct($codzona, $codtra, $cedula, $nombre, $telefono)
      {
          $this->codzona = $codzona;
          $this->codtra = $codtra;
          $this->cedula = $cedula;
          $this->nombre = $nombre;
          $this->telefono = $telefono;
      }


  }

?>