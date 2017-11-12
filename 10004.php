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
					10004. Next Round
					</div>
					<p>
						"Contestant who earns a score equal to or greater than the k-th place finisher's score will advance to the next round, as long as the contestant earns a positive score..." — an excerpt from contest rules.
					</p>
					<p>
						A total of n participants took part in the contest (n ≥ k), and you already know their scores. Calculate how many participants will advance to the next round.					
					</p>
					<div class="prob_inside">
						Input
					</div>
					<p>
					The first line of the input contains two integers n and k (1 ≤ k ≤ n ≤ 50) separated by a single space.

					The second line contains n space-separated integers a1, a2, ..., an (0 ≤ ai ≤ 100), where ai is the score earned by the participant who got the i-th place. The given sequence is non-increasing (that is, for all i from 1 to n - 1 the following condition is fulfilled: ai ≥ ai + 1).					
					</p>
					<div class="prob_inside">
						Output
					</div>
					<p>
						Output the number of participants who advance to the next round.
					</p>
					<div class="prob_inside">
						Examples:
					</div>
					<div class="prob_inside">
						Input
					</div>
					<p>
						8 5
						10 9 8 7 7 7 5 5
					</p>
					<div class="prob_inside">
						Output
					</div>
					<p>
						6
					</p>
					<div class="prob_inside">
						Input
					</div>
					<p>
						4 2
						0 0 0 0
					</p>
					<div class="prob_inside">
						Output
					</div>
					<p>
						0
					</p>
									
				<?php
					if(isset($_SESSION["user"])){						
						include 'submit_button.php';
					}
				?>
				</article>
				<aside class="right">
					<ol>
						<li>time limit per test - 2s</li>
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