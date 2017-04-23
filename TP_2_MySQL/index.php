<?php

//DATOS DE LA CONEXION AL SERVIDOR para poder cambiar

$host="127.0.0.1";//ip del servidor
$myUsuario="root";//usuario del servidor
$myPassw="";//contraseña del usuario del servidor
$myBD="utn";//nombre de la base de datos



//abrimos la conexión
$conexion = mysqli_connect($host,$myUsuario,$myPassw,$myBD);
if (!$conexion) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
else {
    echo "Conectado correctamente al servidor.<br>--------------------------------------------<br><br><br>";
}


//guardamos la query en una variable.
$consultaTest="SELECT * FROM `productos`";
echo "CONSULTA: ".$consultaTest."<br>";

//para usarla dentro del mysqli_query, la cual recibe la conexion y la consulta
//y la guardo en una variable.

$consultaQuery= mysqli_query($conexion,$consultaTest);
//  El mysqli_query devuelve:
//  Returns FALSE on failure.
//  For successful SELECT, SHOW, DESCRIBE or EXPLAIN queries mysqli_query() 
//  will return a mysqli_result object. 
//  For other successful queries mysqli_query() will return TRUE. 

$respuesta= mysqli_fetch_object($consultaQuery);
var_dump($respuesta);


//Cerrar conexion
mysqli_close($conexion);



?>