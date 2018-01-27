<?php
session_start();
?>

<!DOCTYPE html>

<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>Courseland - Vente de cours en ligne</title>
		<link href="../feuilles_style/cours1_style.css" rel="stylesheet">
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
					<h3>Le fonctionnement des sites web</h3>

					<?php
						$bdd = new PDO('mysql:host=localhost;dbname=courselandv2', 'root', '');
						$id_name = 'Le fonctionnement des sites web';
						
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
							
					<p class="question"><em class="remarque">Comment fonctionnent les sites web ?</em></p>

					<p>Non, n'ayez pas peur de poser des questions même si vous pensez qu'elles sont « bêtes ». Il est très important que nous en parlions un peu avant de nous lancer à fond dans la création de sites !
					Je suis certain que vous consultez des sites web tous les jours. Pour cela, vous lancez un programme appelé le navigateur web en cliquant sur l'une des icônes représentées à la figure suivante.</p>
			
					<div id="image_1">
						<img src="../images/image1.png" alt="Photo des principaux moteurs de recherche" title="Les 5 moteurs de recherche les plus utilisés"/>
						<p><em>Les icônes des navigateurs web les plus répandus</em></p>
					</div>
			
					<p>Avec le navigateur, vous pouvez consulter n'importe quel site web. Voici par exemple un navigateur affichant le célèbre site web Wikipédia (figure suivante).</p>
			
					<div id="image_2">
						<img src="../images/image2.png" alt="Le site web wikipédia" title="une photo du célèbre site wikipédia"/>
						<p><em>Le site web Wikipédia</em></p>
					</div>
			
					<p>Je suis sûr que vous avez l'habitude d'utiliser un navigateur web ! Aujourd'hui, tout le monde sait aller sur le Web… mais qui sait vraiment comment le Web fonctionne ? Comment créer des sites web comme celui-ci ?</p>

					<p class="question"><em class="remarque">J'ai entendu parler de HTML, de CSS, est-ce que cela a un rapport avec le fonctionnement des sites web ?</em></p>

					<p>Tout à fait !
					Il s'agit de langages informatiques qui permettent de créer des sites web. Tous les sites web sont basés sur ces langages, ils sont incontournables et universels aujourd'hui. Ils sont à la base même du Web. Le langage HTML a été inventé par un certain Tim Berners-Lee en 1991…<br />
					Tim Berners-Lee suit encore aujourd'hui avec attention l'évolution du Web. Il a créé le World Wide Web Consortium (W3C) qui définit les nouvelles versions des langages liés au Web. Il a par ailleurs créé plus récemment la World Wide Web Foundation qui analyse et suit l'évolution du Web.</p>

					<p>De nombreuses personnes confondent (à tort) Internet et le Web. Il faut savoir que le Web fait partie d'Internet.
					Internet est un grand ensemble qui comprend, entre autres : le Web, les e-mails, la messagerie instantanée, etc.
					Tim Berners-Lee n'est donc pas l'inventeur d'Internet, c'est « seulement » l'inventeur du Web.</p>

					<p>Les langages HTML et CSS sont à la base du fonctionnement de tous les sites web. Quand vous consultez un site avec votre navigateur, il faut savoir que, en coulisses, des rouages s'activent pour permettre au site web de s'afficher. L'ordinateur se base sur ce qu'on lui a expliqué en HTML et CSS pour savoir ce qu'il doit afficher, comme le montre la figure suivante.</p>
			
					<div id="image_3">
						<img src="../images/image3.png" alt="Exemple de rendu d'une page HTML" title="Un exemple de traduction d'une page écrite en HTML" />
					<p><em>Du HTML à l'écran</em></p>
					</div>
			
					<p>HTML et CSS sont deux « langues » qu'il faut savoir parler pour créer des sites web. C'est le navigateur web qui fera la traduction entre ces langages informatiques et ce que vous verrez s'afficher à l'écran.
					Vous vous demandez sûrement pourquoi il faut connaître deux langages pour créer des sites web ? Je vous réponds sans plus tarder !</p>
	
					<p class="creative"><mark id="opc">Licence : OpenClassRoom :</mark> <img src="../images/CreativeCommons.jpg" alt="creative commons picture" class="creativePicture"/></p>
					
						<?php
							}
							else
							{
								echo "Vous n'avez pas encore acheté ce cours afin de pouvoir y avoir accès : ";
								?>
								<form method="post" action="cours1.php">
									<input type="submit" value="Acheter ce cours" name="achat_cours1" id="achat_cours1"/>
								</form>
								<?php
								
								if(isset($_POST['achat_cours1']))
								{
									$insert_purchase = $bdd->prepare("INSERT INTO purchase(id_user, id_course) VALUES(?, ?)");
									$insert_purchase->execute(array($_SESSION['id_user'], $id_cours['id_course']));
									header("Location: cours1.php");
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