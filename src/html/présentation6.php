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
    <link rel="stylesheet" type="text/css" href="../css/breadcrumb_style.css">
    <link rel="stylesheet" type="text/css" href="../css/presentation6_style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <title>Site Parcousup</title>
</head>

<body>

    <div class="div-centre">
        <div style="width: 100%">
            <div class="textInfo">
                <h1>Et l'IUT de Béziers c'est quoi ?</h1>

                <div class="sections" id="0">
                    <div class="txtSection" id="hiddenR">
                        <strong class="title">Le Festival du Fantastique de Béziers</strong>
                        <p>
                            Le Festival du Fantastique de Béziers est un événement annuel où de nombreux artistes
                            viennent présenter leurs travaux et participer à un concours de courts-métrages, nouvelles
                            et d’illustrations le tout autour d'un thème différents chaque année.
                        </p>

                    </div>
                    <img src="../img/ffb.png" alt="couleur" class="imgSection">
                </div>

                <div class="sections" id="1">
                    <div class="txtSection" id="hiddenR">
                        <strong class="title">Marathon</strong>
                        <p>
                            Pendant 1 semaine, tous les étudiants de la filiaire de MMI forment des équipes, toutes
                            années confondues, pour réaliser des projets pour différentes entreprises. <br>
                            Chaque équipe doit alors produire une infographie, une vidéo et un site web.
                        </p>

                    </div>
                    <img src="../img/marathon.png" alt="couleur" class="imgSection">
                </div>

                <div class="sections" id="2">
                    <div class="txtSection" id="hiddenR">
                        <strong class="title">Hackathon</strong>
                        <p>
                            Pendant 3 jours, les étudiants de toutes les filliaires de l'IUT de Béziers forment des
                            équipes pour résoudre, avec les connaissances de tout le monde, des problématiques lancées
                            par des entreprises comanditaires.
                        </p>
                    </div>
                    <img src="../img/hackathon.jpg" alt="couleur" class="imgSection">
                </div>

                <div class="sections" id="3">
                    <div class="txtSection" id="hiddenR">
                        <strong class="title">A ton Tour (club de jeux de société)</strong>
                        <p>
                            A ton Tour est un club de jeu de société ouvert à tous les étudiants de l’IUT de Béziers.
                            Jeu de cartes, hasard, stratégie ou escape game, face à face ou en collaboration, si vous
                            aimez jouer, vous y trouverez certainement votre bonheur.
                        </p>
                    </div>
                    <img src="../img/a-ton-tour.jpeg" alt="couleur" class="imgSection">
                </div>

                <div class="sections" id="4">
                    <div class="txtSection" id="hiddenR">
                        <strong class="title">Bureau Des Étudiants Athéna (BDE Athéna)</strong>
                        <p>
                            Le BDE Athena, c'est l'association étudiante dynamique et engagée de l'IUT de Béziers. Leur
                            mission principale est de créer une expérience étudiante inoubliable pour tous les étudiants
                            de l'IUT de Béziers.
                            Le BDE a pour objectifs de :
                        </p>

                    </div>
                    <img src="../img/ae.png" alt="couleur" class="imgSection">
                </div>

                <div class="sections" id="5">
                    <div class="txtSection" id="hiddenR">
                        <strong class="title">Club de Robotique</strong>
                        <p>
                            Il permet aux passionnés de robotique de participer à des projets à long terme, tels que
                            la conception d’un robot en partenariat avec les pédagogues du lycée Jean Moulin à Béziers.
                        </p>

                    </div>
                    <img src="../img/club-robotique.png" alt="couleur" class="imgSection">
                </div>

                <div class="sections" id="6">
                    <div class="txtSection" id="hiddenR">
                        <strong class="title">Fablab</strong>
                        <p>
                            Un Fablab est un lieu convivial de partage et d'apprentissage pratique des technologies,
                            ouvert à tous, quels que soient le niveau de formation. On y échange des avis, des conseils,
                            et des savoir-faire.
                        </p>
                    </div>
                    <img src="../img/fablab.jpg" alt="couleur" class="imgSection">
                </div>

                <div class="sections" id="7">
                    <div class="txtSection" id="hiddenR">
                        <strong class="title">Un super matériel disponible pour les étudiants</strong>
                        <p>
                            L'IUT dispose d'une salle fond vert, de plusieurs caméras, lumières pour réaliser vos
                            projets d'audiovisuels. Mais aussi des casques VR, des tablettes graphiques wacom et une
                            salle radio Tout est mis a disposition des éleves à tout moment.
                        </p>

                    </div>
                    <img src="../img/matériel.jpg" alt="couleur" class="imgSection">
                </div>
            </div>
            <br>
            <form action="../../php/navigation/update_progression.php" method="post">
                <input type="hidden" name="next_page" value="enregistrement.php">
                <button type="submit" id="goTo1" class="bouton_next ourbtn" style="padding: 10px 100px 10px 100px">
                    Finir la présentation
                </button>
            </form>
        </div>

    </div>

    <!-- js -->

    <script src="../js/presentation6.js"></script>

    <!-- js -->

</body>

</html>