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
            width: 95%;
            height: 409.6px;
            position: relative;
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            margin-left: auto;
            margin-right: auto;
        }

        .imgSection {
            width: 100%;
            height: 100%;
        }

        .txtSection {
            position: absolute;
            background-color: rgb(255, 255, 255, 0.9);
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

        #hiddenR {
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

        #visibleR {
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
                    <img src="../img/ffb.png" alt="couleur" class="imgSection">
                </div>

                <div class="sections" id="1">
                    <div class="txtSection" id="hiddenR">
                        <h3>Marathon</h3>
                        <p>
                            Pendant 1 semaine, des groupe de 5 à 6 étudiants de 1ère, 2ème, et 3eme année du département
                            MMI (Métiers du Multimédia et de l’Internet) de l’IUT de Béziers ont pour mission d’élaborer
                            des solutions de communication, sur des sujets proposés par les organisations
                            commanditaires.
                        </p>
                        <p>
                            Chaque équipe doit produire un travail en infographie (proposer un logo, une charte
                            graphique complète, et un flyer 1 ou 2 volets), en audiovisuel (tourner et monter une (ou
                            plusieurs) video(s) d’une durée totale de 3 minutes) et un site web (réaliser un site web
                            responsive sous WordPress et l’alimenter en contenu)
                        </p>

                    </div>
                    <img src="../img/marathon.png" alt="couleur" class="imgSection">
                </div>

                <div class="sections" id="2">
                    <div class="txtSection" id="hiddenL">
                        <h3>Hackathon</h3>
                        <p>
                            Pendant 3 jours, les étudiants sont répartis en équipe réunissant toutes les formations de
                            l'IUT (Carrières Sociales, Métiers du Multimédia et de l'Internet, Réseaux et Télécoms,
                            Technique de Commercialisation et Rob-IA). Une entreprise commanditaire va alors lancer un
                            defi à chaque équipe, qui devront alors faire de leur mieux pour monter le projet qui
                            convienne le mieux à l'entreprise et au défi posé.
                        </p>
                        <p>
                            Cet évenement permet de ressérer les liens entres les étudiants des différentes filliaires.
                            Cela permet aussi aux étudiant de travailler en situation professionnelle : collaborer sur
                            un projet réel en temps limité, communiquer en interne et en externe, échanger avec des
                            professionnels.
                        </p>
                    </div>
                    <img src="../img/hackathon.jpg" alt="couleur" class="imgSection">
                </div>

                <div class="sections" id="3">
                    <div class="txtSection" id="hiddenR">
                        <h3>A ton Tour (club de jeux de société)</h3>
                        <p>
                            A ton Tour est un club de jeu de société ouvert à tous les étudiants de l’IUT de Béziers.
                            Jeu de cartes, hasard, stratégie ou escape game, face à face ou en collaboration, si vous
                            aimez jouer, vous y trouverez certainement votre bonheur.
                        </p>
                    </div>
                    <img src="../img/a-ton-tour.jpeg" alt="couleur" class="imgSection">
                </div>

                <div class="sections" id="4">
                    <div class="txtSection" id="hiddenL">
                        <h3>Bureau Des Étudiants Athéna (BDE Athéna)</h3>
                        <p>
                            Le BDE Athena, c'est l'association étudiante dynamique et engagée de l'IUT de Béziers. Notre
                            mission principale est de créer une expérience étudiante inoubliable pour tous les étudiants
                            de notre établissement. Nous sommes fiers de représenter la voix des étudiants et de
                            travailler sans relâche pour améliorer leur vie universitaire.
                        </p>
                        <p>
                            Le BDE a pour objectifs de :
                        <ul>
                            <li>
                                Fédérer la communauté étudiante : Nous organisons une variété d'événements sociaux,
                                culturels et sportifs tout au long de l'année pour favoriser les rencontres et les
                                échanges entre les étudiants
                            </li>
                            <li>
                                Soutenir la réussite académique : Nous offrons des ressources et des initiatives pour
                                aider nos camarades à exceller dans leurs études.
                            </li>
                            <li>
                                Promouvoir l'engagement citoyen : Nous encourageons nos membres à s'impliquer dans des
                                projets bénévoles et des actions caritatives pour contribuer positivement à notre
                                communauté locale.
                            </li>
                        </ul>
                        </p>

                    </div>
                    <img src="../img/ae.png" alt="couleur" class="imgSection">
                </div>

                <div class="sections" id="5">
                    <div class="txtSection" id="hiddenR">
                        <h3>Club de Robotique</h3>
                        <p>
                            Il permettra aux passionnés de robotique de participer à des projets à long terme, tels que
                            la conception d’un robot en partenariat avec les pédagogues du lycée Jean Moulin à Béziers.
                            En s’appuyant sur l’expertise de notre FabLab, il offrira aux membres l’opportunité de
                            concrétiser leurs idées et de les transformer en réalité, soulignant ainsi l’avantage
                            d’avoir un atelier de fabrication numérique au sein de notre établissement
                        </p>

                    </div>
                    <img src="../img/club-robotique.png" alt="couleur" class="imgSection">
                </div>

                <div class="sections" id="6">
                    <div class="txtSection" id="hiddenL">
                        <h3>Fablab</h3>
                        <p>
                            Un Fablab est un espace collaboratif destiné au partage de technologies, de compétences, et
                            à l’apprentissage de celles-ci par la pratique. C‘est un lieu de rencontre convivial,
                            d’échanges, de transmission de savoir-faire, s’adressant à tout public n’ayant pas
                            nécessairement de formation technique.
                        </p>
                        <p>
                            On vient y chercher des avis, des conseils, de l'aide, des savoir-faire. On peut aussi y
                            rencontrer d'autres professionnels, parler crowd-founding, organiser des ateliers, des
                            conférences, faire profiter les autres de ses propres connaissances. On y croise des
                            enfants, des ingénieurs, des étudiants, des designers, des retraités, des pros et des moins
                            pros, et même des génies ingénus. Que des gens curieux en somme, des passionnés, comme vous
                            peut-être.
                        </p>

                    </div>
                    <img src="../img/fablab.jpg" alt="couleur" class="imgSection">
                </div>

                <div class="sections" id="7">
                    <div class="txtSection" id="hiddenR">
                        <h3>Un super matériel disponible pour les étudiants</h3>
                        <p>
                            L'IUT dispose d'une salle fond vert, de plusieurs caméras, lumières pour réaliser vos
                            projets d'audiovisuels. Tout est mis a disposition des éleves à tout moment et pour
                            n'importe quel projet, pour les cours ou personnel.
                        </p>
                        <p>
                            De nombreuses tablettes graphiques wacom sont aussi mises à la disposition des étudiants
                            pour tous leurs travaux graphiques
                        </p>
                        <p>
                            Une salle radio est aussi en libre accès pour tous ceux qui le souhaitent.
                        </p>

                    </div>
                    <img src="../img/matériel.jpg" alt="couleur" class="imgSection">
                </div>
            </div>
            <br>
            <form action="../../php/navigation/update_progression.php" method="post">
                <input type="hidden" name="next_page" value="enregistrement.php">
                <button type="submit" id="goTo1" class="bouton_next" style="padding: 10px 100px 10px 100px">
                    Une dernière étape 
                </button>
            </form>
        </div>

    </div>

    <!-- js -->

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
                txt.id = id % 2 == 0 ? "visibleL" : "visibleR";
            };
        }

        function hideTxt(txt, id) {
            return function () {
                txt.id = id % 2 == 0 ? "hiddenL" : "hiddenR";
            };
        }

    </script>
</body>

</html>