function toggleText(text) {
    var texteElement = document.getElementById(text);
    var textesCaches = document.getElementsByClassName("texteCache");

    if (texteElement.style.display === "none") {
        for (let i = 0; i < textesCaches.length; i++) {
            textesCaches[i].style.display = "none";
        }
        texteElement.style.display = "block";
    } else {
        texteElement.style.display = "none";
    }
}