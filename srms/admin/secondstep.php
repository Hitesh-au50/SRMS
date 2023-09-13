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
    <title>Homepage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <style>
        body {
            background: url('../image/hand.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
        }
        .main-content-header {
            margin-top: 20px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
        }
        .table1, .table2, .table4 {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table1 th, .table1 td, .table2 th, .table2 td, .table4 th, .table4 td {
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
        .h_3, .h3 {
            margin-top: 20px;
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
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
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
            </ul>
        </div>
    </div>
</nav>

    <div class="container">
        <div class="main-content-header">
            <form method="post" action="thirdstep.php">
                <h2>Step 2/2 : Add Exam Mark</h2>
                <input type="hidden" name="class" class="class" value="<?php echo $_POST['class']; ?>" required/>
                <input type="hidden" name="rollno" class="rollno" value="<?php echo $_POST['rollno']; ?>" required/>
                <table class="table1">
                    <span><h4 class="h_3">First Exam (A)</h4></span>
                    <tr>
                        <th>Hindi</th> <th>English</th> <th>Math</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="hindi1" placeholder="Hindi" required/></td>
                        <td><input type="text" name="english1" placeholder="English" required/></td>
                        <td><input type="text" name="math1" placeholder="Math" required/></td>
                    </tr>
                </table>
                <table class="table2">
                    <tr>
                        <th>Physics</th> <th>Chemistry</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="physics1" placeholder="Physics" required/></td>
                        <td><input type="text" name="chemestry1" placeholder="Chemistry" required/></td>
                    </tr>
                </table>
                <span><h4 class="h3">Second Exam (B)</h4></span>
                <table class="table4">
                    <tr>
                        <th>Hindi</th> <th>English</th> <th>Math</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="hindi2" placeholder="Hindi" required/></td>
                        <td><input type="text" name="english2" placeholder="English" required/></td>
                        <td><input type="text" name="math2" placeholder="Math" required/></td>
                    </tr>
                </table>
                <table class="table2">
                    <tr>
                        <th>Physics</th> <th>Chemistry</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="physics2" placeholder="Physics" required/></td>
                        <td><input type="text" name="chemestry2" placeholder="Chemistry" required/></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="submit"/></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
if(isset($_POST['submit1']))
{ 
    include('../dbcon.php');
    $username=$_POST['name'];
    $class=$_POST['class'];
    $rollno=$_POST['rollno'];
    $father=$_POST['father'];
    $mother=$_POST['mother'];
    $mobile=$_POST['mobile'];
    $village=$_POST['village'];
    
    $imagename=$_FILES['img']['name'];
    $tempname=$_FILES['img']['tmp_name'];
    move_uploaded_file($tempname,"../dataimg/$imagename");
    
    $sql="INSERT INTO `Student_data`(`u_name`, `u_class`, `u_rollno`, `u_father`, `u_mother`, `u_mobile`, `u_village`, `u_image`) VALUES ('$username','$class','$rollno','$father','$mother','$mobile','$village','$imagename')";
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('1step Complete and this is second  Step');
        </script>
        <?php
    }
    else
    {
       ?>
        <script>
        alert('Failed');
        </script>
        <?php 
    }
}

?>
