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
					<h3>Physique quantique</h3>

					<?php
						$bdd = new PDO('mysql:host=localhost;dbname=courselandv2', 'root', '');
						$id_name = 'physique quantique';
						
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

					<p>La physique quantique est l'appellation générale d'un ensemble de théories physiques nées au xxe siècle qui, comme la théorie de la relativité, marquent une rupture avec ce que l'on appelle maintenant la physique classique, l'ensemble des théories et principes physiques admis au xixe siècle. Les théories dites « quantiques » décrivent le comportement des atomes et des particules — ce que la physique classique, notamment la mécanique newtonienne et la théorie électromagnétique de Maxwell, n'avaient pu faire — et permettent d'élucider certaines propriétés du rayonnement électromagnétique.</p>
					
					<h4>Panorama Général</h4>
					
					<p>La physique quantique a apporté une révolution conceptuelle ayant des répercussions jusqu'en philosophie (remise en cause du déterminisme) et en littérature (science-fiction). Elle a permis nombre d'applications technologiques : énergie nucléaire, imagerie médicale par résonance magnétique nucléaire, diode, transistor, microscope électronique et laser. Un siècle après sa conception, elle est abondamment utilisée dans la recherche en chimie théorique (chimie quantique), en physique (mécanique quantique, théorie quantique des champs, physique de la matière condensée, physique nucléaire, physique des particules, physique statistique quantique, astrophysique, gravité quantique), en mathématiques (formalisation de la théorie des champs) et, récemment, en informatique (ordinateur quantique, cryptographie quantique). Elle est considérée avec la relativité générale d'Einstein comme l'une des deux théories majeures du xxe siècle.</p>
					
					<p>La physique quantique est connue pour être contre-intuitive, choquer le « sens commun » et nécessiter un formalisme mathématique ardu. Feynman, l'un des plus grands théoriciens spécialistes de la physique quantique de la seconde moitié du xxe siècle, a ainsi écrit :</p>
					
					<p>« Je crois pouvoir affirmer que personne ne comprend vraiment la physique quantique. »</p>
					
					<p>La raison principale de ces difficultés est que le monde quantique (limité à l'infiniment petit, mais pouvant avoir des répercussions à plus grande échelle) se comporte très différemment de l'environnement macroscopique auquel nous sommes habitués. Quelques différences fondamentales qui séparent ces deux mondes sont par exemple :</p>
					
					<ul>
						<li>la quantification : Un certain nombre d'observables, par exemple l'énergie émise par un atome lors d'une transition entre états excités, sont quantifiés, c'est-à-dire qu'ils ne peuvent prendre leur valeur que dans un ensemble discret de résultats. A contrario, la mécanique classique prédit le plus souvent que ces observables peuvent prendre continûment n'importe quelle valeur.</li>
						<li>la dualité onde-particule : La notion d'onde et de particule qui sont séparées en mécanique classique deviennent deux facettes d'un même phénomène, décrit de manière mathématique par sa fonction d'onde. En particulier, l'expérience prouve que la lumière peut se comporter comme des particules (photons, mis en évidence par l'effet photoélectrique) ou comme une onde (rayonnement produisant des interférences) selon le contexte expérimental, les électrons et autres particules pouvant également se comporter de manière ondulatoire.</li>
						<li>le principe d'indétermination de Heisenberg : Une indétermination fondamentale empêche la mesure exacte simultanée de deux grandeurs conjuguées. Il est notamment impossible d'obtenir une grande précision sur la mesure de la vitesse d'une particule sans obtenir une précision médiocre sur sa position, et vice versa. Cette incertitude est structurelle et ne dépend pas du soin que l'expérimentateur prend à ne pas « déranger » le système ; elle constitue une limite à la précision de tout instrument de mesure.</li>
						<li>le principe d'une nature qui joue aux dés : Si l'évolution d'un système est bel et bien déterministe (par exemple, la fonction d'onde régie par l'équation de Schrödinger), la mesure d'une observable d'un système dans un état donné connu peut donner aléatoirement une valeur prise dans un ensemble de résultats possibles.</li>
						<li>l'observation influe sur le système observé : Au cours de la mesure d'une observable, un système quantique voit son état modifié. Ce phénomène, appelé réduction du paquet d'onde, est inhérent à la mesure et ne dépend pas du soin que l'expérimentateur prend à ne pas « déranger » le système.</li>
						<li>la non-localité ou intrication : Des systèmes peuvent être intriqués de sorte qu'une interaction en un endroit du système a une répercussion immédiate en d'autres endroits. Ce phénomène contredit en apparence la relativité restreinte pour laquelle il existe une vitesse limite à la propagation de toute information, la vitesse de la lumière ; toutefois, la non-localité ne permet pas de transférer de l'information.</li>
						<li>la contrafactualité : Des évènements qui auraient pu se produire, mais qui ne se sont pas produits, influent sur les résultats de l'expérience.</li>
					</ul>
					
					<h4>Le quantique et le vivant</h4>
					
					<p>Existe-t-il dans le monde du vivant des phénomènes obéissant à ces règles de l'infiniment petit ? Depuis quelques années, des études dans divers domaines de la biologie indiquent que c'est le cas. Ces résultats vont à contre-courant de l'idée généralement admise que le monde macroscopique est trop chaotique pour permettre des effets de cohérence quantique. Le vivant serait capable de tirer parti de cette agitation désordonnée des particules, du moins en ce qui concerne la photosynthèse. Les récepteurs de l'odorat semblent dépendre de l'effet tunnel, pour acheminer des électrons à l'intérieur même des molécules odorantes, ce qui permet de les distinguer d'autres molécules structurellement analogues. Certaines structures protéiques bactériennes se comportent comme des ordinateurs quantiques primitifs, « calculant » le meilleur canal de transport des électrons parmi tous les chemins possibles.</p>
					
					<p>De récents travaux sur la photosynthèse ont révélé que l'intrication des photons joue un rôle essentiel à cette opération fondamentale du règne végétal, phénomène que l'on tente actuellement d'imiter pour optimiser la production d'énergie solaire.
					L'adhérence aux surfaces des setæ des geckos fonctionne grâce aux forces de van der Waals, des interactions de nature quantique qui font intervenir des particules virtuelles sans aucune interaction moléculaire classique. Ce phénomène est également à l'étude en vue d'applications militaires et civiles.</p>
					
					<h4>Genèse de la physique quantique</h4>
					
					<p><em>Corps noir et catastrophe ultraviolette</em></p>
					
					<p>D’après les théories classiques de la physique, un corps noir à l'équilibre thermodynamique est censé rayonner un flux infini. Plus précisément, l'énergie rayonnée par bande de longueur d'onde doit tendre vers l'infini quand la longueur d'onde tend vers zéro, dans l'ultraviolet pour les physiciens de l'époque, puisque ni les rayons X ni les rayons gamma n'étaient alors connus. C’est la catastrophe ultraviolette.</p>
					
					<p><em>Quantification des quanta en physique</em></p>
					
					<p>Elle remonte aux travaux effectués en 1900 par Max Planck sur le rayonnement du corps noir à l’équilibre thermique. Une cavité chauffée émet un rayonnement électromagnétique (lumière) aussitôt absorbé par les parois. Pour rendre compte du spectre lumineux par le calcul théorique des échanges d’énergie d’émission et d’absorption (dE), Planck dut faire l’hypothèse que ces échanges sont discontinus et proportionnels aux fréquences (v) du rayonnement lumineux : dE=nhv.</p>
					
					<ul>
						<li>n est un nombre entier</li>
						<li>h est le quantum d’action qui apparut bientôt comme l’une des constantes fondamentales de la nature (constante de Planck)</li>
						<li>v est la fréquence de la lumière</li>
					</ul>
					
					<p><em>Quantification du rayonnement et des atomes</em></p>
					
					<p>En 1905, à la suite d’un raisonnement thermodynamique dans lequel il donnait aux probabilités un sens physique (celui de fréquences d’états pour un système), Einstein fut amené à considérer que ce ne sont pas seulement les échanges d’énergie qui sont discontinus, mais l’énergie du rayonnement lumineux elle-même. Il montra que cette énergie est proportionnelle à la fréquence de l’onde lumineuse : E=hν. Cela donnait immédiatement l’explication de l’effet photoélectrique observé 20 ans auparavant par Hertz.</p>
					
					<p><em>Effet photoélectrique</em></p>
					
					<p>L’énergie E = hv apportée par le quantum de lumière à l’électron lié dans un atome permet à celui-ci de se libérer si cette énergie est supérieure ou égale à l’énergie de liaison de l’électron, nommée également travail de sortie W, en vertu de la relation :</p>
					
					<p>hv = W + Ec</p>
					
					<p>où Ec est l'énergie cinétique acquise par ce dernier. Cet effet de seuil était inexplicable dans la conception continue de l’énergie lumineuse de la théorie électromagnétique classique.</p>
					
					<p><em>Limites de la théorie électromagnétique classique</em></p>
					
					<p>Einstein s’aperçut alors que cette propriété du rayonnement était en opposition de manière irréductible avec la théorie électromagnétique classique (élaborée par Maxwell). Dès 1906, il annonça que cette théorie devrait être modifiée dans le domaine atomique. La manière dont cette modification devrait être obtenue n’était pas évidente puisque la physique théorique reposait sur l’utilisation d’équations différentielles, dites équations de Maxwell, correspondant à des grandeurs à variation continue.</p>
					
					<p><em>L'hypothèse quantique</em></p>
					
					<p>Malgré la puissance de la théorie des quanta, peu de physiciens étaient enclins à imaginer que la théorie électromagnétique classique puisse être invalidée. Einstein s’efforça alors de mettre en évidence d’autres aspects des phénomènes atomiques et du rayonnement qui rompaient avec la description classique. Il étendit ainsi l’hypothèse quantique, par-delà les propriétés du rayonnement, à l’énergie des atomes, par ses travaux sur les chaleurs spécifiques aux basses températures. Il retrouvait l’annulation des chaleurs spécifiques des corps au zéro absolu, phénomène observé mais inexplicable par la théorie classique. D’autres physiciens (P. Ehrenfest, W. Nernst, H.-A. Lorentz, H. Poincaré) le rejoignirent peu à peu pour conclure au caractère inéluctable de l’hypothèse quantique que Planck lui-même hésitait à admettre. Elle n’était cependant encore acceptée généralement que pour les échanges d’énergie.</p>
					
					<h4>Bibliographie</h4>
					
					<ul>
						<li>Collectif, Trois minutes pour comprendre les cinquante plus grandes théories de la physique quantique, Le Courrier du Livre, 2015</li>
						<li>Vincent Rollet, La physique quantique (enfin) expliquée simplement, Institut Pandore, 2014</li>
						<li>Alain Connes, Danye Chéreau, Jacques Dixmier, Le théâtre quantique, Odile Jacob, 2013</li>
						<li>François Rothen, Aux limites de la physique : les paradoxes quantiques, Presses polytechniques et universitaires romandes, 2012</li>
						<li>Manjit Kumar, Le grand roman de la physique quantique, Jean-Claude Lattès, 2011</li>
						<li>Sven Ortoli et Jean-Pierre Pharabod, Métaphysique quantique, La Découverte, Collection Cahiers libres, 2011</li>
						<li>Amaury Mouchet, L'étrange subtilité quantique, Dunod, 2010</li>
						<li>Roland Omnès, Les indispensables de la mécanique quantique, Odile Jacob, 2006</li>
					</ul>
					
					<p class="creative"><mark id="wiki">Licence : Wikipédia :</mark> <img src="../images/CreativeCommons.jpg" alt="creative commons picture" class="creativePicture"/></p>
					
						<?php
							}
							else
							{
								echo "Vous n'avez pas encore acheté ce cours afin de pouvoir y avoir accès : ";
								?>
								<form method="post" action="physique1.php">
									<input type="submit" value="Acheter ce cours" name="achat_physique1" id="achat_physique1"/>
								</form>
								<?php
								
								if(isset($_POST['achat_physique1']))
								{
									$insert_purchase = $bdd->prepare("INSERT INTO purchase(id_user, id_course) VALUES(?, ?)");
									$insert_purchase->execute(array($_SESSION['id_user'], $id_cours['id_course']));
									header("Location: physique1.php");
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