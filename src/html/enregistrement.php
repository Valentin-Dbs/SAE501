<!-- session -->

<?php include('../../php/auth/check_session.php'); ?>

<!-- session -->

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
                Qui est là ?
            </h3>
            <p>
                Nous savons que vous êtes curieux de découvir cette formation, mais nous aussi nous sommes curieux de
                savoir qui prendra le temps d'en savoir plus.
            </p>
            <p>
                C'est pour cela que nous aimerions connaître votre nom, votre prénom et, si vous l'avez, votre numéro Parcoursup.
            </p>
        </div>
        <form action="../../php/auth/inscription.php" method="post">
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


            <!-- Champ Numéro Parcoursup -->
            <div class="form-group">

                <label for="numero_etudiant">Numéro ParcourSup :</label>
                <input type="text" class="form-control" id="numero_etudiant" name="numero_etudiant">
            </div>

            <!-- Champ Numéro Parcoursup -->
            <div class="form-group">

                <label for="email">Email :</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>

            <div style="font-style: italic; font-size: 12px;">* Champ obligatoire</div>

            <!-- Bouton de soumission -->
            <button type="submit" class="btn-connexion">Rentrer les informations</button>
        </form>
    </div>
</body>

</html>