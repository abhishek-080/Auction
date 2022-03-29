<?php 
  session_start();

  include'dbh.inc.php';
    if(isset($_SESSION['u_id'])){
   
  $sql="SELECT* FROM cl_addl WHERE status='approved' order by id desc limit 4";
  $result=mysqli_query($conn,$sql);
  $resultCheck=mysqli_num_rows($result);
 ?>

<html>
<head>

    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../../admin_panel/css/bootstrap4.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../final.css">

<style> 
::selection {
   background: #212129;
}

.search-wrapper {
    transform: translate(0%, -50%);
    top:8%;
    margin-left: -190px;
  }
.search-wrapper.active {}

.search-wrapper .input-holder {    
    height: 60px;
    width:70px;
    overflow: hidden;
    background: rgba(255,255,255,0);
    border-radius:6px;
    position: relative;
    transition: all 0.3s ease-in-out;
}
.search-wrapper.active .input-holder {
    width:350px;
    border-radius: 50px;
    background: lightgray;
    transition: all .5s cubic-bezier(0.000, 0.105, 0.035, 1.570);
}
.search-wrapper .input-holder .search-input {
    width:100%;
    height: 50px;
    padding:0px 70px 0 20px;
    opacity: 0;
    position: absolute;
    top:0px;
    left:0px;
    background: transparent;
    box-sizing: border-box;
    border:none;
    outline:none;
    font-size: 20px;
    font-weight: ;
    line-height: 20px;
    color:black;
    transform: translate(0, 60px);
    transition: all .3s cubic-bezier(0.000, 0.105, 0.035, 1.570);
    transition-delay: 0.3s;
}
.search-wrapper.active .input-holder .search-input {
    opacity: 1;
    transform: translate(0, 10px);
}
.search-wrapper .input-holder .search-icon {
    width:70px;
    height:50px;
    border:none;
    border-radius:30px;
    background: #ADD8E6 ;
    padding:0px;
    outline:none;
    position: relative;
    z-index: 2;
    float:right;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
}
.search-wrapper.active .input-holder .search-icon {
    width: 50px;
    height:40px;
    margin: 10px;
    border-radius: 30px;
}
.search-wrapper .input-holder .search-icon span {
    width:22px;
    height:22px;
    display: inline-block;
    vertical-align: middle;
    position:relative;
    transform: rotate(45deg);
    transition: all .4s cubic-bezier(0.650, -0.600, 0.240, 1.650);
}
.search-wrapper.active .input-holder .search-icon span {
    transform: rotate(-45deg);
}
.search-wrapper .input-holder .search-icon span::before, .search-wrapper .input-holder .search-icon span::after {
    position: absolute; 
    content:'';
}
.search-wrapper .input-holder .search-icon span::before {
    width: 4px;
    height: 11px;
    left: 6px;
    top: 13px;
    border-radius: 2px;
    background: #FE5F55;
}
.search-wrapper .input-holder .search-icon span::after {
    width: 14px;
    height: 14px;
    left: 0px;
    top: 0px;
    border-radius: 16px;
    border: 4px solid #FE5F55;
}
.search-wrapper .close {
    position: absolute;
    z-index: 1;
    top:24px;
    right:20px;
    width:25px;
    height:25px;
    cursor: pointer;
    transform: rotate(-180deg);
    transition: all .3s cubic-bezier(0.285, -0.450, 0.935, 0.110);
    transition-delay: 0.2s;
}
.search-wrapper.active .close {
    right:-50px;
    transform: rotate(45deg);
    transition: all .6s cubic-bezier(0.000, 0.105, 0.035, 1.570);
    transition-delay: 0.5s;
}
.search-wrapper .close::before, .search-wrapper .close::after {
    position:absolute;
    content:'';
    background: blue;
    border-radius: 2px;
}
.search-wrapper .close::before {
    width: 5px;
    height: 25px;
    left: 10px;
    top: 0px;
}
.search-wrapper .close::after {
    width: 25px;
    height: 5px;
    left: 0px;
    top: 10px;
}

    </style>
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
      <div class="search-wrapper">
            <div class="input-holder">
            <form class="search" action="searchview.php" method="post">
              <input type="text" class="search-input" name="search" placeholder="Search Products...">
              <button class=" search-icon"  type="submit" name="submit" onclick="searchToggle(this, event);"><span></span>
            </form>   
                  
             </div>
        <span class="close" onclick="searchToggle(this, event);"></span>
      </div>

  </nav>




  <div id="myCarousel" class="carousel slide">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img src="../img/14.png">
        <div class="container active">
          <div class="carousel-caption">
            <h2>Join out Auction NOW!!</h2>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="../img/12.png">
        <div class="container active">
          <div class="carousel-caption">
            <h2>Join out Auction NOW!!</h2>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="../img/background.jpg">
        <div class="container active">
          <div class="carousel-caption">
            <h2>Join out Auction NOW!!</h2>
          </div>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon  glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon   glyphicon-chevron-right"></span></a>
  </div>





  <div class="wd_empty_space" data-heightmobile="35" data-heighttablet="40" data-heightdesktop="55" style="height: 55px;"></div>
  <div class="wd_empty_space" data-heightmobile="35" data-heighttablet="40" data-heightdesktop="55" style="height: 55px;"></div>
  <div class="wd_empty_space" data-heightmobile="35" data-heighttablet="40" data-heightdesktop="55" style="height: 55px;"></div>


  <div class="container">
    <div class="col-lg-1"></div>
    <div class="catshow col-lg-11">
      
      <div class="col-lg-3 col-sm-5 catitem">
        <div class="well"><h2>Furnitures</h2>
        <a href="furniture.php"><img src="../img/fur.png" style="height:130px; width:230px; margin-top:3%; margin-left:49px;"></a>
      </div>
      </div>

      <div class="col-lg-3 col-sm-3">
        <div class="well "><h2>Books</h2>
        <a href="book.php"><img src="../img/book.png" style="height:160px; width:195px; margin-left:50px;"></a>
      </div>
      </div>
      <div class="col-lg-3 col-sm-5">
        <div class="well"><h2>Vehicles</h2>
        <a href="vehicle.php"><img src="../img/vehicle.png" style="height:160px; width:210px; margin-left:25px;"></a>
      </div>
      </div>
      <div class="col-lg-3 col-sm-5">
        <div class="well"><h2>Beauty</h2>
        <a href="gaming.php"><img src="../img/beauty.png" style="height:150px; width:200px;margin-left:50px; margin-top:7%;"></a>
      </div>
      </div>
    <div class="col-lg-3 col-sm-5">
        <div class="well"><h2>Music</h2>
        <a href="furniture.php"><img src="../img/music2.png" style="height:160px; width:205px; margin-left:26px;"></a>
      </div>
      </div>
<div class="col-lg-3 col-sm-5">
        <div class="well"><h2>Electronics</h2>
        <a href="furniture.php"><img src="../img/elec.png" style="height:160px; width:195px; margin-left:55px;"></a>
      </div>
      </div>
<div class="col-lg-3 col-sm-5">
        <div class="well"><h2>Jwellery</h2>
        <a href="furniture.php"><img src="../img/jw.png" style="height:140px; width:170px;margin-left:10%; margin-top:0%;"></a>
      </div>
      </div>
<div class="col-lg-3 col-sm-12">
        <div class="well"><h2>Fashion</h2>
        <a href="furniture.php"><img src="../img/fa.png" style="height:160px; width:195px; margin-left:20px;"></a>
      </div>
      </div>

    </div>
  </div>



  <div class="container">
    <div class="col-lg-1"></div>
    <div class="latest col-lg-11">
      <h2>Newest Arrivals</h2>
      
          <div class="items ">

            <?php 

              if(mysqli_num_rows($result) > 0){
              while ($row=mysqli_fetch_array($result)) {
              
              ?>
        
                <div class="col-lg-3 col-md-6 col-sm-12">
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
  </div>  

    <div class="wd_empty_space" data-heightmobile="35" data-heighttablet="40" data-heightdesktop="55" style="height: 55px;"></div>
    <div class="wd_empty_space" data-heightmobile="35" data-heighttablet="40" data-heightdesktop="55" style="height: 55px;"></div>


   <div class="container">
    <div class="col-lg-1"></div>
    <div class="catshow col-lg-11">
      
      <div class="col-lg-3 col-sm-5 catitem">
        <div class="well wella"><h3>New arrivals in toys</h3>
        <a href="furniture.php"><img src="../toys.png" style="height:130px; width:230px; margin-top:30%; margin-left:0px;"></a>
      </div>
      </div>

      <div class="col-lg-3 col-sm-3">
        <div class="well wella"><h3>Gaming Merchandise</h3>
        <a href="#"><img src="../games.png" style="height:140px; width:190px; margin-top:30%;margin-left:5%;"></a>
      </div>
      </div>
<div class="col-lg-3 col-sm-5">
        <div class="well wella"><h3>Fitness Needs</h3>
        <a href="#"><img src="../fitness.png" style="height:130px; width:210px; margin-top:20%;"></a>
      </div>
      </div>
<div class="col-lg-3 col-sm-5">
        <div class="well wella"><h3>Others</h3>
        <a href="#"><img src="../others.png" style="height:130px; width:200px; margin-top:20%;"></a>
      </div>
      </div>

      <a href="#"><button class="custom-btn btn-6" style="margin-left:2%;"><span>All Products</span></button></a>
    </div>
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
    <h4><a href="contact.php">Contact </a></h4>
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


  

  <script type="text/javascript">
  function searchToggle(obj, evt){
    var container = $(obj).closest('.search-wrapper');
        if(!container.hasClass('active')){
            container.addClass('active');
            evt.preventDefault();
        }
        else if(container.hasClass('active') && $(obj).closest('.input-holder').length == 0){
            container.removeClass('active');
            // clear input
            container.find('.search-input').val('');
        }
}

  $(function (){
    $('.carousel').carousel({
      interval:3000
    });
  })
  </script>
</body>

  <script type="text/javascript" src="../admin_panel/js/jquery.js"></script>
  <script type="text/javascript" src="../admin_panel/js/bootstrap.min.js"></script>
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