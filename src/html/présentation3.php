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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <title>Site Parcousup</title>
    <style>
        .div-centre {
            display: block;
        }

        .carousel-control-next,
        .carousel-control-prev,
        .carousel-indicators

        /*, .carousel-indicators */
            {
            filter: invert(100%);
        }

        .carousel-control-next {
            justify-content: right;
        }

        .carousel-control-prev {
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
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-block w-100 carousel-item-content">
                        <div class="carousel-centrer">
                            <img src="..\img\mmi-logo-couleur_1.png" alt="Logo MMI" width="75px">

                            <h1>Découvrir les débouchés</h1>

                            <p>
                                Le BUT MMI permet d'acquérir énormément de compétences différentes, il prépare aussi à
                                <strong>travailler dans toutes sortes de domaines</strong>.
                            </p>
                            <p>
                                On va vous montrer quelques métiers que vous pourrez faire après avoir suivit une
                                formation
                                MMI
                            </p>
                            <p>
                                Gardez bien à l'esprit que même si on conseille un parcours pour un métiers, un autre
                                parcours peut lui aussi déboucher sur le même métier.
                            </p>
                            <h3>Bonne découverte !</h3>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-block w-100 carousel-item-content">
                        <div class="carousel-centrer">
                        <img src="..\img\animateur-2d-3d.jpeg" alt="Animation 2D" width="200px">
                        <h2>Animateur 2D et 3D</h2>
                        <i>parcours conseillé : Création numérique</i>
                        <p>
                            Réaliser des dessin animés, logo animé, des animations pour des sites web ou autre, telle
                            est la mission de l'animateur 2D/3D.
                        </p>
                        <p>
                            En MMI on apprend l'animation de logo, de personnages et autres, grâce à différents
                            logiciels tels qu'After Effect ou Animate.
                        </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-block w-100 carousel-item-content">
                        <div class="carousel-centrer">
                        <img src="..\img\concepteur-multimedia.jpeg" alt="Image 3" width="200px">
                        <h2>Concepteur multimédia</h2>
                        <i>parcours conseillé : Création numérique</i>
                        <p>
                            Il s'agit d'une personne chargée de produire du contenu multimédia (vidéo, musique, son,
                            images) qui auront pour finalité de ce retouver sur internet (site web, résaux sociaux...)
                        </p>
                        <p>
                            En MMI on apprend et on s'entraine à produire différents type de contenus multimédia tels
                            que des vidéo, logo, infographies...
                        </p>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <div class="d-block w-100 carousel-item-content">
                        <div class="carousel-centrer">
                        <img src="..\img\developpeur-informatique.jpeg" alt="Développeur informatique" width="200px">
                        <h2>Développeur d'application mobile</h2>
                        <i>parcours conseillé : Développement web</i>
                        <p>
                            C'est un développeur spécialisé dans la création d'application mobile. Il doit maîtriser les
                            langages et logiciels de programmation des applications mobiles.
                        </p>
                        <p>
                            En MMI on nous apprends à utiliser ces langages et logiciels, que se soit pour faire des
                            application sur Android ou iOs.
                        </p>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <div class="d-block w-100 carousel-item-content">
                        <div class="carousel-centrer">
                        <img src="..\img\webmaster.jpeg" alt="Webmaster" width="200px">
                        <h2>Développeur Full-Stack</h2>
                        <i>parcours conseillé : Développement web</i>
                        <p>
                            Le Développeur Full-Stack s'occupe de toute la construction d'un site web. Que ce soit le
                            serveur ou les graphismes, il fait tout lui même.
                        </p>
                        <p>
                            Le BUT MMI est une excellente formation pour devenir Développeur Full-Stack car on y apprend
                            autant de graphismes et de developpement web pendant 2 ans avant de se spécialiser.
                        </p>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <div class="d-block w-100 carousel-item-content">
                        <div class="carousel-centrer">
                        <img src="..\img\ux-designer.jpeg" alt="UX designer" width="200px">
                        <h2>UX designer</h2>
                        <i>parcours conseillé : Stratégie de communication</i>
                        <p>
                            L'UX (User experience) Designer fait des recherche sur le produit et le public cible pour
                            faire en sorte que le produit soit le plus accessible possible à l'utilisateur.
                        </p>
                        <p>
                            En MMI forme à ce métier que ce soit au travers de cours théoriques ou de mise en place
                            pratiques des compétences aquises
                        </p>
                        </div>
                    </div>

                </div>
            </div>
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
                Continuer
            </button>
        </form>









































        <!-- js -->

        <script src="../js/presentation3.js"></script>

        <!-- js -->

</body>

</html>