
<?php
require_once ("clases/AccesoDatos.php");

:if(isset($_POST["guardar"])) 
{
    $objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
   
   try{
    $consulta = $objetoAcceso->RetornarConsulta("INSERT INTO producto (codigo_barra,nombre,path_foto)"
                                                    . "VALUES(:codbar, :nomb, :path)");
        
        $consulta->bindValue(':codbar', $_POST["codBarra"], PDO::PARAM_INT);
        $consulta->bindValue(':nomb', $_POST["nombre"], PDO::PARAM_STR);
        $consulta->bindValue(':path',$_FILES["archivo"]["name"], PDO::PARAM_STR);

	$consulta->Execute();
    echo "El archivo fue cargado exitosamente.<br>";
    echo "<a href=index.html>Volver a la pagina principal</a>";
        }
    catch(PDOException $e)
    {
        print "Error al subirlo<br>".$e->getMessage();
    }



}





?>