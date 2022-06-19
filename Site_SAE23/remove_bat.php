<?php 
	session_start(); 
	if ($_SESSION["auth"]!=TRUE)
		header("Location:login_error.php");
?>
<!--Allows you to enter the information of the Building to be deleted-->
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Suppression d'un Bâtiment</title>
		<link rel="stylesheet" type="text/css" href="./styles/style.css" />
	</head>

	<body>
		<?php
			include("entete.html");
			$type=$_POST['type'];
		?>
		<section> 
			<br />
			<form action="supp_bat.php" method="post" enctype="multipart/form-data">
				<fieldset>
					<legend>Information sur le Batiment</legend>
					<br />
					<label for="nom">  Nom du Batiment a supprimer</label>
					<input type="text" name="BAT_NOM" id ="nom" />
					<br />
				</fieldset>
				<div class="valid">
					<input type="submit" value="Enregistrez" />
				</div>
			</form>
		</section>
	</body>
</html>
