<?php
// Démarrer la session
session_start();
// Vérification de la connexion
/*$isConnected = isset($_SESSION['user']);
?>
<nav class="navbar">
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="films.php">Consulter tous les films</a></li>
        <?php if ($isConnected): ?>
            <li><a href="admin.php">Espace Admin</a></li>
            <li><a href="logout.php">Se déconnecter</a></li>
        <?php else: ?>
            <li><a href="signup.php">Inscription</a></li>
            <li><a href="login.php">Connexion</a></li>
        <?php endif; ?>
    </ul>
</nav>
<style>
.navbar {
    background-color: #343a40;
    padding: 10px 20px;
}
.navbar ul {
    list-style: none;
    display: flex;
    justify-content: space-around;
    margin: 0;
    padding: 0;
}
.navbar a {
    text-decoration: none;
    color: white;
    font-weight: bold;
}
.navbar a:hover {
    text-decoration: underline;
}
</style>
*/