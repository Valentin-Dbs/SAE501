<!-- session -->

<?php include('../../php/auth/check_session.php'); ?>

<!-- session -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@400;700&display=swap">
    <link rel="stylesheet" type="text/css" href="../breadcrumb_style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <title>Site Parcousup</title>
    <style>
        .div-centre{
            display: block;
        }
        .carousel-control-next, .carousel-control-prev, .carousel-indicators /*, .carousel-indicators */ {
    filter: invert(100%);
}
.carousel-control-next{
    justify-content: right;
}
.carousel-control-prev{
    justify-content: left;
}
.carousel-indicators {
    margin-bottom: 0;
}
    </style>
</head>

<body>

    <div class="div-centre">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                    aria-label="Slide 6"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-block w-100">
                        <img src="..\img\mmi-logo-couleur_1.png" alt="Logo MMI" width="100px">

                        <h2>Découvrir les débouchés</h2>

                        <p>
                            Comme le BUT MMI permet d'acquérir énormément de compétences différentes, il permet
                            aussi de travailler dans toutes sortes de métiers et toutes sortes de domaines.
                        </p>
                        <p>
                            Les <b>génies créatifs</b>, pouront devenir <b>designer</b>, <b>infographiste</b>,
                            <b>game designer</b> ou <b>technicien audiovisuel</b>.
                        </p>
                        <p>
                            Pour les <b>rois du code</b>, ils ne sera pas difficile de rejoindre les <b>métiers
                                d’intégrateur</b>, de <b>développeur « back », « front », ou « full stack »</b>,
                            <b>d’intégrateur de dispositifs de réalité virtuelle</b>.
                        </p>
                        <p>
                            Les <b>maîtres de la communication</b>, quant à eux, pourraient se lancer en tant
                            que <b>chargé de communication numérique</b>, <b>UX designer</b>, <b>rédacteur
                                Web</b>,
                            <b>community manager</b>, <b>spécialiste du référencement sur Internet</b>.
                        </p>
                        <p>
                            C’est une formation très polyvalente qui permet d’accéder à beaucoup de compétences,
                            il y a donc une plus grande liberté et diversité de choix que ce soit dans les
                            études supérieurs ou la voix professionnels.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-block w-100">
                        <img src="..\img\animateur-2d-3d.jpeg" alt="Animation 2D" width="200px">
                    <h2>Animateur / animatrice 2D et 3D</h2>
                    <p>
                        <b> Centres d'intérêt :</b> Passioné par le dessin et le dessin numériques, les
                        animation, les dessins animés
                    </p>
                    <p>
                        Dans son travail, l'animateur 2D commence par travailler au papier avant de passer
                        au numérique . En 3D par contre, l'animateur 3D commence en travaillant directement
                        sur ordinateur pour travailler avec les reliefs.
                        Il s'agit d'un travail long et minutieux. Il faut s'assurer que les mouvements
                        soient fluides et précis
                    </p>
                    <p>
                        Pour faire ce métier il est important d'avoir un bon niveau de dessin papier et de
                        dessin numérique. Il faut aussi bien connaître les différents logiciels d'animation
                        2D et/ou 3D.
                    </p>
                    </div>
                    
                </div>
                <div class="carousel-item">
                    <div class="d-block w-100">
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
                        Le concepteur multimédia crée des produits cohérents en combinant textes, images,
                        sons,
                        vidéos et dessins. Il établit un scénario détaillé pour rendre le produit convivial
                        et
                        dirige le processus de création, collaborant avec divers professionnels, que ce soit
                        en
                        tant que salarié ou travailleur indépendant.
                    </p>
                    </div>
                    
                </div>
                <div class="carousel-item">
                    <div class="d-block w-100">
                        <img src="..\img\developpeur-informatique.jpeg" alt="Développeur informatique" width="200px">
                    <h2>Développeur / développeuse d'application mobile</h2>
                    <p>
                        <b>Centres d'intérêt :</b> Soyez sûr d'aimer les nouvelles technologies et le
                        développement, car s'est un milieu en constante évolution qui nécessite que l'on se
                        tienne au courant de ces évolutions
                    </p>
                    <p>
                        Créer des applications mobiles est la principale mission du développeur
                        d'application mobile. Ce peut être des applications à créer de toute pièces ou bien
                        des des adaptation de site web ou même simplement optimiserune appication déjà
                        existante.
                    </p>
                    <p>
                        Vous aurez besoin d'un bon niveau de connaisance des normes et des langages de
                        programmation bien sûr, mais aussi en mathématiques (algorithmique, géométrie et
                        analyse)
                    </p>
                    </div>
                    
                </div>
                <div class="carousel-item">
                    <div class="d-block w-100">
                        <img src="..\img\webmaster.jpeg" alt="Webmaster" width="200px">
                    <h2>Webmaster</h2>
                    <p>
                        <b>Synonymes :</b> Administrateur/trice de site, Webmaster éditorial/e, Webmaster
                        technique
                        <br>
                        <b>Secteurs professionnels :</b> Tout secteur nécéssitant un site web (Agriculture,
                        Commerce et distribution, publicité, librairie,...)
                        <br>
                        <b>Centres d'intérêt :</b> J'ai le sens du contact, Je me passionne pour les
                        nouvelles
                        technologies, Je suis accro au numérique, Je veux travailler dans la communication
                    </p>
                    <p>
                        À la fois technicien, graphiste et rédacteur, le webmaster est responsable de la vie
                        d'un site, du développement à l'animation, en passant par la mise en ligne et la
                        veille
                        technologique. Un métier à géométrie variable nécessitant d'avoir plusieurs cordes à
                        son
                        arc.
                    </p>
                    </div>
                    
                </div>
                <div class="carousel-item">
                    <div class="d-block w-100">
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
                        équipes de développement multimédia, tout en travaillant étroitement avec l'UI
                        designer
                        pour la conception graphique
                    </p>
                    </div>
                    
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <form action="../../php/navigation/update_progression.php" method="post">
            <input type="hidden" name="next_page" value="quiz2.php">
            <button type="submit" id="goTo1" class="bouton_next ourbtn" style="padding: 10px 100px 10px 100px">
                Faire le quiz 2
            </button>
        </form>









































        <!-- js -->

        <script src="../js/presentation3.js"></script>

        <!-- js -->

</body>

</html>