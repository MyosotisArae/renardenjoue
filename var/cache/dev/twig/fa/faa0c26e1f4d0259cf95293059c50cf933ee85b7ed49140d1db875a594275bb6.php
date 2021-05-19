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

/* test.html.twig */
class __TwigTemplate_bca2609f6ca29691590f0a53a4cf5e6a3d2a4ad3417fd2b17615ed83acf0ba24 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test.html.twig"));

        $this->parent = $this->loadTemplate("main.html.twig", "test.html.twig", 1);
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
  <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["css_path"] ?? null), "html", null, true);
        echo "jeux.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["css_path"] ?? null), "html", null, true);
        echo "toolTip.css\">
  <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["js_path"] ?? null), "html", null, true);
        echo "jeux.js\"></script>
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
        echo "
      <div class='col-12'>";
        // line 18
        echo "        <div class='fondOpaque cadreBleu'>
          Bloc Filtrage des jeux
        </div>
      </div>";
        // line 22
        echo "
      <div class='col-12'>";
        // line 24
        echo "        <div class='listeJeux cadreBleu h-30'>
          Bloc Liste des jeux
        </div>
      </div>";
        // line 28
        echo "
      <div class='col-12'>";
        // line 30
        echo "        <div class='fondOpaque cadreBleu'>
          Bloc Titre
        </div>
      </div>";
        // line 34
        echo "
      <div class='col-md-4 col-12 camembert'>";
        // line 36
        echo "        <div class=\"fondOpaque cadreBleu\">
          <img class='grandeImage img-fluid' id=\"divImg\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "imagesJeux/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "jeuChoisi", [], "any", false, false, false, 37), "img", [], "any", false, false, false, 37), "html", null, true);
        echo ".jpg\">
        </div>
        <div class=\"fondOpaque cadreBleu\">
        Bloc Nom, image et durée
        </div>
      </div>";
        // line 43
        echo "
      <div class='col-md-8 col-12' style=\"z-index : -1; height:auto;\">";
        // line 45
        echo "        <div class='fondOpaque cadreBleu enRelatif' style='height:auto;'>
          Bloc But et principe
        </div>
      </div>";
        // line 49
        echo "
      
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_piedDePage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "piedDePage"));

        // line 54
        echo "    <div id=\"RangementDesJeux\" class=\"jeSuisInvisible\">
";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listeJeux"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["jeu"]) {
            // line 56
            echo "      <div id=\"jeuNo";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "id", [], "any", false, false, false, 56), "html", null, true);
            echo "_nom\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "nom", [], "any", false, false, false, 56), "html", null, true);
            echo "</div>
      <div id=\"jeuNo";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "id", [], "any", false, false, false, 57), "html", null, true);
            echo "_nmc\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "fullnom", [], "any", false, false, false, 57), "html", null, true);
            echo "</div>
      <div id=\"jeuNo";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "id", [], "any", false, false, false, 58), "html", null, true);
            echo "_but\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "but", [], "any", false, false, false, 58), "html", null, true);
            echo "</div>
      <div id=\"jeuNo";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "id", [], "any", false, false, false, 59), "html", null, true);
            echo "_ppe\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "ppe", [], "any", false, false, false, 59), "html", null, true);
            echo "</div>
      <div id=\"jeuNo";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo "_niv\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "dominance", [], "any", false, false, false, 60), "html", null, true);
            echo "</div>
      <div id=\"jeuNo";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "id", [], "any", false, false, false, 61), "html", null, true);
            echo "_min\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "dureemin", [], "any", false, false, false, 61), "html", null, true);
            echo "</div>
      <div id=\"jeuNo";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "id", [], "any", false, false, false, 62), "html", null, true);
            echo "_max\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "dureemax", [], "any", false, false, false, 62), "html", null, true);
            echo "</div>
      <div id=\"jeuNo";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "_dur\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "duree", [], "any", false, false, false, 63), "html", null, true);
            echo "</div>
      <div id=\"jeuNo";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "_nbj\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "nbJoueurs", [], "any", false, false, false, 64), "html", null, true);
            echo "</div>
      <div id=\"jeuNo";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "_img\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "img", [], "any", false, false, false, 65), "html", null, true);
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jeu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "    </div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 68,  235 => 65,  229 => 64,  223 => 63,  217 => 62,  211 => 61,  205 => 60,  199 => 59,  193 => 58,  187 => 57,  180 => 56,  176 => 55,  173 => 54,  166 => 53,  157 => 49,  152 => 45,  149 => 43,  139 => 37,  136 => 36,  133 => 34,  128 => 30,  125 => 28,  120 => 24,  117 => 22,  112 => 18,  109 => 16,  102 => 15,  91 => 11,  84 => 10,  75 => 7,  71 => 6,  67 => 5,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "test.html.twig", "/var/www/renardenjoue/templates/test.html.twig");
    }
}
