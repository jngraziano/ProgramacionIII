<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/clases/AccesoDatos.php';
require __DIR__.'/clases/usuario.php';

$config['displayErrorDetails'] = true;
$config['addContentLengthHeader'] = false;
/*

¡La primera línea es la más importante! A su vez en el modo de 
desarrollo para obtener información sobre los errores
 (sin él, Slim por lo menos registrar los errores por lo que si está utilizando
  el construido en PHP webserver, entonces usted verá en la salida de la consola 
  que es útil).

  La segunda línea permite al servidor web establecer el encabezado Content-Length, 
  lo que hace que Slim se comporte de manera más predecible.
*/

$app = new \Slim\App(["settings" => $config]);




// Ejemplo traertodos con codigo
// $app->get('/traertodos', function ($request, $response) {
//     $objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
//     $consulta = $objetoAcceso->RetornarConsulta('SELECT * FROM usuario');
//     $consulta->execute();
//     $todos = $consulta->fetchAll();
//     return $response->withJson($todos);
// });
// Ejemplo traer uno solo con codigo
// $app->get('/traeruno/[{id}]', function ($request, $response, $args) {
//           $objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
//           $consulta = $objetoAcceso->RetornarConsulta('SELECT ID, CLAVE, MAIL, ESTADO FROM usuario WHERE id=:id');
//           $consulta->bindParam("id", $args['id']);
//            $consulta->execute();
//             $uno = $consulta->fetchAll();
//             return $response->withJson($uno);
//         });


$app->post('/mostraralta', function (Request $request, Response $response) {
       
   include("partes/formUsuario.php");

});
$app->post('/mostrarlogin', function (Request $request, Response $response) {
    
   	include ("partes/formLogin.php"); //abre el formulario de login
   
});
$app->post('/usuario[/]', function (Request $request, Response $response) {
  
  	$destino="./fotos/";
  	$ArrayDeParametros = $request->getParsedBody();
  	//var_dump($ArrayDeParametros);
  	$mail= $ArrayDeParametros['mail'];
  	$clave= $ArrayDeParametros['clave'];

  	
  	$miusuario = new Usuario();
  	$miusuario->mail=$mail;
  	$miusuario->clave=$clave;
  //	$micd->InsertarElCdParametros();

  	$archivos = $request->getUploadedFiles();
 

	$nombreAnterior=$archivos['foto']->getClientFilename();
	$extension= explode(".", $nombreAnterior)  ;
	//var_dump($nombreAnterior);
	$extension=array_reverse($extension);

  	$archivos['foto']->moveTo($destino.$mail.".".$extension[0]);
    
	$path = $destino.$mail.".".$extension[0];

	

		$objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
		$consulta = $objetoAcceso->RetornarConsulta('INSERT INTO `usuario`(archivo,mail,clave) VALUES (:archivo,:mail,:clave)');
		$consulta->bindParam("archivo",$path);
        $consulta->bindParam("mail",$miusuario->mail);
		$consulta->bindParam("clave",$miusuario->clave);
		
		$consulta->Execute();

	
  //  return $response;

});

$app->post('/mostrargrilla', function (Request $request, Response $response) {
       
   include("partes/formGrilla.php");

});
$app->post('/modificar', function (Request $request, Response $response) {

	$id = $request->getParsedBody(); //ATENCION ES UN ARRAY.
	//el getParsedBody parsea lo que viene por html

	$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta('SELECT id, mail, clave, archivo from usuario WHERE id = :id');
			$consulta->bindParam(":id",$id['id']);
			$consulta->execute();
			$usuarioBuscado= $consulta->fetchObject('usuario');

	echo "
        
		
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href=css/ingreso.css rel=stylesheet>
		
		<div class=container>
		<form class='form-ingreso' onsubmit='UpdateUsuario();return false' enctype=multipart/form-data id=formcd>
	    <h2 class=form-ingreso-heading>MODIFICACION</h2>
        <input type=text  minlength=6  id=mail value='".$usuarioBuscado->mail."'   class='form-control' placeholder=Mail required= autofocus=>
        <label for=mail value=un mail class=sr-only>Mail</label>
        <input type=text  minlength=6  id=clave value='".$usuarioBuscado->clave."'  class=form-control placeholder=Clave required= autofocus=>

       <input readonly   type=hidden    id=idCD value='".$usuarioBuscado->id."' class=form-control >
       <input type=file id=foto name=foto value='".$usuarioBuscado->archivo."'>
        <button  class='btn btn-lg btn-success btn-block' type=submit><span class='glyphicon glyphicon-floppy-save'>&nbsp;&nbsp;</span>Modificar </button>
        
		 </form>

    	</div>
		</tr>   ";
	
	 	
	
			
});
$app->post('/update', function (Request $request, Response $response) {
  
  	$destino="./fotos/";
  	$ArrayDeParametros = $request->getParsedBody();
  	
	//var_dump($ArrayDeParametros);
  	$mail= $ArrayDeParametros['mail'];
  	$clave= $ArrayDeParametros['clave'];
  	$id = $ArrayDeParametros['id'];


  $miusuario = new Usuario();
  	$miusuario->mail=$mail;
  	$miusuario->clave=$clave;

  	$archivos = $request->getUploadedFiles();

	$nombreAnterior=$archivos['foto']->getClientFilename();
	$extension= explode(".", $nombreAnterior)  ;
	$extension=array_reverse($extension);

  	$archivos['foto']->moveTo($destino.$titulo.".".$extension[0]);
    
	$path = $destino.$titulo.".".$extension[0];

	

		$objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
		
		
		$consulta = $objetoAcceso->RetornarConsulta('UPDATE `usuario`set archivo=:archivo, mail=:mail, clave=:clave WHERE id=:id');
		$consulta->bindParam("id",$id);
        $consulta->bindParam("archivo",$path);
        $consulta->bindParam("mail",$miusuario->mail);
		$consulta->bindParam("clave",$miusuario->clave);
		
		$consulta->Execute();

	
  //  return $response;

});

$app->delete('/borrar', function (Request $request, Response $response) {

 		

		$id = $request->getParsedBody(); //ATENCION ES UN ARRAY	 

		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta('DELETE from usuario WHERE id=:id');	
			$consulta->bindParam(":id",$id['id']);		
			$consulta->execute();
				
		var_dump($consulta->rowCount());
		
		//return $consulta->rowCount();
});



//////////////////APP VIEJOS//////////////////////////




$app->post('/alta', function ($request, $response) {
    require_once("funciones/altaenBD.php");
    // return $response->write("alta.");
});
$app->delete('/baja', function ($request, $response) {
    return $response->write("delete.");
});
$app->put('/modificacion', function ($request, $response) {
    return $response->write("modificacion.");
});
$app->patch('/cambiarestado', function ($request, $response) {
    return $response->write("cambiarestado.");
});
$app->post('/validarusuario', function ($request, $response) {
    return $response->write("validarusuario.");
});




// $app->get('/funciones/[{id}]', function ($request, $response, $args) {
//          $sth = $this->db->prepare("SELECT * FROM tasks WHERE id=:id");
//         $sth->bindParam("id", $args['id']);
//         $sth->execute();
//         $todos = $sth->fetchObject();
//         return $this->response->withJson($todos);
//     });

// Run app
$app->run();
?>