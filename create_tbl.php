<?php
$servername = "localhost";
$username = "root";
$password = "password";
$query="CREATE TABLE users(id INT NOT NULL AUTO_INCREMENT  PRIMARY KEY,fname VARCHAR(20),lname VARCHAR(20),email VARCHAR(20),cell VARCHAR(20),pass VARCHAR(30))";
// Create connection
$conn = mysqli_connect($servername, $username,'','fd');

// Check connection
if (!mysqli_query($conn,$query)) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected Table successfully";
?>