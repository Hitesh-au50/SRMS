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
    <title>Add Marks</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <style>
        body {
            background: url('../image/hand.jpg');
            height:100vh;
            background-size: cover;
            background-repeat: no-repeat;
        }

    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="admindash.php">Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aboutus.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactus.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <h2 class="text-muted text-center my-4">Step 1/2 : Enter the Details of Student</h2>
            <form method="post" enctype="multipart/form-data" action="secondstep.php">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4>Name</h4>
                <input type='text' name='name' placeholder='Enter Full Name' required class="form-control"/>
            </div>
            <div class="col-md-4">
                <h4>Class</h4>
                <input type='text' name='class' placeholder='Class' required class="form-control"/>
            </div>
            <div class="col-md-4">
                <h4>Roll No</h4>
                <input type='text' name='rollno' placeholder='Rollno' required class="form-control"/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <h4>Father's Name</h4>
                <input type='text' name='father' placeholder="Father's Name" required class="form-control"/>
            </div>
            <div class="col-md-4">
                <h4>Mother's Name</h4>
                <input type='text' name='mother' placeholder="Mother's Name" required class="form-control"/>
            </div>
            <div class="col-md-4">
                <h4>Mobile No</h4>
                <input type='text' name='mobile' placeholder='Mobile No' required class="form-control"/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-8">
                <h4>City</h4>
                <input type='text' name='village' placeholder='City' required class="form-control"/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <h4>Choose Image</h4>
                <input type="file" name="img" required class="form-control-file"/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12 text-center">
                <input type="submit" name="submit1" value="Next" class="btn btn-primary"/>
            </div>
        </div>
    </div>
</form>

        </div>
    </header>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
