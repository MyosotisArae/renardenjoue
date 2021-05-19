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

/* accueil.html.twig */
class __TwigTemplate_3e9b3b171dd5713b025e78fd580b405d47ca50a71ab5635a5f1917af9ee1bbbc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'entete' => [$this, 'block_entete'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil.html.twig"));

        $this->parent = $this->loadTemplate("main.html.twig", "accueil.html.twig", 1);
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
        echo "accueil.css\">
<style>
  .encadrer
  {
    box-sizing: border-box;
    background : Ivory;
    opacity : 0.9;
    padding-right : 1em;
    padding-left : 1em;
  }
</style>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_laPage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "laPage"));

        // line 19
        echo "
  <div class=\"col-12\">
    <br>
  </div>

  <div class=\"col-12 col-md-7 container\" style=\"box-sizing: border-box;\">";
        // line 25
        echo "    <div class=\"row encadrer cadreBleu\">
      <div class=\"col-11\">
        <br>
        <h1><a href=\"jeux\">Nos jeux</a></h1>
      </div>
      <div class=\"col-1\">
      </div>
      <div class=\"col-11\">
        <br><br>
        <h1><a href=\"https://lerenardenjoue.forumactif.com/\">Notre forum</a></h1>
      </div>
      <div class=\"col-1\">
      </div>
      <div class=\"col-11\">
        <br><br>
        <h1><a href=\"contact\">Infos et contact</a></h1>
      </div>
      <div class=\"col-1\">
      </div>
      <div class=\"col-11\">
        <br><br>
        <h1><a href=\"calendrier\">";
        // line 46
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, "évènements à venir"), "html", null, true);
        echo "</a></h1>
        <br>
      </div>
    </div>";
        // line 50
        echo "    
  </div>";
        // line 52
        echo "
  <div class=\"col-12 col-md-1\">
    <h1>&nbsp;</h1>
  </div>
  <div class=\"col-12 col-md-4 encadrer cadreBleu\">";
        // line 57
        echo "    <div class=\"row\">
      <div class=\"col-md-12 col-6\">
        <u>Prochains évènements :</u><br>
        ";
        // line 60
        if ((twig_length_filter($this->env, ($context["nextEvts"] ?? null)) > 0)) {
            // line 61
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["nextEvts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["evt"]) {
                // line 62
                echo "          <li>Le ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "date", [], "any", false, false, false, 62), "html", null, true);
                echo " :</li>
          ";
                // line 63
                $context["titre"] = twig_get_attribute($this->env, $this->source, $context["evt"], "titre", [], "any", false, false, false, 63);
                // line 64
                echo "          ";
                if ((($context["titre"] ?? null) == "Les renards jouent")) {
                    // line 65
                    echo "            ";
                    $context["titre"] = "Soirée-jeux de l'asso";
                    // line 66
                    echo "          ";
                }
                // line 67
                echo "          <div style='margin-left : 2.5em;'><a href='afficherEvt";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "id", [], "any", false, false, false, 67), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, ($context["titre"] ?? null), "html", null, true);
                echo "</a></div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evt'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "        ";
        } else {
            // line 70
            echo "          Rien n'est prévu dans les prochains mois.
          <br><br>
        ";
        }
        // line 73
        echo "        <br><br>
      </div>
      <div class=\"col-md-12 col-6\">
        <u>Ajouts récents :</u><br>
        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lastGames"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["jeu"]) {
            // line 78
            echo "        <li><a href=\"choisirJeu";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "id", [], "any", false, false, false, 78), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "nomComplet", [], "any", false, false, false, 78), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jeu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "        <br>
        Venez les tester !<br>
      </div>
    </div>
  </div>";
        // line 85
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 85,  204 => 80,  193 => 78,  189 => 77,  183 => 73,  178 => 70,  175 => 69,  164 => 67,  161 => 66,  158 => 65,  155 => 64,  153 => 63,  148 => 62,  143 => 61,  141 => 60,  136 => 57,  130 => 52,  127 => 50,  121 => 46,  98 => 25,  91 => 19,  84 => 18,  65 => 5,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "accueil.html.twig", "/var/www/renardenjoue/templates/accueil.html.twig");
    }
}
