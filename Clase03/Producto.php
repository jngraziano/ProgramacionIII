<?php

/**
 * 
 */
class Producto 
{
        public $codigo;
        public $descripcion;
        public $importe;
    
    function __construct($cod,$descrip,$import)
    {
        $this->codigo=$cod;
        $this->descripcion=$descrip;
        $this->importe=$import;
    }

    public function ToString()
    {
        return "Codigo: ".$this->codigo."<br>Descripcion: ".$this->descripcion."<br>Importe: ".$this->importe;
    }
}





?>