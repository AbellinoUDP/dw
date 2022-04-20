<?php

require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->compraventa->users;

$insertOneResult = $collection->insertOne([     'email' => "alessio@email.com",   'nombre' => "Alessio",    'password' => "1234", ]);
$insertOneResult = $collection->insertOne([     'email' => "juan@email.com",   'nombre' => "Juan",    'password' => "2345", ]);
$insertOneResult = $collection->insertOne([     'email' => "pedro@email.com",   'nombre' => "Pedro",    'password' => "3456", ]);

$cursor = $collection->find();

foreach ($cursor as $usuario) {
   var_dump($usuario);
};

?>
