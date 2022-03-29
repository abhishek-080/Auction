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

  <link rel="stylesheet" type="text/css" href="2.css">
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
				<li><a href="home.php">Home</a></li>
				<li><a href="product.php">Products</a></li>
				<li><a href="#">Bids</a></li>
        <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    User Products
                    <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <li><a tabindex="-1" href="approved.php">approved</a></li>
                                <li><a href="pending.php">pending</a></li>    
                                </li>                     
                        </ul>               
                </li>
				<li><a target="_blank" href="../user/home.php">Visit Site</a></li>		
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="glyphicon glyphicon-user"></span>
            <?php
             echo $_SESSION['u_fname'] ?>
          <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <li><a tabindex="-1" href="#">Profile</a></li>
              <li><a href="login_system/signup_includes/logout.inc.php">Log out</a></li>
            </li>                     
          </ul>               
        </li>
      </ul>
    </div>
  </nav>

    
  <div class="container">

    <div class="add">
      <div class="viewbox">
        <a href="product.php"><button type="button" class="btn btn-primary">View Product</button></a><br><br>
    </div>

      <form action="add.inc.php" method="POST" enctype="multipart/form-data">
        <h2>Add Product</h2> <hr>
        Category: <br>
        <select name="category" required>
          <option class="television">Television</option>
          <option class="furniture">Furniture</option>
          <option class="music">Musical instruments</option>
          <option class="electronic">Electronics</option>
          <option class="vehicles">Vehicles</option>
          <option class="jewelery">Jewelery</option>
          <option class="other">others</option>
        </select><br>

        Product Name:<br>
        <input type="text" name="name" placeholder="enter product name" required> <br>

        Product Description:<br>
        <textarea type="text" name="description" rows="4"  required> </textarea> <br>

        Upload Image:<br>
        <input type="file" name="file" class="btn btn-primary" required>

        Starting bid:<br>
        <input type="number" name="start" required><br>

        Actual Price:<br>
        <input type="number" name="actual"required><br>

        Start Date:<br>
        <input type="date" name="sdate"required><br>

        Start Time:<br>
        <input type="time" name="stime"required><br>

        End Date:<br>
        <input type="date" name="edate"required><br>

        End Time:<br>
        <input type="time" name="etime"required><br><br>

        <input type="submit" class="btn btn-primary" name="submit">
      </form>
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