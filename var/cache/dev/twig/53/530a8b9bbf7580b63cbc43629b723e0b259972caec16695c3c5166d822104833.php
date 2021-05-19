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

/* jeux.html.twig */
class __TwigTemplate_20ced5ce62b3d325ae9488e0ab5d29808e744c148e0ebed70205e176fb4c91bf extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'entete' => [$this, 'block_entete'],
            'corps' => [$this, 'block_corps'],
            'laPage' => [$this, 'block_laPage'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jeux.html.twig"));

        $this->parent = $this->loadTemplate("main.html.twig", "jeux.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_entete($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entete"));

        // line 4
        echo "  ";
        $this->displayParentBlock("entete", $context, $blocks);
        echo "
  <link rel='stylesheet' href='";
        // line 5
        echo twig_escape_filter($this->env, ($context["css_path"] ?? null), "html", null, true);
        echo "jeux.css'>
  <link rel='stylesheet' href='";
        // line 6
        echo twig_escape_filter($this->env, ($context["css_path"] ?? null), "html", null, true);
        echo "toolTip.css'>
  <script src='";
        // line 7
        echo twig_escape_filter($this->env, ($context["js_path"] ?? null), "html", null, true);
        echo "jeux.js'></script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_corps($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "corps"));

        // line 11
        echo "  ";
        $this->displayParentBlock("corps", $context, $blocks);
        echo "
  
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_laPage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "laPage"));

        // line 16
        echo "      <div class='col-12'>";
        // line 17
        echo "        <div class='fondOpaque cadreBleu'>
          <form  method='POST' action='jeux?operation=recherche'>
              <table class='w-100'>
                <tr>
                  <td>
                    <label>Titre</label>
                  </td>
                  <td style='position:relative;'>
                    <a href='#' style='position:relative;'>
                      <input type='text' name='jeuTitre'><div class='tool-tip right'>Nom&nbsp;complet&nbsp;ou&nbsp;partiel</div>
                    </a>
                  </td>
                  <td>
                    <label>Niveau</label>
                  </td>
                  <td>
                    <a href='#' style='position:relative;'>
            \t\t\t\t\t<select name='jeuNiveau'>
            \t\t\t\t\t\t<option value='0'></option>
        \t    \t\t\t\t\t<option value='1' class='fondVert' alt='Parties courtes, règles simples'>famille - enfants</option>
        \t\t\t    \t\t\t<option value='2' class='fondJaune'>abordable</option>
      \t  \t\t\t\t    \t<option value='3' class='fondOrange'>confirmés</option>
    \t\t\t  \t\t\t\t\t\t<option value='4' class='fondRouge'>connaisseurs</option>
          \t  \t\t\t\t\t<option value='5' class='fondNoir'>experts</option>
      \t    \t  \t\t\t</select>
                      <div class='tool-tip left'>Difficulté&nbsp;recherchée.</div>
                    </a>
                  </td>
                  <td>
                    <label>Durée</label>
                  </td>
                  <td>
                    <a href='#' style='position:relative;'>
          \t\t\t\t\t\t<select name='jeuDuree'>
          \t\t\t\t\t\t\t<option value='0'></option>
        \t\t\t\t\t\t\t\t<option value='1'>20mn ou moins</option>
  \t\t    \t\t\t\t\t\t\t<option value='2'>20 à 45mn</option>
      \t    \t\t\t\t\t\t<option value='3'>jusqu'à 1h30</option>
      \t\t    \t\t\t\t\t<option value='4'>1h30 à 3h</option>
      \t\t\t    \t\t\t\t<option value='5'>3h ou plus</option>
    \t\t\t\t\t    \t\t</select>
                      <div class='tool-tip left'>Durée&nbsp;d'une&nbsp;partie.
                      </div>
                    </a>
                  </td>
                  <td>
                    <label>Nombre</label>
                  </td>
                  <td>
                    <a href='#' style='position:relative;'>
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
                      <div class='tool-tip left'>Nombre&nbsp;de&nbsp;joueurs.</div>
                    </a>
                  </td>
                  <td>
                    <input type='submit' class='cadreBleu fondBleu bouton' href='jeux?operation=recherche' title='Rechercher les jeux correspondants à ces critères' value='Chercher'>
                  </td>
                </tr>
              </table>
          </form>
        </div>
      </div>";
        // line 89
        echo "
      <div class='col-12'>
        <br>
      </div>

      <div class='col-12'>";
        // line 95
        echo "        <div class='listeJeux cadreBleu h-30'>

