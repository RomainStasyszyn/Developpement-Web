<?php
session_start();
?>

<!DOCTYPE html>

<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>Courseland - Vente de cours en ligne</title>
		<link href="../feuilles_style/cours3_style.css" rel="stylesheet">
		<link href="../feuilles_style/footer_style.css" rel="stylesheet">
		<link href="../feuilles_style/header_style.css" rel="stylesheet">
		<script src="http://code.jquery.com/jquery.js" type="text/javascript"></script>
		<script src="../menu_deroulant.js" type="text/javascript"></script>
	</head>
	
	<body>
		<div id="bloc_page">
		
			<?php include("header.php"); ?>
			
			<?php include("header_bis.php"); ?>
			
			<section>
				<article>
					<h3>Les sites statiques et dynamiques</h3>
					
					<?php
						$bdd = new PDO('mysql:host=localhost;dbname=courselandv2', 'root', '');
						$id_name = 'Les sites statiques et dynamiques';
						
						$req = $bdd->prepare('SELECT id_course FROM course WHERE name = ?');
						$req->execute(array($id_name));
						$id_cours = $req->fetch();
						
					
						if(isset($_SESSION['pseudo']) AND isset($_SESSION['id_user']))
						{
							$req = $bdd->prepare('SELECT id_purchase FROM purchase WHERE id_course = ? AND id_user = ?');
							$req->execute(array($id_cours['id_course'], $_SESSION['id_user']));
							$resultat = $req->fetch();
							
							if($resultat)
							{
					?>	

					<p class="espacement">On considère qu'il existe deux types de sites web : les sites statiques et les sites dynamiques.</p>

					<p class="espacement"><mark>Les sites statiques :</mark> ce sont des sites réalisés uniquement à l'aide des langages HTML et CSS. Ils fonctionnent très bien mais leur contenu ne peut pas être mis à jour automatiquement : il faut que le propriétaire du site (le webmaster) modifie le code source pour y ajouter des nouveautés. Ce n'est pas très pratique quand on doit mettre à jour son site plusieurs fois dans la même journée ! Les sites statiques sont donc bien adaptés pour réaliser des sites « vitrine », pour présenter par exemple son entreprise, mais sans aller plus loin. Ce type de site se fait de plus en plus rare aujourd'hui, car dès que l'on rajoute un élément d'interaction (comme un formulaire de contact), on ne parle plus de site statique mais de site dynamique.</p>

					<p class="espacement"><mark>Les sites dynamiques :</mark> plus complexes, ils utilisent d'autres langages en plus de HTML et CSS, tels que PHP et MySQL. Le contenu de ces sites web est dit « dynamique » parce qu'il peut changer sans l'intervention du webmaster ! La plupart des sites web que vous visitez aujourd'hui, y compris le Site du Zéro, sont des sites dynamiques. Le seul prérequis pour apprendre à créer ce type de sites est de déjà savoir réaliser des sites statiques en HTML et CSS.</p>

					<p class="conseil">Vous pouvez lire sur le Site du Zéro <a href="https://openclassrooms.com/courses/apprenez-a-creer-votre-site-web-avec-html5-et-css3" id="coursHtmlZero">le cours HTML/CSS</a> que j'ai rédigé pour vous mettre à niveau ou bien vous procurer <a href="http://www.eyrolles.com/Accueil/Editeur/5316/openclassrooms-ex-site-du-zero.php" id="livrePhpZero">le livre « Réalisez votre site web avec HTML5 et CSS3 ».</a></p>

					<div id="image_5">
						<img src="../images/image5.GIF" alt="l'éléphant PHP" title="La mascotte de PHP"/>
						<p><em>L'éléPHPant, la mascotte de PHP</em></p>
					</div>

					<p>L'objectif de ce cours est de vous rendre capables de réaliser des sites web dynamiques entièrement par vous-mêmes, pas à pas.
					En effet, ceux-ci peuvent proposer des fonctionnalités bien plus excitantes que les sites statiques. Voici quelques éléments que vous serez en mesure de réaliser :</p>

					<p class="espacement"><mark>un espace membres :</mark> vos visiteurs peuvent s'inscrire sur votre site et avoir accès à des sections qui leur sont réservées ;</p>

					<p class="espacement"><mark>un forum :</mark> il est courant aujourd'hui de voir les sites web proposer un forum de discussion pour s'entraider ou simplement passer le temps ;</p>

					<p class="espacement"><mark>un compteur de visiteurs :</mark> vous pouvez facilement compter le nombre de visiteurs qui se sont connectés dans la journée sur votre site, ou même connaître le nombre de visiteurs en train d'y naviguer !</p>

					<p class="espacement"><mark>des actualités :</mark> vous pouvez automatiser l'écriture d'actualités, en offrant à vos visiteurs la possibilité d'en rédiger, de les commenter, etc. ;</p>

					<p class="espacement"><mark>une newsletter :</mark> vous pouvez envoyer un e-mail à tous vos membres régulièrement pour leur présenter les nouveautés et les inciter ainsi à revenir sur votre site.</p>

					<p>Bien entendu, ce ne sont là que des exemples. Il est possible d'aller encore plus loin, tout dépend de vos besoins. Sachez par exemple que la quasi-totalité des sites de jeux en ligne sont dynamiques. On retrouve notamment des sites d'élevage virtuel d'animaux, des jeux de conquête spatiale, etc.</p>

					<p>Mais… ne nous emportons pas. Avant de pouvoir en arriver là, vous avez de la lecture et bien des choses à apprendre ! Commençons par la base : savez-vous ce qui se passe lorsque vous consultez une page web ?</p>

					<p class="creative"><mark id="opc">Licence : OpenClassRoom :</mark> <img src="../images/CreativeCommons.jpg" alt="creative commons picture" class="creativePicture"/></p>
					
						<?php
							}
							else
							{
								echo "Vous n'avez pas encore acheté ce cours afin de pouvoir y avoir accès : ";
								?>
								<form method="post" action="cours3.php">
									<input type="submit" value="Acheter ce cours" name="achat_cours3" id="achat_cours3"/>
								</form>
								<?php
								
								if(isset($_POST['achat_cours3']))
								{
									$insert_purchase = $bdd->prepare("INSERT INTO purchase(id_user, id_course) VALUES(?, ?)");
									$insert_purchase->execute(array($_SESSION['id_user'], $id_cours['id_course']));
									header("Location: cours3.php");
								}
							}
						}
						else
						{
							echo "Vous devez être connecté pour visualiser le reste de ce cours";
						}
						?>
				</article>
			</section>
			
			<?php include("footer.php"); ?>
			
		</div>		
	</body>
	
</html>