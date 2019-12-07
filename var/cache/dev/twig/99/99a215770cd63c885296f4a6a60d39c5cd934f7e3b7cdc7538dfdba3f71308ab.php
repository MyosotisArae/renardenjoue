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

/* /accueil.html.twig */
class __TwigTemplate_d1b6cc58c5539309141d898ec078845b1824b866568e6eeb5448acaf092680eb extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/accueil.html.twig"));

        $this->parent = $this->loadTemplate("main.html.twig", "/accueil.html.twig", 1);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_laPage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "laPage"));

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
        <u>Prochaine soirée jeux :</u><br>
        ";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["nextDate"]) || array_key_exists("nextDate", $context) ? $context["nextDate"] : (function () { throw new RuntimeError('Variable "nextDate" does not exist.', 60, $this->source); })()), "html", null, true);
        echo "<br><br><br><br>
      </div>
      <div class=\"col-md-12 col-6\">
        <u>Ajouts récents :</u><br>
        ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lastGames"]) || array_key_exists("lastGames", $context) ? $context["lastGames"] : (function () { throw new RuntimeError('Variable "lastGames" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["jeu"]) {
            // line 65
            echo "        <li><a href=\"jeux?jeuChoisi=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "nomComplet", [], "any", false, false, false, 65), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jeu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        <br>
        Venez les tester !<br>
      </div>
    </div>
  </div>";
        // line 72
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 72,  163 => 67,  152 => 65,  148 => 64,  141 => 60,  136 => 57,  130 => 52,  127 => 50,  121 => 46,  98 => 25,  91 => 19,  84 => 18,  65 => 5,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"main.html.twig\" %}

{% block entete %}
  {{ parent() }}
  <link rel=\"stylesheet\" href=\"{{css_path}}accueil.css\">
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
{% endblock %}

{% block laPage %}

  <div class=\"col-12\">
    <br>
  </div>

  <div class=\"col-12 col-md-7 container\" style=\"box-sizing: border-box;\">{# colonne 1 #}
    <div class=\"row encadrer cadreBleu\">
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
        <h1><a href=\"calendrier\">{{\"évènements à venir\"|capitalize}}</a></h1>
        <br>
      </div>
    </div>{# row encadrée #}
    
  </div>{# colonne 1 #}

  <div class=\"col-12 col-md-1\">
    <h1>&nbsp;</h1>
  </div>
  <div class=\"col-12 col-md-4 encadrer cadreBleu\">{# colonne 2 #}
    <div class=\"row\">
      <div class=\"col-md-12 col-6\">
        <u>Prochaine soirée jeux :</u><br>
        {{nextDate}}<br><br><br><br>
      </div>
      <div class=\"col-md-12 col-6\">
        <u>Ajouts récents :</u><br>
        {% for jeu in lastGames %}
        <li><a href=\"jeux?jeuChoisi={{jeu.id}}\">{{jeu.nomComplet}}</a></li>
        {% endfor %}
        <br>
        Venez les tester !<br>
      </div>
    </div>
  </div>{# colonne 2 #}

{% endblock %} {# Fin du block laPage #}", "/accueil.html.twig", "/var/www/renardenjoue/templates/accueil.html.twig");
    }
}
