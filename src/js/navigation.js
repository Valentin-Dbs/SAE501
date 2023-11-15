var pages = [
    "connexion.html",
    "présentation1.php",
    "présentation2.php",
    "quiz1.php",
    "présentation3.php",
    "présentation4.php",
    "quiz2.php",
    "présentation5.php",
    "présentation6.php",
    "quiz3.php",
    "page_certificat.php",
    "accueil.html"
  ];
  
  var progressionUtilisateur = 0;
  
  function mettreAJourProgression(nouvelleProgression) {
    // Envoyez la nouvelle progression au serveur (AJAX peut être utilisé ici)
    // Par exemple, vous pouvez appeler un fichier PHP qui met à jour la variable de session côté serveur.
    // Assurez-vous que le fichier PHP est sécurisé pour éviter les attaques.
  
    // Exemple d'utilisation d'AJAX (à adapter selon votre structure) :
    $.ajax({
      type: "POST",
      url: "mettre_a_jour_progression.php",  // Nommez le fichier PHP approprié
      data: { progression: nouvelleProgression },
      success: function (response) {
        console.log("Progression mise à jour avec succès");
      },
      error: function (xhr, status, error) {
        console.error("Erreur lors de la mise à jour de la progression : " + error);
      }
    });
  }
  
  function pageSuivante() {
    if (progressionUtilisateur < pages.length - 1) {
      progressionUtilisateur++;
      window.location.href = pages[progressionUtilisateur];
      mettreAJourProgression(progressionUtilisateur);
    } else {
      window.location.href = "accueil.html";
      mettreAJourProgression(0);
    }
  }
  
  function pagePrecedente() {
    if (progressionUtilisateur > 0) {
      progressionUtilisateur--;
      window.location.href = pages[progressionUtilisateur];
      mettreAJourProgression(progressionUtilisateur);
    } else {
      // L'utilisateur est déjà sur la première page, vous pouvez choisir de ne rien faire ou de le rediriger vers une autre page.
    }
  }
  