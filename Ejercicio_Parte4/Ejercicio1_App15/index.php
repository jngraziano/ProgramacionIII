<?php

require "FiguraGeometrica.php";
require "Rectangulo.php";
require "Triangulo.php";

$rectangulo = new Rectangulo(2,4);
$triangulo = new Triangulo(3,3);
echo "RECTANGULO<br>";
$rectangulo->SetColor("<br>Color: Granate");
$rectangulo->ToString();
echo "<br><br>";
echo"TRIANGULO<br>";
$triangulo->SetColor("<br>Color: Blanco");
$triangulo->ToString();




?>