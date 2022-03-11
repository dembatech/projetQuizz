<?php
///Recuperation des donnees du fichier
function find_data(string $key):array{
    $dataJson=file_get_contents(PATH_DB);
    $data=json_decode($dataJson,true);
    return $data[$key];
}
//Enregistrement et Mise a jour des donnees du fichier
function save_data(string $key,array $array):bool{
    //1: recupération de toutes les donnés du fichier JSON
    $donnees_json=file_get_contents(PATH_DB);
    //2: Decodage de toutes les donnes du fichier JSON
    $donnees_json_decode=json_decode($donnees_json,true);
    //3: On ajoute le nouvel enregistrement a la cle correspondante, soit dans users soit dans questions
    array_push($donnees_json_decode[$key],$array);
    //4: On encode les données
    $donnees_encodees=json_encode($donnees_json_decode);
    //5:tranfert des données dans le fichier JSON
    if(file_put_contents(PATH_DB,$donnees_encodees)){
        return true;    
    }else{
        return false;
    }
   


    return [];
}
