<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href='<?php echo WEB_ROOT."css".DIRECTORY_SEPARATOR."style2.css"?>'>
<title>QUIZZ APP</title>
</head>
<body>
    <header>
        <a href="<?php echo WEB_ROOT."?controller=user&action=liste.joueur" ;?>">
          <img src="img/photo_2022-03-03_15-50-10.png" alt="">
        </a>
        <h1>Le plaisir de jouer</h1>
    </header>

    <section class="container">
      <section class="head">
        <h1>Creer et parametrer vos quizz</h1> 
        <a href= <?php echo WEB_ROOT."?controller=securite&action=deconnexion";?>>deconnexion</a>
      </section>

      <section class="body">
        <section class="left">
          <section class="left_head">
            <img src="img/icones/ic-login.png" alt="">
            <p>Login:</p>
          </section>
          <section class="left_body">
            <div class="setting">
              <a href="#">
                <small>liste des questions</small>
                <img src="img/icones/ic-liste.png" alt="list">
              </a>
            </div>
            <div class="setting">
              <a href="<?php echo WEB_ROOT."?controller=user&action=creer_admin"  ;?>">
                <small>Creer un admin</small>
                <img src="img/icones/ic-ajout.png" alt="plus">
              </a>
            </div>
            <div class="setting">
              <a href="<?php echo WEB_ROOT."?controller=user&action=liste.joueur" ;?>">
                <small>liste des joueurs</small>
                <img src="img/icones/ic-liste.png" alt="list">
              </a>
            </div>
            <div class="setting">
              <a href="#">
                <small>creer une question</small>
                <img src="img/icones/ic-ajout.png" alt="plus">
              </a>
            </div>
          </section>
        </section>
        <section class="right">
          <?php 
            echo $content_for_views;   
          ?>
        </section>
      </section>
    </section>
</body>
</html>
