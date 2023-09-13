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

<!DOCTYPE html>
<html>
<head>
    <title>Update Record</title>
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
    <div class="row clearfix">
        <ul class="navbar-nav main-nav animate slideInDown">
            <li class="nav-item">
                <a class="nav-link" href="../index.php"><b>HOME</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aboutus.php"><b>ABOUT</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contactus.php"><b>CONTACT</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admindash.php"><b>DASHBOARD</b></a>
            </li>
        </ul>
    </div>
</nav>

<div class="main-content-header">
<form method="post" action="updatemark.php">
    <table class="table table-bordered table1">
        <h1 class="text-center">Search Student and Update Marks</h1>
        <tr>
            <th scope="col">Enter Class:</th>
            <td><input type="text" name="class" class="form-control"/></td>
            <th scope="col">Student Rollno:</th>
            <td><input type="text" name="rollno" class="form-control"/></td>
        </tr>
        <tr>
            <td colspan="4" class="text-center">
                <input type="submit" value="Search" name="submit" class="btn btn-primary"/>
            </td>
        </tr>
    </table>
    <table class="table table-bordered table2">
        <thead class="thead-dark">
            <tr>
                <th scope="col" class="student_id">Id</th>
                <th scope="col" class="student_class">Name</th>
                <th scope="col" class="student_class">Father's Name</th>
                <th scope="col" class="student_class">Address</th>
                <th scope="col" class="student_class">Class</th>
                <th scope="col" class="student_class">Roll No</th>
                <th scope="col" class="student_edit">Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if(isset($_POST['submit']))
            {
                include('../dbcon.php');
                $class=$_POST['class'];
                $rollno=$_POST['rollno'];

                $sql="SELECT * FROM `student_data` WHERE `u_class`='$class'  AND `u_rollno`='$rollno' ";
                $run=mysqli_query($con,$sql);
                if(mysqli_num_rows($run)<0)
                {
                     ?>
                     <script>
                     alert('No Record Found');
                     </script>
                    <?php
                }
                else
                {

                 while($data=mysqli_fetch_assoc($run))  
                 {

            ?>
            <tr>
                <td class="student_class2"><?php  echo $data['id']; ?></td>
                <td class="student_class2"><?php  echo $data['u_name']; ?></td> 
                <td class="student_class2"><?php  echo $data['u_father']; ?></td> 
                <td class="student_class2"><?php  echo $data['u_village']; ?></td> 
                <td class="student_class2"><?php  echo $data['u_class']; ?></td> 
                <td class="student_class2"><?php  echo $data['u_rollno']; ?></td> 
                <td class="student_class2"><a href="updatemark_form.php?sid=<?php echo $data['u_rollno']; ?>" class="btn btn-info">Edit</a></td> 
            </tr>    

            <?php  
                 }

                }
              }

            ?>
        </tbody>
    </table>   
</form>

</div>

    </header>
</body>
</html>
