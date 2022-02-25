<!DOCTYPE html>
<html>
<head>
	<title>varatia.com</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "password";
$enter=1;
// Create connection
$conn = mysqli_connect($servername, $username,'','fd');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$_SESSION["search"]=$_REQUEST["search1"];
$search=$_SESSION["search"];

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
 $name1=Null;	
 $name2=Null;	
 $address=Null;
 $cell=Null;
$query="SELECT * FROM users WHERE addresss LIKE '%$search%' ";
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_array($result)){
	$name1=$row[1];	
	$name2=$row[2];	
	$address=$row[6];
	$cell=$row[4];
	$sp=" ";	
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
           				<li class="dt">Name :' .$name1.''.$sp.''.$name2.'</li>
           				<li class="dt">Address :' .$address.'</li>
           				<li class="dt">Phone : '. $cell.'</li>
           			</ul>
           		</div>
           	</div>
           
			
        </div>';
}
        ?> 

</body>
</html>