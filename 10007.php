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
	<div class="maincontainer" style="height: 900px;">
		
		
		<section id="main">
			<div class="main">
				<article class="left">
					<div class="prob_title">
					10007. Team.
					</div>
					<p>
						One day three best friends Petya, Vasya and Tonya decided to form a team and take part in programming contests. Participants are usually offered several problems during programming contests. Long before the start the friends decided that they will implement a problem if at least two of them are sure about the solution. Otherwise, the friends won't write the problem's solution.
					</p>
					<p>
						This contest offers n problems to the participants. For each problem we know, which friend is sure about the solution. Help the friends find the number of problems for which they will write a solution.
					</p>    
					<div class="prob_inside">
						Input
					</div>
					<p>
						The first input line contains a single integer n (1 ≤ n ≤ 1000) — the number of problems in the contest.
					</p>
					<p>
						 Then n lines contain three integers each, each integer is either 0 or 1. If the first number in the line equals 1, then Petya is sure about the problem's solution, otherwise he isn't sure.
					</p>
					<p>
						  The second number shows Vasya's view on the solution, the third number shows Tonya's view. The numbers on the lines are separated by spaces.
					</p>
					<div class="prob_inside">
						Output
					</div>
					<p>
						Print a single integer — the number of problems the friends will implement on the contest.
					</p>
					<div class="prob_inside">
						Examples:
					</div>
					<div class="prob_inside">
						Input
					</div>
					<p>
						3
					</p>
					<p>1 1 0</p>	
					<p>1 1 1</p>
					<p>1 0 0</p>
					<div class="prob_inside">
						Output
					</div>
					<p>
						2
					</p>
					<div class="prob_inside">
						Input
					</div>
					<p>2</p>
					<p>1 0 0</p>
					<p>0 1 1</p>
					<div class="prob_inside">
						Output
					</div>
					<p>1</p>
			
				</article>
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
				<aside class="right">
					<div class="prob_title">Tags</div>
					<ol>
					<?php
						$conn=mysqli_connect("localhost","root","","Project");
						$sql = "SELECT * FROM Tags WHERE PROB_ID=10007";
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