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
					10005. String Task.
					</div>
					<p>
						Petya started to attend programming lessons. On the first lesson his task was to write a simple program. The program was supposed to do the following: in the given string, consisting if uppercase and lowercase Latin letters, it:

					    deletes all the vowels,
					    inserts a character "." before each consonant,
					    replaces all uppercase consonants with corresponding lowercase ones. 
					</p>    
					<p>    
						Vowels are letters "A", "O", "Y", "E", "U", "I", and the rest are consonants. The program's input is exactly one string, it should return the output as a single string, resulting after the program's processing the initial string.
					</p>	
					<p>
					Help Petya cope with this easy task.
					</p>
					<div class="prob_inside">
						Input
					</div>
					<p>
						The first line represents input string of Petya's program. This string only consists of uppercase and lowercase Latin letters and its length is from 1 to 100, inclusive.
					</p>
					<div class="prob_inside">
						Output
					</div>
					<p>
						Print the resulting string. It is guaranteed that this string is not empty.
					</p>
					<div class="prob_inside">
						Examples:
					</div>
					<div class="prob_inside">
						Input
					</div>
					<p>
						tour
					</p>
					<div class="prob_inside">
						Output
					</div>
					<p>
						.t.r
					</p>

					<div class="prob_inside">
						Input
					</div>
					<p>
						Codeforces
					</p>
					<div class="prob_inside">
						Output
					</div>
					<p>
						.c.d.f.r.c.s
					</p>

					<div class="prob_inside">
						Input
					</div>
					<p>
						aBAcAba
					</p>
					<div class="prob_inside">
						Output
					</div>
					<p>
						.b.c.b
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