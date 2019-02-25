<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<div class="About">

		<div class="content">
			<h1>Movie World</h1>
			<p>

				Here is your place to know every thing about a movie
				with us you can search for any thing related to any movie in Cinema World :D

			</p>
			
				<div class="container">
						<form action="GetMovie.php" class="form" method="get">
							<input type="text" name="mname" class="TextField" placeholder="Movie Name">
							<input type="submit" name="submit" class="btn" value="Search">
						</form>
				</div>
				<div class="container">
						<form action="GetRequestToken.php" class="form" method="get">
							<input type="submit" name="submit" class="btn" value="GetTokenToRate">
						</form>
				</div>
				<div class="container">
						<form action="CreateSession.php" class="form" method="post">
							<input type="text" name="reqToken" class="TextField" placeholder="RequestToken">
							<input type="submit" name="submit" class="btn" value="GetSessionID">
						</form>
				</div>
				<div class="container">
						<form action="PostRating.php" class="form" method="post">
							<input type="text" name="mID" class="TextField" placeholder="Movie ID">
							<input type="text" name="sID" class="TextField" placeholder="Session ID">
							<input type="text" name="rID" class="TextField" placeholder="Rate Value from 1 to 10">
							<input type="submit" name="submit" class="btn" value="Rate">
						</form>
				</div>
				<div class="container">
						<form action="DeleteRating.php" class="form" method="post">
							<input type="text" name="mmID" class="TextField" placeholder="Movie ID">
							<input type="text" name="ssID" class="TextField" placeholder="Session ID">
							<input type="submit" name="submit" class="btn" value="Delete Rate">
						</form>
				</div>
				<div class="container">
						<form action="new2.php" class="form" method="get">
							<input type="text" name="actor" class="TextField" placeholder="Actor">
							<input type="submit" name="submit" class="btn" value="Search">
						</form>
				</div>
					<div class="container">
						<form action="maps.php" class="form" method="get">
							<input type="text" name="map" class="TextField" placeholder="City">
							<input type="submit" name="submit" class="btn" value="Search">
						</form>
				</div>
				
		</div>
	</div>

	
</body>
</html>