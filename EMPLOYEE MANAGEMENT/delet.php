<?php 
    include 'connect.php' ;
    if(isset($_GET['delet'])){
        $cancel = $_GET['delete'] ;
        $conn->query("DELETE FROM employee WHERE SerialNumber = $cancel");
    }
?>
