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
       for($i=1;$i<($this->_base+1);$i++)
        {
             
             $asteriscos="";
            for($j=1;$j<$i;$j++)
            {
                $asteriscos=$asteriscos."*";
            }
            echo $asteriscos."<br>";
    
            
        }
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