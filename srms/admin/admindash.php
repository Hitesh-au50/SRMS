<?php
session_start();

if(isset($_SESSION['uid'])) {
    echo "";
} else {
    header('location: ../login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <style>
        body {
            background: url('../image/background5.jpg');
            height: 100vh;
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus.php">CONTACT</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">LOGOUT</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

        <div class="main-content-header">
            <h1 class="text-center">Admin Dashboard</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3><a href="addmark.php">-> Add Marks of Student </a></h3>
                        <h3><a href="updatemark.php">-> Update Student Marks </a></h3>
                        <h3><a href="deleteform.php">-> Delete the Marks of Student </a></h3>
                        <h3><a href="allstudentdata.php">-> Data of all Students </a></h3>
                        <h3><a href="usermassage.php">-> Messages by Student</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
