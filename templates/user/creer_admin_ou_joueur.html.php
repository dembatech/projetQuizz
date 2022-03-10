<?php
    if(isset($_SESSION[KEY_ERRORS])){
        $tableauErrors=$_SESSION[KEY_ERRORS];
            // var_dump($_SESSION[KEY_ERRORS]);die;
        unset($_SESSION[KEY_ERRORS]);
    }
?>
<div class="containerFormRegistration">
    <form action="" method="POST" id="formRegister" enctype="multipart/form-data" >
        <input type="hidden" name="controller" value="securite">
        <input type="hidden" name="action" value="inscription">

        <?php if(is_admin ()): ?>
            <input type="hidden" name="role" value="ADMIN">
        <?php else: ?> 
            <input type="hidden" name="role" value="JOUEUR">
        <?php endif ?> 

        <section class="loginForm">
            <h3>s'inscrire</h3>
            <?php if(is_admin ()): ?>
                <p>S'inscrire pour proposer des Quizz</p>
            <?php else: ?> 
                <p>Pour tester votre culture generale</p>
            <?php endif ?>      
        </section>

        <div id="prenom">
            <small>
                <?php
                    if (isset($tableauErrors["error_prenom"]))
                        echo $tableauErrors["error_prenom"];
                ?>
            </small>
            <label for="p">Prenom</label>
            <input type="text" name="prenom" id="p" value="<?php if(isset($_SESSION["prenom"])) echo $_SESSION["prenom"]; ?>" >
        </div>
        <div id="nom">
            <small>
                <?php
                    if (isset($tableauErrors["error_nom"]))
                        echo $tableauErrors["error_nom"];
                ?>
            </small>
            <label for="nom">Nom</label>
            <input type="text" name="nom" value="<?php if(isset($_SESSION["nom"])) echo $_SESSION["nom"]; ?>">
        </div>

        <div id="login">
            <small>
                <?php
                    if (isset($tableauErrors["error_login"]))
                        echo $tableauErrors["error_login"];
                ?>
            </small>
            <label for="login">Login</label> 
            <input type="text" name="login" value="<?php if(isset($_SESSION["login2"])) echo $_SESSION["login2"]; ?>">
        </div>

        <div id="password">
            <small>
                <?php
                    if (isset($tableauErrors["error_password"]))
                        echo $tableauErrors["error_password"];
                ?>
        </small>
            <label for="password">Mot de passe [au moins six charactéres, une lettre et un chiffre]</label>
            <input type="password" name="password">
        </div>

        <div id="password2">
            <small>
                <?php
                    if (isset($tableauErrors["error_password2"]))
                        echo $tableauErrors["error_password2"];
                ?>
        </small>
            <label for="password2">Veuillez confirmer le mot de passe</label>
            <input type="password" name="password2">
        </div>
        <small class="error_avatar"> 
                <?php
                    if (isset($tableauErrors["fichier_invalide"]))
                        echo $tableauErrors["fichier_invalide"];
                ?>
           </small>
        <div class="button">  
            <label for="avatar" ><h2><img src="" alt="avatar" id="output"></h2></label>
            <input type="file" name="avatar" id="avatar">
            <label for="avatar" class="avatar">Choisir une image</label>
        </div>
       
        <div class="button">
            <input type="submit" name="inscription" value="S'inscrire"> 
        </div>
    </form>
    <div class="the_avatar">
        <label for="avatar" > <img src="img/photo_2022-03-03_15-50-10.png" alt="avatar"></label>
    </div>
</div>