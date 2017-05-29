<?php

/**
 * 
 */
abstract class FiguraGeometrica
{
    protected $_color;
    protected $_perimetro;
    protected $_superficie;
    
    function __construct()
    {}
    public function GetColor()
    {
        return $this->_color;
    }
    public function SetColor($color)
    {
        return $this->_color=$color;
    }

//del 1 al 9 libro juan
    abstract protected function CalcularDatos();
    abstract public function Dibujar();
    
    public function ToString()
    {
        return $this->Dibujar();
    }
}










?>