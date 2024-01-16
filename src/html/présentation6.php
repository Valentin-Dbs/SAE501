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
        h1 {
            margin: 40px auto;
        }

        .sections {
            position: relative;
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            margin-left: auto;
            margin-right: auto;
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
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
        @media screen and (max-width: 600px){
            #visibleR{
                width: 100%;
            }
            #visibleL{
                width: 100%;
            }
            #hiddenR{
                width: 100%;
            }
            #hiddrenL{
                width: 100%;
            }
            .sections{
                height: 200px;
            }
            p{
                font-size: 10px;
            }
            h2{
                margin: 5px;
            }
}
    </style>

    <!--css--> 

<style>

body {
    margin-bottom: 60px; /* La hauteur de votre breadcrumb-container */
}

.breadcrumb-container {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 10px; /* un peu de padding pour l'espacement */
    z-index: 1000; /* s'assurer qu'il reste au-dessus des autres éléments */
}

.breadcrumb li.active a {
  color: #fff; /* Couleur du texte pour l'élément actif */
  background-color: #007bff; /* Couleur de fond pour l'élément actif */
  border-color: #0056b3; /* Couleur de bordure pour l'élément actif */
  cursor: default; /* Change le curseur pour indiquer que l'élément n'est pas cliquable */
}

.breadcrumb li.active a:hover {
  background-color: #0056b3; /* Couleur de fond au survol pour l'élément actif */
  border-color: #003580; /* Couleur de bordure au survol pour l'élément actif */
}

.breadcrumb { 
  list-style: none; 
  overflow: hidden; 
  font: 18px Helvetica, Arial, Sans-Serif;
  margin: 40px;
  padding: 0;
}
.breadcrumb li { 
  float: left; 
}
.breadcrumb li a {
  color: white;
  text-decoration: none; 
  padding: 10px 0 10px 55px;
  background: brown; /* fallback color */
  background: hsla(34,85%,35%,1); 
  position: relative; 
  display: block;
  float: left;
}
.breadcrumb li a:after { 
  content: " "; 
  display: block; 
  width: 0; 
  height: 0;
  border-top: 50px solid transparent;           /* Go big on the size, and let overflow hide */
  border-bottom: 50px solid transparent;
  border-left: 30px solid hsla(34,85%,35%,1);
  position: absolute;
  top: 50%;
  margin-top: -50px; 
  left: 100%;
  z-index: 2; 
}	
.breadcrumb li a:before { 
  content: " "; 
  display: block; 
  width: 0; 
  height: 0;
  border-top: 50px solid transparent;           /* Go big on the size, and let overflow hide */
  border-bottom: 50px solid transparent;
  border-left: 30px solid white;
  position: absolute;
  top: 50%;
  margin-top: -50px; 
  margin-left: 1px;
  left: 100%;
  z-index: 1; 
}	
.breadcrumb li:first-child a {
  padding-left: 10px;
}
.breadcrumb li:nth-child(2) a       { background:        hsla(34,85%,45%,1); }
.breadcrumb li:nth-child(2) a:after { border-left-color: hsla(34,85%,45%,1); }
.breadcrumb li:nth-child(3) a       { background:        hsla(34,85%,55%,1); }
.breadcrumb li:nth-child(3) a:after { border-left-color: hsla(34,85%,55%,1); }
.breadcrumb li:nth-child(4) a       { background:        hsla(34,85%,65%,1); }
.breadcrumb li:nth-child(4) a:after { border-left-color: hsla(34,85%,65%,1); }
.breadcrumb li:nth-child(5) a       { background:        hsla(34,85%,75%,1); }
.breadcrumb li:nth-child(5) a:after { border-left-color: hsla(34,85%,75%,1); }
.breadcrumb li:last-child a { border-left-color: hsla(34,85%,75%,1); 
}
.breadcrumb li:last-child a a:after { border-left-color: hsla(34,85%,75%,1); }
.breadcrumb li:last-child a:after { border: 0; }
.breadcrumb li a:hover { background: hsla(34,85%,25%,1); }
.breadcrumb li a:hover:after { border-left-color: hsla(34,85%,25%,1) !important; }
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
                        <h2>Le Festival du Fantastique de Béziers</h2>
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
                        <h2>Marathon</h2>
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
                        <h2>Hackathon</h2>
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
                        <h2>A ton Tour (club de jeux de société)</h2>
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
                        <h2>Bureau Des Étudiants Athéna (BDE Athéna)</h2>
                        <p>
                            Le BDE Athena, c'est l'association étudiante dynamique et engagée de l'IUT de Béziers. Notre
                            mission principale est de créer une expérience étudiante inoubliable pour tous les étudiants
                            de notre établissement.
                            Le BDE a pour objectifs de :
                        </p>
                        <ul>
                            <li>
                                Fédérer la communauté étudiante en organisant une variété d'événements sociaux,
                                culturels et sportifs.
                            </li>
                            <li>
                                Soutenir la réussite académique en offrant des ressources et des initiatives pour aider
                                nos camarades à exceller dans leurs études.
                            </li>
                            <li>
                                Promouvoir l'engagement citoyen en encourageant nos membres à s'impliquer dans des
                                projets et des actions caritatives pour contribuer à notre
                                communauté locale.
                            </li>
                        </ul>

                    </div>
                    <img src="../img/ae.png" alt="couleur" class="imgSection">
                </div>

                <div class="sections" id="5">
                    <div class="txtSection" id="hiddenR">
                        <h2>Club de Robotique</h2>
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
                        <h2>Fablab</h2>
                        <p>
                            Un Fablab est un lieu convivial de partage et d'apprentissage pratique des technologies,
                            ouvert à tous, quels que soient le niveau de formation. On y échange des avis, des conseils,
                            et des savoir-faire, tout en organisant des rencontres entre différents profils, des
                            ateliers, des conférences et des sessions de crowdfunding. C'est un espace où se croisent
                            des personnes de tous horizons, partageant une curiosité commune et une passion pour
                            l'innovation.
                        </p>
                    </div>
                    <img src="../img/fablab.jpg" alt="couleur" class="imgSection">
                </div>

                <div class="sections" id="7">
                    <div class="txtSection" id="hiddenR">
                        <h2>Un super matériel disponible pour les étudiants</h2>
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

        <!-- php --> 

        <div class="breadcrumb-container">
    <ul class="breadcrumb">
    <?php
    $current_page = basename($_SERVER['PHP_SELF']);
    $pages = [
        'présentation1.php' =>'Présentation 1',
        'présentation2.php' => 'Présentation 2',
        'quiz1.php' => 'Quiz 1',
        'présentation3.php'=>'Présentation 3',
        'quiz2.php' => 'quiz2.php',
        'présentation4.php' => 'Présentation 4',
        'présentation5.php' =>'Présentation 5',
        'quiz3.php' => 'Quiz 2',
        'présentation6.php'=> 'Présentation 6',
        ];
    foreach ($pages as $page => $title) {
            echo '<li';
            if ($current_page == $page) {
                echo ' class="active"';
            }
            echo '><a href="' . $page . '">' . $title . '</a></li>';
        }
        ?>
    </ul>
</div>

    <!-- php -->
</body>

</html>