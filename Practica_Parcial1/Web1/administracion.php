<?php
require_once ("clases/vehiculo.php");

$alta = isset($_POST["Aceptar1"]) ? TRUE : FALSE;

if($alta) {

		$nuevovehiculo= new vehiculo($_POST["Marca1"],$_POST["Modelo1"],$_POST["Tipo1"],$_POST["Año1"],$_POST["Precio1"])
		vehiculo::GuardarenTxt($nuevovehiculo);
		vehiculo::GuardarenBD($nuevovehiculo);

	}//if $alta















	//ESTO ES POR SI QUIERO SUBIR ARCHIVOS. Va dentro del IF

	// //INDICO CUAL SERA EL DESTINO DEL ARCHIVO SUBIDO
	// $destino = "Archivos/" . $_FILES["archivo"]["name"];

	// $uploadOk = TRUE;

	// $tipoArchivo = pathinfo($destino, PATHINFO_EXTENSION);

	// //VERIFICO QUE EL ARCHIVO NO EXISTA
	// if (file_exists($destino)) {
	// 	$uploadOk = FALSE;
	// 	$mensaje = "El archivo ya existe. Verifique!!!";
	// 	include("mensaje.php");
	// }
	// //VERIFICO EL TAMA�O MAXIMO QUE PERMITO SUBIR
	// if ($_FILES["archivo"]["size"] > 500000) {
	// 	$uploadOk = FALSE;
	// 	$mensaje = "El archivo es demasiado grande. Verifique!!!";
	// 	include("mensaje.php");
	// }

	// //OBTIENE EL TAMA�O DE UNA IMAGEN, SI EL ARCHIVO NO ES UNA
	// //IMAGEN, RETORNA FALSE
	// $esImagen = getimagesize($_FILES["archivo"]["tmp_name"]);

	// if($esImagen === FALSE) {//NO ES UNA IMAGEN
	// 	$uploadOk = FALSE;
	// 	$mensaje = "S&oacute;lo son permitidas IMAGENES.";
	// 	include("mensaje.php");
	// }
	// else {// ES UNA IMAGEN

	// 	//SOLO PERMITO CIERTAS EXTENSIONES
	// 	if($tipoArchivo != "jpg" && $tipoArchivo != "jpeg" && $tipoArchivo != "gif"
	// 		&& $tipoArchivo != "png") {
	// 		$uploadOk = FALSE;
	// 		$mensaje = "S&oacute;lo son permitidas imagenes con extensi&oacute;n JPG, JPEG, PNG o GIF.";
	// 		include("mensaje.php");
	// 	}
	// }

	// //VERIFICO SI HUBO ALGUN ERROR, CHEQUEANDO $uploadOk
	// if ($uploadOk === FALSE) {

	// 	echo "<br/><br/>NO SE PUDO SUBIR EL ARCHIVO.";

	// } else {
	// 	//MUEVO EL ARCHIVO DEL TEMPORAL AL DESTINO FINAL
	// 	if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $destino)) {

	// 		$p = new Producto($_POST["codBarra"],$_POST["nombre"],basename($_FILES["archivo"]["name"]));
			
	// 		if(!Producto::Guardar($p)){
	// 			$mensaje = "Lamentablemente ocurrio un error y no se pudo escribir en el archivo.";
	// 			include("mensaje.php");
	// 		}
	// 		else{
	// 			$mensaje = "El archivo fue escrito correctamente. PRODUCTO agregado CORRECTAMENTE!!!";
	// 			include("mensaje.php");
	// 		}
	// 	} 
	// 	else {
	// 		$mensaje = "Lamentablemente ocurri&oacute; un error y no se pudo subir el archivo.";
	// 		include("mensaje.php");
	// 	}
	// }

?>