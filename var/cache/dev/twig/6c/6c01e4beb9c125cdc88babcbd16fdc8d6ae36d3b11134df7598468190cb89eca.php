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

/* /jeux.html.twig */
class __TwigTemplate_20727c38d59d4d6bc0c2fd29ab8aa336933cf0963a981015b2ca1e63ce6b2b57 extends \Twig\Template
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
            'piedDePage' => [$this, 'block_piedDePage'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/jeux.html.twig"));

        $this->parent = $this->loadTemplate("main.html.twig", "/jeux.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_entete($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entete"));

        // line 4
        echo "  ";
        $this->displayParentBlock("entete", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["css_path"]) || array_key_exists("css_path", $context) ? $context["css_path"] : (function () { throw new RuntimeError('Variable "css_path" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "jeux.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["css_path"]) || array_key_exists("css_path", $context) ? $context["css_path"] : (function () { throw new RuntimeError('Variable "css_path" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "toolTip.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_corps($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "corps"));

        // line 10
        echo "  ";
        $this->displayParentBlock("corps", $context, $blocks);
        echo "
  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_laPage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "laPage"));

        // line 15
        echo "
      <div class='col-12 retracter'>";
        // line 17
        echo "          <form  method=\"POST\" action=\"jeux?operation=recherche\" class=\"fondOpaque cadreBleu\">
              <table class=\"w-100\">
                <tr>
                  <td>
                    <label>Titre :</label>
                  </td>
                  <td style=\"position:relative;\">
                    <a href=\"#\" style=\"position:relative;\">
                      <input type='text' name='jeuTitre'><div class='tool-tip right'>Nom&nbsp;complet&nbsp;ou&nbsp;partiel</div>
                    </a>
                  </td>
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
                      <div class='tool-tip left'>Difficulté&nbsp;recherchée.</div>
                    </a>
                  </td>
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
                      <div class='tool-tip left'>Durée&nbsp;d'une&nbsp;partie.
                      </div>
                    </a>
                  </td>
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
                      <div class='tool-tip left'>Nombre&nbsp;de&nbsp;joueurs.</div>
                    </a>
                  </td>
                  <td>
                    <input type=\"submit\" class=\"cadreBleu fondBleu bouton\" href=\"jeux?operation=recherche\" title=\"Rechercher les jeux correspondants à ces critères\" value=\"Chercher\">
                  </td>
                </tr>
              </table>
          </form>
      </div>";
        // line 87
        echo "
      <div class='col-12 retracter' style=\"padding-top : 1em;\">";
        // line 89
        echo "        <div class='listeJeux cadreBleu h-30'>

";
        // line 91
        $context["classeCouleur"] = twig_random($this->env, 12);
        // line 92
        $context["classeTaille"] = twig_random($this->env, 6);
        // line 93
        $context["classFonte"] = twig_random($this->env, 10);
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeJeux"]) || array_key_exists("listeJeux", $context) ? $context["listeJeux"] : (function () { throw new RuntimeError('Variable "listeJeux" does not exist.', 94, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["jeu"]) {
            // line 95
            echo "                <a href=\"jeux?jeuChoisi=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "id", [], "any", false, false, false, 95), "html", null, true);
            echo "\" class=\"confetti couleur";
            echo twig_escape_filter($this->env, (isset($context["classeCouleur"]) || array_key_exists("classeCouleur", $context) ? $context["classeCouleur"] : (function () { throw new RuntimeError('Variable "classeCouleur" does not exist.', 95, $this->source); })()), "html", null, true);
            echo " taille";
            echo twig_escape_filter($this->env, (isset($context["classeTaille"]) || array_key_exists("classeTaille", $context) ? $context["classeTaille"] : (function () { throw new RuntimeError('Variable "classeTaille" does not exist.', 95, $this->source); })()), "html", null, true);
            echo " fonte";
            echo twig_escape_filter($this->env, (isset($context["classFonte"]) || array_key_exists("classFonte", $context) ? $context["classFonte"] : (function () { throw new RuntimeError('Variable "classFonte" does not exist.', 95, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "nomComplet", [], "any", false, false, false, 95), "html", null, true);
            echo "</a>
  ";
            // line 96
            $context["classeCouleur"] = ((isset($context["classeCouleur"]) || array_key_exists("classeCouleur", $context) ? $context["classeCouleur"] : (function () { throw new RuntimeError('Variable "classeCouleur" does not exist.', 96, $this->source); })()) + 1);
            // line 97
            echo "  ";
            $context["classeTaille"] = ((isset($context["classeTaille"]) || array_key_exists("classeTaille", $context) ? $context["classeTaille"] : (function () { throw new RuntimeError('Variable "classeTaille" does not exist.', 97, $this->source); })()) + 1);
            // line 98
            echo "  ";
            $context["classFonte"] = ((isset($context["classFonte"]) || array_key_exists("classFonte", $context) ? $context["classFonte"] : (function () { throw new RuntimeError('Variable "classFonte" does not exist.', 98, $this->source); })()) + 1);
            // line 99
            echo "  ";
            if (((isset($context["classeCouleur"]) || array_key_exists("classeCouleur", $context) ? $context["classeCouleur"] : (function () { throw new RuntimeError('Variable "classeCouleur" does not exist.', 99, $this->source); })()) > 12)) {
                // line 100
                echo "    ";
                $context["classeCouleur"] = 0;
                // line 101
                echo "  ";
            }
            // line 102
            echo "  ";
            if (((isset($context["classeTaille"]) || array_key_exists("classeTaille", $context) ? $context["classeTaille"] : (function () { throw new RuntimeError('Variable "classeTaille" does not exist.', 102, $this->source); })()) > 6)) {
                // line 103
                echo "    ";
                $context["classeTaille"] = 0;
                // line 104
                echo "  ";
            }
            // line 105
            echo "  ";
            if (((isset($context["classFonte"]) || array_key_exists("classFonte", $context) ? $context["classFonte"] : (function () { throw new RuntimeError('Variable "classFonte" does not exist.', 105, $this->source); })()) > 10)) {
                // line 106
                echo "    ";
                $context["classFonte"] = 0;
                // line 107
                echo "  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jeu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "
        </div>
      </div>";
        // line 112
        echo "
      <div class='col-md-4 col-sm-12 camembert retracter'>";
        // line 114
        echo "          <table>
            <tr>
              <td>
                <img class='grandeImage cadreBleu img-fluid' src=\"";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["img_path"]) || array_key_exists("img_path", $context) ? $context["img_path"] : (function () { throw new RuntimeError('Variable "img_path" does not exist.', 117, $this->source); })()), "html", null, true);
        echo "imagesJeux/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 117, $this->source); })()), "jeuChoisi", [], "any", false, false, false, 117), "img", [], "any", false, false, false, 117), "html", null, true);
        echo ".jpg\">
              </td>
            </tr>
            <tr>
              <td class='retracter'>
                <div class ='row camembert fondOpaque cadreBleu retracter'>
              <div class=\"col-12\"><h2>";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 123, $this->source); })()), "jeuChoisi", [], "any", false, false, false, 123), "nomComplet", [], "any", false, false, false, 123), "html", null, true);
        echo "</h2></div>
              <div class='col-12 enLigne w-100' id='divDuree'>
                <div class=\"camembertParent enLigne\">
                  ";
        // line 126
        echo twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 126, $this->source); })()), "htmlDuree", [], "any", false, false, false, 126);
        echo "
                </div>
                <div class=\"legendeCamembert\">
                  <h3>Légende :</h3>
                  <img class='enLigne rectangle' src=\"";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["img_path"]) || array_key_exists("img_path", $context) ? $context["img_path"] : (function () { throw new RuntimeError('Variable "img_path" does not exist.', 130, $this->source); })()), "html", null, true);
        echo "legendeVert.gif\">&nbsp;durée minimale";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->duree(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 130, $this->source); })()), "jeuChoisi", [], "any", false, false, false, 130), "dureemin", [], "any", false, false, false, 130)), "html", null, true);
        echo "<br>
                  <img class='enLigne rectangle' src=\"";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["img_path"]) || array_key_exists("img_path", $context) ? $context["img_path"] : (function () { throw new RuntimeError('Variable "img_path" does not exist.', 131, $this->source); })()), "html", null, true);
        echo "legendeRouge.gif\">&nbsp;durée maximale";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->duree(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 131, $this->source); })()), "jeuChoisi", [], "any", false, false, false, 131), "dureemax", [], "any", false, false, false, 131)), "html", null, true);
        echo "<br>
                  Jeu pour ";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 132, $this->source); })()), "jeuChoisi", [], "any", false, false, false, 132), "nbJoueurs", [], "any", false, false, false, 132), "html", null, true);
        echo "<br>
                  Niveau de difficulté : ";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 133, $this->source); })()), "jeuChoisi", [], "any", false, false, false, 133), "difficulte", [], "any", false, false, false, 133), "html", null, true);
        echo "
                  <table>
                    <tr>
                      <td rowspan=3><img class='mini' src=\"";
        // line 136
        echo twig_escape_filter($this->env, (isset($context["img_path"]) || array_key_exists("img_path", $context) ? $context["img_path"] : (function () { throw new RuntimeError('Variable "img_path" does not exist.', 136, $this->source); })()), "html", null, true);
        echo "pictoNiv";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 136, $this->source); })()), "jeuChoisi", [], "any", false, false, false, 136), "dominance", [], "any", false, false, false, 136), "html", null, true);
        echo ".gif\"></td>
                      <td rowspan=3><div class=\"texteInvisible\">blabla</div></td>
                      <td><img class='bonhomme' src=\"";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["img_path"]) || array_key_exists("img_path", $context) ? $context["img_path"] : (function () { throw new RuntimeError('Variable "img_path" does not exist.', 138, $this->source); })()), "html", null, true);
        echo "niveau_enfant.gif\"></td>
                      <td>5-8 ans</td>
                      <td class='texteInvisible' rowspan=3 style=\"background-image:url(";
        // line 140
        echo twig_escape_filter($this->env, (isset($context["img_path"]) || array_key_exists("img_path", $context) ? $context["img_path"] : (function () { throw new RuntimeError('Variable "img_path" does not exist.', 140, $this->source); })()), "html", null, true);
        echo "fleches";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 140, $this->source); })()), "jeuChoisi", [], "any", false, false, false, 140), "dominance", [], "any", false, false, false, 140), "html", null, true);
        echo ".gif);\">blabla</td>
                      <td><img class='rectangle' src=\"";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["img_path"]) || array_key_exists("img_path", $context) ? $context["img_path"] : (function () { throw new RuntimeError('Variable "img_path" does not exist.', 141, $this->source); })()), "html", null, true);
        echo "niveauRouge.gif\"></td>
                      <td>trop dur</td>
                    </tr>
                    <tr>
                      <td><img class='bonhomme' src=\"";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["img_path"]) || array_key_exists("img_path", $context) ? $context["img_path"] : (function () { throw new RuntimeError('Variable "img_path" does not exist.', 145, $this->source); })()), "html", null, true);
        echo "niveau_preado.gif\"></td>
                      <td>9-13 ans</td>
                      <td><img class='rectangle' src=\"";
        // line 147
        echo twig_escape_filter($this->env, (isset($context["img_path"]) || array_key_exists("img_path", $context) ? $context["img_path"] : (function () { throw new RuntimeError('Variable "img_path" does not exist.', 147, $this->source); })()), "html", null, true);
        echo "niveauOrange.gif\"></td>
                      <td>compliqué</td>
                    </tr>
                    <tr>
                      <td><img class='bonhomme' src=\"";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["img_path"]) || array_key_exists("img_path", $context) ? $context["img_path"] : (function () { throw new RuntimeError('Variable "img_path" does not exist.', 151, $this->source); })()), "html", null, true);
        echo "niveau_grand.gif\"></td>
                      <td>14 ans et plus</td>
                      <td><img class='rectangle' src=\"";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["img_path"]) || array_key_exists("img_path", $context) ? $context["img_path"] : (function () { throw new RuntimeError('Variable "img_path" does not exist.', 153, $this->source); })()), "html", null, true);
        echo "niveauVert.gif\"></td>
                      <td>facile</td>
                    </tr>
                  </table>
                </div>";
        // line 158
        echo "              </div>";
        // line 159
        echo "              <div class='col-12 inline' id='divNiveau'>
                <label class='gauche' style=\"font-size : 1.4em;\">Difficulté&nbsp;:&nbsp;";
        // line 160
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 160, $this->source); })()), "jeuChoisi", [], "any", false, false, false, 160), "dominance", [], "any", false, false, false, 160), "html", null, true);
        echo "/5</label>
                <img class='mini enAbsolu' style=\"right : 2em;top : 0;\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["img_path"]) || array_key_exists("img_path", $context) ? $context["img_path"] : (function () { throw new RuntimeError('Variable "img_path" does not exist.', 161, $this->source); })()), "html", null, true);
        echo "pictoNiv";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 161, $this->source); })()), "jeuChoisi", [], "any", false, false, false, 161), "dominance", [], "any", false, false, false, 161), "html", null, true);
        echo ".gif\">
                <h1>&nbsp;</h1>
              </div>
              <div class='col-12 inline' id='divTxtNbJoueurs'>
                <label class='gauche' style=\"font-size : 1.4em;\">";
        // line 165
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 165, $this->source); })()), "jeuChoisi", [], "any", false, false, false, 165), "nbJoueurs", [], "any", false, false, false, 165), "html", null, true);
        echo "</label>
                <img class='mini enAbsolu' style=\"right : 2em;top : 0;\" src=\"";
        // line 166
        echo twig_escape_filter($this->env, (isset($context["img_path"]) || array_key_exists("img_path", $context) ? $context["img_path"] : (function () { throw new RuntimeError('Variable "img_path" does not exist.', 166, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 166, $this->source); })()), "jeuChoisi", [], "any", false, false, false, 166), "imgNbJoueurs", [], "any", false, false, false, 166), "html", null, true);
        echo "\">
                <h1>&nbsp;</h1>
              </div>
            </div>
              </td>
            </tr>
          </table>
          <br><br>
      </div>";
        // line 175
        echo "
      <div class='col-md-8 col-sm-12 retracter' style=\"padding-top : 1em; padding-bottom : 2em;\">";
        // line 177
        echo "        <div class='fondOpaque cadreBleu enRelatif h-99'>
          <div class='enLigne'>
            <h3 class='enLigne'><label>But :</label></h3>
              <span class='enLigne' style=\"font-size : 1.5em; font-weight : bold;\">";
        // line 180
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 180, $this->source); })()), "jeuChoisi", [], "any", false, false, false, 180), "but", [], "any", false, false, false, 180), "html", null, true);
        echo "</span>
          </div>
          <h3><label style=\"text-align : left;\">Principe :</label></h3>
          <div class='sousFenetre text-justify h-99'>
            ";
        // line 184
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 184, $this->source); })()), "jeuChoisi", [], "any", false, false, false, 184), "ppe", [], "any", false, false, false, 184);
        echo "
          </div>
        </div>
        <br><br>
      </div>";
        // line 189
        echo "
      
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 193
    public function block_piedDePage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "piedDePage"));

        // line 194
        echo "    <div id=\"RangementDesJeux\" class=\"jeSuisInvisible\">
    \t<?php echo \$_SESSION[\"remplissageJeux\"]; ?>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/jeux.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 194,  420 => 193,  411 => 189,  404 => 184,  397 => 180,  392 => 177,  389 => 175,  377 => 166,  373 => 165,  364 => 161,  360 => 160,  357 => 159,  355 => 158,  348 => 153,  343 => 151,  336 => 147,  331 => 145,  324 => 141,  318 => 140,  313 => 138,  306 => 136,  300 => 133,  296 => 132,  290 => 131,  284 => 130,  277 => 126,  271 => 123,  260 => 117,  255 => 114,  252 => 112,  248 => 109,  241 => 107,  238 => 106,  235 => 105,  232 => 104,  229 => 103,  226 => 102,  223 => 101,  220 => 100,  217 => 99,  214 => 98,  211 => 97,  209 => 96,  196 => 95,  192 => 94,  190 => 93,  188 => 92,  186 => 91,  182 => 89,  179 => 87,  108 => 17,  105 => 15,  98 => 14,  87 => 10,  80 => 9,  71 => 6,  67 => 5,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"main.html.twig\" %}

{% block entete %}
  {{ parent() }}
  <link rel=\"stylesheet\" href=\"{{css_path}}jeux.css\">
  <link rel=\"stylesheet\" href=\"{{css_path}}toolTip.css\">
{% endblock %}

{% block corps %}
  {{ parent() }}
  
{% endblock %}

{% block laPage %}

      <div class='col-12 retracter'>{# Bloc Filtrage des jeux #}
          <form  method=\"POST\" action=\"jeux?operation=recherche\" class=\"fondOpaque cadreBleu\">
              <table class=\"w-100\">
                <tr>
                  <td>
                    <label>Titre :</label>
                  </td>
                  <td style=\"position:relative;\">
                    <a href=\"#\" style=\"position:relative;\">
                      <input type='text' name='jeuTitre'><div class='tool-tip right'>Nom&nbsp;complet&nbsp;ou&nbsp;partiel</div>
                    </a>
                  </td>
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
                      <div class='tool-tip left'>Difficulté&nbsp;recherchée.</div>
                    </a>
                  </td>
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
                      <div class='tool-tip left'>Durée&nbsp;d'une&nbsp;partie.
                      </div>
                    </a>
                  </td>
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
                      <div class='tool-tip left'>Nombre&nbsp;de&nbsp;joueurs.</div>
                    </a>
                  </td>
                  <td>
                    <input type=\"submit\" class=\"cadreBleu fondBleu bouton\" href=\"jeux?operation=recherche\" title=\"Rechercher les jeux correspondants à ces critères\" value=\"Chercher\">
                  </td>
                </tr>
              </table>
          </form>
      </div>{# Bloc Filtrage des jeux #}

      <div class='col-12 retracter' style=\"padding-top : 1em;\">{# Bloc Liste des jeux #}
        <div class='listeJeux cadreBleu h-30'>

{% set classeCouleur = random(12) %}
{% set classeTaille  = random(6)  %}
{% set classFonte    = random(10) %}
{% for jeu in listeJeux %}
                <a href=\"jeux?jeuChoisi={{jeu.id}}\" class=\"confetti couleur{{classeCouleur}} taille{{classeTaille}} fonte{{classFonte}}\">{{jeu.nomComplet}}</a>
  {% set classeCouleur = classeCouleur + 1 %}
  {% set classeTaille = classeTaille + 1 %}
  {% set classFonte = classFonte + 1 %}
  {% if classeCouleur > 12 %}
    {% set classeCouleur = 0 %}
  {% endif %}
  {% if classeTaille > 6 %}
    {% set classeTaille = 0 %}
  {% endif %}
  {% if classFonte > 10 %}
    {% set classFonte = 0 %}
  {% endif %}
{% endfor %}

        </div>
      </div>{# Bloc Liste des jeux #}

      <div class='col-md-4 col-sm-12 camembert retracter'>{# Bloc Nom, image et durée #}
          <table>
            <tr>
              <td>
                <img class='grandeImage cadreBleu img-fluid' src=\"{{ img_path }}imagesJeux/{{session.jeuChoisi.img}}.jpg\">
              </td>
            </tr>
            <tr>
              <td class='retracter'>
                <div class ='row camembert fondOpaque cadreBleu retracter'>
              <div class=\"col-12\"><h2>{{session.jeuChoisi.nomComplet}}</h2></div>
              <div class='col-12 enLigne w-100' id='divDuree'>
                <div class=\"camembertParent enLigne\">
                  {{session.htmlDuree|raw}}
                </div>
                <div class=\"legendeCamembert\">
                  <h3>Légende :</h3>
                  <img class='enLigne rectangle' src=\"{{ img_path }}legendeVert.gif\">&nbsp;durée minimale{{session.jeuChoisi.dureemin|duree}}<br>
                  <img class='enLigne rectangle' src=\"{{ img_path }}legendeRouge.gif\">&nbsp;durée maximale{{session.jeuChoisi.dureemax|duree}}<br>
                  Jeu pour {{session.jeuChoisi.nbJoueurs}}<br>
                  Niveau de difficulté : {{session.jeuChoisi.difficulte}}
                  <table>
                    <tr>
                      <td rowspan=3><img class='mini' src=\"{{ img_path }}pictoNiv{{session.jeuChoisi.dominance}}.gif\"></td>
                      <td rowspan=3><div class=\"texteInvisible\">blabla</div></td>
                      <td><img class='bonhomme' src=\"{{ img_path }}niveau_enfant.gif\"></td>
                      <td>5-8 ans</td>
                      <td class='texteInvisible' rowspan=3 style=\"background-image:url({{ img_path }}fleches{{session.jeuChoisi.dominance}}.gif);\">blabla</td>
                      <td><img class='rectangle' src=\"{{ img_path }}niveauRouge.gif\"></td>
                      <td>trop dur</td>
                    </tr>
                    <tr>
                      <td><img class='bonhomme' src=\"{{ img_path }}niveau_preado.gif\"></td>
                      <td>9-13 ans</td>
                      <td><img class='rectangle' src=\"{{ img_path }}niveauOrange.gif\"></td>
                      <td>compliqué</td>
                    </tr>
                    <tr>
                      <td><img class='bonhomme' src=\"{{ img_path }}niveau_grand.gif\"></td>
                      <td>14 ans et plus</td>
                      <td><img class='rectangle' src=\"{{ img_path }}niveauVert.gif\"></td>
                      <td>facile</td>
                    </tr>
                  </table>
                </div>{# Fin du bloc invisible Légende #}
              </div>{# Fin du bloc Durée #}
              <div class='col-12 inline' id='divNiveau'>
                <label class='gauche' style=\"font-size : 1.4em;\">Difficulté&nbsp;:&nbsp;{{session.jeuChoisi.dominance}}/5</label>
                <img class='mini enAbsolu' style=\"right : 2em;top : 0;\" src=\"{{ img_path }}pictoNiv{{session.jeuChoisi.dominance}}.gif\">
                <h1>&nbsp;</h1>
              </div>
              <div class='col-12 inline' id='divTxtNbJoueurs'>
                <label class='gauche' style=\"font-size : 1.4em;\">{{session.jeuChoisi.nbJoueurs}}</label>
                <img class='mini enAbsolu' style=\"right : 2em;top : 0;\" src=\"{{ img_path }}{{session.jeuChoisi.imgNbJoueurs}}\">
                <h1>&nbsp;</h1>
              </div>
            </div>
              </td>
            </tr>
          </table>
          <br><br>
      </div>{# Bloc Nom, image et durée #}

      <div class='col-md-8 col-sm-12 retracter' style=\"padding-top : 1em; padding-bottom : 2em;\">{# Bloc But et principe #}
        <div class='fondOpaque cadreBleu enRelatif h-99'>
          <div class='enLigne'>
            <h3 class='enLigne'><label>But :</label></h3>
              <span class='enLigne' style=\"font-size : 1.5em; font-weight : bold;\">{{session.jeuChoisi.but}}</span>
          </div>
          <h3><label style=\"text-align : left;\">Principe :</label></h3>
          <div class='sousFenetre text-justify h-99'>
            {{session.jeuChoisi.ppe|raw}}
          </div>
        </div>
        <br><br>
      </div>{# Bloc But et principe #}

      
{% endblock %}

{% block piedDePage %}
    <div id=\"RangementDesJeux\" class=\"jeSuisInvisible\">
    \t<?php echo \$_SESSION[\"remplissageJeux\"]; ?>
    </div>
{% endblock %}", "/jeux.html.twig", "/var/www/renardenjoue/templates/jeux.html.twig");
    }
}
