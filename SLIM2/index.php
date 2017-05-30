<?php
require 'vendor/autoload.php';

// Create and configure Slim app
$config = ['settings' => [
    'addContentLengthHeader' => false,
]];
$app = new \Slim\App($config);

// Define app routes
$app->get('/saludoget', function ($request, $response) {
    return $response->write("Hello get");
});
$app->get('/saludoget2', function ($request, $response) {
    return $response->write("Hello get");
});
$app->post('/saludopost', function ($request, $response) {
    return $response->write("Hello post.");
});
$app->get('/todo/[{id}]', function ($request, $response, $args) {
         $sth = $this->db->prepare("SELECT * FROM tasks WHERE id=:id");
        $sth->bindParam("id", $args['id']);
        $sth->execute();
        $todos = $sth->fetchObject();
        return $this->response->withJson($todos);
    });

// Run app
$app->run();
?>