<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@400;700&display=swap" />
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <title>Site Parcousup</title>
</head>

<body>

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

    <!-- session -->

    <?php include('../../php/auth/check_session.php'); ?>

    <!-- session -->

    <div class="div-centre">
        <div class="div-centre-contenu">
            <h1>Présentation du BUT</h1>
            <div class="textInfo">
                <h3>C’est quoi un IUT ?</h3>

                <p>
                    L’ IUT (Institut Universitaire de Technologie) est un établissement d'étude supérieur dans lequels
                    on peut faire un BUT. Les formations qui y sont proposées ont, malheureusement, un nombre de place
                    limité. Ce sont donc des formations selectives.
                </p>
                <p>
                    Ces formations y sont aussi plus professionnalisantes et comporte aussi plus de travaux pratiques.
                    On apprend tout en faisant, c’est ce qui rend l’IUT super intéressant !
                </p>
                <h3>Et un BUT alors ?</h3>

                <p>
                    Le BUT (Bachelor Universitaire de Technologie) est une formation qui se fait à l’IUT en 3 ans. Il a
                    été crée en 2021. Il vient prendre la relève du DUT, qui était une formation moins poussée qui se
                    faisait en 2 ans seulement.
                </p>
                <strong>
                    Bon ! Vous suivez toujours ? Allez on va attaquer la partie qui vous intéresse le plus : Le BUT MMI !
                </strong>
            </div>
            <br />
            <form action="../../php/navigation/update_progression.php" method="post">
                <input type="hidden" name="next_page" value="présentation2.php">
                <button type="submit" id="goTo1" class="bouton_next"
                    style="padding: 10px 100px 10px 100px">Suite</button>
            </form>
        </div>

    </div>

    <!-- js -->

    <!-- js -->

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