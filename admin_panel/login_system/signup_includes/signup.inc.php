<?php 
	if(isset($_POST['submit'])) {
		include_once 'dbh.inc.php';
		$fname = mysqli_real_escape_string($conn, $_POST['fname']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$contact = mysqli_real_escape_string($conn, $_POST['contact']);
		$uname = mysqli_real_escape_string($conn, $_POST['uname']);
		$pwd = mysqli_real_escape_string($conn, $_POST['password']);
		$cpwd = mysqli_real_escape_string($conn, $_POST['cpassword']);
		

			if (!preg_match("/^[a-z A-Z]*$/", $fname)) {
				header("Location:../signup.php?");
				exit();
			} else {
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					header("Location: ../signup.php?signup=emailinvalid");
					exit();	
				} else{
					$sql = "SELECT * FROM admins WHERE uname='$uname'";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);

					if ($resultCheck > 0){
						header("Location: ../signup.php?signup=userexists");
						exit();
					} else {
						$hashedPwd = password_hash($pwd, PASSWORD_BCRYPT);
						$chashedPwd = password_hash($cpwd, PASSWORD_BCRYPT);

						if ($pwd===$cpwd) {
							$sql = "INSERT INTO admins(fname, email, uname, contact, password, cpassword) VALUES ('$fname','$email', '$uname', '$contact', '$hashedPwd','$chashedPwd');";
							mysqli_query($conn,$sql);
							header("Location: ../signup.php?signup_success");
							exit();
						}
						else{
							header("Location: ../signup.php?signup=password-didnt-match");
							exit();	
						}

						
					}
					
				}
			}
		} 
	 else {
		header("Location: ../signup.php?signup=HELLO-AGAIN");
		exit();
	}
 ?>	