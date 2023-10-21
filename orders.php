<?php
try{
    $url = 'localhost'; 
    $headers = array(
    'Authorization: Bearer TOKEN',
    'Accept: text/html'
    );

    $context = stream_context_create([
    'http' => [
        'header' => $headers
    ]
    ]);

    $response = file_get_contents($url, false, $context);

    echo $response;
    
}
catch (\Throwable $t) {
    echo "caught!\n";
    echo $t->getMessage(), " at ", $t->getFile(), ":", $t->getLine(), "\n";
}
?>