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
<body>
	<section id="head">
		<?php
			include "header.php";
		?>
	</section>
	<div class="maincontainer" style="height: 700px;">
		
		
		<section id="main">
			<div class="main">
				<article class="left">
					<div class="prob_title">
					10010. Football.
					</div>
					<p>
						Petya loves football very much. One day, as he was watching a football match, he was writing the players' current positions on a piece of paper. To simplify the situation he depicted it as a string consisting of zeroes and ones. 
					</p>
					<p>
						A zero corresponds to players of one team; a one corresponds to players of another team. If there are at least 7 players of some team standing one after another, then the situation is considered dangerous. 
					</p>
					<p>
						For example, the situation 00100110111111101 is dangerous and 11110111011101 is not. You are given the current situation. Determine whether it is dangerous or not.
					</p>   
					<div class="prob_inside">
						Input
					</div>
					<p>
					The first input line contains a non-empty string consisting of characters "0" and "1", which represents players. The length of the string does not exceed 100 characters. There's at least one player from each team present on the field.
					</p>
					<div class="prob_inside">
						Output
					</div>
					<p>
						Print "YES" if the situation is dangerous. Otherwise, print "NO".
					</p>
					<div class="prob_inside">
						Examples:
					</div>
					<div class="prob_inside">
						Input
					</div>
					<p>
						001001
					</p>
					<div class="prob_inside">
						Output
					</div>
					<p>
						NO
					</p>

					<div class="prob_inside">
						Input
					</div>
					<p>1000000001</p>
					<div class="prob_inside">
						Output
					</div>
					<p>
						YES
					</p>
				</article>
				<aside class="right">
					<div class="prob_title">Constraints</div>
					<ol>
						<li>time limit per test - 1s</li>
						<li>64 megabytes</li>
						<li>input - standard input</li>
						<li>output - standard output</li>
					</ol>
				</aside>
				<aside class="right">
					<div class="prob_title">Tags</div>
					<ol>
					<?php
						$conn=mysqli_connect("localhost","root","","Project");
						$sql = "SELECT * FROM Tags WHERE PROB_ID=10015";
						$sql = mysqli_query($conn,$sql);
						while($row = mysqli_fetch_array($sql)){
							echo'<li>'.$row['TAG'].'</li>';
						}
					?>
					</ol>
				</aside>
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

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("slideshow");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>