<style>
.solved {
	padding: 10px;
	width: 50px;
	border: none;
	box-shadow: 0px;
    color: #1e9120;
    font-weight: bold;
}
</style>
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
	<div class="maincontainer" style="height: 500px;">
		
		
		<section id="main">
			<div class="main">
				<article class="left">
				<p>
					<h3><span class="highlightblue">All Problems</span></h3>
				</p>
					<?php
						$conn=mysqli_connect("localhost","root","","Project");
						$result = mysqli_query($conn,"SELECT * FROM Problems");
						// echo '<div class="table>"';
							echo "<table class='problems' border='1'>
							<tr>
							<th>Problem ID</th>
							<th>Problem Name</th>
							<th>Successful Sumbissions</th>
							<th>Accuracy</th>
							</tr>";
							while($row = mysqli_fetch_array($result))
							{
							$handle = $_SESSION["user"];
							$ID = $row['PROB_ID'];

							$Total = "SELECT * FROM Submissions WHERE PROB_ID = $ID";
							$Total = mysqli_query($conn,$Total);
							$Total = mysqli_num_rows($Total);

							$Successful = "SELECT * FROM Submissions WHERE STATUS='AC' AND PROB_ID = $ID";
							$Successful = mysqli_query($conn,$Successful);
							$Successful = mysqli_num_rows($Successful);
							if($Successful<1){
								$Accuracy = 0;
							}
							else{
								$Accuracy = ($Successful/$Total)*100;
							}

							echo "<tr>";
							echo '<td class="col"><a href="'.$row['PROB_ID'].'.php">' .$row['PROB_ID']. '</a></td>';
							echo '<td class="col"><a href="'.$row['PROB_ID'].'.php">' .$row['PROB_NAME']. '</a></td>';
							echo "<td class=\"col\"> $Successful </td>";
							echo "<td class=\"col\"> $Accuracy </td>";
							$isSolved = "SELECT * FROM Submissions WHERE HANDLE='$handle' AND STATUS='AC' AND PROB_ID = $ID";
							$isSolved = mysqli_query($conn,$isSolved);
							$isSolved = mysqli_num_rows($isSolved);
							if($isSolved>0){
								echo "<td class=\"solved\"> Solved </td>";
							}
							echo "</tr>";
							}
							echo "</table>";
						// echo '</div>';

						mysqli_close($conn);
					?>
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