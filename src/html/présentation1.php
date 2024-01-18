<!-- session -->

<?php include('../../php/auth/check_session.php'); ?>

<!-- session -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="img\mmi-favicon.png" type="image/png" sizes="64x64">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@400;700&display=swap" />
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../css/breadcrumb_style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <title>Site Parcousup</title>
    
</head>

<body>

    <div class="div-centre">
        <div class="div-centre-contenu">

            <h1>Présentation du BUT</h1>

            <div class="textInfo">

                <h3>C’est quoi un IUT ?</h3>

                <p>
                    L’ IUT (<strong>Institut Universitaire de Technologie</strong>) est un établissement d'étude supérieur dans lequel
                    on peut faire un BUT. Les formations qui y sont proposées ont, malheureusement, <strong>un nombre de place
                    limité</strong>. Ce sont donc des formations <strong>selectives</strong>.
                </p>
                <p>
                    Ces formations sont dites des formations courtes, car elles ont pour but de former à un emploi.
                    Elles sont aussi en général <strong>plus professionnalisantes</strong> et comportent aussi <strong>plus de travaux pratiques</strong>.
                    On apprend tout en faisant, c’est ce qui rend l’IUT super intéressant !
                </p>
                <h3>Et un BUT alors ?</h3>

                <p>
                    Le BUT (<strong>Bachelor Universitaire de Technologie</strong>) est une formation qui se fait à l’IUT en <strong>3 ans</strong>. 
                    Il a été crée en 2021. Il vient prendre la relève du DUT, qui était une équivalence des formations actuelles mais en moins poussée et qui se
                    faisait en 2 ans seulement.
                </p>
                <strong>
                    Bon ! Vous suivez toujours ? <br> Allez on va attaquer la partie qui vous intéresse le plus : Le BUT MMI !
                </strong>
            </div>

            <br />

            <form action="../../php/navigation/update_progression.php" method="post">

                <input type="hidden" name="next_page" value="présentation2.php">

                <button type="submit" id="goTo1" class="bouton_next" style="padding: 10px 100px 10px 100px">Suite</button>

            </form>
        </div>

    </div>

    <!-- js -->

    <!-- js -->

    <!-- php -->

    <!-- <div class="breadcrumb-container">
    <ul class="breadcrumb">
    <?php
    // $current_page = basename($_SERVER['PHP_SELF']);
    // $pages = [
    //     'présentation1.php' =>'Présentation 1',
    //     'présentation2.php' => 'Présentation 2',
    //     'quiz1.php' => 'Quiz 1',
    //     'présentation3.php'=>'Présentation 3',
    //     'quiz2.php' => 'quiz2.php',
    //     'présentation4.php' => 'Présentation 4',
    //     'présentation5.php' =>'Présentation 5',
    //     'quiz3.php' => 'Quiz 2',
    //     'présentation6.php'=> 'Présentation 6',
    //     ];
    // foreach ($pages as $page => $title) {
    //         echo '<li';
    //         if ($current_page == $page) {
    //             echo ' class="active"';
    //         }
    //         echo '><a href="' . $page . '">' . $title . '</a></li>';
    //     }
    //     
    ?>
    </ul>
</div> -->

</body>

</html>