<?php
include 'connexion-bdd.php';

if ( isset($_POST['login']) && isset($_POST['mdp']) ) {

    $login = $_POST['login'];
    $mdp = $_POST['mdp'];

    $sql = "INSERT INTO user (login, password) VALUES ('$login', '$mdp')";
    //$sql = "INSERT INTO user (login, password) VALUES ('$_POST['login']', $_POST['mdp'])";

    if ($conn->query($sql) === TRUE) {
        header("Location: connexion-visiteur.php");
    } else {
        header("Location: inscription.php");
    }
} else {
    header("Location: inscription.php");
}
