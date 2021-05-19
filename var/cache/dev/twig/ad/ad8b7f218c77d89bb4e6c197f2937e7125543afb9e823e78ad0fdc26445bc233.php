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

/* gerer_dates_list.html.twig */
class __TwigTemplate_8967c2864c4c4c7f26e4d1ef44276794d635f8e9e41cb0e71bd2d0725347df56 extends \Twig\Template
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
        return "gerer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gerer_dates_list.html.twig"));

        $this->parent = $this->loadTemplate("gerer.html.twig", "gerer_dates_list.html.twig", 1);
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

  <style>
    input { font-size : 1rem; }
    .input2
    {
      text-align : center;
      width : 2rem;
      border : 0;
    }
    .input4
    {
      text-align : left;
      width : 4rem;
      border : 0;
    }
    textarea
    {
      width : 100%;
      height : 6rem;
      font-size : 1rem;
    }
    button
    {
      text-align : right;
      font-size : 1rem;
    }
  </style>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_corps($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "corps"));

        // line 36
        echo "  ";
        $this->displayParentBlock("corps", $context, $blocks);
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_laPage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "laPage"));

        // line 40
        echo "
";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listeDates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["evt"]) {
            // line 42
            echo "<form action='save_evt_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "' method='post'>
  <div class='container-fluid' style='border : 2px solid black; padding-top : 1rem;'>
    <div class='row'>
      <div class='col-3'>
        <input name='chTitre' value=\"";
            // line 46
            echo twig_get_attribute($this->env, $this->source, $context["evt"], "titre", [], "any", false, false, false, 46);
            echo "\" style='width : 100%; margin-bottom : 1.2rem;'><br>
        <input name='chCapacite' value=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "capacite", [], "any", false, false, false, 47), "html", null, true);
            echo "\" style='width : 2em; margin-bottom : 1.2rem;'>&nbsp;joueurs
        <a href='del_evt_";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "'><button class='btn-danger btn float-right' type='button'>Supprimer id ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "</button></a>
      </div>
      <div class='col-9'><textarea name='chDesc'>";
            // line 50
            echo $this->extensions['App\Twig\AppExtension']->retourChariot(twig_get_attribute($this->env, $this->source, $context["evt"], "description", [], "any", false, false, false, 50));
            echo "</textarea></div>
      <div class='col-10'>
        ";
            // line 52
            if (twig_get_attribute($this->env, $this->source, $context["evt"], "dateFin", [], "any", false, false, false, 52)) {
                // line 53
                echo "        du
        ";
            } else {
                // line 55
                echo "        le
        ";
            }
            // line 57
            echo "        &nbsp;<input class='input2' name='chDdeb-j' value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "dateDebut", [], "any", false, false, false, 57), "d"), "html", null, true);
            echo "\">/<input class='input2' name='chDdeb-m' value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "dateDebut", [], "any", false, false, false, 57), "m"), "html", null, true);
            echo "\">/&nbsp;<input class='input4' name='chDdeb-a' value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "dateDebut", [], "any", false, false, false, 57), "Y"), "html", null, true);
            echo "\">
        &nbsp;dès&nbsp;<input class='input2' name='chHdeb-h' value=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "heureDebut", [], "any", false, false, false, 58), "H"), "html", null, true);
            echo "\">:
        <input class='input2' name='chHdeb-m' value=\"";
            // line 59
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "heureDebut", [], "any", false, false, false, 59), "i"), "html", null, true);
            echo "\" style='text-align:left;'>
        ";
            // line 60
            if (twig_get_attribute($this->env, $this->source, $context["evt"], "dateFin", [], "any", false, false, false, 60)) {
                // line 61
                echo "        &nbsp;au&nbsp;<input class='input2' name='chDfin-j' value=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "dateFin", [], "any", false, false, false, 61), "d"), "html", null, true);
                echo "\">/<input class='input2' name='chDfin-m' value=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "dateFin", [], "any", false, false, false, 61), "m"), "html", null, true);
                echo "\">/&nbsp;<input class='input4' name='chDfin-a' value=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "dateFin", [], "any", false, false, false, 61), "Y"), "html", null, true);
                echo "\">
        ";
            }
            // line 63
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["evt"], "heureFin", [], "any", false, false, false, 63)) {
                // line 64
                echo "        &nbsp;jusqu'à&nbsp;<input class='input2' name='chHfin-h' value=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "heureFin", [], "any", false, false, false, 64), "H"), "html", null, true);
                echo "\">:
        <input class='input2' name='chHfin-m' value=\"";
                // line 65
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "heureFin", [], "any", false, false, false, 65), "i"), "html", null, true);
                echo "\" style='text-align:left;'>
        ";
            }
            // line 67
            echo "      </div>
      <div class='col-2'><button class='btn-primary btn float-right' type='submit'>Enregistrer id ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "id", [], "any", false, false, false, 68), "html", null, true);
            echo "</button></div>
    </div>
  </div>
</form>
<br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gerer_dates_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 74,  213 => 68,  210 => 67,  205 => 65,  200 => 64,  197 => 63,  187 => 61,  185 => 60,  181 => 59,  177 => 58,  168 => 57,  164 => 55,  160 => 53,  158 => 52,  153 => 50,  146 => 48,  142 => 47,  138 => 46,  130 => 42,  126 => 41,  123 => 40,  116 => 39,  106 => 36,  99 => 35,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "gerer_dates_list.html.twig", "/var/www/renardenjoue/templates/gerer_dates_list.html.twig");
    }
}
