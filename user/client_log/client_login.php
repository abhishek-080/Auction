<?php
	session_start();
	
?>

<html>
<head>
	<title>Log in</title>
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="../../admin_panel/css/bootstrap3.css">
  <link rel="stylesheet" type="text/css" href="client2.css">
<body>


 <nav class="nav navbar navbarfirst">
    <div class="topimg col-sm-5">
      <img src="../img/home.png">
    </div>
    <div class="col-sm-7">
      <div class="search search-box">
        <form action="../searchview.php" method="post">
          <div class="col-sm-7">
          <input type="text" name="search">
          </div>
          <div class="col-sm-4 sub">
          <input type="submit"class="btn btn-success sub" name="submit" value="search"> 
          </div>
        </form>
      </div>
    </div>
  </nav>


  <nav class="nav navbarsecond navbar-inverse">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav home navbar-nav">
        <li><a href="../home.php">Home</a></li>
        <li><a href="../furniture.php">Furnitures</a></li>
        <li><a href="../electronics.php">Electronics</a></li>
        <li><a href="../music.php">Musical Instruments</a></li>
        <li><a href="#">Vehicles</a></li>
        <li><a href="#">Jewelry</a></li>
        <li><a href="#">About us</a></li>
        <li class="active"><a href="client_login.php">Log in</a></li>
        <li><a href="client_Signup.php">Register</a></li>                 
      </ul>

      </ul>
    </div>
  </nav>





	<div class="container">
		<div class="add">

		<?php 
		if(isset($_SESSION['u_id'])){
			header("Location:../logedin/reghome.php");
		}
		else{
			echo'
			<form action="cl_log_inc.php" method="POST">

			<h1>Log in</h1> <hr>

			Username:<br>
			<input type="text" name="uname" placeholder="enter your name" required><br><br>

			Password:<br>
			<input type="password" name="password" placeholder="enter password" required><br><br>

			<input type="submit" class="btn btn-primary" name="submit"><br><br>
			Need an account?

      <a href="client_signup.php"><button class="btn btn-primary">Register</button></a>

			
		</form>'	;
		}

		?>
	</div>
	</div>





  <div class="ftr">
    <div class="footer">
      <footer>   
      </footer>
    </div>
  </div>





</body>
</html>
