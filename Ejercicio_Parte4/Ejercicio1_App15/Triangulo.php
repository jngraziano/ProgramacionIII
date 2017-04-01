<?php

/**
 * 
 */
class Triangulo extends FiguraGeometrica
{
    protected $_altura;
    protected $_base;
    
    function __construct($b,$h)
    {
        $this->_altura=$h;
        $this->_base=$b;
        $this->CalcularDatos();
    }

    protected function CalcularDatos()
    {
        $this->_superficie=$this->_base*$this->_altura;
        $this->_perimetro=$this->_base*3;
    }
    public function Dibujar()
    {
       echo "  *<br>";
       echo " ***<br>";
       echo "*****";
       echo $this->_color; 
       echo "<br>Perimetro: $this->_perimetro";
       echo "<br>Superficie: $this->_superficie";
    }
    public function ToString()
    {
        return parent::ToString();
    }
}






?>