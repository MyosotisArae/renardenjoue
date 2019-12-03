<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /test.html.twig */
class __TwigTemplate_61216583ad63b80935d27efd6953a93f3a0d2bd7441e596b5acb0fe5302f20f9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/test.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html class=\"w-100\">
<head>
    <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"/css/general.css\">
  
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
  <script src=\"https://kit.fontawesome.com/ac0e3984ff.js\"></script>
  
  <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
  <![endif]-->
  <script>
    (function ( \$ ) { 

    // put all that \"wl_alert\" code here   

    }( jQuery ));
  </script>


  <link rel=\"stylesheet\" href=\"/css/jeux.css\">
  <link rel=\"stylesheet\" href=\"/css/toolTip.css\">
</head>

  <body class=\"w-max\">
      
    <header class=\"row w-max\">
      <div class=\"col-12 container-fluid w-max\">
        <nav class=\"navbar navbar-expand-sm navbar-dark bg-primary w-max\">
            <a class=\"navbar-brand col-1\" href=\"#\"><img src=\"/images/logo.gif\" class=\"logo\" class=\"enAbsolu\" style=\"top:-1em;left:0;\"></a>
            <div class=\"navbar-nav col-11 d-none d-md-block\">                 <li class=\"nav-item\" title=\"Page d'accueil\">
                  <a class=\"nav-link visible-xs-block\" href=\"accueil\"><i class=\"fas fa-home\">&nbsp;</i>Accueil<span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\" title=\"Calendrier des évènements\">
                  <a class=\"nav-link\" href=\"calendrier\"><i class=\"fas fa-calendar-alt\">&nbsp;</i>Agenda</a>
                </li>
                <li class=\"nav-item active\" title=\"Liste de nos jeux\">
                  <a class=\"nav-link\" href=\"jeux\"><i class=\"fas fa-dice\">&nbsp;</i>Jeux</a>
                </li>
                                                <li class=\"nav-item\" title=\"Pour nous trouver ou nous envoyer un message\">
                  <a class=\"nav-link\" href=\"contact\"><i class=\"fas fa-comment\">&nbsp;</i>Contact</a>
                </li>
                <li class=\"nav-item\" title=\"Liens vers d'autres pages\">
                  <div class=\"btn-group\">                    <button type=\"button\" class=\"btn btn-default dropdown-toggle liens\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fas fa-link\">&nbsp;</i>Liens</button>
                    <ul class=\"dropdown-menu bg-primary\">
                      <a class=\"dropdown-item\" href=\"https://www.bussysaintgeorges.fr/education/petite-enfance/la-ludotheque/\" title=\"Ludothèque de Bussy, gratuite, pour les enfants de 0 à 12 ans, pour le moment ...\">Ludothèque de Bussy</a>
                      <a class=\"dropdown-item\" href=\"http://www.lavalleedesjeux.com/\" title=\"Ludothèque ouverte à tous, sur inscription (3O€)\">Ludothèque de Bailly Romainvilliers</a>
                      <div class=\"dropdown-divider\"></div>
                      <a class=\"dropdown-item\" href=\"https://ludiworld.com/newshop/84-jeux-de-societe\" title=\"Votre boutique de jeux, ici, à Bussy !\">Ludiworld</a>
                      <a class=\"dropdown-item\" href=\"http://www.ludhainaut.fr/\" title=\"Association de joueurs à Onnaing (Nord)\">Lud'Hainaut</a>
                    </ul>
                  </div>
                </li>
              </div> 
              <div class=\"navbar-nav col-xs-9 d-md-none enRelatif\">                 <span class=\"texteInvisible w-max\" style=\"font-size : 30px;min-width : 80vw;\">blabla</span>
              </div>
              <div class=\"navbar-nav col-xs-2 d-md-none enRelatif\" style=\"text-align : right;\"> 
                <i class=\"btn btn-default fas fa-bars enRelatif burger align-self-end\" data-toggle=\"dropdown\"  aria-expanded=\"false\" style=\"top : 0; right : 0;\">&nbsp;</i>
                <div class=\"btn-group dropleft enRelatif\" style=\"right : 0; top : 3em; text-align : right; box-sizing: border-box;\">
                  <ul class=\"dropdown-menu bg-primary enRelatif burgerMenu\" style=\"right : 0; box-sizing: border-box;\">
                      <a class=\"dropdown-item\" href=\"accueil\" title=\"Page d'accueil\">Accueil</a>
                      <a class=\"dropdown-item\" href=\"calendrier\" title=\"Calendrier des évènements\">Agenda</a>
                      <a class=\"dropdown-item\" href=\"jeux\" title=\"Liste de nos jeux\">Jeux</a>
                      <a class=\"dropdown-item\" href=\"contact\" title=\"Pour nous trouver ou nous envoyer un message\">Contact</a>
                      <div class=\"dropdown-divider\"></div>
                      <a class=\"dropdown-item\" href=\"https://www.bussysaintgeorges.fr/education/petite-enfance/la-ludotheque/\" title=\"Ludothèque de Bussy, gratuite, pour les enfants de 0 à 12 ans, pour le moment ...\">Ludothèque de Bussy</a>
                      <a class=\"dropdown-item\" href=\"http://www.lavalleedesjeux.com/\" title=\"Ludothèque ouverte à tous, sur inscription (3O€)\">Ludothèque de Bailly Romainvilliers</a>
                      <a class=\"dropdown-item\" href=\"https://ludiworld.com/newshop/84-jeux-de-societe\" title=\"Votre boutique de jeux, ici, à Bussy !\">Ludiworld</a>
                      <a class=\"dropdown-item\" href=\"http://www.ludhainaut.fr/\" title=\"Association de joueurs à Onnaing (Nord)\">Lud'Hainaut</a>
                    </ul>
                </div>
                
                            </div> 
            </div>
        </nav>
      </div>
    </header>

    <img class=\"fond container-fluid d-none d-md-block enAbsolu\" style=\"top:3em; background-size : cover;\" src=\"/images/fond.png\">
    <img class=\"fond container-fluid d-md-none enAbsolu\" style=\"top:3em; background-size : cover;\" src=\"/images/fondVertical.png\">

    <div class=\"row\">
      <div class=\"col-12\"></div>
          
      <div class='col-4'>
          <form  method=\"POST\" action=\"jeux?operation=recherche\" class=\"h-100 fondOpaque cadreBleu\">
              <table class=\"w-100 h-100\">
                <tr class=\"h-20\">
                  <td class=\"w-25\">
                    <label>Titre :</label>
                  </td>
                  <td style=\"position:relative;\" class=\"w-75\">
                    <a href=\"#\" style=\"position:relative;\">
                      <input type='text' name='jeuTitre'><div class='tool-tip bottom'>Nom&nbsp;complet&nbsp;ou&nbsp;partiel</div>
                    </a>
                  </td>
                </tr>
                <tr class=\"h-20\">
                  <td>
                    <label>Niveau :</label>
                  </td>
                  <td>
                    <a href=\"#\" style=\"position:relative;\">
            \t\t\t\t\t<select name='jeuNiveau'>
            \t\t\t\t\t\t<option value='0'></option>
        \t    \t\t\t\t\t<option value='1' class=\"fondVert\" alt=\"Parties courtes, règles simples\">famille - enfants</option>
        \t\t\t    \t\t\t<option value='2' class=\"fondJaune\">abordable</option>
      \t  \t\t\t\t    \t<option value='3' class=\"fondOrange\">confirmés</option>
    \t\t\t  \t\t\t\t\t\t<option value='4' class=\"fondRouge\">connaisseurs</option>
          \t  \t\t\t\t\t<option value='5' class=\"fondNoir\">experts</option>
      \t    \t  \t\t\t</select>
                      <div class='tool-tip bottom'>Difficulté&nbsp;recherchée.</div>
                    </a>
                  </td>
                </tr>
                <tr class=\"h-20\">
                  <td>
                    <label>Durée :</label>
                  </td>
                  <td>
                    <a href=\"#\" style=\"position:relative;\">
          \t\t\t\t\t\t<select name='jeuDuree'>
          \t\t\t\t\t\t\t<option value='0'></option>
        \t\t\t\t\t\t\t\t<option value='1'>20mn ou moins</option>
  \t\t    \t\t\t\t\t\t\t<option value='2'>20 à 45mn</option>
      \t    \t\t\t\t\t\t<option value='3'>jusqu'à 1h30</option>
      \t\t    \t\t\t\t\t<option value='4'>1h30 à 3h</option>
      \t\t\t    \t\t\t\t<option value='5'>3h ou plus</option>
    \t\t\t\t\t    \t\t</select>
                      <div class='tool-tip bottom'>Durée&nbsp;d'une&nbsp;partie.
                      </div>
                    </a>
                  </td>
                </tr>
                <tr class=\"h-20\">
                  <td>
                    <label>Nombre :</label>
                  </td>
                  <td>
                    <a href=\"#\" style=\"position:relative;\">
            \t\t\t\t\t<select name='jeuNb'>
        \t    \t\t\t\t\t<option value='0'></option>
      \t\t\t\t    \t\t\t<option value='1'>1 joueur</option>
 \t\t\t  \t\t\t\t\t    \t<option value='2'>2 joueurs</option>
            \t\t\t\t\t\t<option value='3'>3 joueurs</option>
            \t\t\t\t\t\t<option value='4'>4 joueurs</option>
      \t      \t\t\t\t\t<option value='5'>5 joueurs</option>
