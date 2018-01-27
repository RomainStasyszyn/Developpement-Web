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
					<h3>Principe d'incertitude</h3>

					<?php
						$bdd = new PDO('mysql:host=localhost;dbname=courselandv2', 'root', '');
						$id_name = 'principe incertitude';
						
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

					<p>En mécanique quantique, le principe d'incertitude (ou principe d'indétermination), aussi connu sous le nom de principe d'incertitude de Heisenberg, désigne toute inégalité mathématique affirmant qu'il existe une limite fondamentale à la précision avec laquelle on peut connaître simultanément deux propriétés physiques d'une même particule ; ces deux variables dites complémentaires peuvent être sa position et sa quantité de mouvement.</p>
					
					<p>Présenté pour la première fois en 1927, par le physicien allemand Werner Heisenberg, il énonce que plus la position d'une particule est déterminée, moins sera précise sa vitesse, et inversement. L'inégalité formelle reliant l'écart type de la position σx et l'écart type de la quantité de mouvement σp a été établie par Earle Hesse Kennard plus tard la même année et par Hermann Weyl en 1928 :</p>
					
					<p>σxσp >= h/2</p>
					
					<p>où ħ est la constante de Planck réduite, égale à h/2π. La quantité de mouvement étant le produit de la masse m et la vitesse v, cette relation peut aussi être écrite</p>
					
					<p>σxσp >= h/2m</p>
					
					<p>Cette forme met en évidence que le produit des deux écarts types est important surtout pour les particules microscopiques qui ont de petites masses. Pour les objets macroscopiques de masse grande, ce produit est négligeable de sorte que leur mouvement est bien décrit par la mécanique newtonienne.
					Le terme « incertitude » est le terme historique pour ce principe. Le nom de théorème d'indétermination est parfois préféré car le principe ne porte pas sur l'ignorance « subjective » de grandeurs par l'expérimentateur, mais bien sur une impossibilité fondamentale de les déterminer, et même sur le fait que le concept de grandeur précise n'a pas de sens physique. De plus, ce principe étant démontré par les équations, il devient un théorème.</p>
					
					<h4>Histoire du terme</h4>
					
					<p>Le principe d'incertitude est souvent appelé principe d'indétermination. L'emploi de ces deux termes pour désigner la même notion résulte d'un problème lors de la traduction en anglais de l'article de Heisenberg. En effet, lors de la première rédaction de son article, Heisenberg emploie les termes Unsicherheit (incertitude) et Ungenauigkeit (imprécision), puis, comprenant que ces termes peuvent prêter à confusion, il décide d'utiliser finalement le terme Unbestimmtheit (indétermination). Mais l'article est déjà traduit et c'est le terme « principe d'incertitude » qui sera consacré.</p>
					
					<p>Bien que la dénomination « principe d'incertitude » soit la plus usitée, on devrait en toute rigueur parler de « principe d'indétermination ». Cependant l'expression s'est répandue à tel point qu'elle est aujourd'hui acceptée par tous les physiciens. Le terme de « principe » est aussi inapproprié, quoique souvent encore usité. Il conviendrait de parler de « relations » d'incertitude ou mieux de relations d'indétermination, étant donné que ces relations sont parfaitement justifiées au point de vue mathématique.</p>
					
					<p>En raison des connotations philosophiques du terme de « principe », aujourd'hui, les physiciens parlent davantage des relations d'incertitude, ou des inégalités de Heisenberg, car il s'agit d'une inégalité portant sur des grandeurs physiques non-commutatives.</p>
					
					<h4>Conséquences</h4>
					
					<p>En raison des connotations philosophiques du terme de « principe », aujourd'hui, les physiciens parlent davantage des relations d'incertitude, ou des inégalités de Heisenberg, car il s'agit d'une inégalité portant sur des grandeurs physiques non-commutatives.</p>
					
					<p>Le principe d'indétermination énonce donc, contrairement à la mécanique classique, que pour une particule donnée, on ne peut connaître simultanément sa position et sa vitesse exactes selon une formule de proportionnalité.
					Si par contre, on renonce à considérer la particule comme objet corpusculaire défini par des valeurs scalaires (position, vitesse, etc), mais ayant une certaine extension dans l'espace, il est possible de la représenter par une fonction décrivant sa distribution spatiale. Toute l'information relative à une particule est alors contenue dans une fonction d'onde.
					Les mesures scalaires effectuées sur cette particule consistent à extraire seulement une partie de cette information, par l'intermédiaire d'opérateurs mathématiques.</p>
					
					<h4>Difficulté d'interprétation</h4>
					
					<p><em>Exemples</em><p>
					
					<p>Cette corrélation d'incertitudes est parfois expliquée de manière erronée en affirmant que la mesure de la position modifie obligatoirement la quantité de mouvement d'une particule. Heisenberg lui-même offrit initialement cette explication en 1927. Cette modification ne joue, en réalité, aucun rôle, car le théorème s'applique même si la position est mesurée dans une copie du système, et la quantité de mouvement dans une autre copie, parfaitement identique.</p>
					
					<p>Une meilleure analogie serait la suivante : soit un signal variable dans le temps, comme une onde sonore, et soit à connaître la fréquence exacte de ce signal à un instant t précis. Ceci est impossible en général, car pour déterminer précisément la fréquence, il faut échantillonner le signal pendant une certaine durée. En traitement du signal, cet aspect est au cœur de l'approche temps-fréquence du spectrogramme où l'on utilise le principe d'incertitude sous la formulation de Gabor.</p>
					
					<p>Le théorème d'Heisenberg s'applique en particulier à l'expérience cruciale des fentes de Young avec un photon unique : toutes les ruses qu'inventent les physiciens pour tenter de voir passer la « particule » à travers un des trous, détruisent la phase et donc les interférences de l'onde : il y a complémentarité au sens de Bohr, c’est-à-dire que si avant toute mesure, l'état quantique |V>  décrit à la fois un aspect ondulatoire et un aspect corpusculaire, après la mesure, il subsiste un aspect ondulatoire ou un aspect corpusculaire. Selon la phrase célèbre de Dirac, la « particlonde » a interféré avec elle-même.</p>
					
					<p>Cette expérience est présentée au Palais de la découverte avec une source de photon unique. Le motif produit par des millions de photons passant à travers les fentes peut être calculé à l'aide de la mécanique quantique, mais le chemin de chaque photon ne peut être prédit par aucune méthode connue. L'interprétation de Copenhague dit qu'il ne pourra être calculé par aucune méthode. En 2005, on a même réussi cette expérience avec des fullerènes, de grosses molécules de carbone contenant 60 atomes.</p>
					
					<p><em>La controverse Bohr-Einstein</em><p>
					
					<p>Einstein n'aimait pas le théorème d'incertitude. Lors du cinquième congrès Solvay (1927), il soumit à Bohr un fameux défi expérimental : nous remplissons une boîte avec un matériau radioactif qui émet, de manière aléatoire, une radiation. La boîte a une fente qui est ouverte et immédiatement fermée par une horloge de précision, permettant à quelques radiations de sortir. Donc le temps est connu avec précision. Nous voulons toujours mesurer précisément l'énergie qui est une variable conjuguée. Aucun problème, répond Einstein, il suffit de peser la boîte avant et après. Le principe d'équivalence entre la masse et l'énergie donnée par la relativité restreinte permet ainsi de déterminer précisément l'énergie qui a quitté la boîte. Bohr lui répondit ceci : « si de l'énergie avait quitté le système alors la boîte plus légère serait montée sur la balance, ce qui aurait modifié la position de l'horloge dans le champ gravitationnel terrestre. » La relativité générale montre alors que le temps propre de l'horloge est (très légèrement) accéléré, ce qui conduit inévitablement à une marge d'erreur. En fait l'analyse détaillée montre que l'imprécision est donnée correctement par la relation d'Heisenberg. Voir par exemple le site de la fondation Nobel pour une figure de cette « horloge dans la boîte ».</p>
					
					<p>Dans l'interprétation de Copenhague de la mécanique quantique, largement acceptée mais pas universellement, le théorème d'incertitude implique qu'à un niveau élémentaire, l'univers physique ne « vit » pas dans un espace des phases, mais bien plutôt comme un ensemble de réalisations potentielles, exactement déterminées en probabilité : les probabilités sont, elles, déterminées avec une précision absolue, pour autant que l'état du système soit pur (c’est-à-dire qu'il ne soit pas lui-même déterminé approximativement !)</p>
					
					<h4>Etats comprimés</h4>
					
					<p>Pour contourner les inégalités d'Heisenberg, les physiciens réalisent des états dits comprimés (en franglais : états « squeezés »), où il n'y a aucune incertitude sur la phase (mais alors le nombre de particules est indéterminé) ou, au contraire, un nombre bien déterminé de particules (en particulier de photons), mais on perd l'information sur la phase. Il a été montré par les travaux de Glauber que l'information quantique n'est pas entachée par le théorème d'Heisenberg. On peut donc espérer tirer le maximum d'information quantique d'une photographie numérique, tout en respectant le deuxième principe de la thermodynamique.</p>
					
					<h4>Bibliographie</h4>
					
					<ul>
						<li>David C. Cassidy ; Uncertainty - The life & science of Werner Heisenberg, Freeman & Co. (1992)</li>
						<li>Werner Heisenberg ; Les principes physiques de la théorie des quanta, Gauthier-Villars (1932). Réédition par Jacques Gabay (1989)</li>
						<li>John von Neumann ; Les fondements mathématiques de la mécanique quantique, Springer-Verlag (1932). Traduction française : Librairie Alcan (1946), réédité par Jacques Gabay (1988)</li>
						<li>George Birkhoff and John von Neumann, The Logic of Quantum Mechanics, Annals of Mathematics 37 (1936)</li>
						<li>John S. Bell ; Phys 1 (1964) 195</li>
						<li>Roland Omnès ; Comprendre la mécanique quantique, EDP Sciences (2000)</li>
					</ul>
					
					<p class="creative"><mark id="wiki">Licence : Wikipédia :</mark> <img src="../images/CreativeCommons.jpg" alt="creative commons picture" class="creativePicture"/></p>
					
						<?php
							}
							else
							{
								echo "Vous n'avez pas encore acheté ce cours afin de pouvoir y avoir accès : ";
								?>
								<form method="post" action="physique2.php">
									<input type="submit" value="Acheter ce cours" name="achat_physique2" id="achat_physique2"/>
								</form>
								<?php
								
								if(isset($_POST['achat_physique2']))
								{
									$insert_purchase = $bdd->prepare("INSERT INTO purchase(id_user, id_course) VALUES(?, ?)");
									$insert_purchase->execute(array($_SESSION['id_user'], $id_cours['id_course']));
									header("Location: physique2.php");
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