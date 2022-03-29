<?php 
    include 'dbh.inc.php';




    if(isset($_GET['edit_id'])){
        $sql = "SELECT * FROM cl_addl WHERE id= ".$_GET['edit_id'];

        $result= mysqli_query($conn,$sql);
        $fetch = mysqli_fetch_array($result);
    }
    
    if (isset($_POST['submit'])) {
        include_once'dbh.inc.php';
        $category=mysqli_real_escape_string($conn,$_POST['category']);
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $description=mysqli_real_escape_string($conn,$_POST['description']);
        $image=mysqli_real_escape_string($conn,$_POST['image']);
        $start=mysqli_real_escape_string($conn,$_POST['start']);
        $actual=mysqli_real_escape_string($conn,$_POST['actual']);
        $sdate=mysqli_real_escape_string($conn,$_POST['sdate']);
        $stime=mysqli_real_escape_string($conn,$_POST['stime']);
        $edate=mysqli_real_escape_string($conn,$_POST['edate']);
        $etime=mysqli_real_escape_string($conn,$_POST['etime']);

        

        $file=$_FILES['file'];

        $fileName=$_FILES['file']['name'];
        $fileTmpName=$_FILES['file']['tmp_name'];
        $fileSize=$_FILES['file']['size'];
        $fileError=$_FILES['file']['error'];
        $fileType=$_FILES['file']['type'];

        $fileExt=explode(".", $fileName);
        $fileActualExt=strtolower(end($fileExt));

        $allowed=array('jpg','jpeg','png','pdf');

        if(in_array($fileActualExt, $allowed)){
            if($fileError === 0){
                if($fileSize<1000000){
                    $fileNameNew=uniqid('',true).".".$fileActualExt;
                    $fileDestination='upload/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                }else{
                    echo "Your file is too big";
                }
            }
            else{
                echo"There was an error to uplod your file";
            }
        }else{
            echo "You can not upload this file";
        }
            $sql = "UPDATE products SET category='$category',name='$name',description='$description',image='$fileNameNew',start='$start',actual='$actual',sdate='$sdate',stime='stime',edate='$edate',etime='$etime' WHERE id=".$_GET['edit_id'];
            mysqli_query($conn,$sql);

        }
    
 ?>


<html>
<head>
    <title>Edit product</title>

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

                <li><a href="product.php">Bids</a></li>
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
                   <!-- <?php echo $_SESSION['u_fname'] ?> -->
                    <span class="glyphicon glyphicon-user"></span>
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
            <form method="POST" enctype="multipart/form-data">
                <h2>Edit Product</h2> <hr>
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
                <input type="text" name="name" placeholder="enter product name" value="<?php echo $fetch['name']?>" required> <br>

                Product Description:<br>
                <textarea type="text" name="description" rows="5" value="<?php echo $fetch['description']?>"  required> </textarea> <br>

                Upload Image:<br>
                <input value="<?php echo $fetch['image']?>" type="file" name="file" required><br><br>
                
                Starting bid:<br>
                <input type="number" name="start" value="<?php echo $fetch['start']?>" required><br>

                Actual Price:<br>
                <input type="number" name="actual" value="<?php echo $fetch['actual']?>" required><br>

                Start Date:<br>
                <input type="date" name="sdate" value="<?php echo $fetch['sdate']?>" required><br>

                Start Time:<br>
                <input type="time" name="stime" value="<?php echo $fetch['stime']?>" required><br>

                End Date:<br>
                <input type="date" name="edate" value="<?php echo $fetch['edate']?>" required><br>

                End Time:<br>
                <input type="time" name="etime" value="<?php echo $fetch['etime']?>" required><br><br>

                <input type="submit" class="btn btn-primary" name="submit">
            </form>
        </div>



     <script type="text/javascript" src="public_html/jquery/jquery.js"></script>
    <script src="public_html/mdb.min.js"></script>
    <script src="public_html/assets/alertifyjs/alertify.min.js"></script>
    <script type="text/javascript" src="public_html/custom.js"></script>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>


