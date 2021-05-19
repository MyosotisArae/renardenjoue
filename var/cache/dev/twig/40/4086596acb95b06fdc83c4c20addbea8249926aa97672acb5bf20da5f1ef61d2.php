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

/* gerer.html.twig */
class __TwigTemplate_8792676f4a38441a833d9a35afed7b4f48fd96e7a8bef865e6f9ca786dea2791 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gerer.html.twig"));

        $this->parent = $this->loadTemplate("main.html.twig", "gerer.html.twig", 1);
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
html
{
  font-size : 1em;
}
.barreGauche
{
  font-size : 0.9rem;
}
span
{
  width : 80vw;
  font-size : 1.5rem;
  text-align : center;
  position : absolute;
}
.listeDeroulante
{
  display : block;
  overflow-x : hidden;
  overflow-y : auto;
}

.colonnes
{
  columns : 3;
}
.styleLigne0
{
  background : #DDDDFF;
}
.styleLigne1
{
  background : #EEEEFF;
}

</style>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_corps($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "corps"));

        // line 46
        echo "    <div class='container-fluid'>
      <div class='row'>

        ";
        // line 50
        echo "        ";
        $context["isAdmin"] = false;
        // line 51
        echo "        ";
        $context["isUser"] = false;
        // line 52
        echo "        ";
        if (twig_in_filter("memberConnected", twig_get_array_keys_filter(($context["session"] ?? null)))) {
            // line 53
            echo "        ";
            $context["isUser"] = true;
            // line 54
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "memberConnected", [], "any", false, false, false, 54), "isAdmin", [], "any", false, false, false, 54)) {
                // line 55
                echo "        ";
                $context["isAdmin"] = true;
                // line 56
                echo "        ";
                $context["styleBody"] = "";
                // line 57
                echo "        ";
            }
            // line 58
            echo "        ";
        }
        // line 59
        echo "
        ";
        // line 60
        if (($context["isAdmin"] ?? null)) {
            // line 61
            echo "
        <div class='col-2' style=\"height : 90vh; padding : 0.5rem;\">
          <div style=\"border: 1px solid black; height : 100%; padding : 0.5rem; position : relative;\">
            <li>Dates</li>
            <a href=\"ajout_date\">- en ajouter une</a><br>
            <a href=\"modif_date\">- modifier</a><br>
            <a href=\"voir_inscrip\">- inscriptions</a><br>
            <br>
            <li>Jeux</li>
            <a href=\"ajout_jeu0\">- en ajouter un</a><br>
            <a href=\"liste_jeux\">- lister</a><br>
            <a href=\"renumeroter_jeux\">- renuméroter</a><br>
            <br>
            <li>Joueurs</li>
            <a href=\"liste_membres\">- lister</a><br>
            <br>
            <br>
            <div style='position : absolute; bottom : 0.5rem; left : 0.5rem; '>
              <form method='post' action='calendrier'>
                <button class='btn-primary btn float-right' type='submit'>Retour au site</button>
              </form>
            </div>
          </div>
        </div>

        <div class='col-1'>
          &nbsp;<br>
        </div>

        <div class='col-9' style=\"height : 90vh; padding : 0.5rem;\">
          <div class='listeDeroulante' style=\"border: 1px solid black; height : 100%; padding : 0.5rem;\">
          ";
            // line 92
            $this->displayBlock('laPage', $context, $blocks);
            // line 94
            echo "          </div>
        </div>

        ";
        } else {
            // line 98
            echo "          ";
            // line 99
            echo "          <meta http-equiv= \"refresh\" content=\"0; erreur404\" />
        ";
        }
        // line 101
        echo "
      </div> ";
        // line 103
        echo "    </div> ";
        // line 104
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_laPage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "laPage"));

        // line 93
        echo "          ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gerer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 93,  213 => 92,  205 => 104,  203 => 103,  200 => 101,  196 => 99,  194 => 98,  188 => 94,  186 => 92,  153 => 61,  151 => 60,  148 => 59,  145 => 58,  142 => 57,  139 => 56,  136 => 55,  133 => 54,  130 => 53,  127 => 52,  124 => 51,  121 => 50,  116 => 46,  109 => 45,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "gerer.html.twig", "/var/www/renardenjoue/templates/gerer.html.twig");
    }
}
