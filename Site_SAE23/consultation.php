<!DOCTYPE html>
<html lang="fr">
 <head>
  <link rel="stylesheet" type="text/css" href="./styles/style.css" />
  <title> Consultation </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- Pour bien gérer le RWD -->
  <meta name="author" content="JG" />
  <meta name="description" content="SAÉ 23" />
  <meta name="keywords" content="HTML, CSS" />
  <meta HTTP-EQUIV="Refresh" CONTENT="30; URL=http://192.168.125.19/Site_SAE23/consultation.php"> 
 </head>

 <body>
 
  <header>
   <h1>  Consultation des mesures </h1>
    <hr>
   </header>
<!--Measures consultation page for all the public visiting the site -->
	<?php
	include ("SAE23.php");
	$requete = " SELECT * FROM MESURE WHERE CAPT_NOM = 'CE208' ORDER BY MES_DATE DESC LIMIT 1";
		$resultat = mysqli_query($id_bd, $requete)
			or die ("Execution de la requete impossible : $requete");
					while($ligne=mysqli_fetch_assoc($resultat))
				 {
					extract($ligne);
					$CE208= "$MES_VAL";
					}
	$requete = " SELECT * FROM MESURE WHERE CAPT_NOM = 'TE208' ORDER BY MES_DATE DESC LIMIT 1";
	$resultat = mysqli_query($id_bd, $requete)
			or die ("Execution de la requete impossible : $requete");
					while($ligne=mysqli_fetch_assoc($resultat))
				 {
					extract($ligne);
					$TE208= "$MES_VAL";
					}
	$requete = " SELECT * FROM MESURE WHERE CAPT_NOM = 'TE104' ORDER BY MES_DATE DESC LIMIT 1";
	$resultat = mysqli_query($id_bd, $requete)
			or die ("Execution de la requete impossible : $requete");
					while($ligne=mysqli_fetch_assoc($resultat))
				 {
					extract($ligne);
					$TE104= "$MES_VAL";
					}
	$requete = " SELECT * FROM MESURE WHERE CAPT_NOM = 'CE104' ORDER BY MES_DATE DESC LIMIT 1";
	$resultat = mysqli_query($id_bd, $requete)
			or die ("Execution de la requete impossible : $requete");
					while($ligne=mysqli_fetch_assoc($resultat))
				 {
					extract($ligne);
					$CE104= "$MES_VAL";
					}
	$requete = " SELECT * FROM MESURE WHERE CAPT_NOM = 'CB103' ORDER BY MES_DATE DESC LIMIT 1";
		$resultat = mysqli_query($id_bd, $requete)
			or die ("Execution de la requete impossible : $requete");
					while($ligne=mysqli_fetch_assoc($resultat))
				 {
					extract($ligne);
					$CB103= "$MES_VAL";
					}
	$requete = " SELECT * FROM MESURE WHERE CAPT_NOM = 'TB103' ORDER BY MES_DATE DESC LIMIT 1";
	$resultat = mysqli_query($id_bd, $requete)
			or die ("Execution de la requete impossible : $requete");
					while($ligne=mysqli_fetch_assoc($resultat))
				 {
					extract($ligne);
					$TB103= "$MES_VAL";
					}
	$requete = " SELECT * FROM MESURE WHERE CAPT_NOM = 'TB204' ORDER BY MES_DATE DESC LIMIT 1";
	$resultat = mysqli_query($id_bd, $requete)
			or die ("Execution de la requete impossible : $requete");
					while($ligne=mysqli_fetch_assoc($resultat))
				 {
					extract($ligne);
					$TB204= "$MES_VAL";
					}
	$requete = " SELECT * FROM MESURE WHERE CAPT_NOM = 'CB204' ORDER BY MES_DATE DESC LIMIT 1";
	$resultat = mysqli_query($id_bd, $requete)
			or die ("Execution de la requete impossible : $requete");
					while($ligne=mysqli_fetch_assoc($resultat))
				 {
					extract($ligne);
					$CB204= "$MES_VAL";
					}
	mysqli_close($id_bd);
//data lookup table
echo "
	<table class=\"consult\">
  <tr> 
    <td COLSPAN=\"4\">BAT RT</td>
  </tr>
  <tr> 
    <td COLSPAN=\"2\">Salle E208</td>
    <td COLSPAN=\"2\">Salle E104</td>
  </tr>
  <tr> 
    <td>Temp&eacute;rature</td>
    <td>CO2</td>
    <td>Temp&eacute;rature</td>
    <td>CO2</td>
  </tr>
  <tr> 
    <td>$TE208 °C</td>
    <td>$CE208 ppm</td>
    <td>$TE104 °C</td>
    <td>$CE104 ppm</td>
  </tr>
</table>

<table class=\"consult\">
  <tr> 
    <td COLSPAN=\"4\">BAT INFO</td>
  </tr>
  <tr> 
    <td COLSPAN=\"2\">Salle B103</td>
    <td COLSPAN=\"2\">Salle B204</td>
  </tr>
  <tr> 
    <td>Temp&eacute;rature</td>
    <td>CO2</td>
    <td>Temp&eacute;rature</td>
    <td>CO2</td>
  </tr>
  <tr> 
    <td>$TB103 °C</td>
    <td>$CB103 ppm</td>
    <td>$TB204 °C</td>
    <td>$CB204 ppm</td>
  </tr>
</table>
		"
?>
  
		<footer>
			<p><a href="index.html">Retour à l'accueil</a></p>
		</footer>
  </body>
    
</html>
