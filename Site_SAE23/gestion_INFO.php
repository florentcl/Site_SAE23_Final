<!DOCTYPE html>
<html lang="fr">
 <head>
 <link rel="stylesheet" type="text/css" href="./styles/style.css" />
  <title> Gestionnaire INFO </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" /> <
  <meta name="author" content="JG" />
  <meta name="description" content="SAÉ 23" />
  <meta name="keywords" content="HTML, CSS" />
 </head>

 <body>
 
  <header>
   <h1>  Consultation des mesures du bâtiment INFO </h1>
  
	<h1> Présentation des données </h1>


	<h2 class="centre"> Affichage des mesures des capteurs du bâtiment INFO </h2>


	<?php
		include ("SAE23.php");


			/* Selection of pieces according to interest */
				$request = "SELECT * FROM `MESURE` WHERE CAPT_NOM = 'TB103' ORDER BY MES_DATE DESC LIMIT 15";
				$result = mysqli_query($id_bd, $request)
					or die("Execution de la requete impossible : $request");
				echo '<table>';
					echo "<th> Salle </th>";
					echo "<th> Date et Heure </th>";
					echo "<th> Valeurs (°C)</th>";
				/* Display of the list of the TB103 sensor with the data  */
				while($ligne=mysqli_fetch_assoc($result))
				 {	
					extract($ligne);
					echo '<tr>';
					echo 	"<td> $CAPT_NOM </td>";
					echo 	"<td> $MES_DATE </td>";
					echo 	"<td> $MES_VAL </td>";
					echo '</tr>';
				 }
				echo '</table>';

				/* election of sensors according to interest */
				$request = "SELECT * FROM `MESURE` WHERE CAPT_NOM = 'CB103' ORDER BY MES_DATE DESC LIMIT 15";
				$result = mysqli_query($id_bd, $request)
					or die("Execution de la requete impossible : $request");
				echo '<table>';
					echo "<th> Salle </th>";
					echo "<th> Date et Heure </th>";
					echo "<th> Valeurs (PPM) </th>";
				/* Display of the list of the CB103 sensor with the data  */
				while($line=mysqli_fetch_assoc($result))
				 {	
					extract($line);
					echo '<tr>';
					echo 	"<td> $CAPT_NOM </td>";
					echo 	"<td> $MES_DATE </td>";
					echo 	"<td> $MES_VAL </td>";
					echo '</tr>';
				 }
				echo '</table>';

 			/* election of sensors according to interest */
				$request = "SELECT * FROM `MESURE` WHERE CAPT_NOM = 'TB204' ORDER BY MES_DATE DESC LIMIT 15";
				$result = mysqli_query($id_bd, $request)
					or die("Execution de la requete impossible : $request");
				echo '<table>';
					echo "<th> Salle </th>";
					echo "<th> Date et Heure </th>";
					echo "<th> Valeurs (°C)</th>";
				/* Display of the list of the TB204 sensor with the data  */
				while($ligne=mysqli_fetch_assoc($result))
				 {	
					extract($ligne);
					echo '<tr>';
					echo 	"<td> $CAPT_NOM </td>";
					echo 	"<td> $MES_DATE </td>";
					echo 	"<td> $MES_VAL </td>";
					echo '</tr>';
				 }
				echo '</table>';
 
				/* election of sensors according to interest */
				$request = "SELECT * FROM `MESURE` WHERE CAPT_NOM = 'CB204' ORDER BY MES_DATE DESC LIMIT 15";
				$result = mysqli_query($id_bd, $request)
					or die("Execution de la requete impossible : $request");
				echo '<table class="fin">';
					echo "<th> Salle </th>";
					echo "<th> Date et Heure </th>";
					echo "<th> Valeurs (PPM)</th>";
				/* Display of the list of the CB204 sensor with the data  */
				while($line=mysqli_fetch_assoc($result))
				 {	
					extract($line);
					echo '<tr>';
					echo 	"<td> $CAPT_NOM </td>";
					echo 	"<td> $MES_DATE </td>";
					echo 	"<td> $MES_VAL </td>";
					echo '</tr>';
				 }
				echo '</table>';
	mysqli_close($id_bd);
		?>
  
		<footer>
			<p><a href="login_gest.php">Retour à l'identification</a></p>
			<p><a href="index.html">Retour à l'accueil</a></p>
		</footer>
  </body>
    
</html>

