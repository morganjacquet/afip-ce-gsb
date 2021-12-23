
# Gestion d'élèves

Le but de ce projet est la gestion d'élèves et de formation. Dans un premier temps à pouvoir insérer des stagiaires en formation. Ces stagiaires ont un nom, un prénom, une nationalité, un type de formation et un formateur dans une salle entre deux dates.



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
## Auteurs

- [@morganjacquet](https://github.com/morganjacquet)