";
        // line 97
        $context["classeCouleur"] = twig_random($this->env, 12);
        // line 98
        $context["classeTaille"] = twig_random($this->env, 6);
        // line 99
        $context["classFonte"] = twig_random($this->env, 10);
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listeJeux"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["jeu"]) {
            // line 101
            echo "                <a href='choisirJeu";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "id", [], "any", false, false, false, 101), "html", null, true);
            echo "' class='confetti couleur";
            echo twig_escape_filter($this->env, ($context["classeCouleur"] ?? null), "html", null, true);
            echo " taille";
            echo twig_escape_filter($this->env, ($context["classeTaille"] ?? null), "html", null, true);
            echo " fonte";
            echo twig_escape_filter($this->env, ($context["classFonte"] ?? null), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "nom", [], "any", false, false, false, 101), "html", null, true);
            echo "</a>
  ";
            // line 102
            $context["classeCouleur"] = (($context["classeCouleur"] ?? null) + 1);
            // line 103
            echo "  ";
            $context["classeTaille"] = (($context["classeTaille"] ?? null) + 1);
            // line 104
            echo "  ";
            $context["classFonte"] = (($context["classFonte"] ?? null) + 1);
            // line 105
            echo "  ";
            if ((($context["classeCouleur"] ?? null) > 12)) {
                // line 106
                echo "    ";
                $context["classeCouleur"] = 0;
                // line 107
                echo "  ";
            }
            // line 108
            echo "  ";
            if ((($context["classeTaille"] ?? null) > 6)) {
                // line 109
                echo "    ";
                $context["classeTaille"] = 0;
                // line 110
                echo "  ";
            }
            // line 111
            echo "  ";
            if ((($context["classFonte"] ?? null) > 10)) {
                // line 112
                echo "    ";
                $context["classFonte"] = 0;
                // line 113
                echo "  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jeu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "
        </div>
      </div>";
        // line 118
        echo "
      <div class='col-12'>
        <br>
      </div>

      <div id=\"blocDetailJeu\" class='col-12' style='padding-top : 1em;'>";
        // line 124
        echo "        <div class='fondOpaque cadreBleu'>
          <div class='row'>
            <div class='col-12'>&nbsp;</div>
            <div class='col-md-6 col-sm-7 col-12' style='margin-top:-0.5em'><h2 id='divTitre'>";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 127), "nom", [], "any", false, false, false, 127), "html", null, true);
        echo "</h2>
            </div>
            <div class='col-md-4 col-sm-4 col-7' style='margin-top:-0.5em'>
              <div class='row'>
                <div class='col-sm-6 col-12' id='divDurees'>";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->dureehm(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 131), "dureemin", [], "any", false, false, false, 131)), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->dureehm(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 131), "dureemax", [], "any", false, false, false, 131)), "html", null, true);
        echo "</div>
                <div class='col-sm-6 col-12' id='divNbJ'>";
        // line 132
        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 132), "nbJoueurs", [], "any", false, false, false, 132), [" à " => "-"]), "html", null, true);
        echo "</div>
              </div>
            </div>
            <div class='col-md-2 col-sm-1 col-5 float-right' style='margin-top:-0.9em; padding-bottom : 0.3em;' id='divNiv'>
              <img class='mini float-right' src='";
        // line 136
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "pictoNiv";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 136), "dominance", [], "any", false, false, false, 136), "html", null, true);
        echo ".gif'>
            </div>
          </div>
        </div>
      </div>";
        // line 141
        echo "
      <div class='col-12'>
        <br>
      </div>

      <div class='col-md-4 col-12 camembert'>";
        // line 147
        echo "        <div id='divImg'>
          ";
        // line 148
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 148), "nbImg", [], "any", false, false, false, 148) > 1)) {
            // line 149
            echo "            ";
            $context["nomFichier"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 149), "img", [], "any", false, false, false, 149);
            // line 150
            echo "            ";
            $context["racineNomFichier"] = twig_slice($this->env, ($context["nomFichier"] ?? null), 0,  -5);
            // line 151
            echo "            ";
            $context["derniereImage"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 151), "nbImg", [], "any", false, false, false, 151) - 1);
            // line 152
            echo "            ";
            $context["active"] = " active";
            // line 153
            echo "          <div id=\"demo\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
            <!-- Indicateurs -->
            <ul class=\"carousel-indicators\">
              <li data-target=\"#demo\" data-slide-to=\"0\" class=\"active\"></li>
              ";
            // line 157
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["derniereImage"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
                // line 158
                echo "              <li data-target=\"#demo\" data-slide-to=\"";
                echo twig_escape_filter($this->env, $context["n"], "html", null, true);
                echo "\"></li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "            </ul>
            <div class=\"carousel-inner\">
              ";
            // line 162
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ($context["derniereImage"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
                // line 163
                echo "              <div class=\"carousel-item";
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo "\">
                ";
                // line 164
                $context["active"] = "";
                // line 165
                echo "                <img id='imageDuJeu' class='d-block w-100 grandeImage img-fluid cadreBleu' src='";
                echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
                echo "imagesJeux/";
                echo twig_escape_filter($this->env, ($context["racineNomFichier"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, sprintf("%02d", $context["n"]), "html", null, true);
                echo "i";
                echo twig_escape_filter($this->env, sprintf("%02d", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 165), "nbImg", [], "any", false, false, false, 165)), "html", null, true);
                echo ".jpg'> 
              </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            echo "            </div>
          ";
            // line 170
            echo "          <a class=\"carousel-control-prev\" href=\"#demo\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Précédent</span>
          </a>
          <a class=\"carousel-control-next\" href=\"#demo\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Suivant</span>
          </a>
          </div>
          ";
        } else {
            // line 180
            echo "          <img id='imageDuJeu' class='grandeImage img-fluid cadreBleu' src='";
            echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
            echo "imagesJeux/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 180), "img", [], "any", false, false, false, 180), "html", null, true);
            echo ".jpg'>
          ";
        }
        // line 182
        echo "        </div>
        <br>
        <div class='fondOpaque cadreBleu'>
          <table class='w-100'>
            <tr>
              <td>
                <div class ='row camembert'>
              <div class='col-12'><h2 id='divNom'>";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 189), "nomComplet", [], "any", false, false, false, 189), "html", null, true);
        echo "</h2></div>
              <div class='col-12 enLigne w-100' id='divDuree'>
                <div class='camembertParent enLigne' id='divHorloges'>
                  ";
        // line 192
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 192), "duree", [], "any", false, false, false, 192);
        echo "
                </div>
                <div class='legendeCamembert'>
                  <h3>Légende :</h3>
                  <table>
                    <tr>
                      <td>
                        <img class='rectangle' src='";
        // line 199
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "legendeVert.gif'>&nbsp;
                      </td>
                      <td id='legMin'>
                        durée minimale";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->duree(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 202), "dureemin", [], "any", false, false, false, 202)), "html", null, true);
        echo "
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img class='rectangle' src='";
        // line 207
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "legendeRouge.gif'>&nbsp;
                      </td>
                      <td id='legMax'>
                        durée maximale";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->duree(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 210), "dureemax", [], "any", false, false, false, 210)), "html", null, true);
        echo "
                      </td>
                    </tr>
                  </table>
                  <div id='legNbj' >Jeu pour ";
        // line 214
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 214), "nbJoueurs", [], "any", false, false, false, 214), "html", null, true);
        echo "</div>
                  <div id='legNiv_A'>Niveau de difficulté : ";
        // line 215
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 215), "difficulte", [], "any", false, false, false, 215), "html", null, true);
        echo "</div>
                  <table>
                    <tr>
                      <td rowspan=3><img id='legNiv_B' class='mini' src='";
        // line 218
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "pictoNiv";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 218), "dominance", [], "any", false, false, false, 218), "html", null, true);
        echo ".gif'></td>
                      <td rowspan=3><div class='texteInvisible'>blabla</div></td>
                      <td><img class='bonhomme' src='";
        // line 220
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "niveau_enfant.gif'></td>
                      <td>5-8 ans</td>
                      <td class='texteInvisible' rowspan=3 id='legNiv_C' style='background-image:url(";
        // line 222
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "fleches";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 222), "dominance", [], "any", false, false, false, 222), "html", null, true);
        echo ".gif);'>blabla</td>
                      <td><img class='rectangle' src='";
        // line 223
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "niveauRouge.gif'></td>
                      <td>trop dur</td>
                    </tr>
                    <tr>
                      <td><img class='bonhomme' src='";
        // line 227
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "niveau_preado.gif'></td>
                      <td>9-13 ans</td>
                      <td><img class='rectangle' src='";
        // line 229
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "niveauOrange.gif'></td>
                      <td>compliqué</td>
                    </tr>
                    <tr>
                      <td><img class='bonhomme' src='";
        // line 233
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "niveau_grand.gif'></td>
                      <td>14 ans et plus</td>
                      <td><img class='rectangle' src='";
        // line 235
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "niveauVert.gif'></td>
                      <td>facile</td>
                    </tr>
                  </table>
                </div>";
        // line 240
        echo "              </div>";
        // line 241
        echo "              <div class='col-12'>
                <br><br>
              </div>
              <div class='col-12 inline' id='divNiveau'>
                <label class='gauche' style='font-size : 1.4em;'>Complexité&nbsp;:&nbsp;";
        // line 245
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 245), "dominance", [], "any", false, false, false, 245), "html", null, true);
        echo "/5</label>
                <img class='mini enAbsolu' style='right : 2em;top : 0;' src='";
        // line 246
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "pictoNiv";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 246), "dominance", [], "any", false, false, false, 246), "html", null, true);
        echo ".gif'>
              </div>
              <div class='col-12'>
                <br>
              </div>
              <div class='col-12 inline' id='divTxtNbJoueurs'>
                <label class='gauche' style='font-size : 1.4em;'>";
        // line 252
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 252), "nbJoueurs", [], "any", false, false, false, 252), "html", null, true);
        echo "</label>
                <img class='mini enAbsolu' style='right : 2em;top : 0;' src='";
        // line 253
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 253), "imgNbJoueurs", [], "any", false, false, false, 253), "html", null, true);
        echo "'>
              </div>
              <div class='col-12'>
                <br>
              </div>
              <div class='col-12' id='divMeca'>
              ";
        // line 259
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 259), "mecanismes", [], "any", false, false, false, 259)) > 0)) {
            // line 260
            echo "                <label class='gauche' style='font-size : 1.4em;'>Mécanismes et prérequis:</label>
                  ";
            // line 261
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 261), "mecanismes", [], "any", false, false, false, 261));
            foreach ($context['_seq'] as $context["_key"] => $context["meca"]) {
                // line 262
                echo "                  <li>";
                echo twig_escape_filter($this->env, $context["meca"], "html", null, true);
                echo "</li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meca'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 264
            echo "              ";
        }
        // line 265
        echo "              </div>
              
            </div>
              </td>
            </tr>
          </table>
          <br><br>
        </div>
      </div>";
        // line 274
        echo "
      <div class='col-md-8 col-12' style='z-index : -1; height:auto;'>";
        // line 276
        echo "        <div class='fondOpaque cadreBleu enRelatif' style='height:auto;'>
          <div class='enLigne'>
            <h3 class='enLigne'><label>But :</label></h3>
              <span class='enLigne' style='font-weight : bold;' id='divBut'>";
        // line 279
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 279), "but", [], "any", false, false, false, 279), "html", null, true);
        echo "</span>
          </div>
          <h3><label style='text-align : left;'>Principe :</label></h3>
          <div class='sousFenetre text-justify' id='divPpe'>
            ";
        // line 283
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 283), "ppe", [], "any", false, false, false, 283);
        echo "
          </div>
        </div>
        <br><br>
      </div>";
        // line 288
        echo "
      <div class='col-12'>
        <br><br><br>
  ";
        // line 291
        $context["currentPath"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 291), "attributes", [], "any", false, false, false, 291), "get", [0 => "_route"], "method", false, false, false, 291), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 292
