<html>
<head>
	<title>Signup</title>	
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
	<div class="add">
		<div class="container">

		
		<form action="signup_includes/signup.inc.php" method="POST">
			<h1>Create Account</h1> <hr>
			Full name:<br>
			<input type="text" name="fname" placeholder="Enter your full name" required><br><br>
			Email:<br>
			<input type="text" name="email" placeholder="Enter your email address" required><br><br>
			Username:<br>
			<input type="text" name="uname" placeholder="Enter your username" required><br><br>
			contact:<br>
			<input type="number" name="contact" placeholder="Enter your lcontact" required><br><br>
			Password:<br>
			<input type="password" name="password" required  placeholder="enter password"><br><br>
			Confirm Password:<br>
			<input type="password" name="cpassword" placeholder="re-enter password" required><br><br>
			<input type="submit" class="btn btn-primary" name="submit"><br><br>

			
			Already have an account?<a href="index.php"><button type="button" class="btn btn-primary">Log in</button></a>
		</form>
		

		</div>
	</div>

	<script type="text/javascript" src="loginjs.js"></script>
</body>
</html>