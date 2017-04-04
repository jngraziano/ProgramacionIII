<?php

/**
 * 
 */
class Auto //extends AnotherClass
{
    private $_color;
    private $_precio;
    private $_marca;
    private $_fecha;
    
    function __construct($marca="",$color="",$precio=0,$fecha='')
    {
        switch (count(func_get_args())) {
            case '2':
                $this->_marca = $marca;
                $this->_color = $color;
                break;
            case '3':
                 $this->__construct($marca,$color);
                 $this->_precio = $precio; 
            case '4':
                $this->__construct($marca,$color,$precio);
                $this->_fecha = $fecha;
            default:
                # code...
                break;
        }

    }
    // Realizar un método de instancia llamado “AgregarImpuestos”, que recibirá un doble por
    // parámetro y que se sumará al precio del objeto.
    public function AgregarImpuestos($double1)
    {
        $this->_precio+=$double1;
    }
    // Realizar un método de clase llamado “MostrarAuto”, que recibirá un objeto de tipo “Auto”
    // por parámetro y que mostrará todos los atributos de dicho objeto.
    public static function MostrarAuto($unAuto)
    {
        echo "<br>Datos del Auto:<br>";
        echo "Marca: ".$unAuto->_marca."<br>";
        echo "Color: ".$unAuto->_color."<br>";
        echo "Precio: ".$unAuto->_precio."<br>";
        echo "Fecha: ".$unAuto->_fecha."<br>";
    }
    // Crear el método de instancia “Equals” que permita comparar dos objetos de tipo “Auto”. Sólo
    // devolverá TRUE si ambos “Autos” son de la misma marca.
    public static function Equals($unAuto,$otroAuto)
    {
        if($unAuto->_marca == $otroAuto->_marca)
        {
            return true;
        }
        else{return false;}
    }
    // Crear un método de clase, llamado “Add” que permita sumar dos objetos “Auto” (sólo si son
    // de la misma marca, y del mismo color, de lo contrario informarlo) y que retorne un Double
    // con la suma de los precios o cero si no se pudo realizar la operación.
    // Ejemplo: $importeDouble = Auto::Add($autoUno, $autoDos);
    public static function Add($unAuto,$otroAuto)
    {
        if($unAuto->_marca == $otroAuto->_marca && $unAuto->_color == $otroAuto->_color)
        {
            return $unAuto->_precio+$otroAuto->_precio;
        }
        else{echo "<br>No son iguales en marca y color.<br>";return 0;}
    }

}






?>