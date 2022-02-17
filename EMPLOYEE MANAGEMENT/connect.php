<?php   
    $host = "localhost" ;
    $databaseName = "employee -management" ;
    $username = "root" ;
    $password = "" ;

        // Create connection
    $conn = new mysqli($host, $username, $password, $databaseName);
        // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    
?>