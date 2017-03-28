<?php
//github octaviovillegas
//se utiliza el include para agregar a otro archivo php. Trae el archivo php que indique entre "" y que esta en la misma carpeta.
//include "Funciones.php";
//require "Noexiste.php"; Es un error comun y es porque esta mal ruteado. Verificar siempre.
//haciendo doble click a la palabra luego ctrl+d te deja cambiar todos los mismos a la vez.
//require frena la aplicacion (hace lo mismo que el include) pero si no esta el archivo el require es un fatal error, el include es solo un warning
require "Funciones.php";
require_once "Funciones.php";
//el require_once sirve para incluirlo solo una vez, salteando el warning.

//incluyo la clase, la llamo con su nombre y con los dos puntos ingreso para elegir un metodo dentro de esta.
    include "Calculadora.php";

//$resultado=Calculadora::Sumar(3,6);
Calculadora::$atributostatico=10; //RECORDAR PARA LLAMAR UN ATRIB ESTATICO DEBEMOS PONER LA VARIABLE SIN $
echo "ATRIBUTO ESTATICO<br>";
var_dump(Calculadora::$atributostatico);

//NO TE VA A DEJAR ASIGNAR ASI Calculadora::$atributodeinstancia=5;

//Creo un objeto Calculadora e ingreso a la variable utilizando -> que accede a los atributos de la clase.
$miCalculadora = new Calculadora;
$miCalculadora->atributodeinstancia=3; //le asigno un numero ejemplo
echo "<br>ATRIBUTO DE INSTANCIA<br>";
var_dump($miCalculadora->atributodeinstancia);
//var_dump($resultado);







?>