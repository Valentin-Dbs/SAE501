var questionsCorrectes = 0;
var tabQuestions = [
  ["Quelle est la durée d'un BUT ?", "1 an", "2 ans", "3 ans", "4 ans", 3],
  [
    "Quest-ce qu'un IUT ?",
    "Une université classique",
    "Un institut universitaire de technologie ",
    "Une école d'ingénieurs",
    "Une école de commerce",
    2,
  ],
  [
    "Comment les formations à l'IUT se comparent-elles à celles de l'université ?",
    "Plus longues",
    "Plus théoriques",
    "Plus pratiques",
    "Moins professionnalisante",
    3,
  ],
  [
    "Pourquoi les formations à l'IUT sont-elles sélectives ?",
    "Parce qu'elles sont plus courtes",
    "Parce qu'elles sont moins chères",
    "Parce qu'elles ont un nombre limité de places disponibles",
    "Parce qu'elles sont ouvertes à tout le monde",
    3,
  ],
  [
    "Que pouvez-vous faire après avoir suivi un cursus à l'IUT ?",
    "Entrer dans une entreprise uniquement",
    "Continuer ses études uniquement",
    "L’un ou l’autre",
    "Rien du tout",
    3,
  ],
  [
    "Que veut dire MMI ?",
    "Métiers du Multimédia et de l’Internet",
    "Mouvement Médiatique et Informatif",
    "Mécanique des Médias et de l’Informatique",
    "Multimédia et Métiers de l’Internet",
    1,
  ],
  [
    "Quelles compétences peut-on acquérir en suivant le BUT MMI ?",
    "Création de sites internet, développement d’application et jeux vidéo uniquement",
    "Création numérique, création de publicités, et communication uniquement",
    "Gestion de projets uniquement",
    "Un peu de tout ça : MMI est un vrai couteau suisse",
    4,
  ],
  [
    "Combien de parcours de spécialisation sont disponibles en MMI ?",
    "1",
    "2",
    "3",
    "4",
    3,
  ],
  [
    "Quels sont les parcours de spécialisation disponibles dans la formation MMI ?",
    "Création numérique et développement web",
    "Développement web et stratégie de communication",
    "Création numérique et stratégie de communication",
    "Création numérique, développement web et Stratégie de communication",
    4,
  ],
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
    window.location.href = "../html/présentation3.php";
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
    quiz_id: 1,
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
