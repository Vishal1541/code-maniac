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
	<section>
	<div class="maincontainer" style="height: 600px;">

			<section id="main">
			<div class="main">
				<article class="dp" class="left">
					<img src="./img/login_avatar.png">
				</article>
			<?php
				$conn=mysqli_connect("localhost","root","","Project");
				$handle = $_SESSION["user"];

				$total = "SELECT * FROM Submissions WHERE HANDLE='$handle'";
				$total = mysqli_query($conn,$total);
				$total = mysqli_num_rows($total);

				$AC = "SELECT * FROM Submissions WHERE HANDLE='$handle' AND STATUS='AC'";
				$AC = mysqli_query($conn,$AC);
				$AC = mysqli_num_rows($AC);

				$WA = "SELECT * FROM Submissions WHERE HANDLE='$handle' AND STATUS='WA'";
				$WA = mysqli_query($conn,$WA);
				$WA = mysqli_num_rows($WA);

				$TLE = "SELECT * FROM Submissions WHERE HANDLE='$handle' AND STATUS='TLE'";
				$TLE = mysqli_query($conn,$TLE);
				$TLE = mysqli_num_rows($TLE);

				$accuracy = ($AC/$total)*100;

				echo "Welcome $handle <br>";
				echo "Total submissions : $total<br>";
				echo "Accepted: $AC<br>";
				echo "Time limit exceeded : $TLE<br>";
				echo "Wrong Answer : $WA<br>";
				echo "Accuracy : $accuracy<br>";

			?>
<!-- 
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
				</aside> -->
				<article class="left">
				<h3><span class="highlightblue">Submission History</span></h3>
					<?php
						$conn=mysqli_connect("localhost","root","","Project");
						$handle = $_SESSION["user"];
						$result = mysqli_query($conn,"SELECT * FROM Submissions where HANDLE='$handle'");
							echo "<table class='problems' border='1'>
							<tr>
							<th class=\"col\">Problem ID</th>
							<th class=\"col\">Status</th>
							</tr>";

							while($row = mysqli_fetch_array($result))
							{
							echo "<tr>";
							echo '<td class=\"col\"><a href="'.$row['PROB_ID'].'.php">' .$row['PROB_ID']. '</a></td>';
							echo "<td class=\"col\">" . $row['STATUS'] . "</td>";
							echo "</tr>";
							}
							echo "</table>";

						mysqli_close($conn);
					?>
				</article>
				
			</div>
		</section>
		

	</div>
	</section>
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