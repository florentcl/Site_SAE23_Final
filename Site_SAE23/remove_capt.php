<?php 
	session_start(); 
	if ($_SESSION["auth"]!=TRUE)
		header("Location:login_error.php");
?>
<!--Allows you to enter the information of the Sensor to be deleted-->
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Suppression d'un Capteur</title>
		<link rel="stylesheet" type="text/css" href="./styles/style.css" />
	</head>

	<body>
		<?php
			include("entete.html");
			$type=$_POST['type'];
		?>
		<section> 
			<br />
			<form action="supp_capt.php" method="post" enctype="multipart/form-data">
				<fieldset>
					<legend>Information sur le Capteur</legend>
					<br />
					<label for="nom">  Nom du Capteur a supprimer</label>
					<input type="text" name="CAPT_NOM" id ="nom" />
					<br />
				</fieldset>
				<div class="valid">
					<input type="submit" value="Enregistrez" />
				</div>
			</form>
		</section>
	</body>
</html>
