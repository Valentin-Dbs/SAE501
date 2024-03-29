var questionsCorrectes = 0;
var questionNumber = 0;
var listQuestionsValidees = [];
const tabQuestions = [
  [
    "Dans quel domaine peut-on apprendre à se servir d’un appareil photo ou d’une caméra ?",
    "Audiovisuel",
    "Animation",
    "Suite Adobe",
    "Développement de jeux vidéo",
    1
  ],
  [
    "Quels types de projets peuvent être faits en Audiovisuel ?",
    "Infographie",
    "Courts-métrages",
    "Construction de sites web",
    "Jeux vidéo",
    2
  ],
  [
    "Dans quel domaine apprend-on à utiliser une tablette et des logiciels de dessin ?",
    "Audiovisuel",
    "Animation et Dessin numérique",
    "Développement de jeux vidéo",
    "Développement back",
    2
  ],
  [
    "Qu’est-ce que la suite Adobe ?",
    "Un ensemble de logiciels dédié à la création",
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
    "Dans quel domaine peut-on apprendre à utiliser des logiciels de construction de sites?",
    "Développement de jeux vidéo",
    "Développement de site web",
    "Développement back",
    "Audiovisuel",
    2
  ],
  [
    "Dans quel domaine apprend-on à construire et coder une base de données ?",
    "Audiovisuel",
    "Animation",
    "Suite Adobe",
    "Développement back",
    4
  ]
];
const tabExplications = [
  [
    "Dans quel domaine peut-on apprendre à se servir d’un appareil photo ou d’une caméra ?",
    "Oui, les cours d'Audiovisuel permettent la manipulation d'appareils photo et de caméra (mais pas que...)",
    "Non, l'animation se centre principalement autour de l'utilisation des logiciels de la suite Adobe.",
    "Non, la Suite Adobe n'est pas un domaine d'apprentissage, mais un outil.",
    "Non, dans le développement de jeux vidéo se centre sur l'utilisation de la suite adobe (pour les réalisations graphiques) et de logiciels de programmation"
  ],
  [
    "Quels types de projets peuvent être faits en Audiovisuel ?",
    "Non, l'infographie se fait en création graphique",
    "Oui, les courts-métrages sont des projets qui peuvent être fait en Audiovisuel.",
    "Non, la construction de sites web est un projet qui se fait en développement web.",
    "Non, la réalisation de jeux vidéo est un projet qui se fait en partie en développement web et en partie en création graphique."
  ],
  [
    "Dans quel domaine apprend-on à utiliser une tablette et des logiciels de dessin ?",
    "Non, l'audiovisuel permet l'apprentissage du montage vidéo, du tournage, de la prise de son...",
    "Oui, l'animation et le dessin numérique permettent d'apprendre à utiliser les tablettes graphiques et les logiciels de dessin.",
    "Non, le développement de jeux vidéo se consacre sur l'apprentissage du code de jeux vidéo.",
    "Non, le développement back se consacre sur l'apprentissage du code back des site web."
  ],
  [
    "Qu’est-ce que la suite Adobe ?",
    "Oui, la suite Adobe est un ensemble de logiciels dédié à la création (aussi bien pour la vidéo, le vectoriel, le pixel, l'animation...)",
    "Non, la suite Adobe n'est pas uniquement un logiciel de montage photo et vidéo. En effet, il propose de nombreuses autres possibilités.",
    "Non, la suite Adobe peut être utilisée pour la réalisation d'assets pour développer des jeux vidéo, mais il ne s'agit pas d'un ensemble de langages de programmation.",
    "Non, la suite Adobe peut être utilisée pour la réalisation de maquettes lors d'un développement de site web, mais il ne s'agit pas d'un logiciel qui permet le développement de sites web."
  ],
  [
    "Quel domaine implique l'apprentissage de langages, logiciels et techniques pour les jeux vidéo ?",
    "Non, l'audiovisuel implique l'apprentissage technique de la réalisation de vidéos, le montage, la prise de son...",
    "Non, l'animation implique l'apprentissage de la suite Adobe et la maîtrise graphique.",
    "Non, la suite Adobe implique de création numérique.",
    "Oui ! Avouez qu'elle était facile celle-là !"
  ],
  [
    "Dans quel domaine peut-on apprendre à utiliser des logiciels de construction de sites tels que WordPress ?",
    "Non, en développement de jeux vidéo, nous apprenons principalement les langages de programmation.",
    "Oui, lors des cours en développement de site web, nous apprenons à utiliser les logiciels de construction de sites tels que WordPress (CMS)",
    "Non, le développement back se concentre sur l'apprentissage de la création de bases de données et de la mise en place de site, d'application et de jeux vidéo",
    "Non, en Audiovisuel, on se concentre sur l'apprentissage du montage vidéo, du tournage, de la prise de son..."
  ],
  [
    "Dans quel domaine apprend-on à construire et coder une base de données ?",
    "Non, en Audiovisuel, on se concentre sur l'apprentissage du montage vidéo, du tournage, de la prise de son...",
    "Non, l'animation implique l'apprentissage de la suite Adobe et la maîtrise graphique.",
    "Non, la suite Adobe implique de création numérique.",
    "Oui, le développement back se concentre sur l'apprentissage de la création de bases de données et de la mise en place de site, d'application et de jeux vidéo."
  ]
];

