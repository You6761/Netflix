<?php
session_start();

if (!isset($_SESSION['user']) OR empty($_SESSION['user'])) {
	header("Location: accueil.php");
}
?>
<!DOCTYPE html>
<html>

<head>
<title>Espace Admin</title>
</head>

<body>
	<?php include "menu.php" ?>
	<h1>Espace Admin</h1>
	<h2>Ajouter un film </h2>

	<form method="post" action="" enctype="multipart/form-data">

		<label>Titre</label><br>
		<input type="text" name="titre-film"><br>

		<label>Description</label><br>
		<textarea name="description-film"></textarea><br>

		<label>Image</label><br>
		<input type="file" name="mon_fichier_photo"><br>

		<label>Video</label><br>
		<input type="text" name="video-film"><br>

		<input type="submit" value="Envoyer">
	</form><br>

	<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		// Récupération du titre
		if (isset($_POST['titre-film']) && !empty($_POST['titre-film'])) {
			$title = $_POST['titre-film'];
		} else {
			echo "Erreur - Veuillez insérer un titre <br>";
		}

		// Récupération de la description
		if ( isset($_POST['description-film']) && !empty($_POST['description-film'])) {
			$description = $_POST['description-film'];
		} else {
			echo "Erreur - Veuillez insérer une description <br>";
		}

		// Récupération de l'image du film et sauvegarde de l'image

		if(isset($_FILES['mon_fichier_photo']) && $_FILES['mon_fichier_photo']['error'] == 0){

			//Verification de la taille du fichier
			if($_FILES['mon_fichier_photo']['size'] <= 2000000){

				//Verification de l'extension
				$infofile = pathinfo($_FILES['mon_fichier_photo']['name']);
				$extension = $infofile['extension'];
				$extension_allowed = array('jpg', 'jpeg', 'gif', 'png');

				if(in_array($extension, $extension_allowed)){
					$source = $_FILES['mon_fichier_photo']['tmp_name'];
					$destination = $_FILES['mon_fichier_photo']['name'];
					
					move_uploaded_file($source, $destination);
					$image = $destination;
				}
				else {
					echo "Extension de fichier non autorisée !";
				}					

			}
			else {
				echo "Le fichier est trop lourd (doit être < 1Mo)";
			}

		}
		else {
			echo "Erreur - Veuillez insérer une photo <br>";
		}

		// Récupération de la video du film (texte iframe à intégrer)

		if ( isset($_POST['video-film']) && !empty($_POST['video-film'])) {
			$video = $_POST['video-film'];
		} else {
			echo "Erreur - Veuillez insérer une vidéo <br>";
		}

		// Connexion à la base de donnée
		include "connexion-bdd.php";

		// Ajout en base de donnée
		if ( isset($title) && isset($description) && isset($image) && isset($video) ) {
			$sql = "INSERT INTO film (title, description, urlphoto, urlvideo) VALUES ('$title', '$description', '$image', '$video')";

			if ($conn->query($sql) === TRUE) {
				echo "Vidéo ajoutée !";
			} else {
				echo "Echec - La vidéo n'a pas pu être ajouté";
			}
		}
	}
	?>
</body>

</html>