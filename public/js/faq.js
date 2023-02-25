function ranger(nomDiv) {
  var laDiv = document.getElementById(nomDiv);
}

function openDiv(nomDiv) {
  var laDiv = document.getElementById(nomDiv);
  var mainDiv = document.getElementById("mainDivFaq");
  if (laDiv != null) {
    mainDiv.innerHTML = laDiv.innerHTML;
    mainDiv.classList.add("activer");
  }
}

function closeDivs() {
  var mainDiv = document.getElementById("mainDivFaq");
  mainDiv.classList.remove("activer");
    /*
  for (let num=7;num--;num>0) {
    var nomDiv = "div0"+num;
    var laDiv = document.getElementById(nomDiv);
    if (laDiv != null) {
      laDiv.classList.remove("activer");
      //rangerDiv(nomDiv);
    }
  }
  */
}

