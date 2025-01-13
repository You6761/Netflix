<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Liste film</title>
		<style>
			img {
				max-width: 300px;
			}
		</style>
	</head>
	<body>
		<?php include "menu.php" ?>
		<h1>Liste des films</h1>
		<?php 
		include "connexion-bdd.php";

		$sql = "SELECT * FROM film";

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				echo $row["title"] . "<br>";
				echo "<img src='" . $row["urlphoto"] . "'><br>";
                echo "<a href='details.php?id=" . $row["id"] . "'>Consulter ce film</a><br>";
                echo "<hr>";
			}
		} else {
			echo "Aucun film dans la base de donnée";
		}
?>
	</body>
</html>