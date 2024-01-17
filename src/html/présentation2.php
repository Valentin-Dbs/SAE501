<!-- session -->

<?php include('../../php/auth/check_session.php'); ?>

<!-- session -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@400;700&display=swap">
    <link rel="stylesheet" type="text/css" href="../css/breadcrumb_style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <title>Site Parcousup</title>

</head>

<body>

    <div class="div-centre">

        <div>

            <div class="textInfo">

                <h1>Le BUT Métiers du Multimédia et de l'Internet</h1>

                <p>
                    Comme son nom l'indique, le BUT MMI, <strong>Métiers du Multimédia et de l'Internet</strong>, permet
                    de former les étudiants à une majorité des métiers du web !
                </p>
                <p>
                    Réalisation de vidéo, photo, interview et publicités, développement de site web, e-boutique,
                    applications et de jeux vidéo, mise en place de stratégie de communications, de gestion de projet,
                    et autres ... <br>Le BUT MMI est <strong>un vrai couteau suisse</strong> qui permet de maîtriser un
                    évantail de
                    compétence très complet !
                </p>

                <h2>
                    Les parcours
                </h2>
                <p>
                    Lors de la deuxième année, il te sera demandé de choisir un parcours de spécialisation. Les
                    <strong>trois parcours</strong> de spécialisation possibles en MMI sont les suivants :
                    <strong>Création numérique</strong>, <strong>Stratégie de communication numérique et design
                        d’expérience</strong>, <strong>Développement Web et dispositifs interactif</strong>.
                </p>


                <div class="tabSmall">
                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                aria-selected="true">
                                Créa
                            </button>
                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile" type="button" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">
                                Com
                            </button>
                            <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-disabled" type="button" role="tab"
                                aria-controls="v-pills-disabled" aria-selected="false">
                                Dev
                            </button>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active tabContent" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab" tabindex="0">
                                Tu apprendras à créer des <strong>éléments visuels numériques</strong> comme des
                                illustrations, des infographies, des animations, des design de jeux vidéo, des projet
                                audiovisuels et d'autres contenus créatifs. <br>
                                On y enseigne aussi l'utilisation de nombreux <strong>logiciels de création
                                    numérique</strong>, comme les
                                logiciels de la <strong>suite Adobe</strong> par exemple.<br>
                                C'est un excellent choix si tu as un œil artistique et que tu aime créer et travailler
                                sur les projets numériques.
                            </div>
                            <div class="tab-pane fade tabContent" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab" tabindex="0">
                                En stratégie de communication, tu apprendras à concevoir la <strong>communication en
                                    ligne</strong>, à gérer la <strong>communication sur les réseaux sociaux</strong>,
                                et à créer des <strong>expériences utilisateur</strong> exceptionnelles en travaillant
                                sur de l'UX/UI Design. <br>
                                Si tu es passionné par la communication et que tu veux jouer un rôle clé dans la
                                création d'expériences numériques, c'est le parcours qui te convient.
                            </div>
                            <div class="tab-pane fade tabContent" id="v-pills-disabled" role="tabpanel"
                                aria-labelledby="v-pills-disabled-tab" tabindex="0">
                                Tu apprendras à créer des sites web, des boutiques en lignes, des applications web et
                                mobiles, des jeux vidéo, des applications en réalité virtuelle<br>
                                Tu apprendras aussi à maîtriser différents <strong>langages et logiciels de
                                    programmation</strong>. <br>
                                Si tu es intéressé par la programmation et que tu veux travailler sur des projets
                                de site web, c'est le parcours qu'il te faut.
                            </div>
                        </div>
                    </div>
                </div>


                <div class="tabBig">
                    <ul class="nav nav-tabs " id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                                aria-selected="true">Création numérique</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile-tab-pane" type="button" role="tab"
                                aria-controls="profile-tab-pane" aria-selected="false">Strat. de
                                com.</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#contact-tab-pane" type="button" role="tab"
                                aria-controls="contact-tab-pane" aria-selected="false">Développement Web</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active tabContent" id="home-tab-pane" role="tabpanel"
                            aria-labelledby="home-tab" tabindex="0">
                            Tu apprendras à créer des <strong>éléments visuels numériques</strong> comme des
                            illustrations, des infographies, des animations, des design de jeux vidéo, des projet
                            audiovisuels et d'autres contenus créatifs. <br>
                            On y enseigne aussi l'utilisation de nombreux <strong>logiciels de création
                                numérique</strong>, comme les
                            logiciels de la <strong>suite Adobe</strong> par exemple.<br>
                            C'est un excellent choix si tu as un œil artistique et que tu aime créer et travailler
                            sur les projets numériques.
                        </div>
                        <div class="tab-pane fade tabContent" id="profile-tab-pane" role="tabpanel"
                            aria-labelledby="profile-tab" tabindex="0">
                            En stratégie de communication, tu apprendras à concevoir la <strong>communication en
                                ligne</strong>, à gérer la <strong>communication sur les réseaux sociaux</strong>,
                            et à créer des <strong>expériences utilisateur</strong> exceptionnelles en travaillant
                            sur de l'UX/UI Design. <br>
                            Si tu es passionné par la communication et que tu veux jouer un rôle clé dans la
                            création d'expériences numériques, c'est le parcours qui te convient.
                        </div>
                        <div class="tab-pane fade tabContent" id="contact-tab-pane" role="tabpanel"
                            aria-labelledby="contact-tab" tabindex="0">
                            Tu apprendras à créer des sites web, des boutiques en lignes, des applications web et
                            mobiles, des jeux vidéo, des applications en réalité virtuelle<br>
                            Tu apprendras aussi à maîtriser différents <strong>langages et logiciels de
                                programmation</strong>. <br>
                            Si tu es intéressé par la programmation et que tu veux travailler sur des projets
                            de site web, c'est le parcours qu'il te faut.
                        </div>
                    </div>
                </div>






                <p>
                    Cependant à l’IUT de Béziers seulement 2 parcours sont proposés : Création numérique et
                    Développement web et dispositifs interactifs
                </p>

                <p>
                    Mais il existe 30 IUT qui proposent MMI parmis les 108 IUT de France alors si le parcours stratégie
                    de communication numérique et design d’expérience t’intéresse alors n’hésite pas à regarder les
                    autres IUT.
                </p>
            </div>
        </div>
        <br>


        <div class="btnNavigation">
            
            <form action="../../php/navigation/update_progression.php" method="post">

                <input type="hidden" name="next_page" value="présentation1.php">

                <button type="submit" id="goTo1" class="bouton_next ourbtn">Précédent</button>

            </form>


            <form action="../../php/navigation/update_progression.php" method="post">

                <input type="hidden" name="next_page" value="quiz1.php">

                <button type="submit" id="goTo1" class="bouton_next ourbtn">Suivant</button>

            </form>
        </div>



    </div>

    </div>

    <!-- js -->

    <script src="../js/presentation2.js"></script>

    <!-- js -->

</body>



</html>