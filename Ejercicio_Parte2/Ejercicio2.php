<?php

//Aplicación Nº 8 (Carga aleatoria)
//Imprima los valores del vector asociativo siguiente usando la estructura de control foreach:

$v[1]=90; 
$v[30]=7; 
$v['e']=99; 
$v['hola']= 'mundo';

//var_dump($v);

foreach($v as $key)
{
    //echo "$key<br>";
    var_dump("$key<br>");
}





?>