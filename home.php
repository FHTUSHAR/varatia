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
?>
	<div class="navv">
		<nav class="navbar">
			<ul class="navlist">
				<li class="list"style="font-size:40px;,margin-left: 0;margin-right: 0" ><a href="#">Varatia.com</a></li>
				<li class="list" id="lf"><a href="home.php">HOME</a></li>
				<li class="list"><a href="#">ABOUT</a></li>
				<li class="list"><a href="account.php">ACCOUNT</a></li>
				<li class="list" id="lf1"><a href="logout.php">Log Out</a></li>
				
			</ul>

		</nav>

	</div>
	
    <div class="searchcls">
	
	
	
				<form action="search.php"method='post'>
					<div class="p11">
					<input type="text"class="p1" id="name" name="search1" placeholder="type here">
					</div>
	           	<div class="s11">
				   <input type="submit"class="s1" name="sub1" value="search">
				   </div>
	           		
	           		</form>
        </div>



</body>
</html>