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
	<div class="maincontainer" style="height: 750px;">
		
		
		<section id="main">
			<div class="main">
				<article class="left">
					<div class="prob_title">
					10006. Domino Piling.
					</div>
					<p>
						You are given a rectangular board of M × N squares. Also you are given an unlimited number of standard domino pieces of 2 × 1 squares. You are allowed to rotate the pieces.
					</p>
					<p>
						 You are asked to place as many dominoes as possible on the board so as to meet the following conditions:
					</p>
					<p>
						1. Each domino completely covers two squares.
					</p>
					<p>
						2. No two dominoes overlap.
					</p>
					<p>
						3. Each domino lies entirely inside the board. It is allowed to touch the edges of the board.
					</p>
					<p>
						Find the maximum number of dominoes, which can be placed under these restrictions
					</p>    
					<div class="prob_inside">
						Input
					</div>
					<p>
						In a single line you are given two integers M and N — board sizes in squares (1 ≤ M ≤ N ≤ 16).
					</p>
					<div class="prob_inside">
						Output
					</div>
					<p>
						Output one number — the maximal number of dominoes, which can be placed.
					</p>
					<div class="prob_inside">
						Examples:
					</div>
					<div class="prob_inside">
						Input
					</div>
					<p>
						2 4
					</p>
					<div class="prob_inside">
						Output
					</div>
					<p>
						4
					</p>

					<div class="prob_inside">
						Input
					</div>
					<p>
						3 3
					</p>
					<div class="prob_inside">
						Output
					</div>
					<p>
						4
					</p>
				</article>
				<aside class="right">
					<ol>
						<li>time limit per test - 1s</li>
						<li>64 megabytes</li>
						<li>input - standard input (stdin)</li>
						<li>output - standard output (stdout)</li>
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