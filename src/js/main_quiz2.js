var questionsCorrectes = 0;
var questionNumber = 0;
var listQuestionsValidees = [];
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
    "Il peut travailler dans tous les domaines qui ont besoin d'un site web",
    4
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
    "Tout comme le Webmaster, l'UX designer peut travailler dans tous les domaines qui ont besoin d'un site web ",
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

var tabExplications = [
  ["Quel est le métier qui n’est pas un débouché de MMI ?",
    "Eh non en effet ! Bizarrement, le BUT MMI ne prépare pas à être médecin ou chirurgien",
    "En MMI nous apprenons à réaliser des vidéos, courts-métrages et publicités. Il prépare donc tout naturellement à devenir réalisateur",
    "Vous pouvez tout à fait devenir Game Designer après votre BUT. MMI nous donne les notions de graphismes et de programmation nécessaire à ce métier",
    "Si vous êtes dans le parcours Développement web et dispositifs interactifs, devenir développeur web est une suite logique du parcours"],

  ["Quels sont les métiers potentiels pour les amoureux des graphismes et de l'audiovisuel issus du BUT MMI ?",
    "Bravo !",
    "Pas vraiment, il vaut mieux aimer le développement web pour ce métier",
    "Pas vraiment, il vaut mieux aimer le développement web pour ce métier",
    "Pas vraiment, il faut avoir des connaissances de cybersécurité"],

  ["Quels débouchés sont mentionnés pour les passionnés du développement informatique ?",
    "Ah non, si vous voulez travaillez dans ce domaine, il vaut mieux choisir le parcours Stratégies de communication",
    "Oui ! A vos lignes de code !",
    "Pour gérer les médias sociaux, Stratégie de communication est sans aucun doute un parcours plus adapté que Développement Web",
    "Il faut impérativement avoir des notion de cyber sécurité pour travailler dans ce métier..."],

  ["Où peut travailler un webmestre en fonction de ses centres d'intérêt ?",
    "Oui, mais pas seulement !",
    "Oui, mais pas seulement !",
    "Oui, mais pas seulement !",
    "Absolument !"],

  ["Quel professionnel améliore l'expérience des utilisateurs en simplifiant la navigation en ligne ?",
    "Le développeur va mettre en place les consignes de simplification, mais ne va pas les créer",
    "Non, ça n'a rien à voir avec la navigation en ligne.",
    "Eh bien, le concepteur multimédia crée les médias du site, il ne simplifie donc pas la navigation sur un site",
    "Oui ! UX vient de User Experience (expérience utilisateur en français). Il améliore donc l'expérience utilisateur en faisant des recherches pour simplifier la navigation"],

  ["Quels domaines professionnels sont associés au métier d'UX designer ?",
    "Oui, tout à fait !",
    "C'est assez rare, mais si un réalisateur a besoin d'un site pourquoi pas. Mais est-ce le seul secteur ?",
    "Oui, mais est-ce le seul secteur ?",
    "Oui, mais est-ce le seul secteur ?"],

  ["Quel métier consiste à donner vie à des images dessinées sur papier ou tablette?",
    "Alors non ! Le développeur peut créer des images et les animer (en SVG par exemple) mais pas sur papier ou tablette",
    "Oui, c'est ça !",
    "Le crée des produits multimédias en mêlant sons, textes et images, en collaboration avec des graphistes, des auteurs, des développeurs et des webdesigners. Mais il ne crée pas d'animation en particulier.",
    "Le Webmaster crée des sites web, mais ne donne pas vie a des images."]
  // ["Combien de parcours de spécialisation sont disponibles en MMI ?", "AC", "AD", "AE", "AF"],
  // ["Quels sont les parcours de spécialisation disponibles dans la formation MMI ?", "AG", "AH", "AI", "AJ"]
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
