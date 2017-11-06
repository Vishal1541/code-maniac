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
	<div class="maincontainer">
		<section id="showcase"><!-- 
			<h1>Applied Database Practicum Project</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis leo dui, eu mollis augue bibendum ut. Nunc dapibus nisl quis rhoncus semper.</p> -->
			<div class="w3-content w3-display-container" id="slide">
				<img src="./img/showcase6.jpg" class="slideshow">
				<img src="./img/showcase2.jpg" class="slideshow">
				<img src="./img/showcase3.jpg" class="slideshow">
				<img src="./img/showcase5.jpg" class="slideshow">

				<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
	  			<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
			</div>
		</section>
		<section id="setters">
			<div id="div-setters">
				<h1><span class="highlightorange">Problem Setters:</span> Vishal Anand | Yash Agrawal | <span class="highlightorange">Problem Tester:</span> Akhilesh Devrari | 
					<span class="highlightorange">Editorialist:</span> Aashish Kumar | Vishal Anand</h1>
			</div>
		
		</section>
		<section id="main">
			<div class="main">
				<article class="left">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris iaculis quis orci a tempor. Nullam feugiat eu felis sed venenatis. Nunc at iaculis felis, quis porta mauris. In nisi tellus, viverra ut ante sed, pretium egestas justo. Nulla facilisi. Maecenas congue sapien lectus, nec dignissim quam faucibus eu. Vivamus nec ultricies quam.Nulla facilisi. Maecenas congue sapien lectus, nec dignissim quam faucibus eu. Vivamus nec ultricies quam.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris iaculis quis orci a tempor. Nullam feugiat eu felis sed venenatis. Nunc at iaculis felis, quis porta mauris. In nisi tellus, viverra ut ante sed, pretium egestas justo. Nulla facilisi. Maecenas congue sapien lectus, nec dignissim quam faucibus eu. Vivamus nec ultricies quam.Nulla facilisi. Maecenas congue sapien lectus, nec dignissim quam faucibus eu. Vivamus nec ultricies quam.Nam facilisis leo a leo luctus fringilla sit amet et arcu. Praesent ultricies vel lacus quis fringilla. Quisque congue magna et lobortis iaculis. Duis vestibulum enim nulla, et hendrerit felis mattis vel. Praesent nibh arcu, accumsan in ipsum a, hendrerit lacinia tellus. Vestibulum gravida eleifend lacinia. Nulla eu tortor sagittis, luctus lorem non, placerat enim. Curabitur dictum est condimentum, porta purus at, tristique nisi. Praesent non urna a nisi molestie malesuada. Mauris pretium lorem metus, non viverra diam tristique ut. Ut at orci ac nulla lobortis aliquam. </p>
				</article>

				<aside class="right">
					<h3><span class="highlightblue">Top Rated</span></h3>
					<ol>
						<li>vishal_anand - 2650</li>
						<li>tourist - 2452</li>
						<li>rajat24 - 2423</li>
						<li>sumit_ - 2420</li>
						<li>exception_e - 2395</li>
					</ol>
					<button type="submit" name="b_ratingsAll" class="btn-main">View All</button>
				</aside>
				<aside class="right">
					<h3><span class="highlightblue">Announcements</span></h3>
					<ol>
						<li>CodeChed Sept Long Challenge</li>
						<li>Codeforces Round 432</li>
						<li>ACM ICPC Qualifiers</li>
						<li>ACM ICPC Regionals</li>
						<li>ACM ICPC World Finals</li>
					</ol>
					<button type="submit" name="b_announAll" class="btn-main">View All</button>
				</aside>
				<article class="left">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris iaculis quis orci a tempor. Nullam feugiat eu felis sed venenatis. Nunc at iaculis felis, quis porta mauris. In nisi tellus, viverra ut ante sed, pretium egestas justo. Nulla facilisi. Maecenas congue sapien lectus, nec dignissim quam faucibus eu. Vivamus nec ultricies quam.Nulla facilisi. Maecenas congue sapien lectus, nec dignissim quam faucibus eu. Vivamus nec ultricies quam.Nam facilisis leo a leo luctus fringilla sit amet et arcu. Praesent ultricies vel lacus quis fringilla. Quisque congue magna et lobortis iaculis. Duis vestibulum enim nulla, et hendrerit felis mattis vel. Praesent nibh arcu, accumsan in ipsum a, hendrerit lacinia tellus. Vestibulum gravida eleifend lacinia. Nulla eu tortor sagittis, luctus lorem non, placerat enim. Curabitur dictum est condimentum, porta purus at, tristique nisi. Praesent non urna a nisi molestie malesuada. Mauris pretium lorem metus, non viverra diam tristique ut. Ut at orci ac nulla lobortis aliquam. </p>
				</article>
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