
<?php
if(isset($_POST['submit']))
{

	include('dbcon.php');
	
	$standerd=$_POST['std'];
	$rollno =$_POST['rollno'];
	$sql="SELECT * FROM `student_data` WHERE `u_class`='$standerd' AND `u_rollno`='$rollno'";
    $sql2="SELECT * FROM `user_mark` WHERE `u_class`='$standerd' AND `u_rollno`='$rollno'";
$run=mysqli_query($con,$sql);
$run2=mysqli_query($con,$sql2);
   $row=mysqli_num_rows($run2);
   $data2=mysqli_fetch_assoc($run2);
       
if(mysqli_num_rows($run)>0)
{
$data=mysqli_fetch_assoc($run);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <style>
        body {
            background-image: url('./image/background3.jpg');
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
        <ul class="navbar-nav main-nav animate__animated animate__slideInDown">
            <li class="nav-item mx-2"><a class="nav-link" href="index.php"><b>HOME</b></a></li>
            <li class="nav-item mx-2"><a class="nav-link" href="admin/aboutus.php"><b>ABOUT</b></a></li>
            <li class="nav-item"><a class="nav-link" href="admin/contactus.php"><b>CONTACT</b></a></li>
        </ul>
        <ul class="navbar-nav main-nav animate__animated animate__slideInDown ms-auto">
            <li class="nav-item"><a class="nav-link" href="login.php"><b>ADMIN LOGIN</b></a></li>
        </ul>
    </div>
</nav>


      <div class="container w-75 mt-5">
        <form method="post" action="result.php">
        <table class="table table-bordered table-striped">
    <tr>
        <td colspan="2" class="text-center">
            <img src="dataimg/<?php echo $data['u_image']; ?>" class="img-fluid rounded-circle" />
        </td>
    </tr>
    <tr>
        <th>Name :</th>
        <td><?php echo $data['u_name']; ?></td>
    </tr>
    <tr>
        <th>Class :</th>
        <td><?php echo $data2['u_class']; ?></td>
    </tr>
    <tr>
        <th>Roll No :</th>
        <td><?php echo $data['u_rollno']; ?></td>
    </tr>
    <tr>
        <th>Father Name :</th>
        <td><?php echo $data['u_father']; ?></td>
    </tr>
    <tr>
        <th>City Name :</th>
        <td><?php echo $data['u_village']; ?></td>
    </tr>
</table>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Suject</th>
            <th>Half Yearly Exam (Score)</th>
            <th>Annual Exam (Score)</th>
            <th>Total</th>
            <th>Max. Marks</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>Hindi</th>
            <td><?php echo $data2['u_hindi1']; ?></td>
            <td><?php echo $data2['u_hindi2']; ?></td>
            <td><?php echo $total1 = $data2['u_hindi1'] + $data2['u_hindi2']; ?></td>
            <td>200</td>
        </tr>
        <tr>
            <th>English</th>
            <td><?php echo $data2['u_english1']; ?></td>
            <td><?php echo $data2['u_english2']; ?></td>
            <td><?php echo $total2 = $data2['u_english1'] + $data2['u_english2']; ?></td>
            <td>200</td>
        </tr>
        <tr>
            <th>Math</th>
            <td><?php echo $data2['u_math1']; ?></td>
            <td><?php echo $data2['u_math2']; ?></td>
            <td><?php echo $total3 = $data2['u_math1'] + $data2['u_math2']; ?></td>
            <td>200</td>
        </tr>
        <tr>
            <th>Physics</th>
            <td><?php echo $data2['u_physics1']; ?></td>
            <td><?php echo $data2['u_physics2']; ?></td>
            <td><?php echo $total4 = $data2['u_physics1'] + $data2['u_physics2']; ?></td>
            <td>200</td>
        </tr>
        <tr>
            <th>Chemistry</th>
            <td><?php echo $data2['u_chemestry1']; ?></td>
            <td><?php echo $data2['u_chemestry']; ?></td>
            <td><?php echo $total5 = $data2['u_chemestry1']+$data2['u_chemestry']; ?></td>
            <td>200</td>
        </tr>
        <tr>
            <th>Total</th>
            <td><?php echo $data2['u_hindi1']+$data2['u_english1']+$data2['u_math1']+$data2['u_physics1']+$data2['u_chemestry1']; ?></td>
            <td><?php echo $data2['u_hindi2']+$data2['u_english2']+$data2['u_math2']+$data2['u_physics2']+$data2['u_chemestry']; ?></td>
            <th><span class="colorchange"><?php echo $all=$total1+$total2+$total3+$total4+$total5; ?></span></th>
            <td>1000</td>
        </tr>
    </tbody>
</table>

<h1 class="mt-4 text-center">You Are <span class="<?php echo $all <= 400 ? 'text-danger' : 'text-success'; ?>">
    <?php if($all <= 400): ?>
        Fail
    <?php else: ?>
        Pass
    <?php endif; ?>
</span></h1>


<marquee class="mt-3" scrollamount="5"><p>Your Result is Declared. Kindly check your marks and in case of any discrepancy contact the admin.</p></marquee>

       </form>
      </div>
    </header>
    
</body>
</html>
<?php
}
else
{
?>
<script>
alert('Record Not found');
    window.open('index.php','_self');
</script>
<?php
}

}

?>
