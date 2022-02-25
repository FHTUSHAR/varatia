<!DOCTYPE html>
<html>
<head>
	<title>varatia.com</title>
	<link rel="stylesheet" type="text/css" href="home.css">
    <script>
    let post=document.getElementById("posted");
    // post.addEventListener("click",function(){
    //     post.innerHTML="POSTED";
    // });
    </script>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "password";

// Create connection
$conn = mysqli_connect($servername, $username,'','fd');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// $cell=$_REQUEST["phn"];
// $pass=$_REQUEST["password"];

// $query="SELECT * FROM users ";//WHERE id=1;
// $result=mysqli_query($conn,$query);

// while($row=mysqli_fetch_array($result)){
// 	$name1=$row[1];	
// 	$name2=$row[2];	
// 	$address=$row[6];
// 	$cell=$row[4];																		//   if($row[3]==$cell && $row[5]==$pass || $row[4]==$cell && $row[5]==$pass )

																					//   header('Location: home.php');
//}
?>
	<div class="navv">
		<nav class="navbar">
			<ul class="navlist">
				<li class="list"style="font-size:40px;,margin-left: 0;margin-right: 0" ><a href="#">Varatia.com</a></li>
				<li class="list" id="lf"><a href="#">HOME</a></li>
				<li class="list"><a href="#">NOTIFICATION</a></li>
				<li class="list"><a href="#">ACCOUNT</a></li>
				<li id="posted"class="list"style="border:1px solid #f6e58d;padding: 10px;"><a href="#">POST</a></li>
				<li class="list">	
					<form >
	           		<input type="text"class="p1" id="name" name="text" placeholder="type here">
	           		<input type="submit"class="s1" name="sub1" value="search">
	           		</form>
           	    </li>
			</ul>

		</nav>

	</div>
	
<?php 
$query="SELECT * FROM users ";//WHERE id=1;
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_array($result)){
	$name1=$row[1];	
	$name2=$row[2];	
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
           				<li class="dt">Name :' .$name1.''.$name2.'</li>
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