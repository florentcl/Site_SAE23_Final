<?php 
	session_start(); 
	if ($_SESSION["auth"]!=TRUE)
		header("Location:login_error.php");
?>

<!DOCTYPE html>
<!--
Program: ajout_capt.php
Description: Insert in the CAPTEUR table the new sensor
-->
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Ajout du nouveau batiment</title>
		<link rel="stylesheet" type="text/css" href="./styles/style.css" />
	</head>
<!-- add the values ​​entered in the table CAPTEUR -->
	<body>
		<section>
			<?php
				include("entete.html");
				/* Accès à la base */
				include ("SAE23.php");

				$CAPT_ID = $_POST['CAPT_ID'];
				$CAPT_NOM = $_POST['CAPT_NOM'];
				$CAPT_TYPE = $_POST['CAPT_TYPE']; 
                $BAT_NOM = $_POST['BAT_NOM']; 	
				$requete = "INSERT INTO `CAPTEUR`(`CAPT_ID`, `CAPT_NOM`, `CAPT_TYPE`, `BAT_NOM`) 
				VALUES('$CAPT_ID','$CAPT_NOM','$CAPT_TYPE','$BAT_NOM')";
				$resultat = mysqli_query($id_bd, $requete)
					or die("Execution de la requete impossible : $requete");
				mysqli_close($id_bd);

				echo '<div class="ajout">';
				echo "<br /><strong>Le capteur suivant a ete ajouté à la BD : </strong><br />";
				echo "<ul>
						<li> ID du Capteur : $CAPT_ID</li>
						<li> Nom du Capteur : $CAPT_NOM </li>
						<li> Type du Capteur : $CAPT_TYPE</li>
                        <li> Nom du Batiment associé : $BAT_NOM</li>
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

 
