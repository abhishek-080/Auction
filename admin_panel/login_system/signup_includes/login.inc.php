<?php 
session_start();
	
	if(isset($_POST['submit'])) {
		include 'dbh.inc.php';

		$uid = mysqli_real_escape_string($conn, $_POST['uname']);
		$pwd = mysqli_real_escape_string($conn, $_POST['password']);


			$sql = "SELECT * FROM admins WHERE uname='$uid'OR email='$uid'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			if ($resultCheck < 1) {
				header("Location: ../index.php?login=email-error");
				exit();
			} else {
				if ($row = mysqli_fetch_assoc($result)) {
					$hashedPwdCheck = password_verify($pwd, $row['password']);
					if ($hashedPwdCheck == false) {
						header("Location: ../index.php?login=password-error");
						exit();
					} else if ($hashedPwdCheck == true) {

						$_SESSION['u_id'] = $row['id'];
						$_SESSION['u_fname'] = $row['fname'];
						$_SESSION['u_email'] = $row['email'];
						$_SESSION['u_uid'] = $row['uname'];
						header("Location: ../../home.php?login=success");
						exit();
					}
				}
			}
		}
	 else {
		header("Location: ../index.php?login=error");
		exit();
	}
 ?>