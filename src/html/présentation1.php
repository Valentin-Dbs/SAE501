<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@400;700&display=swap" />
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <title>Site Parcousup</title>
</head>

<body>

<!-- session -->

<?php include('../../php/auth/check_session.php'); ?>

<!-- session -->

    <div class="div-centre">
        <div class="div-centre-contenu">
            <h1>Présentation du BUT</h1>
            <div class="textInfo">
                <h3>C’est quoi un IUT ?</h3>

                <p>
                    L’ IUT est un institut universitaire de technologie qui propose des
                    formations sélectives. Les formations y sont aussi plus axées sur les
                    travaux pratiques et plus professionnalisantes. On apprend tout en
                    créant, c’est ce qui rend l’IUT super intéressant. On peut tout à fait,
                    après un cursus à l’IUT, entrer dans une entreprise ou bien continuer
                    ses études selon ce que l’on veut faire.
                </p>
                <p>
                    Le BUT est une formation qui se fait à l’IUT en 3 ans, il signifie
                    bachelor universitaire de technologie.
                </p>
                <p>
                    Il existe plusieurs BUT mais celui qui nous intéresse ici c’est le BUT
                    MMI ! Le BUT MMI (Métiers du multimédia et de l’Informatique) est un
                    couteau suisse qui permet d’obtenir des compétences dans le domaine de
                    la Création Numérique, la Communication, le Développement Web et
                    l’Audiovisuel.
                </p>
                <p>Nous, nous sommes le BUT MMI de Béziers, c’est ici !</p>
            </div>
            <br />
            <form action="../../php/navigation/update_progression.php" method="post">
            <input type="hidden" name="next_page" value="présentation2.php">
            <button type="submit" id="goTo1" class="bouton_next" style="padding: 10px 100px 10px 100px">Suite</button>
        </form>
        </div>

    </div>

<!-- js -->

<!-- js -->

</body>

</html>