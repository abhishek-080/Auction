<?php 
  session_start();

  include'dbh.inc.php';

  if(isset($_SESSION['u_id'])){


 ?>

 <style>

  form .bidprice, .cartbtn{
    margin-top: -25%;
  }

  form .cartbtn{
    margin-top: -10%;
  }
  form .wishbtn{
    margin-top: -40%;
  }


 </style>

 <html>
 <head>

    <title>Detail View</title>
   <link rel="stylesheet" type="text/css" href="../../admin_panel/css/bootstrap4.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="detcss.css">
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
              <li><a href="../client_log/client_logout.php">Log out</a></li>
            </li>                     
          </ul>   
        <li><a href="#">About Us</a></li>
   
      </ul>
    </div>
  </nav>



        <div class="container">
          <div class="box">
            <div class="col-lg-3 leftbox">
              <div class="search">
                  <form class="searchinput" action="search.php" method="post">
                    <input type="text" name="search" placeholder="Search Products...">
                    <button class=" btn searchbtn"  type="submit" name="submit"><span class="glyphicon glyphicon-search"></span></button>
                  </form>   
                  
                </div>
        
                <br>
        
                <div class="cate col-lg-8">
                  <h3>Product Categories</h3> <br>
                  <ul>
                    <li><a href="furniture.php">Furnitures</a></li>
                    <li><a href="electronics.php">Electronics</a></li>
                    <li><a href="gaming.php">Gaming</a></li>
                    <li><a href="music.php">Musical Instruments</a></li>
                    <li><a href="vehicle.php">Vehicles</a></li>
                    <li><a href="watch.php">Watches</a></li>
                    <li><a href="jewelry.php">Jewelry</a></li>
                    <li><a href="others.php">others</a></li>
                  </ul>
                </div>
        
        
            </div>
        
            <div class="rightbox col-sm-10  col-lg-9">
        
              <div class="col-lg-12">
        
        
        
              <div class="dropdown sort text-right">
                  <button class="btn btn-secondary dropdown-toggle "  type="button" data-toggle="dropdown" >Deafult Sorting</button>
                     
                      <div class="dropdown-menu">
                        <li><a class="dropdown-item" href="electronics.php">Sort by Popularity</a></li>
                        <li><a class="dropdown-item" href="#">Sort by Latest</a></li>
                        <li><a class="dropdown-item" href="#">Sort by Price: High to low</a></li>
                        <li><a class="dropdown-item" href="#">Sort by Price: Low to High</a></li>
                        <li><a class="dropdown-item" href="#">Sort by Price: Low to High</a></li>
                      </div>
                </div>
        
        
              <div class="items ">
        
                <?php 
                    $id = (isset($_GET['id']) ? $_GET['id'] : '');

                    $sql = "SELECT p.*, b.bidprice bd FROM cl_addl p, bidre b WHERE p.id='$id' AND b.pid='$id'  order by bidprice desc limit 1;";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result) > 0){
                    while ($row=mysqli_fetch_array($result)) {
                ?>
          
              <div class="detview">
                <div class="product-img">
                  <img src="upload/<?php echo $row[4]?>">
                </div>
                <div class="product-info ">
                  <div class="product-text">
                    <h1><?php echo $row['name']?></h1>
                    <p><?php echo $row['description']?></p>
                    <br>
                    <h4>Starting Bid:RS <?php echo $row['start']?></h4>
                    <h4>Ending Date: <?php echo $row['edate']?></h4>
                    <h4>Current Bid: Rs <?php echo $row['bd']?> /-</h4>
            
                    </div>
                    <div class="product-price-btn">
                      <form action="bidreport.php" method="POST">
                      <input type="hidden" name="u_id" value="<?php echo $_SESSION['u_id'] ?>"><br><br>

                        <input type="hidden" name="bd" value="<?php echo $row['bd'] ?>"><br><br>
                        <input type="hidden" name="id" value="<?php echo $row['id']?>"><br><br>
                        <input type="number" name="bidprice" placeholder="Enter your bid" class="bidprice" required>
                      <input type="submit" class="btn btn-success cartbtn" name="submit" value="Bid">
                      </form>
                    <form action="wish.inc.php" method="POST">
                        <input type="hidden" name="u_id" value="<?php echo $_SESSION['u_id'] ?>"><br><br>
                        <input type="hidden" name="id" value="<?php echo $row['id']?>"><br><br>
                        <input type="submit" class="btn btn-success wishbtn" name="submit" value="Add to Wishlist">
                      </form>
                    </div>
                  </div>
            </div>
        

            <?php
               }
              }
              else{
                

                        $id = (isset($_GET['id']) ? $_GET['id'] : '');

                    $sql = "SELECT p.* FROM cl_addl p, bidre b WHERE p.id='$id' order by bidprice desc limit 1;";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result) > 0){
                    while ($row=mysqli_fetch_array($result)) {

                      ?>


              <div class="detview">
                <div class="product-img">
                  <img src="upload/<?php echo $row[4]?>">
                </div>
                <div class="product-info ">
                  <div class="product-text">
                    <h1><?php echo $row['name']?></h1>
                    <p><?php echo $row['description']?></p>
                    <br>
                    <h4>Starting Bid:RS <?php echo $row['start']?></h4>
                    <h4>Ending Date: <?php echo $row['edate']?></h4>
                    <h4>Current Bid: Rs <?php echo $row['start']?> /-</h4>
            
                    </div>
                    <div class="product-price-btn">
                      <form action="bidreport.php" method="POST">
                      <input type="hidden" name="u_id" value="<?php echo $_SESSION['u_id'] ?>"><br><br>

                        <input type="hidden" name="bd" value="<?php echo $row['start'] ?>"><br><br>
                        <input type="hidden" name="id" value="<?php echo $row['id']?>"><br><br>
                        <input type="number" name="bidprice" placeholder="Enter your bid" class="bidprice" required>
                      <input type="submit" class="btn btn-success cartbtn" name="submit" value="Bid">
                      </form>
                    <form action="wish.inc.php" method="POST">
                        <input type="hidden" name="u_id" value="<?php echo $_SESSION['u_id'] ?>"><br><br>
                        <input type="hidden" name="id" value="<?php echo $row['id']?>"><br><br>
                        <input type="submit" class="btn btn-success wishbtn" name="submit" value="Add to Wishlist">
                      </form>
                    </div>
                  </div>
            </div>


<?php
        
                    }}
           
                else {
                  echo "string";
                }
             }
    
            ?>
        
               </div>
        
        
            </div>  
        
          </div>
            
        </div>
        
          
  </div>

  
  


        <div class="foot">
          <div class="footer">
              <footer>   
              </footer>
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
        header("Location:../client_log/client_login.php?login_first?login_first");
        exit();
    }
 ?>
