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
					<h3>Ensemble dénombrable</h3>

					<?php
						$bdd = new PDO('mysql:host=localhost;dbname=courselandv2', 'root', '');
						$id_name = 'ensemble';
						
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

					<p>En mathématiques, un ensemble est dit dénombrable, ou infini dénombrable, lorsque ses éléments peuvent être listés sans omission ni répétition dans une suite indexée par les entiers. Certains ensembles infinis, au contraire, contiennent « trop » d'éléments pour être parcourus complètement par l'infinité des entiers et sont donc dits « non dénombrables ».</p>
					
					<p>Il existe deux usages du mot « dénombrable » en mathématiques, suivant que l'on comprend ou non parmi les ensembles dénombrables les ensembles finis, dont les éléments peuvent être numérotés par les entiers positifs inférieurs à une valeur donnée. C'est seulement quand on comprend les ensembles finis parmi les ensembles dénombrables qu'il est utile de préciser infini dénombrable.</p>
					
					<p>Georg Cantor est le premier à faire usage de cette notion, dans un article publié en 1874, qui marque la naissance de la théorie des ensembles. Mais l'importance du dénombrable se manifeste dans de nombreux domaines des mathématiques, notamment en analyse, en théorie de la mesure et en topologie.</p>
					
					<h4>Définitions</h4>
					
					<p>On trouve en mathématiques deux définitions de « dénombrable » qui ne sont pas équivalentes.</p>
					
					<p>Selon la première, un ensemble E est dit dénombrable quand il existe une bijection entre l'ensemble N des entiers naturels et E (on dit qu'il est est équipotent à l'ensemble des entiers naturels N). C'est la définition originale de Georg Cantor.</p>
					
					<p>Selon la seconde, un ensemble E est dit dénombrable quand il est en bijection avec une partie de N, ce qui revient à ajouter aux ensembles en bijection avec N les ensembles finis, tout sous-ensemble de N étant fini ou dénombrable. Un ensemble équipotent à N est alors appelé « ensemble infini dénombrable ».</p>
					
					<p>Le choix est fait dans la suite de l'article d'adopter la première définition, même si on précise parfois « ensembles infinis dénombrables » qui est sans ambiguïté quelle que soit la définition utilisée. Les ensembles en bijection avec une partie de N sont alors appelés « ensembles au plus dénombrables » ou encore « ensembles finis ou dénombrables ».</p>
					
					<p>Un ensemble (infini) non dénombrable, est un ensemble infini qui n'est pas équipotent à N. L'argument de la diagonale de Cantor permet de montrer que l'ensemble des réels et l'ensemble des parties de N ne sont pas dénombrables, mais aussi qu'il existe de « nombreux » autres infinis non dénombrables.</p>
					
					<p>Un ensemble qui contient un ensemble infini dénombrable est nécessairement infini, c'est-à-dire qu'il n'est équipotent à aucun ensemble borné d'entiers naturels. Dès que l'on se donne suffisamment d'axiomes en théorie des ensembles, en particulier l'axiome du choix, on montre que l'infini dénombrable est le plus petit infini, au sens où tout ensemble infini contient un ensemble infini dénombrable. La réciproque ne pose pas de difficulté. On peut alors caractériser un ensemble infini comme un ensemble contenant un ensemble dénombrable.</p>
					
					<p>Le cardinal de N, et donc le cardinal de n'importe quel ensemble dénombrable, est noté ℵ0 (aleph-zéro). Il est le premier de la suite ordinale des alephs, qui représentent tous les cardinaux infinis en présence de l'axiome du choix.</p>
					
					<h4>Apparition</h4>
			
					<p>La notion fut introduite par Georg Cantor dans un article de 1874, Sur une propriété du système de tous les nombres algébriques réels, article qui marque la naissance de la théorie des ensembles. On dispose de la genèse de cette démonstration, qui n'est pas encore celle bien connue utilisant l'argument diagonal, grâce aux lettres des 7 décembre et 9 décembre 1873 de Georg Cantor à Dedekind, où il établit d'une part que l'ensemble des nombres algébriques réels (c'est-à-dire solutions réelles d'une équation polynomiale à coefficients entiers) est dénombrable, d'autre part que l'ensemble des nombres réels lui ne l'est pas, ce dont il déduit immédiatement l'existence de nombres transcendants (c'est-à-dire non algébriques), retrouvant ainsi un résultat de Liouville.</p>
			
					<p>Son apparition est liée à la conception de l'infini en mathématiques. Jusqu'à Cantor, l'infini est l'infini potentiel, la possibilité de continuer un processus sans s'arrêter. La comparaison d'ensembles infinis suppose l'infini dit achevé, actuel ou encore complet : un ensemble infini vu comme une totalité, ce qu'ont refusé beaucoup de mathématiciens (Gauss, ou à l'époque de Cantor, Kronecker). Pour ceux-ci le fait de considérer une infinité d'objets comme un tout, par exemple tous les entiers naturels, c'est-à-dire la notion même d’ensemble infini, n'a pas de sens. L'infini résulte seulement d'un procédé d'énumération sans répétitions qui ne s'interrompt pas. Seul l'infini dénombrable peut alors avoir à la rigueur un sens ; il est compris par le procédé qui l'engendre, plutôt que par la totalité de ses éléments. L'infini achevé sera encore contesté par Henri Poincaré, contestation qui fonde également l'intuitionnisme de Brouwer, celui-ci en donnant la forme la plus élaborée. Pour ce dernier seul l'infini dénombrable (en tant qu'infini potentiel) existe, « l'ensemble des réels entre 0 et 1 » n'a pas de sens, mais si ses conceptions sont cohérentes, elles induisent une profonde remise en cause des mathématiques. En distinguant le premier deux infinis distincts, et en en déduisant de façon simple un résultat mathématique déjà obtenu de façon différente par Joseph Liouville, Cantor donne des arguments pour l'infini complet, qu'aujourd'hui ne songent même plus à discuter la très grande majorité des mathématiciens.</p>
			
					<p>Cantor devait ultérieurement montrer l'équipotence de certains ensembles non dénombrables, puis l'existence de multiples infinis de plus en plus « grands », ce qui devait le conduire au développement de la théorie de la cardinalité, et plus généralement de la théorie des ensembles.</p>

					<h4>Ensembles finis et infinis</h4>

					<p>Un ensemble est fini si, pour un certain entier N, il est en bijection avec l'ensemble des N premiers entiers, soit {0, 1, …, N-1}, les entiers strictement plus petits que N. Par exemple l'ensemble vide (cas N = 0) est (comme attendu) fini. Tout ensemble fini est donc subpotent à N, c'est-à-dire qu'il existe une injection de cet ensemble dans N.</p>

					<p>Une propriété essentielle des ensembles finis est qu'une injection d'un ensemble fini dans lui-même est nécessairement bijective (voir les articles ensemble fini et principe des tiroirs), c'est-à-dire qu'un ensemble fini ne peut être en bijection avec une partie propre de lui-même. Un ensemble infini est simplement un ensemble qui n'est pas fini. L'ensemble N, qui est en bijection avec par exemple N*, est donc infini, et de même tout ensemble dénombrable est infini. On peut encore généraliser :</p>

					<p>Proposition — Tout ensemble qui contient un ensemble dénombrable est infini.</p>
					
					<p>En effet, soit E un tel ensemble et A une partie dénombrable de E. On a une bijection sur une partie propre de E en prenant l'identité sur E − A, et une bijection de A sur une partie propre de A.</p>
			
					<p>La réciproque de cette proposition, de même que la réciproque de la propriété utilisée pour la démontrer, à savoir que si un ensemble est infini alors il est en bijection avec une de ses parties propres, reposent sur l'axiome du choix (voir la section théorie axiomatique ci-dessous).</p>
				
					<h4>Partie d'un ensemble dénombrable</h4>
					
					<p>On va utiliser la relation d'ordre sur N. Un segment initial de l'ensemble des entiers naturels N est soit N lui-même, soit l'ensemble des entiers naturels strictement inférieurs à un entier naturel donné. En particulier l'ensemble vide est un segment initial de N. On peut montrer que :</p>
					
					<p>Lemme — Pour toute partie A de N, il existe une bijection strictement croissante d'un segment initial de N dans A.</p>
					
					<p>Le cas où A est vide étant évident, on suppose que cet ensemble A est non vide. On va utiliser le fait que N est bien ordonné, c'est-à-dire que tout sous-ensemble non vide de N possède un plus petit élément. En effet, on peut définir par récurrence une suite (an) de la façon suivante :</p>
					
					<ul>
						<li>a0 est le plus petit élément de A (qui existe forcément car A est non vide) ;</li>
						<li>an+1 est le plus petit élément de A supérieur à an s'il en existe un, et est non défini sinon ou si an n'est pas défini.</li>
					</ul>
					
					<p>Cette suite établit bien une bijection strictement croissante d'un segment initial des entiers dans A.</p>
					
					<p><em>Démonstration</em></p>
					
					<p>Par définition d'une part des ensembles finis, d'autre part des ensembles dénombrables, on déduit du lemme la première partie de la proposition qui suit.</p>
					
					<p>Proposition — Toute partie A de N est finie ou dénombrable. De plus cette partie A est finie si elle est bornée, dénombrable sinon.
					Pour la deuxième partie (en excluant à nouveau le cas évident où A est vide donc bornée par n'importe quel entier), on a déjà vu au cours de la démonstration du lemme que si A est bornée alors le segment initial S avec lequel elle est en bijection est de la forme {0,1,…,p} pour un certain entier p (autrement dit : A est finie) et que réciproquement, si S est de la forme {0,1,…,p} alors A est bornée (par ap).
					On a ainsi une caractérisation courante d'un sous-ensemble infini (donc dénombrable) de N. Par exemple une variante de la preuve d'Euclide pour l'existence d'une infinité de nombres premiers est de montrer que pour tout entier n, n! + 1 a au moins un diviseur premier, et ceux-ci sont nécessairement supérieurs à n.
					Une conséquence directe de la proposition est :</p>
					
					<p>Corollaire — Si A est subpotent à N, c'est-à-dire s'il existe une injection de A dans N, alors A est fini ou dénombrable.
					On peut donc parler d'ensemble au plus dénombrable pour un ensemble fini ou dénombrable. On en déduit également que :</p>
					
					<p>Proposition — S’il existe une surjection de N dans A, alors A est fini ou dénombrable.
					En effet, si s est une surjection de N dans A, on peut définir une injection i qui est une réciproque à droite de s, sans faire appel à l'axiome du choix, puisque N, ensemble de départ de la surjection, est bien ordonné : on prend pour i(y), où y dans A, le plus petit antécédent de y par s.
					La réciproque du corollaire est évidente par définition des ensembles finis et des ensembles dénombrables. La réciproque de la proposition est évidente dans le cas dénombrable, par définition. S'il existe une bijection d'un ensemble fini F dans un ensemble A, et que A est non vide, soit a ∈ A, alors on peut compléter cette bijection en une surjection de N dans A, en associant a à tout élément de N qui n'est pas dans F. Ces résultats seront rassemblés dans le théorème du paragraphe suivant.</p>
					
					<h4>Bibliographie</h4>
					
					<ul>
						<li>Paul Halmos, Introduction à la théorie des ensembles</li>
						<li>René Cori et Daniel Lascar, Logique mathématique II. Fonctions récursives, théorème de Gödel, théorie des ensembles, théorie des modèles</li>
						<li>Thomas Jech, Set Theory: The Third Millennium Edition, Revised and Expanded, 2003, Springer</li>
					</ul>
					
					<p class="creative"><mark id="wiki">Licence : Wikipédia :</mark> <img src="../images/CreativeCommons.jpg" alt="creative commons picture" class="creativePicture"/></p>
					
						<?php
							}
							else
							{
								echo "Vous n'avez pas encore acheté ce cours afin de pouvoir y avoir accès : ";
								?>
								<form method="post" action="maths2.php">
									<input type="submit" value="Acheter ce cours" name="achat_maths2" id="achat_maths2"/>
								</form>
								<?php
								
								if(isset($_POST['achat_maths2']))
								{
									$insert_purchase = $bdd->prepare("INSERT INTO purchase(id_user, id_course) VALUES(?, ?)");
									$insert_purchase->execute(array($_SESSION['id_user'], $id_cours['id_course']));
									header("Location: maths2.php");
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