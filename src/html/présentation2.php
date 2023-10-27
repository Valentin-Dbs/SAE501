<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@400;700&display=swap">
    <link rel="stylesheet" type="text/css" href="../../style.css">

    <title>Site Parcousup</title>
</head>

<body>
    <div class="div-centre">
        <div class="textInfo">
            <h1>Et le BUT MMI ?</h1>
            <p>Lors de la deuxième année, il te sera demandé de choisir un parcours de spécialisation. Les trois
                parcours de
                spécialisation possibles en MMI sont :
            <ul>
                <li>Création numérique</li>
                <li>Développement web et dispositifs interactifs</li>
                <li>Stratégie de communication numérique et design d’expérience</li>
            </ul>
            </p>
            <p>
                Cependant à l’IUT de Béziers seulement 2 parcours sont proposés :
            <ul>
                <li> Création numérique</li>
                <li>Développement web et dispositifs interactifs</li>

            </ul>
            </p>
            <p>

                Mais il existe 30 IUT qui proposent MMI parmis les 108 IUT de France alors si le parcours stratégie de
                communication numérique et design d’expérience t’intéresse alors n’hésite pas à regarder les autres IUT.

                Cliquez sur les dossiers pour en apprendre davantage sur les parcours ;)
            </p>

            <div class="parcours">
                <button id="btnCrea">Création numérique</button>
                <div class="texteCache" id="crea"> Si tu choisis cette voie, tu te plongeras dans le monde de la
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



        </div>
        <br>
        <a href="quiz1.php"><button id="goTo1" class="bouton_next">
                Faire le quiz 1
            </button></a>
    </div>



</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const btnCrea = document.getElementById("btnCrea");
        const crea = document.getElementById("crea");

        btnCrea.addEventListener("click", function () {
            if (crea.style.display != "none") {
                crea.style.display = "block";
                btnCrea.textContent = "Masquer le texte";
            } else {
                crea.style.display = "none";
                btnCrea.textContent = "Dérouler le texte";
            }
        });
    });
</script>

</html>