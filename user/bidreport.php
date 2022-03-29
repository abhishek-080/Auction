<?php 
  session_start();

	if(isset($_POST['submit'])) { 
		include_once 'dbh.inc.php';
		
		$u_id=mysqli_real_escape_string($conn,$_POST['u_id']);
		$id=mysqli_real_escape_string($conn,$_POST['id']);
		$bidprice=mysqli_real_escape_string($conn,$_POST['bidprice']);

		$sql="INSERT INTO bidreport (producid,bidder,bidprice) VALUES('$id','$u_id','$bidprice');";
		mysqli_query($conn,$sql);
		header("Location:detview.php?BIDDING_success");
		exit();
	}
	 else {
		header("Location:detview.php?signup=HELLO-AGAIN");
		exit();
	}

 ?>	