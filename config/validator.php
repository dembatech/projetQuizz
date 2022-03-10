<?php
function champ_obligatoire(string $key,string $data,array &$errors,string $message="ce champ est obligatoire"){
    if(empty($data)){
        $errors[$key]=$message;
    }
}
function valid_email(string $key,string $data,array &$errors,string $message="Email invalide"){
    $regex="/^([a-zA-Z0-9]+)([\.{1}])?([a-zA-Z0-9]+)\@gmail([\.])com$/";
    if(!preg_match($regex,$data))
        $errors[$key]=$message; 
    // if(!filter_var($data,FILTER_VALIDATE_EMAIL)){
    //     $errors[$key]=$message;
    // }
}
function valid_password(string $key,string $data,array &$errors,string $message="Mot de passe invalide"){
    $regex="/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/";
    if(!preg_match($regex,$data))
        $errors[$key]=$message; 
}

function valid_name(string $key,string $data,array &$errors,string $message="Nom invalide"){
    $r="/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u";
    if(!preg_match($r,$data) || strlen($data)<2)
        $errors[$key]=$message;
}

function confirm_password(string $key,string $password1,string $password2,array &$errors,string $message="Les deux mot de passe ne correspondent pas"){
    if($password1!=$password2)
        $errors[$key]=$message; 
}

function valid_extension(string $key,string $data,array &$errors,string $message=" fichier invalide"){
    $extensions=["jpeg","png","svg","jpg"];
    if(!in_array($data,$extensions))
        $errors[$key]=$message;
}