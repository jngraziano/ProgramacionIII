<?php

require_once "clases/AccesoDatos.php";
$objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
$consulta = $objetoAcceso->RetornarConsulta('UPDATE `producto` SET `codigo_barra`=:codbar,`nombre`=:nomb,`path_foto`=:pathf WHERE codigo_barra=:id');

        $consulta->bindValue(':codbar', $_POST["codBarra"], PDO::PARAM_INT);
        $consulta->bindValue(':nomb', $_POST["nombre"], PDO::PARAM_STR);
        $consulta->bindValue(':pathf',$_FILES["archivo"]["name"], PDO::PARAM_STR);

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