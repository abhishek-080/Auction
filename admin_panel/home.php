<?php 
    session_start();

    if(isset($_SESSION['u_id'])){
?>


<html>
<head>
  <title>Home</title>
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="final.css">
</head>
<body>
  
	<nav class="navbar navbar-inverse" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="home.php"><img src="img/home.png"></a> 
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="home.php">Home</a></li>
				<li><a href="bids.php">Bids</a></li>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
           User Products
            <b class="caret"></b></a>
                <ul class="dropdown-menu">
                   <li class="dropdown-submenu">
                       <li><a tabindex="-1" href="approved.php">approved</a></li>
                       <li><a href="pending.php">pending</a></li>    
                       </li>                     
        `      </ul>               
            </li>
				<li><a target="_blank" href="../user/home1.php">Visit Site</a></li>		
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="glyphicon glyphicon-user"></span>
            <?php
             echo $_SESSION['u_fname'] ?>
          <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <li><a tabindex="-1" href="profile.php">Profile</a></li>
              <li><a href="login_system/signup_includes/logout.inc.php">Log out</a></li>
            </li>                     
          </ul>               
        </li>
      </ul>
    </div>
  </nav>

    


  <div class="container">
    <div class="row">

  
    </div>
  </div>  
  


  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html> 

       <?php
    }
    else{
        header("Location:login_system/index.php");
        exit();
    }
 ?>