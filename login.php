<!DOCTYPE html>
<!-- <?php
	$host="localhost";
	$username="root";
	$password="Vishal123";

	mysql_connect($host,$username,"") or die("connection unsuccessful");

	echo "connection success";
?> -->
<html>
<head>
	<title>ADP Project | Login</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css"></link>	
	<link rel="stylesheet" type="text/css" href="./css/style_login.css"></link>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Online judge">
	<meta name="keywords" content="competitive programmming, coding challenge, programmming problems">
	<meta name="author" content="Vishal Anand">

</head>
<body>
	<section id="loginmain">
		<div class="containerlogin">
			<img src="./img/login_avatar.png">
			<form name="LoginForm" action="./includes/login.inc.php" method="POST">
				<div>
					<i class="fa fa-user-circle fa-2x cust" aria-hidden="true"></i>
					<input type="text" name="handle" placeholder="Your login id/handle here">
				</div>
				<div>
					<i class="fa fa-lock fa-2x cust" aria-hidden="true"></i>
					<input type="password" name="password" placeholder="Your password here">
				</div>
				<div>
					<button type="submit" name="b_login" class="button_1">Login</button>
				</div>
				<div>
					<a href="#">Forget password?</a>
					<a href="signup.php">New user? Sign up</a>
				</div>
			</form>
		</div>
	</section>
</body>
</html>
