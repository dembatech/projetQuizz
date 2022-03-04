<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <!-- Premiere methode -->
  <?php if(is_admin()):?>
  <!-- <li><a href="#">liste des joueurs</a></li> -->
  <?php endif ?>
  <!-- Deuxieme methode -->
  <?php
      if(is_admin())
          echo '<li><a href="#">liste des joueurs</a></li>';
  ?>
  <li><a href= <?php echo WEB_ROOT."?controller=securite&action=deconnexion";?>>deconnexion</a></li>
</ul>
<?php 



unset ($_SESSION[KEY_USER_CONNECT]);

?>
</body>
</html>



<?php 
// if(isset( $_SESSION[KEY_USER_CONNECT])){
//     var_dump( $_SESSION[KEY_USER_CONNECT]);
// }
?>