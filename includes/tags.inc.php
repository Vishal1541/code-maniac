<?php
	if(isset($_POST["b_add"]) || isset($_POST["b_remove"])){
		$conn = mysqli_connect("localhost","root","","Project");
		$handle = $_SESSION['user'];
		$prob_id = mysqli_real_escape_string($conn,$_POST["prob_id"]);
		$tag = mysqli_real_escape_string($conn,$_POST["prob_tag"]);
		// $password = password_hash($password, PASSWORD_DEFAULT);
		$sql = "SELECT * FROM Submissions where HANDLE='$handle' and STATUS='AC' and PROB_ID=$prob_id";
		$sql = mysqli_query($conn,$sql);
		$sql = mysqli_num_rows($sql);
		if($sql<1){
			header("Location: ../tags.php?EditingNotPermited");
			exit();
		}
		$sql = "SELECT * FROM Tags WHERE PROB_ID=$prob_id and TAG='$tag'";
		$sql = mysqli_query($conn,$sql);
		$sql = mysqli_num_rows($sql);
	}
	if(isset($_POST["b_add"])){
		if($sql==0){
			$sql = "INSERT INTO Tags VALUES($prob_id, '$tag')";
			$sql = mysqli_query($conn,$sql);
			header("Location: ../dashboard.php?TagEdited=Successful");
		}
		else{
			header("Location: ../tags.php?TagEdited=Unsuccessful");	
		}
	}
	else if(isset($_POST["b_remove"])){
		if($sql>0){
			$sql = "DELETE FROM Tags WHERE PROB_ID=$prob_id and TAG='$tag'";
			$sql = mysqli_query($conn,$sql);
			header("Location: ../dashboard.php?TagEdited=Successful");
		}
		else{
			header("Location: ../tags.php?TagEdited=Unsuccessful");	
		}
	}
	else{
		header("Location: ../dashboard.php?TagEdit=fail");
		exit();
	}
?>
