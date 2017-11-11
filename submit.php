<!DOCTYPE html>
<html>
<head>
	<title>CM Online Judge | Welcome</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Online judge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="competitive programmming, coding challenge, programmming problems">
	<meta name="author" content="Vishal Anand">
	<script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
</head>
<body>
	<section id="head">
		<?php
			include "header.php";
		?>
	</section>
	<div class="maincontainer" style="height: 600px;">
		
		
		<section id="main">
			<div class="main">
				<div class="prob_title">
				Paste and Submit your code here:
				</div>		
				<div class="code_editor">
					<form name="submit_form"  	action="./uploads/submit.inc.php" method="POST">
						<div class="wrapper">
							  <code id="ace-editorid">#include "iostream"
int main(){
	cout<<"Hello World\n";
	return 0;
}</code>
						</div>  
						<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
						<script src='http://cdnjs.cloudflare.com/ajax/libs/ace/1.1.3/ace.js'></script>
						<script  src="./css/script.js"></script>
						Type the Problem ID: <input type="text" name="probId">
						<input type="submit" name="b_code_submit" class="submit_query">
					</form>
				</div>
			</div>
		</section>
	</div>
	</section id="foot">
		<div id="divfoot">
			<?php
				include "footer.php"
			?>
		</div>
	</section>
	</body>
</body>
</html>
