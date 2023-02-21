function ranger(nomDiv) {
  var laDiv = document.getElementById(nomDiv);
//  laDiv.style.marginTop = "300vh";
}

function openDiv(nomDiv) {
  var laDiv = document.getElementById(nomDiv);
  laDiv.classList.add("activer");
//  laDiv.style.marginTop = "0vh";
}

function closeDivs() {
  for (let num=7;num--;num>0) {
    var nomDiv = "div0"+num;
    var laDiv = document.getElementById(nomDiv);
    laDiv.classList.remove("activer");
//    rangerDiv(nomDiv);
  }
}

