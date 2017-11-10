<?php
	if(isset($_POST["b_signup"])){
		include_once "dbh.inc.php";

		$fname = mysqli_real_escape_string($conn, $_POST["fname"]);
		$lname = mysqli_real_escape_string($conn, $_POST["lname"]);
		$handle = mysqli_real_escape_string($conn, $_POST["handle"]);
		$institution = mysqli_real_escape_string($conn, $_POST["institution"]);
		$password = mysqli_real_escape_string($conn, $_POST["password"]);
		// $password = password_hash($password,PASSWORD_DEFAULT);

		$sql = "SELECT * FROM RegisteredUsers WHERE HANDLE='$handle'";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck>0){
			header("Location: ../signup.php?signup=usertaken");
			exit();
		}
		if(!preg_match("/^[a-zA-Z]*$/", $name)){
			header("Location: ../signup.php?signup=invalid");
			exit();
		}
		// else{
		// 	if(!filter_var($email,FILTER_VALID_EMAIL)){
		// 		header("Location: ../signup.php?signup=email");
		// 	exit();
		// 	}
		// }
		$sql = "INSERT INTO RegisteredUsers VALUES('$fname','$lname','$handle','$institution','$password')";
		mysqli_query($conn,$sql);
		$sql_create = "CREATE TABLE $handle(SUBM_NO INT NOT NULL PRIMARY KEY AUTO_INCREMENT, PROB_ID INT(5) NOT NULL, VERDICT INT(1) NOT NULL)";
		mysqli_query($conn,$sql_create);
		header("Location: ../index.php?signup=success");

		exit();
	}
	else{
		header("Location: ../signup.php");
		exit();
	}
?>