<?php 
$con = mysqli_connect("localhost", "id17264764_root", "Passwordis7!", "id17264764_bloodbank") or die(mysqli_error($con));
session_start();
$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$bgroup = mysqli_real_escape_string($con, $_POST['bgroup']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$contact = $_POST['contact'];
$city = mysqli_real_escape_string($con, $_POST['city']);
$query = "insert into receivers(name, email, bloodGroup, pass, phone, city) "
        . "values ('$name', '$email','$bgroup', '$password', '$contact', '$city')";
$submit = mysqli_query($con, $query) or die(mysqli_error($con));
$_SESSION['email'] = $email;
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../styles/styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rajdhani&display=swap" rel="stylesheet">
        <title>Blood Bank</title>
        <link rel="shortcut icon" type="image/png" href="../images/blood.png"/>
    </head>
<body>
    <!-- NAVIGATION BAR -->
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="../index.html" class="navbar-brand"><img class="logo" src="../images/blood.png"> Blood Bank</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings </a></li>
                    <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
                    </ul>
                </div>
            </div>
        </nav> 
    <div style="margin-top: 100px; margin-bottom: 416px;" class="container">
        <div class="col-xs-6 col-xs-offset-3">
            <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h1>Successful</h1>
                    </div>
                    <div class="panel-body">
                        <p class="text-success">
                            <?php
                            if (isset($_SESSION['email'])){
                                echo "Hello ".$_SESSION['email']."<br>";
                            }else{
                                echo "Hello Guest!";
                            }
                            ?>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>