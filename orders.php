<?php 
    header("Access-Control-Allow-Origin: ");
    $files = [];

    if(isset($_GET['id'])){
        $cliente = $_GET['id'];
    }

    foreach(glob('/var/www/webdav/client_id_'.$cliente.'/') as $file){
        echo    ''.$file.'';
        array_push($files, basename($file));
    }

    echo json_encode($files);
?>
