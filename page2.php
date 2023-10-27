<?php
session_start();

if (!isset($_SESSION['nom']) || !isset($_SESSION['prenom'])) {
    // Redirigez l'utilisateur vers la page de connexion si les informations d'authentification ne sont pas présentes
    header('Location: connexion.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>
<body>
    <h1>Welcome to the new page, <?php echo $_SESSION['prenom']; ?>!</h1>
    <a href="deconnexion.php">Déconnexion</a>
</body>
</html>
