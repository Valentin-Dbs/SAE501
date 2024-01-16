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
                    L’ IUT (Institut Universitaire de Technologie) est un établissement d'étude supérieur dans lequels
                    on peut faire un BUT. Les formations qui y sont proposées ont, malheureusement, un nombre de place
                    limité. Ce sont donc des formations selectives.
                </p>
                <p>
                    Ces formations y sont aussi plus professionnalisantes et comporte aussi plus de travaux pratiques.
                    On apprend tout en faisant, c’est ce qui rend l’IUT super intéressant !
                </p>
                <h3>Et un BUT alors ?</h3>

                <p>
                    Le BUT (Bachelor Universitaire de Technologie) est une formation qui se fait à l’IUT en 3 ans. Il a
                    été crée en 2021. Il vient prendre la relève du DUT, qui était une formation moins poussée qui se
                    faisait en 2 ans seulement.
                </p>
                <strong>
                    Bon ! Vous suivez toujours ? Allez on va attaquer la partie qui vous intéresse le plus : Le BUT MMI !
                </strong>
            </div>
            <br />
            <form action="../../php/navigation/update_progression.php" method="post">
                <input type="hidden" name="next_page" value="présentation2.php">
                <button type="submit" id="goTo1" class="bouton_next ourbtn"
                    style="padding: 10px 100px 10px 100px">Suite</button>
            </form>
        </div>

    </div>

    <!-- js -->

    <!-- js -->

</body>

</html>