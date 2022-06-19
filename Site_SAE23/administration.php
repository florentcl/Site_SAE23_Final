<?php 
	session_start(); 
	if ($_SESSION["auth"]!=TRUE)
		header("Location:login_error.php");
?>

<!DOCTYPE html>
<html lang="fr">
 <head>
 <link rel="stylesheet" type="text/css" href="./styles/style.css" />
  <title> Administrateur </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- Pour bien gérer le RWD -->
  <meta name="author" content="JG" />
  <meta name="description" content="SAÉ 23" />
  <meta name="keywords" content="HTML, CSS" />
 </head>

 <body>
<!-- admin page --> 
  <header>
   <h1>  Administration </h1>
   </header> 
<!--clickable links to add or remove items from the database --> 
<section>
	<h2> Ajout/Suppression de bâtiment </h2>
	<a href="./nouveau_bat.php" class="bouton">Ajout</a>
	<a href="./remove_bat.php" class="bouton">Suppression</a>
</section>

<!--clickable links to add or remove items from the database --> 
<section>
	<h2> Ajout/Suppression de capteur </h2>
	<a href="./nouveau_capt.php" class="bouton">Ajout</a>
	<a href="./remove_capt.php" class="bouton">Suppression</a>
</section>


  <footer>
     <p><a href="index.html">Retour à l'accueil</a></p>
  </footer>
  </body>
    
</html>
