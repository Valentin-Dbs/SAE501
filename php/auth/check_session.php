<?php
session_start();

if (!isset($_SESSION['nom']) || !isset($_SESSION['prenom'])) {
    // Redirigez l'utilisateur vers la page de connexion si les informations d'authentification ne sont pas présentes
    header('Location: connexion.html');
    exit;
}
?>
