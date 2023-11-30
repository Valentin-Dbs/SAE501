var questionsCorrectes = 0;
var questionNumber = 0;
var listQuestionsValidees = [];
var tabQuestions = [
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
    "Audiovisuel",
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
var tabExplications = [
  [
    "Dans quel domaine peut-on apprendre à se servir d’un appareil photo ou d’une caméra?",
    "Oui, les cours d'Audiovisuel permettent la manipulation d'appareils photo et de caméra (mais pas que...)",
    "Non, l'animation se centre principalement autour de l'utilisation des logiciel de la suite Adobe",
    "Non, la Suite Adobe n'est pas un domaine d'apprentissage mais un outil",
    "Non, dans le développement de jeux vidéo se centre sur l'utilisatin de la suite adobe (pour les réalisations graphiques) et de logiciels de programmation"
  ],
  [
    "Quels types de projets peuvent être fait en Audiovisuel ?",
    "Non, le montage photo se fait en création raphique",
    "Oui, les court-métrages sont des projets qui peuvent être fait en Audiovisuel",
    "Non, la construction de sites web est un projet qui se fait en développement web",
    "Non, la réalisation de jeux vidéo est un projet qui se fait en partie en développement web et en partien en création graphique"
  ],
  [
    "Dans quel domaine apprend-on à utiliser une tablette et des logiciels de dessin ?",
    "Non, l'audiovisuel permet l'apprentissage du montage vidéo, du tournage, de la prise de son...",
    "Oui, l'animation et le dessin numérique permettent d'apprendre à utiliser les tablettes graphiques et les logiciels de dessin",
    "Non, le développement de jeux vidéo se consacre sur l'apprentissage du code de jeux vidéo",
    "Non, le développement back se consacre sur l'apprentissage du code back des site web"
  ],
  [
    "Qu’est-ce que la suite Adobe? ",
    "Oui, la suite Adobe est un ensemble de logiciel dédié à la création (aussi bien pour la vidéo, le vectoriel, le pixel, l'animation...)",
    "Non, la suite Adobe n'est pas uniquement un logiciel de montage photo et vidéo. En effet, il propose de nombreux autres possibilités",
    "Non, la suite Adobe peut être utilisé pour la réalisation d'assets pour développer des jeux vidéo, mais il ne s'agit pas d'un ensemble de langages de programmation",
    "Non, la suite Adobe peut être utilisé pour la réalisation de maquettes lors d'un développement de site web, mais il ne s'agit pas d'un logiciel qui permet le développement de sites web"
  ],
  [
    "Quel domaine implique l'apprentissage de langages, logiciels et techniques pour les jeux vidéo ?",
    "Non, l'audiovisuel implique l'apprentissage technique de la réalisation de vidéos, le montage, la prise de son...",
    "Non l'animation implique l'apprentissage de la suite Adobe et la maitrise graphique",
    "Non,la suite Adobe implique de création numérique",
    "Oui ! Avouez elle était facile celle-là !"
  ],
  [
    "Où peut-on apprendre à utiliser des logiciels de construction de site tels que WordPress ?",
    "Non, en développement de jeux vidéo nous apprenons principalement les languages de programmation",
    "Oui, lors des cours en développement de site web, nous apprenons à utliser les logiciles de construction de site tels que WordPress (CMS)",
    "Non, le développement Back se concentre sur l'apprentissage de la création de bases de données et de la mise en place de site, d'application et de jeux vidéo",
    "Non, en Audiovisuel on se concentre sur l'apprentissage du montage vidéo, du tournage, de la prise de son..."
  ],
  [
    "Dans quel domaine apprend-on à construire et coder une base de données ?",
    "Non, en Audiovisuel on se concentre sur l'apprentissage du montage vidéo, du tournage, de la prise de son...",
    "Non l'animation implique l'apprentissage de la suite Adobe et la maitrise graphique",
    "Non,la suite Adobe implique de création numérique",
    "Oui, le développement Back se concentre sur l'apprentissage de la création de bases de données et de la mise en place de site, d'application et de jeux vidéo"
  ],
  [
    "Quel outil est mentionné comme un logiciel pour créer des boutiques en ligne ?",
    "Non,la suite Adobe est un ensemble de logiciel dédié à la création (aussi bien pour la vidéo, le vectoriel, le pixel, l'animation...)",
    "Non, bien qu'il soit possible d'utiliser WordPress pour créer des boutiques en ligne, il ne s'agit pas du CMS le plus efficace",
    "Oui, Prestashop est le le CMS le plus efficace pour faire créer des boutiques en ligne.",
    "Non, la suite Microsoft est un GAFAM qui cherche à diriger le monde."
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
var zoneExplication = document.getElementById("explication");
var zoneBoutonNext = document.getElementById("nextQuestion");

function presenterQuestion() {
  if (questionsCorrectes == 3) {
    // Mettre à jour la progression
    $.ajax({
      type: "POST",
      url: "../../php/navigation/update_progression.php",
      data: { next_page: 'présentation6.php' },
      success: function () {
        // Rediriger l'utilisateur vers la prochaine page après la mise à jour de la progression
        window.location.href = "../../src/html/présentation6.php";
      },
      error: function (xhr, status, error) {
        // Gérer les erreurs ici
        console.error(error);
      }
    });
  } else {
    do {
      idQuestion = Math.floor(Math.random() * tabQuestions.length);
    } while (listQuestionsValidees.includes(idQuestion));

    questionNumber = idQuestion;
    console.log("Le numéro de la question est : " + questionNumber);

    zoneResultat.style.visibility = "hidden";
    zoneExplication.style.visibility = "hidden";
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
  zoneExplication.style.visibility = "visible";
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
    quiz_id: 3,
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
    // Ajouter le nouvel idQuestion à listQuestionsValidees
    listQuestionsValidees.push(idQuestion);
    questionsCorrectes++;
  } else {
    zoneResultat.innerHTML = "Votre réponse est fausse";
  }
  // Afficher l'explication
  const explication = tabExplications[questionNumber][idReponse];
  zoneExplication.innerHTML = explication;
}

presenterQuestion();
