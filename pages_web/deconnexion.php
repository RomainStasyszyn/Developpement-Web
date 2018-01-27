<?php
/*
On detruit la session courante et on renvoi l'utilisateur sur la page d'accueil du site Courseland.
*/
session_start();
$_SESSION = array();
session_destroy();
header("Location: accueil.php");
?>

<!DOCTYPE html>

<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>Courseland - Vente de cours en ligne</title>
		<link href="../feuilles_style/accueil_style.css" rel="stylesheet">
		<link href="../feuilles_style/footer_style.css" rel="stylesheet">
		<link href="../feuilles_style/header_style.css" rel="stylesheet">
		<script src="http://code.jquery.com/jquery.js" type="text/javascript"></script>
		<script src="../menu_deroulant.js" type="text/javascript"></script>
	</head>
	
	<body>
		<div id="bloc_page">
		
			<?php include("header.php"); ?>
			
			<?php include("header_bis.php"); ?>
			
			<p>Vous êtes à présent déconnecté</p>
			
			<?php include("footer.php"); ?>
			
		</div>		
	</body>
	
</html>