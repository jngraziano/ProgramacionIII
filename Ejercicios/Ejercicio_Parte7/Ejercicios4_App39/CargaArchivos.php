<?php

// var_dump($_FILES);
echo "<br>";


if(!file_exists("Upload"))
{mkdir("Upload",0777);}

// var_dump ($_FILES["Carga1"]["type"]);
//guardo nombre y extencion y tamaño
$namearray=explode(".",$_FILES["Carga1"]["name"]);
$extencion=$namearray[1];
$tamaño=$_FILES["Carga1"]["size"];

switch ($_FILES["Carga1"]["type"]) {
    case 'image/jpg':
        if($_FILES["Carga1"]["size"]<300000)
         {
            copy($_FILES["Carga1"]["tmp_name"],"Upload"."/".$namearray[0].".".$extencion);
            echo "Se cargo satisfactoriamente la imagen."."<br><br>";
            echo "Nombre del archivo:"."<br>".$namearray[0].".".$extencion."<br>"."Tamaño: "."<br>".$tamaño."<br>";
            echo "<br>".'<a href="index.html">Regresar pagina anterior.</a>';
             
            
         }
         else{  
             echo "Sobrepaso el limite."."<br><br>";
             echo '<a href="index.html">Regresar pagina anterior.</a>';
             }
        break;
    case 'image/jpeg':
        if($_FILES["Carga1"]["size"]<300000)
         {
            copy($_FILES["Carga1"]["tmp_name"],"Upload"."/".$namearray[0].".".$extencion);
            echo "Se cargo satisfactoriamente la imagen."."<br><br>";
            echo "Nombre del archivo:"."<br>".$namearray[0].".".$extencion."<br>"."Tamaño: "."<br>".$tamaño."<br>";;
            echo "<br>".'<a href="index.html">Regresar pagina anterior.</a>';
             
            
         }
         else{  
             echo "Sobrepaso el limite."."<br><br>";
             echo '<a href="index.html">Regresar pagina anterior.</a>';
             }
        break;
    case 'image/gif':
        if($_FILES["Carga1"]["size"]<300000)
         {
            copy($_FILES["Carga1"]["tmp_name"],"Upload"."/".$namearray[0].".".$extencion);
            echo "Se cargo satisfactoriamente la imagen."."<br><br>";
            echo "Nombre del archivo:"."<br>".$namearray[0].".".$extencion."<br>"."Tamaño: "."<br>".$tamaño."<br>";;
            echo "<br>".'<a href="index.html">Regresar pagina anterior.</a>';
             
            
         }
         else{  
             echo "Sobrepaso el limite."."<br><br>";
             echo '<a href="index.html">Regresar pagina anterior.</a>';
             }
        break;
     case 'application/msword':
        if($_FILES["Carga1"]["size"]<480000)
         {
            copy($_FILES["Carga1"]["tmp_name"],"Upload"."/".$namearray[0].".".$extencion);
            echo "Se cargo satisfactoriamente el word."."<br><br>";
            echo "Nombre del archivo:"."<br>".$namearray[0].".".$extencion."<br>"."Tamaño: "."<br>".$tamaño."<br>";;
            echo "<br>".'<a href="index.html">Regresar pagina anterior.</a>';
             
            
         }
         else{  
             echo "Sobrepaso el limite."."<br><br>";
             echo '<a href="index.html">Regresar pagina anterior.</a>';
             }
        break;
    case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
         if($_FILES["Carga1"]["size"]<480000)
         {
            copy($_FILES["Carga1"]["tmp_name"],"Upload"."/".$namearray[0].".".$extencion);
            echo "Se cargo satisfactoriamente el word."."<br><br>";
            echo "Nombre del archivo:"."<br>".$namearray[0].".".$extencion."<br>"."Tamaño: "."<br>".$tamaño."<br>";;
            echo "<br>".'<a href="index.html">Regresar pagina anterior.</a>';
             
            
         }
         else{  
             echo "Sobrepaso el limite."."<br><br>";
             echo '<a href="index.html">Regresar pagina anterior.</a>';
             }
        break;
    default:
       if($_FILES["Carga1"]["size"]<500000)
         {
            copy($_FILES["Carga1"]["tmp_name"],"Upload"."/".$namearray[0].".".$extencion);
            echo "Se cargo satisfactoriamente el archivo generico."."<br><br>";
            echo "Nombre del archivo:"."<br>".$namearray[0].".".$extencion."<br>"."Tamaño: "."<br>".$tamaño."<br>";;
            echo "<br>".'<a href="index.html">Regresar pagina anterior.</a>';
             
            
         }
         else{  
             echo "Sobrepaso el limite."."<br><br>";
             echo '<a href="index.html">Regresar pagina anterior.</a>';
             }
        break;
}










?>