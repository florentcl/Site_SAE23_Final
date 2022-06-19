<?php
/* SAE23 database connection script */

  $id_bd = mysqli_connect("localhost","root","passroot","SAE23")
    or die("Connexion au serveur et/ou à la base de données impossible");

  /* Character encoding management */
  mysqli_query($id_bd, "SET NAMES 'utf8'");

?>
