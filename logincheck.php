<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "password";

// Create connection
$conn = mysqli_connect($servername, $username,'','fd');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//session_start();

$_SESSION["cell"]=$_REQUEST["phn"];
$_SESSION["pass"]=$_REQUEST["password"];
//$enter=0;
$query="SELECT * FROM users ";
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_array($result)){
  if($row[3]==$_SESSION["cell"] && $row[5]==$_SESSION["pass"] || $row[4]==$_SESSION["cell"] && $row[5]==$_SESSION["pass"] ){
   header('Location: account.php');
}
else{
  header('Location:login.php');
}
}
session_end();


?>