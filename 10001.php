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
					10001. Watermelon
					</div>
					<p>
						One hot summer day Pete and his friend Billy decided to buy a watermelon. They chose the biggest and the ripest one, in their opinion. After that the watermelon was weighed, and the scales showed w kilos. They rushed home, dying of thirst, and decided to divide the berry, however they faced a hard problem.
					</p>
					<p>
						Pete and Billy are great fans of even numbers, that's why they want to divide the watermelon in such a way that each of the two parts weighs even number of kilos, at the same time it is not obligatory that the parts are equal. The boys are extremely tired and want to start their meal as soon as possible, that's why you should help them and find out, if they can divide the watermelon in the way they want. For sure, each of them should get a part of positive weight.
					</p>
					<div class="prob_inside">
						Input
					</div>
					<p>
						The first (and the only) input line contains integer number w (1 ≤ w ≤ 100) — the weight of the watermelon bought by the boys.
					</p>
					<div class="prob_inside">
						Output
					</div>
					<p>
						Print YES, if the boys can divide the watermelon into two parts, each of them weighing even number of kilos; and NO in the opposite case.
					</p>
					<div class="prob_inside">
						Examples:
					</div>
					<div class="prob_inside">
						i/p
					</div>
					<p>
						8
					</p>
					<div class="prob_inside">
						o/p
					</div>
					<p>
						YES
					</p>
				
				<?php
					if(isset($_SESSION["user"])){						
						include 'submit_button.php';
					}
				?>
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