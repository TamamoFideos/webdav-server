<?php

use GuzzleHttp;
try{
    require './guzzle-7.8/src/Client.php';
    
}
catch (\Throwable $t) {
    echo "caught!\n";
    echo $t->getMessage(), " at ", $t->getFile(), ":", $t->getLine(), "\n";
}
?>