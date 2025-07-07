# EcoRide

## Description
EcoRide est une plateforme de covoiturage écologique qui vise à réduire l'impact environnemental des déplacements. La mission est de devenir la principale plateforme de covoiturage pour les voyageurs soucieux de l'environnement et ceux qui recherchent une solution économique pour leurs dépalcement en voiture.

## Technologies utilisées:

### FrontEnd:

<ins>HTML</ins>= Choix standard pour le développement web, utilisé pour la structure et le contenu;

<ins>CSS</ins> = Pour se projet pour vous montrez que je sais me servir du CSS avec HTML en intégrer le link. Le CSS est ppur stylisé les pages web, les mettres en formes, dans ce cas je l'ai utilisé pour la police.

<ins>Tailwind CSS</ins> = Framework CSS utilitaire-first. Après l'avoir utilisé pour un autre projet, je voulais le mettre en pratique ici, et travailler le CSS ici.Ainsi pour aller plus vite et effectué les modifications nécessaires.

<ins>PHP</ins> = Bien que principalement un langage backend, il est utilisé ici pour la génération dynamique de contenu côté serveur et l'intégrations avec le backend.

<ins>JavaScript</ins> = Utilisé pour ajouter de l'interactivité et du dynamisme aux pages web côté client.

### BackEnd:

<ins>PHP</ins> = Utilisé pour la logique serveur, la gestion des données, les requêtes à la base de données et l'API. Choix justifié par sa maturité, sa grande communauté et sa facilité d'intégration avec MySQL.

### Base de données:

<ins>Mysql</ins> = Base de données relationnelle utilisée pour stocker les données de l'application. Choix motivé par sa popularité, sa compatibilité avec PHP.

###Serveur:

<ins>Docker & Docker Compose</ins> = Choix clé pour la conteneurisation de l'application. Docker permet de créer des environnements isolés et reproductibles pour chaque composant de l'application (serveur web, base de données, etc.), assurant la cohérence entre les environnements de développement, de test et de production et simplifiant le déploiement. Docker Compose est utilisé pour définir et orchestrer ces conteneurs, facilitant la gestion de l'ensemble de l'application. L'utilisation de Docker a permis de résoudre les problèmes de dépendances et de configuration rencontrés avec XAMPP, et de garantir que l'application fonctionne de manière fiable sur différentes plateformes.

<ins>Nginx</ins> = Serveur web utilisé pour recevoir les requêtes HTTP et servir les fichiers statiques (HTML, CSS, JavaScript, images).

<ins>PHP-FPM</ins> = Utilisé pour exécuter les scripts PHP.

<ins>phpmyadmin</ins> = Utilisé pour l'admnistration de la base de données MySQL. Celà permet d'avoir un visuel sur la base de données et des tables =  http://localhost:8080/

<ins>MySQL</ins> = Base de données relationnelle utilisée pour stocker les données de l'application.

### Prérequis:

Pour installer et exécuter ce projet, vous aurez besoin de :

> Docker et Docker compose

> Navigateur web moderne

> Git

<ins>Installation:</ins>

GIT CLONE https://github.com/AGonzalez8805/EcoRide.git

Pour accéder au dossier du projet:

 `cd EcoRide`

Lancer les containers docker:

`docker-compose up -d`

Une fois docker-compose lancer accéder à l'application via:

http://localhost/

Pour arrêter l'application:

`docker-compose down`

## Arborescence
ECORIDE/ <br>
├── admin/<br>
│      ├── membres.php<br>
|      ├── tableauDeBord.php<br>
├── Asset/<br>
│   ├── css/<br>
│   | └── style.css<br>
│   ├── images/ <br>
│   | ├── Electric 1.png <br>
│   | ├── Hybrid 1.png <br>
│   | ├── imagefond.png <br>
│   | └── LOGO EcoRide avec un oiseau.png <br>
├── js/ <br> 
│    ├── accueil.js <br>
│    ├── connexion.js <br>
│    ├── contact.js <br>
│    └── inscription.js <br>
├── pages/ <br>
│   ├── connexion.php <br>
│   ├── contact.php <br>
│   ├── covoiturage.php <br>
│   ├── deconnexion.php <br>
│   ├── inscription.php <br>
│   ├── mentions.php <br>
│   └── moncompte.php <br>
├── php/ <br>
│    ├── connexionPost.php <br>
|    ├── contactPost.php<br>
│    └── inscriptionPost.php <br>
├── Templates/ <br>
│    ├── footer.php <br>
│    └── header.php <br>
├── vendor/ <br>
├── .env <br>
├── .env.example <br>
├── .gitignore <br>
├── Amelie.session.sql <br>
├── composer.json <br>
├── composer.lock <br>
├── config.php <br>
├── docker-compose.yml <br>
├── Dockerfile <br>
├── index.php <br>
└── README.md <br>
