<?php
    include 'connect.php' ; 
    $update = $_GET['update'] ;
    $query = "SELECT * FROM employee WHERE SerialNumber = '$update'" ;
    $result = $conn->query($query) ;
    while($row = $result->fetch_assoc()){
        $SerialNumber = $_POST['SerialNumber'];
        $lastname = $_POST['lastname'];
        $FirstName = $_POST['FirstName'];
        $DateofBirth = $_POST['DateofBirth'];
        $Department = $_POST['Department'];
        $Salary = $_POST['Salary'];
        $Job = $_POST['Job'];
        $Photo = $_POST['Photo'];
        $folderPhoto = 'image/'.$Photo ; 
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // if(isset($message)){
        //     foreach($message as $message){
        //         echo'<span>'.$message.'</span>';
        //     }
        // }
    ?>
    <!-- <form action="<?php //$_SERVER['PHP_SELF']?>" method = "POST"> -->
    <form action="update.php" method = "POST">
        <fieldset>
            <span>SerialNumber</span>
            <br>
            <input type="text" name = "SerialNumber" placeholder = "SerialNumber" value="<?php echo $SerialNumber ?> ">
            <br>
            <span>lastname</span>
            <br>
            <input type="text" name = "lastname" placeholder = "lastname" value="<?php echo $lastname ?> ">
            <br>
            <span>First Name</span>
            <br>
            <input type="text" name = "FirstName" placeholder = "First Name" value="<?php echo $FirstName ?> ">
            <br>
            <span>Date of Birth</span>
            <br>
            <input type="date" name = "DateofBirth" placeholder = "Date of Birth" value="<?php echo $DateofBirth ?> ">
            <br>
            <span>Department</span>
            <br>
            <input type="text" name = "Department" placeholder = "Department" value="<?php echo $Department ?> ">
            <br>
            <span>Salary</span>
            <br>
            <input type="text" name = "Salary" placeholder = "Salary" value="<?php echo $Salary ?> ">
            <br>
            <span>Job</span>
            <br>
            <input type="text" name = "Job" placeholder = "Job" value="<?php echo $Job ?> ">
            <br>
            <span>Photo :</span>
            <br>
            <input type="file" name = "Photo" placeholder = "Photo" value="<?php echo $Photo ?> ">
            <br>
            <br>
            <input type="submit" name = "update" value = "Update"  >
        </fieldset>    
    </form>    
</body>
</html>