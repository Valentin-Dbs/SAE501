<?php

// Démarrage de la session
session_start();

// Destruction de toutes les variables de session
session_unset();

// Destruction de la session
session_destroy();

// Redirection de l'utilisateur vers la page de connexion
header('Location: ../../');
exit;

?>
