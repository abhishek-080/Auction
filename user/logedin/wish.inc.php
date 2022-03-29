<?php 
  session_start();

	if (isset($_POST['submit'])) {
		include_once'dbh.inc.php';


		$u_id=mysqli_real_escape_string($conn,$_POST['u_id']);
		$pid=mysqli_real_escape_string($conn,$_POST['id']);

		$sql = "SELECT * FROM wishlist WHERE u_id='$u_id' AND pid='id' ";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck > 0){
			header("Location: wishlist.php?Product_already_added");
			exit();
		} else {


	$sql="INSERT into wishlist(u_id,pid)VALUES('$u_id','$pid');";
			mysqli_query($conn,$sql);
			header("Location:detview.php?ADDED_TO_WISHLIST");
			exit();
		}
	}
	else {
		header("Location:detview.php?_FAILED");
		exit();
	}

 ?>