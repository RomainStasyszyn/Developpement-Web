# Developpement-Web
Projet de développement d'un site de vente de cours en ligne en PHP, HTML, CSS, Javascript

Le site que j'ai développé s'appelle Courseland, s'il s'avère que ce nom correspond à une entité tierce ce serait un fait totalement fortuit.



--------------------------------------------FONCTIONALITEES DU SITE WEB POUR LE PROJET 1-PARTIE 1-------------------------------------------


Le site est constitue d'une page d'accueil presentant l'entreprise et les objectifs de Courseland. En haut de la page il y a un menu de 
navigation permettant de se rendre sur la page d'accueil (sert surtout si on se trouve sur une autre page du site), sur la page des cours 
que propose Courseland, la page d'inscription demandant la saisie du pseudonyme, adresse e-mail et mot de passe du nouvel utilisateur.
En bas de page il y a des liens vers les reseaux sociaux (dans le cadre de ce projet une page twitter et une page facebook dediees ont ete 
crees afin de donner de la visibilite a l'entreprise), les sites partenaires et les mentions legales du site.
Chaque page du site comportent cet en-tete et ce pied de page afin de facilement acceder a ces fonctionalites. Parmi les cours proposes il
y a les trois cours d'informatique tires du site partenaire OpenClassRoom, les autres seront peut etre propose plus tard par l'entreprise 
car Courseland souhaite developper son activite en l'etendant a d'autres domaine que l'informatique.
Dans la mesure du possible un effort a ete porte sur duplication de code, des inclusion de page html via du code php et une feuille de style
pour le header et une pour le footer de chaque page du site permette de limiter la duplication de code.


--------------------------------------------FONCTIONALITEES DU SITE WEB POUR LE PROJET 1-PARTIE 2-------------------------------------------


Le script courseland.sql contient de quoi cree une base de donnees nommee courseland contenant la table user. Cette table est constituee de
4 attributs, id de type INT autoincrementable et faisant office de cle primaire representant de facon unique un seul utilisateur inscrit
du site. Le pseudo de type CHAR au plus de 16 caractères. Le password est un CHAR de 255 au plus et l'e-mail lui aussi est un CHAR de 255
caracteres au plus. La base utilisee est en InnoDB. La base de donnee a ete importee via le script avec phpMyAdmin sous wampp pour windows
puis teste sous xampp sous une machien virtuelle Ubuntu afin de tester la compatibilite de celle-ci, ainsi le site est fonctionnel sous les
deux OS, tout est fonctionnel.
Un utilisateur peut s'inscrire en informant son pseudonyme, son mot de passe et une adresse mail valide. Tous les champs doivent etre rempli
et le pseudonyme comme l'e-mail ne doivent pas etre deja utilise par un utilisateur deja inscrit. Si un utilisateur non connecte consulte un
cours celui-ci n'est pas disponible et invite l'utilisateur a se connecter afin d'y avoir acces. Ainsi la connection donne acces aux cours,
l'en-tete de chaque page est mis a jour, l'onglet inscrivez-vous est remplace par le pseudonyme de l'utilisateur et l'onglet connectez-vous
est remplace par deconnectez-vous. En cliquant sur l'onglet deconnectez-vous, l'utilisateur se voit deconnecte du site internet Courseland.
Pour se connecter l'utilisateur doit saisir son pseudonyme et son mot de passe, en cas de probleme un message informe l'utilisateur.


-------------------------------------------FONCTIONALITEES DU SITE WEB POUR LE PROJET 1-PARTIE 3--------------------------------------------


Le script courselandv2.sql remplace l'ancien, ici ont ete ajoutees deux tables, une representant la liste des cours disponibles sur le site,
l'autre representant les cours achetes par chaque utilisateur. Pour le moment la table purchase (table des achats) contient id_purchase pour
identifier chaque achat de maniere unique et deux cles etrangeres, une pour id de l'utilisateur et une pour l'id du cours qui a ete ahete
par celui-ci. Prochainement la base de donnee sera optimisee afin d'avoir chaque cours lie a une categorie et au lieu de faire deux requetes
pour savoir si le cours a ete achete, sera utilise jointure afin de minimiser le nombre de requetes. A cette etape un utilisateur non loge
qui tente de visualiser un cours se voit informer de la necessite de se connecter afin de le visualiser. S'il se connecte et que le cours a
ete achete alors il est visualisable sinon on informe l'utilisateur qu'il doit acheter le cours afin de voir plus que le titre de celu-ci.
L'achat se fait pour le moment avec un simple bouton, plus tard sera peut-etre implemente un systeme de porte-monnaie, seulement si la page
de profil est implementee.


FONCTIONALITE PARTIE 4 
une page de profil avec probleme de changeements de donnees dans la bdd
toute les fonctionalites demandees ans le sujet sont implementees.

--------------------------------SOURCES DES IMAGES UTILISEES POUR LE PROJET DE SITE DE VENTE DE COURS EN LIGNE------------------------------


Image de la ville de New York :

http://images.google.fr/imgres?imgurl=http%3A%2F%2Fsummerleague.globalbasketball.com%2Fwp-content%2Fuploads%2F2014%2F04%2FNew-York-City-Imag
e.jpg&imgrefurl=http%3A%2F%2Fplanugo.com%2Ffr%2Fdiscover%2Fdestinations%2Fnew-york&h=800&w=1920&tbnid=XeXHhXd6NnXabM%3A&docid=Xglq02kts2DvlM
&ei=23auVqqvG8X7auzPiRg&tbm=isch&iact=rc&uact=3&dur=1456&page=1&start=0&ndsp=30&ved=0ahUKEwjqiPjo-dTKAhXFvRoKHexnAgMQrQMIODAJ

Image de separation des header et footer, facebook et twitter tirees du site openclassroom.

Image d'Oracle :

http://images.google.fr/imgres?imgurl=http%3A%2F%2Fmedia.logistique-internationale.com%2Flogosociete%2Flogo_oracle_442451.gif&imgrefurl=http
%3A%2F%2Fwww.logistique-internationale.com%2Fsociete%2Foracle-france_286392&h=250&w=250&tbnid=upcpLV_3id1EkM%3A&docid=tpx0eV5jWCXFoM&ei=L9yv
Vr6oGovwauT_t8gD&tbm=isch&iact=rc&uact=3&dur=184&page=3&start=71&ndsp=38&ved=0ahUKEwj--4rMztfKAhULuBoKHeT_DTk4ZBCtAwgQMAQ

Image du site developper.com :

http://images.google.fr/imgres?imgurl=http%3A%2F%2Fjlambert.developpez.com%2Ftutoriels%2Fdotnet%2Fthemesaspnet%2Fimages%2Flogodvp.gif&imgref
url=http%3A%2F%2Fjlambert.developpez.com%2Ftutoriels%2Fdotnet%2Fthemesaspnet%2F&h=108&w=248&tbnid=KvZD_T9-NnxhCM%3A&docid=Q-UvU2B4tq-7YM&ei=
edyvVtqnAsita9HJiLAI&tbm=isch&iact=rc&uact=3&dur=5362&page=1&start=0&ndsp=42&ved=0ahUKEwiayJfvztfKAhXI1hoKHdEkAoYQrQMIITAA

Image du site OpenClassRoom :

http://images.google.fr/imgres?imgurl=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Ffr%2F0%2F0d%2FLogo_OpenClassrooms.png&imgrefurl=https
%3A%2F%2Ffr.wikipedia.org%2Fwiki%2FFichier%3ALogo_OpenClassrooms.png&h=595&w=842&tbnid=HfT11sRcaGpFFM%3A&docid=FaQixdcRtV9ULM&ei=qtyvVtSzAoe
uaezWkqAK&tbm=isch&iact=rc&uact=3&dur=1536&page=1&start=0&ndsp=34&ved=0ahUKEwjUsMaGz9fKAhUHVxoKHWyrBKQQrQMIITAA

Image du site W3C :

http://images.google.fr/imgres?imgurl=http%3A%2F%2Fwww.mindeez.com%2Fwp-content%2Fuploads%2F2011%2F05%2Flogo-w3c.gif&imgrefurl=http%3A%2F%2F
www.mindeez.com%2Fwebdesign%2Fafficher-le-logo-valide-w3c-utile-ou-non%2F&h=150&w=578&tbnid=Cf9EcxGyIK99kM%3A&docid=M1MSkctNsoZZCM&ei=_9yvVr
vtOIe0abTEkcgO&tbm=isch&iact=rc&uact=3&dur=1808&page=1&start=0&ndsp=31&ved=0ahUKEwj76MCvz9fKAhUHWhoKHTRiBOkQrQMILTAE
