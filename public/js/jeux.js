function atteindreBarreMenu()
{
  window.location.href = "#blocBarreMenu";
  document.getElementById("mainRow").scrollTop = 0;
}

function dureehm(enMinutes)
{
  resultat = "";
  if (enMinutes < 60) { resultat = enMinutes + "mn"; }
  else
  {
	nbHeures = 0;
	nbminutes = enMinutes;
	while (nbminutes >= 60)
	{
	  nbminutes -= 60;
	  nbHeures += 1;
	}
	resultat = nbHeures + "h";
	if (nbminutes > 0) resultat += nbminutes + "mn";
  }
  return resultat;
}
