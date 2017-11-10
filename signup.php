<!DOCTYPE html>
<!-- <?php
	// session_start();
	// mysql_connect("localhost","root","");
	// // $db = "ADPPRACTISE";
	// if(!@mysql_connect("localhost","root","")){
	// 	die("Connection Unsuccessful");
	// }
	// else if(@mysql_select_db("ADPPRACTISE")){
	// 	echo "Connection successful";
	// }
	// else{
	// 	die("Connection Unsuccessful");
	// }
	// if(isset($_POST["b_signup"])){
	// 	session_start();
	// 	$name = mysql_real_escape_string($_POST["name"]);
	// 	$handle = mysql_real_escape_string($_POST["handle"]);
	// 	$password = mysql_real_escape_string($_POST["password"]);
	// 	$password = md5($password);	//Hashing the password before storing it
	// 	$sql = "INSERT INTO LOGINTRY VALUES('$handle','$password','$name')";
	// 	mysql_query($sql);
	// 	$_SESSION["message"]="You are now logged in";
	// 	$_SESSION["username"]=$handle;
	// 	header("location:index.php");
	// }
?> -->
<html>
<head>
	<title>ADP Project | Sign Up</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css"></link>	
	<link rel="stylesheet" type="text/css" href="./css/style_login.css"></link>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Online judge">
	<meta name="keywords" content="competitive programmming, coding challenge, programmming problems">
	<meta name="author" content="Vishal Anand">

</head>
<body>

	<section id="sinupmain">
		<div class="containersignup">
			<img src="./img/signup_avatar.png">
			<form name="SignUpForm" action="./includes/signup.inc.php" method="POST">
				<div>
					<input type="text" name="fname" placeholder="First Name">
				</div>
				<div>
					<input type="text" name="lname" placeholder="Last Name">
				</div>
				<div>
					<input type="text" name="handle" placeholder="Handle">
				</div>
				<div>
					<input type="text" name="institution" placeholder="Institution Name">
				</div>
				<div>
					<input type="password" name="password" placeholder="Your password here">
				</div>
				<div><!-- 
					<input type="password" name="password2" placeholder="Rewrite your password">
				</div> -->
				<div>
					<button type="submit" name="b_signup" class="button_1">Sign Up</button>
				</div>
				<div>
					<a href="login.php">Go Back</a>
				</div>
			</form>
		</div>
	</section>
</body>
</html>