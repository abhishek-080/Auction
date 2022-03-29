<?php
  session_start();
  
?>

<html>
<head>
  <title>Log in</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="../../admin_panel/css/bootstrap4.css">
  <link rel="stylesheet" type="text/css" href="../c2.css">
<style>
.main{
  width: 350px;
  height: 600px;
  background: red;
  overflow: hidden;
  background: #ffff;
  border-radius: 10px;
  box-shadow: 5px 20px 50px #000;
  margin-top: 5%;
  margin-left: 5%;
  margin-bottom: 5%;
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
  width: 70%;
  height: 40px;
  background: #e0dede;
  justify-content: center;
  display: flex;
  margin: 10px auto;
  padding: 10px;
  border: none;
  outline: none;
  border-radius: 5px;
}
button{
  width: 70%;
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
  height: 500px;
  width: 120%;
  margin-left: -7%;
  background: #eee;
  border-radius: 60% / 10%;
  transform: translateY(-200px);
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
</head>
<body>




<div class="container">

  <div class="col-lg-4 col-sm-4"></div>
  <div class="main col-lg-5 col-sm-12">    
    <input type="checkbox" id="chk" aria-hidden="true">
              <?php 
    if(isset($_SESSION['u_id'])){
      header("Location:../home.php");
    }
    else{
      echo'
      <div class="signup">
       
        <form action="signup_includes/login.inc.php" method="POST">
          <label >Bid Bazaar</label>
          <label for="chk" aria-hidden="true">Admin Login</label>
          <input type="text" name="uname" placeholder="Email" required>
          <input type="password" name="password" placeholder="Password" required>
          <button type="submit" name="submit">Log in</button>

        </form>
      </div>

      <div class="login">
';

        }

    ?>
      </div>
      </div></div>



  <div class="blankright col-lg-3 col-sm-0"></div>
  



  <div class="ftr">
    <div class="footer">
      <footer>   
      </footer>
    </div>
  </div>


</body>
</html>
