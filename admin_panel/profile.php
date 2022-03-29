<?php 
    session_start();

    include 'dbh.inc.php';
        if(isset($_SESSION['u_id'])){


    $sql="SELECT * from admins where id='$_SESSION[u_id]'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);


 ?>

<html>
<head>
  <title>Bids</title>

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="final.css">

    <style>

    </style>
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
                        </ul>               
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



    <div class="view">
        

        <div class="col-lg-3"></div>
        <div class="col-lg-8">
            <h3>My Profile</h3><br>

        <table class="tab table-hover">
            
        <div class="table">
        <?php 
            if($resultCheck>0){
                while($row = mysqli_fetch_row($result)){
                    ?>
                <div class="table">    
                <table style="width:80%;">
                    <tr>
                      <th>ID:</th>
                      <td><?php echo $row[0]; ?>   </td>
                    </tr>
                    <tr>
                      <th>Name:</th>
                      <td><?php echo $row[1]; ?>   </td>
                    </tr>
                    <tr>
                      <th>Username</th>
                      <td><?php echo $row[2]; ?>   </td>
                    </tr>
                    <tr>
                      <th>Email:</th>
                      <td><?php echo $row[3]; ?>   </td>
                    </tr>
                    <tr>
                      <th>Contact:</th>
                      <td><?php echo $row[4]; ?>   </td>
                    </tr>
                    
                </table>
                </div>
                    
            <?php
                }

            }
            else{
                echo "no data Found";
            }

         ?>
</div>
        </table>
        </div>       
    </div>

    </div>






    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    
</body>
</html> 

     <?php
    }
    else{
        header("Location:login_system/index.php");
        exit();
    }
 ?>