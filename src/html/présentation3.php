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
        .carousel-container {
            display: flex;
            overflow: hidden;
        }

        .carousel-slide {
            min-width: 100%;
            box-sizing: border-box;
        }
    </style>
</head>

<body>

    <!-- session -->

    <?php include('../../php/auth/check_session.php'); ?>

    <!-- session -->

    <div class="div-centre">
        <div style="width: 90%;">
            <div class="container">
                <button onclick="prevSlide()" class="arrows">
                    < 
                </button>
                <div class="carousel-container">
                    <div class="carousel-slide">
                        <img src="..\img\mmi-logo-couleur_1.png" alt="Logo MMI" width="100px">
                        <h2>Découvrir les débouchés</h2>
                        <p>
                            Comme le BUT MMI permet d'acquérir énormément de compétences différentes, il permet aussi
                            de travailler dans toutes sortes de métiers et toutes sortes de domaines.
                        </p>
                        <p>
                            Pour les créatifs amoureux des graphismes ou de l’audiovisuel, il est tout à fait
                            possible de travailler dans une agence publicitaire ou de communication.
                        </p>
                        <p>
                            Pour les acharnés du code, votre avenir pourrait se dessiner dans le développement web,
                            la programmation d’applications, ou même la sécurité informatique.
                        </p>
                        <p>
                            Pour les maîtres de la communication, une carrière pourrait se profiler dans le
                            marketing, la stratégie de communication, la gestion des médias sociaux.
                        </p>
                        <p>
                            C’est une formation très polyvalente qui permet d’accéder à beaucoup de compétences, il
                            y a donc une plus grande liberté et diversité de choix que ce soit dans les études
                            supérieurs ou la voix professionnels.
                        </p>
                        <h4>Bonne découverte !</h4>
                    </div>
                    <div class="carousel-slide">
                        <img src="..\img\developpeur-informatique.jpeg" alt="Développeur informatique" width="200px">
                        <h2>Développeur / développeuse informatique</h2>
                        <p>
                            <b>Synonymes :</b> Analyste-programmeur/euse, Ingénieur/e d'études et de développement
                            <br>
                            <b>Métiers Associés : </b> Développeur/euse d'applications mobiles, Développeur/euse
                            multimédia
                            <br>
                            <b>Centres d'intérêt :</b> Je me passionne pour les nouvelles technologies, Je suis
                            accro au
                            numérique
                        </p>
                        <p>
                            Expert des langages informatiques, le développeur informatique traduit la demande d'un
                            client en lignes de code informatique. La révolution numérique le place parmi les
                            professionnels les plus recherchés, surtout s'il sait s'adapter et élargir ses
                            compétences.
                        </p>
                    </div>
                    <div class="carousel-slide">
                        <img src="..\img\animateur-2d-3d.jpeg" alt="Animation 2D" width="200px">
                        <h2>Animateur / animatrice 2D et 3D</h2>
                        <p>
                            <b>Synonymes :</b> Animateur/trice de dessin animé, Animateur/trice en images de
                            synthèse, Infographiste
                            <br>
                            <b> Secteurs professionnels :</b> Audiovisuel, Édition, librairie, bibliothèque,
                            Journalisme
                            <br>
                            <b> Centres d'intérêt : </b>J'ai un bon coup de crayon, je me passionne pour les
                            nouvelles
                            technologies, je rêve d'un métier artistique, je suis accro au numérique
                        </p>
                        <p>
                            Le travail d'animateur 2D implique de donner vie à des images dessinées sur papier ou
                            tablette, tandis que l'animateur 3D travaille sur des modèles informatiques pour créer
                            une illusion de relief et de volume, contribuant ainsi à la réalisation de films
                            d'animation et de jeux vidéo en collaboration avec d'autres professionnels.
                        </p>
                    </div>
                    <div class="carousel-slide">
                        <img src="..\img\concepteur-multimedia.jpeg" alt="Image 3" width="200px">
                        <h2>Concepteur / conceptrice multimédia</h2>
                        <p>
                            <b>Synonymes :</b> Concepteur/trice-réalisateur/trice multimédia
                            <br>
                            <b>Métiers Associés :</b> Concepteur/trice de jeux vidéo
                            <br>
                            <b>Secteurs professionnels :</b> Édition, librairie, bibliothèque, Informatique et
                            réseaux,
                            Journalisme, Marketing , publicité
                            <br>
                            <b>Centres d'intérêt : </b> Je me passionne pour les nouvelles technologies, Je suis
                            accro au
                            numérique
                        </p>
                        <p>
                            Le concepteur multimédia crée des produits cohérents en combinant textes, images, sons,
                            vidéos et dessins. Il établit un scénario détaillé pour rendre le produit convivial et
                            dirige le processus de création, collaborant avec divers professionnels, que ce soit en
                            tant que salarié ou travailleur indépendant.
                        </p>
                    </div>
                    <div class="carousel-slide">
                        <img src="..\img\webmaster.jpeg" alt="Webmaster" width="200px">
                        <h2>Webmaster</h2>
                        <p>
                            <b>Synonymes :</b> Administrateur/trice de site, Webmestre éditorial/e, Webmestre
                            technique
                            <br>
                            <b>Secteurs professionnels :</b> Tout secteur nécéssitant un site web (Agriculture,
                            Commerce et distribution, publicité, librairie,...)
                            <br>
                            <b>Centres d'intérêt :</b> J'ai le sens du contact, Je me passionne pour les nouvelles
                            technologies, Je suis accro au numérique, Je veux travailler dans la communication
                        </p>
                        <p>
                            À la fois technicien, graphiste et rédacteur, le webmestre est responsable de la vie
                            d'un site, du développement à l'animation, en passant par la mise en ligne et la veille
                            technologique. Un métier à géométrie variable nécessitant d'avoir plusieurs cordes à son
                            arc.
                        </p>
                    </div>
                    <div class="carousel-slide">
                        <img src="..\img\ux-designer.jpeg" alt="UX designer" width="200px">
                        <h2>UX designer</h2>
                        <p>
                            <b> Secteurs professionnels :</b> Édition, librairie, bibliothèque, Informatique et
                            réseaux,
                            Journalisme
                            <br>
                            <b>Centres d'intérêt :</b> Je me passionne pour les nouvelles technologies, Je suis
                            accro au
                            numérique
                        </p>
                        <p>
                            L'UX designer améliore l'expérience des utilisateurs en simplifiant la navigation en
                            ligne, en analysant les comportements des utilisateurs et en collaborant avec des
                            équipes de développement multimédia, tout en travaillant étroitement avec l'UI designer
                            pour la conception graphique
                        </p>
                    </div>
                </div>
                <button onclick="nextSlide()" class="arrows">
                    >
                </button>
            </div>
            <br>
            <form action="../../php/navigation/update_progression.php" method="post">
                <input type="hidden" name="next_page" value="quiz2.php">
                <button type="submit" id="goTo1" class="bouton_next" style="padding: 10px 100px 10px 100px">
                    Faire le quiz 2
                </button>
            </form>
        </div>
    </div>

    <!-- js -->


    <!-- js -->


    <script>
        let currentIndex = 0;
        const slides = document.querySelectorAll('.carousel-slide');

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.style.display = i === index ? 'block' : 'none';
            });
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % slides.length;
            showSlide(currentIndex);
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;
            showSlide(currentIndex);
        }
    </script>

</body>

</html>