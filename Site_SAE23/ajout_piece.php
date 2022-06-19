<?php 
	session_start(); 
	if ($_SESSION["auth"]!=TRUE)
		header("Location:login_error.php");
?>

<!DOCTYPE html>
<!--
Programme: ajoutpiece.php
Description: Insert dans la table Piece la nouvelle pièce
-->
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Ajout du nouveau batiment</title>
		<link rel="stylesheet" type="text/css" href="./styles/smi.css" />
	</head>

	<body>
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
				echo "<br /><strong>L batiment suivant a ete ajouté à la BD : </strong><br />";
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
			<p><a href="choix_type.php">Ajoutez une autre pi&egrave;ce</a></p>
			<p><a href="catalogue.php">Retour au catalogue</a></p>
			<p><a href="index.html">Retour à l'accueil</a></p>
		</footer>
	</body>
</html>

 
