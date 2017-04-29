<?PHP
require_once "clases/AccesoDatos.php";
$objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
$consulta = $objetoAcceso->RetornarConsulta('DELETE FROM producto WHERE codigo_barra=:id');

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
echo "Se elimino: ". $consulta->rowCount()." Objeto/s.<br>"."<br>";
}
require_once("baja.php");
//echo "<br><a href=Baja.php> Volver </a>";
}
catch (PDOException $e)
{
echo $e->getMessage();
require "baja.php";
}
