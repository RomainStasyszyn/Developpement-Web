<!DOCTYPE html>

<html lang="fr">

	<?php
		$bdd = new PDO('mysql:host=localhost;dbname=courselandv2', 'root', '');
		
		/*
		Si le bouton d'envoi du formulaire a ete clique on entre dans le if.
		*/
		if(isset($_POST['envoi']) AND !empty($_POST['pseudo']) AND !empty($_POST['pwd1']) AND !empty($_POST['pwd2']) AND !empty($_POST['mail'])){
			/*
			Creation des variables representant les informations saisies par l'utilisateur :
			son pseudonyme, son mot de passe, son mot de passe de confirmation et son adresse e-mail.
			*/
			$pseudo = htmlspecialchars($_POST['pseudo']);
			$mail = htmlspecialchars($_POST['mail']);
			$mdp1 = sha1($_POST['pwd1']);
			
			/*Si l'adresse e-mail est valide on continu sinon on affiche comme message d'erreur que l'adresse e-mail n'est pas valide.*/
			
			$query = $bdd->query("SELECT id_user FROM user WHERE pseudo = '$pseudo'");
			$count = $query->rowCount();
							
			if($count != 1){
					/*
					On questionne la base de donnees afin de savoir si un utilisateur deja inscrit n'utiliserait pas deja cette adresse e-mail.
					Si l'adresse e-mail a ete trouvee dans la base de donnees on affiche comme message d'erreur que l'adresse e-mail est deja utilisee,
					sinon on continu.
					*/
					$query = $bdd->query("SELECT id_user FROM user WHERE email = '$mail'");
					$countmail = $query->rowCount();
								
					if($countmail != 1){
						/*
						Si tous les tests on ete passes avec succes alors toutes les informations ont ete saisies et sont valides donc on insere les informations
						du nouvel utilisateur inscrit dans la base de donnees.
						*/
						$insert_user = $bdd->prepare("INSERT INTO user(pseudo, password, email) VALUES(?, ?, ?)");
						$insert_user->execute(array($pseudo, $mdp1, $mail));
						$erreur = "Votre compte a bien été crée !";
					}	
					else{
						$erreur = "Adresse mail déjà utilisée";
					}
			}
			else{
				$erreur = "Pseudo déjà utilisé";
			}
		}					
	?>

	<head>
		<meta charset="utf-8">
		<title>Courseland - Vente de cours en ligne</title>
		<link href="../feuilles_style/inscription_style.css" rel="stylesheet">
		<link href="../feuilles_style/footer_style.css" rel="stylesheet">
		<link href="../feuilles_style/header_style.css" rel="stylesheet">
		<script src="http://code.jquery.com/jquery.js" type="text/javascript"></script>
		<script src="../menu_deroulant.js" type="text/javascript"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js" type="text/javascript"></script>
		
		<script type = "text/javascript">
			function validate(){
				// récupération des entrées
				pseudo = document.getElementById("inscription_pseudo").value;
				password1 = document.getElementById("inscription_pwd1").value;
				password2 = document.getElementById("inscription_pwd2").value;
				email = document.getElementById("inscription_mail").value;
    
				//création d’un message d’erreur vide
				errors = "";
				var text = "";
    
				//vérification du pseudonyme. Il doit simplement exister
				if (pseudo == ""){
					errors += "Veuillez entrer un nom \n";
				}
			
				//vérification du mot de passe. Il doit simplement exister
				if(password1 == ""){
					errors += "Veuillez entrer un mot de passe\n";
				}
			
				//vérification du second pseudonyme. Il doit simplement exister
				if(password2 == ""){
					errors += "Veuillez confirmer votre mot de passe\n";
				}
				
				//vérification de l'email. Il doit simplement exister
				if(email == ""){
					errors += "Veuillez entrer une adresse mail\n";
				}
			
				//le pseudonyme doit contenir entre 3 et 16 caracteres
				pseudoRE = /.{3,16}/;
				if(pseudo.match(pseudoRE)){
				} else{
					errors += "Le pseudo doit faire entre 3 et 16 caractères\n";
					$("#inscription_pseudo").val(text);
				}
			
				//Les deux mots de passe saisis doivent etre les memes
				if(password1 != password2){
					errors += "Votre confirmation du mot de passe ne correspond pas\n";
					$("#inscription_pwd1").val(text);
					$("#inscription_pwd2").val(text);
				}
			
				//le mot de passe doit contenir entre 8 et 32 caractères
				passwordRE = /.{8,32}/;
				if(password1.match(passwordRE)){
				} else{
					errors += "Le mot de passe doit faire 8 caractères minimum et 32 maximum\n";
					$("#inscription_pwd1").val(text);
					$("#inscription_pwd2").val(text);
				}
			
				//le mot de passe doit contenir au moins une majuscule
				passwordRE1 = /[A-Z]{1,}/;
				if(password1.match(passwordRE1)){
				} else{
					errors += "Le mot de passe doit contenir au moins une majuscule\n";
					$("#inscription_pwd1").val(text);
					$("#inscription_pwd2").val(text);
				}
			
				//le mot de passe doit contenir au moins un chiffre
				passwordRE2 = /\d{1,}/;
				if(password1.match(passwordRE2)){
				} else{
					errors += "Le mot de passe doit contenir au moins un chiffre\n";
					$("#inscription_pwd1").val(text);
					$("#inscription_pwd2").val(text);
				}
    
				//vérification de l’adresse e-mail
				emailRE = /^.+@.+\..{2,4}$/;
				if (email.match(emailRE)){
				} else {
					errors += "Veuillez entrer une adresse e-mail valide \n";
					$("#inscription_mail").val(text);
				}
    
				//vérification des erreurs
				if (errors == ""){
					alert ("Traitement des données en cours");
				} else {
					alert(errors);
				}
			}
		</script>
	</head>
	
	<body>
		<div id="bloc_page">
		
			<?php include("header.php"); ?>
			
			<?php include("header_bis.php"); ?>
			
			<section>
				<form method="post" action="inscription.php">
					<fieldset>
						<!--<legend>Vos informations</legend>-->
					
						<label for="pseudo" id="inscription_label_pseudo">Votre nom d'utilisateur</label> <input type="text" name="pseudo" id="inscription_pseudo" required autofocus />
					
						<label for="pwd1" id="inscription_label_pwd1">Votre mot de passe</label> <input type="password" name="pwd1" id="inscription_pwd1" required />
					
						<label for="pwd2" id="inscription_label_pwd2">Confirmez votre mot de passe</label> <input type="password" name="pwd2" id="inscription_pwd2" required />
					
						<label for="mail" id="inscription_label_mail">Votre adresse e-mail</label> <input type="email" name="mail" id="inscription_mail" placeholder="Ex:patate@citron.com" required />
					
						<input type="submit" value="S'inscrire" name="envoi" id="envoi" onclick = "validate()" />
						
						
						<?php
							/*
							Si il y a un probleme avec les informations saisies par l'utilisateur on affiche un message d'erreur en bas a gauche du formulaire d'inscription
							informant l'utilisateur de ce qui ne va pas sinon on affiche a la fin de l'inscription qu'elle a ete effectuee avec succes.
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