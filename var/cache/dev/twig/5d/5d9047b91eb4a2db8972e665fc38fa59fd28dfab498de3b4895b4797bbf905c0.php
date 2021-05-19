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

/* _jeuDetail.html.twig */
class __TwigTemplate_e1046673b93cfadc414acb3e75bc3be30ec948f52ce6aba689b2f4005d124d67 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_jeuDetail.html.twig"));

        // line 1
        echo "<form action='save_jeu";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["jeu"] ?? null), "id", [], "any", false, false, false, 1), "html", null, true);
        echo "' method='post' style='font-size : 1.5rem; height : 100%;'>
  <div class='container-fluid' style='padding-top : 1rem; height : 100%;'>
    <div class='row' style='height : 100%;'>
      <div class='col-2'>
        Nom du jeu&nbsp;:&nbsp;
      </div>
      <div class='col-4'>
        <input type='text' name='chNom' placeholder=\"sans l'article\" value=\"";
        // line 8
        (((twig_get_attribute($this->env, $this->source, ($context["jeu"] ?? null), "id", [], "any", false, false, false, 8) > 0)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["jeu"] ?? null), "nom", [], "any", false, false, false, 8), "html", null, true))) : (print ("")));
        echo "\">
      </div>
      <div class='col-6'>
        <input type='text' name='chFull' placeholder=\"complet\" value=\"";
        // line 11
        (((twig_get_attribute($this->env, $this->source, ($context["jeu"] ?? null), "id", [], "any", false, false, false, 11) > 0)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["jeu"] ?? null), "fullnom", [], "any", false, false, false, 11), "html", null, true))) : (print ("")));
        echo "\">
      </div>
      <div class='col-2'>
        Fichier image&nbsp;:&nbsp;
      </div>
      <div class='col-5'>
        <input type='text' name='chImg'  placeholder=\"nom de fichier (sans le .jpg)\" value=\"";
        // line 17
        (((twig_get_attribute($this->env, $this->source, ($context["jeu"] ?? null), "id", [], "any", false, false, false, 17) > 0)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["jeu"] ?? null), "img", [], "any", false, false, false, 17), "html", null, true))) : (print ("")));
        echo "\">
      </div>
      <div class='col-5'>
        <input type='file' placeholder=\"upload\">
      </div>
      <div class='col-9'>
        But&nbsp;:&nbsp;<input type='text' name='chBut' value=\"";
        // line 23
        (((twig_get_attribute($this->env, $this->source, ($context["jeu"] ?? null), "id", [], "any", false, false, false, 23) > 0)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["jeu"] ?? null), "but", [], "any", false, false, false, 23), "html", null, true))) : (print ("")));
        echo "\">
      </div>
      <div class='col-3 float-right'>
        Complexité&nbsp;:&nbsp;<select name='chDom' class='float-right w-100'>
            \t\t\t\t\t<option value='0'></option>
        \t    \t\t\t\t<option value='1' class='fondVert' ";
        // line 28
        echo (((twig_get_attribute($this->env, $this->source, ($context["jeu"] ?? null), "dominance", [], "any", false, false, false, 28) == 1)) ? ("selected") : (""));
        echo "     >famille - enfants</option>
        \t\t\t    \t\t<option value='2' class='fondJaune' ";
        // line 29
        echo (((twig_get_attribute($this->env, $this->source, ($context["jeu"] ?? null), "dominance", [], "any", false, false, false, 29) == 2)) ? ("selected") : (""));
        echo "    >abordable</option>
      \t  \t\t\t\t    \t<option value='3' class='fondOrange'  ";
        // line 30
        echo (((twig_get_attribute($this->env, $this->source, ($context["jeu"] ?? null), "dominance", [], "any", false, false, false, 30) == 3)) ? ("selected") : (""));
        echo ">confirmés</option>
    \t\t\t  \t\t\t\t<option value='4' class='fondRouge'  ";
        // line 31
        echo (((twig_get_attribute($this->env, $this->source, ($context["jeu"] ?? null), "dominance", [], "any", false, false, false, 31) == 4)) ? ("selected") : (""));
        echo "     >connaisseurs</option>
          \t  \t\t\t\t\t<option value='5' class='fondNoir'  ";
        // line 32
        echo (((twig_get_attribute($this->env, $this->source, ($context["jeu"] ?? null), "dominance", [], "any", false, false, false, 32) == 5)) ? ("selected") : (""));
        echo "  >experts</option>
      \t    \t  \t\t\t   </select>
      </div>
      <div class='col-12'>
        Principe&nbsp;:
      </div>
      <div class='col-12'>
        <textarea name='chDesc'>";
        // line 39
        (((twig_get_attribute($this->env, $this->source, ($context["jeu"] ?? null), "id", [], "any", false, false, false, 39) > 0)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["jeu"] ?? null), "ppe", [], "any", false, false, false, 39), "html", null, true))) : (print ("")));
        echo "</textarea>
      </div>
      <div class='col-6'>
        De&nbsp;<input name='chNbJmin' class='input4' value=\"";
        // line 42
        (((twig_get_attribute($this->env, $this->source, ($context["jeu"] ?? null), "id", [], "any", false, false, false, 42) > 0)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["jeu"] ?? null), "nbjmin", [], "any", false, false, false, 42), "html", null, true))) : (print (2)));
        echo "\">&nbsp;à&nbsp;<input name='chNbJmax' class='input4' value=\"";
        (((twig_get_attribute($this->env, $this->source, ($context["jeu"] ?? null), "id", [], "any", false, false, false, 42) > 0)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["jeu"] ?? null), "nbjmax", [], "any", false, false, false, 42), "html", null, true))) : (print (5)));
        echo "\">&nbsp;joueurs
      </div>
      <div class='col-6'>
        Durée&nbsp;:&nbsp;de&nbsp;<input name='chDureemin' class='input4' value=\"";
        // line 45
        (((twig_get_attribute($this->env, $this->source, ($context["jeu"] ?? null), "id", [], "any", false, false, false, 45) > 0)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["jeu"] ?? null), "dureemin", [], "any", false, false, false, 45), "html", null, true))) : (print (60)));
        echo "\">&nbsp;à&nbsp;<input name='chDureemax' class='input4' value=\"";
        (((twig_get_attribute($this->env, $this->source, ($context["jeu"] ?? null), "id", [], "any", false, false, false, 45) > 0)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["jeu"] ?? null), "dureemax", [], "any", false, false, false, 45), "html", null, true))) : (print (60)));
        echo "\">&nbsp;minutes
      </div>
      <div class='col-12 colonnes'>
        <u>Mécanismes et pré-requis :</u>
      </div>
      <div class='col-12 colonnes'>
        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, ($context["jeu"] ?? null), "getListeMecanismes", [], "any", false, false, false, 51)));
        foreach ($context['_seq'] as $context["_key"] => $context["cle"]) {
            // line 52
            echo "        ";
            $context["cocher"] = "";
            // line 53
            echo "        ";
            if (((twig_get_attribute($this->env, $this->source, ($context["jeu"] ?? null), "meca", [], "any", false, false, false, 53) & $context["cle"]) > 0)) {
                // line 54
                echo "        ";
                $context["cocher"] = " checked";
                // line 55
                echo "        ";
            }
            // line 56
            echo "        <table>
          <tr>
            <td style='width : 1.5rem;'>
              <input name='cb";
            // line 59
            echo twig_escape_filter($this->env, $context["cle"], "html", null, true);
            echo "' type='checkbox' value='";
            echo twig_escape_filter($this->env, $context["cle"], "html", null, true);
            echo "'";
            echo twig_escape_filter($this->env, ($context["cocher"] ?? null), "html", null, true);
            echo ">
            </td>
            <td>
              ";
            // line 62
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["jeu"] ?? null), "getListeMecanismes", [], "any", false, false, false, 62)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["cle"]] ?? null) : null), "html", null, true);
            echo "
            </td>
          </tr>
        </table>
        <br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "      </div>
      <div class='col-10'>
      </div>
      <div class='col-2 enRelatif'><button class='btn-primary btn basDroite' type='submit'>Sauvegarder</button><br><br>
      </div>
    </div>
  </div>
</form>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "_jeuDetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 68,  165 => 62,  155 => 59,  150 => 56,  147 => 55,  144 => 54,  141 => 53,  138 => 52,  134 => 51,  123 => 45,  115 => 42,  109 => 39,  99 => 32,  95 => 31,  91 => 30,  87 => 29,  83 => 28,  75 => 23,  66 => 17,  57 => 11,  51 => 8,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_jeuDetail.html.twig", "/var/www/renardenjoue/templates/_jeuDetail.html.twig");
    }
}
