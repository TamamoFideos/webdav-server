<?php
try{
    $url = "localhost";

    $json = file_get_contents($url);
    header('Content-Type: text/html; charset=utf-8');
    echo $json;
    
}
catch (\Throwable $t) {
    echo "caught!\n";
    echo $t->getMessage(), " at ", $t->getFile(), ":", $t->getLine(), "\n";
}
?>