<?php 
    session_start();

    include 'dbh.inc.php';


    $num_per_page=10;
    if(isset($_SESSION['u_id'])){


    if(isset($_GET["page"]))
    {
        $page=$_GET["page"];
    }
    else
    {
        $page=1;
    }

    $start_from=($page-1)*05;

  $sql="SELECT * from bidre order by pid asc limit $start_from,$num_per_page";
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
        .paging{
            margin-left: 15%;
            margin-top: 2%;
        }
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
                <li class="active"><a href="bids.php">Bids</a></li>
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
        <div class="table">
            <h3>Products</h3><br>
        <table class="tab table-hover">
            <thead>
            <tr>
                <th scope="col"><h4><b>Product id</b></h4></th>
                <th scope="col"><h4><b>User id</b></h4></th>               
                <th scope="col"><h4><b>Bid Price</b></h4></th>
                
            </tr>
            </thead>

        <?php 
            if($resultCheck>0){
                while($row = mysqli_fetch_row($result)){
                    ?>
                     <tbody>
                    <tr>
                        <td><?php echo $row[3]?></td> 
                        <td><?php echo $row[2]?></td>                       
                        <td><?php echo $row[1]?></td>

                    </tr>
                    </tbody>
            <?php
                }

            }
            else{
                echo "no data Found";
            }

         ?>

        </table>
        </div>       
    </div>

    </div>






    <div class="paging">
     <?php 
        
                $pr_query = "select * from cl_addl";
                $pr_result = mysqli_query($conn,$pr_query);
                $total_record = mysqli_num_rows($pr_result );
                
                $total_page = ceil($total_record/$num_per_page);

                if($page>1)
                {
                    echo "<a href='bids.php?page=".($page-1)."' class='btn btn-danger'>Previous</a>";
                }

                
                for($i=1;$i<=$total_page;$i++)
                {
                    echo "<a  href='bids.php?page=".$i."' class='btn btn-primary'>$i</a>";
                }

                if($i>$page)
                {
                    echo "<a href='bids.php?page=".($page+1)."' class='btn btn-danger'>Next</a>";
                }
        
        ?>
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