<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Accueil</title>
		<style>
			img {
				max-width: 300px;
			}
		</style>
	</head>
	<body>
		<?php include "menu.php" ?>
		<h1>NETFLIXX</h1>
		<h2>Bienvenue sur notre plateforme </h2>

		<?php 
		include "connexion-bdd.php";

		$sql = "SELECT * FROM film ORDER BY id DESC LIMIT 5";

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				echo strtoupper($row["title"]) . "<br>"; // la méthode strtoupper() permet de mettre un texte en majuscule, on pouvait aussi écrire en majuscule directement dans la base de donnée
				echo "<img src='" . $row["urlphoto"] . "'><br>";
			}
		} else {
			echo " 0 résultat. Base de donnée vide";
		}
?>
	</body>
</html>