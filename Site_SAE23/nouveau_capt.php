<?php 
	session_start(); 
	if ($_SESSION["auth"]!=TRUE)
		header("Location:login_error.php");
?>
<!--Allows you to enter the information of the new sensor to be added-->
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>D&eacute;finition d'un nouveau Capteur</title>
		<link rel="stylesheet" type="text/css" href="./styles/style.css" />
	</head>

	<body>
		<?php
			include("entete.html");
			$type=$_POST['type'];
		?>
		<section> 
			<br />
			<form action="ajout_capt.php" method="post" enctype="multipart/form-data">
				<fieldset>
					<legend>Information sur le Capteur</legend>
					<br />
					<label for="id">  ID du Capteur</label>
					<input type="text" name="CAPT_ID" id ="id" />
					<br />
					<label for="nomcapt">  Nom du Capteur</label>
					<input type="text" name="CAPT_NOM" id ="nomcapt" />
					<br />
					<label for="typecapt">  Type de capteur : </label>
					<input type="text" name="CAPT_TYPE" id ="typecapt" />
					<br />
					<label for="nombat">  Batiment associé : </label>
					<input type="text" name="BAT_NOM" id ="nombat" />
				</fieldset>
				<div class="valid">
					<input type="submit" value="Enregistrez" />
				</div>
			</form>
		</section>
	</body>
</html>
