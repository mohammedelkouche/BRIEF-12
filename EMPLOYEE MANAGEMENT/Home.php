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
    ?>
    <div class="d-flex">
        <section id= "sidebare"  >
            <div class="list-group list-group-flush my-3 "  >
                <a href="#" class="nav-link h3 my-2">Side Nav</a>
                <a href="index.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Employee List</a>
                <a href="insert.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Add Employee</a>
                <a href="search.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Search employee</a>
            </div> 
        </section>
        <section id="main">
            <div >
                <h2>More than a simple HR portal, <br>EmployeeConnect is the first entry point to your organisation</h2>
                <p> EmployeeConnect provides a holistic approach to the management <br>of the onboarding  prepare employee statements</p>
            </div>
        </section> 
    </div>
        <!-- <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
            <ul class="nav flex-column text-white w-100">
                <a href="#" class="nav-link h3 my-2">
                Side Nav
                </a>
                <li href="index.php" class="nav-link">
                <span class="mx-2">Home</span>
                </li>
                <li href="#" class="nav-link">
                <span class="mx-2">About</span>
                </li>
                <li href="#" class="nav-link">
                <span class="mx-2">Contact</span>
                </li>
            
            </ul> 
        </div> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>