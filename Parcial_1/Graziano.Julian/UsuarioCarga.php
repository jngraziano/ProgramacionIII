
<?PHP
    require "clases/usuario.php";
  
         
            $usuario = new Usuario($_POST["nombre1"] ,$_POST["correo1"],$_POST["edad1"],$_POST["clave1"]);

            if (!file_exists("archivos/usuarios.txt"))
                {
                    $archivoUsuarios= fopen("archivos/usuarios.txt","w");
                    fwrite($archivoUsuarios, $usuario->ToString());
                   echo '<script type="text/javascript">alert("Se agrego 1 articulo");</script>';
    
                echo '<meta http-equiv="refresh" content="0; url=http://localhost:8080/ProgramacionIII/Parcial_1/Graziano.Julian/CrearArchivo.html" />';
                }
            else 
                {
                    $archivoUsuarios= fopen("archivos/usuarios.txt","a");
                    fwrite($archivoUsuarios, $usuario->ToString());
                    echo '<script type="text/javascript">alert("Se agrego 1 articulo");</script>';
    
    echo '<meta http-equiv="refresh" content="0; url=http://localhost:8080/ProgramacionIII/Parcial_1/Graziano.Julian/CrearArchivo.html" />';
                }
           
            // $name = $_FILES["archivo"]["name"];
            // $archivoTmp = $_FILES["archivo"]["tmp_name"];
            // copy($archivoTmp,"archivos"."/".$name);
        
?>
