<?php

/**
 * 
 */
 //extends quiere decir hereda de...
class Rectangulo extends FiguraGeometrica
{
    protected $_ladoDos;
    protected $_ladoUno;
    
    function __construct($l1,$l2)
    {
        $this->_ladoUno=$l1;
        $this->_ladoDos=$l2;
        $this->CalcularDatos();
    }

    protected function CalcularDatos()
    {
        $this->_superficie=($this->_ladoUno*$this->_ladoDos);
        $this->_perimetro=($this->_ladoUno*2)+($this->_ladoDos*2);
    }
    public function Dibujar()
    {
        for($i=1;$i<($this->_ladoUno+1);$i++)
       {
           $asteriscos="";

           for($j=0;$j<$this->_ladoDos;$j++)
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