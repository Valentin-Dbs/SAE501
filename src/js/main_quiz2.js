var questionsCorrectes = 0;
var tabQuestions = [
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
    window.location.href = "../html/présentation4.php";
  } else {
    var idQuestion = Math.floor(Math.random() * tabQuestions.length);

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

    var grpQuestionReponses = tabQuestions[idQuestion];
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

  var reponseChoisie; // variable pour stocker la réponse choisie

  switch (idReponse) {
    case 1:
      reponseChoisie = reponse1_courante;
      break;
    case 2:
      reponseChoisie = reponse2_courante;
      break;
    case 3:
      reponseChoisie = reponse3_courante;
      break;
    case 4:
      reponseChoisie = reponse4_courante;
      break;
  }

  // Préparez les données à envoyer
  var postData = {
    quiz_id: 2,
    question: question_courante,
    reponse_choisie: reponseChoisie, // Utilisez la variable reponseChoisie définie précédemment
    est_correcte: idReponse === idReponseCorrecte ? 1 : 0, // 1 si la réponse est correcte, 0 sinon
    temps_reponse: 33, // Remplacez par le temps passé sur la question
  };

  console.log(postData);

  // Utilisez AJAX pour envoyer les données au fichier PHP
  $.ajax({
    type: "POST",
    url: "../../php/quiz/insert_quiz_response.php",
    data: postData,
    success: function (response_choisie) {
      // Gérez la réponse du serveur ici (par exemple, affichez un message de confirmation)
      console.log(response_choisie);
    },
    error: function (xhr, status, error) {
      // Gérez les erreurs ici
      console.error(error);
    },
  });

  // Affichez le résultat
  if (idReponse == idReponseCorrecte) {
    zoneResultat.innerHTML = "Votre réponse est juste";
    questionsCorrectes++;
  } else {
    zoneResultat.innerHTML = "Votre réponse est fausse";
  }
}

presenterQuestion();