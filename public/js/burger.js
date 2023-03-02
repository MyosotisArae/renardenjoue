var sidenav = document.getElementById("mySidenav");
var openBtn = document.getElementById("openBtn");
var closeBtn = document.getElementById("closeBtn");

openBtn.onclick = openNav;
closeBtn.onclick = closeNav;

/* Set the width of the side navigation to 250px */
function openNav() {
  sidenav.classList.add("active");
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  sidenav.classList.remove("active");
}


/* Bouton de redirection vers login / Mon compte dans evtDetail */
function ouvrirLogin()
{
    window.location.href = "login";
}
function inscription(numeroSeance)
{
    window.location.href = "inscription"+numeroSeance;
}
function desinscription(numeroSeance)
{
    window.location.href = "desinscription"+numeroSeance;
}
