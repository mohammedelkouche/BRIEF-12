<?php 
    include 'connect.php' ;
    // if(isset($_GET['delet'])){
        $cancel = $_GET['cancel'] ;
        $sql = "DELETE FROM employee WHERE SerialNumber = '$cancel';";
        $conn->query($sql);
    // }
    if($conn){
        echo "<p>Record Deleted from Database</p>" ;
    }else{
        echo "Failed to Delet Record from Database" ;
    }
?>
