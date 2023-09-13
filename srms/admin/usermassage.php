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
<html>
<head>
    <title>Messages</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <style>
        body {
            background-image: url('../image/background2.jpg');
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
        <a class="navbar-brand" href="admindash.php">ADMIN DASHBOARD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
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
        </div>
    </div>
</nav>

      <div class="main-content-header">
      <form>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="id_h1">Id</th>
                <th class="name_h1">Name</th> 
                <th class="email_h1">Email</th> 
                <th class="contact_h1">Contact No</th>
                <th class="massage_h1">Message</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('../dbcon.php');
            $sql="SELECT * FROM `user_massage`";
            $run=mysqli_query($con,$sql);
            if(mysqli_num_rows($run)>0)
            {
                while($row=mysqli_fetch_assoc($run))
                {
                    ?>
                    <tr>
                        <td class="id_h"><?php  echo $row['id']; ?></td>
                        <td class="name_h"><?php  echo $row['u_name']; ?></td> 
                        <td class="email_h"><?php  echo $row['u_email']; ?></td> 
                        <td class="contact_h"><?php  echo $row['u_contact']; ?></td> 
                        <td class="massage_h"><?php  echo $row['u_massage']; ?></td> 
                    </tr>     
                    <?php    
                }
            }
            else {
                echo "<tr><td colspan='5' class='text-center'>No Messages Found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</form>

      </div>
    </header>
</body>
</html>