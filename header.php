<?php
	session_start();
?>
<head>
	<link rel="stylesheet" type="text/css" href="./css/style_header.css">
</head>
	<header>
		<div class="container">
			<div id="branding">
				<!-- <h1><span class="highlight">ADP</span> Project</h1>				 -->
				<img src="./img/LOGO3.png">
			</div>
			<nav class="navbar">
				<ul>
					<li ><a href="index.php">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="probl.php">Problem Sets</a></li>
					<li><a href="rankings.php">Rankings</a></li>
					<?php
						if(isset($_SESSION["user"])){
							$user = $_SESSION["name"];
							echo "<li><a href=\"dashboard.php\">Welcome $user </a></li>";
							echo '<li><a href="./includes/logout.inc.php">Logout</a></li>';
						}
						else{
							echo '<li><a href="login.php">Login</a></li>';
						}
					?>
					
				</ul>
			</nav>
		</div>
	</header>
	
