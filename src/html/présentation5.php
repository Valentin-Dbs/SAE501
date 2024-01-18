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
    <link rel="stylesheet" type="text/css" href="../css/presentation5_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <title>Site Parcousup</title>
</head>

<body>

    <div class="div-centre">
        <div style="width: 100%">
            <div class="textInfo">
                <h1>Venez apprendre à l'IUT de Béziers !</h1>
                <p>L'IUT de Béziers propose deux parcours : <stong>Création Numérique</stong> et <stong>Développement
                        Web</stong>. Découvrez ce que vous allez apprendre avec nous !</p>

                <div class="tabSmall">
                    <div class="align-items-start">
                        <div class="nav nav-pills me-3" id="v-pills-tab" role="tablist">
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                aria-selected="true">
                                Créa
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
                                <div class="parcours" id="crea">
                                    <div class="cours" id="audiovisuel">
                                        <img class="imgCours" src="..\img\caméra.png" alt="Camera">
                                        <div class="txtCours" id="txtAudiovisuel">
                                            <h5>Audiovisuel</h5>
                                            <p>
                                                Apprendre à se servir d’une caméra ou d’un appareil photo, à utiliser un
                                                logiciel de
                                                montage ou encore à réaliser des scripts et des storyboards pour créer des
                                                vidéos,
                                                court-metrages, films, interviews et autre.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cours" id="animation">
                                        <img class="imgCours" src="..\img\tablette.png" alt="Tablette graphique">
                                        <div class="txtCours" id="txtAnimation">
                                            <h5>Animation et Dessin numérique</h5>
                                            <p>
                                                Apprendre à utiliser une tablette, un ordinateur, et différents
                                                logiciels de
                                                montage
                                                pour dessiner et faire des animations.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cours" id="infographie ">
                                        <img class="imgCours" src="..\img\affiches.png" alt="Affiches">
                                        <div class="txtCours" id="txtInfographie ">
                                            <h5>Infographie</h5>
                                            <p>
                                                Apprendre à réaliser des affiches, des illustrations, et des posts
                                                publicitaires
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cours" id="adobe">
                                        <img class="imgCours" src="..\img\adobe.png" alt="Logo suite Adobe">
                                        <div class="txtCours" id="txtAdobe">
                                            <h5>Suite Adobe</h5>
                                            <p>
                                                Apprendre à maîtriser la suite Adobe qui est un ensemble de logiciels
                                                créatifs qui
                                                permettent de dessiner, faire du montage photo et vidéo, des
                                                infographies,
                                                des
                                                animations et bien d’autres choses.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade tabContent" id="v-pills-disabled" role="tabpanel"
                                aria-labelledby="v-pills-disabled-tab" tabindex="0">
                                <div class="parcours" id="dev">
                                    <div class="cours" id="jeu">
                                        <img src="..\img\manette.png" alt="Manette" class="imgCours">
                                        <div class="txtCours" id="txtJeu">
                                            <h5>Développement de jeux vidéo</h5>
                                            <p>
                                                Apprendre différents langages, logiciels et techniques qui permettent de
                                                concevoir
                                                des jeux vidéo web ou application.
                                            </p>
                                        </div>

                                    </div>
                                    <div class="cours" id="site">
                                        <img src="..\img\e-shop.png" alt="Panier de courses" class="imgCours">
                                        <div class="txtCours" id="txtSite">
                                            <h5>Développement de site web et de e-boutique</h5>
                                            <p>
                                                Apprendre à utiliser des logiciel de construction de site tels que
                                                WordPress.
                                                Apprendre à coder des site de boutique en ligne de A à Z ou bien grâce à
                                                des
                                                logiciels tels que Prestashop.
                                            </p>
                                        </div>

                                    </div>
                                    <div class="cours" id="back">
                                        <img src="..\img\bdd.png" alt="Schema UML d'une base de donnée"
                                            class="imgCours">
                                        <div class="txtCours" id="txtBack">
                                            <h5>Développement Back</h5>
                                            <p>
                                                Apprendre à construire et code une base de donnée ainsi qu’a coder les
                                                connexions et
                                                requêtes qui se font derrière l’interface d’un site, jeu, application
                                                ...
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cours" id="vs">
                                        <img src="..\img\vs code.png" alt="Logo Visual Studio Code" class="imgCours">
                                        <div class="txtCours" id="txtVs">
                                            <h5>Langages de progamations</h5>
                                            <p>
                                                Apprendre à utiliser différents langages de programmation pour créer et
                                                développer
                                                des sites internet, des application, des jeu et autre de A à Z
                                            </p>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>






                <div id="conteneurParcours" class="tabBig">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                                aria-selected="true">
                                Parcours Création Numérique
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile-tab-pane" type="button" role="tab"
                                aria-controls="profile-tab-pane" aria-selected="false">
                                Parcours Développement Web
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                            aria-labelledby="home-tab" tabindex="0">
                            <div class="parcours" id="crea">
                                <div class="cours" id="audiovisuel">
                                    <img class="imgCours" src="..\img\caméra.png" alt="Camera">
                                    <div class="txtCours" id="txtAudiovisuel">
                                        <h5>Audiovisuel</h5>
                                        <p>
                                            Apprendre à se servir d’une caméra ou d’un appareil photo, à utiliser un
                                            logiciel de
                                            montage ou encore à faire des script et des storyboard pour créer des
                                            vidéos,
                                            court-metrage, films, interviews et autre.
                                        </p>
                                    </div>
                                </div>
                                <div class="cours" id="animation">
                                    <img class="imgCours" src="..\img\tablette.png" alt="Tablette graphique">
                                    <div class="txtCours" id="txtAnimation">
                                        <h5>Animation et Dessin numérique</h5>
                                        <p>
                                            Apprendre à utiliser une tablette, un ordinateur, et différents logiciels de
                                            montage
                                            pour dessiner et faire des animations.
                                        </p>
                                    </div>
                                </div>
                                <div class="cours" id="infographie ">
                                    <img class="imgCours" src="..\img\affiches.png" alt="Affiches">
                                    <div class="txtCours" id="txtInfographie ">
                                        <h5>Infographie</h5>
                                        <p>
                                            Apprendre à réaliser des affiches, des illustrations, et des posts
                                            publicitaires
                                        </p>
                                    </div>
                                </div>
                                <div class="cours" id="adobe">
                                    <img class="imgCours" src="..\img\adobe.png" alt="Logo suite Adobe">
                                    <div class="txtCours" id="txtAdobe">
                                        <h5>Suite Adobe</h5>
                                        <p>
                                            Apprendre à maîtriser la suite Adobe qui est un ensemble de logiciels
                                            créatifs qui
                                            permettent de dessiner, faire du montage photo et vidéo, des infographies,
                                            des
                                            animations et bien d’autres choses.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                            tabindex="0">
                            <div class="parcours" id="dev">
                                <div class="cours" id="jeu">
                                    <img src="..\img\manette.png" alt="Manette" class="imgCours">
                                    <div class="txtCours" id="txtJeu">
                                        <h5>Développement de jeux vidéo</h5>
                                        <p>
                                            Apprendre différents langages, logiciels et techniques qui permettent de
                                            concevoir
                                            des jeux vidéo web ou application.
                                        </p>
                                    </div>

                                </div>
                                <div class="cours" id="site">
                                    <img src="..\img\e-shop.png" alt="Panier de courses" class="imgCours">
                                    <div class="txtCours" id="txtSite">
                                        <h5>Développement de site web et de e-boutique</h5>
                                        <p>
                                            Apprendre à utiliser des logiciel de construction de site tels que
                                            WordPress.
                                            Apprendre à coder des site de boutique en ligne de A à Z ou bien grâce à des
                                            logiciels tels que Prestashop.
                                        </p>
                                    </div>

                                </div>
                                <div class="cours" id="back">
                                    <img src="..\img\bdd.png" alt="Schema UML d'une base de donnée" class="imgCours">
                                    <div class="txtCours" id="txtBack">
                                        <h5>Développement Back</h5>
                                        <p>
                                            Apprendre à construire et code une base de donnée ainsi qu’a coder les
                                            connexions et
                                            requêtes qui se font derrière l’interface d’un site, jeu, application ...
                                        </p>
                                    </div>
                                </div>
                                <div class="cours" id="vs">
                                    <img src="..\img\vs code.png" alt="Logo Visual Studio Code" class="imgCours">
                                    <div class="txtCours" id="txtVs">
                                        <h5>Langages de progamations</h5>
                                        <p>
                                            Apprendre à utiliser différents langages de programmation pour créer et
                                            développer
                                            des sites internet, des application, des jeu et autre de A à Z
                                        </p>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>




                </div>
            </div>
            <br>
            <div class="btnNavigation">
            
            <form action="../../php/navigation/update_progression.php" method="post">

                <input type="hidden" name="next_page" value="présentation4.php">

                <button type="submit" id="goTo1" class="bouton_next ourbtn">Précédent</button>

            </form>


            <form action="../../php/navigation/update_progression.php" method="post">

                <input type="hidden" name="next_page" value="quiz3.php">

                <button type="submit" id="goTo1" class="bouton_next ourbtn">Continuer</button>

            </form>
        </div>
        </div>

    </div>

    <!-- js -->

    <script src="../js/presentation5.js"></script>

    <!-- js -->

</body>

</html>