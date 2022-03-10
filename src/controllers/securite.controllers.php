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
        elseif($_POST['action'] == "inscription"){
            extract($_POST);
            $score=0;
            $avatar=$_FILES;
            inscription($role,$prenom,$nom,$avatar,$score,$login,$password,$password2);
        }
        else
            echo"error 404 ";
    }
}

function connexion(string $login,string $password):void {
    $errors=[];
    $_SESSION["login"]=$login;
    champ_obligatoire("errorLogin",$login,$errors);
    if(!isset($errors['errorLogin'])){
        valid_email("errorLogin",$login,$errors);
    }
    champ_obligatoire("errorPassword",$password,$errors);
    
    // count c'est pour determiner la taille du tableau
    if(count($errors)==0){
        $userConnect=find_user_login_password($login,$password);
        if(count($userConnect)!=0){
            unset($_SESSION["login"]);
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

function inscription($role,$prenom,$nom,$avatar,$score,$login,$password,$password2){
    $errors=[];
    $_SESSION["login2"]=$login;
    $_SESSION["nom"]=$nom;
    $_SESSION["prenom"]=$prenom;


    //$_SESSION["inscription"]=$login;
    champ_obligatoire("error_login",$login,$errors);
    if(!isset($errors['error_login'])){
        valid_email("error_login",$login,$errors);
        exist_mail("error_login",$login,$errors);
    }
    champ_obligatoire("error_nom",$nom,$errors);
    if(!isset($errors['error_nom'])){
        valid_name("error_nom",$nom,$errors);
    }
    champ_obligatoire("error_prenom",$prenom,$errors);
    if(!isset($errors['error_prenom'])){
        valid_name("error_prenom",$prenom,$errors);
    }

    champ_obligatoire("error_password",$password,$errors);
    if(!isset($errors['error_password'])){
        valid_password("error_password",$password,$errors);
    }

    champ_obligatoire("error_password2",$password2,$errors);
    if(!isset($errors['error_password2'])){
        confirm_password("error_password2",$password,$password2,$errors);
    }

    $extension=pathinfo($avatar["avatar"]["full_path"],PATHINFO_EXTENSION);
    valid_extension( "fichier_invalide",$extension,$errors);

    if(count($errors)==0){
    
    }
    else{
        $_SESSION[KEY_ERRORS]=$errors;
        if(is_admin()){
            header("location:".WEB_ROOT."?controller=user&action=creer_admin");
        }
        else
            header("location:".WEB_ROOT."?controller=user&action=creer_joueur");
    }   
}