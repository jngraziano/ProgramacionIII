<?php

require "Producto.php";
$producto1 = new Producto(10,"Celular",5000);

// echo $producto1;

echo $producto1->ToString();

$archivo=fopen("Producto.txt","w");

fwrite($archivo,$producto1->ToString());

?>