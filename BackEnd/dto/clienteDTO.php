<?php

class ClienteDTO{

    public $codigo;
    public $nombre;
    public $direccion;
    public $telefono;

    /**
     * ClienteDTO constructor.
     * @param $codigo
     * @param $nombre
     * @param $direccion
     * @param $telefono
     */
    public function __construct($nombre, $direccion, $telefono)
    {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
    }


}

?>