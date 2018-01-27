<header>
	<div id="grand_titre">
		<h1>Courseland</h1>
		<div id="petit_titre">
			<h2>Site de vente de cours en ligne</h2>
		</div>
	</div>
				
	<nav id="navigation">
		<ul>
			<li><a href="accueil.php" id="accueil">accueil</a></li>
			<?php
				/*
				Si les variables de sessions pseudonyme et identifiant ont ete crees alors c'est que l'utilisateur est connecte donc on affiche dans l'en-tete son pseudonyme
				a la place de l'onglet inscrivez-vous et on affiche l'onglet deconnectez-vous a la plase de l'onglet connectez-vous.
				Sinon on affiche les onglets basique inscrivez-vous et conectez-vous.
				*/
				if(isset($_SESSION['pseudo']) AND isset($_SESSION['id_user']))
				{
				?>
					<li><a href="profil.php" id=pseudo><?php echo $_SESSION['pseudo']; ?></a></li>
					<li><a href="deconnexion.php" id="deconnexion">deconnexion</a></li>
				<?php
				}
				else
				{
				?>
					<li><a href="inscription.php" id="inscription">inscription</a></li>
					<li><a href="connexion.php" id="connexion">connexion</a></li>
				<?php
				}
			?>
			<li><a href="#" id="cours">cours</a></li>
		</ul>
	</nav>
</header>