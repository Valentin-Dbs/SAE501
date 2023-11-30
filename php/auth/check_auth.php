<?php 

// Vérification si l'utilisateur est authentifié
if (!isset($_SESSION['nom']) || !isset($_SESSION['prenom'])) {
    header('Location: connexion.html');
    exit;
}

?>