<?php
    include 'connect.php' ; 
    $update = $_GET['edit'] ;
        // select row where i click
        $query = "SELECT * FROM employee WHERE SerialNumber = '$update' " ;
        $result = $conn->query($query) ;
        while($row = $result->fetch_assoc()){     
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
<body>
    <?php
        include 'header.php' ;
        echo"<div class='page-title'>
                <h1>Edit Employee</h1> 
            </div>" ;
    ?>
    <form action="update.php?ID=<?php echo $row['SerialNumber'] ?>" enctype="multipart/form-data" method = "POST">
        <fieldset>
            <span>SerialNumber</span>
            <br>
            <input type="text" name = "SerialNumber" placeholder = "SerialNumber" value="<?php echo $row['SerialNumber'] ?> ">
            <br>
            <span>lastname</span>
            <br>
            <input type="text" name = "lastname" placeholder = "lastname" value="<?php echo $row['lastname'] ?> ">
            <br>
            <span>First Name</span>
            <br>
            <input type="text" name = "FirstName" placeholder = "First Name" value="<?php echo $row['FirstName'] ?> ">
            <br>
            <span>Date of Birth</span>
            <br>
            <input type="date" name = "DateofBirth" placeholder = "Date of Birth" valueAsDate="<?php echo $row['DateofBirth'] ?> ">
            <br>
            <span>Department</span>
            <br>
            <input type="text" name = "Department" placeholder = "Department" value="<?php echo $row['Department'] ?> ">
            <br>
            <span>Salary</span>
            <br>
            <input type="text" name = "Salary" placeholder = "Salary" value="<?php echo $row['Salary'] ?> ">
            <br>
            <span>Job</span>
            <br>
            <input type="text" name = "Job" placeholder = "Job" value="<?php echo $row['Job'] ?> ">
            <br>
            <span>Photo :</span>
            <br>
            <input type="file" accept="image/png,image/jpeg,image/jpg," name = "Photo" placeholder = "Photo" value="<?php echo $row['Photo'] ?> ">
            <br>
            <br>
            <input type="submit" name = "Update" value = "UPDATE"  >
        </fieldset>    
    </form>   
    <?php  
        };
    ?> 
</body>
</html>