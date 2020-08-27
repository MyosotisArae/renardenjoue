function selectGame(reference)
{
	caseNom = document.getElementById('jeuNo'+reference+'_nom');
	caseNmc = document.getElementById('jeuNo'+reference+'_nmc');
	caseBut = document.getElementById('jeuNo'+reference+'_but');
	casePpe = document.getElementById('jeuNo'+reference+'_ppe');
	caseImg = document.getElementById('jeuNo'+reference+'_img');
	caseMin = document.getElementById('jeuNo'+reference+'_min');
	caseMax = document.getElementById('jeuNo'+reference+'_max');
	caseDur = document.getElementById('jeuNo'+reference+'_dur');
	caseMca = document.getElementById('jeuNo'+reference+'_mca');
	caseNbj = document.getElementById('jeuNo'+reference+'_nbj');
	caseImj = document.getElementById('jeuNo'+reference+'_imj');
	caseNiv = document.getElementById('jeuNo'+reference+'_niv');

	// Description de ce niveau
	texteNiveau = '';
	niveau = caseNiv.innerHTML;
	if (niveau == 1) { texteNiveau = "Jeu tout public, assimilable m&ecirc;me par les plus jeunes"; }
	else if (niveau == 2) { texteNiveau = "Jeu simple, mais qui requiert un peu de r&eacute;flexion"; }
	else if (niveau == 3) { texteNiveau = "Jeu abordable, mais qui exige de la concentration"; }
	else if (niveau == 4) { texteNiveau = "Jeu strat&eacute;gique avec des r&egrave;gles plut&ocirc;t cons&eacute;quentes"; }
	else if (niveau == 5) { texteNiveau = "Ce jeu peut &ecirc;tre difficile &agrave; ma&icirc;triser"; }
	// Texte des durées, sur la barre de titre
	duree = dureehm(caseMin.innerHTML) + '-' + dureehm(caseMax.innerHTML);
	// Durées dans le texte de la légende
	document.getElementById('legMin').innerHTML = "&nbsp;au moins " + dureehm(caseMin.innerHTML);
	document.getElementById('legMax').innerHTML = '&nbsp;' + dureehm(caseMax.innerHTML) + ' à tout casser';
	// Image : récupérer les dimensions de l'image actuelle et les réappliquer
	imageDuJeu = document.getElementById('divImg');
	imageDuJeu.innerHTML='';
	sizeW = imageDuJeu.clientWidth;
	nouvelleImage = document.createElement('img');
	nouvelleImage.setAttribute('class','grandeImage img-fluid cadreBleu');
	nouvelleImage.setAttribute('style','width:' + sizeW + 'px; height:auto;');
	nouvelleImage.setAttribute('src','/images/imagesJeux/' + caseImg.innerHTML + '.jpg');
	imageDuJeu.appendChild(nouvelleImage);
	// Niveau de difficulté : texte + legende + images
	niv = caseNiv.innerHTML;
	document.getElementById('divNiveau').innerHTML =
	  "<label class='gauche' style='font-size : 1.4em;'>Complexité&nbsp;:&nbsp;" + niv + "/5</label>" + 
  	  "<img class='mini enAbsolu' style='right : 2em;top : 0;' src='/images/pictoNiv" + niv + ".gif'>";
	document.getElementById("divNiv").innerHTML =
	  "<img class='mini float-right' "+	
	  "src='/images/pictoNiv"+caseNiv.innerHTML+".gif'></img>";
	  document.getElementById('legNiv_A').innerHTML = 'Niveau de difficulté : ' + texteNiveau;
	  document.getElementById('legNiv_B').setAttribute('src', '/images/pictoNiv' + niv + '.gif');
	  document.getElementById('legNiv_C').setAttribute('style', 'background-image:url(/images/fleches' + niv + '.gif);');
	  // Nombre de joueurs : texte + légende + images
	  texteNbJoueurs = caseNbj.innerText;
      document.getElementById("divTxtNbJoueurs").innerHTML =
	    "<label class='gauche' style='font-size : 1.4em;'>" + texteNbJoueurs + "</label>" +
	    "<img class='mini enAbsolu' style='right : 2em;top : 0;' src='/images/" +  caseImj.innerHTML + "'>";
      document.getElementById('legNbj').innerHTML = 'Jeu pour ' + texteNbJoueurs;
  

	document.getElementById('divTitre').innerHTML = caseNom.innerHTML;
	document.getElementById('divNom').innerHTML = caseNmc.innerHTML;
	document.getElementById('divDurees').innerHTML = duree;
	document.getElementById('divBut').innerHTML = caseBut.innerHTML;
	document.getElementById('divPpe').innerHTML = casePpe.innerText;
	document.getElementById('divHorloges').innerHTML = caseDur.innerText;
	document.getElementById('divNbJ').innerHTML = texteNbJoueurs.replace(' à ','-');
	// Liste des mécanismes du jeu
	meca = caseMca;
	document.getElementById('divMeca').innerHTML = '';
	if (meca.innerText.length > 9)
	{
		document.getElementById('divMeca').innerHTML = "<label class='gauche' style='font-size : 1.4em;'>Mécanismes et prérequis :</label> " + meca.innerHTML;
	}
	setTimeout(atteindreBarreMenu, 200);
}

function atteindreBarreMenu()
{
	window.location.href = "#blocBarreMenu";
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