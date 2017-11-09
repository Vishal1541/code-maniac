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
<style>
.skill_container{
	border: none;
	box-shadow: 0px 0px 1px #888888;
	background: #f8f8f8;
	width: 90%;
	line-height: 40px;
	margin-left: 23px;
	margin-bottom: 5px;
}
.skillbar{
	width: 90%;
	background-color: #ddd;
	text-align: right;
	padding-right: 10px;
	line-height: 40px;
	color: #ffffff;
	font-size: 10px;
}
</style>
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

				<article class="dp" class="right" style="width: 35%;">
					<img src="./img/login_avatar.png">
				</article>

				<article class="left" style="width: 60%;">
					<?php
						$conn=mysqli_connect("localhost","root","","Project");
						$handle = $_SESSION["user"];
						$institution = $_SESSION["institution"];

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
						$accuracy = (round($accuracy,2));

						$tle_per = ($TLE/$total)*100;
						$tle_per = (round($tle_per,2));

						$wa_per = ($WA/$total)*100;
						$wa_per = (round($wa_per,2));

						echo "<div style=\"color: #180426; font-weight: bold; font-size: 50px;\">Welcome $handle</div>";
						echo "<div style=\"color: #ff5900; font-size: 15px;\">$institution</div><br>";
						echo "<div style=\"color: #ff5900; font-weight: bold; font-size: 35px;\">Statistics</div>";

						echo "<table class='table_stats'>
							<tr>
								<td class=\"stats\"> Total Submissions </td>
								<td class=\"stats\"> $total </td>
							</tr>
							<tr>
								<td class=\"stats\"> Accepted </td>
								<td class=\"stats\"> $AC </td>
							</tr>
							<tr>
								<td class=\"stats\"> Time Limit Exceeded </td>
								<td class=\"stats\"> $TLE </td>
							</tr>
							<tr>
								<td class=\"stats\"> Wrong Answer </td>
								<td class=\"stats\"> $WA </td>
							</tr>
							</table>
						";
						echo'<div class="skill_container">';
						echo '<div class="skillbar" style="width: '.$accuracy.'%; background-color: #4CAF50;"> Accuracy = '.$accuracy.'% </div>';
						echo'</div>';

						echo'<div class="skill_container">';
						echo '<div class="skillbar" style="width: '.$wa_per.'%; background-color: #cc0808;"> WA = '.$wa_per.'% </div>';
						echo'</div>';

						echo'<div class="skill_container">';
						echo '<div class="skillbar" style="width: '.$tle_per.'%; background-color: #cca807;"> TLE = '.$tle_per.'% </div>';
						echo'</div>';

					?>
				</article>

				<article class="right" style="width: 35%;">
				<h3><span class="highlightblue">Submission History</span></h3>
					<?php
						$conn=mysqli_connect("localhost","root","","Project");
						$handle = $_SESSION["user"];
						$result = mysqli_query($conn,"SELECT * FROM Submissions where HANDLE='$handle'");
							echo "<table class='problems' border='1'>
							<thead>
							<tr>
							<th class=\"col\">Problem ID</th>
							<th class=\"col\">Status</th>
							</tr>
							</thead>

							<tbody style=\"height: 200px;\">";

							while($row = mysqli_fetch_array($result))
							{
							echo "<tr>";
							echo '<td class="col"><a href="'.$row['PROB_ID'].'.php">' .$row['PROB_ID']. '</a></td>';
							if($row['STATUS']=="AC"){
								echo "<td class=\"col\" style=\"color: green; font-weight: bold;\">" . $row['STATUS'] . "</td>";
							}
							else if($row['STATUS']=="WA"){
								echo "<td class=\"col\" style=\"color: red; font-weight: bold;\">" . $row['STATUS'] . "</td>";
							}
							if($row['STATUS']=="TLE"){
								echo "<td class=\"col\" style=\"color: #cea10c; font-weight: bold;\">" . $row['STATUS'] . "</td>";
							}
							echo "</tr>";
							}
							echo "</tbody>";
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
