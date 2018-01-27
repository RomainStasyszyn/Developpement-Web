<?php
session_start();
?>

<!DOCTYPE html>

<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>Courseland - Vente de cours en ligne</title>
		<link href="../feuilles_style/coursnoninfo_style.css" rel="stylesheet">
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
					<h3>Dérivée</h3>

					<?php
						$bdd = new PDO('mysql:host=localhost;dbname=courselandv2', 'root', '');
						$id_name = 'derivee';
						
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

					<p>En analyse, le nombre dérivé en un « point » (réel) x d'une fonction f à variable et valeurs réelles est le coefficient directeur de la tangente au graphe de f au point (x, f(x)). C'est le coefficient directeur de l'approximation affine de f en x ; ce nombre n'est donc défini que si cette tangente — ou cette approximation — existe.</p>
					
					<p>La dérivée d'une fonction f est une fonction qui, à tout nombre pour lequel f admet un nombre dérivé, associe ce nombre dérivé. La dérivée en un point d'une fonction de plusieurs variables réelles, ou à valeurs vectorielles (en), est plus couramment appelée différentielle de la fonction en ce point, et n'est pas traitée ici.</p>
					
					<p>La notion de nombre dérivé a vu le jour au xviie siècle dans les écrits de Leibniz et de Newton qui le nomme fluxion et qui le définit comme « le quotient ultime de deux accroissements évanescents ».</p>
					
					<p>La dérivée de la fonction f, est notée en mathématiques f', ou df/dx. On utilise aussi des notations spécifiques (surtout en physique) pour désigner la dérivée par rapport au temps qui s'écrit avec un point surmontant la lettre (f), la dérivée seconde s'écrivant alors grâce à un tréma surmontant la lettre. Cette notation est appelée « notation de Newton ». On utilise dans le même esprit, les notations prime et seconde pour noter la dérivée par rapport à l'espace.</p>
					
					<p>La notion de dérivée est une notion fondamentale en analyse. Elle permet d'étudier les variations d'une fonction, de construire des tangentes à une courbe et de résoudre des problèmes d'optimisation.</p>
					
					<p>En sciences, lorsqu'une grandeur est fonction du temps, la dérivée de cette grandeur donne la vitesse instantanée de variation de cette grandeur, et la dérivée de la dérivée donne l'accélération. Par exemple, la vitesse instantanée d'un mobile est la valeur à cet instant de la dérivée de sa position par rapport au temps, et son accélération est la valeur à cet instant de la dérivée par rapport au temps, de sa vitesse.</p>
					
					<p>On généralise la notion de dérivée en étendant celle-ci au champ complexe et on parle alors de dérivée complexe. Pour une fonction de plusieurs variables réelles, on parle de la dérivée partielle par rapport à l'une de ses variables.</p>
					
					<p>Il existe aussi une définition purement algébrique de la dérivée. On en trouve un exemple dans l'article polynôme formel.</p>
					
					<h4>Approche intuitive</h4>
			
					<div id="courbe_simple">
						<img src="../images/courbe_simple.png" alt="photo d'un courbe simple" title="Une courbe simple"/>
						<p id="courbe_simple_descr"><em>Une courbe simple</em></p>
					</div>
			
					<p>Pour approcher cette notion de manière intuitive, commençons par nous donner une courbe représentative d'une fonction continue dans un repère cartésien, c'est-à-dire tracée d'un seul trait de crayon, et bien « lisse » ; on dira là que la fonction associée est dérivable.
					Quel que soit le point que l'on choisit sur la courbe, on pourra alors tracer ce qu'on appelle une tangente, c'est-à-dire une droite qui épouse localement la direction de cette courbe. Si l'on trace la courbe et sa tangente et que l'on s'approche en zoomant suffisamment, on aura de plus en plus de mal à distinguer la courbe de sa tangente. Si la courbe « monte » (c'est-à-dire si la fonction associée est croissante), la tangente sera également montante ; inversement, si la fonction est décroissante, la tangente sera descendante.
					Si on se donne une abscisse x_0 pour laquelle la fonction f, est dérivable, on appelle nombre dérivé de f\, en x_0 le coefficient directeur de la tangente à la courbe au point d'abscisse x_0. Ce réel donne de précieuses informations sur le comportement local d'une fonction : c'est la mesure algébrique de la vitesse à laquelle cette fonction change lorsque sa variable change.
					Ainsi, si le nombre dérivé d'une fonction est positif sur un intervalle, cette fonction sera croissante sur ce même intervalle. Inversement, s'il est négatif, elle sera décroissante. Lorsque le nombre dérivé est nul en un point, la courbe admet une tangente horizontale en ce point (pour plus de détails, voir Fonction monotone#Monotonie et signe de la dérivée).</p>

					<h4>Approche historique</h4>

					<p>Dès la seconde moitié du xviie siècle, le domaine mathématique de l'analyse numérique connut une avancée prodigieuse grâce aux travaux de Newton et de Leibniz en matière de calcul différentiel et intégral, traitant notamment de la notion d'infiniment petit et de son rapport avec les sommes dites intégrales.
					C'est cependant Blaise Pascal qui, dans la première moitié du xviie siècle, a le premier mené des études sur la notion de tangente à une courbe - lui-même les appelait « touchantes ». Le marquis de l'Hospital contribuera à diffuser le calcul différentiel de Leibniz à la fin du xviie siècle grâce à son livre sur l'analyse des infiniment petits. Wallis, mathématicien anglais (surtout connu pour la suite d'intégrales qui porte son nom) contribua également à l'essor de l'analyse différentielle.</p>

					<p>Néanmoins cette théorie tout juste éclose n'est pas encore, à l'époque, pourvue de toute la rigueur mathématique qu'elle aurait exigée, et notamment la notion d'infiniment petit introduite par Newton, qui tient plus de l'intuitif, et qui pourrait engendrer des erreurs dès lors que l'on ne s'entend pas bien sur ce qui est ou non négligeable. C'est au xviiie siècle que d'Alembert introduit la définition plus rigoureuse du nombre dérivé en tant que limite du taux d'accroissement - sous une forme semblable à celle qui est utilisée et enseignée de nos jours. Cependant, à l'époque de d'Alembert, c'est la notion de limite qui pose problème : R n'est pas encore construit formellement (voir Construction des nombres réels). C'est seulement avec les travaux de Weierstrass au milieu du xixe siècle que le concept de dérivée sera entièrement formalisé.</p>

					<p>C'est à Lagrange (fin du xviiie siècle) que l'on doit la notation f'(x), aujourd'hui usuelle, pour désigner le nombre dérivé de f en x. C'est aussi à lui qu'on doit le nom de « dérivée » pour désigner ce concept mathématique.</p>
			
					<h4>Définition formelle</h4>
					
					<p>Soit f, une fonction réelle à valeurs réelles définie sur une réunion quelconque d'intervalles non triviaux, et x0 appartenant à l'intérieur de l'ensemble de définition Df.</p>
					
					<p>Pour tout h appartenant à R* tel que [x0,x0+h] inclue dans Df, on appelle taux d'accroissement de f, en x0 et avec un pas de h, la quantité :</p>
					
					<p>tx0(h) = f(x0+h)-f(x0)/h</p>
					
					<h4>Dérivée et optimisation</h4>
					
					<p>Méthode pour optimiser un rendement à l'aide du calcul différentiel:</p>
					
					<ol>
						<li>Mathématisation</li>
							<ul>
								<li>Définitions et dessin : on définit les variables inconnues et on les représente sur un schéma.</li>
								<li>Écrire la fonction objectif à deux variables et préciser si on recherche un maximum ou un minimum dans la situation donnée.</li>
								<li>Trouver la relation entre les deux variables.</li>
								<li>Trouver la relation entre les deux variables.</li>
							</ul>
						<li>Analyse</li>
							<ul>
								<li>Trouver la relation entre les deux variables.</li>
								<li>Trouver les nombres critiques de la fonction, où la dérivée première vaut zéro ou n'existe pas dans les intervalles du domaine.</li>
								<li>Effectuer le test de la dérivée première ou le test de la dérivée seconde pour déterminer le maximum ou le minimum recherché de la situation.</li>
							</ul>
						<li>On formule la réponse de façon concise par rapport à la question</li>
					</ol>
					
					<h4>Bibliographie</h4>
					
					<p>Claude Wagschal: Dérivation, intégration. Avec exercices corrigés. Hermann, 2012.</p>
					
					<p class="creative"><mark id="wiki">Licence : Wikipédia :</mark> <img src="../images/CreativeCommons.jpg" alt="creative commons picture" class="creativePicture"/></p>
					
						<?php
							}
							else
							{
								echo "Vous n'avez pas encore acheté ce cours afin de pouvoir y avoir accès : ";
								?>
								<form method="post" action="maths1.php">
									<input type="submit" value="Acheter ce cours" name="achat_maths1" id="achat_maths1"/>
								</form>
								<?php
								
								if(isset($_POST['achat_maths1']))
								{
									$insert_purchase = $bdd->prepare("INSERT INTO purchase(id_user, id_course) VALUES(?, ?)");
									$insert_purchase->execute(array($_SESSION['id_user'], $id_cours['id_course']));
									header("Location: maths1.php");
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