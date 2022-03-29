<?php 
 session_start();
 

  if(isset($_SESSION['u_id'])){
 ?>

 <html>
  <head>
    
    <title>Furnitures</title>
    <link rel="stylesheet" type="text/css" href="../../admin_panel/css/bootstrap4.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="cfin.css">
</head>
 <body>
 <nav class="nav navbarsecond">
    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="glyphicon glyphicon-chevron-down"></span>
      </button>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav home navbar-nav">
        <li><a href="reghome.php">Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            All Categories
          <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <li><a tabindex="-1" href="furniture.php">Furniture</a></li>
              <li><a tabindex="-1" href="electronics.php">Electronics</a></li>
              <li><a tabindex="-1" href="music.php">Musical instruments</a></li>
              <li><a tabindex="-1" href="books.php">Books</a></li>
              <li><a tabindex="-1" href="vehicle.php">Vehicles</a></li>
              <li><a tabindex="-1" href="jwellery.php">Jwellery</a></li>
              <li><a tabindex="-1" href="beauty.php">Beauty</a></li>
              <li><a tabindex="-1" href="fashion.php">Fashion</a></li>
              <li><a tabindex="-1" href="gaming.php">Gaming</a></li>
              <li><a tabindex="-1" href="fitness.php">Fitness</a></li>
              <li><a tabindex="-1" href="toys.php">Toys</a></li>
              <li><a href="others.php">Others</a></li>
            </li>                     
          </ul>               
        </li>
         </li>   <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?php
             echo $_SESSION['u_fname'] ?>
          <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <li><a tabindex="-1" href="#">Profile</a></li>
              <li><a tabindex="-1" href="cl_add.php">Add Product</a></li>
              <li><a tabindex="-1" href="myprod.php">MY Products</a></li>
              <li><a tabindex="-1" href="mybid.php">MY Bids</a></li>
              <li><a tabindex="-1" href="wishlist.php">Wishlist</a></li>
              <li><a href="../client_log/client_logout.php">Log out</a></li>
            </li>                     
          </ul>   
        <li><a href="#">About Us</a></li>
   
      </ul>
    </div>
  </nav>


 



  <div class="container">

    <div class="col-lg-2"></div>
    
    <div class=" col-lg-8 about">

        <h1>About us</h1>
        The project titled “Bid Bazaar” is an online auction system which is a user-friendly way to get value for the valuables for the user products. The project “Bid Bazaar” is developed in PHP, which mainly focuses on basic operations in a auction website like addition of product, deletion of product, approval of product by admin, product view, search, sorting etc. The system enters the date and time of the addition of product, its expiry date etc. When the deadline is crossed, the product is removed from the website. 
This project was developed as a web site accessible from any browser on computer. This project was created using PHP Framework for developing the backend and HTML, CSS, JavaScript for the frontend of the application. MySQL was used as the database for this application.
We hope that this project helps in rectifying all the manual difficulties present in the auction system of real life auction houses and provide the platform the user to buy and sell products.

    </div>

    <dic class="lg-2"></dic>
        
  </div>  
        
  





<div class="foot">
  <div class="footer">

  <div class="col-lg-3 col-sm-11 content">
    <h1>BID BAZAAR</h1>
    <h3>Get value for your values</h3>
  </div>

  <div class="col-lg-3 col-sm-11 content">
    <h3>Explore</h3>
    <h4><a href="reghome.php">Home</a></h4>
    <h4><a href="about.php">About</a></h4>
    <h4><a href="about.php">Contact </a></h4>
  </div>

  <div class="col-lg-3 col-sm-11 content">
    <h3>Follow</h3>
    <h4><a href="https://www.facebook.com/profile.php?id=100073477226513">Instragram</a></h4>
    <h4><a href="https://www.facebook.com/profile.php?id=100073477226513">Facebook</a></h4>
    <h4><a href="https://www.facebook.com/profile.php?id=100073477226513">Twitter</a></h4>
  </div>

   <div class="col-lg-3 col-sm-11 content">
    <h3>Legal</h3>
    <h4><a href="https://www.facebook.com/profile.php?id=100073477226513">Terms</a></h4>
    <h4><a href="https://www.facebook.com/profile.php?id=100073477226513">Privacy</a></h4>
  </div>



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
        header("Location:../client_log/cl_log.php?login_first");
        exit();
    }
 ?>
