<?php
$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'localhost');
echo $response->getStatusCode(); // 200
echo $response->getBody();
?>