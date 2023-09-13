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
    <title>All Student Detail</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <style>
        body {
            background: url('../image/plane.jpg');
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
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="admindash.php"><b>ADMIN DASHBOARD</b></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php"><b>HOME</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php"><b>ABOUT</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus.php"><b>CONTACT</b></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

        <div class="main-content-header">
            <h2 class="text-center text-muted my-3">Student Record</h2>
            <form class="my-5">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th >Id</th>
                <th >Name</th> 
                <th >Class</th> 
                <th >Roll No</th>
                <th >Father Name</th>
                <th >Mother Name</th>
                <th >Village</th>
                <th >Mobile No</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('../dbcon.php');
            $sql="SELECT * FROM `student_data`";
            $run=mysqli_query($con,$sql);
            if(mysqli_num_rows($run) > 0) {
                while($row=mysqli_fetch_assoc($run)) {
                    ?>
                    <tr>
                        <td > <?php echo $row['id']; ?></td>
                        <td > <?php echo $row['u_name']; ?></td> 
                        <td > <?php echo $row['u_class']; ?></td> 
                        <td > <?php echo $row['u_rollno']; ?></td> 
                        <td > <?php echo $row['u_father']; ?></td> 
                        <td > <?php echo $row['u_mother']; ?></td>
                        <td > <?php echo $row['u_village']; ?></td> 
                        <td ><?php echo $row['u_mobile']; ?></td> 
                    </tr>     
                    <?php    
                }
            } else {
                echo "<tr><td colspan='8'>No Record Found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</form>

        </div>
    </header>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
