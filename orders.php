<?php

use GuzzleHttp;
try{
    require './guzzle-7.8/src/Client.php';
    $client = new Client();
    $response = $client->request('GET', 'localhost');
    echo $response->getStatusCode(); // 200
    echo $response->getBody();
}
catch (\Throwable $t) {
    echo "caught!\n";
    echo $t->getMessage(), " at ", $t->getFile(), ":", $t->getLine(), "\n";
}
?>