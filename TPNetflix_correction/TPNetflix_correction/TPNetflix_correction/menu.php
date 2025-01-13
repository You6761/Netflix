<nav>
	<a href="accueil.php">Accueil </a> 
	<a href="liste-films.php"> Consulter tous les films  </a>
	<?php 
	if (isset($_SESSION['user'])) {
		echo "<a href='admin.php'> Espace admin  </a>";
		echo "<a href='deconnexion.php'> Se déconnecter</a>";
	} else {
		echo "<a href='connexion-visiteur.php'> Connexion  </a>";
		echo "<a href='inscription.php'> Inscription  </a>";
	}
	?>
</nav>