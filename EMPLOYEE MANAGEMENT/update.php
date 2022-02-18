<?php
include 'connect.php' ;
$ID = $_GET['ID'] ;


if(isset($_POST['Update'])){
    $SerialNumber =   $_POST['SerialNumber'];
    $lastname     =   $_POST['lastname'];
    $FirstName    =   $_POST['FirstName'];
    $DateofBirth  =   $_POST['DateofBirth'];
    $Department   =   $_POST['Department'];
    $Salary       =   $_POST['Salary'];
    $Job          =   $_POST['Job'];
    $Photo        =   $_POST['Photo'];
    $query= " UPDATE employee SET 
        SerialNumber = '$SerialNumber' ,
        lastname = '$lastname' ,
        FirstName = '$FirstName' ,
        DateofBirth = '$DateofBirth' ,
        Department = '$Department' ,
        Salary = '$Salary' ,
        Job = '$Job' ,
        Photo = '$Photo' ,
        
        WHERE SerialNumber = $ID " ;
    $result = $conn->query($query);
    if($result){
        header("location:index.php") ;
    }else{
        echo 'please check your Query' ;
    }
}
?>
