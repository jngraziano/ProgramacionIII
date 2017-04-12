<?php
//require "Fotos.php";
// echo "var_dump del files:<br>";
// var_dump($_FILES);
// echo "<br><br>";

//Creo el directorio con el nombre y el "privilegio"
if(!file_exists("Fotos"))
{mkdir("Fotos",0777);}



//Creo un array donde en la posicion [0]
//me guarda el nombre del archivo (uso $_FILES
//[ponemos el name creado en el input del file]["name"] 
//que te devuelve el nombre especifico del archivo que
//fue subido) y en la posicion [1] me guarda su extencion
//ya que con el explode lo divido por el "." 
$namearray=explode(".",$_FILES["Archivo1"]["name"]);

//guardo el nombre que me ingreso el us en el input type text
$nombre = $_POST["Texto1"];
//Copio,primer lugar va donde esta temporalmente subido el archivo
//ya que esta en el servidor uso ->[Archivo1]["tmp_name"]
//que me devuelve el path donde esta temporalmente el archivo en el servidor
//segundo lugar (despues de la coma) colocamos el nombre de la carpeta
//concatenado con un "/" que es para que entre dentro de la carpeta
//concatenado con nombre que puso el usuario
//concatenado con un punto (para la extencion)
//concatenado con la posicion [1] del array la cual tiene 
//la extencion del archivo.
if(!file_exists("Fotos"."/".$nombre.".".$namearray[1]))
//pregunto al if si no existe dentro de la carpeta Fotos, el archivo subido
{
copy($_FILES["Archivo1"]["tmp_name"],"Fotos"."/".$nombre.".".$namearray[1]);
echo"<br>Imagen cargada exitosamente.";
//muestro la foto en el servidor:

//Si no existe copio el archivo
}
else {
//si existe, creo la carpeta backup
//creo la variable fecha
//copio lo que habia en la carpeta fotos con el mismo nombre
//a la carpeta Backup,sumandole al nombre, "backup + fecha actual"
    mkdir("Backup",0777);
    $fecha=date('d-m-y');
    copy("Fotos"."/".$nombre.".".$namearray[1],"Backup"."/".$nombre.$fecha.".".$namearray[1]);
    echo "<br>Ya existia el archivo indicado.<br>Se creo un backup en una nueva carpeta";
}

require "Fotos.php";




?>     