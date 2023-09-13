<?php
session_start();
if(isset($_SESSION['uid']))
{
	header('location:admin/admindash.php');	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login here</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="csss/login.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <style>
        body {
            background-image: url('./image/background4.jpg');
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
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="admin/aboutus.php">ABOUT</a></li>
                    <li class="nav-item"><a class="nav-link" href="admin/contactus.php">CONTACT</a></li>
                </ul>
            </div>
        </nav>
        <div class="container mt-5">
            <form action="login.php" method="post" class="w-50 mx-auto">
                <h1 class="text-center mb-4">Admin Login</h1>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Enter Username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
                </div>
                <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
                </div>
            </form>
        </div>
    </header>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    include('dbcon.php');
    $username=$_POST['username'];
    $password=$_POST['password'];
    $qry="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
    $run=mysqli_query($con,$qry);
    $row=mysqli_num_rows($run);
    if($row<1)
    {
        ?>
        <script>
        alert('Username or Password Not Match');
        window.open('login.php','_self');
        </script>
       <?php
    }
    else
    {
        $data=mysqli_fetch_assoc($run);
        $id=$data['id'];
        $_SESSION['uid']=$id;
        header('location:admin/admindash.php');
    }
}
?>