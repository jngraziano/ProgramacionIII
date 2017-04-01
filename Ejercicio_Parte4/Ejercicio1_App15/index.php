<?php

require "FiguraGeometrica.php";
require "Rectangulo.php";
require "Triangulo.php";

$rectangulo = new Rectangulo(3,4);
$triangulo = new Triangulo(5,3);
echo "RECTANGULO<br>";
$rectangulo->SetColor("<br>Color: Granate");
$rectangulo->ToString();
echo "<br><br>";
echo"TRIANGULO<br>";
$triangulo->SetColor("<br>Color: Blanco");
$triangulo->ToString();

echo "<br><br>";
echo "<br><br>";
echo "<br><br>";
echo "<br><br>";
echo "<br><br>";
var_dump($rectangulo);
echo "<br><br>";
var_dump($triangulo);
?>
