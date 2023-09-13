<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Result Management System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <style>
        body {
            background-image: url('./image/blackboard.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .table {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
                <li class="nav-item"><a class="nav-link" href="admin/aboutus.php">ABOUT</a></li>
                <li class="nav-item"><a class="nav-link" href="admin/contactus.php">CONTACT</a></li>
            </ul>
            <ul class="navbar-nav main-nav animate__animated animate__slideInDown">
                <li class="nav-item"><a class="nav-link" href="login.php">ADMIN LOGIN</a></li>
            </ul>
        </div>
    </nav>
        <div class="container main-content-header">
        <form method="post" action="result.php">
        <table class="table">
            <h2 class="search text-center my-5 f-500">GET YOUR RESULT HERE!</h2>
            <tr>
                <th class="name1">Rollno</th>
                <td class="name2">
                    <input type="text" name="rollno" required class="form-control"/>
                </td>
            </tr>
            <tr>
                <th class="standered1">Standard</th>
                <td class="standered2">
                    <input type="text" name="std" required class="form-control"/>
                </td>
            </tr> 
            <tr>
                <td align="center" colspan="2">
                    <input type="submit" name="submit" value="SUBMIT" class="btn btn-primary btn-lg"/>
                </td>
            </tr>
        </table>
    </form>

        </div>
    </header>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
