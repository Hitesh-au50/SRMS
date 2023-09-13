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
    <title>Delete Mark</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <style>
        body {
            background: url('../image/background1.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
        }
        .main-content-header {
            margin-top: 20px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
        }
        .table1, .table2 {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table1 th, .table1 td, .table2 th, .table2 td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        .submit {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .submit:hover {
            background-color: #0056b3;
        }
        .student_id, .student_edit {
            width: 5%;
        }
        .student_class, .student_class2 {
            width: 15%;
        }
        .student_edit a {
            color: red;
            text-decoration: none;
        }
        .student_edit a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.php">Contact Us</a>
                    </li>
                    <li class="nav-item logout">
                        <a class="nav-link" href="admindash.php">Dashboard</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="main-content-header">
            <form method="post" action="deleteform.php">
                <table class="table1">
                    <h1 class="search" align="center">Search Student and Delete his Mark</h1>
                    <tr>
                        <th>Student Class</th>
                        <td><input type="text" name="class" class="form-control"/></td>
                        <th>Student Roll No</th>
                        <td><input type="text" name="rollno" class="form-control"/></td>
                        <th><input type="submit" value="Search" name="submit" class="submit"/></th>
                    </tr>
                </table>
                <table class="table2">
                    <tr>
                        <th class="student_id">Id</th>
                        <th class="student_class">Name</th>
                        <th class="student_class">Father's Name</th>
                        <th class="student_class">Address</th>
                        <th class="student_class">Class</th>
                        <th class="student_class">Roll No</th>
                        <th class="student_edit">Edit</th>
                    </tr>
                    <?php
                    if(isset($_POST['submit'])) {
                        include('../dbcon.php');
                        $class = $_POST['class'];
                        $rollno = $_POST['rollno'];
                        
                        $sql = "SELECT * FROM `student_data` WHERE `u_class`='$class' AND `u_rollno`='$rollno'";
                        $run = mysqli_query($con, $sql);
                        if(mysqli_num_rows($run) > 0) {
                            while($data = mysqli_fetch_assoc($run)) {
                                ?>
                                <tr>
                                    <th class="student_class2"><?php echo $data['id']; ?></th>
                                    <th class="student_class2"><?php echo $data['u_name']; ?></th>
                                    <th class="student_class2"><?php echo $data['u_father']; ?></th>
                                    <th class="student_class2"><?php echo $data['u_village']; ?></th>
                                    <th class="student_class2"><?php echo $data['u_class']; ?></th>
                                    <th class="student_class2"><?php echo $data['u_rollno']; ?></th>
                                    <th class="student_class2"><a href="delete_data.php?sid=<?php echo $data['u_rollno']; ?>">Delete</a></th>
                                </tr>
                                <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="7">No Record Found</td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </table>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
