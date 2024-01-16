var allSections = document.querySelectorAll(".sections");
var allTxts = document.querySelectorAll(".txtSection");

for (let i = 0; i < allSections.length; i++) {
    var section = allSections[i];
    var txt = allTxts[i];

    section.addEventListener('mouseover', showTxt(txt, section.id));
    section.addEventListener('mouseout', hideTxt(txt, section.id));
}

function showTxt(txt, id) {
    return function () {
        txt.id = id % 2 == 0 ? "visibleL" : "visibleR";
    };
}

function hideTxt(txt, id) {
    return function () {
        txt.id = id % 2 == 0 ? "hiddenL" : "hiddenR";
    };
}