\t\t\t\t\t\t      \t\t\t<option value='6'>6 joueurs</option>
      \t\t\t\t\t      \t<option value='7'>7 joueurs</option>
          \t\t\t\t  \t\t<option value='8'>8 joueurs et plus</option>
          \t\t\t\t\t  </select>
                      <div class='tool-tip top'>Nombre&nbsp;de&nbsp;joueurs.</div>
                    </a>
                  </td>
                </tr>
                <tr class=\"h-20\">
                  <td colspan=2>
                    <input type=\"submit\" class=\"cadreBleu fondBleu bouton\" href=\"jeux?operation=recherche\" value=\"Rechercher les jeux correspondants\">
                  </td>
                </tr>
              </table>
          </form>
      </div>

      <div class='col-7' style=\"background-image:url(/images/imagesJeux/agricola.jpg);background-repeat : no-repeat;\">
            <div class='row retracter'>
              <div class=\"col-12 cadreBleu fondBleu\"><h2>Agricola</h2></div>
              <div class='col-10 enLigne w-100' id='divDuree'>
                <div class=\"camembertParent enLigne\">
                  <img class=\"imageCarree1\" src=\"../images/secteur60vert.gif\"><img class=\"imageCarree1\" src=\"../images/cadran.gif\"><span class=\"texteCarre1\">1h</span><img class=\"imageCarree2\" src=\"../images/secteur60rouge.gif\"><img class=\"imageCarree2\" src=\"../images/cadran.gif\"><span class=\"texteCarre1 texteCarre2\">4h</span>
                </div>
                <div class=\"legendeCamembert\">
                  <h3>Légende :</h3>
                  <img class='enLigne rectangle' src=\"/images/legendeVert.gif\">&nbsp;durée minimale : 1h, enfin la plupart du temps<br>
                  <img class='enLigne rectangle' src=\"/images/legendeRouge.gif\">&nbsp;durée maximale estimée à 4h environ<br>
                  Jeu pour 1 à 5 joueurs<br>
                  Niveau de difficulté : Jeu simple, qui ne requiert qu&#039;un peu de réflexion.
                  <table>
                    <tr>
                      <td rowspan=3><img class='mini' src=\"/images/pictoNiv2.gif\"></td>
                      <td rowspan=3><div class=\"texteInvisible\">blabla</div></td>
                      <td><img class='bonhomme' src=\"/images/niveau_enfant.gif\"></td>
                      <td>5-8 ans</td>
                      <td class='texteInvisible' rowspan=3 style=\"background-image:url(/images/fleches2.gif);\">blabla</td>
                      <td><img class='rectangle' src=\"/images/niveauRouge.gif\"></td>
                      <td>trop dur</td>
                    </tr>
                    <tr>
                      <td><img class='bonhomme' src=\"/images/niveau_preado.gif\"></td>
                      <td>9-13 ans</td>
                      <td><img class='rectangle' src=\"/images/niveauOrange.gif\"></td>
                      <td>compliqué</td>
                    </tr>
                    <tr>
                      <td><img class='bonhomme' src=\"/images/niveau_grand.gif\"></td>
                      <td>14 ans et plus</td>
                      <td><img class='rectangle' src=\"/images/niveauVert.gif\"></td>
                      <td>facile</td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class='col-2' id='divNiveau'><img class='mini enAbsolu' style=\"right : 0;top : 2em;\" src=\"/images/pictoNiv2.gif\"></div>
              <div class='col-12 inline' id='divTxtNbJoueurs'>
                <label class='gauche blanc' style=\"font-size : 1.4em;\">1 à 5 joueurs</label>
                <img class='mini enAbsolu' style=\"right : 0;bottom : 1em;\" src=\"/images/nbJoueurs.gif\">
              </div>
            </div>
      </div>

      <div class='col-5 retracter' style=\"padding-top : 1em;\">
        <div class='listeJeux cadreBleu'>

                <a href=\"jeux?jeuChoisi=144\" class=\"confetti couleur10 taille3 fonte9\">7 Wonders</a>
                            <a href=\"jeux?jeuChoisi=1133\" class=\"confetti couleur11 taille4 fonte10\">7 wonders duel</a>
                                  <a href=\"jeux?jeuChoisi=1125\" class=\"confetti couleur12 taille5 fonte0\">L&#039;aéropostale</a>
                                  <a href=\"jeux?jeuChoisi=1\" class=\"confetti couleur0 taille6 fonte1\">Africa</a>
                                  <a href=\"jeux?jeuChoisi=57\" class=\"confetti couleur1 taille0 fonte2\">L&#039;age des Dieux</a>
                            <a href=\"jeux?jeuChoisi=2\" class=\"confetti couleur2 taille1 fonte3\">Age of Renaissance</a>
                            <a href=\"jeux?jeuChoisi=84\" class=\"confetti couleur3 taille2 fonte4\">Age of Steam</a>
                            <a href=\"jeux?jeuChoisi=123\" class=\"confetti couleur4 taille3 fonte5\">Agricola</a>
                            <a href=\"jeux?jeuChoisi=149\" class=\"confetti couleur5 taille4 fonte6\">Agricola - Terres d&#039;élevage</a>
                            <a href=\"jeux?jeuChoisi=1136\" class=\"confetti couleur6 taille5 fonte7\">Air show</a>
                            <a href=\"jeux?jeuChoisi=65\" class=\"confetti couleur7 taille6 fonte8\">Alhambra</a>
                                  <a href=\"jeux?jeuChoisi=131\" class=\"confetti couleur8 taille0 fonte9\">Amytis</a>
                            <a href=\"jeux?jeuChoisi=1149\" class=\"confetti couleur9 taille1 fonte10\">Andor</a>
                                  <a href=\"jeux?jeuChoisi=1142\" class=\"confetti couleur10 taille2 fonte0\">Anima - L&#039;Ombre d&#039;Omega</a>
                            <a href=\"jeux?jeuChoisi=114\" class=\"confetti couleur11 taille3 fonte1\">Animalia</a>
                            <a href=\"jeux?jeuChoisi=1156\" class=\"confetti couleur12 taille4 fonte2\">Ascension</a>
                                  <a href=\"jeux?jeuChoisi=139\" class=\"confetti couleur0 taille5 fonte3\">Assassin X</a>
                            <a href=\"jeux?jeuChoisi=96\" class=\"confetti couleur1 taille6 fonte4\">Astoria</a>
                                  <a href=\"jeux?jeuChoisi=53\" class=\"confetti couleur2 taille0 fonte5\">Attakube</a>
                            <a href=\"jeux?jeuChoisi=59\" class=\"confetti couleur3 taille1 fonte6\">Attika</a>
                            <a href=\"jeux?jeuChoisi=82\" class=\"confetti couleur4 taille2 fonte7\">Les Aventuriers du Rail (Europe)</a>
                            <a href=\"jeux?jeuChoisi=3\" class=\"confetti couleur5 taille3 fonte8\">The Awful green things from outer space</a>
                            <a href=\"jeux?jeuChoisi=1131\" class=\"confetti couleur6 taille4 fonte9\">Le bal des coccinelles</a>
                            <a href=\"jeux?jeuChoisi=176\" class=\"confetti couleur7 taille5 fonte10\">Batt&#039;l Khaos</a>
                                  <a href=\"jeux?jeuChoisi=107\" class=\"confetti couleur8 taille6 fonte0\">Battle Lore</a>
                                  <a href=\"jeux?jeuChoisi=124\" class=\"confetti couleur9 taille0 fonte1\">Battlestar Galactica</a>
                            <a href=\"jeux?jeuChoisi=37\" class=\"confetti couleur10 taille1 fonte2\">Bazard bizarre ultime</a>
                            <a href=\"jeux?jeuChoisi=156\" class=\"confetti couleur11 taille2 fonte3\">Blokus</a>
                            <a href=\"jeux?jeuChoisi=4\" class=\"confetti couleur12 taille3 fonte4\">Bluff</a>
                                  <a href=\"jeux?jeuChoisi=54\" class=\"confetti couleur0 taille4 fonte5\">Buffy - Menace sur Sunnydale</a>
                            <a href=\"jeux?jeuChoisi=134\" class=\"confetti couleur1 taille5 fonte6\">Les cabanes de m&#039;sieur Robinson</a>
                            <a href=\"jeux?jeuChoisi=5\" class=\"confetti couleur2 taille6 fonte7\">Can&#039;t Stop</a>
                                  <a href=\"jeux?jeuChoisi=6\" class=\"confetti couleur3 taille0 fonte8\">Carcassonne</a>
                            <a href=\"jeux?jeuChoisi=1150\" class=\"confetti couleur4 taille1 fonte9\">Cart&#039;foot</a>
                            <a href=\"jeux?jeuChoisi=85\" class=\"confetti couleur5 taille2 fonte10\">Cash and guns</a>
                                  <a href=\"jeux?jeuChoisi=81\" class=\"confetti couleur6 taille3 fonte0\">Caylus</a>
                            <a href=\"jeux?jeuChoisi=1132\" class=\"confetti couleur7 taille4 fonte1\">Célestia</a>
                            <a href=\"jeux?jeuChoisi=7\" class=\"confetti couleur8 taille5 fonte2\">César et Cléopatre</a>
                            <a href=\"jeux?jeuChoisi=1116\" class=\"confetti couleur9 taille6 fonte3\">Chantilly</a>
                                  <a href=\"jeux?jeuChoisi=8\" class=\"confetti couleur10 taille0 fonte4\">Chasse gardée</a>
                            <a href=\"jeux?jeuChoisi=70\" class=\"confetti couleur11 taille1 fonte5\">Les Chevaliers de la Table Ronde</a>
                            <a href=\"jeux?jeuChoisi=9\" class=\"confetti couleur12 taille2 fonte6\">Chinatown</a>
                                  <a href=\"jeux?jeuChoisi=1152\" class=\"confetti couleur0 taille3 fonte7\">cHTeMeLe</a>
                            <a href=\"jeux?jeuChoisi=109\" class=\"confetti couleur1 taille4 fonte8\">CIA vs KGB</a>
                            <a href=\"jeux?jeuChoisi=10\" class=\"confetti couleur2 taille5 fonte9\">Citadelle</a>
                            <a href=\"jeux?jeuChoisi=11\" class=\"confetti couleur3 taille6 fonte10\">Les Cités Perdues</a>
                                        <a href=\"jeux?jeuChoisi=12\" class=\"confetti couleur4 taille0 fonte0\">Citta</a>
                            <a href=\"jeux?jeuChoisi=151\" class=\"confetti couleur5 taille1 fonte1\">The city</a>
                            <a href=\"jeux?jeuChoisi=1141\" class=\"confetti couleur6 taille2 fonte2\">Clans</a>
                            <a href=\"jeux?jeuChoisi=135\" class=\"confetti couleur7 taille3 fonte3\">Claustrophobia</a>
                            <a href=\"jeux?jeuChoisi=1122\" class=\"confetti couleur8 taille4 fonte4\">Code names Duo</a>
                            <a href=\"jeux?jeuChoisi=140\" class=\"confetti couleur9 taille5 fonte5\">Coeur de dragon</a>
                            <a href=\"jeux?jeuChoisi=47\" class=\"confetti couleur10 taille6 fonte6\">Le collier de la Reine</a>
                                  <a href=\"jeux?jeuChoisi=13\" class=\"confetti couleur11 taille0 fonte7\">Les Colons De Katane</a>
                            <a href=\"jeux?jeuChoisi=14\" class=\"confetti couleur12 taille1 fonte8\">Les Colons De L&#039;Espace</a>
                                  <a href=\"jeux?jeuChoisi=106\" class=\"confetti couleur0 taille2 fonte9\">Colosseum</a>
                            <a href=\"jeux?jeuChoisi=71\" class=\"confetti couleur1 taille3 fonte10\">Colossus Arena</a>
                                  <a href=\"jeux?jeuChoisi=15\" class=\"confetti couleur2 taille4 fonte0\">Condottiere</a>
                            <a href=\"jeux?jeuChoisi=105\" class=\"confetti couleur3 taille5 fonte1\">La conquête de Rome</a>
                            <a href=\"jeux?jeuChoisi=76\" class=\"confetti couleur4 taille6 fonte2\">Crimson Skies</a>
                                  <a href=\"jeux?jeuChoisi=179\" class=\"confetti couleur5 taille0 fonte3\">A la croisée des mondes - La boussole d&#039;or</a>
                            <a href=\"jeux?jeuChoisi=1159\" class=\"confetti couleur6 taille1 fonte4\">Cubulus</a>
                            <a href=\"jeux?jeuChoisi=157\" class=\"confetti couleur7 taille2 fonte5\">Descendance</a>
                            <a href=\"jeux?jeuChoisi=92\" class=\"confetti couleur8 taille3 fonte6\">Descent</a>
                            <a href=\"jeux?jeuChoisi=1143\" class=\"confetti couleur9 taille4 fonte7\">Dice Forge</a>
                            <a href=\"jeux?jeuChoisi=17\" class=\"confetti couleur10 taille5 fonte8\">Die Hanse</a>
                            <a href=\"jeux?jeuChoisi=16\" class=\"confetti couleur11 taille6 fonte9\">Diplomacy</a>
                                  <a href=\"jeux?jeuChoisi=155\" class=\"confetti couleur12 taille0 fonte10\">Disque Monde - Ankh-Morpork</a>
                                        <a href=\"jeux?jeuChoisi=166\" class=\"confetti couleur0 taille1 fonte0\">Disque monde - Les sorcières</a>
                            <a href=\"jeux?jeuChoisi=125\" class=\"confetti couleur1 taille2 fonte1\">Dixit</a>
                            <a href=\"jeux?jeuChoisi=119\" class=\"confetti couleur2 taille3 fonte2\">Dominion</a>
                            <a href=\"jeux?jeuChoisi=95\" class=\"confetti couleur3 taille4 fonte3\">Donjons et Dragons Miniatures</a>
                            <a href=\"jeux?jeuChoisi=18\" class=\"confetti couleur4 taille5 fonte4\">Drakon</a>
                            <a href=\"jeux?jeuChoisi=19\" class=\"confetti couleur5 taille6 fonte5\">Dune</a>
                                  <a href=\"jeux?jeuChoisi=137\" class=\"confetti couleur6 taille0 fonte6\">Dungeon Lords</a>
                            <a href=\"jeux?jeuChoisi=64\" class=\"confetti couleur7 taille1 fonte7\">Dungeon twister</a>
                            <a href=\"jeux?jeuChoisi=72\" class=\"confetti couleur8 taille2 fonte8\">Dungeoneer - Le Tombeau du Seigneur des Liches</a>
                            <a href=\"jeux?jeuChoisi=52\" class=\"confetti couleur9 taille3 fonte9\">Eden</a>
                            <a href=\"jeux?jeuChoisi=20\" class=\"confetti couleur10 taille4 fonte10\">Elixir</a>
                                  <a href=\"jeux?jeuChoisi=21\" class=\"confetti couleur11 taille5 fonte0\">En Garde</a>
                            <a href=\"jeux?jeuChoisi=128\" class=\"confetti couleur12 taille6 fonte1\">Eve Conquest</a>
                                        <a href=\"jeux?jeuChoisi=22\" class=\"confetti couleur0 taille0 fonte2\">Evo</a>
                            <a href=\"jeux?jeuChoisi=68\" class=\"confetti couleur1 taille1 fonte3\">Euphrate et Tigris</a>
                            <a href=\"jeux?jeuChoisi=98\" class=\"confetti couleur2 taille2 fonte4\">Fairy Tale</a>
                            <a href=\"jeux?jeuChoisi=1128\" class=\"confetti couleur3 taille3 fonte5\">Fairy tile</a>
                            <a href=\"jeux?jeuChoisi=150\" class=\"confetti couleur4 taille4 fonte6\">A few acres of snow</a>
                            <a href=\"jeux?jeuChoisi=1160\" class=\"confetti couleur5 taille5 fonte7\">La Fièvre de l&#039;Or</a>
                            <a href=\"jeux?jeuChoisi=175\" class=\"confetti couleur6 taille6 fonte8\">Firefly</a>
                                  <a href=\"jeux?jeuChoisi=167\" class=\"confetti couleur7 taille0 fonte9\">Five tribes</a>
                            <a href=\"jeux?jeuChoisi=55\" class=\"confetti couleur8 taille1 fonte10\">Formule Dé</a>
                                  <a href=\"jeux?jeuChoisi=91\" class=\"confetti couleur9 taille2 fonte0\">Full of dollars</a>
                            <a href=\"jeux?jeuChoisi=160\" class=\"confetti couleur10 taille3 fonte1\">Galaxy Trucker</a>
                            <a href=\"jeux?jeuChoisi=61\" class=\"confetti couleur11 taille4 fonte2\">A game of Thrones</a>
                            <a href=\"jeux?jeuChoisi=1140\" class=\"confetti couleur12 taille5 fonte3\">Gare à la toile</a>
                                  <a href=\"jeux?jeuChoisi=1148\" class=\"confetti couleur0 taille6 fonte4\">La Gloire de Rome</a>
                                  <a href=\"jeux?jeuChoisi=163\" class=\"confetti couleur1 taille0 fonte5\">Gravity maze</a>
                            <a href=\"jeux?jeuChoisi=185\" class=\"confetti couleur2 taille1 fonte6\">Guédelon</a>
                            <a href=\"jeux?jeuChoisi=69\" class=\"confetti couleur3 taille2 fonte7\">La guerre de l&#039;anneau</a>
                            <a href=\"jeux?jeuChoisi=23\" class=\"confetti couleur4 taille3 fonte8\">La Guerre des Moutons</a>
                            <a href=\"jeux?jeuChoisi=56\" class=\"confetti couleur5 taille4 fonte9\">Guerriers des étoiles</a>
                            <a href=\"jeux?jeuChoisi=90\" class=\"confetti couleur6 taille5 fonte10\">La Hache et le Feu</a>
                                  <a href=\"jeux?jeuChoisi=190\" class=\"confetti couleur7 taille6 fonte0\">Hakafuda</a>
                                  <a href=\"jeux?jeuChoisi=24\" class=\"confetti couleur8 taille0 fonte1\">Hannibal</a>
                            <a href=\"jeux?jeuChoisi=1151\" class=\"confetti couleur9 taille1 fonte2\">Heroes Dei</a>
                            <a href=\"jeux?jeuChoisi=63\" class=\"confetti couleur10 taille2 fonte3\">History of war</a>
                            <a href=\"jeux?jeuChoisi=122\" class=\"confetti couleur11 taille3 fonte4\">Horreur à Arkham</a>
                            <a href=\"jeux?jeuChoisi=87\" class=\"confetti couleur12 taille4 fonte5\">Iliade</a>
                                  <a href=\"jeux?jeuChoisi=25\" class=\"confetti couleur0 taille5 fonte6\">Illuminati</a>
                            <a href=\"jeux?jeuChoisi=1127\" class=\"confetti couleur1 taille6 fonte7\">Imagine</a>
                                  <a href=\"jeux?jeuChoisi=79\" class=\"confetti couleur2 taille0 fonte8\">Infra Tank</a>
                            <a href=\"jeux?jeuChoisi=101\" class=\"confetti couleur3 taille1 fonte9\">Invasions</a>
                            <a href=\"jeux?jeuChoisi=1129\" class=\"confetti couleur4 taille2 fonte10\">Isle of Skye</a>
                                  <a href=\"jeux?jeuChoisi=113\" class=\"confetti couleur5 taille3 fonte0\">Jungle Speed</a>
                            <a href=\"jeux?jeuChoisi=117\" class=\"confetti couleur6 taille4 fonte1\">Kahmaté</a>
                            <a href=\"jeux?jeuChoisi=26\" class=\"confetti couleur7 taille5 fonte2\">Kahuna</a>
                            <a href=\"jeux?jeuChoisi=58\" class=\"confetti couleur8 taille6 fonte3\">Keythedral</a>
                                  <a href=\"jeux?jeuChoisi=104\" class=\"confetti couleur9 taille0 fonte4\">Korsar</a>
                            <a href=\"jeux?jeuChoisi=89\" class=\"confetti couleur10 taille1 fonte5\">Um Krone und Kragen</a>
                            <a href=\"jeux?jeuChoisi=172\" class=\"confetti couleur11 taille2 fonte6\">Krosmaster arena</a>
                            <a href=\"jeux?jeuChoisi=164\" class=\"confetti couleur12 taille3 fonte7\">Laser maze</a>
                                  <a href=\"jeux?jeuChoisi=180\" class=\"confetti couleur0 taille4 fonte8\">Les Légendaires - L&#039;antre du Gardien</a>
                            <a href=\"jeux?jeuChoisi=88\" class=\"confetti couleur1 taille5 fonte9\">Légendes de Camelot</a>
                            <a href=\"jeux?jeuChoisi=1117\" class=\"confetti couleur2 taille6 fonte10\">Libertalia</a>
                                        <a href=\"jeux?jeuChoisi=188\" class=\"confetti couleur3 taille0 fonte0\">Los Mampfos</a>
                            <a href=\"jeux?jeuChoisi=110\" class=\"confetti couleur4 taille1 fonte1\">Lost Valley</a>
                            <a href=\"jeux?jeuChoisi=27\" class=\"confetti couleur5 taille2 fonte2\">Loups Garous</a>
                            <a href=\"jeux?jeuChoisi=1157\" class=\"confetti couleur6 taille3 fonte3\">Mage knight</a>
                            <a href=\"jeux?jeuChoisi=182\" class=\"confetti couleur7 taille4 fonte4\">Mage wars</a>
                            <a href=\"jeux?jeuChoisi=28\" class=\"confetti couleur8 taille5 fonte5\">Maharadjah</a>
                            <a href=\"jeux?jeuChoisi=67\" class=\"confetti couleur9 taille6 fonte6\">Maka Bana</a>
                                  <a href=\"jeux?jeuChoisi=187\" class=\"confetti couleur10 taille0 fonte7\">The Manhattan Project</a>
                            <a href=\"jeux?jeuChoisi=1126\" class=\"confetti couleur11 taille1 fonte8\">Le manoir infernal</a>
                            <a href=\"jeux?jeuChoisi=48\" class=\"confetti couleur12 taille2 fonte9\">Mare Nostrum</a>
                                  <a href=\"jeux?jeuChoisi=99\" class=\"confetti couleur0 taille3 fonte10\">Marvel Heroes</a>
                                  <a href=\"jeux?jeuChoisi=1153\" class=\"confetti couleur1 taille4 fonte0\">Medici vs Strozzi</a>
                            <a href=\"jeux?jeuChoisi=165\" class=\"confetti couleur2 taille5 fonte1\">Medina</a>
                            <a href=\"jeux?jeuChoisi=1138\" class=\"confetti couleur3 taille6 fonte2\">Metal Adventures</a>
                                  <a href=\"jeux?jeuChoisi=153\" class=\"confetti couleur4 taille0 fonte3\">Meurtre sur le Nil</a>
                            <a href=\"jeux?jeuChoisi=126\" class=\"confetti couleur5 taille1 fonte4\">Die Meuterei (La mutinerie)</a>
                            <a href=\"jeux?jeuChoisi=75\" class=\"confetti couleur6 taille2 fonte5\">Mission Planète Rouge</a>
                            <a href=\"jeux?jeuChoisi=171\" class=\"confetti couleur7 taille3 fonte6\">Mombasa</a>
                            <a href=\"jeux?jeuChoisi=100\" class=\"confetti couleur8 taille4 fonte7\">Mr Jack</a>
                            <a href=\"jeux?jeuChoisi=73\" class=\"confetti couleur9 taille5 fonte8\">Munchkin</a>
                            <a href=\"jeux?jeuChoisi=1119\" class=\"confetti couleur10 taille6 fonte9\">Myrmes</a>
                                  <a href=\"jeux?jeuChoisi=1123\" class=\"confetti couleur11 taille0 fonte10\">Mysterium</a>
                                  <a href=\"jeux?jeuChoisi=1139\" class=\"confetti couleur12 taille1 fonte0\">Naufragés</a>
                                  <a href=\"jeux?jeuChoisi=1120\" class=\"confetti couleur0 taille2 fonte1\">Néfarious</a>
                            <a href=\"jeux?jeuChoisi=116\" class=\"confetti couleur1 taille3 fonte2\">Nefertiti</a>
                            <a href=\"jeux?jeuChoisi=1130\" class=\"confetti couleur2 taille4 fonte3\">Nemeton</a>
                            <a href=\"jeux?jeuChoisi=170\" class=\"confetti couleur3 taille5 fonte4\">Netrunner</a>
                            <a href=\"jeux?jeuChoisi=120\" class=\"confetti couleur4 taille6 fonte5\">Neuroshima Hex !</a>
                                  <a href=\"jeux?jeuChoisi=147\" class=\"confetti couleur5 taille0 fonte6\">NightFall</a>
                            <a href=\"jeux?jeuChoisi=141\" class=\"confetti couleur6 taille1 fonte7\">Offrandes</a>
                            <a href=\"jeux?jeuChoisi=29\" class=\"confetti couleur7 taille2 fonte8\">Oh les nains</a>
                            <a href=\"jeux?jeuChoisi=146\" class=\"confetti couleur8 taille3 fonte9\">Olympos</a>
                            <a href=\"jeux?jeuChoisi=1144\" class=\"confetti couleur9 taille4 fonte10\">Onirim</a>
                                  <a href=\"jeux?jeuChoisi=138\" class=\"confetti couleur10 taille5 fonte0\">Opus Dei</a>
                            <a href=\"jeux?jeuChoisi=121\" class=\"confetti couleur11 taille6 fonte1\">Pandémie</a>
                                  <a href=\"jeux?jeuChoisi=30\" class=\"confetti couleur12 taille0 fonte2\">Pente</a>
                                  <a href=\"jeux?jeuChoisi=108\" class=\"confetti couleur0 taille1 fonte3\">Petits meurtres &amp; faits divers</a>
                            <a href=\"jeux?jeuChoisi=31\" class=\"confetti couleur1 taille2 fonte4\">Phoenix</a>
                            <a href=\"jeux?jeuChoisi=1154\" class=\"confetti couleur2 taille3 fonte5\">Les Piliers de la Terre</a>
                            <a href=\"jeux?jeuChoisi=74\" class=\"confetti couleur3 taille4 fonte6\">Pirates of the Spanish Main</a>
                            <a href=\"jeux?jeuChoisi=32\" class=\"confetti couleur4 taille5 fonte7\">Planet Petri</a>
                            <a href=\"jeux?jeuChoisi=60\" class=\"confetti couleur5 taille6 fonte8\">Puerto Rico</a>
                                  <a href=\"jeux?jeuChoisi=161\" class=\"confetti couleur6 taille0 fonte9\">Puissance 4</a>
                            <a href=\"jeux?jeuChoisi=33\" class=\"confetti couleur7 taille1 fonte10\">Quads</a>
                                  <a href=\"jeux?jeuChoisi=145\" class=\"confetti couleur8 taille2 fonte0\">Quarriors</a>
                            <a href=\"jeux?jeuChoisi=34\" class=\"confetti couleur9 taille3 fonte1\">Quatro</a>
                            <a href=\"jeux?jeuChoisi=181\" class=\"confetti couleur10 taille4 fonte2\">Qui est-ce ?</a>
                            <a href=\"jeux?jeuChoisi=115\" class=\"confetti couleur11 taille5 fonte3\">Race for the Galaxy</a>
                            <a href=\"jeux?jeuChoisi=1134\" class=\"confetti couleur12 taille6 fonte4\">Race to the summit</a>
                                        <a href=\"jeux?jeuChoisi=94\" class=\"confetti couleur0 taille0 fonte5\">Railroad tycoon</a>
                            <a href=\"jeux?jeuChoisi=143\" class=\"confetti couleur1 taille1 fonte6\">Rallyman</a>
                            <a href=\"jeux?jeuChoisi=1145\" class=\"confetti couleur2 taille2 fonte7\">Riff Raff</a>
                            <a href=\"jeux?jeuChoisi=35\" class=\"confetti couleur3 taille3 fonte8\">RoboRally</a>
                            <a href=\"jeux?jeuChoisi=36\" class=\"confetti couleur4 taille4 fonte9\">Le Roi des Roses</a>
                            <a href=\"jeux?jeuChoisi=130\" class=\"confetti couleur5 taille5 fonte10\">Roll through the ages</a>
                                  <a href=\"jeux?jeuChoisi=1124\" class=\"confetti couleur6 taille6 fonte0\">Room 25</a>
                                  <a href=\"jeux?jeuChoisi=1135\" class=\"confetti couleur7 taille0 fonte1\">En route vers les Indes</a>
                            <a href=\"jeux?jeuChoisi=162\" class=\"confetti couleur8 taille1 fonte2\">Rummikub</a>
                            <a href=\"jeux?jeuChoisi=83\" class=\"confetti couleur9 taille2 fonte3\">Runebound</a>
                            <a href=\"jeux?jeuChoisi=178\" class=\"confetti couleur10 taille3 fonte4\">Rush hour</a>
                            <a href=\"jeux?jeuChoisi=50\" class=\"confetti couleur11 taille4 fonte5\">Sans foi ni loi</a>
                            <a href=\"jeux?jeuChoisi=93\" class=\"confetti couleur12 taille5 fonte6\">Santy Anno</a>
                                  <a href=\"jeux?jeuChoisi=49\" class=\"confetti couleur0 taille6 fonte7\">Scotland Yard</a>
                                  <a href=\"jeux?jeuChoisi=51\" class=\"confetti couleur1 taille0 fonte8\">Serengeti</a>
                            <a href=\"jeux?jeuChoisi=38\" class=\"confetti couleur2 taille1 fonte9\">Service Compris</a>
                            <a href=\"jeux?jeuChoisi=39\" class=\"confetti couleur3 taille2 fonte10\">Set !</a>
                                  <a href=\"jeux?jeuChoisi=132\" class=\"confetti couleur4 taille3 fonte0\">Shadow hunters</a>
                            <a href=\"jeux?jeuChoisi=169\" class=\"confetti couleur5 taille4 fonte1\">Sheriff de Nottingham</a>
                            <a href=\"jeux?jeuChoisi=1155\" class=\"confetti couleur6 taille5 fonte2\">Sherlock Holmes, détective conseil</a>
                            <a href=\"jeux?jeuChoisi=154\" class=\"confetti couleur7 taille6 fonte3\">Six pieds sous terre</a>
                                  <a href=\"jeux?jeuChoisi=1146\" class=\"confetti couleur8 taille0 fonte4\">Small World</a>
                            <a href=\"jeux?jeuChoisi=184\" class=\"confetti couleur9 taille1 fonte5\">Smash up</a>
                            <a href=\"jeux?jeuChoisi=174\" class=\"confetti couleur10 taille2 fonte6\">Space alert</a>
                            <a href=\"jeux?jeuChoisi=40\" class=\"confetti couleur11 taille3 fonte7\">Space Crusade</a>
                            <a href=\"jeux?jeuChoisi=41\" class=\"confetti couleur12 taille4 fonte8\">Star Wars</a>
                                  <a href=\"jeux?jeuChoisi=42\" class=\"confetti couleur0 taille5 fonte9\">Stealth</a>
                            <a href=\"jeux?jeuChoisi=118\" class=\"confetti couleur1 taille6 fonte10\">Stonehenge</a>
                                        <a href=\"jeux?jeuChoisi=77\" class=\"confetti couleur2 taille0 fonte0\">Stratego</a>
                            <a href=\"jeux?jeuChoisi=1118\" class=\"confetti couleur3 taille1 fonte1\">Summoner Wars</a>
                            <a href=\"jeux?jeuChoisi=189\" class=\"confetti couleur4 taille2 fonte2\">Takenoko</a>
                            <a href=\"jeux?jeuChoisi=111\" class=\"confetti couleur5 taille3 fonte3\">Taluva</a>
                            <a href=\"jeux?jeuChoisi=97\" class=\"confetti couleur6 taille4 fonte4\">Tannhaüser</a>
                            <a href=\"jeux?jeuChoisi=1121\" class=\"confetti couleur7 taille5 fonte5\">Targui</a>
                            <a href=\"jeux?jeuChoisi=159\" class=\"confetti couleur8 taille6 fonte6\">Taverna</a>
                                  <a href=\"jeux?jeuChoisi=177\" class=\"confetti couleur9 taille0 fonte7\">Terra Mystica</a>
                            <a href=\"jeux?jeuChoisi=1158\" class=\"confetti couleur10 taille1 fonte8\">Terraforming Mars</a>
                            <a href=\"jeux?jeuChoisi=136\" class=\"confetti couleur11 taille2 fonte9\">Through the ages</a>
                            <a href=\"jeux?jeuChoisi=133\" class=\"confetti couleur12 taille3 fonte10\">Thunderstone</a>
                                        <a href=\"jeux?jeuChoisi=1147\" class=\"confetti couleur0 taille4 fonte0\">Thurn und Taxis</a>
                            <a href=\"jeux?jeuChoisi=112\" class=\"confetti couleur1 taille5 fonte1\">Tikal</a>
                            <a href=\"jeux?jeuChoisi=152\" class=\"confetti couleur2 taille6 fonte2\">Timeline</a>
                                  <a href=\"jeux?jeuChoisi=62\" class=\"confetti couleur3 taille0 fonte3\">Tom Tube</a>
                            <a href=\"jeux?jeuChoisi=46\" class=\"confetti couleur4 taille1 fonte4\">Tonga Bonga</a>
                            <a href=\"jeux?jeuChoisi=148\" class=\"confetti couleur5 taille2 fonte5\">Tournay</a>
                            <a href=\"jeux?jeuChoisi=127\" class=\"confetti couleur6 taille3 fonte6\">Trader</a>
                            <a href=\"jeux?jeuChoisi=43\" class=\"confetti couleur7 taille4 fonte7\">Vertigo</a>
                            <a href=\"jeux?jeuChoisi=44\" class=\"confetti couleur8 taille5 fonte8\">Une Vie de Chien</a>
                            <a href=\"jeux?jeuChoisi=45\" class=\"confetti couleur9 taille6 fonte9\">Vinci</a>
                                  <a href=\"jeux?jeuChoisi=168\" class=\"confetti couleur10 taille0 fonte10\">Unlock</a>
                                  <a href=\"jeux?jeuChoisi=1137\" class=\"confetti couleur11 taille1 fonte0\">This war of mine</a>
                            <a href=\"jeux?jeuChoisi=86\" class=\"confetti couleur12 taille2 fonte1\">When darkness comes</a>
                                  <a href=\"jeux?jeuChoisi=66\" class=\"confetti couleur0 taille3 fonte2\">Wings of War</a>
                            <a href=\"jeux?jeuChoisi=78\" class=\"confetti couleur1 taille4 fonte3\">Wizard Kings</a>
                            <a href=\"jeux?jeuChoisi=129\" class=\"confetti couleur2 taille5 fonte4\">Zack &amp; Pack</a>
            
        </div>
      </div>

      <div class='col-7 retracter' style=\"padding-top : 1em;\">
        <div class='fondOpaque cadreBleu enRelatif' style=\"height : 60vh;\">
          <div class='enLigne'>
            <h3 class='enLigne'><label>But :</label></h3>
              <span class='enLigne' style=\"font-size : 1.5em; font-weight : bold;\">Développer sa ferme</span>
          </div>
          <h3><label style=\"text-align : left;\">Principe :</label></h3>
          <div class='sousFenetre text-justify'>
            Le jeu possède plusieurs modes : familial / débutant / confirmé<br/>
