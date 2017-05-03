
<?php
require_once ("clases/AccesoDatos.php");

if(isset($_POST["guardar"])) 
{
    $objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
   
   try{
    $consulta = $objetoAcceso->RetornarConsulta("INSERT INTO producto (codigo_barra,nombre,path_foto)"
                                                    . "VALUES(:codbar, :nomb, :path)");
        
        $consulta->bindValue(':codbar', $_POST["codBarra"], PDO::PARAM_INT);
        $consulta->bindValue(':nomb', $_POST["nombre"], PDO::PARAM_STR);
        $consulta->bindValue(':path',$_FILES["archivo"]["name"], PDO::PARAM_STR);

	$consulta->Execute();
     $name = $_FILES["archivo"]["name"];
        $archivoTmp = $_FILES["archivo"]["tmp_name"];
        copy($archivoTmp,"archivos"."/".$name);
         echo '<script type="text/javascript">alert("Se agrego 1 articulo");</script>';
              
    require_once("altaenBD.php");
        }
    catch(PDOException $e)
    {
        print "Error al subirlo<br>".$e->getMessage();
    }



}





?>