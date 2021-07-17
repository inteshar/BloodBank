<?php
$con = mysqli_connect("localhost", "id17264764_root", "Passwordis7!", "id17264764_bloodbank") or die(mysqli_error($con));
session_start();
$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
// Query checks if the email and password are present in the database.
$query = "SELECT * FROM receivers WHERE email='".$email."' AND pass='".$password."'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num <= 0) {
  $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
  header('location: login.php?error=' . $error);
} else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email'];
  header('location: ../avaBlood.php');
}

?>