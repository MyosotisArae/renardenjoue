function closeAllDivs() {
  // Fermer toutes les divs
  for (let num=1;num<7;num++) {
    var uneDiv = document.getElementById("div0"+num);
    uneDiv.classList.remove("activer");
  }
}

function openDiv(nomDiv) {
  closeAllDivs();

  var laDiv = document.getElementById(nomDiv);
  laDiv.classList.add("activer");
}

function closeDiv(nomDiv) {
  var laDiv = document.getElementById(nomDiv);
  laDiv.classList.remove("activer");
}