Les plateaux utilisés, ainsi que les différents paquets de cartes, permettent en effet de moduler le niveau de jeu, ainsi que la variété des parties.
Les joueurs démarrent avec une ferme comportant 2 pièces d'habitation et 13 autres cases de terrain. Au cours de la partie, ils pourront construire sur ces terrains:<br/>
<li> d'autres pièces pour leur maison</li>
<li> des champs</li>
<li> des enclos</li>
<li> des étables</li>
Ils n'ont que 2 personnes pour s'occuper de cette ferme, donc 2 actions par tour, mais des naissances peuvent se produire par la suite. Il faudra cependant, régulièrement, nourrir les occupants de la ferme, et donc produire de la nourriture.<br/>
Entre les semailles, l'élevage (moutons, sangliers, boeufs), la construction d'étables, d'enclos, de pièces supplémentaires ...etc., de nombreuses actions sont disponibles, et des choix doivent être faits pour réussir à développer convenablement sa ferme sans affamer les fermiers.<br/>
La partie se joue en 14 tours à l'issue desquels les points sont comptés. Tous les aménagements de la ferme, les animaux présents, les réserves en légumes et céréales, les habitants, et l'état de l'habitation permettent de gagner des points.<br><br>

Compter sur une durée d'1h par joueur.<br>

