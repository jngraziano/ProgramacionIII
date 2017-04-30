<?php

require_once "clases/AccesoDatos.php";
$objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
$consulta = $objetoAcceso->RetornarConsulta('SELECT codigo_barra as codBarra, nombre, path_foto as pathFoto FROM producto WHERE codigo_barra=:codBarra');

        $consulta->bindValue(':codbar', $_POST["codBarra"], PDO::PARAM_INT);
try
{
$consulta->bindvalue(':id',$_POST["codBarra"], PDO::PARAM_INT);
$consulta->execute();
if ($consulta->rowCount() == 0)
{
echo "<li>El elemento no existe.</li><br>";
}
else
{

echo "Se realizo la modificacion en ". $consulta->rowCount()." Objeto/s.<br>"."<br>";
}
require_once("modificacion.php");

}
catch (PDOException $e)
{
echo $e->getMessage();
require "modificacion.php";
}




?>