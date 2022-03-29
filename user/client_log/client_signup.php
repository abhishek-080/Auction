<?php
  session_start();
  
?>

<html>
<head>
  <title>Sign Up</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="../../admin_panel/css/bootstrap4.css">
  <link rel="stylesheet" type="text/css" href="clfi.css">
<style>

.loginbox{
  width: 350px;
  height: 600px;
  background: red;
  overflow: hidden;
  background: #ffff;
  border-radius: 10px;
  box-shadow: 5px 20px 50px #000;
    margin-left: 65px;

  margin-top: 5%;
}
.mero{
  margin-top: 12%;
}
#chk{
  display: none;
}
.Logo{
  margin: 0;
  padding: 0;
  font-weight: bold;
  display: flex;
  align-items: center;
  
}
.signup{
  position: relative;
  width:100%;
  height: 100%;
}
.sign{
  margin-top: -8%;
}
.sigsub{
  margin-left: 20%;
}
label{
  color: #19c1ec;
  font-size: 2.3em;
  justify-content: center;
  display: flex;
  margin: 60px;
  font-weight: bold;
  cursor: pointer;
  transition: .5s ease-in-out;
}
input{
  width: 60%;
  height: 30px;
  background: #e0dede;
  justify-content: center;
  display: flex;
  margin: 10px auto;
  padding: 10px;
  border: none;
  outline: none;
  border-radius: 5px;
  margin-top: -9%;
}
button{
  width: 60%;
  height: 40px;
  margin: 10px auto;
  justify-content: center;
  display: block;
  color: #fff;
  background: #0093cb;
  font-size: 1em;
  font-weight: bold;
  margin-top: 20px;
  outline: none;
  border: none;
  border-radius: 5px;
  transition: .2s ease-in;
  cursor: pointer;
}
button:hover{
  background: #19c1ec;
}
.login{
  height: 460px;
  margin-top: 12%;
  background: #eee;
  border-radius: 60% / 10%;
  transform: translateY(-180px);
  transition: .8s ease-in-out;
}
.login label{
  color: #19c1ec;
  transform: scale(.6);
}

#chk:checked ~ .login{
  transform: translateY(-600px);
}
#chk:checked ~ .login label{
  transform: scale(1);  
}
#chk:checked ~ .signup label{
  transform: scale(.6);
}
</style>

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
        <li ><a href="../home1.php">Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            All Categories
          <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <li><a tabindex="-1" href="../furniture.php">Furniture</a></li>
              <li><a tabindex="-1" href="../electronics.php">Electronics</a></li>
              <li><a tabindex="-1" href="../music.php">Musical instruments</a></li>
              <li><a tabindex="-1" href="..books.php">Books</a></li>
              <li><a tabindex="-1" href="../vehicle.php">Vehicles</a></li>
              <li><a tabindex="-1" href="../jwellery.php">Jwellery</a></li>
              <li><a tabindex="-1" href="../beauty.php">Beauty</a></li>
              <li><a tabindex="-1" href="../fashion.php">Fashion</a></li>
              <li><a tabindex="-1" href="../gaming.php">Gaming</a></li>
              <li><a tabindex="-1" href="../fitness.php">Fitness</a></li>
              <li><a tabindex="-1" href="../toys.php">Toys</a></li>
              <li><a href="others.php">Others</a></li>
            </li>                     
          </ul>               
        </li>
        </li>   <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            Account
          <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <li><a tabindex="-1" href="client_log/cl_log.php">Login</a></li>
              <li><a tabindex="-1" href="client_signup.php">Signup</a></li>
            </li>                     
          </ul>               
        </li>
        <li><a href="#">About Us</a></li>
   
      </ul>
    </div>
  </nav>



<div class="container">
  <div class="blankleft col-lg-4 col-sm-0"></div>
  <div class="loginbox">    
    <input type="checkbox" id="chk" aria-hidden="true">
    
 
          </div>
  </div>
  </div>


  <div class="blankright col-lg-3 col-sm-0"></div>
  



  <div class="ftr">
    <div class="footer">
      <footer>   
      </footer>
    </div>
  </div>


</body>
</html>
 