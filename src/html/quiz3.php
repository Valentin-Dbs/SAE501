<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../../style.css">
  <title>Site Parcousup</title>
</head>

<body>
  <div class="div-centre">
    <div>
      <div id="question" class="texte_question">Emplacement question</div>
      <div id="Reponses">
        <button id="reponse1" class="texte_reponse" onClick="clickReponse(1);">
          Emplacement réponse 1
        </button>
        <button id="reponse2" class="texte_reponse" onClick="clickReponse(2);">
          Emplacement réponse 2
        </button>
        <button id="reponse3" class="texte_reponse" onClick="clickReponse(3)">
          Emplacement réponse 3
        </button>
        <button id="reponse4" class="texte_reponse" onClick="clickReponse(4)">
          Emplacement réponse 4
        </button>
      </div>
      <div id="resultat" class="texte_resultat">Zone résultat</div>
      <button id="nextQuestion" class="bouton_next" onClick="presenterQuestion()">
        Question suivante
      </button>
    </div>

  </div>

</body>

<script type="text/javascript">
  var questionsCorrectes = 0;
  var tabQuestions3 = [
    [
      "Dans quel domaine peut-on apprendre à se servir d’un appareil photo ou d’une caméra?",
      "Audiovisuel",
      "Animation",
      "Suite Adobe",
      "Développement de jeux vidéo",
      1
    ],
    [
      "Quels types de projets peuvent être fait en Audiovisuel ?",
      "Montage photo",
      "Court-métrages",
      "Construction de sites web",
      "Jeux vidéo",
      2
    ],
    [
      "Dans quel domaine apprend-on à utiliser une tablette et des logiciels de dessin ?",
      "Audiovisuel",
      "Animation et Dessin numérique",
      "Développement de jeux vidéo",
      "Développement Back",
      2
    ],
    [
      "Qu’est-ce que la suite Adobe? ",
      "Un ensemble de logiciel dédié à la création",
      "Un logiciel de montage photo et vidéo",
      "Un ensemble de langages de programmation pour développer des jeux vidéo",
      "Un logiciel qui permet le développement de sites web",
      1
    ],
    [
      "Quel domaine implique l'apprentissage de langages, logiciels et techniques pour les jeux vidéo ?",
      "Audiovisuel",
      "Animation",
      "Suite Adobe",
      "Développement de jeux vidéo",

      4
    ],
    [
      "Où peut-on apprendre à utiliser des logiciels de construction de site tels que WordPress ?",
      "Développement de jeux vidéo",
      "Développement de site web",
      "Développement Back",
      "E-boutique",
      2
    ],
    [
      "Dans quel domaine apprend-on à construire et coder une base de données ?",
      "Audiovisuel",
      "Animation",
      "Suite Adobe",
      "Développement Back",
      4
    ],
    [
      "Quel outil est mentionné comme un logiciel pour créer des boutiques en ligne ?",
      "Adobe",
      "WordPress",
      "Prestashop",
      "Suite Microsoft",
      3
    ]
  ];

  var question_courante;
  var reponse1_courante;
  var reponse2_courante;
  var reponse3_courante;
  var reponse4_courante;
  var idReponseCorrecte;

  var zoneQuestion = document.getElementById("question");
  var zoneReponse1 = document.getElementById("reponse1");
  var zoneReponse2 = document.getElementById("reponse2");
  var zoneReponse3 = document.getElementById("reponse3");
  var zoneReponse4 = document.getElementById("reponse4");

  var zoneResultat = document.getElementById("resultat");
  var zoneBoutonNext = document.getElementById("nextQuestion");

  function presenterQuestion() {
    if (questionsCorrectes == 3) {
      window.location.href = "présentation6.php";
    } else {
      var idQuestion = Math.floor(Math.random() * tabQuestions3.length);

      zoneResultat.style.visibility = "hidden";
      zoneBoutonNext.style.visibility = "hidden";

      zoneReponse1.disabled = false;
      zoneReponse2.disabled = false;
      zoneReponse3.disabled = false;
      zoneReponse4.disabled = false;
      zoneReponse1.style.opacity = 1;
      zoneReponse2.style.opacity = 1;
      zoneReponse3.style.opacity = 1;
      zoneReponse4.style.opacity = 1;

      var grpQuestionReponses = tabQuestions3[idQuestion];
      question_courante = grpQuestionReponses[0];
      reponse1_courante = grpQuestionReponses[1];
      reponse2_courante = grpQuestionReponses[2];
      reponse3_courante = grpQuestionReponses[3];
      reponse4_courante = grpQuestionReponses[4];
      idReponseCorrecte = grpQuestionReponses[5];

      zoneQuestion.innerHTML = question_courante;
      zoneReponse1.innerHTML = reponse1_courante;
      zoneReponse2.innerHTML = reponse2_courante;
      zoneReponse3.innerHTML = reponse3_courante;
      zoneReponse4.innerHTML = reponse4_courante;
    }
  }

  function clickReponse(idReponse) {
    zoneReponse1.disabled = true;
    zoneReponse2.disabled = true;
    zoneReponse3.disabled = true;
    zoneReponse4.disabled = true;
    if (idReponse != 1) zoneReponse1.style.opacity = 0.5;
    if (idReponse != 2) zoneReponse2.style.opacity = 0.5;
    if (idReponse != 3) zoneReponse3.style.opacity = 0.5;
    if (idReponse != 4) zoneReponse4.style.opacity = 0.5;

    zoneResultat.style.visibility = "visible";
    zoneBoutonNext.style.visibility = "visible";

    //  zoneReponse1.innerHTML = reponse1_courante;
    if (idReponse == idReponseCorrecte) {
      zoneResultat.innerHTML = "Votre reponse est juste";
      questionsCorrectes++;
    } else {
      zoneResultat.innerHTML = "Votre reponse est fausse";
    }
  }

  presenterQuestion();
</script>

</html>