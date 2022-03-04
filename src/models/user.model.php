<?php
function find_user_login_password(string $login,string $password):array{
    $users=find_data("users");
    foreach ($users as $user) {
        if( $user['login']==$login && $user['password']==$password)
            return $user;
    }
    return [];
}
// fontion pour recuperer des joueurs ou admins

function find_players(string $role):array{
    $users=find_data("users");
    $tab_players=[];
    foreach($users as $u){
        if($u['role']==$role){
            $tab_players[]=$u;
        }
    }
    return $tab_players;

}