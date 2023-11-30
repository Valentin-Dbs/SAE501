var questionsCorrectes = 0;
var questionNumber = 0;
var listQuestionsValidees = [];
var tabQuestions = [
  ["Quelle est la durée d'un BUT ?", "1 an", "2 ans", "3 ans", "4 ans", 3],
  [
    "Qu'est-ce qu'un IUT ?",
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
  ]
];
var tabExplications = [
  [
    "Quelle est la durée d'un BUT ?",
    "Ce n'est pas la bonne réponse.",
    "Le diplôme durait bien deux ans lorsque c'était encore un DUT, mais depuis la réforme ça n'est plus le cas.",
    "Depuis la réforme de 2021, le DUT de deux ans a changé en BUT de trois ans.",
    "Ce n'est pas la bonne réponse."
  ],
  [
    "Qu'est-ce qu'un IUT ?",
    "Relisez bien le nom...",
    "C'est indiqué dans le nom. L'anagramme d'institut universitaire de technologie est IUT.",
    "Relisez bien le nom...",
    "Relisez bien le nom..."
  ],
  [
    "Comment les formations à l'IUT se comparent-elles à celles de l'université ?",
    "En ce qui concerne le premier diplôme que vous obtiendrez, le temps d'études sera de la même durée en université qu'à l'IUT.",
    "Vous apprendrez certes de la théorie, mais ça ne constituera pas la majorité de vos études.",
    "Tout au long de votre formation, vous serez confrontés à des cas pratiques qui simulent des situations professionnelles afin de vous donner de l'expérience dans le domaine du multimédia.",
    "L'IUT a pour but de vous former afin de pouvoir directement intégrer le milieu professionnel dès l'obtention de votre diplôme."
  ],
  [
    "Pourquoi les formations à l'IUT sont-elles sélectives ?",
    "La durée d'une formation est rarement en rapport avec sa sélectivité.",
    "Ce n'est pas le prix de la formation qui est le facteur principal de sa sélectivité.",
    "Les places sont, en effet, très limités. En 2023 par exemple, seuls 59 étudiants ont pu intégrer la formation MMI.",
    "Au contraire, cela rendrait la formation bien plus accessible."
  ],
  [
    "Que pouvez-vous faire après avoir suivi un cursus à l'IUT ?",
    "Vous pouvez tout à fait entrer dans une entreprise après avoir obtenu votre diplôme, mais ce n'est pas la seule option qui vous est disponible.",
    "Vous pouvez tout à fait poursuivre vos études en écoles supérieures après avoir obtenu votre diplôme, mais ce n'est pas la seule option qui vous est disponible",
    "Un diplôme MMI vous offre plusieurs voies à son obtention. Vous pouvez décider d'intégrer une entreprise immédiatement, ou bien vous pouvez poursuivre vos études dans des écoles supérieures.",
    "Un diplôme qui vous empêche de poursuivre dans vos études ou qui n'a aucune valeur professionnelle n'est pas très utile, vous ne trouvez pas ?"
  ],
  [
    "Que veut dire MMI ?",
    "Comme son nom l'indique, ce diplôme vous forme aux métiers du multimédia et de l'internet",
    "Rappelez-vous de ce qui est enseigné durant cette formation, et ce à quoi cela vous forme...",
    "Rappelez-vous de ce qui est enseigné durant cette formation, et ce à quoi cela vous forme...",
    "Vous êtes sur la bonne voie, mais ce n'est pas exactement ça."
  ],
  [
    "Quelles compétences peut-on acquérir en suivant le BUT MMI ?",
    "Ce sont certes des compétences que vous pouvez acquérir, mais ce ne sont pas les seules...",
    "Ce sont certes des compétences que vous pouvez acquérir, mais ce ne sont pas les seules...",
    "Ce sont certes des compétences que vous pouvez acquérir, mais ce ne sont pas les seules...",
    "Le milieu du multimédia étant très vaste, cette formation vous présente plusieurs domaines différents. Vous pourrez vous spécialiser par la suite en deuxième année."
  ],
  [
    "Combien de parcours de spécialisation sont disponibles en MMI ?",
    "Ce n'est pas la bonne réponse.", "Ce n'est pas la bonne réponse.",
    "En deuxième année, vous pouvez choisir entre trois parcours de spécialisation qui offrent chacun différentes compétences.",
    "Ce n'est pas la bonne réponse."
  ],
  [
    "Quels sont les parcours de spécialisation disponibles dans la formation MMI ?",
    "Ce n'est pas la bonne réponse.",
    "Ce n'est pas la bonne réponse.",
    "Ce n'est pas la bonne réponse.",
    "En deuxième année, vous pouvez choisir entre le parcours création numérique, le parcours stratégie de communication numérique et design d'expérience et le parcours développement Web et dispositifs interactifs. Attention, certains IUT ne proposent pas toutes les formations, alors prennez garde à cela lorsque vous faites vos choix d'établissement !"
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
  tempsDebut = new Date();
  if (questionsCorrectes == 3) {
    // Mettre à jour la progression
    $.ajax({
      type: "POST",
      url: "../../php/navigation/update_progression.php",
      data: { next_page: 'présentation3.php' },
      success: function () {
        // Rediriger l'utilisateur vers la prochaine page après la mise à jour de la progression
        window.location.href = "../../src/html/présentation3.php";
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

  var tempsFin = new Date(); // Enregistrez le temps de fin
  var tempsReponse = (tempsFin - tempsDebut) / 1000; // Calcul du temps de réponse en secondes

  // Préparez les données à envoyer
  var postData = {
    quiz_id: 1,
    question: question_courante,
    reponse_choisie: reponseChoisie, // Utilisez la variable reponseChoisie définie précédemment
    est_correcte: idReponse === idReponseCorrecte ? 1 : 0, // 1 si la réponse est correcte, 0 sinon
    temps_reponse: tempsReponse, // Remplacez par le temps passé sur la question
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
