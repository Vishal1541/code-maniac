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
					10003. Way Too Long Words
					</div>
					<p>
						Sometimes some words like "localization" or "internationalization" are so long that writing them many times in one text is quite tiresome.
					</p>
					<p>
						Let's consider a word too long, if its length is strictly more than 10 characters. All too long words should be replaced with a special abbreviation.
					</p>
					<p>
						This abbreviation is made like this: we write down the first and the last letter of a word and between them we write the number of letters between the first and the last letters. That number is in decimal system and doesn't contain any leading zeroes.
					</p>
					<p>
						Thus, "localization" will be spelt as "l10n", and "internationalization» will be spelt as "i18n".
					</p>
					<p>
						You are suggested to automatize the process of changing the words with abbreviations. At that all too long words should be replaced by the abbreviation and the words that are not too long should not undergo any changes.		
					</p>
					<div class="prob_inside">
						Input
					</div>
					<p>
						The first line contains an integer n (1 ≤ n ≤ 100). Each of the following n lines contains one word. All the words consist of lowercase Latin letters and possess the lengths of from 1 to 100 characters.
					</p>
					<div class="prob_inside">
						Output
					</div>
					<p>
						Print n lines. The i-th line should contain the result of replacing of the i-th word from the input data.
					</p>
					<div class="prob_inside">
						Examples:
					</div>
					<div class="prob_inside">
						Input
					</div>
					<p>
						4
					</p>
					<p>
						word
					</p>
					<p>
						localization
					</p>
					<p>
						internationalization
					</p>
					<p>
						pneumonoultramicroscopicsilicovolcanoconiosis
					</p>
					<div class="prob_inside">
						Output
					</div>
					<p>
						word
					</p>
					<p>
						l10n
					</p>
					<p>
						i18n
					</p>
					<p>
						p43s
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
				<aside class="right">
					<div class="prob_title">Tags</div>
					<ol>
					<?php
						$conn=mysqli_connect("localhost","root","","Project");
						$sql = "SELECT * FROM Tags WHERE PROB_ID=10003";
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