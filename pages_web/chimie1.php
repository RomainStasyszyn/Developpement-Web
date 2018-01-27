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
					<h3>Tableau périodique des éléments</h3>

					<?php
						$bdd = new PDO('mysql:host=localhost;dbname=courselandv2', 'root', '');
						$id_name = 'tableau periodique';
						
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

					<p>Le tableau périodique des éléments, également appelé table de Mendeleïev, classification périodique des éléments (CPE) ou simplement tableau périodique, représente tous les éléments chimiques, ordonnés par numéro atomique croissant et organisés en fonction de leur configuration électronique, laquelle sous-tend leurs propriétés chimiques.</p>
					
					<p>La conception de ce tableau est généralement attribuée au chimiste russe Dmitri Mendeleïev, qui construisit en 1869 une table différente de celle qu'on utilise aujourd'hui mais similaire dans son principe, dont le grand intérêt était de proposer une classification systématique des éléments chimiques connus à l'époque en vue de souligner la périodicité de leurs propriétés chimiques, d'identifier les éléments qui restaient à découvrir, et même de pouvoir prédire les propriétés de ces éléments alors inconnus.</p>
					
					<p>Le tableau périodique a connu de nombreux réajustements depuis lors jusqu'à prendre la forme que nous lui connaissons aujourd'hui. Il est devenu un référentiel universel auquel peuvent être rapportés tous les types de comportements physique et chimique des éléments. En novembre 2014, sa forme standard comportait 118 éléments, allant de 1H à 118Uuo.</p>
					
					<h4>Le tableau périodique standard</h4>
					
					<p>Ce tableau est la représentation la plus usuelle de la classification des éléments chimiques. Certains chimistes ont proposé d'autres façons de classer les éléments, mais celles-ci restent bornées au domaine scientifique.</p>
					
					<div id="tableau_periodique">
						<img src="../images/tableau_périodique_des_éléments.png" alt="photo du tableau périodique des éléments" title="Tableau périodique des éléments"/>
						<p><em>Tableau représentant l'état présent de la classification périodique des éléments</em></p>
					</div>
					
					<p>Dans des conditions normales de température et de pression (0 °C, 1 atm):</p>
					
					<ul>
						<li>Les éléments dont le numéro atomique est rouge sont gazeux;</li>
						<li>Les éléments dont le numéro atomique est bleu sont liquides — il n'y en a que deux à 0 °C : le brome (35) et le mercure (80);</li>
						<li>Les éléments dont le numéro atomique est noir sont solides.</li>
					</ul>
					
					<p>Dans la nature</p>
					
					<ul>
						<li>Les éléments avec une bordure continue grise peuvent être trouvés naturellement sur Terre, sous la forme d'un ou plusieurs isotopes stables ou quasi stables (demi-vie > 50 millions d'années).</li>
						<li>Les éléments avec une bordure en tirets noirs apparaissent naturellement lors de la désintégration d'autres éléments chimiques, mais n'ont pas d'isotope plus ancien que la Terre.</li>
						<li>Les éléments avec une bordure en pointillés bleus sont artificiels (éléments synthétiques).</li>
					</ul>
					
					<h4>Construction du tableau</h4>
					
					<p>Dans la mesure où les propriétés physicochimiques des éléments reposent sur leur configuration électronique, cette dernière est sous-jacente à l'agencement du tableau périodique. Ainsi, chaque ligne du tableau (appelée période) correspond à une couche électronique, identifiée par son nombre quantique principal, noté n : il y a sept couches électroniques connues à l'état fondamental, donc sept périodes dans le tableau périodique standard, numérotées de 1 à 7. Chaque période est elle-même scindée en un nombre variable de blocs, qui correspondent aux orbitales atomiques, identifiées par leur nombre quantique secondaire, noté l : il y a quatre types d'orbitales atomiques connues à l'état fondamental, notées s, p, d et f (ces lettres viennent d'abréviations utilisées initialement en spectroscopie) et pouvant contenir chacune respectivement 2, 6, 10 et 14 électrons ; c'est la raison pour laquelle on parle de bloc s, bloc p, bloc d et bloc f.</p>
					
					<p>Si l'on respecte la construction du tableau par blocs en fonction des orbitales atomiques, l'hélium doit se trouver au-dessus du béryllium dans la colonne 2 (celle dont les atomes ont une sous-couche externe ns2) et non au-dessus du néon dans la colonne 18 (dont les atomes ont une sous-couche externe np6), comme c'est le cas dans la petite table ci-contre ; l'hélium est positionné usuellement dans la colonne 18 car c'est celle des gaz rares, dont il fait chimiquement partie.</p>
					
					<p><em>Règle de Klechkowski</em></p>
					
					<p>Toutes les sous-couches d'une période n'appartiennent pas forcément à la même couche électronique (c'est le cas à partir de la quatrième période) : à partir de la troisième couche électronique, les sous-couches d'une même couche sont en effet réparties sur plusieurs périodes ; les électrons se distribuent en fait sur les différents niveaux d'énergie quantiques autour de l'atome selon un principe d'Aufbau (c'est-à-dire « construction » en allemand) dans des sous-couches électroniques dont l'ordre précis est donné par la règle de Klechkowski :</p>
					
					<ul>
						<li>Sous-couche 1s    	1 case quantique -> 2 électrons    	-> 2 éléments sur la 1re période</li>
						<li>
							<p>Sous-couche 2s    	1 case quantique -> 2 électrons</p>
							<p>Sous-couche 2p    	3 cases quantiques -> 6 électrons    	-> 8 éléments sur la 2e période</p>
						</li>
						<li>
							<p>Sous-couche 3s    	1 case quantique -> 2 électrons</p>
							<p>Sous-couche 3p    	3 cases quantiques -> 6 électrons    	-> 8 éléments sur la 3e période</p>
						</li>
						<li>
							<p>Sous-couche 4s    	1 case quantique -> 2 électrons</p>
							<p>Sous-couche 3d    	5 cases quantiques -> 10 électrons</p>
							<p>Sous-couche 4p    	3 cases quantiques -> 6 électrons    	-> 18 éléments sur la 4e période</p>
						</li>
						<li>
							<p>Sous-couche 5s    	1 case quantique -> 2 électrons</p>
							<p>Sous-couche 4d    	5 cases quantiques -> 10 électrons</p>
							<p>Sous-couche 5p    	3 cases quantiques -> 6 électrons    	-> 18 éléments sur la 5e période</p>
						</li>
						<li>
							<p>Sous-couche 6s    	1 case quantique -> 2 électrons</p>
							<p>Sous-couche 4f    	7 cases quantiques -> 14 électrons</p>
							<p>Sous-couche 5d    	5 cases quantiques -> 10 électrons</p>
							<p>Sous-couche 6p    	3 cases quantiques -> 6 électrons    	-> 32 éléments sur la 6e période</p>
						</li>
						<li>
							<p>Sous-couche 7s    	1 case quantique -> 2 électrons</p>
							<p>Sous-couche 5f    	7 cases quantiques -> 14 électrons</p>
							<p>Sous-couche 6d    	5 cases quantiques -> 10 électrons</p>
							<p>Sous-couche 7p    	3 cases quantiques -> 6 électrons    	-> 32 éléments sur la 7e période</p>
						</li>
					</ul>
					
					<p>C'est la succession des sous-couches électroniques de chaque période qui détermine la structure du tableau périodique, chaque période étant définie par le retour d'une sous-couche s suivant une sous-couche p de la période précédente.</p>
					
					<p><em>Exceptions et règle de Hund</em></p>
					
					<p>La règle de Klechkowski est observée pour plus de 80 % des 103 éléments dont la configuration électronique à l'état fondamental est connue avec précision, mais une vingtaine d'éléments y font exception. L'état fondamental est en effet par définition celui dont l'énergie est la plus faible, et le spin des électrons entre en jeu pour déterminer cette énergie : plus le spin résultant des électrons d'une orbitale atomique est élevé, plus la configuration de ces électrons sur cette orbitale est stable (règle de Hund). Il s'ensuit que, pour les éléments du bloc d et du bloc f (métaux de transition, lanthanides et actinides), il est énergétiquement moins favorable de suivre la règle de Klechkowski que de favoriser l'occupation impaire des sous-couches les plus externes lorsque la couche d ou f est vide, à moitié remplie ou entièrement remplie, car l'écart d'énergie entre ces sous-couches est inférieur au gain d'énergie induit par la redistribution des électrons maximisant leur spin résultant (dans le tableau qui suit, les électrons de cœur sont en gris) :</p>
					
					<ul>
						<li>Élément  chimique	     Série chimique	       Configuration électronique</li>
						<li>no 24	Cr	Chrome	     Métal de transition   1s2 2s2 2p6 3s2 3p6 4s1 3d5</li>
						<li>no 29	Cu	Cuivre	     Métal de transition   1s2 2s2 2p6 3s2 3p6 4s1 3d10</li>
						<li>no 41	Nb	Niobium	     Métal de transition   1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s1 4d4</li>
						<li>no 42	Mo	Molybdène	 Métal de transition   1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s1 4d5</li>
						<li>no 44	Ru	Ruthénium	 Métal de transition   1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s1 4d7</li>
						<li>no 45	Rh	Rhodium	     Métal de transition   1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s1 4d8</li>
						<li>no 46	Pd	Palladium	 Métal de transition   1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 4d10</li>
						<li>no 47	Ag	Argent	     Métal de transition   1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s1 4d10</li>
						<li>no 57	La	Lanthane	 Lanthanide	           1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 5d</li>
						<li>no 58	Ce	Cérium	     Lanthanide	           1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f1 5d1</li>
						<li>no 64	Gd	Gadolinium	 Lanthanide	           1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f7 5d1</li>
						<li>no 78	Pt	Platine	     Métal de transition   1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s1 4f14 5d9</li>
						<li>no 79	Au	Or	         Métal de transition   1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s1 4f14 5d10</li>
						<li>no 89	Ac	Actinium	 Actinide	           1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 6d1</li>
						<li>no 90	Th	Thorium	     Actinide	           1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 6d2</li>
						<li>no 91	Pa	Protactinium Actinide	           1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f2 6d1</li>
						<li>no 92	U	Uranium	     Actinide	           1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f3 6d1</li>
						<li>no 96	Cm	Curium	     Actinide	           1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f7 6d1</li>
						<li>no 103	Lr	Lawrencium	 Actinide	           1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 7p1</li>
					</ul>
					
					<h4>Périodicité des propriétés chimiques</h4>
					
					<p>Le grand intérêt de la classification périodique est d'organiser les éléments chimiques de telle sorte que leurs propriétés physicochimiques puissent être largement prédites par leur position dans la table. Ces propriétés évoluent différemment selon qu'on se déplace verticalement ou horizontalement dans le tableau.</p>
					
					<p><em>Périodes et groupes du tableau périodique</em></p>
					
					<ul>
						<li>Une période désigne une ligne du tableau périodique. Elle se définit par le remplissage progressif des sous-couches électroniques jusqu'à atteindre la sous-couche s de la couche électronique suivante. Les propriétés des éléments varient généralement beaucoup le long d'une période, mais peuvent être localement assez similaires et constituer des séries chimiques complètes, notamment dans le bloc d (métaux dits « de transition ») et surtout dans le bloc f (lanthanides sur la 6e période et actinides sur la 7e période).</li>
						<li>Un groupe désigne une colonne du tableau périodique. Chacun des 18 groupes du tableau périodique standard (plus le 19e groupe des éléments du bloc f, lanthanides et actinides) constitue souvent un ensemble d'éléments aux propriétés bien distinctes des groupes voisins, notamment aux extrémités gauche et droite du tableau périodique (c'est-à-dire dans les blocs s et p) où ils se sont vu attribuer des noms d'usage au cours du temps :
						<ul>
							<li>métaux alcalins = groupe 1 (bloc s) excepté l'hydrogène</li>
							<li>métaux alcalino-terreux = groupe 2 (bloc s)</li>
							<li>cristallogènes = groupe 14 (bloc p)</li>
							<li>pnictogènes = groupe 15 (bloc p)</li>
							<li>chalcogènes = groupe 16 (bloc p)</li>
							<li>halogènes = groupe 17 (bloc p)</li>
							<li>gaz rares = groupe 18 (bloc p) dont l'hélium (bloc s)</li>
						</ul>
						</li>
					</ul>
					
					<p>Si les termes cristallogène, pnictogène et chalcogène sont aujourd'hui assez désuets, les quatre autres en revanche sont encore très employés car ils se confondent avec des séries chimiques de même nom.</p>
					
					<h4>Usages des éléments de la table dans l'industrie</h4>
					
					<p>Concernant plus particulièrement les métaux, jusque dans les années 1970, moins de 20 métaux étaient utilisés dans l'industrie. Depuis les années 2000, par suite du développement exponentiel des produits électroniques, des technologies de l'information et de la communication, de l'aéronautique, allié à l'innovation technique dans la recherche de performances et de rendements, la demande en nouveau métaux « high tech » a explosé, et concerne maintenant environ 60 métaux. Pratiquement tous les éléments de la table sont utilisés jusqu'au n°92 (uranium). Les réserves de la plupart des métaux au niveau de production 2008 varient de 20 ans à 100 ans.</p>
					
					<p class="creative"><mark id="wiki">Licence : Wikipédia :</mark> <img src="../images/CreativeCommons.jpg" alt="creative commons picture" class="creativePicture"/></p>
					
						<?php
							}
							else
							{
								echo "Vous n'avez pas encore acheté ce cours afin de pouvoir y avoir accès : ";
								?>
								<form method="post" action="chimie1.php">
									<input type="submit" value="Acheter ce cours" name="achat_chimie1" id="achat_chimie1"/>
								</form>
								<?php
								
								if(isset($_POST['achat_chimie1']))
								{
									$insert_purchase = $bdd->prepare("INSERT INTO purchase(id_user, id_course) VALUES(?, ?)");
									$insert_purchase->execute(array($_SESSION['id_user'], $id_cours['id_course']));
									header("Location: chimie1.php");
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