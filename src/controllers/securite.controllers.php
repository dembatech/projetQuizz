<?php
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.model.php");
/**
* Traitement des Requetes POST
*/
// Nous pouvons aussi utiliser $REQUEST['action']
if($_SERVER['REQUEST_METHOD']=="GET"){
    if(isset($_GET['action'])){ 
       if($_GET['action'] == "connexion"){
            require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
       }
       elseif($_GET['action'] =="deconnexion"){
           logout();
       }
       else
            echo "error 404 ";
    }
    else {
        require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
    }  
}

/**
* Traitement des Requetes GET
*/
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['action'])){ 
        if($_POST['action'] == "connexion"){
            $login=$_POST['login'];
            $password=$_POST['password'];
            connexion($login,$password);
        }
        else
            echo"error 404 ";
    }
}

function connexion(string $login,string $password):void {
    $errors=[];
    champ_obligatoire("errorLogin",$login,$errors);
    if(!isset($errors['errorLogin'])){
        valid_email("errorLogin",$login,$errors);
    }
    champ_obligatoire("errorPassword",$password,$errors);
    
    // count c'est pour determiner la taille du tableau
    if(count($errors)==0){
        $userConnect=find_user_login_password($login,$password);
        if(count($userConnect)!=0){
            $_SESSION[KEY_USER_CONNECT]=$userConnect;
             header("location:".WEB_ROOT."?controller=user&action=accueil");
            // require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
            exit();
        }else{
            $errors['errorConnexion']="Login ou Mot de passe incorrect";
            $_SESSION[KEY_ERRORS]=$errors;
            header("location:".WEB_ROOT);
            exit();
        }
    }else{
        $_SESSION[KEY_ERRORS]=$errors;
        header("location:".WEB_ROOT);
        exit();
    }
}

function logout():void{
    //$_SESSION[KEY_USER_CONNECT]=array();
    unset($_SESSION[KEY_USER_CONNECT]);
    session_destroy();
    header("location:".WEB_ROOT);
    exit();
    
}