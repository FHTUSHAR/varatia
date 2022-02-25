<?php
$servername = "localhost";
$username = "root";

// Create connection
$conn = mysqli_connect($servername, $username,'','fd');
session_unset();

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$_SESSION["fname"]=$_REQUEST["fname"];
$_SESSION["lname"]=$_REQUEST["lname"];
$_SESSION["email"]=$_REQUEST["em"];
$_SESSION["cell"]=$_REQUEST["cell"];
$_SESSION["add"]=$_REQUEST["add"];
$_SESSION["pass"]=$_REQUEST["pass"];

$fname=$_SESSION["fname"];
$lname=$_SESSION["lname"];
$email=$_SESSION["email"];
$cell=$_SESSION["cell"];
$pass=$_SESSION["pass"];
$add=$_SESSION["add"];

//$id=mysqli_real_escape_string($conn,$_GET['uid']);
// $fname=mysqli_real_escape_string($conn,$_GET['fname']);
// $lname=mysqli_real_escape_string($conn,$_GET['lname']);
// $email=mysqli_real_escape_string($conn,$_GET['em']);
// $cell=mysqli_real_escape_string($conn,$_GET['cell']);
// $add=mysqli_real_escape_string($conn,$_GET['add']);
// $pass=mysqli_real_escape_string($conn,$_GET['pass']);

$query="INSERT INTO users(fname,lname,email,cell,pass,addresss)
        VALUES('$fname','$lname','$email','$cell','$pass','$add')";
mysqli_query($conn,$query);
header('Location: home.php');
session_end();

?>
