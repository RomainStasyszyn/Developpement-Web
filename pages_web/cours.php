<?php
session_start();
?>

<!DOCTYPE html>

<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>Courseland - Vente de cours en ligne</title>
		<link href="../feuilles_style/cours_style.css" rel="stylesheet">
		<link href="../feuilles_style/footer_style.css" rel="stylesheet">
		<link href="../feuilles_style/header_style.css" rel="stylesheet">
	</head>
	
	<body>
		<div id="bloc_page">
		
			<?php include("header.php"); ?>
			
			<div id="banniere">
				<img src="../images/New-York-City-Image.jpg" id="nyc" alt="New York" />
			</div>
			
			<section>
				<article>
					<nav>
						<div id="cours_info">
							<h3>Informatique :</h3>
							<ul class="liste_cours">
								<li><a href="cours1.php" class="cours1">cours1</a></li>
								<li><a href="cours2.php" class="cours2">cours2</a></li>
								<li><a href="cours3.php" class="cours3">cours3</a></li>
								<li><a href="" class="cours4">cours4</a></li>
							</ul>
						</div>
						<div id="cours_math">
							<h3>Mathématiques :</h3>
							<ul class="liste_cours">
								<li><a href="maths1.php" class="cours1">cours1</a></li>
								<li><a href="maths2.php" class="cours2">cours2</a></li>
								<li><a href="" class="cours3">cours3</a></li>
								<li><a href="" class="cours4">cours4</a></li>
							</ul>
						</div>
						<div id="cours_phys">
							<h3>Physique :</h3>
							<ul class="liste_cours">
								<li><a href="physique1.php" class="cours1">cours1</a></li>
								<li><a href="physique2.php" class="cours2">cours2</a></li>
								<li><a href="" class="cours3">cours3</a></li>
								<li><a href="" class="cours4">cours4</a></li>
							</ul>
						</div>
						<div id="cours_chim">
							<h3>Chimie :</h3>
							<ul class="liste_cours">
								<li><a href="chimie1.php" class="cours1">cours1</a></li>
								<li><a href="chimie2.php" class="cours2">cours2</a></li>
								<li><a href="" class="cours3">cours3</a></li>
								<li><a href="" class="cours4">cours4</a></li>
							</ul>
						</div>
					</nav>
				</article>
			</section>
			
			<?php include("footer.php"); ?>
			
		</div>		
	</body>
	
</html>