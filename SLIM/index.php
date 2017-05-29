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
$app->post('/saludopost', function ($request, $response) {
    return $response->write("Hello post.");
});

// Run app
$app->run();
?>