<?php
    include 'connect.php' ;
    if (isset($_POST["submit"])){
        // if(empty($SerialNumber)|| empty($lastname) || empty($FirstName) || empty($DateofBirth) || empty($Department) ||empty($Salary) || empty($Job) || empty($Photo)){
        //     $message[] = 'please fill out all' ;
        // }else{
            $SerialNumber = $_POST['SerialNumber'];
            $lastname = $_POST['lastname'];
            $FirstName = $_POST['FirstName'];
            $DateofBirth = $_POST['DateofBirth'];
            $Department = $_POST['Department'];
            $Salary = $_POST['Salary'];
            $Job = $_POST['Job'];
            $Photo = $_POST['Photo'];
            $folderPhoto = 'image/'.$Photo ;
            $insertdata = "INSERT INTO employee (SerialNumber,lastname,FirstName,DateofBirth,Department,Salary,Job,Photo ) 
                            VALUES ('$SerialNumber','$lastname','$FirstName','$DateofBirth','$Department','$Salary','$Job','$Photo')" ;
            if($conn->query($insertdata) === TRUE){
                echo "Record Inserted Succefully" ;
            }else{
                echo "Unable to Inserdt Data" ;
            }
        // }
        

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
    <form action="insert.php" method = "POST">
        <fieldset>
            <span>SerialNumber</span>
            <br>
            <input type="text" name = "SerialNumber" placeholder = "SerialNumber">
            <br>
            <span>lastname</span>
            <br>
            <input type="text" name = "lastname" placeholder = "lastname">
            <br>
            <span>First Name</span>
            <br>
            <input type="text" name = "FirstName" placeholder = "First Name">
            <br>
            <span>Date of Birth</span>
            <br>
            <input type="date" name = "DateofBirth" placeholder = "Date of Birth">
            <br>
            <span>Department</span>
            <br>
            <input type="text" name = "Department" placeholder = "Department">
            <br>
            <span>Salary</span>
            <br>
            <input type="text" name = "Salary" placeholder = "Salary">
            <br>
            <span>Job</span>
            <br>
            <input type="text" name = "Job" placeholder = "Job">
            <br>
            <span>Photo :</span>
            <br>
            <input type="file" name = "Photo" placeholder = "Photo" >
            <br>
            <br>
            <input type="submit" name = "submit" value = "register" >
        </fieldset>    
    </form>    
</body>
</html>