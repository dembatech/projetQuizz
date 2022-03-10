<?php
///Recuperation des donnees du fichier
function find_data(string $key):array{
    $dataJson=file_get_contents(PATH_DB);
    $data=json_decode($dataJson,true);
    return $data[$key];
}
//Enregistrement et Mise a jour des donnees du fichier
function save_data(string $key,array $array):array{
    return [];
}
