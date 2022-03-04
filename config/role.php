<?php

define("ROLE_JOUEUR","JOUEUR");
define("ROLE_ADMIN","ADMIN");
function is_connect():bool{
    return isset($_SESSION[KEY_USER_CONNECT]);
}
function is_joueur():bool{
    return is_connect() && $_SESSION[KEY_USER_CONNECT]['role']==ROLE_JOUEUR;
}
function is_admin():bool{
    return is_connect() && $_SESSION[KEY_USER_CONNECT]['role']==ROLE_ADMIN;
}