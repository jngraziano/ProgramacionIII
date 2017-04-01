<?php

/**
 * 
 */
class Fabrica
{
    private $_empleados = array();
    private $_razonSocial;
    
    function __construct($razonSocial)
    {
        $this->_razonSocial=$razonSocial;

    }

    function AgregarEmpleados($persona)
    {
        
        array_push($this->_empleados,$persona);
        
        $this->EliminarEmpleadosRepetidos();
        
    }
    function CalcularSueldos()
    {
        $totalAcum=0;
        foreach ($this->_empleados as $key) {
           $totalAcum+=$key->getSueldo();
        }
        return $totalAcum;
    }
    function EliminarEmpleado($persona)
    {
        $key=array_search($persona,$this->_empleados);
        if(false !== $key)
        {
             unset($this->_empleados[$key]);
             $reindex=array_values($this->_empleados);
             $this->_empleados=$reindex;
             return true; 

        }
       
    }
    private function EliminarEmpleadosRepetidos()
    {
        
        $this->_empleados=array_values(array_unique($this->_empleados,SORT_REGULAR));
       
    }

    function ToString()
    {

        $datEmp="";
        foreach ($this->_empleados as $key) {
           $datEmp=$datEmp.$key->ToString()."<br>";
        }
        return "<br>"."Datos de la Fabrica:<br>"."Razon social: ".$this->_razonSocial."<br>Datos Empleados<br>".$datEmp;
    }

}







?>