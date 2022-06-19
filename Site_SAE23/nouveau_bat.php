<?php 
	session_start(); 
	if ($_SESSION["auth"]!=TRUE)
		header("Location:login_error.php");
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>D&eacute;finition d'un nouveau Bâtiment</title>
		<link rel="stylesheet" type="text/css" href="./styles/style.css" />
	</head>

	<body>
		<?php
			include("entete.html");
			$type=$_POST['type'];
		?>
		<section> 
			<br />
			<form action="ajout_bat.php" method="post" enctype="multipart/form-data">
				<fieldset>
					<legend>Information sur le Batiment</legend>
					<br />
					<label for="id">  ID du Batiment a ajouter</label>
					<input type="text" name="BAT_ID" id ="id" />
					<br />
					<label for="nom">  Nom du Batiment a ajouter</label>
					<input type="text" name="BAT_NOM" id ="nom" />
					<br />
					<label for="nomgest">  Nom du gestionnaire : </label>
					<input type="text" name="GEST_NOM" id ="nomgest" />
				</fieldset>
				<div class="valid">
					<input type="submit" value="Enregistrez" />
				</div>
			</form>
		</section>
	</body>
</html>
