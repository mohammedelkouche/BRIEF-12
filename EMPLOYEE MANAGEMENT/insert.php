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
            $Photo = $_FILES['Photo']['name'];
            $Photo_tm_name = $_FILES["Photo"]["tmp_name"];
            $Photo_tm_folder = 'image/'.$Photo;
            $insertdata = "INSERT INTO employee (SerialNumber,lastname,FirstName,DateofBirth,Department,Salary,Job,Photo) 
                            VALUES ('$SerialNumber','$lastname','$FirstName','$DateofBirth','$Department','$Salary','$Job','$Photo')" ;
                     $treeu =  $conn->query($insertdata);
                    
                        move_uploaded_file($Photo_tm_name,$Photo_tm_folder) ;
            // idon't now why its not work
            // if($conn->query($insertdata) === TRUE){
            //     echo "Record Inserted Succefully" ;
            // }else{
            //     echo "Unable to Inserdt Data" ;
            // }
        // }
        

    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include 'Bootstrap-css.php'
    ?>
    <title>Document</title>
</head>
<body id="body-form">
    <?php
        include 'header.php' ;
        echo"<div class='page-title'>
            <h1>Add Employee</h1> 
        </div>" ;
    ?>
    <?php
        // if(isset($message)){
        //     foreach($message as $message){
        //         echo'<span>'.$message.'</span>';
        //     }
        // }
    ?>
    <div id="div-form">
    <form action="insert.php" enctype="multipart/form-data" method = "POST">
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
            <input type="file" accept="image/png,image/jpeg,image/jpg" name = "Photo" placeholder = "Photo" >
            <br>
            <br>
            <input type="submit" name = "submit" value = "register" >
        </fieldset>    
    </form>    

    </div>
    <?php
        include 'buttonhome.php' ;
    ?>
</body>
</html>