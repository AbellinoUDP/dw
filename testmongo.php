<?php
require 'vendor/autoload.php';



$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->redsocial->pruebacollection;

$insertOneResult = $collection->insertOne([
    'user' => "prueba user",
    'fechaora' => time(),
]);

$cursor = $collection->find();

foreach ($cursor as $usuario) {
   var_dump($usuario);
};


?>