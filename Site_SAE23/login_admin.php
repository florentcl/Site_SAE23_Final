<?php
	// Session start
	session_start();
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Administration</title>
		<link rel="stylesheet" type="text/css" href="./styles/style.css" />
	</head>

	<body>
		<header>
   			<h1>Administration</h1>
		   </header>
		<section>
			<p>
				<br />
				<em><strong>Administration de la base : Acc&egrave;s limit&eacute; aux personnes autoris&eacute;es</strong></em>
				<br />
			</p>
			<form action="log_admin.php" method="post" enctype="multipart/form-data">
				<fieldset>
					<legend>Saisissez le login !!</legend>
					<label for="log">Login : </label>
					<input type="text" name="log" id="log" />
					<legend>Saisissez le mot de passe !!</legend>
					<label for="mdp">Mot de passe : </label>
					<input type="password" name="mdp" id="mdp" />
				</fieldset>
				<p>
					<input type="submit" value="Valider" />
				</p>
			</form>
			<hr />
		</section>
		<footer>
			<p><a href="index.html">Retour à l'accueil</a></p>
		</footer>
	</body>
</html>

