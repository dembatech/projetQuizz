<?php 
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.model.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action']=="connexion"){
            echo "Traiter le formulaire de connexion";
        }
    }
}


if($_SERVER["REQUEST_METHOD"]=="GET"){
    if(isset($_REQUEST['action'])){
        // if(!is_connect()){
        //     header("location:".WEB_ROOT);
        //     exit();
        // }
        if($_REQUEST['action']=="accueil"){
            if(is_admin()){
                lister_joueur();
            }
            elseif (is_joueur()) {
                jeu() ;
            }
        }
        elseif($_REQUEST['action']=="liste.joueur"){
            lister_joueur(); 
        } 
        elseif($_REQUEST['action']=="creer_admin"){
            creer_admin();
        }
        elseif($_REQUEST['action']=="creer_joueur"){
            creer_joueur();
        }
        else{
            echo "ERREUR 404 NOT FOUND !";
        }
    }

}  
        // ($_REQUEST['action']=="connexion"){
        //     echo "Charger la page de connexion";
        // }
        //  elseif 
        

function lister_joueur() {
    ob_start();
        $data=find_players(ROLE_JOUEUR);
        require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."liste.joueur.html.php");
    $content_for_views=ob_get_clean();
    require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
}


function jeu() {
    ob_start();
       echo "<h1>Bienvenue au jeu !</h1>";
       echo '<a href='.WEB_ROOT."?controller=securite&action=deconnexion>deconnexion</a>";
    $content_for_views=ob_get_clean();
    require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil_joueur.html.php");
}

function creer_admin(){
    ob_start();
        require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."creer_admin_ou_joueur.html.php");
    $content_for_views=ob_get_clean();
    require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
}

function creer_joueur(){
    ob_start();
        require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."creer_admin_ou_joueur.html.php");
    $content_for_views=ob_get_clean();
    require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil_joueur.html.php");
}






