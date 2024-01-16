var tousCours = document.querySelectorAll(".cours")

tousCours.forEach(function (cours) {
    cours.addEventListener('mouseover', function () {
        var txtAssocie = cours.querySelector('.txtCours')
        txtAssocie.style.opacity = "1"
    });
});

tousCours.forEach(function (cours) {
    cours.addEventListener('mouseout', function () {
        var txtAssocie = cours.querySelector('.txtCours')
        txtAssocie.style.opacity = "0.2"
    });
});