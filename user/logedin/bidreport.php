<?php 
  session_start();

	if (isset($_POST['submit'])) {
		include_once'dbh.inc.php';


		$bidprice=mysqli_real_escape_string($conn,$_POST['bidprice']);

		$u_id=mysqli_real_escape_string($conn,$_POST['u_id']);

		$cbid=mysqli_real_escape_string($conn,$_POST['bd']);

		$pid=mysqli_real_escape_string($conn,$_POST['id']);

		if ($bidprice>$cbid) {

			

			$sql="INSERT into bidre(bidprice,u_id,pid)VALUES('$bidprice','$u_id','$pid');";
			mysqli_query($conn,$sql);
			header("Location:detview.php?uploading=success");
			exit();
		}
		else{
			header("Location:furniture.php?Please_place_a_higher_bid");
			exit();
		}
	}
	else {
		header("Location:detview.php?Bidding_FAILED");
		exit();
	}

 ?>