<?php 
  session_start();

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
		$u_id=mysqli_real_escape_string($conn,$_POST['u_id']);

		

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
					header("location:cl_add.php?uploadSuccess");
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
	$sql="INSERT into cl_addl(category,name, description,image,start,actual,sdate,stime,edate,etime,status,u_id)VALUES('$category','$name','$description','$fileNameNew','$start','$actual','$sdate','$stime','$edate','$etime','pending','$u_id');";
			mysqli_query($conn,$sql);
			header("Location:cl_add.php?uploading=success");
			exit();
		}
	else {
		header("Location:cl_add.php");
		exit();
	}

 ?>