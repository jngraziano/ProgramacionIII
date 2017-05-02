<?PHP

require_once("clases/producto.php");

try
{
    if(isset($_POST["botonEliminarArchivo"]))
    {
        //ACA TENGO QUE HACER LO QUE HACE CUANDO HACEN
        //EN EL BOTON ELIMINAR AL LADO DE LA GRILLA
    }
    else {
       $arrayArchivo = Producto::TraerTodosLosProductos();
        //separamos la primera variable de la fila 3
        $i = 0;
        foreach ($arrayArchivo as $prod)
        {

            if($_POST["codBarra"] == $prod->GetCodBarra())
            {
                //CREO FLAG POR SI LO ENCONTRO
            $loencontro=true;
            break;
            }
         
        $i++;
        }
        $loencontro=false;
        //Abro el archivo para sobreescribir
        $archivo = "archivos/productos.txt";
        $abrir = fopen($archivo, 'w');
        //Borro el archivo con el indice $i que saque en el foreach
        unset($arrayArchivo[$i]);
        //reindexo el array.
        $reindex=array_values($arrayArchivo);
        $arrayArchivo=$reindex;
        //recorro el array para guardarlo en el txt
        foreach ($arrayArchivo as $key) {
            
            fwrite($abrir,$key->ToString());
            
        }
        
        fclose($abrir);
     
        if($loencontro)
        {
            //creo el mensaje y la redireccion si encontró el archivo
        echo '<script type="text/javascript">alert("Se borro 1 articulo");</script>';
        echo '<meta http-equiv="refresh" content="0; url=http://localhost:8080/ProgramacionIII/Clase06(Carpeta_abm)/BajaenArchivo.php" />';
        }
        else {
               //creo lo contrario al if
                echo '<script type="text/javascript">alert("No se encontró el articulo");</script>';
                echo '<meta http-equiv="refresh" content="0; url=http://localhost:8080/ProgramacionIII/Clase06(Carpeta_abm)/BajaenArchivo.php" />';
                
        }

        }
}
catch (PDOException $e)
    {
        echo $e->getMessage();
        require "bajaenBD.php";
    }
