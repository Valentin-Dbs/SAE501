var questionsCorrectes = 0;
var questionNumber = 0;
var listQuestionsValidees = [];
const tabQuestions = [
  [
    "Quel type de projet les Animateur 2D/3D ne réalisent-ils pas?",
    "Des dessins animés",
    "Des sites web",
    "Des animations",
    "Des logos animés",
    2
  ],
  [
    "Qu'apprend-t-on dans la formation MMI qui prépare au métier d'animateur 2D/3D?",
    "Des langages pour coder des application",
    "Comment produire des infographies",
    "Comment animer des logo et personnages",
    "Comment analyser les besoins utilisateur",
    3
  ],
  [
    "Quel parcours MMI est conseillé pour devenir Animateur 2D/3D?",
    "Création Numérique",
    "Développement Web",
    "Stratégies de communication",
    "Ce n'était pas écrit",
    1
  ],
  [
    "Quel est le métier qui n’est pas un débouché de MMI ?",
    "Chirurgien",
    "Réalisateur",
    "Game Designer",
    "Développeur Web",
    1
  ],
  [
    "Que fait le Concepteur Multimedia?",
    "Développe des applications",
    "Produit des affiches et flyers",
    "Gère et organise les projets",
    "Produit du contenu multimédia",
    4
  ],
  [
    "Qu'apprend-t-on dans la formation MMI qui prépare au métier de concepteur multimédia?",
    "Des langages pour coder des application",
    "Comment produire des infographies et vidéo",
    "Comment animer des logo et personnages",
    "Comment analyser les besoins utilisateur",
    2
  ],
  [
    "Quel parcours MMI est conseillé pour devenir Concepteur Multimedia?",
    "Création Numérique",
    "Développement Web",
    "Stratégies de communication",
    "Ce n'était pas écrit",
    1
  ],
  [
    "Que fait un Développeur d'application mobile?",
    "Gère et organise les projets",
    "Produit des affiches et flyers",
    "Produit du contenu multimédia",
    "Développe des applications",
    4
  ],
  [
    "Qu'apprend-t-on dans la formation MMI qui prépare au métier de Développeur d'application mobile?",
    "Des langages pour coder des application",
    "Comment produire des infographies et vidéo",
    "Comment animer des logo et personnages",
    "Comment analyser les besoins utilisateur",
    1
  ],
  [
    "Quel parcours MMI est conseillé pour devenir Développeur d'application mobile?",
    "Création Numérique",
    "Développement Web",
    "Stratégies de communication",
    "Ce n'était pas écrit",
    2
  ],
  [
    "Que fait le Développeur Full-Stack dans le développement d'un site web?",
    "Il ne développe pas de site",
    "La programmation",
    "Les graphismes",
    "Les deux",
    4
  ],
  [
    "Quel parcours MMI est conseillé pour devenir Développeur Full-Stack?",
    "Création Numérique",
    "Développement Web",
    "Stratégies de communication",
    "Ce n'était pas écrit",
    2
  ],
  [
    "Que fait l'UX Designer?",
    "Il analyse les besoins utilisateur",
    "Il programme des applications",
    "Il design des site web",
    "Il produit des vidéos",
    1
  ],
  [
    "Quel parcours MMI est conseillé pour devenir UX Designer?",
    "Création Numérique",
    "Développement Web",
    "Stratégies de communication",
    "Ce n'était pas écrit",
    3
  ],
];
const tabExplications = [
  [
    "Quel type de projet les Animateur 2D/3D ne réalisent-ils pas?",
    "Les animateur 2D/3D peuvent totalement réaliser des dessins animés dans leur métier.",
    "En effet cela ne fait pas partie de leurs attribution.",
    `...un "Animateur" 2D/3D fait bien des animations... est-tu sûr d'avoir bien lu la question? `,
    "Un animateur 2D/3D peut se voir demander d'animer un logo",
  ],
  [
    "Qu'apprend-t-on dans la formation MMI qui prépare au métier d'animateur 2D/3D?",
    "C'est plutôt ce qui prépare au métier de développeur d'applications",
    "Non cela prépare plus à devenir concepteur multimédia",
    "En effet !",
    "C'est ce qui permettra de devenir UX Designer",
  ],
  [
    "Quel parcours MMI est conseillé pour devenir Animateur 2D/3D?",
    "Oui ! Bien joué",
    "Errr non loupé. N'hésite pas a revenir en arrière si tu ne te souvient plus",
    "Errr non loupé. N'hésite pas a revenir en arrière si tu ne te souvient plus",
    "Ah vraiment ?! Tu est sur d'avoir bien tout lu?",
  ],
  ["Quel est le métier qui n’est pas un débouché de MMI ?",
    "Eh non en effet ! Bizarrement, le BUT MMI ne prépare pas à être médecin ou chirurgien.",
    "En MMI, nous apprenons à réaliser des vidéos, courts-métrages et publicités. Il prépare donc tout naturellement à devenir réalisateur.",
    "Vous pouvez tout à fait devenir Game Designer après votre BUT. MMI nous donne les notions de graphismes et de programmation nécessaire à ce métier.",
    "Si vous êtes dans le parcours Développement web et dispositifs interactifs, devenir développeur web est une suite logique du parcours."
  ],
  [
    "Que fait le Concepteur Multimedia?",
    "Loupé ! ça c'est le travail des développeurs d'applications.",
    "Et bien non le concepteur multimédia produit des travaux qui se retrouveront sur internet (site web, resaux sociaux...)",
    "C'est plutôt quelque chose qui ce fait en tant que chef de projet",
    "Oui tout à fait !",
  ],
  [
    "Qu'apprend-t-on dans la formation MMI qui prépare au métier de concepteur multimédia?",
    "C'est plutôt ce qui prépare au métier de développeur d'applications",
    "Oui bravo !",
    "Non ça prépare plus au métier d'animateur 2D/3D",
    "C'est ce qui permettra de devenir UX Designer",
  ],
  [
    "Quel parcours MMI est conseillé pour devenir Concepteur multimédia?",
    "Oui ! Bien joué",
    "Errr non loupé. N'hésite pas a revenir en arrière si tu ne te souvient plus",
    "Errr non loupé. N'hésite pas a revenir en arrière si tu ne te souvient plus",
    "Ah vraiment ?! Tu est sur d'avoir bien tout lu?",
  ],
  [
    "Que fait un Développeur d'application mobile?",
    "C'est plutôt quelque chose qui ce fait en tant que chef de projet",
    "Mmmh pas du tout non... ",
    "ça c'est plus le travail d'un concepteur multimédia",
    "Oui... Logique XD !",
  ],
  [
    "Qu'apprend-t-on dans la formation MMI qui prépare au métier de Développeur d'application mobile?",
    "Oui bravo !",
    "Non cela prépare plus à devenir concepteur multimédia",
    "Non ça prépare plus au métier d'animateur 2D/3D",
    "C'est ce qui permettra de devenir UX Designer",
  ],
  [
    "Quel parcours MMI est conseillé pour devenir Développeur d'application mobile?",
    "Errr non loupé. N'hésite pas a revenir en arrière si tu ne te souvient plus",
    "Oui ! Bien joué",
    "Errr non loupé. N'hésite pas a revenir en arrière si tu ne te souvient plus",
    "Ah vraiment ?! Tu est sur d'avoir bien tout lu?",
  ],
  [
    "Que fait le Développeur Full-Stack dans le développement d'un site web?",
    "Pas de chance, il les développe justement de A à Z !",
    "Oui mais pas seulement",
    "Oui mais pas seulement",
    "Oui en effet ! Trop fort les Développeurs Full-Stack.",
  ],
  [
    "Quel parcours MMI est conseillé pour devenir Développeur d'application mobile?",
    "Errr non loupé. N'hésite pas a revenir en arrière si tu ne te souvient plus",
    "Oui ! Bien joué",
    "Errr non loupé. N'hésite pas a revenir en arrière si tu ne te souvient plus",
    "Ah vraiment ?! Tu est sur d'avoir bien tout lu?",
  ],
  [
    "Que fait l'UX Designer?",
    "Oui et après avoir analysé les besoins utilisateur il va utiliser ces données pour proposer un produit adapté à leurs besoins.",
    "Nope, ce n'est pas son rôle",
    "Nope, ce n'est pas son rôle",
    "C'est plutôt le rôle d'un concepteur multimédia",
  ],
  [
    "Quel parcours MMI est conseillé pour devenir UX Designer?",
    "Errr non loupé. N'hésite pas a revenir en arrière si tu ne te souvient plus",
    "Errr non loupé. N'hésite pas a revenir en arrière si tu ne te souvient plus",
    "Oui ! Bien joué",
    "Ah vraiment ?! Tu est sur d'avoir bien tout lu?",
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
      data: { next_page: 'présentation4.php' },
      success: function () {
        // Rediriger l'utilisateur vers la prochaine page après la mise à jour de la progression
        window.location.href = "../../src/html/présentation4.php";
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
    quiz_id: 2,
    question: question_courante,
    reponse_choisie: reponseChoisie, // Utilisez la variable reponseChoisie définie précédemment
    est_correcte: idReponse === idReponseCorrecte ? 1 : 0, // 1 si la réponse est correcte, 0 sinon
    temps_reponse: tempsReponse, // Remplacez par le temps passé sur la question, // Remplacez par le temps passé sur la question
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
