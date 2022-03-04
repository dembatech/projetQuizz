<?php
if(isset($_REQUEST['controller']) ){
    switch ($_REQUEST['controller']) {
        case "securite" :
            require_once(PATH_SRC."controllers/securite.controllers.php");
        break;
        case "user" :
            require_once(PATH_SRC."controllers/user.controllers.php");
        break;
        default:
            echo"error 404";
        break;
    }
}else{
    require_once(PATH_SRC."controllers/securite.controllers.php");
}