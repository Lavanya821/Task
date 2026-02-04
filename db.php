<?php

    define("HOSTNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASE", "crud");

    $connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);
    
    if(!$connection){
        die("Connection Failed");
    }
    else{
        echo "yess";
    }

    header('Content-Type: application/json');

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            echo json_encode(['status'=>'error']);
            exit;
        }

        echo json_encode([
            'status' => 'success',
            'message' => 'Saved successfully'
        ]);

?>