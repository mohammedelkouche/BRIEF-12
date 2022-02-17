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

    // $sql = "SELECT SerialNumber, lastname, FirstName ,DateofBirth, Department,Salary,Job,Photo FROM employee";
    $sql = "SELECT * FROM employee" ;
    $result = $conn->query($sql);
    $conn->close();
?>