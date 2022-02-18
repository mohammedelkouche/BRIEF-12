 <?php
    include 'connect.php';
    // $sql = "SELECT SerialNumber, lastname, FirstName ,DateofBirth, Department,Salary,Job,Photo FROM employee";
    $sql = "SELECT * FROM employee" ;
    $result = $conn->query($sql);
    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.php">
    <title>Document</title>
</head>
<body>
    <?php 
        if ($result->num_rows > 0){
            echo "<table>
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
                        <td>".$row["Photo"]."</td>
                        <td><a href= 'edite.php?edit=".$row['SerialNumber']." ' > EDIT </a>
                            <a href= 'delet.php?cancel=".$row['SerialNumber']." ' > DELETE </a>"."</td>
                    </tr>";
            }
            echo "</table>";
        }else{
            echo "0 results";
            }   
    ?>
</body>
</html>