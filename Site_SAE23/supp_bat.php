<?php 
	session_start(); 
	if ($_SESSION["auth"]!=TRUE)
		header("Location:login_error.php");
?>

<!DOCTYPE html>
<!--
Program: supp_bat.php
Description: Deletes a building from the BATIMENT table
-->
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Suppression d'un batiment</title>
		<link rel="stylesheet" type="text/css" href="./styles/style.css" />
	</head>

	<body>
		<section>
			<?php
				include("entete.html");
				/* database access */
				include ("SAE23.php");
				$BAT_NOM = $_POST['BAT_NOM'];	
				$requete = "DELETE FROM `BATIMENT` WHERE `BAT_NOM` = '$BAT_NOM'"; 
				$resultat = mysqli_query($id_bd, $requete)
					or die("Execution de la requete impossible : $requete");
				mysqli_close($id_bd);

				echo '<div class="ajout">';
				echo "<br /><strong>Le batiment suivant a ete supprimé de la BD : </strong><br />";
				echo "<ul>
						<li> Nom du Batiment : $BAT_NOM </li>
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

 
