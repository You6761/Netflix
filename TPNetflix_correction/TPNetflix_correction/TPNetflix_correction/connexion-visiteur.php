<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Connexion</title>
	</head>
	<body>
    <?php include "menu.php" ?>
		<h1>Connexion</h1>

		<form method="post" action="">
			<label>Login</label><br>
			<input type="text" name="login"><br>
			<label>Mot de passe</label><br>
			<input type="password" name="mdp"><br>
			<input type="submit" value="Envoyer">
		</form><br>
		<?php
		include 'connexion-bdd.php';

		if ( isset($_POST['login']) && isset($_POST['mdp']) ) {

			$login = $_POST['login'];
			$mdp = $_POST['mdp'];

			$sql = "SELECT * FROM user WHERE login = '$login' AND password = '$mdp' ";

			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				$_SESSION["user"] = $login;
				header("Location: admin.php");
			} else {
				echo "Echec de le connexion - Login ou mot de passe incorrect";
			}
		}
		?>
	</body>
</html>