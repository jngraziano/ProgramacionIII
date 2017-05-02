
<?PHP
    require "clases/producto.php";
    
    $producto = new Producto($_POST["codBarra"] ,$_POST["nombre"], $_FILES["archivo"]["name"]);

            if (!file_exists("archivos/productos.txt"))
                {
                    $archivoProductos= fopen("archivos/productos.txt","w");
                    fwrite($archivoProductos, $producto->ToString()."\r\n" );
                     echo '<script type="text/javascript">alert("Se actualizo 1 articulo");</script>';
    //meta sirve para refrescar la pagina directamente a donde vos quieras
    echo '<meta http-equiv="refresh" content="0; url=http://localhost/ProgramacionIII/Clase06(Carpeta_abm)/modificacionenArchivo.php" />'
                }
            else 
                {
                    $archivoProductos= fopen("archivos/productos.txt","a");
                    fwrite($archivoProductos, $producto->ToString()."\r\n" );
                   //alerta de javascript para mostrar el pop app de que se actualizó.    
    echo '<script type="text/javascript">alert("Se actualizo 1 articulo");</script>';
    //meta sirve para refrescar la pagina directamente a donde vos quieras
    echo '<meta http-equiv="refresh" content="0; url=http://localhost/ProgramacionIII/Clase06(Carpeta_abm)/modificacionenArchivo.php" />'
                }
            //Muevo el archivo
            $name = $_FILES["archivo"]["name"];
            $archivoTmp = $_FILES["archivo"]["tmp_name"];
            copy($archivoTmp,"archivos"."/".$name);
        //  }
    //    else 
    //    {
    //       if ($_FILES["VArchivo"]["error"] > 0) 
    //       {
    //         echo $_FILES["VArchivo"]["error"] . "";
    //       } 
    //       else 
    //       {
    //         echo "Archivo no permitido";
    //       }
?>
