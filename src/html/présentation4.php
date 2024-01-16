<!-- session -->

<?php include('../../php/auth/check_session.php'); ?>

<!-- session -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@400;700&display=swap">
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../css/presentation4_style.css">
    <link rel="stylesheet" type="text/css" href="../css/breadcrumb_style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <title>Site Parcousup</title>
</head>

<body>

    <div class="div-centre">
        <div>
            <div class="textInfo">
                <h1>Le fonctionnement de la formation</h1>
                <p>La formation est séparé en deux types de cours, qui s'alternent une semaine sur l'autre.</p>
                <div class="ressourcesSae">
                    <div class="element" id="ressources">
                        <img class="img" src="..\img\ressources.jpeg" alt="Etudiant lisant ses leçons">
                        <div class="texteCache" id="textRessources">
                            D'abord, il y a les semaines ressources où on a des cours magistraux, des travaux dirigés et
                            des travaux pratiques qui nous donnent des connaissances théoriques et pratiques.
                        </div>
                    </div>
                    <div class="element" id="sae">
                        <img class="img" src="..\img\sae.jpeg" alt="Groupe travaillant sur un projet">
                        <div class="texteCache" id="textSae">
                            Ensuite, place aux SAE, ces gros projets encadrés qui peuvent être très fun à réaliser.
                            Comme réaliser un court-métrage, créer un jeu vidéo ou même une application de réalité
                            virtuelle !
                        </div>

                    </div>

                </div>
                <p style="display: flex;justify-content: center; margin-bottom: 50px"><i>Survolez les images pour en apprendre plus</i></p>



                <p>
                    Pendant la première année et demie, tout le monde suit les mêmes cours :
                <ul>
                    <li>audiovisuel</li>
                    <li>communication</li>
                    <li>infographie</li>
                    <li>développement web</li>
                    <li>gestion de projet</li>
                    <li>droit</li>
                    <li>anglais</li>
                    <li>référencement</li>
                    <li>animation</li>
                </ul>
                </p>
                <p>
                    C'est au semestre 4 (au milieu de la deuxième année) qu'on choisit notre spécialisation : Création
                    numérique, Développement web ou Stratégie de communication.
                </p>
                <p>
                    Enfin en 2e et 3e année, on a un grand choix à faire : Stage ou alternance ?
                </p>

            </div>
            <br>
            <form action="../../php/navigation/update_progression.php" method="post">
                <input type="hidden" name="next_page" value="présentation5.php">
                <button type="submit" id="goTo1" class="bouton_next ourbtn" style="padding: 10px 100px 10px 100px">
                    Suite
                </button>
            </form>
        </div>

    </div>

    <!-- js -->

    <script src="../js/presentation4.js"></script>

    <!-- js -->

</body>

</html>