var question_courante;
var reponse1_courante;
var reponse2_courante;
var reponse3_courante;
var reponse4_courante;
var idReponseCorrecte;

var selectedButton = null;

var zoneCompteur = document.getElementById("compteur");
var zoneQuestion = document.getElementById("question");
var zoneReponse1 = document.getElementById("reponse1");
var zoneReponse2 = document.getElementById("reponse2");
var zoneReponse3 = document.getElementById("reponse3");
var zoneReponse4 = document.getElementById("reponse4");
var zoneSubmitter = document.getElementById("submitter");

var zoneResultat = document.getElementById("resultat");
var zoneExplication = document.getElementById("explication");
var zoneBoutonNext = document.getElementById("nextQuestion");

function setCounter(currentTotal) {
  zoneCompteur.innerHTML = "Questions validées : " + currentTotal + "/3";
}

function presenterQuestion() {
  if (selectedButton) {
    selectedButton.classList.remove('active');
    document.getElementById("submitter").style.display = "none";
  }

  for (let i = 1; i <= 4; i++) {
    const button = document.getElementById(`reponse${i}`);
    button.classList.remove('correct', 'incorrect');
  }

  tempsDebut = new Date();
  setCounter(questionsCorrectes);

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

    zoneResultat.style.visibility = "hidden";
    zoneExplication.style.visibility = "hidden";
    zoneBoutonNext.style.visibility = "hidden";

    zoneReponse1.disabled = false;
    zoneReponse2.disabled = false;
    zoneReponse3.disabled = false;
    zoneReponse4.disabled = false;
    zoneSubmitter.disabled = false;
    zoneReponse1.style.opacity = 1;
    zoneReponse2.style.opacity = 1;
    zoneReponse3.style.opacity = 1;
    zoneReponse4.style.opacity = 1;
    zoneSubmitter.style.opacity = 1;

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

function selectedReponse(index) {
  if (selectedButton) {
    selectedButton.classList.remove('active');
  }

  const button = document.getElementById(`reponse${index}`);
  button.classList.add('active');
  selectedButton = button;

  if (document.getElementById("submitter").style.display !== "inline-block") {
    document.getElementById("submitter").style.display = "inline-block";
  }
}

function setButtonColors(buttonValue) {
  const correctButton = document.getElementById(`reponse${idReponseCorrecte}`);
  const selectedButton = document.getElementById(`reponse${buttonValue}`);

  if (buttonValue === idReponseCorrecte) {
    selectedButton.classList.remove('active');
    selectedButton.classList.add('correct');
  } else {
    selectedButton.classList.remove('active');
    selectedButton.classList.add('incorrect');
    correctButton.classList.add('correct');
  }
}

function clickReponse(idReponse) {
  if (!selectedButton) {
    console.error("No active button selected");
    return;
  }

  const buttonValue = parseInt(selectedButton.value, 10);

  document.getElementById("submitter").style.display = "none"

  if (isNaN(buttonValue)) {
    console.error("Invalid button value");
    return;
  }

  zoneReponse1.disabled = true;
  zoneReponse2.disabled = true;
  zoneReponse3.disabled = true;
  zoneReponse4.disabled = true;
  zoneSubmitter.disabled = true;

  zoneSubmitter.style.opacity = 0.5;

  for (let i = 1; i <= 4; i++) {
    const opacityValue = i === buttonValue ? 1 : 0.5;
    document.getElementById(`reponse${i}`).style.opacity = opacityValue;
  }

  zoneResultat.style.visibility = "visible";
  zoneExplication.style.visibility = "visible";
  zoneBoutonNext.style.visibility = "visible";

  var reponseChoisie; // variable pour stocker la réponse choisie

  switch (buttonValue) {
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
    default:
      console.error("Invalid button value");
      return;
  }

  var tempsFin = new Date(); // Enregistrez le temps de fin
  var tempsReponse = (tempsFin - tempsDebut) / 1000; // Calcul du temps de réponse en secondes

  // Préparez les données à envoyer
  var postData = {
    quiz_id: 3,
    question: question_courante,
    reponse_choisie: reponseChoisie, // Utilisez la variable reponseChoisie définie précédemment
    est_correcte: idReponse === idReponseCorrecte ? 1 : 0, // 1 si la réponse est correcte, 0 sinon
    temps_reponse: tempsReponse,
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
  if (buttonValue === idReponseCorrecte) {
    zoneResultat.innerHTML = "Votre réponse est juste";
    // Ajouter le nouvel idQuestion à listQuestionsValidees
    listQuestionsValidees.push(idQuestion);
    questionsCorrectes++;
    setCounter(questionsCorrectes);
  } else {
    zoneResultat.innerHTML = "Votre réponse est fausse";
  }

  setButtonColors(buttonValue);

  // Afficher l'explication
  const explication = tabExplications[questionNumber][buttonValue];
  zoneExplication.innerHTML = explication;
}

// Fonction pour le popup de confirmation
function confirmLogout() {
  var confirmed = confirm("Êtes-vous certain de vouloir abandonner le quiz? Vous pouvez le recommancer à tout moment.");

  if (confirmed) {
      document.getElementById("logoutForm").submit();
  }
}

presenterQuestion();
