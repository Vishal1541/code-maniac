<?php
	session_start();
	if(isset($_POST["b_change_pass"])){
		$conn = mysqli_connect("localhost","root","","Project");
		$handle = $_SESSION['user'];
		$old_pass = $_SESSION['password'];
		$orig = mysqli_real_escape_string($conn,$_POST["p_orig"]);
		$re1 = mysqli_real_escape_string($conn,$_POST["p_re1"]);
		$re2 = mysqli_real_escape_string($conn,$_POST["p_re2"]);
		// $password = password_hash($password, PASSWORD_DEFAULT);
		if(empty($handle) || empty($re1) || empty($re2)){
			header("Location: ../changePassword.php?password=empty");
		}
		else{
			if(strcmp($re1,$re2)==0 && strcmp($old_pass,$orig)==0){
				$sql = "UPDATE RegisteredUsers SET PASSWORD='$re1' WHERE HANDLE='$handle' ";
				$result = mysqli_query($conn,$sql);

				if($result>0){
					$_SESSION["user"] = $handle;
					$_SESSION["name"] = $fname;
					$_SESSION["lname"] = $lname;
					$_SESSION["institution"] = $institution;
					$_SESSION['password'] = $password;
					header("Location: ../dashboard.php?password_change=success");
					exit();
				}
			}
			else{
				echo "Error password_change";
			}
		}
	}
	else{
		header("Location: ../dashboard.php?edit=fail");
		exit();
	}
?>
