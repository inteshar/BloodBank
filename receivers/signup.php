<?php
$con = mysqli_connect("localhost", "id17264764_root", "Passwordis7!", "id17264764_bloodbank") or die(mysqli_error($con));
session_start();
// Redirects the user to products page if logged in.
if (isset($_SESSION['email'])) {
    header('location: ../avaBlood.php');
}
?>
<!DOCTYPE html>
<html>
<head>
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
                    <li><a href="../signin.html"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="content">
        <div class="container-fluid decor_bg" id="login-panel">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-style">
                <div class="panel-heading">
                    <h4>Patient Registration</h4>
                </div>
                <div class="panel-body">
                    <p class="text-warning"><i>Fill all the required fields in order to Register.</i><p></p>
                    <form method="post" action="signup_script.php">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required="true">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        <div class="form-group">
                            <label for="bgroup">Blood Group</label>
                            <input type="text" class="form-control" id="bgroup" name="bgroup" required="true">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required="true" pattern=".{6,}">
                        </div>
                        <div class="form-group">
                            <label for="contact">Phone</label>
                            <input type="number" class="form-control" id="contact" name="contact" required="true" pattern="[\+]\d{2}\d{2}\d{4}\d{4}">
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" required="true">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="panel-footer"><p>Already have an account? <a href="../signin.html">Login</a></p></div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>