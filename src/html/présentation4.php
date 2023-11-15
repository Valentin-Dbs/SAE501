<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@400;700&display=swap">
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <title>Site Parcousup</title>

    <style>
        .ressourcesSae {
            display: flex;
            justify-content: space-around;
        }

        .element {
            width: 30%;
            position: relative;
        }

        .img {
            width: 50%;
            border-radius: 100%;
        }

        .texteCache {
            height: 100%;
            display: none;
            align-items: center;
            top: 0;
            left: 0;
            position: absolute;
            background-color: rgb(255, 255, 255, 0.5);
        }
    </style>
</head>

<body>

<!-- session -->

<?php include('../../php/auth/check_session.php'); ?>

<!-- session -->

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
            <a href="présentation5.php">
                <button id="goTo1" class="bouton_next">
                    Faire le quiz 1
                </button>
            </a>
        </div>

    </div>


<!-- js -->

<script src="../js/navigation.js"></script>

<!-- js -->


    <script>

        document.getElementById('ressources').addEventListener('mouseover', function () {
            document.getElementById('textRessources').style.display = 'flex';
        });

        document.getElementById('ressources').addEventListener('mouseout', function () {
            document.getElementById('textRessources').style.display = 'none';
        });

        document.getElementById('sae').addEventListener('mouseover', function () {
            document.getElementById('textSae').style.display = 'flex';
        });

        document.getElementById('sae').addEventListener('mouseout', function () {
            document.getElementById('textSae').style.display = 'none';
        });




        // var images = document.getElementsByClassName("element");
        // var t = ['textRessources', 'textSae']

        // console.log(images)

        // for (let i = 0; i < images.length; i++) {
        //     images[i].addEventListener('mouseover', showText(t[i]));
        //     images[i].addEventListener('mouseout', hideText(t[i]));
        // }



        // function showText(id) {
        //     document.getElementById(id).style.display = 'block';
        //     console.log("hello")
        // }

        // function hideText(id) {
        //     document.getElementById(id).style.display = 'none';
        //     console.log("bye")
        // }
    </script>

</body>

</html>