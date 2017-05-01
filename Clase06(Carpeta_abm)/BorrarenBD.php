<?PHP
require_once "clases/AccesoDatos.php";
$objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
$consulta = $objetoAcceso->RetornarConsulta('DELETE FROM producto WHERE codigo_barra=:id');

try
{
    if(isset($_POST["botonEliminar1"]))
    {
        $consulta->bindvalue(':id',$_POST["codBarra"], PDO::PARAM_INT);
        $consulta->execute();
        if ($consulta->rowCount() == 0)
            {
                echo "<li>El elemento no existe.</li><br>";
            }
        else {
            echo '<script type="text/javascript">alert("Se elimino 1 articulo");</script>';
        }
   
        require_once("grilla.php");
    }
    else {
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
        }
        
    

}
catch (PDOException $e)
    {
        echo $e->getMessage();
        require "baja.php";
    }
