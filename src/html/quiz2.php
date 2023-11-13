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
  var tabQuestions2 = [
    [
      "Quel est le métier qui n’est pas un débouché de MMI ?",
      "Chirurgien",
      "Réalisateur",
      "Game Designer",
      "Développeur Web",
      1
    ],
    [
      "Quels sont les métiers potentiels pour les amoureux des graphismes et de l'audiovisuel issus du BUT MMI ?",
      "Agence publicitaire ou de communication",
      "Développement web",
      "Programmation d'applications",
      "Sécurité informatique",
      1
    ],
    [
      "Quels débouchés sont mentionnés pour les passionnés du développement informatique ?",
      "Marketing et stratégie de communication",
      "Programmation d'applications",
      "Gestion des médias sociaux",
      "Sécurité informatique",
      2
    ],
    [
      "Où peut travailler un webmestre en fonction de ses centres d'intérêt ?",
      "Journalisme",
      "Bâtiment et travaux publics (BTP)",
      "Édition, librairie, bibliothèque",
      "Énergie",
      1
    ],
    [
      "Quel professionnel améliore l'expérience des utilisateurs en simplifiant la navigation en ligne ?",
      "Développeur informatique",
      "Animateur 2D",
      "Concepteur multimédia",
      "UX designer",
      4
    ],
    [
      "Quels domaines professionnels sont associés au métier d'UX designer?",
      "WebDesigner",
      "Réalisateur",
      "Agriculture",
      "Journalisme",
      1
    ],
    [
      "Quel métier consiste à donner vie à des images dessinées sur papier ou tablette?",
      "Développeur informatique",
      "Animateur 2D",
      "Concepteur multimédia",
      "Webmaster",
      2
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
      window.location.href = "présentation4.php";
    } else {
      var idQuestion = Math.floor(Math.random() * tabQuestions2.length);

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

      var grpQuestionReponses = tabQuestions2[idQuestion];
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
      console.log(questionsCorrectes);
    } else {
      zoneResultat.innerHTML = "Votre reponse est fausse";
    }
  }

  presenterQuestion();
</script>

</html>