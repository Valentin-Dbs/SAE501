<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@400;700&display=swap">
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <title>Site Parcousup</title>

</head>

<body>

    <!-- session -->

    <?php include('../../php/auth/check_session.php'); ?>

    <!-- session -->

    <div class="div-centre">
        <div>
            <div class="textInfo">
                <h1>Le BUT Métiers du Multimédia et de l'Internet</h1>

                <p>
                    Comme son nom l'indique, le BUT MMI, Métiers du Multimédia et de l'Internet, permet de former les étudiants à une majorité des métiers du web !
                </p>
                <p>
                    Réalisation de vidéo, photo, interview et publicités, développement de site web, e-boutique,
                    applications et de jeux vidéo, mise en place de stratégie de communications, de gestion de projet,
                    et autres ... Le BUT MMI est un vrai couteau suisse qui permet de maîtriser un évantail de
                    compétence très complet !
                </p>

                <h2>
                    Les parcours
                </h2>
                <p>
                    Lors de la deuxième année, il te sera demandé de choisir un parcours de spécialisation. Les trois
                    parcours de spécialisation possibles en MMI sont les suivants :
                </p>
                <div class="parcours">
                    <button onclick="toggleText('crea')" id="underlineButton" class="ourbtn">Création numérique &#9660;</button>
                    <div class="texteCache" id="crea" style="display: none;"> Si tu choisis cette voie, tu te plongeras
                        dans le monde de la
                        conception
                        numérique. Cela
                        signifie que tu apprendras à créer des éléments visuels numériques comme des illustrations, des
                        infographies,
                        des animations, des design de jeux vidéo, des créations audiovisuelles et d'autres contenus
                        créatifs.
                        C'est un
                        excellent choix si tu as un œil artistique et que tu veux donner vie à des idées numériques.
                    </div>
                </div>

                <div class="parcours">
                    <button onclick="toggleText('dev')" id="underlineButton" class="ourbtn">Développement web et dispositifs
                        interactifs &#9660;</button>
                    <div class="texteCache" id="dev" style="display: none;">
                        Avec ce parcours, tu te lanceras dans le domaine du développement web. Tu apprendras à créer des
                        sites web interactifs, des applications web et mobiles, des jeux vidéo, ainsi que d'autres
                        solutions
                        interactives telles que de la réalité virtuelle et de la conception 3D . Si tu es intéressé par
                        la
                        programmation et que tu veux travailler sur des projets interactifs, c'est le parcours qu'il te
                        faut.
                    </div>
                </div>

                <div class="parcours">
                    <button onclick="toggleText('com')" id="underlineButton" class="ourbtn">Stratégie de communication numérique et
                        design
                        d'expérience &#9660;</button>
                    <div class="texteCache" id="com" style="display: none;">
                        Si tu choisis cette spécialisation, tu te plongeras dans le monde de la communication numérique.
                        Tu
                        apprendras à concevoir des stratégies de communication en ligne, à gérer des médias sociaux, et
                        à
                        créer des expériences utilisateur exceptionnelles. Si tu es passionné par la communication et
                        que tu
                        veux jouer un rôle clé dans la création d'expériences numériques, c'est le parcours qui te
                        convient.
                    </div>

                </div>
                <p>
                    Cependant à l’IUT de Béziers seulement 2 parcours sont proposés :
                <ul>
                    <li> Création numérique</li>
                    <li>Développement web et dispositifs interactifs</li>

                </ul>
                </p>
                <p>
                    Mais il existe 30 IUT qui proposent MMI parmis les 108 IUT de France alors si le parcours stratégie
                    de communication numérique et design d’expérience t’intéresse alors n’hésite pas à regarder les autres
                    IUT.
                </p>
            </div>
            <br>

            <form action="../../php/navigation/update_progression.php" method="post">
                <input type="hidden" name="next_page" value="présentation1.php">
                <button type="submit" id="goTo1" class="bouton_next ourbtn">Présentation précédente</button>
            </form>
            <form action="../../php/navigation/update_progression.php" method="post">
                <input type="hidden" name="next_page" value="quiz1.php">
                <button type="submit" id="goTo1" class="bouton_next ourbtn" style="padding: 10px 100px 10px 100px">
                    Faire le quiz 1
                </button>
            </form>
        </div>

    </div>

</body>
<script>
    function toggleText(text) {
        var texteElement = document.getElementById(text);
        var textesCaches = document.getElementsByClassName("texteCache");

        if (texteElement.style.display === "none") {
            for (let i = 0; i < textesCaches.length; i++) {
                textesCaches[i].style.display = "none";
            }
            texteElement.style.display = "block";
        } else {
            texteElement.style.display = "none";
        }
    }
</script>

<!-- js -->


<!-- js -->

</html>