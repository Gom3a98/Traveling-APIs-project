<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

</body>
</html>

<?php

 	define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'Traveling');
 	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($db,$_POST['username']);
      $pass = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT userId FROM users WHERE userName = '$username' and password = '$pass'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
    
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         header("location: home.php");
      }
   }
?>

	<div class="signin">

		<div class="container2">
			<h1 class="head">Sign In</h1>
			<form name="myform" action="" onsubmit="return myFunction()" method="post" >
			    
			    <input cl type="text" name="username" placeholder="Your Username">

			    
			    <input type="password" name="password" placeholder="Your password">
			  	<br>
			    <input class="btn" type="submit" value="Sign In">
		  </form>
			
			<h4 class="head">Or you can sign up from different email <a href="signup.php">Sign Up</a></h4>
		</div>
	</div>
