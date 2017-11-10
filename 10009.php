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
	<div class="maincontainer" style="height: 1000px;">
		
		
		<section id="main">
			<div class="main">
				<article class="left">
					<div class="prob_title">
					10009. Bit++.
					</div>
					<p>
						The classic programming language of Bitland is Bit++. This language is so peculiar and complicated.
					</p>
					<p>
						The language is that peculiar as it has exactly one variable, called x. Also, there are two operations:
					</p>
					<p>
						    Operation ++ increases the value of variable x by 1.
					</p>
					<p>
						    Operation -- decreases the value of variable x by 1. 
					</p>
					<p>
						A statement in language Bit++ is a sequence, consisting of exactly one operation and one variable x. The statement is written without spaces, that is, it can only contain characters "+", "-", "X". Executing a statement means applying the operation it contains.
					</p>
					<p>
						A programme in Bit++ is a sequence of statements, each of them needs to be executed. Executing a programme means executing all the statements it contains.
					</p>
					<p>
						You're given a programme in language Bit++. The initial value of x is 0. Execute the programme and find its final value (the value of the variable when this programme is executed).
					</p>    
					<div class="prob_inside">
						Input
					</div>
					<p>
					The first line contains a single integer n (1 ≤ n ≤ 150) — the number of statements in the programme.
					</p>
					<p>
					Next n lines contain a statement each. Each statement contains exactly one operation (++ or --) and exactly one variable x (denoted as letter «X»). Thus, there are no empty statements. The operation and the variable can be written in any order.
					</p>
					<div class="prob_inside">
						Output
					</div>
					<p>
						Print a single integer — the final value of x.
					</p>
					<div class="prob_inside">
						Examples:
					</div>
					<div class="prob_inside">
						Input
					</div>
					<p>1</p>
					<p>++x</p>
					<div class="prob_inside">
						Output
					</div>
					<p>1</p>
					<div class="prob_inside">
						Input
					</div>
					<p>2</p>
					<p>x++</p>
					<p>--x</p>
					<div class="prob_inside">
						Output
					</div>
					<p>0</p>

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