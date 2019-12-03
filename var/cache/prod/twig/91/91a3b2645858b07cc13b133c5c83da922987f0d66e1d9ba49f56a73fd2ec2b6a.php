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
class __TwigTemplate_d8327059ba6b4b0c5b016759b412a26d4eb15ce9417bbcba76e379b598ee4de1 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("main.html.twig", "jeux.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_entete($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  ";
        $this->displayParentBlock("entete", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["css_path"] ?? null), "html", null, true);
        echo "jeux.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["css_path"] ?? null), "html", null, true);
        echo "toolTip.css\">
";
    }

    // line 9
    public function block_corps($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "  ";
        $this->displayParentBlock("corps", $context, $blocks);
        echo "
  
";
    }

    // line 14
    public function block_laPage($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "
  <div class='container-fluid'>
    <section class='row'>

      <div class='col-md-5'>
        <section class ='row'>
          <div class='col-md-12'>
            <div class='listeJeux'>
";
        // line 23
        $context["classeCouleur"] = twig_random($this->env, 12);
        // line 24
        $context["classeTaille"] = twig_random($this->env, 6);
        // line 25
        $context["classFonte"] = twig_random($this->env, 10);
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listeJeux"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["jeu"]) {
            // line 27
            echo "  <a href=\"jeux?jeuChoisi=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "\" class=\"confetti couleur";
            echo twig_escape_filter($this->env, ($context["classeCouleur"] ?? null), "html", null, true);
            echo " taille";
            echo twig_escape_filter($this->env, ($context["classeTaille"] ?? null), "html", null, true);
            echo " fonte";
            echo twig_escape_filter($this->env, ($context["classFonte"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "nomComplet", [], "any", false, false, false, 27), "html", null, true);
            echo "</a>
  ";
            // line 28
            $context["classeCouleur"] = (($context["classeCouleur"] ?? null) + 1);
            // line 29
            echo "  ";
            $context["classeTaille"] = (($context["classeTaille"] ?? null) + 1);
            // line 30
            echo "  ";
            $context["classFonte"] = (($context["classFonte"] ?? null) + 1);
            // line 31
            echo "  ";
            if ((($context["classeCouleur"] ?? null) > 12)) {
                // line 32
                echo "    ";
                $context["classeCouleur"] = 0;
                // line 33
                echo "  ";
            }
            // line 34
            echo "  ";
            if ((($context["classeTaille"] ?? null) > 6)) {
                // line 35
                echo "    ";
                $context["classeTaille"] = 0;
                // line 36
                echo "  ";
            }
            // line 37
            echo "  ";
            if ((($context["classFonte"] ?? null) > 10)) {
                // line 38
                echo "    ";
                $context["classFonte"] = 0;
                // line 39
                echo "  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jeu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            </div>
          </div>
          <form class='col-md-12 margeAdroite' method=\"POST\" action=\"jeux?operation=recherche\">
            <section class ='row'>
              <div class='col-md-4'><label>Titre :</label></div>
              <div class='col-md-8' style=\"position:relative;\"><a href=\"#\" style=\"position:relative;\"><input type='text' name='jeuTitre'><div class='tool-tip right'>Ecrivez&nbsp;ici&nbsp;le&nbsp;titre,&nbsp;complet&nbsp;ou&nbsp;partiel,&nbsp;que&nbsp;vous&nbsp;recherchez.</div></a></div>
              <div class='col-md-4'><label>Difficulté :</label></div>
              <div class='col-md-8'><a href=\"#\" style=\"position:relative;\">
      \t\t\t\t\t\t\t\t<select name='jeuNiveau'>
      \t\t\t\t\t\t\t\t\t<option value='0'></option>
      \t\t\t\t\t\t\t\t\t<option value='1' class=\"fondVert\" alt=\"Parties courtes, règles simples\">famille - enfants</option>
      \t\t\t\t\t\t\t\t\t<option value='2' class=\"fondJaune\">abordable</option>
      \t\t\t\t\t\t\t\t\t<option value='3' class=\"fondOrange\">confirmés</option>
      \t\t\t\t\t\t\t\t\t<option value='4' class=\"fondRouge\">connaisseurs</option>
      \t\t\t\t\t\t\t\t\t<option value='5' class=\"fondNoir\">experts</option>
      \t\t\t\t\t\t\t\t</select><div class='tool-tip right'>Niveau&nbsp;de&nbsp;difficulté&nbsp;recherché.</div></a>
      \t\t\t\t</div>
              <div class='col-md-4'><label>Durée :</label></div>
              <div class='col-md-8'><a href=\"#\" style=\"position:relative;\">
      \t\t\t\t\t\t\t\t<select name='jeuDuree'>
      \t\t\t\t\t\t\t\t\t<option value='0'></option>
      \t\t\t\t\t\t\t\t\t<option value='1'>20mn ou moins</option>
      \t\t\t\t\t\t\t\t\t<option value='2'>20 à 45mn</option>
      \t\t\t\t\t\t\t\t\t<option value='3'>jusqu'à 1h30</option>
      \t\t\t\t\t\t\t\t\t<option value='4'>1h30 à 3h</option>
      \t\t\t\t\t\t\t\t\t<option value='5'>3h ou plus</option>
      \t\t\t\t\t\t\t\t</select><div class='tool-tip right'>Indiquez&nbsp;la&nbsp;durée&nbsp;approximative,&nbsp;du&nbsp;jeu.</div></a>
              </div>
              <div class='col-md-4'><label>pour :</label></div>
              <div class='col-md-4'>
      \t\t\t\t\t\t\t\t<select name='jeuNb'>
      \t\t\t\t\t\t\t\t\t<option value='0'></option>
      \t\t\t\t\t\t\t\t\t<option value='1'>1</option>
      \t\t\t\t\t\t\t\t\t<option value='2'>2</option>
      \t\t\t\t\t\t\t\t\t<option value='3'>3</option>
      \t\t\t\t\t\t\t\t\t<option value='4'>4</option>
      \t\t\t\t\t\t\t\t\t<option value='5'>5</option>
      \t\t\t\t\t\t\t\t\t<option value='6'>6</option>
      \t\t\t\t\t\t\t\t\t<option value='7'>7</option>
      \t\t\t\t\t\t\t\t\t<option value='8'>8 et plus</option>
      \t\t\t\t\t\t\t\t</select>
              </div>
              <div class='col-md-4'><label class='gauche'>joueurs</label></div>
              <div class='col-md-12'><input type=\"submit\" class=\"cadreBleu fondBleu bouton\" href=\"jeux?operation=recherche\" value=\"Rechercher les jeux correspondants\"></div>
            </section>
          </form>
        </section>
      </div>

      <div class='col-md-7'>
        <section class ='row'>
          ";
        // line 93
        echo "          <div class='col-xs-5'><div class='grandeImage cadreBleu' style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "imagesJeux/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 93), "img", [], "any", false, false, false, 93), "html", null, true);
        echo ".jpg);\"></div></div>
          <div class='col-xs-7 camembert'>
            <section class ='row'>
              <div class='col-md-12 enLigne' id='divDuree'>
                <div class=\"camembertParent enLigne\">
                  ";
        // line 98
        echo twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "htmlDuree", [], "any", false, false, false, 98);
        echo "
                </div>
                <div class=\"legendeCamembert\">
                  <h3>Légende :</h3>
                  <img class='enLigne rectangle' src=\"";
        // line 102
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "legendeVert.gif\">&nbsp;durée minimale";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->duree(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 102), "dureemin", [], "any", false, false, false, 102)), "html", null, true);
        echo "<br>
                  <img class='enLigne rectangle' src=\"";
        // line 103
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "legendeRouge.gif\">&nbsp;durée maximale";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->duree(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 103), "dureemax", [], "any", false, false, false, 103)), "html", null, true);
        echo "<br>
                  Jeu pour ";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 104), "nbJoueurs", [], "any", false, false, false, 104), "html", null, true);
        echo "<br>
                  Niveau de difficulté : ";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 105), "difficulte", [], "any", false, false, false, 105), "html", null, true);
        echo "
                  <table>
                    <tr>
                      <td rowspan=3><img class='mini' src=\"";
        // line 108
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "pictoNiv";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 108), "dominance", [], "any", false, false, false, 108), "html", null, true);
        echo ".gif\"></td>
                      <td rowspan=3><div class=\"texteInvisible\">blabla</div></td>
                      <td><img class='bonhomme' src=\"";
        // line 110
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "niveau_enfant.gif\"></td>
                      <td>5-8 ans</td>
                      <td class='texteInvisible' rowspan=3 style=\"background-image:url(";
        // line 112
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "fleches";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 112), "dominance", [], "any", false, false, false, 112), "html", null, true);
        echo ".gif);\">blabla</td>
                      <td><img class='rectangle' src=\"";
        // line 113
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "niveauRouge.gif\"></td>
                      <td>trop dur</td>
                    </tr>
                    <tr>
                      <td><img class='bonhomme' src=\"";
        // line 117
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "niveau_preado.gif\"></td>
                      <td>9-13 ans</td>
                      <td><img class='rectangle' src=\"";
        // line 119
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "niveauOrange.gif\"></td>
                      <td>compliqué</td>
                    </tr>
                    <tr>
                      <td><img class='bonhomme' src=\"";
        // line 123
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "niveau_grand.gif\"></td>
                      <td>14 ans et plus</td>
                      <td><img class='rectangle' src=\"";
        // line 125
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "niveauVert.gif\"></td>
                      <td>facile</td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class='col-md-4' id='divImgNbJoueurs'><img class='mini' src=\"";
        // line 131
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 131), "imgNbJoueurs", [], "any", false, false, false, 131), "html", null, true);
        echo "\"></div>
              <div class='col-md-8' id='divTxtNbJoueurs'><label class='gauche'>";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 132), "nbJoueurs", [], "any", false, false, false, 132), "html", null, true);
        echo "</labe></div>
              <div class='col-md-2' id='divNiveau'><img class='mini' src=\"";
        // line 133
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "pictoNiv";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 133), "dominance", [], "any", false, false, false, 133), "html", null, true);
        echo ".gif\"></div>
            </section>
          </div>
          <div class='col-md-12 cadreBleu fondBleu reduire'>
            <h1>";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 137), "nomComplet", [], "any", false, false, false, 137), "html", null, true);
        echo "</h1>
          </div>
          <div class='col-md-12'>
            <div class='enLigne'>
              <h2 class='enLigne souligneBleu'>But :</h2>
              <h3 class='enLigne'>";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 142), "but", [], "any", false, false, false, 142), "html", null, true);
        echo "</h3>
            </div>
          </div>
          <div class='col-md-12'>
            <div class=\"souligneBleu\"><h2>Principe :</h2></div>
          </div>
          <div class='col-md-12'>
            <div class='parchemin'>
              ";
        // line 150
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 150), "ppe", [], "any", false, false, false, 150);
        echo "
            </div>
          </div>
        </section>
      </div>
      
        </section>
      </div>


    </section>
  </div>

";
    }

    // line 165
    public function block_piedDePage($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 166
        echo "    <div id=\"RangementDesJeux\" class=\"jeSuisInvisible\">
    \t<?php echo \$_SESSION[\"remplissageJeux\"]; ?>
    </div>
";
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
        return array (  359 => 166,  355 => 165,  337 => 150,  326 => 142,  318 => 137,  309 => 133,  305 => 132,  300 => 131,  291 => 125,  286 => 123,  279 => 119,  274 => 117,  267 => 113,  261 => 112,  256 => 110,  249 => 108,  243 => 105,  239 => 104,  233 => 103,  227 => 102,  220 => 98,  209 => 93,  156 => 41,  149 => 39,  146 => 38,  143 => 37,  140 => 36,  137 => 35,  134 => 34,  131 => 33,  128 => 32,  125 => 31,  122 => 30,  119 => 29,  117 => 28,  104 => 27,  100 => 26,  98 => 25,  96 => 24,  94 => 23,  84 => 15,  80 => 14,  72 => 10,  68 => 9,  62 => 6,  58 => 5,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jeux.html.twig", "/var/www/renardenjoue/templates/jeux.html.twig");
    }
}
