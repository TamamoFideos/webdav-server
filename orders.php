<?php
try{
    $url = "https://reqbin.com/echo/get/json";

    $json = file_get_contents($url);
    header('Content-Type: application/json; charset=utf-8');
    echo $json;
    
}
catch (\Throwable $t) {
    echo "caught!\n";
    echo $t->getMessage(), " at ", $t->getFile(), ":", $t->getLine(), "\n";
}
?>