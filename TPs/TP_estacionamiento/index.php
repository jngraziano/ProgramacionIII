<?php
require "/clases/AccesoDatos.php";
require '/vendor/autoload.php';
require '/clases/usuario.php';
require '/clases/vehiculo.php';
require '/clases/cochera.php';

$app = new \Slim\App;
    
//<---------------------------------USUARIO-------------------------------------->
$app->get('/traertodosUsuarios', function ($request, $response) {
    $usuarios = Usuario::TraerTodosLosusuarios();
    return $response->withJson($usuarios);
});

$app->get('/traerunusuario/[{id}]', function ($request, $response, $args) {
          $uno = Usuario::TraerUnUsuario($args['id']);
          return $response->withJson($uno);
        });

$app->get('/validarusuario', function ($request, $response) {
         
          $obj = isset($_GET['usuario']) ? json_decode(json_encode($_GET['usuario'])) : NULL;
          $rta = Usuario::ValidarUsuario($obj->usuarioid,$obj->passwordid);
          return $response->withJson($rta);
        });
      
$app->get('/tipoempleado', function ($request, $response) {
          $obj = isset($_GET['usuarioTipo']) ? json_decode(json_encode($_GET['usuarioTipo'])) : NULL;
          $rta = Usuario::ValidarTipoEmp($obj->usuarionombre);
          return $response->withJson($rta);
        });

$app->get('/tipoempleado/[{id}]', function ($request, $response, $args) {
         
          $nombre = $args["id"];
          $rta = Usuario::ValidarTipoEmp($nombre);
          return $response->withJson($rta);
        });

$app->get('/loginbd/[{id}]', function ($request, $response, $args) {
         
          $nombre = $args["id"];
          $rta = Usuario::InsertarBD($nombre);
          return $response->withJson($rta);
        });
//<---------------------------------VEHICULOS-------------------------------------->
$app->get('/traertodosVehiculos', function ($request, $response) {
    $Vehiculos = Vehiculo::TraerTodosLosVehiculos();
    return $response->withJson($Vehiculos);
});
  
$app->get('/traerunVehiculo/[{id}]', function ($request, $response, $args) {
          
          $uno = Vehiculo::TraerUnVehiculo($args['id']);
          return $response->withJson($uno);
        });
  
$app->get('/vehiculoEstacionado/[{id}]', function ($request, $response, $args) {
          $uno = Vehiculo::TraerUnVehiculoOperaciones($args['id']);
          return $response->withJson($uno);
        });

  
$app->get('/cocheravacia', function ($request, $response) {
          $cocheravacia = Cochera::TraerUnaCocheraVacia();
          return  $response->withJson($cocheravacia);
        });

$app->get('/insertarOperacion', function ($request, $response) {
          $obj = isset($_GET['datosOperacion']) ? json_decode(json_encode($_GET['datosOperacion'])) : NULL;
          $rta = Vehiculo::InsertoOperacion($obj->nrocochera, $obj->hora, $obj->patente, $obj->nombre);
          return $response->withJson($rta);
        });


// $app->get('/traerunVehiculo', function ($request, $response) {
          

//         $obj1 = $_GET['patente'];
//         //  $obj = isset($_GET['autoExiste.patente']) ? json_decode(json_encode($_GET['autoExiste.patente'])) : NULL; 
//         //  $uno = Vehiculo::TraerUnVehiculo($obj->patente);
//         //  var_dump($obj);
//          var_dump($obj1);
//         //  return $response->withJson($uno);
//         return ($obj1);
//         });

$app->run();

