<!DOCTYPE html>
<html lang="fr">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Inscription</title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="connexion">
        <div>
            <h3 style="text-align: center;">
                Administrateur
            </h3>
        </div>
        <form action="../../php/auth/login_admin.php" method="post">
            <!-- Champ Nom -->
            <div class="form-group">
                <label for="nom">Nom* :</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>

            <!-- Champ Prénom -->
            <div class="form-group">
                <label for="prenom">Prénom* :</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>

            <div style="font-style: italic; font-size: 12px;">* Champ obligatoire</div>

            <!-- Bouton de soumission -->
            <button type="submit" class="btn-connexion ourbtn">Se connecter</button>
        </form>

        <?php if (isset($_GET['erreur'])): ?>
    <div class="alert alert-danger" role="alert">
        <?php echo htmlspecialchars($_GET['erreur']); ?>
    </div>
<?php endif; ?>

    </div>
</body>

</html>