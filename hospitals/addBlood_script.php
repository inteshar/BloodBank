<?php 
$con = mysqli_connect("localhost", "id17264764_root", "Passwordis7!", "id17264764_bloodbank") or die(mysqli_error($con));
session_start();
$dname = mysqli_real_escape_string($con, $_POST['dname']);
$demail = mysqli_real_escape_string($con, $_POST['demail']);
$hname = mysqli_real_escape_string($con, $_POST['hname']);
$bGroup = mysqli_real_escape_string($con, $_POST['bgroup']);
$hcontact = $_POST['hcontact'];
$city = $_POST['city'];
$query = "insert into bloodsamples(donorName, donorEmail, hname, bloodGroup, hcontact, city) "
        . "values ('$dname', '$demail', '$hname', '$bGroup', '$hcontact', '$city')";
$submit = mysqli_query($con, $query) or die(mysqli_error($con));
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
                        <li><a href="addBlood.php"><span class="glyphicon glyphicon-plus"></span> Add Blood Samples </a></li>
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
                        <p class="text-success">You have successfully added the blood sample.</p>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>