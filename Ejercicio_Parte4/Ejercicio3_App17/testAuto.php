<?php
require "Auto.php";

// En testAuto.php:
//  Crear dos objetos “Auto” de la misma marca y distinto color.
//  Crear dos objetos “Auto” de la misma marca, mismo color y distinto precio.
//  Crear un objeto “Auto” utilizando la sobrecarga restante.
//  Utilizar el método “AgregarImpuesto” en los últimos tres objetos, agregando $ 1500
// al atributo precio.
//  Obtener el importe sumado del primer objeto “Auto” más el segundo y mostrar el
// resultado obtenido.
//  Comparar el primer “Auto” con el segundo y quinto objeto e informar si son iguales o
// no.
//  Utilizar el método de clase “MostrarAuto” para mostrar cada los objetos impares (1, 3,
// 5)

//$marca="",$color="",$precio=0,$fecha=''
$autoUno = new Auto("Ford","Rojo");
$autoUnobis = new Auto ("Ford","Negro");
$autoDos = new Auto("Chevrolet","Negro",250000);
$autoDosbis = new Auto("Chvrolet","Negro",2000);
$autoTres = new Auto("Volkswagen","Azul",300000,date('d/m/y'));


$autoUno->AgregarImpuesto(1500);
var_dump($autoUno);
echo "<br>";
$autoUnobis->AgregarImpuesto(1500);
var_dump($autoUnobis);
echo "<br>";
$autoDos->AgregarImpuesto(1500);
var_dump($autoDos);







?>