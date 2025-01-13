<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Inscription</title>
	</head>
	<body>
    <?php include "menu.php" ?>
		<h1>Inscription</h1>
		<form action="traitement-form-inscription.php" method="post">
			<label>Login</label><br>
			<input type="text" name="login"><br>
			<label>Mot de passe</label><br>
			<input type="password" name="mdp"><br>
			<input type="submit" value="Envoyer">
		</form>
	</body>
</html>