<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/clases/AccesoDatos.php';
require __DIR__.'/clases/usuario.php';
require __DIR__.'/clases/bicicletas.php';


$config['displayErrorDetails'] = true;
$config['addContentLengthHeader'] = false;


$app = new \Slim\App(["settings" => $config]);









//////////////////////////ARRANCA PARCIAL/////////////

$app->post('/validarusuario', function (Request $request, Response $response) {

 $ArrayDeParametros = $request->getParsedBody();  

 $mail=$ArrayDeParametros['mail'];
 $nombre=$ArrayDeParametros['nombre'];
 $clave=$ArrayDeParametros['clave'];

 $retorno=Usuario::ValidarUsuario($mail,$clave,$nombre);
 return  $response->withJson($retorno);
			
});
$app->post('/altabici', function (Request $request, Response $response) {
  
  	// $destino="./fotos/";
  	$ArrayDeParametros = $request->getParsedBody();
  	
  	$color= $ArrayDeParametros['color'];
  	$rodado= $ArrayDeParametros['rodado'];
  	$marca= $ArrayDeParametros['marca'];
  	
	// $mybici= new bicicletas($color,$rodado,$marca);
	$retorno=bicicletas::Alta($color,$rodado,$marca);
	return $response->withJson($retorno);
  	
});

$app->get('/listadobicicletas', function (Request $request, Response $response) {

 $ArrayDeParametros = $request->getParsedBody();  

 $retorno=bicicletas::TraerTodasLasBicicletas();
 return  $response->withJson($retorno);
			
});
$app->get('/listadobicicletascolor/[{id}]', function (Request $request, Response $response,$args) {

 $ArrayDeParametros = $request->getParsedBody();  

 $retorno=bicicletas::TraerBicicletaPorColor($args['id']);
 return  $response->withJson($retorno);
			
});
$app->get('/bicicletaporid/[{id}]', function (Request $request, Response $response,$args) {

 $ArrayDeParametros = $request->getParsedBody();  

 $retorno=bicicletas::TraerBicicletaPorID($args['id']);
 return  $response->withJson($retorno);
			
});
$app->delete('/bajabiciporid/[{id}]', function (Request $request, Response $response,$args) {

 $ArrayDeParametros = $request->getParsedBody();  

 $retorno=bicicletas::Baja($args['id']);
 return  $response->withJson($retorno);
			
});

$app->post('/modificar/[{id}]', function (Request $request, Response $response,$args) {
  
  	// $destino="./fotos/";
  	$ArrayDeParametros = $request->getParsedBody();
  	
  	$color= $ArrayDeParametros['color'];
  	$rodado= $ArrayDeParametros['rodado'];
  	$marca= $ArrayDeParametros['marca'];
	$retorno=Bicicletas::Modificacion($color,$rodado,$marca,$args['id']);
  	return  $response->withJson($retorno);

});




$app->run();