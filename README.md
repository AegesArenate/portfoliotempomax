BigProject
Intitulé, contexte et descriptif du projet Dans ce projet, vous ferez appel à la totalité des compétences et connaissances acquises au travers des différents projets, ateliers et conférences vus au cours de l’année, afin de créer une seule infrastructure complète.

Doc technique

SERVER

Installation debian server : vers. 11.6.0 https://lecrabeinfo.net/telecharger/debian-11-64-bits : / type : iso Virtualiseur : Virtual box 7.0 Settings : username: avg38; mdp : *demander; Hostname : ServerUbuntu Domain.name : myguest.virtualbox.org réseau: enp0s3/ DHCPv4 10.0.2.15/24 server openSSH : Oui; installation supplémentaire : non

SERVER WEB

Choix : Apache2 installation en ligne de commande : sudo apt install apache2 Fichiers config : /etc/apache2/apache2.conf ; /etc/apache2/sites-availables/000-default.conf ; /etc/apache2/sites-enabled/000-default.conf ; Toutes les commandes:

sudo apt-get update sudo apt-get install apache2 sudo apt-get install vim sudo apt-get install php libapache2-mod-php php-mysql

MARIADB sudo apt-get install mariadb-server sudo mysql_secure_installation sudo mysql -u root -p CREATE DATABASE dbname; CREATE USER 'username'@'localhost' IDENTIFIED BY 'password'; GRANT ALL PRIVILEGES ON dbname.* TO 'username'@'localhost'; FLUSH PRIVILEGES;

sudo mkdir /var/www/html/monsite sudo chown -R www-data:www-data /var/www/html/monsite sudo vim /var/www/html/monsite/index.php -> on ajoute du code php sudo service apache2 restart

REALISATION DU SITE

Framework utilisé: Materialize css J'utilise pour ce site : Materialize Pour l'intégré rien de plus simple, il suffit de rajouter cette ligne d'intégration dans le HEAD :


  <?php include "phpimports/styleImports.php"; ?>
C'est dans ce StyleImports qu'on retrouve la redirection sur tous les fichiers css de notre site, permettant d'augmenter l'efficacité et la simplicité.

Materialize permet une simplification du css, en automatisant cette tache, en accomplissant également la responsivité

WEB PHP

Pour l'instant seulement le formulaire de contact (provisoirement le livre d'or) est lié à une base de donnée dans phpMyAdmin via Uwamp (qui passera surement sur mariaDB sur VM)

db_name : Big_project; username = "root"

J'initialise le php avec son fichier config.php et je le "require" dans chaque fichier .php

Dans index.php je dois faire un livre d'or, j'enregistre donc les données sur ma BDD à l'aide d'un "form" (avec les attributs: "action='chemin/du/fichier' method='post'". Puis j'affiche ces mêmes données sur ma page à l'aide de la requête SQL suivante:

"$sql = "SELECT * FROM guestbook ORDER BY id DESC LIMIT 3"; --> je met la requête SQL dans une variable ("$sql") $pre = $pdo->prepare($sql); --> je prépare la requête $pre->bindParam('id', $_POST['id']); --> je cache les id des données $pre->execute(); --> j'execute la commande $data = $pre->fetch(PDO::FETCH_ASSOC); --> "Je récupère toutes les données demandé dans la requête SQL"
