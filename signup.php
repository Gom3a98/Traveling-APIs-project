<!DOCTYPE html>
<html>
<head>
	<title>Sign UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="signup">

		<div class="container2">
			<h1  class="head">Sign Up</h1>
			<form name="myform"action="insertOk.php" onsubmit="return myFunction2() " method="post">
			    
			    <input type="text"name="email" placeholder=" type your email">
			    <input type="text"name="username" placeholder="type your username">

			    
			    <input type="password" name="password" placeholder=" type your password">
			    <input type="password" name="cpassword" placeholder="confirm password">
			    <br>
			    
			    <input class="btn" type="submit" value="Sign Up">
		  </form>
			
		<h3 class="head">if you have an account you can sign in directly <a href="signin.php">Sign In</a></h3>
		</div>
	</div>

</body>
</html>