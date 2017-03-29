<?php

include "FiguraGeometrica.php";
include "Rectangulo.php";
include "Triangulo.php";

$rectangulo = new Rectangulo(2,4);
$triangulo = new Triangulo(3,3);
echo "RECTANGULO<br>";
$rectangulo->ToString();
echo "<br><br>";
echo"TRIANGULO<br>";
$triangulo->ToString();




?>