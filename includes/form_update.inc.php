<?php
	session_start();
	if(isset($_POST["b_update"])){
		$conn = mysqli_connect("localhost","root","","Project");
		$old_handle = $_SESSION['user'];
		$password = $_SESSION['password'];
		$handle = mysqli_real_escape_string($conn,$_POST["t_handle"]);
		$fname = mysqli_real_escape_string($conn,$_POST["t_fname"]);
		$lname = mysqli_real_escape_string($conn,$_POST["t_lname"]);
		$institution = mysqli_real_escape_string($conn,$_POST["t_institution"]);
		// $password = password_hash($password, PASSWORD_DEFAULT);
		if(empty($handle)){
			header("Location: ../updateInfo.php?handle=empty");
		}
		else{
			$sql = "UPDATE RegisteredUsers SET HANDLE='$handle', FNAME='$fname', LNAME='$lname', INSTITUTION='$institution' WHERE HANDLE='$old_handle' ";
			$result = mysqli_query($conn,$sql);

			$sql2 = "UPDATE Submissions SET HANDLE='$handle' WHERE HANDLE='$old_handle'";
			$result2 = mysqli_query($conn,$sql2);
			if($result>0 && $result2>0){
				$_SESSION["user"] = $handle;
				$_SESSION["name"] = $fname;
				$_SESSION["lname"] = $lname;
				$_SESSION["institution"] = $institution;
				$_SESSION['password'] = $password;
				header("Location: ../dashboard.php?edit=success");
				exit();
			}
			else{
				echo "Error editing";
			}
		}
	}
	else{
		header("Location: ../dashboard.php?edit=fail");
		exit();
	}
?>
