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
      
        $ListaDeProductos= array();
       $archivoProductos= fopen("archivos/productos.txt","r");
      while(!feof($archivoProductos))
		{
			$archAux = fgets($archivoProductos);
           
			$productos = explode(" - ", $archAux);
			if($productos[0] !== "")
            {
			    $ListaDeProductos[] = new Producto($productos[0], $productos[1],$productos[2]);
			}
		}
        foreach ($ListaDeProductos as $keyProducto) 
        {
            if($_POST["codBarra"] == $keyProducto->GetCodBarra())
              {
                $key2=array_search($keyProducto,$ListaDeProductos);
                unset($ListaDeProductos[$key2]);
                $reindex=array_values($ListaDeProductos);
                $ListaDeProductos=$reindex;
                //BORRA BIEN EL ARCHIVO
                //CREO UN ARRAY
                foreach ($ListaDeProductos as $key ) {
                    //CREO UN ARRAY para que sea 
                    //ARRAY tipo STRING y no 
                    //ARRAY de tipo PRODUCTO
                    //PORQUE SINO ROMPE EN EL IMPLODE
                     $newarraystring [] = $key->ToString();
                }   
                 //USO EL IMPLODE PARA QUE LO GUARDE EN UN
                 //STRING y lo mande al txt pero...
                 $nuevoprod=implode(" - ",$newarraystring);
                 var_dump($nuevoprod);//MUESTRA PERFECTO
                
                //ESTO NO ME ESCRIBE. NO ENTIENDO PORQUE
                //SI EN EL FOPEN PONGO UNA W, NUNCA LLEGA A ABRIR 
                //EL ARCHIVO, Y ENCIMA TE LO VACIA
                fwrite($archivoProductos, $nuevoprod);
             }
        }
       
     
          
		// fclose($archivoProductos);
       //echo '<meta http-equiv="refresh" content="0; url=http://localhost/ProgramacionIII/Clase06(Carpeta_abm)/BajaenArchivo.php" />';
    

        }
}
catch (PDOException $e)
    {
        echo $e->getMessage();
        require "bajaenBD.php";
    }
