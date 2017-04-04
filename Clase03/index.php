<?php

require "Producto.php";
require "Container.php";

$producto1 = new Producto(10,"Celular",5000);

// echo $producto1;

echo $producto1->ToString();

$archivo=fopen("Producto.txt","w");

fwrite($archivo,$producto1->ToString());
echo "<br><br><br>";

$container1 = new Container(1);
 for($i=0;$i<2;$i++)
 {
     $container1->AgregarProducto(new Producto($i,"Celular",$i+7000));
     
 }

var_dump($container1);



?>