$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'localhost');
echo $response->getBody(); 