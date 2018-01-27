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
		if(isset($_POST['envoi_profil'])){
			
			$erreur ="";
			$id_user = $_SESSION['id_user'];
			
			if(!empty($_POST['pseudo'])){

				$pseudo = htmlspecialchars($_POST['pseudo']);
				$query = $bdd->query("SELECT id_user FROM user WHERE pseudo = '$pseudo'");
				$count = $query->rowCount();
				
				if($count != 1){
					
					$update_user = $bdd->prepare("UPDATE user SET pseudo = ? WHERE id = '$id_user'");
					$update_user->bindParam(1, $pseudo);
					$update_user->execute();
					$_SESSION['pseudo'] = $pseudo;
				}
				else{
					$erreur += "Ce pseudonyme est déjà utilisé\n";
				}
			}
			
			if(!empty($_POST['mail'])){
				
				$mail = htmlspecialchars($_POST['mail']);
				$query = $bdd->query("SELECT id_user FROM user WHERE email = '$mail'");
				$countmail = $query->rowCount();
				
				if($countmail != 1){
					$update_user = $bdd->prepare("UPDATE user SET email = :emailA WHERE id = '$id_user'");
					$update_user->bindParam(":emailA", $mail);
					$update_user->execute();
					$_SESSION['email'] = $mail;
				}
				else{
					$erreur += "Cet email est déjà utilisé\n";
				}
			}
			
			if(!empty($_POST['nom'])){
				$nom = htmlspecialchars($_POST['nom']);
				$nom_length = strlen($nom);
				if($nom_length < 255){
					$update_user = $bdd->prepare("UPDATE user SET nom = :nomA WHERE id = '$id_user'");
					$update_user->bindParam(":nomA", $nom);
					$update_user->execute();
					$_SESSION['nom'] = $nom;	
				}
				else{
					$erreur += "Le nom doit contenir moins de 255 caractères\n";
				}
			}
			
			if(!empty($_POST['prenom'])){
				$prenom = htmlspecialchars($_POST['prenom']);
				$prenom_length = strlen($prenom);
				if($prenom_length < 255){
					$update_user = $bdd->prepare("UPDATE user SET prenom = :prenomA WHERE id = '$id_user'");
					$update_user->bindParam(":prenomA", $prenom);
					$update_user->execute();
					$_SESSION['prenom'] = $prenom;	
				}
				else{
					$erreur += "Le prénom doit contenir moins de 255 caractères\n";
				}
			}
			
			if(!empty($_POST['solde'])){
				$solde = $_POST['solde'];
				if($solde > 0){
					$update_user = $bdd->prepare("UPDATE user SET solde = :soldeA WHERE id = '$id_user'");
					$update_user->bindParam(":soldeA", $solde);
					$update_user->execute();
					$_SESSION['solde'] = $solde;	
				}
				else{
					$erreur += "Les fonds que vous souhaitez ajouter ne peuvent être négatifs\n";
				}
			}
			
			header("Location: profil.php");
		}					
	?>

	<head>
		<meta charset="utf-8">
		<title>Courseland - Vente de cours en ligne</title>
		<link href="../feuilles_style/profil_style.css" rel="stylesheet">
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
				<form method="post" action="profil.php">
					<fieldset>
						<!--<legend>Vos informations</legend>-->
					
						<div id="petit_carre">
						
							<!--<div id="avatar">
							</div>-->
						
							<label for="profil_pseudo" id="profil_label_pseudo">Pseudonyme utilisé : <?php echo $_SESSION['pseudo'] ?></label>
							
							<input type="text" name="pseudo" id="profil_pseudo" />
					
							<label for="profil_mail" id="profil_label_mail">Adresse e-mail utilisée : <?php echo $_SESSION['email'] ?></label>
							
							<input type="email" name="mail" id="profil_mail" placeholder="Ex:patate@citron.com" />
							
							<label for="profil_nom" id="profil_label_nom">Nom utilisé : <?php echo $_SESSION['nom'] ?></label>
							
							<input type="text" name="nom" id="profil_nom" />
							
							<label for="profil_prenom" id="profil_label_prenom">Prénom utilisé : <?php echo $_SESSION['prenom'] ?></label>
							
							<input type="text" name="prenom" id="profil_prenom" />
							
							
							<label for="profil_solde" id="profil_label_solde">Solde de votre compte : <?php echo $_SESSION['solde'] ?></label>
							
							<input type="number" name="solde" id="profil_solde" />
					
							<input type="submit" value="Sauvegarder les modifications" name="envoi_profil" id="envoi_profil" />
						
						<?php
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