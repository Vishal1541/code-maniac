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

</head>
<style>
.skill_container{
	border: none;
	display: flex;
	box-shadow: 0px 0px 1px #888888;
	background: #f8f8f8;
	justify-content: space-between;
	/*width: 90%;*/
	line-height: 20px;
	/flex-wrap: nowrap;
	margin-bottom: 10px;
}
.skill_bar_container{
	padding-bottom: 0px;
	/*float: left;*/
	width: 85%;
	display:inline;
	background-color: transparent;
	padding-right: 0px;
	line-height: 30px;
	color: #ffffff;
	font-size: 10px;
}
.skill{
	font-size: 10px;
}
.skillbar{
	
}
</style>
<body>
	<section id="head">
		<?php
			include "header.php";
		?>
	</section>
	<section>
	<div class="maincontainer" style="height: 450px;">

			<section id="main">
			<div class="main">


				<article class="left" style="width: 100%; text-align: center;">

						<div style="color: #180426; font-weight: bold; font-size: 40px;">Change Problem Tags</div>
						<form name="form_tag" class="form_update" action="./includes/tags.inc.php" method="POST">
						<table class="table_update" style="margin-left: 265px;">
							<tr><div class="update">
								<td>Problem Id</td>
								</div>
							</tr>
							<tr><div class="update">
								<td><input type="text" name="prob_id"></td>
								</div>
							</tr>
							<tr><div class="update">
								<td>Tag(single)</td>
								</div>
							</tr>
							<tr><div class="update">
								<td><input type="text" name="prob_tag"></td>
								</div>
							</tr>
						</table>
							<div class="update">
								<button type="submit" name="b_add" class="btn_update" style="width: 150px;">Add Tag</button>
								<button type="submit" name="b_remove" class="btn_update" style="width: 150px;">Remove Tag</button>
							</div>
						</form>;

						</div>;

				</article>

				
				
			</div>
		</section>
		

	</div>
	</section>
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
