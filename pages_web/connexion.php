<?php
session_start();
?>

<!DOCTYPE html>

<html lang="fr">

	<?php
		$bdd = new PDO('mysql:host=localhost;dbname=courselandv2', 'root', '');
	
		/*
		Si le bouton d'envoi du formulaire a ete clique on entre dans le if.
		*/
		if(isset($_POST['envoi']))
		{
			/*Creation des variables representant le pseudonyme et le mot de passe saisis par l'utilisateur tentant de se connecter.*/
			$mdp_hache = sha1($_POST['pwd']);
			$pseudo = $_POST['pseudo'];
			
			/*On questionne la base de donnee quant a l'existance d'un utilisateur deja inscrit possedant le pseudonyme et le mot de passe saisis par l'utilisateur tentant de se connecter.*/
			$req = $bdd->prepare('SELECT id_user, email FROM user WHERE pseudo = ? AND password = ?');
			$req->execute(array($pseudo, $mdp_hache));
			$resultat = $req->fetch();
			
			/*Si le pseudonyme ou bien le mot de passe saisis n'ont pas ete trouve dans la base de donnees alors l'utilisateur a saisi de mauvais identifiants.
			Sinon on connecte l'utilisateur et on cree les deux variables de session identifiant et pseudonyme de l'utilisateur et on le redirige vers la page d'accueil du site.
			*/
			if(!$resultat OR !$mdp_hache OR !$pseudo)
			{
				$erreur = "Mauvais identifiant ou mot de passe";
			}
			else
			{
				session_start();
				$_SESSION['id_user'] = $resultat['id_user'];
				$_SESSION['pseudo'] = $pseudo;
				$_SESSION['email'] = $resultat['email'];
				$_SESSION['nom'] = $resultat['nom'];
				$_SESSION['prenom'] = $resultat['prenom'];
				$_SESSION['tel'] = $resultat['tel'];
				$_SESSION['solde'] = $resultat['solde'];
				header("Location: accueil.php");
			}
		}
	?>

	<head>
		<meta charset="utf-8">
		<title>Courseland - Vente de cours en ligne</title>
		<link href="../feuilles_style/connexion_style.css" rel="stylesheet">
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
				<form method="post" action="connexion.php">
					<fieldset>
						<label for="pseudo" id="connexion_label_pseudo">Votre nom d'utilisateur</label> <input type="text" name="pseudo" id="connexion_pseudo" required autofocus />
					
						<label for="password" id="connexion_label_pwd">Votre mot de passe</label> <input type="password" name="pwd" id="connexion_pwd" required />
					
						<input type="submit" value="Se connecter" name="envoi" id="connexion_envoi"/>
						
						<?php
							/*
							Si il y a un probleme avec les informations saisies par l'utilisateur on affiche un message d'erreur en bas a gauche du formulaire de connexion
							informant l'utilisateur de ce qui ne va pas sinon on connecte l'utilisateur sur le site Courseland.
							*/
							if(isset($erreur))
							{
								echo "<mark id=\"erreur\">$erreur</mark>";
							}
						?>
						
					</fieldset>
				</form>
			</section>
			
			<?php include("footer.php"); ?>
			
		</div>		
	</body>
	
</html>