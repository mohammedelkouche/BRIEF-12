<?php 
    include 'connect.php' ;
    if(isset($_GET['cancel'])){
        $cancel = $_GET['cancel'] ;
        $sql = "DELETE FROM employee WHERE SerialNumber = $cancel;";
        $conn->query($sql);
    }
    if($conn){
        header("location:index.php") ;
    }else{
        echo "Failed to Delet Record from Database" ;
    }

?>
