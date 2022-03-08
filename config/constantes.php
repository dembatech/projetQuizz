<?php
/**
* Chemin sur dossier racine du projet
*/
define("ROOT",str_replace("public".DIRECTORY_SEPARATOR."index.php","",$_SERVER['SCRIPT_FILENAME']));
/**
* Chemin sur dossier src qui contient les controllers et les modeles
*/
define("PATH_SRC",ROOT."src".DIRECTORY_SEPARATOR);
/**
* Chemin sur dossier templates du projet
*/
define("PATH_VIEWS",ROOT."templates".DIRECTORY_SEPARATOR);
/**
* Chemin sur data qui contient le fichier Json db.json
*/
define("PATH_DB",ROOT."data/db.json");
/**
* Chemin sur le dossier public , pour inclusion des images,css et js
*/
define("WEB_ROOT",str_replace("index.php","",$_SERVER['SCRIPT_NAME']));
/**
* Chemin sur l'action des formulaires
*/
define("PATH_POST","http://localhost:8080");
// cle d'erreur
define("KEY_ERRORS", "errors");
// clé de l'utilisateur connecté
define("KEY_USER_CONNECT", "user_connect");
define("ROLE_JOUEUR","JOUEUR");
define("ROLE_ADMIN","ADMIN");