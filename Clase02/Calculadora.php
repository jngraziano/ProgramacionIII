<?php

/**
 * 
 */
class Calculadora 
{
    //formas de contructor: con el mismo nombre de la clase como en c# o sino con _contructor
    public static $atributostatico; 
    public $atributodeinstancia;
    private static function Sumar($num1,$num2)
    {
        //RECORDAR SIEMRPE PONER PUBLIC O PRIVADO. POR DEFECTO TOMA PUBLIC PERO TENEMOS QUE PONERLO IGUAL
        return $num1+$num2;

    }
    static function Restar($num1,$num2)
    {
        return $num1-$num2;
    }
}






?>