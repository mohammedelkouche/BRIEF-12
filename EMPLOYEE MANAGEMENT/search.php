<?php
    include 'connect.php' ;
    if (isset($_POST["submit"])){
    $query = $_GET['search']; 
	// gets value sent over search form
    $sql = "SELECT * FROM employee
			WHERE (`SerialNumber` LIKE '%".$query."%')
            OR (`Department` LIKE '%".$query."%') 
            OR (`lastname` LIKE '%".$query."%')";
    $result = $conn->query($sql) ;
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
<body>
<?php 
    include 'header.php' ;
    echo"<div class='page-title'>
            <h1>Search Employee </h1> 
        </div>" ;
    echo"<form action='search.php' method='GET'>
            <div class='col-md-6 col-lg-6 clo-11 mx-auto my-auto search-box'>
                <div class='input-group form-container'>
                    <input type='text' name='search' class='form-control search-input' placeholder='Keyword' autofocus='autofocus' >
                    <input type='submit' name='submit' class='btn btn-primary ' value='Search' >
                </div>   
            </div>
        </form> "  ;
        if ($result->num_rows > 0){
            echo "<table class='table table-bordered table-hover table-dark table-striped '>
                    <tr>
                        <th>SerialNumber</th>
                        <th>lastname</th>
                        <th>First Name</th>
                        <th>Date of Birth</th>
                        <th>Department</th>
                        <th>Salary</th>
                        <th>Job</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>";
                // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["SerialNumber"]."</td>
                        <td>".$row["lastname"]."</td>
                        <td>".$row["FirstName"]."</td>
                        <td>".$row["DateofBirth"]."</td> 
                        <td>".$row["Department"]."</td>
                        <td>".$row["Salary"]."</td>
                        <td>".$row["Job"]."</td>
                        <td>"."<img src='image/".$row["Photo"]."' height='100' width='150'></td>
                        <td><a href= 'edite.php?edit=".$row['SerialNumber']." ' class= 'btn btn-success'> <i class='fa-solid fa-user-pen'></i> EDIT </a>
                            <a href= 'delet.php?cancel=".$row['SerialNumber']." ' class= 'btn btn-danger'> <i class='fa-solid fa-trash-list'></i> DELETE </a>"."</td>
                    </tr>";
            }
            echo "</table>";
        }else{
            echo "0 results";
        } 
        include 'buttonhome.php' ;
    ?>
</body>
</html>