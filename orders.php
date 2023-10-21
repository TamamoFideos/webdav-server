<?php
try{
    $ch = curl_init(); 

    // Set options
    curl_setopt($ch, CURLOPT_URL, "localhost");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false); 
    
    // Execute
    $result = curl_exec($ch);
    
    // Close curl session
    curl_close($ch);
    
    // Output result
    echo $result;
    
}
catch (\Throwable $t) {
    echo "caught!\n";
    echo $t->getMessage(), " at ", $t->getFile(), ":", $t->getLine(), "\n";
}
?>