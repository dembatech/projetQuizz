<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href='<?php echo WEB_ROOT."css".DIRECTORY_SEPARATOR."style3.css"?>'>
<title>QUIZZ APP</title>
</head>
<body>
    <header>
       <a href="#">
          <img src="img/photo_2022-03-03_15-50-10.png" alt="">
       </a>
        <h1>Le plaisir de jouer</h1>
    </header>   
          
    <section class="container">
          <?php 
            echo $content_for_views;
          ?>
        </section>
    </body>
</html>