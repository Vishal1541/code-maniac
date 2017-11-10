<!DOCTYPE html>
<html>
<head>
	<title>CM Online Judge | Status</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Online judge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="competitive programmming, coding challenge, programmming problems">
	<meta name="author" content="Vishal Anand">

</head>
<body>
	<section id="head">
		<?php
			include "header.php";
		?>
	</section>
	<div class="maincontainer" style="height: 200px;">
		
		
		<section id="main">
			<div class="main">
				<div class="prob_title">
				Status
				</div>		
				<div class="status">
					<?php
						$fileVerdict = fopen("./uploads/verdict.txt", "r") or
						die("Something went wrong!");
						$fileProbId = fopen("./uploads/probId", "r") or
						die("Something went wrong!");

						$show = fgets($fileVerdict);
						$show = str_replace(array("\r", "\n"), '',$show);
						if(strcmp($show,"Accepted")==0){
							echo '<p class="final_status" style="color: green; font-weight: bold;">'.$show.'</p>';
						}
						else{
							echo '<p class="final_status" style="color: red; font-weight: bold;">'.$show.'</p>';	
						}
						
						$id = fgets($fileProbId);
						fclose($fileVerdict);
						
						$conn=mysqli_connect("localhost","root","","Project");
						$handle = $_SESSION["user"];
						if(strcmp($show,"Accepted")==0){
							$sql = "INSERT INTO Submissions VALUES('$id','$handle','AC')";
						}
						else{
							$sql = "INSERT INTO Submissions VALUES('$id','$handle','WA')";
						}
						mysqli_query($conn,$sql);
					?>
				</div>
			</div>
		</section>
	</div>
	</section id="foot">
		<div id="divfoot">
			<?php
				include "footer.php";
			?>
		</div>
	</section>
</body>
</html>