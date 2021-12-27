
# Gestion d'élèves - Projet AFIP Formations

Le but de ce projet est la gestion d'élèves et de formations. Dans un premier temps ont doit pouvoir créer des formations, insérer des formateurs, créer des séances avec un formateurs une salles et des horaires et insérer des stagiaires en formation. Les stagiaires ont un nom, un prénom, une nationalité, un type de formation et une ou plusieurs séances.



## Installation
Pour le fonctionnement du projet des fichiers de configuration sont requis.  

Des templates sont disponible dans le dossier `/App/config/_template` il faut les dupliquer dans le dossier `/App/config`  

Le fichier `/App/config/app.php` contient divers configuration pour le bon fonctionnement du projet
```php
$app_config = array(
    'url' => "http://localhost:8080/", //URL du projet
    'path' => "/TP_DEV_PHP/GESTION_ELEVE/public/" //Chemin du dossier public
    //Les URLs du projet seront donc dans cet exemple http://localhost:8080/TP_DEV_PHP/GESTION_ELEVE/public/
);
```
Le fichier `/App/config/mysql.php` contient la configuration pour la connexion a la base de données du projet
```php
$mysql_config = array(
    'host' => "localhost",
    'db_name' => "gestion_eleves",
    'username' => "",
    'password' => "",
);
```  

Pour l'instalation de la base de données un dump ce trouve dans le dossier `/_SQL`  
## Technologies utilisées

**Client:** HTML, CSS, JS, JQuery, Bootstrap V3.4, Select2.js

**Serveur:** PHP
## Auteurs

- [@morganjacquet](https://github.com/morganjacquet)