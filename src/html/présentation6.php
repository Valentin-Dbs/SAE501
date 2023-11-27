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
        .sections {
            width: 100%;
            height: 300px;
            position: relative;
            display: flex;
            align-items: center;
        }

        .imgSection {
            width: 100%;
            height: 100%;
        }

        .txtSection {
            position: absolute;
            background-color: rgb(255, 255, 255, 0.7);
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        #hiddenL {
            height: 100%;
            width: 70%;
            opacity: 0;
            transform: translateX(100%);
            transition: opacity 0.5s, transform 0.4s;
        }

        #hiddenD {
            right: 0;
            height: 100%;
            width: 70%;
            opacity: 0;
            transform: translateX(-100%);
            transition: opacity 0.5s, transform 0.4s;
        }

        #visibleL {
            height: 100%;
            width: 70%;
            opacity: 1;
            transform: translateX(0);
            transition: opacity 0.5s, transform 0.5s;
        }

        #visibleD {
            right: 0;
            height: 100%;
            width: 70%;
            opacity: 1;
            transform: translateX(0);
            transition: opacity 0.5s, transform 0.5s;
        }
    </style>
</head>

<body>

    <!-- session -->

    <?php include('../../php/auth/check_session.php'); ?>

    <!-- session -->

    <div class="div-centre">
        <div style="width: 100%">
            <div class="textInfo">
                <h1>Et l'IUT de Béziers c'est quoi ?</h1>

                <div class="sections" id="0">
                    <div class="txtSection" id="hiddenL">
                        <h3>Le Festival du Fantastique de Béziers</h3>
                        <p>
                            Le Festival du Fantastique de Béziers est un événement annuel captivant qui transporte
                            les
                            visiteurs dans un monde de mystère et d'imagination. Entre projections de films cultes,
                            expositions artistiques et rencontres avec des réalisateurs renommés, c'est une
                            célébration
                            incontournable pour les amateurs de l'étrange et du surnaturel.
                        </p>

                    </div>
                    <img src="..\img\couleur.png" alt="couleur" class="imgSection">
                </div>

                <div class="sections" id="1">
                    <div class="txtSection" id="hidden">
                        <h3>Marathon et Hackathon</h3>
                        <p>
                            Le Hackathon et le Marathon MMI à l'IUT de Béziers sont des événements annuels passionnants
                            qui réunissent des esprits créatifs et technologiques. Lors du Hackathon, les participants
                            rivalisent pour développer des solutions innovantes en un temps record, tandis que le
                            Marathon MMI est une compétition mettant en avant les compétences en multimédia et en
                            communication. Pour ces deux événements les étudiants doivent répondre aux exigences
                            d’entreprise en faisant preuve de collaboration et de technique.
                        </p>

                    </div>
                    <img src="..\img\couleur.png" alt="couleur" class="imgSection">
                </div>

                <div class="sections" id="2">
                    <div class="txtSection" id="hidden">
                        <h3>club de Jeu de Société (A ton Tour)</h3>
                        <p>
                            A ton Tour est un club de jeu de société ouvert à tous les étudiants de l’IUT de Béziers.
                            Jeu de cartes, hasard, stratégie ou escape game, face à face ou en collaboration, si vous
                            aimez jouer, vous y trouverez certainement votre bonheur.
                        </p>

                    </div>
                    <img src="..\img\couleur.png" alt="couleur" class="imgSection">
                </div>

                <div class="sections" id="3">
                    <div class="txtSection" id="hidden">
                        <h3></h3>
                        <p>

                        </p>

                    </div>
                    <img src="..\img\couleur.png" alt="couleur" class="imgSection">
                </div>

                <div class="sections" id="4">
                    <div class="txtSection" id="hidden">
                        <h3></h3>
                        <p>

                        </p>

                    </div>
                    <img src="..\img\couleur.png" alt="couleur" class="imgSection">
                </div>

                <div class="sections" id="5">
                    <div class="txtSection" id="hidden">
                        <h3></h3>
                        <p>

                        </p>

                    </div>
                    <img src="..\img\couleur.png" alt="couleur" class="imgSection">
                </div>

                <div class="sections" id="6">
                    <div class="txtSection" id="hidden">
                        <h3></h3>
                        <p>

                        </p>

                    </div>
                    <img src="..\img\couleur.png" alt="couleur" class="imgSection">
                </div>

                <div class="sections" id="7">
                    <div class="txtSection" id="hidden">
                        <h3></h3>
                        <p>

                        </p>

                    </div>
                    <img src="..\img\couleur.png" alt="couleur" class="imgSection">
                </div>
            </div>
            <br>
            <a href="index"><button id="goTo1" class="bouton_next">
                    Suite...
                </button></a>
        </div>

    </div>

    <!-- js -->

    <script src="../js/navigation.js"></script>

    <!-- js -->

    <script>
        var allSections = document.querySelectorAll(".sections");
        var allTxts = document.querySelectorAll(".txtSection");

        for (let i = 0; i < allSections.length; i++) {
            var section = allSections[i];
            var txt = allTxts[i];

            section.addEventListener('mouseover', showTxt(txt, section.id));
            section.addEventListener('mouseout', hideTxt(txt, section.id));
        }

        function showTxt(txt, id) {
            return function () {
                txt.id = id % 2 == 0 ? "visibleL" : "visibleD";
            };
        }

        function hideTxt(txt, id) {
            return function () {
                txt.id = id % 2 == 0 ? "hiddenL" : "hiddenD";
            };
        }

    </script>
</body>

</html>