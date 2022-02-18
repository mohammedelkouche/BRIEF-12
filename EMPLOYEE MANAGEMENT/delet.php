<?php 
    include 'connect.php' ;
    if(isset($_GET['cancel'])){
        $cancel = $_GET['cancel'] ;
        // var_dump($cancel);
        $sql = "DELETE FROM employee WHERE SerialNumber = $cancel;";
        $conn->query($sql);
    }
    if($conn){
        echo "<p>Record Deleted from Database</p>" ;
    }else{
        echo "Failed to Delet Record from Database" ;
    }
?>
