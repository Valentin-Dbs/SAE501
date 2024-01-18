<!-- session -->

<?php include('../../php/auth/check_session.php'); ?>

<!-- session -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../../style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>Site Parcousup</title>
</head>

<body>

  <!-- question -->

  <div class="div-centre">
    <div>
      <div id="compteur">

      </div>
      <div id="question" class="texte_question">Emplacement question</div>

      <div id="Reponses">

        <button id="reponse1" class="texte_reponse ourbtn" onClick="selectedReponse(1);" value="1">
          Emplacement réponse 1
        </button>

        <button id="reponse2" class="texte_reponse ourbtn" onClick="selectedReponse(2);" value="2">
          Emplacement réponse 2
        </button>

        <button id="reponse3" class="texte_reponse ourbtn" onClick="selectedReponse(3)" value="3">
          Emplacement réponse 3
        </button>

        <button id="reponse4" class="texte_reponse ourbtn" onClick="selectedReponse(4)" value="4">
          Emplacement réponse 4
        </button>

      </div>

      <button id="submitter" class="texte_reponse ourbtn" onClick="clickReponse()">
          Confirmer

      </button>

      <div id="resultat" class="texte_resultat">Zone résultat</div>
      <div id="explication" class="texte_resultat"></div>

      <button id="nextQuestion" class="bouton_next ourbtn" onClick="presenterQuestion()">
        Question suivante
      </button>
    </div>

    <form id="logoutForm" action="../../php/auth/deconnexion.php" method="post">
        <button type="button" onclick="confirmLogout()" class="link-style">Abandonner le quiz</button>
    </form>

  </div>

  <!-- question -->

  <!-- js -->

  <script src="../js/main_quiz3.js"></script>

  <!-- js -->


</body>

</html>