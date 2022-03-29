<?php 
 session_start();

  include'dbh.inc.php';
 

  if(isset($_SESSION['u_id'])){

  $num_per_page=9;

  if(isset($_GET["page"]))
  {
    $page=$_GET["page"];
  }
  else
  {
    $page=1;
  }

  $start_from=($page-1)*9;

  $sql="SELECT* FROM cl_addl where category='furniture' And status='approved' order by id desc limit $start_from,$num_per_page";
  $result=mysqli_query($conn,$sql);
  $resultCheck=mysqli_num_rows($result);
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
    <div class="left col-lg-4 col-sm-4">
            <h1>Furnitures</h1>
          </div>

    <div class="box">


      <div class="col-lg-3 leftbox">


        <div class="search">
            <form class="searchinput" action="searchview.php" method="post">
              <input type="text" name="search" placeholder="Search Products...">
              <button class=" btn searchbtn"  type="submit" name="submit"><span class="glyphicon glyphicon-search "></span></button>
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

        
          <div class="items ">

            <?php 

              if(mysqli_num_rows($result) > 0){
              while ($row=mysqli_fetch_array($result)) {
              
              ?>
        
                <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="lat">
                      <img src="upload/<?php echo $row[4]?>" style="height:30%; width:100%;"><br><br>

                      <div class="lat2">
                        <h3><b><?php echo $row['name']?></b></h3>
                        <h5>Starting Bid: &#8360; <?php echo $row['start']?></h5>
                        <h5>End date: <?php echo $row['edate']?></h5>
                        <a href="detview.php?id=<?php echo $row['id'] ?>"><button class="custom-btn btn-6"><span>View Product</span></button></a>

                          
                      </div>
                  </div>
                </div>
              
        
        
        
            <?php
               }
              }
              else{
                 echo "no data Found";
            }
            
                
        
            ?> 
        
          </div>
        
        </div>  
        
            
            
            
        <div class="paging col-sm-7">
            <?php 
        
                $pr_query = "SELECT * FROM cl_addl where category='furniture' And status='approved' ";
                $pr_result = mysqli_query($conn,$pr_query);
                $total_record = mysqli_num_rows($pr_result );
                
                $total_page = ceil($total_record/$num_per_page);

                if($page>1)
                {
                    echo "<a href='furniture.php?page=".($page-1)."' class='btn btn-success'><span class='glyphicon glyphicon-chevron-left'></span></a>";
                }

                
                for($i=1;$i<=$total_page;$i++)
                {
                    echo "<a  href='furniture.php?page=".$i."' class='btn btn-primary active'>$i</a>";
                }

                if($i>$page)
                {
                    echo "<a href='furniture.php?page=".($page+1)."' class='btn btn-danger'><span class='glyphicon glyphicon-chevron-right'></a>";
                }
        
            ?>

        </div>
       </div>

    </div>
  </div>
  
  


  <div class="ftr">
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
        header("Location:../client_log/cl_log.php?login_first");
        exit();
    }
 ?>
