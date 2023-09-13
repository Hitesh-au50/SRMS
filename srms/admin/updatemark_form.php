<?php
session_start();
				
				if(isset($_SESSION['uid']))
				{
					echo "";					
				}
				else
				{
					header('location: ../login.php');
				}
				
?>
<?php
include('../dbcon.php');
$rollno=$_GET['sid'];


$sql="SELECT * FROM `student_data` WHERE `u_rollno`='$rollno'";
$run=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($run);

$class=$row['u_class'];

$sql2="SELECT * FROM `user_mark` WHERE `u_class`='$class'";
$run2=mysqli_query($con,$sql2);
$data=mysqli_fetch_assoc($run2);

//combine Table///


?>
<html>
<head>
    <title>Update Mark Detail</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <style>
        body {
            background-image: url('../image/background1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="admindash.php"><b>DASHBOARD</b></a>
                </li>
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
          
      <form method="post" action="update_mark_data.php">
    <div class="container mt-4">
        <h2 class="text-center">Update Student Marks</h2>
        <div class="row">
            <div class="col-md-6">
                <table class="table table-bordered">
                    <tr>
                        <th>Student Name:</th>
                        <td><?php echo $row['u_name']; ?></td>
                    </tr>
                    <tr>
                        <th>Student Class:</th>
                        <td><?php echo $row['u_class']; ?></td>
                    </tr>
                    <tr>
                        <th>Student Rollno:</th>
                        <td><?php echo $row['u_rollno']; ?></td>
                    </tr>
                </table>
            </div>
        </div>

        <table class="table table-bordered table1">
            <thead>
                <tr>
                    <th colspan="3" class="text-center">First Exam (A)</th>
                </tr>
                <tr>
                    <th>Hindi</th>
                    <th>English</th>
                    <th>Math</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type='text' name='hindi1' value="<?php echo $data['u_hindi1']; ?>" class="form-control"
                            required></td>
                    <td><input type='text' name='english1' value="<?php echo $data['u_english1']; ?>" class="form-control"></td>
                    <td><input type='text' name='math1' value="<?php echo $data['u_math1']; ?>" class="form-control"
                            required></td>
                </tr>
            </tbody>
        </table>

        <table class="table table-bordered table2">
            <thead>
                <tr>
                    <th>Physics</th>
                    <th>Chemistry</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type='text' name='physics1' value="<?php echo $data['u_physics1']; ?>"
                            class="form-control" required></td>
                    <td><input type='text' name='chemestry1' value="<?php echo $data['u_chemestry1']; ?> " class="form-control" required/></td>
                </tr>
            </tbody>
        </table>

        <table class="table table-bordered table3">
            <thead>
                <tr>
                    <th colspan="3" class="text-center">Second Exam (B)</th>
                </tr>
                <tr>
                    <th>Hindi</th>
                    <th>English</th>
                    <th>Math</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type='text' name='hindi2' value="<?php echo $data['u_hindi2']; ?>" class="form-control"
                            required></td>
                    <td><input type='text' name='english2' value="<?php echo $data['u_english2']; ?>" class="form-control"
                            required></td>
                    <td><input type='text' name='math2' value="<?php echo $data['u_math2']; ?>" class="form-control"
                            required></td>
                </tr>
            </tbody>
        </table>

        <table class="table table-bordered table4">
            <thead>
                <tr>
                    <th>Physics</th>
                    <th>Chemistry</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type='text' name='physics2' value="<?php echo $data['u_physics2']; ?>"
                            class="form-control" required></td>
                    <td><input type="text" name='chemestry2' value="<?php echo $data['u_chemestry']; ?>" class="form-control" required />
</td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="hidden" name="rollno" value="<?php echo $row['u_rollno']; ?>">
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</form>

      </div>
    </header>
    
</body>
</html>