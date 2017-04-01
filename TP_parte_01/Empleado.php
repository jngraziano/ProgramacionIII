<?php

class Empleado extends Persona
{
    protected $_legajo;
    protected $_sueldo;
    
    function __construct($nombre,$apellido,$dni,$sexo,$legajo,$sueldo)
    {
        parent::$_nombre=$nombre;
        parent::$_apellido=$apellido;
        parent::$_dni=$dni;
        parent::$_sexo=$sexo;
        $this->_legajo=$legajo;
        $this->_sueldo=$sueldo;

    }

    public function getLegajo()
    {return $this->_legajo;}
    public function getSueldo()
    {return $this->_sueldo;}
    function Hablar($idioma)
    {
       return "El empleado habla ".$idioma;
    }
    public function ToString()
    {
        return parent::ToString()."-".$this->_legajo."-".$this->_sueldo;

    }

}





?>