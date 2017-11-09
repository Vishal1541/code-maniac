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
	<div class="maincontainer" style="height: 850px;">
		
		
		<section id="main">
			<div class="main">
				<article class="left">
					<div class="prob_title">
					10008. Helpful Maths.
					</div>
					<p>
						Xenia the beginner mathematician is a third year student at elementary school. She is now learning the addition operation.
					</p>
					<p>
						The teacher has written down the sum of multiple numbers. Pupils should calculate the sum. To make the calculation easier, the sum only contains numbers 1, 2 and 3. Still, that isn't enough for Xenia. She is only beginning to count, so she can calculate a sum only if the summands follow in non-decreasing order. For example, she can't calculate sum 1+3+2+1 but she can calculate sums 1+1+2 and 3+3.
					</p>
					<p>
						You've got the sum that was written on the board. Rearrange the summans and print the sum in such a way that Xenia can calculate the sum.
					</p>    
					<div class="prob_inside">
						Input
					</div>
					<p>
						The first line contains a non-empty string s — the sum Xenia needs to count. String s contains no spaces. It only contains digits and characters "+". Besides, string s is a correct sum of numbers 1, 2 and 3. String s is at most 100 characters long.
					</p>
					<div class="prob_inside">
						Output
					</div>
					<p>
					Print the new sum that Xenia can count.
					</p>
					<div class="prob_inside">
						Examples:
					</div>
					<div class="prob_inside">
						Input
					</div>
					<p>
						3 + 2 + 1
					</p>
					<div class="prob_inside">
						Output
					</div>
					<p>
					1 + 2 + 3
					</p>

					<div class="prob_inside">
						Input
					</div>
					<p>
					1 + 1 + 3 + 1 + 3
					</p>
					<div class="prob_inside">
						Output
					</div>
					<p>
					1 + 1 + 1 + 3 + 3
					</p>

					<div class="prob_inside">
						Input
					</div>
					<p>
					2
					</p>
					<div class="prob_inside">
						Output
					</div>
					<p>
					2
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