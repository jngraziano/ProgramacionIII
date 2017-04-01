<?php

require "Empleado.php";
require "Persona.php";

$empleado1 = new Empleado("Carlos","Apellido",38987123,"machote",123,9000);

var_dump($empleado1);
echo "<br>";
echo $empleado1->ToString();
echo "<br>";
echo $empleado1->Hablar("Español");





?>