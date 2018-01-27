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
					<h3>Chimie nucléaire</h3>

					<?php
						$bdd = new PDO('mysql:host=localhost;dbname=courselandv2', 'root', '');
						$id_name = 'chimie nucleaire';
						
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

					<p>La chimie nucléaire est une sous-catégorie de la chimie traitant de la radioactivité, des radioéléments, des processus et des propriétés nucléaires. Elle peut être divisée en cinq sous-parties.</p>
					
					<p>C’est la chimie des éléments radioactifs (éléments chimiques dont tous les isotopes sont radioactifs) tels que les actinides, le technétium, le radium ou le radon, cette chimie étant associée à des équipements spéciaux (tel que les réacteurs nucléaires ou autres…) conçus pour exécuter des processus nucléaires. Cette science inclut l’étude de la corrosion des surfaces et du comportement de matériaux ou d’atomes dans des conditions de fonctionnement normales et anormales (par exemple lors d’un accident). Un autre domaine important de la chimie nucléaire est le comportement des objets et des matériaux radioactifs qui ont été placés dans un site de d’élimination ou de stockage de déchets nucléaires.</p>
					
					<p>Cette chimie inclut l’étude des effets chimiques résultant de l’absorption du rayonnement par les animaux vivant, les plantes et les autres matériaux. La chimie nucléaire a grandement facilité la compréhension des traitements médicaux spéciaux (comme la radiothérapie sur les cancers), et a permis à ces traitements de s’améliorer.</p>
					
					<p>Elle comprend également l’étude de la production et de l’utilisation des sources radioactives et/ou nucléaire dans un éventail de processus liés à la chimie. On peut citer parmi ces processus étudiés la radiothérapie pour des applications médicales, l’utilisation de traceurs radioactifs au sein de l’industrie, des sciences ou encore de l’environnement, la production de combustibles nucléaires ou encore la spectroscopie à résonance magnétique nucléaire (RMN) qui est couramment utilisée en chimie organique de synthèse, en physico-chimie et pour l’analyse structurelle de chimie macromoléculaire... L’utilisation de ces rayonnements est également étudiée pour la modification de matériaux, principalement les polymères1. Enfin, elle traite de l’influence de la masse atomique des éléments sur les réactions chimiques et les propriétés des composés chimiques.</p>
					
					<h4>Histoire des débuts (origines)</h4>
					
					<p>Après la découverte des rayons X par Wilhelm Röntgen, de nombreux scientifiques ont commencé à travailler sur les rayonnements ionisants. L’un d’eux était Henri Becquerel, qui a enquêté sur la relation entre la phosphorescence et le noircissement des plaques photographiques. Quand Becquerel (travaillant en France) découvrit que, sans source d’énergie extérieure, l’uranium émettait des rayons qui pouvaient noircir ou brouiller la plaque photographique, la radioactivité a été découverte. Marie Curie et son mari Pierre, à Paris, isolent deux nouveaux éléments radioactifs provenant du minerai d’uranium. Ils ont pour cela utilisé des méthodes radiométriques pour identifier les flux de radioactivité après chaque fission. Ils séparèrent le minerai d’uranium dans chacun des différents éléments chimiques qui étaient connus à l’époque, et mesurèrent la radioactivité de chaque fraction ainsi extraite. Ils ont ensuite tenté de séparer ces fractions en les espaçant encore plus, et essayé d’isoler une petite fraction avec une activité spécifique élevée (radioactivité divisée par la masse, nombre de désintégrations par seconde). De cette façon, ils purent isoler le polonium et le radium. Il a ensuite été remarqué vers 1901 que des doses élevées de radiations peuvent causer des blessures chez l’Homme. Becquerel avait, par exemple, mis un échantillon de radium dans sa poche, et il a en conséquence souffert d’une grave brûlure à cause d’une forte dose de radioactivité localisée. Cette blessure a alors entraîné une enquête poussée sur les propriétés biologiques des rayonnements. Cette étude a, avec le temps, abouti à l’élaboration de traitements médicaux.</p>
					
					<div id="marie_curie">
						<img src="../images/Marie_Curie.jpg" alt="photo de Marie Curie" title="Marie Curie à l'origine de découvertes et d'avancées majeures dans la Chimie et la Physique"/>
						<p id="marie_curie_descr"><em>Marie Curie</em></p>
					</div>
					
					<p>Ernest Rutherford, travaillant au Canada et en Angleterre, a montré que la désintégration radioactive peut être décrite par une équation simple, ce qui implique qu’une substance radioactive donnée a une demi-vie donnée (le temps mis par une quantité de radioactivité présente dans une source pour diminuer de moitié). Il inventa aussi les termes « rayons alpha », « rayons bêta » et « rayons gamma », il convertit de l’azote en oxygène, et surtout il supervisa les étudiants qui firent l’expérimentation « Geiger-Marsden » (l’expérience de la feuille d’or), expérience qui montra que le modèle du « plum-pudding » de Thomson en 1904 était faux. Pour Rutherford, cette expérience montrait que la charge positive était limitée à un très petit noyau, ce qui mena au modèle de Rutherford, puis finalement au modèle de l’atome de Bohr, ou le noyau positif est entouré par les électrons négatifs sur plusieurs couches. En 1934, la fille de Marie Curie, Irène Joliot-Curie, et son mari ont été les premiers à créer de la radioactivité artificielle2 : ils bombardèrent du bore avec des particules alpha, ce qui donna un isotope d’azote-13 pauvre en neutron. Cet isotope émet des positons. En outre, ils bombardèrent de l’aluminium et du magnésium avec des neutrons pour fabriquer des nouveaux radio-isotopes.</p>
					
					<h4>Principaux domaines</h4>
					
					<p><em>Radiochimie</em></p>
					
					<p>La radiochimie est la chimie des matériaux radioactifs, où des isotopes radioactifs d’éléments sont utilisés pour étudier les propriétés et les réactions chimiques des isotopes non radioactifs (souvent dans la radiochimie, l’absence de radioactivité conduit à la description d’une substance considérée comme inactive, où les isotopes sont stables).</p>
					
					<p><em>Chimie des radiations</em></p>
					
					<p>La chimie des rayonnements est l’étude des effets chimiques des rayonnements sur la matière, ce qui est différent de la radiochimie dans le sens où aucune radioactivité ne doit être présente dans le matériau qui est modifié par le rayonnement.</p>
					
					<p><em>Chimie pour l'énergie nucléaire</em></p>
					
					<p>La radiochimie, la chimie des radiations et le génie chimique nucléaire jouent un rôle très important dans la synthèse de l’uranium et du thorium (à partir de minerais de ces éléments), ces synthèses servant comme combustible nucléaire. Ces spécialités sont également très utiles pour la fabrication de liquides de refroidissement des centrales, le retraitement des combustibles plus ou moins usagés, le traitement des déchets radioactifs et le stockage géologique de ces déchets, le suivi des éléments radioactifs durant les réactions dans les réacteurs…</p>
					
					<p><em>Étude des réactions nucléaires</em></p>
					
					<p>La combinaison de la radiochimie et de la chimie des rayonnements est utilisée pour étudier des réactions nucléaires telles que la fission et la fusion. Un signe précoce de la fission nucléaire est en effet la formation d’un radio-isotope du baryum de courte durée qui est isolé à partir de neutrons d’uranium irradiés (139Ba, avec une demi-vie de 83 minutes et 140Ba, avec une demi-vie de 12,8 jours sont les principaux produits de la fission de l’uranium). À l’époque, on pensait qu’il s’agissait d’un nouvel isotope du radium, car c’était la pratique radiochimique standard que d’utiliser un transporteur de sulfate de baryum précipité pour aider à l’isolement du radium. Plus récemment, une combinaison de plusieurs méthodes radiochimiques et de physique nucléaire a été utilisée pour essayer de réaliser de nouveaux éléments « super-lourds », on pense en effet qu’il existe des îlots de relative stabilité où les radionucléides ont des demi-vies de l’ordre de l’année, ce qui augmente de manière pondérale le nombre de nouveaux éléments à isoler.</p>
					
					<p><em>Le cycle du combustible nucléaire</em></p>
					
					<p>Il s’agit ici de la chimie associée à n’importe quelle partie du cycle du combustible nucléaire, y compris du retraitement du combustible. Ce cycle comprend l’ensemble des opérations impliquées dans la production du combustible, de son extraction, de son traitement et de son enrichissement pour la production. Cela comprend également l’étude du comportement du combustible avant la fin du cycle dans un réacteur sous un angle chimique. A l’extrémité du cycle du combustible, on retrouve la chimie nucléaire lors de la gestion du combustible usagé et donc irradié. Ce combustible irradié peut être installé dans un bassin de refroidissement ou de stockage à sec, avant qu’il ne soit éliminé dans un magasin de déchets souterrain, ou retraité. Cela nécessite l’intervention de la chimie nucléaire. La chimie nucléaire associée au cycle du combustible nucléaire peut éventuellement être divisée en deux parties. Une de ces parties concerne l’opération lorsqu’elle se déroule dans les conditions précises prévues. L’autre partie s’occupe des conditions de réactions lorsque le processus n’est pas strictement respecté, par exemple s’il y a une altération des conditions normales de fonctionnement, ou, plus rare, si un accident se produit.</p>
					
					<p><em>Retraitement des déchets</em></p>
					
					<p>Le plan actuel sur le long terme pour les déchets nucléaires est de les placer dans un magasin en profondeur. Cette politique de non-retraitement fut lancée aux États-Unis en 1977, pour des raisons de préoccupations au sujet des armes nucléaires. Malgré cela, un grand nombre de pays continuent de retraiter le combustible usagé. La méthode actuellement utilisée est la méthode PUREX, qui utilise énormément plusieurs aspects de la chimie. Cette méthode a subi des améliorations (méthode UREX) qui pourrait se démocratiser et s’étendre dans le monde.</p>
					
					<p><em>Absorption des produits d’une fission sur les surfaces</em></p>
					
					<p>Un autre aspect important de la chimie nucléaire est l’étude de la façon dont les produits issus de la fission interagissent avec les surfaces. Cela permet de contrôler la vitesse de libération et la migration des produits issus d’une fission lorsque ceux-ci sont placés dans des conteneurs de déchets spécialisés, ou lors d’un accident dans un réacteur. Il est intéressant de noter que, comme le chromate et le molybdate, l’anion de 99TcO4 peut réagir avec les surfaces en acier pour former une couche résistante à la corrosion. De cette manière, ces anions agissent comme inhibiteurs de corrosion anodique. La formation de 99TcO2 sur des surfaces en acier est un effet qui va retarder la libération de 99Tc des fûts de déchets et de matériels nucléaires lorsque ceux-ci sont perdus avant décontamination (méthode utilisée par exemple pour les réacteurs des sous marins militaires, lorsqu’ils sont perdus en mer). Cette couche de 99TcO2 rend la surface d’acier passive en inhibant la réaction de corrosion anodique. La nature radioactive du technétium rend cette protection contre la corrosion très utile et pratique dans presque toutes les situations. Il a également été montré que les anions de 99TcO4 réagissent pour former une couche sur la surface de charbon actif (ex : charbon de bois) ou sur l’aluminium. Le 99Tc dans les déchets nucléaires peut exister sous d’autres formes que l’anion 99TcO4, ces autres formes ont des propriétés chimiques différentes. De même, le rejet d’iode-131 durant un grave accident de réacteur pourrait être retardé par absorption sur des surfaces métalliques à l’intérieur de la centrale nucléaire en elle-même.</p>
					
					<p><em>Le cas de la chimie isotopique</em></p>
					
					<p>Certaines méthodes d’abord développées dans la chimie et la physique nucléaire sont devenues si largement utilisées dans la chimie et les autres sciences physiques qu’elles peuvent être considérées comme distinctes de la chimie nucléaire. Par exemple, l’effet isotope est utilisé pour étudier les mécanismes chimiques, et l’utilisation d’isotopes cosmogéniques et d’isotopes instables sur le long terme sont utilisés en géologie. C’est donc pour cela que l’on peut considérer une grande partie de la chimie isotopique comme étant séparée de la chimie nucléaire.</p>
					
					<h4>Autres domaines</h4>
					
					<p><em>Utilisation dans d'autres domaines</em></p>
					
					<p>Comme dit plus haut, les isotopes cosmogéniques sont utilisés en géologie. En effet, ceux-ci sont formés par l’interaction des rayons cosmiques avec le noyau d’un atome, ce qui permet de les utiliser à des fins de datation. Ces isotopes peuvent également être utilisés comme traceurs naturels. En outre, il est possible par des mesures minutieuses de certains radio-isotopes stables d’obtenir de nouvelles informations sur les âges des échantillons de glace, l’âge des roches, ou encore, de manière plus insolite, de connaitre le régime alimentaire d’une personne grâce à un cheveu ou un échantillon de tissus de la peau.</p>
					
					<p><em>Biologie</em></p>
					
					<p>Dans les êtres vivants, il existe des marqueurs isotopiques (à la fois radioactifs et non radioactifs) qui peuvent être utilisés pour suivre la manière dont le réseau complexe de réactions qui compose le métabolisme d'un organisme convertit une substance en une autre. Par exemple, une plante verte utilise l’énergie de la lumière pour convertir de l’eau et du dioxyde de carbone en glucose grâce à la photosynthèse. Ainsi, si l’oxygène se trouvant dans l’eau est marqué, on se rend compte que la marque isotopique apparait dans l’oxygène gazeux formé par la plante, et non dans le glucose formé dans les chloroplastes des cellules de la plante. C’est un exemple d’application de la méthode, qui permet de faire des découvertes. Pour les expériences biochimiques et physiologiques, et les méthodes médicales, un certain nombre d'isotopes spécifiques ont des applications importantes.</p>
					
					<ul>
						<li>Les isotopes stables ont l’avantage de ne pas transmettre de dose de radiations au système étudié, même si un excès conséquent de ces isotopes dans l’organe ou l’organisme peut interférer avec sa fonctionnalité. De plus, la capacité d’absorption de ces isotopes par les organismes est limitée pour beaucoup d’entre eux. La mesure de ces isotopes est également difficile, elle nécessite la plupart du temps une spectrométrie de masse pour en déterminer la quantité. De plus, il n’existe aucun moyen de mesure au sein même de la cellule.</li>
						<li>Le deutérium (2H), l’isotope stable de l’hydrogène, est un traceur stable dont la concentration peut-être mesurée par spectrophotométrie de masse ou RMN. Il peut être intégré dans toutes les structures cellulaires. Le 15N, un isotope stable de l’azote peut également être utilisé, surtout pour l’étude de protéines.</li>
						<li>Cependant, les isotopes radioactifs ont un avantage certain : ils sont détectables en très faible dose. De plus, il est très simple d’en mesurer la quantité grâce à un compteur à scintillation ou d’autres méthodes radiochimiques, et ces isotopes peuvent être localisés dans une région particulière de la cellule, quantifiable par autoradiographie. De nombreuses compositions avec des atomes radioactifs dans des positions spécifiques (au sein des molécules) peuvent être préparées et sont trouvables dans le commerce. En grandes quantités, ces compositions peuvent exiger des précautions pour protéger les travailleurs qui les manipulent des effets des radiations. En outre, ces compositions peuvent facilement contaminer la verrerie des laboratoires et autres équipements. Pour certains isotopes, la demi-vie est si courte que la préparation et la mesure sont très difficiles.</li>
					</ul>
					
					<p>Par synthèse organique, il est possible de créer une molécule complexe avec un marqueur radioactif confiné à une petite partie de la molécule. Pour des isotopes à demi-vie courte comme le 11C, des méthodes de synthèses très rapides ont été développées pour permettre l’ajout rapide de l’isotope radioactif sur la molécule.</p>
					
					<ul>
						<li>Le tritium (3H), l’isotope radioactif de l’hydrogène, qui est utilisé pour des activités très précises, peut facilement être préparé dans des positions (au sein même des molécules) spécifiques par hydrogénation des précurseurs insaturés. L’isotope émettant un rayonnement bêta très léger, il peut être détecté par comptage de scintillation.</li>
						<li>Le carbone 11 (11C) peut-être réalisé en utilisant un cyclotron, du bore sous forme d’oxyde de bore se met à réagir avec des protons dans une réaction (p,n). Une manière alternative, c’est de faire réagir du (10B) avec des deutérons. En synthèse organique rapide, le composé (11C) formé dans le cyclotron est transformé en agent d’imagerie qui est ensuite utilisé pour le PET (PolyEthylene Téréphthalate).</li>
						<li>Le carbone 14, 14C, peut être fabriqué (voir plus haut), et il est possible de convertir la matière de la cible en des composés inorganiques et organiques simples. Dans la plupart des travaux de synthèse organique, il est normal d’essayer de créer un produit à partir de deux fragments et d’utiliser une voie convergente, mais quand un marqueur radioactif est ajouté, il est également répandu d’essayer d’isoler ce marqueur en fin de molécule dans un très petit fragment de la molécule pour permettre à la radioactivité d’être aisément localisée dans un seul groupe. L’addition plus tardive du marqueur réduit également le nombre d’étapes de synthèse.</li>
						<li>Le fluor 18, 18F, peut être réalisé par la réaction de néon avec des deutérons, car le 20Ne réagit en hélium 4, 4He. On utilise régulièrement du gaz néon avec une trace de fluor stable 19F2. Ce fluor 19 agit comme un support qui augmente le rendement de la radioactivité de la cible du cyclotron en réduisant la quantité de radioactivité perdue par absorption des surfaces. Cependant, cette réduction de perte se fait au détriment de l’activité spécifique du produit final.</li>
					</ul>
					
					<h4>Résonance magnétique nucléaire</h4>
					
					<p>La spectroscopie RMN utilise le spin des noyaux. L’utilisation de cet outil spectroscopique est devenue d’utilisation normale dans la chimie synthétique et l’étude des molécules organiques. L’imagerie par RMN est également utilisée, et celle-ci s’appuie également sur le spin des noyaux. On trouve des applications en médecine. Elle peut fournir des images détaillées de l’intérieur d’une personne sans lui infliger de radiations. Dans un cadre médical, la RMN est souvent connue simplement sous le nom d’imagerie de « résonance magnétique », ou IRM, mais le mot « nucléaire » (ne concernant ici que le noyau des atomes d'hydrogènes, utilisés par le procédé) ayant une connotation négative pour beaucoup de gens, ce dernier mot a peu à peu disparu de l’expression.</p>
					
					<p class="creative"><mark id="wiki">Licence : Wikipédia :</mark> <img src="../images/CreativeCommons.jpg" alt="creative commons picture" class="creativePicture"/></p>
					
						<?php
							}
							else
							{
								echo "Vous n'avez pas encore acheté ce cours afin de pouvoir y avoir accès : ";
								?>
								<form method="post" action="chimie2.php">
									<input type="submit" value="Acheter ce cours" name="achat_chimie2" id="achat_chimie2"/>
								</form>
								<?php
								
								if(isset($_POST['achat_chimie2']))
								{
									$insert_purchase = $bdd->prepare("INSERT INTO purchase(id_user, id_course) VALUES(?, ?)");
									$insert_purchase->execute(array($_SESSION['id_user'], $id_cours['id_course']));
									header("Location: chimie2.php");
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