<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Détails</title>
		<style>
			img {
				max-width: 300px;
			}
		</style>
	</head>
	<body>
		<?php 
        include "menu.php";
		include "connexion-bdd.php";

        $id_film = $_GET['id'];
		$sql = "SELECT * FROM film WHERE id = '$id_film'";

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				echo "<h1>" . $row["title"] . "</h1><br>";
                echo "<p>" . $row["description"] . "</p><br>";
				echo "<img src='" . $row["urlphoto"] . "'><br>";
                echo $row["urlvideo"];
			}
		} else {
			echo "Aucune donnée sur ce film";
		}
?>
	</body>
</html>