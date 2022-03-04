<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action']=="connexion"){
            echo "Traiter le formulaire de connexion";
        }
    }
}


if($_SERVER["REQUEST_METHOD"]=="GET"){
    if(isset($_REQUEST['action'])){
        if(!is_connect()){
            header("location:".WEB_ROOT);
        }
        if($_REQUEST['action']=="connexion"){
            echo "Charger la page de connexion";
        }
         elseif ($_REQUEST['action']=="accueil")
            require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
       
    }

}