($context["app"] ?? null), "request", [], "any", false, false, false, 292), "attributes", [], "any", false, false, false, 292), "get", [0 => "_route_params"], "method", false, false, false, 292));
        // line 293
        echo "  ";
        if ((twig_slice($this->env, ($context["currentPath"] ?? null), 1, 10) == "choisirJeu")) {
            // line 294
            echo "  <script>
    window.location.href = \"#blocDetailJeu\";
    setTimeout(atteindreBarreMenu, 200);
  </script>
  ";
        }
        // line 299
        echo "      </div>
      
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jeux.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  616 => 299,  609 => 294,  606 => 293,  604 => 292,  603 => 291,  598 => 288,  591 => 283,  584 => 279,  579 => 276,  576 => 274,  566 => 265,  563 => 264,  554 => 262,  550 => 261,  547 => 260,  545 => 259,  535 => 253,  531 => 252,  520 => 246,  516 => 245,  510 => 241,  508 => 240,  501 => 235,  496 => 233,  489 => 229,  484 => 227,  477 => 223,  471 => 222,  466 => 220,  459 => 218,  453 => 215,  449 => 214,  442 => 210,  436 => 207,  428 => 202,  422 => 199,  412 => 192,  406 => 189,  397 => 182,  389 => 180,  377 => 170,  374 => 168,  359 => 165,  357 => 164,  352 => 163,  348 => 162,  344 => 160,  335 => 158,  331 => 157,  325 => 153,  322 => 152,  319 => 151,  316 => 150,  313 => 149,  311 => 148,  308 => 147,  301 => 141,  292 => 136,  285 => 132,  279 => 131,  272 => 127,  267 => 124,  260 => 118,  256 => 115,  249 => 113,  246 => 112,  243 => 111,  240 => 110,  237 => 109,  234 => 108,  231 => 107,  228 => 106,  225 => 105,  222 => 104,  219 => 103,  217 => 102,  204 => 101,  200 => 100,  198 => 99,  196 => 98,  194 => 97,  190 => 95,  183 => 89,  110 => 17,  108 => 16,  101 => 15,  90 => 11,  83 => 10,  74 => 7,  70 => 6,  66 => 5,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jeux.html.twig", "/var/www/renardenjoue/templates/jeux.html.twig");
    }
}