Extension : Les fermiers de la lande
<br>Voir aussi la version pour 2 joueurs : Terres d'élevage
          </div>
        </div>
      </div>


      
      </div>     </div> 

  
    <div id=\"RangementDesJeux\" class=\"jeSuisInvisible\">
    \t<?php echo \$_SESSION[\"remplissageJeux\"]; ?>
    </div>
  </body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/test.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html class=\"w-100\">
<head>
    <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"/css/general.css\">
  
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
  <script src=\"https://kit.fontawesome.com/ac0e3984ff.js\"></script>
  
  <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
  <![endif]-->
  <script>
    (function ( \$ ) { 

    // put all that \"wl_alert\" code here   

    }( jQuery ));
  </script>


  <link rel=\"stylesheet\" href=\"/css/jeux.css\">
  <link rel=\"stylesheet\" href=\"/css/toolTip.css\">
</head>

  <body class=\"w-max\">
      
    <header class=\"row w-max\">
      <div class=\"col-12 container-fluid w-max\">
        <nav class=\"navbar navbar-expand-sm navbar-dark bg-primary w-max\">
            <a class=\"navbar-brand col-1\" href=\"#\"><img src=\"/images/logo.gif\" class=\"logo\" class=\"enAbsolu\" style=\"top:-1em;left:0;\"></a>
            <div class=\"navbar-nav col-11 d-none d-md-block\">                 <li class=\"nav-item\" title=\"Page d'accueil\">
                  <a class=\"nav-link visible-xs-block\" href=\"accueil\"><i class=\"fas fa-home\">&nbsp;</i>Accueil<span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\" title=\"Calendrier des évènements\">
                  <a class=\"nav-link\" href=\"calendrier\"><i class=\"fas fa-calendar-alt\">&nbsp;</i>Agenda</a>
                </li>
                <li class=\"nav-item active\" title=\"Liste de nos jeux\">
                  <a class=\"nav-link\" href=\"jeux\"><i class=\"fas fa-dice\">&nbsp;</i>Jeux</a>
                </li>
                                                <li class=\"nav-item\" title=\"Pour nous trouver ou nous envoyer un message\">
                  <a class=\"nav-link\" href=\"contact\"><i class=\"fas fa-comment\">&nbsp;</i>Contact</a>
                </li>
                <li class=\"nav-item\" title=\"Liens vers d'autres pages\">
                  <div class=\"btn-group\">                    <button type=\"button\" class=\"btn btn-default dropdown-toggle liens\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fas fa-link\">&nbsp;</i>Liens</button>
                    <ul class=\"dropdown-menu bg-primary\">
                      <a class=\"dropdown-item\" href=\"https://www.bussysaintgeorges.fr/education/petite-enfance/la-ludotheque/\" title=\"Ludothèque de Bussy, gratuite, pour les enfants de 0 à 12 ans, pour le moment ...\">Ludothèque de Bussy</a>
                      <a class=\"dropdown-item\" href=\"http://www.lavalleedesjeux.com/\" title=\"Ludothèque ouverte à tous, sur inscription (3O€)\">Ludothèque de Bailly Romainvilliers</a>
                      <div class=\"dropdown-divider\"></div>
                      <a class=\"dropdown-item\" href=\"https://ludiworld.com/newshop/84-jeux-de-societe\" title=\"Votre boutique de jeux, ici, à Bussy !\">Ludiworld</a>
                      <a class=\"dropdown-item\" href=\"http://www.ludhainaut.fr/\" title=\"Association de joueurs à Onnaing (Nord)\">Lud'Hainaut</a>
                    </ul>
                  </div>
                </li>
              </div> 
              <div class=\"navbar-nav col-xs-9 d-md-none enRelatif\">                 <span class=\"texteInvisible w-max\" style=\"font-size : 30px;min-width : 80vw;\">blabla</span>
              </div>
              <div class=\"navbar-nav col-xs-2 d-md-none enRelatif\" style=\"text-align : right;\"> 
                <i class=\"btn btn-default fas fa-bars enRelatif burger align-self-end\" data-toggle=\"dropdown\"  aria-expanded=\"false\" style=\"top : 0; right : 0;\">&nbsp;</i>
                <div class=\"btn-group dropleft enRelatif\" style=\"right : 0; top : 3em; text-align : right; box-sizing: border-box;\">
                  <ul class=\"dropdown-menu bg-primary enRelatif burgerMenu\" style=\"right : 0; box-sizing: border-box;\">
                      <a class=\"dropdown-item\" href=\"accueil\" title=\"Page d'accueil\">Accueil</a>
                      <a class=\"dropdown-item\" href=\"calendrier\" title=\"Calendrier des évènements\">Agenda</a>
                      <a class=\"dropdown-item\" href=\"jeux\" title=\"Liste de nos jeux\">Jeux</a>
                      <a class=\"dropdown-item\" href=\"contact\" title=\"Pour nous trouver ou nous envoyer un message\">Contact</a>
                      <div class=\"dropdown-divider\"></div>
                      <a class=\"dropdown-item\" href=\"https://www.bussysaintgeorges.fr/education/petite-enfance/la-ludotheque/\" title=\"Ludothèque de Bussy, gratuite, pour les enfants de 0 à 12 ans, pour le moment ...\">Ludothèque de Bussy</a>
                      <a class=\"dropdown-item\" href=\"http://www.lavalleedesjeux.com/\" title=\"Ludothèque ouverte à tous, sur inscription (3O€)\">Ludothèque de Bailly Romainvilliers</a>
                      <a class=\"dropdown-item\" href=\"https://ludiworld.com/newshop/84-jeux-de-societe\" title=\"Votre boutique de jeux, ici, à Bussy !\">Ludiworld</a>
                      <a class=\"dropdown-item\" href=\"http://www.ludhainaut.fr/\" title=\"Association de joueurs à Onnaing (Nord)\">Lud'Hainaut</a>
                    </ul>
                </div>
                
                            </div> 
            </div>
        </nav>
      </div>
    </header>

    <img class=\"fond container-fluid d-none d-md-block enAbsolu\" style=\"top:3em; background-size : cover;\" src=\"/images/fond.png\">
    <img class=\"fond container-fluid d-md-none enAbsolu\" style=\"top:3em; background-size : cover;\" src=\"/images/fondVertical.png\">

    <div class=\"row\">
      <div class=\"col-12\"></div>
          
      <div class='col-4'>
          <form  method=\"POST\" action=\"jeux?operation=recherche\" class=\"h-100 fondOpaque cadreBleu\">
              <table class=\"w-100 h-100\">
                <tr class=\"h-20\">
                  <td class=\"w-25\">
                    <label>Titre :</label>
                  </td>
                  <td style=\"position:relative;\" class=\"w-75\">
                    <a href=\"#\" style=\"position:relative;\">
                      <input type='text' name='jeuTitre'><div class='tool-tip bottom'>Nom&nbsp;complet&nbsp;ou&nbsp;partiel</div>
                    </a>
                  </td>
                </tr>
                <tr class=\"h-20\">
                  <td>
                    <label>Niveau :</label>
                  </td>
                  <td>
                    <a href=\"#\" style=\"position:relative;\">
            \t\t\t\t\t<select name='jeuNiveau'>
            \t\t\t\t\t\t<option value='0'></option>
        \t    \t\t\t\t\t<option value='1' class=\"fondVert\" alt=\"Parties courtes, règles simples\">famille - enfants</option>
        \t\t\t    \t\t\t<option value='2' class=\"fondJaune\">abordable</option>
      \t  \t\t\t\t    \t<option value='3' class=\"fondOrange\">confirmés</option>
    \t\t\t  \t\t\t\t\t\t<option value='4' class=\"fondRouge\">connaisseurs</option>
          \t  \t\t\t\t\t<option value='5' class=\"fondNoir\">experts</option>
      \t    \t  \t\t\t</select>
                      <div class='tool-tip bottom'>Difficulté&nbsp;recherchée.</div>
                    </a>
                  </td>
                </tr>
                <tr class=\"h-20\">
                  <td>
                    <label>Durée :</label>
                  </td>
                  <td>
                    <a href=\"#\" style=\"position:relative;\">
          \t\t\t\t\t\t<select name='jeuDuree'>
          \t\t\t\t\t\t\t<option value='0'></option>
        \t\t\t\t\t\t\t\t<option value='1'>20mn ou moins</option>
  \t\t    \t\t\t\t\t\t\t<option value='2'>20 à 45mn</option>
      \t    \t\t\t\t\t\t<option value='3'>jusqu'à 1h30</option>
      \t\t    \t\t\t\t\t<option value='4'>1h30 à 3h</option>
      \t\t\t    \t\t\t\t<option value='5'>3h ou plus</option>
    \t\t\t\t\t    \t\t</select>
                      <div class='tool-tip bottom'>Durée&nbsp;d'une&nbsp;partie.
                      </div>
                    </a>
                  </td>
                </tr>
                <tr class=\"h-20\">
                  <td>
                    <label>Nombre :</label>
                  </td>
                  <td>
                    <a href=\"#\" style=\"position:relative;\">
            \t\t\t\t\t<select name='jeuNb'>
        \t    \t\t\t\t\t<option value='0'></option>
      \t\t\t\t    \t\t\t<option value='1'>1 joueur</option>
 \t\t\t  \t\t\t\t\t    \t<option value='2'>2 joueurs</option>
            \t\t\t\t\t\t<option value='3'>3 joueurs</option>
            \t\t\t\t\t\t<option value='4'>4 joueurs</option>
      \t      \t\t\t\t\t<option value='5'>5 joueurs</option>
\t\t\t\t\t\t      \t\t\t<option value='6'>6 joueurs</option>
      \t\t\t\t\t      \t<option value='7'>7 joueurs</option>
          \t\t\t\t  \t\t<option value='8'>8 joueurs et plus</option>
          \t\t\t\t\t  </select>
                      <div class='tool-tip top'>Nombre&nbsp;de&nbsp;joueurs.</div>
                    </a>
                  </td>
                </tr>
                <tr class=\"h-20\">
                  <td colspan=2>
                    <input type=\"submit\" class=\"cadreBleu fondBleu bouton\" href=\"jeux?operation=recherche\" value=\"Rechercher les jeux correspondants\">
                  </td>
                </tr>
              </table>
          </form>
      </div>

      <div class='col-7' style=\"background-image:url(/images/imagesJeux/agricola.jpg);background-repeat : no-repeat;\">
            <div class='row retracter'>
              <div class=\"col-12 cadreBleu fondBleu\"><h2>Agricola</h2></div>
              <div class='col-10 enLigne w-100' id='divDuree'>
                <div class=\"camembertParent enLigne\">
                  <img class=\"imageCarree1\" src=\"../images/secteur60vert.gif\"><img class=\"imageCarree1\" src=\"../images/cadran.gif\"><span class=\"texteCarre1\">1h</span><img class=\"imageCarree2\" src=\"../images/secteur60rouge.gif\"><img class=\"imageCarree2\" src=\"../images/cadran.gif\"><span class=\"texteCarre1 texteCarre2\">4h</span>
                </div>
                <div class=\"legendeCamembert\">
                  <h3>Légende :</h3>
                  <img class='enLigne rectangle' src=\"/images/legendeVert.gif\">&nbsp;durée minimale : 1h, enfin la plupart du temps<br>
                  <img class='enLigne rectangle' src=\"/images/legendeRouge.gif\">&nbsp;durée maximale estimée à 4h environ<br>
                  Jeu pour 1 à 5 joueurs<br>
                  Niveau de difficulté : Jeu simple, qui ne requiert qu&#039;un peu de réflexion.
                  <table>
                    <tr>
                      <td rowspan=3><img class='mini' src=\"/images/pictoNiv2.gif\"></td>
                      <td rowspan=3><div class=\"texteInvisible\">blabla</div></td>
                      <td><img class='bonhomme' src=\"/images/niveau_enfant.gif\"></td>
                      <td>5-8 ans</td>
                      <td class='texteInvisible' rowspan=3 style=\"background-image:url(/images/fleches2.gif);\">blabla</td>
                      <td><img class='rectangle' src=\"/images/niveauRouge.gif\"></td>
                      <td>trop dur</td>
                    </tr>
                    <tr>
                      <td><img class='bonhomme' src=\"/images/niveau_preado.gif\"></td>
                      <td>9-13 ans</td>
                      <td><img class='rectangle' src=\"/images/niveauOrange.gif\"></td>
                      <td>compliqué</td>
                    </tr>
                    <tr>
                      <td><img class='bonhomme' src=\"/images/niveau_grand.gif\"></td>
                      <td>14 ans et plus</td>
                      <td><img class='rectangle' src=\"/images/niveauVert.gif\"></td>
                      <td>facile</td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class='col-2' id='divNiveau'><img class='mini enAbsolu' style=\"right : 0;top : 2em;\" src=\"/images/pictoNiv2.gif\"></div>
              <div class='col-12 inline' id='divTxtNbJoueurs'>
                <label class='gauche blanc' style=\"font-size : 1.4em;\">1 à 5 joueurs</label>
                <img class='mini enAbsolu' style=\"right : 0;bottom : 1em;\" src=\"/images/nbJoueurs.gif\">
              </div>
            </div>
      </div>

      <div class='col-5 retracter' style=\"padding-top : 1em;\">
        <div class='listeJeux cadreBleu'>

                <a href=\"jeux?jeuChoisi=144\" class=\"confetti couleur10 taille3 fonte9\">7 Wonders</a>
                            <a href=\"jeux?jeuChoisi=1133\" class=\"confetti couleur11 taille4 fonte10\">7 wonders duel</a>
                                  <a href=\"jeux?jeuChoisi=1125\" class=\"confetti couleur12 taille5 fonte0\">L&#039;aéropostale</a>
                                  <a href=\"jeux?jeuChoisi=1\" class=\"confetti couleur0 taille6 fonte1\">Africa</a>
                                  <a href=\"jeux?jeuChoisi=57\" class=\"confetti couleur1 taille0 fonte2\">L&#039;age des Dieux</a>
                            <a href=\"jeux?jeuChoisi=2\" class=\"confetti couleur2 taille1 fonte3\">Age of Renaissance</a>
                            <a href=\"jeux?jeuChoisi=84\" class=\"confetti couleur3 taille2 fonte4\">Age of Steam</a>
                            <a href=\"jeux?jeuChoisi=123\" class=\"confetti couleur4 taille3 fonte5\">Agricola</a>
                            <a href=\"jeux?jeuChoisi=149\" class=\"confetti couleur5 taille4 fonte6\">Agricola - Terres d&#039;élevage</a>
                            <a href=\"jeux?jeuChoisi=1136\" class=\"confetti couleur6 taille5 fonte7\">Air show</a>
                            <a href=\"jeux?jeuChoisi=65\" class=\"confetti couleur7 taille6 fonte8\">Alhambra</a>
                                  <a href=\"jeux?jeuChoisi=131\" class=\"confetti couleur8 taille0 fonte9\">Amytis</a>
                            <a href=\"jeux?jeuChoisi=1149\" class=\"confetti couleur9 taille1 fonte10\">Andor</a>
                                  <a href=\"jeux?jeuChoisi=1142\" class=\"confetti couleur10 taille2 fonte0\">Anima - L&#039;Ombre d&#039;Omega</a>
                            <a href=\"jeux?jeuChoisi=114\" class=\"confetti couleur11 taille3 fonte1\">Animalia</a>
                            <a href=\"jeux?jeuChoisi=1156\" class=\"confetti couleur12 taille4 fonte2\">Ascension</a>
                                  <a href=\"jeux?jeuChoisi=139\" class=\"confetti couleur0 taille5 fonte3\">Assassin X</a>
                            <a href=\"jeux?jeuChoisi=96\" class=\"confetti couleur1 taille6 fonte4\">Astoria</a>
                                  <a href=\"jeux?jeuChoisi=53\" class=\"confetti couleur2 taille0 fonte5\">Attakube</a>
                            <a href=\"jeux?jeuChoisi=59\" class=\"confetti couleur3 taille1 fonte6\">Attika</a>
                            <a href=\"jeux?jeuChoisi=82\" class=\"confetti couleur4 taille2 fonte7\">Les Aventuriers du Rail (Europe)</a>
                            <a href=\"jeux?jeuChoisi=3\" class=\"confetti couleur5 taille3 fonte8\">The Awful green things from outer space</a>
                            <a href=\"jeux?jeuChoisi=1131\" class=\"confetti couleur6 taille4 fonte9\">Le bal des coccinelles</a>
                            <a href=\"jeux?jeuChoisi=176\" class=\"confetti couleur7 taille5 fonte10\">Batt&#039;l Khaos</a>
                                  <a href=\"jeux?jeuChoisi=107\" class=\"confetti couleur8 taille6 fonte0\">Battle Lore</a>
                                  <a href=\"jeux?jeuChoisi=124\" class=\"confetti couleur9 taille0 fonte1\">Battlestar Galactica</a>
                            <a href=\"jeux?jeuChoisi=37\" class=\"confetti couleur10 taille1 fonte2\">Bazard bizarre ultime</a>
                            <a href=\"jeux?jeuChoisi=156\" class=\"confetti couleur11 taille2 fonte3\">Blokus</a>
                            <a href=\"jeux?jeuChoisi=4\" class=\"confetti couleur12 taille3 fonte4\">Bluff</a>
                                  <a href=\"jeux?jeuChoisi=54\" class=\"confetti couleur0 taille4 fonte5\">Buffy - Menace sur Sunnydale</a>
                            <a href=\"jeux?jeuChoisi=134\" class=\"confetti couleur1 taille5 fonte6\">Les cabanes de m&#039;sieur Robinson</a>
                            <a href=\"jeux?jeuChoisi=5\" class=\"confetti couleur2 taille6 fonte7\">Can&#039;t Stop</a>
                                  <a href=\"jeux?jeuChoisi=6\" class=\"confetti couleur3 taille0 fonte8\">Carcassonne</a>
                            <a href=\"jeux?jeuChoisi=1150\" class=\"confetti couleur4 taille1 fonte9\">Cart&#039;foot</a>
                            <a href=\"jeux?jeuChoisi=85\" class=\"confetti couleur5 taille2 fonte10\">Cash and guns</a>
                                  <a href=\"jeux?jeuChoisi=81\" class=\"confetti couleur6 taille3 fonte0\">Caylus</a>
                            <a href=\"jeux?jeuChoisi=1132\" class=\"confetti couleur7 taille4 fonte1\">Célestia</a>
                            <a href=\"jeux?jeuChoisi=7\" class=\"confetti couleur8 taille5 fonte2\">César et Cléopatre</a>
                            <a href=\"jeux?jeuChoisi=1116\" class=\"confetti couleur9 taille6 fonte3\">Chantilly</a>
                                  <a href=\"jeux?jeuChoisi=8\" class=\"confetti couleur10 taille0 fonte4\">Chasse gardée</a>
                            <a href=\"jeux?jeuChoisi=70\" class=\"confetti couleur11 taille1 fonte5\">Les Chevaliers de la Table Ronde</a>
                            <a href=\"jeux?jeuChoisi=9\" class=\"confetti couleur12 taille2 fonte6\">Chinatown</a>
                                  <a href=\"jeux?jeuChoisi=1152\" class=\"confetti couleur0 taille3 fonte7\">cHTeMeLe</a>
                            <a href=\"jeux?jeuChoisi=109\" class=\"confetti couleur1 taille4 fonte8\">CIA vs KGB</a>
                            <a href=\"jeux?jeuChoisi=10\" class=\"confetti couleur2 taille5 fonte9\">Citadelle</a>
                            <a href=\"jeux?jeuChoisi=11\" class=\"confetti couleur3 taille6 fonte10\">Les Cités Perdues</a>
                                        <a href=\"jeux?jeuChoisi=12\" class=\"confetti couleur4 taille0 fonte0\">Citta</a>
                            <a href=\"jeux?jeuChoisi=151\" class=\"confetti couleur5 taille1 fonte1\">The city</a>
                            <a href=\"jeux?jeuChoisi=1141\" class=\"confetti couleur6 taille2 fonte2\">Clans</a>
                            <a href=\"jeux?jeuChoisi=135\" class=\"confetti couleur7 taille3 fonte3\">Claustrophobia</a>
                            <a href=\"jeux?jeuChoisi=1122\" class=\"confetti couleur8 taille4 fonte4\">Code names Duo</a>
                            <a href=\"jeux?jeuChoisi=140\" class=\"confetti couleur9 taille5 fonte5\">Coeur de dragon</a>
                            <a href=\"jeux?jeuChoisi=47\" class=\"confetti couleur10 taille6 fonte6\">Le collier de la Reine</a>
                                  <a href=\"jeux?jeuChoisi=13\" class=\"confetti couleur11 taille0 fonte7\">Les Colons De Katane</a>
                            <a href=\"jeux?jeuChoisi=14\" class=\"confetti couleur12 taille1 fonte8\">Les Colons De L&#039;Espace</a>
                                  <a href=\"jeux?jeuChoisi=106\" class=\"confetti couleur0 taille2 fonte9\">Colosseum</a>
                            <a href=\"jeux?jeuChoisi=71\" class=\"confetti couleur1 taille3 fonte10\">Colossus Arena</a>
                                  <a href=\"jeux?jeuChoisi=15\" class=\"confetti couleur2 taille4 fonte0\">Condottiere</a>
                            <a href=\"jeux?jeuChoisi=105\" class=\"confetti couleur3 taille5 fonte1\">La conquête de Rome</a>
                            <a href=\"jeux?jeuChoisi=76\" class=\"confetti couleur4 taille6 fonte2\">Crimson Skies</a>
                                  <a href=\"jeux?jeuChoisi=179\" class=\"confetti couleur5 taille0 fonte3\">A la croisée des mondes - La boussole d&#039;or</a>
                            <a href=\"jeux?jeuChoisi=1159\" class=\"confetti couleur6 taille1 fonte4\">Cubulus</a>
                            <a href=\"jeux?jeuChoisi=157\" class=\"confetti couleur7 taille2 fonte5\">Descendance</a>
                            <a href=\"jeux?jeuChoisi=92\" class=\"confetti couleur8 taille3 fonte6\">Descent</a>
                            <a href=\"jeux?jeuChoisi=1143\" class=\"confetti couleur9 taille4 fonte7\">Dice Forge</a>
                            <a href=\"jeux?jeuChoisi=17\" class=\"confetti couleur10 taille5 fonte8\">Die Hanse</a>
                            <a href=\"jeux?jeuChoisi=16\" class=\"confetti couleur11 taille6 fonte9\">Diplomacy</a>
                                  <a href=\"jeux?jeuChoisi=155\" class=\"confetti couleur12 taille0 fonte10\">Disque Monde - Ankh-Morpork</a>
                                        <a href=\"jeux?jeuChoisi=166\" class=\"confetti couleur0 taille1 fonte0\">Disque monde - Les sorcières</a>
                            <a href=\"jeux?jeuChoisi=125\" class=\"confetti couleur1 taille2 fonte1\">Dixit</a>
                            <a href=\"jeux?jeuChoisi=119\" class=\"confetti couleur2 taille3 fonte2\">Dominion</a>
                            <a href=\"jeux?jeuChoisi=95\" class=\"confetti couleur3 taille4 fonte3\">Donjons et Dragons Miniatures</a>
                            <a href=\"jeux?jeuChoisi=18\" class=\"confetti couleur4 taille5 fonte4\">Drakon</a>
                            <a href=\"jeux?jeuChoisi=19\" class=\"confetti couleur5 taille6 fonte5\">Dune</a>
                                  <a href=\"jeux?jeuChoisi=137\" class=\"confetti couleur6 taille0 fonte6\">Dungeon Lords</a>
                            <a href=\"jeux?jeuChoisi=64\" class=\"confetti couleur7 taille1 fonte7\">Dungeon twister</a>
                            <a href=\"jeux?jeuChoisi=72\" class=\"confetti couleur8 taille2 fonte8\">Dungeoneer - Le Tombeau du Seigneur des Liches</a>
                            <a href=\"jeux?jeuChoisi=52\" class=\"confetti couleur9 taille3 fonte9\">Eden</a>
                            <a href=\"jeux?jeuChoisi=20\" class=\"confetti couleur10 taille4 fonte10\">Elixir</a>
                                  <a href=\"jeux?jeuChoisi=21\" class=\"confetti couleur11 taille5 fonte0\">En Garde</a>
                            <a href=\"jeux?jeuChoisi=128\" class=\"confetti couleur12 taille6 fonte1\">Eve Conquest</a>
                                        <a href=\"jeux?jeuChoisi=22\" class=\"confetti couleur0 taille0 fonte2\">Evo</a>
                            <a href=\"jeux?jeuChoisi=68\" class=\"confetti couleur1 taille1 fonte3\">Euphrate et Tigris</a>
                            <a href=\"jeux?jeuChoisi=98\" class=\"confetti couleur2 taille2 fonte4\">Fairy Tale</a>
                            <a href=\"jeux?jeuChoisi=1128\" class=\"confetti couleur3 taille3 fonte5\">Fairy tile</a>
                            <a href=\"jeux?jeuChoisi=150\" class=\"confetti couleur4 taille4 fonte6\">A few acres of snow</a>
                            <a href=\"jeux?jeuChoisi=1160\" class=\"confetti couleur5 taille5 fonte7\">La Fièvre de l&#039;Or</a>
                            <a href=\"jeux?jeuChoisi=175\" class=\"confetti couleur6 taille6 fonte8\">Firefly</a>
                                  <a href=\"jeux?jeuChoisi=167\" class=\"confetti couleur7 taille0 fonte9\">Five tribes</a>
                            <a href=\"jeux?jeuChoisi=55\" class=\"confetti couleur8 taille1 fonte10\">Formule Dé</a>
                                  <a href=\"jeux?jeuChoisi=91\" class=\"confetti couleur9 taille2 fonte0\">Full of dollars</a>
                            <a href=\"jeux?jeuChoisi=160\" class=\"confetti couleur10 taille3 fonte1\">Galaxy Trucker</a>
                            <a href=\"jeux?jeuChoisi=61\" class=\"confetti couleur11 taille4 fonte2\">A game of Thrones</a>
                            <a href=\"jeux?jeuChoisi=1140\" class=\"confetti couleur12 taille5 fonte3\">Gare à la toile</a>
                                  <a href=\"jeux?jeuChoisi=1148\" class=\"confetti couleur0 taille6 fonte4\">La Gloire de Rome</a>
                                  <a href=\"jeux?jeuChoisi=163\" class=\"confetti couleur1 taille0 fonte5\">Gravity maze</a>
                            <a href=\"jeux?jeuChoisi=185\" class=\"confetti couleur2 taille1 fonte6\">Guédelon</a>
                            <a href=\"jeux?jeuChoisi=69\" class=\"confetti couleur3 taille2 fonte7\">La guerre de l&#039;anneau</a>
                            <a href=\"jeux?jeuChoisi=23\" class=\"confetti couleur4 taille3 fonte8\">La Guerre des Moutons</a>
                            <a href=\"jeux?jeuChoisi=56\" class=\"confetti couleur5 taille4 fonte9\">Guerriers des étoiles</a>
                            <a href=\"jeux?jeuChoisi=90\" class=\"confetti couleur6 taille5 fonte10\">La Hache et le Feu</a>
                                  <a href=\"jeux?jeuChoisi=190\" class=\"confetti couleur7 taille6 fonte0\">Hakafuda</a>
                                  <a href=\"jeux?jeuChoisi=24\" class=\"confetti couleur8 taille0 fonte1\">Hannibal</a>
                            <a href=\"jeux?jeuChoisi=1151\" class=\"confetti couleur9 taille1 fonte2\">Heroes Dei</a>
                            <a href=\"jeux?jeuChoisi=63\" class=\"confetti couleur10 taille2 fonte3\">History of war</a>
                            <a href=\"jeux?jeuChoisi=122\" class=\"confetti couleur11 taille3 fonte4\">Horreur à Arkham</a>
                            <a href=\"jeux?jeuChoisi=87\" class=\"confetti couleur12 taille4 fonte5\">Iliade</a>
                                  <a href=\"jeux?jeuChoisi=25\" class=\"confetti couleur0 taille5 fonte6\">Illuminati</a>
                            <a href=\"jeux?jeuChoisi=1127\" class=\"confetti couleur1 taille6 fonte7\">Imagine</a>
                                  <a href=\"jeux?jeuChoisi=79\" class=\"confetti couleur2 taille0 fonte8\">Infra Tank</a>
                            <a href=\"jeux?jeuChoisi=101\" class=\"confetti couleur3 taille1 fonte9\">Invasions</a>
                            <a href=\"jeux?jeuChoisi=1129\" class=\"confetti couleur4 taille2 fonte10\">Isle of Skye</a>
                                  <a href=\"jeux?jeuChoisi=113\" class=\"confetti couleur5 taille3 fonte0\">Jungle Speed</a>
                            <a href=\"jeux?jeuChoisi=117\" class=\"confetti couleur6 taille4 fonte1\">Kahmaté</a>
                            <a href=\"jeux?jeuChoisi=26\" class=\"confetti couleur7 taille5 fonte2\">Kahuna</a>
                            <a href=\"jeux?jeuChoisi=58\" class=\"confetti couleur8 taille6 fonte3\">Keythedral</a>
                                  <a href=\"jeux?jeuChoisi=104\" class=\"confetti couleur9 taille0 fonte4\">Korsar</a>
                            <a href=\"jeux?jeuChoisi=89\" class=\"confetti couleur10 taille1 fonte5\">Um Krone und Kragen</a>
                            <a href=\"jeux?jeuChoisi=172\" class=\"confetti couleur11 taille2 fonte6\">Krosmaster arena</a>
                            <a href=\"jeux?jeuChoisi=164\" class=\"confetti couleur12 taille3 fonte7\">Laser maze</a>
                                  <a href=\"jeux?jeuChoisi=180\" class=\"confetti couleur0 taille4 fonte8\">Les Légendaires - L&#039;antre du Gardien</a>
                            <a href=\"jeux?jeuChoisi=88\" class=\"confetti couleur1 taille5 fonte9\">Légendes de Camelot</a>
                            <a href=\"jeux?jeuChoisi=1117\" class=\"confetti couleur2 taille6 fonte10\">Libertalia</a>
                                        <a href=\"jeux?jeuChoisi=188\" class=\"confetti couleur3 taille0 fonte0\">Los Mampfos</a>
                            <a href=\"jeux?jeuChoisi=110\" class=\"confetti couleur4 taille1 fonte1\">Lost Valley</a>
                            <a href=\"jeux?jeuChoisi=27\" class=\"confetti couleur5 taille2 fonte2\">Loups Garous</a>
                            <a href=\"jeux?jeuChoisi=1157\" class=\"confetti couleur6 taille3 fonte3\">Mage knight</a>
                            <a href=\"jeux?jeuChoisi=182\" class=\"confetti couleur7 taille4 fonte4\">Mage wars</a>
                            <a href=\"jeux?jeuChoisi=28\" class=\"confetti couleur8 taille5 fonte5\">Maharadjah</a>
                            <a href=\"jeux?jeuChoisi=67\" class=\"confetti couleur9 taille6 fonte6\">Maka Bana</a>
                                  <a href=\"jeux?jeuChoisi=187\" class=\"confetti couleur10 taille0 fonte7\">The Manhattan Project</a>
                            <a href=\"jeux?jeuChoisi=1126\" class=\"confetti couleur11 taille1 fonte8\">Le manoir infernal</a>
                            <a href=\"jeux?jeuChoisi=48\" class=\"confetti couleur12 taille2 fonte9\">Mare Nostrum</a>
                                  <a href=\"jeux?jeuChoisi=99\" class=\"confetti couleur0 taille3 fonte10\">Marvel Heroes</a>
                                  <a href=\"jeux?jeuChoisi=1153\" class=\"confetti couleur1 taille4 fonte0\">Medici vs Strozzi</a>
                            <a href=\"jeux?jeuChoisi=165\" class=\"confetti couleur2 taille5 fonte1\">Medina</a>
                            <a href=\"jeux?jeuChoisi=1138\" class=\"confetti couleur3 taille6 fonte2\">Metal Adventures</a>
                                  <a href=\"jeux?jeuChoisi=153\" class=\"confetti couleur4 taille0 fonte3\">Meurtre sur le Nil</a>
                            <a href=\"jeux?jeuChoisi=126\" class=\"confetti couleur5 taille1 fonte4\">Die Meuterei (La mutinerie)</a>
                            <a href=\"jeux?jeuChoisi=75\" class=\"confetti couleur6 taille2 fonte5\">Mission Planète Rouge</a>
                            <a href=\"jeux?jeuChoisi=171\" class=\"confetti couleur7 taille3 fonte6\">Mombasa</a>
                            <a href=\"jeux?jeuChoisi=100\" class=\"confetti couleur8 taille4 fonte7\">Mr Jack</a>
                            <a href=\"jeux?jeuChoisi=73\" class=\"confetti couleur9 taille5 fonte8\">Munchkin</a>
                            <a href=\"jeux?jeuChoisi=1119\" class=\"confetti couleur10 taille6 fonte9\">Myrmes</a>
                                  <a href=\"jeux?jeuChoisi=1123\" class=\"confetti couleur11 taille0 fonte10\">Mysterium</a>
                                  <a href=\"jeux?jeuChoisi=1139\" class=\"confetti couleur12 taille1 fonte0\">Naufragés</a>
                                  <a href=\"jeux?jeuChoisi=1120\" class=\"confetti couleur0 taille2 fonte1\">Néfarious</a>
                            <a href=\"jeux?jeuChoisi=116\" class=\"confetti couleur1 taille3 fonte2\">Nefertiti</a>
                            <a href=\"jeux?jeuChoisi=1130\" class=\"confetti couleur2 taille4 fonte3\">Nemeton</a>
                            <a href=\"jeux?jeuChoisi=170\" class=\"confetti couleur3 taille5 fonte4\">Netrunner</a>
                            <a href=\"jeux?jeuChoisi=120\" class=\"confetti couleur4 taille6 fonte5\">Neuroshima Hex !</a>
                                  <a href=\"jeux?jeuChoisi=147\" class=\"confetti couleur5 taille0 fonte6\">NightFall</a>
                            <a href=\"jeux?jeuChoisi=141\" class=\"confetti couleur6 taille1 fonte7\">Offrandes</a>
                            <a href=\"jeux?jeuChoisi=29\" class=\"confetti couleur7 taille2 fonte8\">Oh les nains</a>
                            <a href=\"jeux?jeuChoisi=146\" class=\"confetti couleur8 taille3 fonte9\">Olympos</a>
                            <a href=\"jeux?jeuChoisi=1144\" class=\"confetti couleur9 taille4 fonte10\">Onirim</a>
                                  <a href=\"jeux?jeuChoisi=138\" class=\"confetti couleur10 taille5 fonte0\">Opus Dei</a>
                            <a href=\"jeux?jeuChoisi=121\" class=\"confetti couleur11 taille6 fonte1\">Pandémie</a>
                                  <a href=\"jeux?jeuChoisi=30\" class=\"confetti couleur12 taille0 fonte2\">Pente</a>
                                  <a href=\"jeux?jeuChoisi=108\" class=\"confetti couleur0 taille1 fonte3\">Petits meurtres &amp; faits divers</a>
                            <a href=\"jeux?jeuChoisi=31\" class=\"confetti couleur1 taille2 fonte4\">Phoenix</a>
                            <a href=\"jeux?jeuChoisi=1154\" class=\"confetti couleur2 taille3 fonte5\">Les Piliers de la Terre</a>
                            <a href=\"jeux?jeuChoisi=74\" class=\"confetti couleur3 taille4 fonte6\">Pirates of the Spanish Main</a>
                            <a href=\"jeux?jeuChoisi=32\" class=\"confetti couleur4 taille5 fonte7\">Planet Petri</a>
                            <a href=\"jeux?jeuChoisi=60\" class=\"confetti couleur5 taille6 fonte8\">Puerto Rico</a>
                                  <a href=\"jeux?jeuChoisi=161\" class=\"confetti couleur6 taille0 fonte9\">Puissance 4</a>
                            <a href=\"jeux?jeuChoisi=33\" class=\"confetti couleur7 taille1 fonte10\">Quads</a>
                                  <a href=\"jeux?jeuChoisi=145\" class=\"confetti couleur8 taille2 fonte0\">Quarriors</a>
                            <a href=\"jeux?jeuChoisi=34\" class=\"confetti couleur9 taille3 fonte1\">Quatro</a>
                            <a href=\"jeux?jeuChoisi=181\" class=\"confetti couleur10 taille4 fonte2\">Qui est-ce ?</a>
                            <a href=\"jeux?jeuChoisi=115\" class=\"confetti couleur11 taille5 fonte3\">Race for the Galaxy</a>
                            <a href=\"jeux?jeuChoisi=1134\" class=\"confetti couleur12 taille6 fonte4\">Race to the summit</a>
                                        <a href=\"jeux?jeuChoisi=94\" class=\"confetti couleur0 taille0 fonte5\">Railroad tycoon</a>
                            <a href=\"jeux?jeuChoisi=143\" class=\"confetti couleur1 taille1 fonte6\">Rallyman</a>
                            <a href=\"jeux?jeuChoisi=1145\" class=\"confetti couleur2 taille2 fonte7\">Riff Raff</a>
                            <a href=\"jeux?jeuChoisi=35\" class=\"confetti couleur3 taille3 fonte8\">RoboRally</a>
                            <a href=\"jeux?jeuChoisi=36\" class=\"confetti couleur4 taille4 fonte9\">Le Roi des Roses</a>
                            <a href=\"jeux?jeuChoisi=130\" class=\"confetti couleur5 taille5 fonte10\">Roll through the ages</a>
                                  <a href=\"jeux?jeuChoisi=1124\" class=\"confetti couleur6 taille6 fonte0\">Room 25</a>
                                  <a href=\"jeux?jeuChoisi=1135\" class=\"confetti couleur7 taille0 fonte1\">En route vers les Indes</a>
                            <a href=\"jeux?jeuChoisi=162\" class=\"confetti couleur8 taille1 fonte2\">Rummikub</a>
                            <a href=\"jeux?jeuChoisi=83\" class=\"confetti couleur9 taille2 fonte3\">Runebound</a>
                            <a href=\"jeux?jeuChoisi=178\" class=\"confetti couleur10 taille3 fonte4\">Rush hour</a>
                            <a href=\"jeux?jeuChoisi=50\" class=\"confetti couleur11 taille4 fonte5\">Sans foi ni loi</a>
                            <a href=\"jeux?jeuChoisi=93\" class=\"confetti couleur12 taille5 fonte6\">Santy Anno</a>
                                  <a href=\"jeux?jeuChoisi=49\" class=\"confetti couleur0 taille6 fonte7\">Scotland Yard</a>
                                  <a href=\"jeux?jeuChoisi=51\" class=\"confetti couleur1 taille0 fonte8\">Serengeti</a>
                            <a href=\"jeux?jeuChoisi=38\" class=\"confetti couleur2 taille1 fonte9\">Service Compris</a>
                            <a href=\"jeux?jeuChoisi=39\" class=\"confetti couleur3 taille2 fonte10\">Set !</a>
                                  <a href=\"jeux?jeuChoisi=132\" class=\"confetti couleur4 taille3 fonte0\">Shadow hunters</a>
                            <a href=\"jeux?jeuChoisi=169\" class=\"confetti couleur5 taille4 fonte1\">Sheriff de Nottingham</a>
                            <a href=\"jeux?jeuChoisi=1155\" class=\"confetti couleur6 taille5 fonte2\">Sherlock Holmes, détective conseil</a>
                            <a href=\"jeux?jeuChoisi=154\" class=\"confetti couleur7 taille6 fonte3\">Six pieds sous terre</a>
                                  <a href=\"jeux?jeuChoisi=1146\" class=\"confetti couleur8 taille0 fonte4\">Small World</a>
                            <a href=\"jeux?jeuChoisi=184\" class=\"confetti couleur9 taille1 fonte5\">Smash up</a>
                            <a href=\"jeux?jeuChoisi=174\" class=\"confetti couleur10 taille2 fonte6\">Space alert</a>
                            <a href=\"jeux?jeuChoisi=40\" class=\"confetti couleur11 taille3 fonte7\">Space Crusade</a>
                            <a href=\"jeux?jeuChoisi=41\" class=\"confetti couleur12 taille4 fonte8\">Star Wars</a>
                                  <a href=\"jeux?jeuChoisi=42\" class=\"confetti couleur0 taille5 fonte9\">Stealth</a>
                            <a href=\"jeux?jeuChoisi=118\" class=\"confetti couleur1 taille6 fonte10\">Stonehenge</a>
                                        <a href=\"jeux?jeuChoisi=77\" class=\"confetti couleur2 taille0 fonte0\">Stratego</a>
                            <a href=\"jeux?jeuChoisi=1118\" class=\"confetti couleur3 taille1 fonte1\">Summoner Wars</a>
                            <a href=\"jeux?jeuChoisi=189\" class=\"confetti couleur4 taille2 fonte2\">Takenoko</a>
                            <a href=\"jeux?jeuChoisi=111\" class=\"confetti couleur5 taille3 fonte3\">Taluva</a>
                            <a href=\"jeux?jeuChoisi=97\" class=\"confetti couleur6 taille4 fonte4\">Tannhaüser</a>
                            <a href=\"jeux?jeuChoisi=1121\" class=\"confetti couleur7 taille5 fonte5\">Targui</a>
                            <a href=\"jeux?jeuChoisi=159\" class=\"confetti couleur8 taille6 fonte6\">Taverna</a>
                                  <a href=\"jeux?jeuChoisi=177\" class=\"confetti couleur9 taille0 fonte7\">Terra Mystica</a>
                            <a href=\"jeux?jeuChoisi=1158\" class=\"confetti couleur10 taille1 fonte8\">Terraforming Mars</a>
                            <a href=\"jeux?jeuChoisi=136\" class=\"confetti couleur11 taille2 fonte9\">Through the ages</a>
                            <a href=\"jeux?jeuChoisi=133\" class=\"confetti couleur12 taille3 fonte10\">Thunderstone</a>
                                        <a href=\"jeux?jeuChoisi=1147\" class=\"confetti couleur0 taille4 fonte0\">Thurn und Taxis</a>
                            <a href=\"jeux?jeuChoisi=112\" class=\"confetti couleur1 taille5 fonte1\">Tikal</a>
                            <a href=\"jeux?jeuChoisi=152\" class=\"confetti couleur2 taille6 fonte2\">Timeline</a>
                                  <a href=\"jeux?jeuChoisi=62\" class=\"confetti couleur3 taille0 fonte3\">Tom Tube</a>
                            <a href=\"jeux?jeuChoisi=46\" class=\"confetti couleur4 taille1 fonte4\">Tonga Bonga</a>
                            <a href=\"jeux?jeuChoisi=148\" class=\"confetti couleur5 taille2 fonte5\">Tournay</a>
                            <a href=\"jeux?jeuChoisi=127\" class=\"confetti couleur6 taille3 fonte6\">Trader</a>
                            <a href=\"jeux?jeuChoisi=43\" class=\"confetti couleur7 taille4 fonte7\">Vertigo</a>
                            <a href=\"jeux?jeuChoisi=44\" class=\"confetti couleur8 taille5 fonte8\">Une Vie de Chien</a>
                            <a href=\"jeux?jeuChoisi=45\" class=\"confetti couleur9 taille6 fonte9\">Vinci</a>
                                  <a href=\"jeux?jeuChoisi=168\" class=\"confetti couleur10 taille0 fonte10\">Unlock</a>
                                  <a href=\"jeux?jeuChoisi=1137\" class=\"confetti couleur11 taille1 fonte0\">This war of mine</a>
                            <a href=\"jeux?jeuChoisi=86\" class=\"confetti couleur12 taille2 fonte1\">When darkness comes</a>
                                  <a href=\"jeux?jeuChoisi=66\" class=\"confetti couleur0 taille3 fonte2\">Wings of War</a>
                            <a href=\"jeux?jeuChoisi=78\" class=\"confetti couleur1 taille4 fonte3\">Wizard Kings</a>
                            <a href=\"jeux?jeuChoisi=129\" class=\"confetti couleur2 taille5 fonte4\">Zack &amp; Pack</a>
            
        </div>
      </div>

      <div class='col-7 retracter' style=\"padding-top : 1em;\">
        <div class='fondOpaque cadreBleu enRelatif' style=\"height : 60vh;\">
          <div class='enLigne'>
            <h3 class='enLigne'><label>But :</label></h3>
              <span class='enLigne' style=\"font-size : 1.5em; font-weight : bold;\">Développer sa ferme</span>
          </div>
          <h3><label style=\"text-align : left;\">Principe :</label></h3>
          <div class='sousFenetre text-justify'>
            Le jeu possède plusieurs modes : familial / débutant / confirmé<br/>
Les plateaux utilisés, ainsi que les différents paquets de cartes, permettent en effet de moduler le niveau de jeu, ainsi que la variété des parties.
Les joueurs démarrent avec une ferme comportant 2 pièces d'habitation et 13 autres cases de terrain. Au cours de la partie, ils pourront construire sur ces terrains:<br/>
<li> d'autres pièces pour leur maison</li>
<li> des champs</li>
<li> des enclos</li>
<li> des étables</li>
Ils n'ont que 2 personnes pour s'occuper de cette ferme, donc 2 actions par tour, mais des naissances peuvent se produire par la suite. Il faudra cependant, régulièrement, nourrir les occupants de la ferme, et donc produire de la nourriture.<br/>
Entre les semailles, l'élevage (moutons, sangliers, boeufs), la construction d'étables, d'enclos, de pièces supplémentaires ...etc., de nombreuses actions sont disponibles, et des choix doivent être faits pour réussir à développer convenablement sa ferme sans affamer les fermiers.<br/>
La partie se joue en 14 tours à l'issue desquels les points sont comptés. Tous les aménagements de la ferme, les animaux présents, les réserves en légumes et céréales, les habitants, et l'état de l'habitation permettent de gagner des points.<br><br>

Compter sur une durée d'1h par joueur.<br>

Extension : Les fermiers de la lande
<br>Voir aussi la version pour 2 joueurs : Terres d'élevage
          </div>
        </div>
      </div>


      
      </div>     </div> 

  
    <div id=\"RangementDesJeux\" class=\"jeSuisInvisible\">
    \t<?php echo \$_SESSION[\"remplissageJeux\"]; ?>
    </div>
  </body>
</html>", "/test.html.twig", "/var/www/renardenjoue/templates/test.html.twig");
    }
}
