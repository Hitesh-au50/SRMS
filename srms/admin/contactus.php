<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <style>
        body {
            background: url('../image/contact.jpg');
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
                    <a class="nav-link" href="../login.php">ADMIN LOGIN</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



<div class="main-content-header">
  <h2 class="text-center">How can we help? Feel Free to Contact<br>Send Us a Message</h2>
    <form method='post'>
        <div class="container w-50">
            <div class="form-group">
                <label class="tblheading">Enter Your Name</label>
                <input type='text' class='form-control tbldata' name='name' placeholder='Full Name' Required/>
            </div>
            <div class="form-group">
                <label class="tblheading">Enter your Email Id</label>
                <input type='text' class='form-control tbldata' name='email' placeholder='Email Id' Required/>
            </div>
            <div class="form-group">
                <label class="tblheading">Enter your Contact No.</label>
                <input type='text' class='form-control tbldata' name='cont' placeholder='Contact No' Required/>
            </div>
            <div class="form-group">
                <label class="tblheading">Type your Message</label>
                <textarea class='form-control tbldata1' name="massage" placeholder='Type here...'></textarea>
            </div>
            <div class="text-center">
                <input type="submit" name='submit' value='SEND' class='btn btn-primary submit'/>
            </div>
        </div>
    </form>
</div>



    </header>
</body>
</html>


<?php
if(isset($_POST['submit']))
{
    include('../dbcon.php');
    $username=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['cont'];
    $massage=$_POST['massage'];
    $sql="INSERT INTO `user_massage`(`u_name`, `u_email`, `u_contact`, `u_massage`) VALUES ('$username','$email','$contact','$massage')";
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
      <script>
      alert('Your Message is sent to Admin');

     </script>
   <?php
    }
}

?>