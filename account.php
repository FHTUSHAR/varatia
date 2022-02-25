<!DOCTYPE html>
<html>
<head>
	<title>varatia.com</title>
	<link rel="stylesheet" type="text/css" href="account.css">
   
</head>
<body>
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

?>
	<div class="navv">
		<nav class="navbar">
        <ul class="navlist">
				<li class="list"style="font-size:40px;,margin-left: 0;margin-right: 0" ><a href="#">Varatia.com</a></li>
				<li class="list" id="lf"><a href="home.php">HOME</a></li>
				<li class="list"><a href="#">ABOUT</a></li>
				<li class="list"><a href="account.php">ACCOUNT</a></li>
				<li class="list" id="lf1"><a href="login.php">Log Out</a></li>
				
			</ul>

		</nav>

	</div>
	
<!-- showing result on home page -->
<?php


$query="SELECT * FROM users ";
$result=mysqli_query($conn,$query);
$enter=1;


while($row=mysqli_fetch_array($result)){

	if($row[3]==$_SESSION["cell"] && $row[5]==$_SESSION["pass"] || $row[4]==$_SESSION["cell"] && $row[5]==$_SESSION["pass"] ){
		
		$name1=$row[1];	
		$name2=$row[2];	
		$email=$row[3];
		$address=$row[6];
		$cell=$row[4];
    echo'
		<div class="post">
           <div class="container">
           	
           	<div class="posted">
           		<div class=post_left>
           			<h3>profile</h3>
           		</div>
           		<div class=post_right>
           			<h3>Details</h3>
           			<hr>
           			<ul>
                           <li class="dt"> First Name :' .$name1.'</li>
                           <li class="dt"> Last Name :' .$name2.'</li>
                           <li class="dt"> Email :' .$email.'</li>
                           <li class="dt">Phone : '. $cell.'</li>
                           <li class="dt">Address :' .$address.'</li>
           			</ul>
           		</div>
           	</div>
           
			
		</div>';
	}
}


        ?> 

</body>
</html>