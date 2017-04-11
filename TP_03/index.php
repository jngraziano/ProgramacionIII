<?php
require "Fabrica.php";
require "Persona.php";
require "Empleado.php";


$empleado1 = new Empleado("Carlos","Perez",38987123,"Hombre",123,9000);
$empleado2 = new Empleado("Gregorio","Garcia",3344,"Hombre",332,120000);
$empleado3 = new Empleado("Carlos","Perez",38987123,"Hombre",123,9000);
$empleado4 = new Empleado("Carla","Depetris",9999,"Mujer",333,11000);
$fabrica1 = new Fabrica(444);
echo "TRABAJO PRACTICO";
echo "<br><br>-Primera parte";
echo "<br>";

echo $empleado1->ToString();
echo "<br>";
echo $empleado1->Hablar("Español");

echo"<br><br>-Segunda Parte";
$fabrica1->AgregarEmpleados($empleado1);
$fabrica1->AgregarEmpleados($empleado2);
$fabrica1->AgregarEmpleados($empleado4);

echo $fabrica1->ToString();
echo "<br><br>";

echo "Total de Sueldos: ". $fabrica1->CalcularSueldos();

echo "<br><br>-Despues de eliminar al empleado<br>";
$fabrica1->EliminarEmpleado($empleado4);
echo $fabrica1->ToString();
echo "<br>Total de Sueldos: ". $fabrica1->CalcularSueldos()."<br>";








?>