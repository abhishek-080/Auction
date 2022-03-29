<?php 
    session_start();

    include 'dbh.inc.php';


    $num_per_page=05;
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

    $sql="SELECT * FROM cl_addl where status='pending' limit $start_from,$num_per_page";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if(isset($_GET['delete_id'])){
        $sql = "DELETE FROM products WHERE id =".$_GET['delete_id'];
        mysqli_query($conn, $sql);
        header("Location:$_SERVER[PHP_SELF]");
    }
 ?>

<html>
<head>
    <title>Products</title>

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
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
                <li class="active"><a href="home.php">Home</a></li>
                <li><a href="product.php">Products</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    User Products
                    <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <li><a tabindex="-1" href="#">approved</a></li>
                                <li><a href="pending.php">pending</a></li>    
                                </li>                     
                        </ul>               
                </li>
                <li><a href="#">Bids</a></li>
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




    <div class="view">
            <div class="well">
        <div class="table">
            <h3>Products</h3><hr><br>

        <script type="text/javascript">
            function delete_id(id){
                if(confirm('sure to delete')){
                    window.location.href='product.php?delete_id='+id;
                }
            }
            function edit_id(id){
                if(confirm('sure to edit')){
                    window.location.href='edit.inc.php?edit_id='+id;
                }
            }
        </script>
       
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col"><h4><b>id</b></h4></th>
                <th scope="col"><h4><b>Category</b></h4></th>               
                <th scope="col"><h4><b>Image</b></h4></th>
                <th scope="col"><h4><b>Name</b></h4></th>
                <th scope="col"><h4><b>Description</b></h4></th>
                <th scope="col"><h4><b>Start Price</b></h4></th>
                <th scope="col"><h4><b>Actual Price</b></h4></th>
                <th scope="col"><h4><b>Start date</b></h4></th>
                <th scope="col"><h4><b>End date</b></h4></th>
                <th scope="col"><h4><b>User id</b></h4></th>
                
            </tr>
            </thead>
            <tr>
                <th colspan="0"></p></th>
            </tr>
        
        <?php 
            if($resultCheck>0){
                while($row = mysqli_fetch_row($result)){
                    ?>
                     <tbody>
                    <tr>
                        <td><?php echo $row[0]?></td> 
                        <td><?php echo $row[1]?></td>                       
                        <td><img src="../user/logedin/upload/<?php echo $row[4]?>" style="height:180px; width:200px;"></td>
                        <td><?php echo $row[2]?></td>
                        <td><?php echo $row[3]?></td>
                        <td><?php echo $row[5]?></td>
                        <td><?php echo $row[6]?></td>
                        <td><?php echo $row[7]?></td>
                        <td><?php echo $row[9]?></td>
                        <td><?php echo $row[11]?></td>
                        
                        <td style="width:60px;"><a href="javascript:edit_id(<?php echo $row[0]?>)"><button class="btn btn-primary">edit</button></a>
                        <td style="width:60px;"><a href="javascript:delete_id(<?php echo $row[0]?>)"><button class="btn btn-primary">delete</button></a></td>
                        <td style="width:60px;"><a href="#"><button class="btn btn-primary">approve</button></a></td>
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
        
                $pr_query = "select * from cl_addl ";
                $pr_result = mysqli_query($conn,$pr_query);
                $total_record = mysqli_num_rows($pr_result );
                
                $total_page = ceil($total_record/$num_per_page);

                if($page>1)
                {
                    echo "<a href='clproduct.php?page=".($page-1)."' class='btn btn-danger'>Previous</a>";
                }

                
                for($i=1;$i<=$total_page;$i++)
                {
                    echo "<a  href='clproduct.php?page=".$i."' class='btn btn-primary'>$i</a>";
                }

                if($i>$page)
                {
                    echo "<a href='clproduct.php?page=".($page+1)."' class='btn btn-danger'>Next</a>";
                }
        
        ?>
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