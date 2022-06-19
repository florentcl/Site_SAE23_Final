<?php 
	session_start(); 
	if ($_SESSION["auth"]!=TRUE)
		header("Location:login_error.php");
?>

<!DOCTYPE html>
<!--
Program: ajout_bat.php
Description: Insert in the BATIMENT table the new building
-->
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Ajout du nouveau batiment</title>
		<link rel="stylesheet" type="text/css" href="./styles/style.css" />
	</head>

	<body>

<!-- Allows you to add the chosen values ​​to the corresponding table -->
		<section>
			<?php
				include("entete.html");
				/* Accès à la base */
				include ("SAE23.php");

				$BAT_ID = $_POST['BAT_ID'];
				$BAT_NOM = $_POST['BAT_NOM'];
				$GEST_NOM = $_POST['GEST_NOM']; 	
				$requete = "INSERT INTO `BATIMENT` (`BAT_ID`, `BAT_NOM`, `GEST_NOM`)
				VALUES('$BAT_ID','$BAT_NOM','$GEST_NOM')";
				$resultat = mysqli_query($id_bd, $requete)
					or die("Execution de la requete impossible : $requete");
				mysqli_close($id_bd);

				echo '<div class="ajout">';
				echo "<br /><strong>Le batiment suivant a ete ajouté à la BD : </strong><br />";
				echo "<ul>
						<li> ID du Batiment : $BAT_ID</li>
						<li> Nom du Batiment : $BAT_NOM </li>
						<li> Nom du gestionnaire : $GEST_NOM</li>
					  </ul>
					</div>";
			?>
			<hr />
		</section>
		<footer>
			<p><a href="index.html">Retour à l'accueil</a></p>
		</footer>
	</body>
</html>

 
