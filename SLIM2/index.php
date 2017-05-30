<?php
require 'vendor/autoload.php';
require 'clases/AccesoDatos.php';

// Create and configure Slim app
$config = ['settings' => [
    'addContentLengthHeader' => false,
]];
$app = new \Slim\App($config);

// Define app routes
$app->get('/traertodos', function ($request, $response) {
    $objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
    $consulta = $objetoAcceso->RetornarConsulta('SELECT * FROM usuario');
    $consulta->execute();
    $todos = $consulta->fetchAll();
    return $response->withJson($todos);
});
$app->get('/traeruno/[{id}]', function ($request, $response, $args) {
          $objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
          $consulta = $objetoAcceso->RetornarConsulta('SELECT ID, CLAVE, MAIL, ESTADO FROM usuario WHERE id=:id');
          $consulta->bindParam("id", $args['id']);
           $consulta->execute();
            $uno = $consulta->fetchAll();
            return $response->withJson($uno);
        });
$app->post('/alta', function ($request, $response) {
    return $response->write("alta.");
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