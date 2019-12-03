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
  .grosTitre
  {
    color : #428bca;";
        // line 10
        echo "    text-shadow : 1px 0px 5px black, -1px 0px 1px black, 0px 1px 1px black, 0px -1px 1px black, 2px 0px 1px black, -2px 0px 1px black, 0px 2px 1px black, 0px -2px 1px black;
    text-align : left;
  }
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

    // line 24
    public function block_laPage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "laPage"));

        // line 25
        echo "
  <div class=\"col-12\">
    <br><br>
  </div>

  <div class=\"col-12 col-md-6 container\" style=\"box-sizing: border-box;\">
    <div class=\"row encadrer cadreBleu\">
      <div class=\"col-11\">
        <br>
        <h1 class=\"grosTitre\"><a class=\"grosTitre\" href=\"jeux\">Nos jeux</a></h1>
      </div>
      <div class=\"col-1\">
      </div>
      <div class=\"col-11\">
        <br><br>
        <h1 class=\"grosTitre\"><a class=\"grosTitre\" href=\"https://lerenardenjoue.forumactif.com/\">Notre forum</a></h1>
      </div>
      <div class=\"col-1\">
      </div>
      <div class=\"col-11\">
        <br><br>
        <h1 class=\"grosTitre\"><a class=\"grosTitre\" href=\"contact\">Infos et contact</a></h1>
      </div>
      <div class=\"col-1\">
      </div>
      <div class=\"col-11\">
        <br><br>
        <h1 class=\"grosTitre\"><a class=\"grosTitre\" href=\"calendrier\">";
        // line 52
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, "évènements à venir"), "html", null, true);
        echo "</a></h1>
        <br>
      </div>
    </div>";
        // line 56
        echo "    
  </div>";
        // line 58
        echo "
  <div class=\"col-12 col-md-1\">
    <h1>&nbsp;</h1>
  </div>
  <div class=\"col-12 col-md-2 encadrer cadreBleu\">
    <u>Prochaine soirée jeux :</u><br>
    8 décembre 2019<br>
    <br><br><br>
    <u>Ajouts récents :</u><br>
    <li>Dice mice</li>
    <li>Minecraft : Builders & Biomes</li>
    <br>
    Venez les tester !<br>
  </div>";
        // line 72
        echo "  <div class=\"col-1\">
  </div>

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
        return array (  151 => 72,  136 => 58,  133 => 56,  127 => 52,  98 => 25,  91 => 24,  72 => 10,  65 => 5,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"main.html.twig\" %}

{% block entete %}
  {{ parent() }}
  <link rel=\"stylesheet\" href=\"{{css_path}}accueil.css\">
<style>
  .grosTitre
  {
    color : #428bca;{# couleur bg-primary #}
    text-shadow : 1px 0px 5px black, -1px 0px 1px black, 0px 1px 1px black, 0px -1px 1px black, 2px 0px 1px black, -2px 0px 1px black, 0px 2px 1px black, 0px -2px 1px black;
    text-align : left;
  }
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
    <br><br>
  </div>

  <div class=\"col-12 col-md-6 container\" style=\"box-sizing: border-box;\">
    <div class=\"row encadrer cadreBleu\">
      <div class=\"col-11\">
        <br>
        <h1 class=\"grosTitre\"><a class=\"grosTitre\" href=\"jeux\">Nos jeux</a></h1>
      </div>
      <div class=\"col-1\">
      </div>
      <div class=\"col-11\">
        <br><br>
        <h1 class=\"grosTitre\"><a class=\"grosTitre\" href=\"https://lerenardenjoue.forumactif.com/\">Notre forum</a></h1>
      </div>
      <div class=\"col-1\">
      </div>
      <div class=\"col-11\">
        <br><br>
        <h1 class=\"grosTitre\"><a class=\"grosTitre\" href=\"contact\">Infos et contact</a></h1>
      </div>
      <div class=\"col-1\">
      </div>
      <div class=\"col-11\">
        <br><br>
        <h1 class=\"grosTitre\"><a class=\"grosTitre\" href=\"calendrier\">{{\"évènements à venir\"|capitalize}}</a></h1>
        <br>
      </div>
    </div>{# row encadrée #}
    
  </div>{# colonne 1 #}

  <div class=\"col-12 col-md-1\">
    <h1>&nbsp;</h1>
  </div>
  <div class=\"col-12 col-md-2 encadrer cadreBleu\">
    <u>Prochaine soirée jeux :</u><br>
    8 décembre 2019<br>
    <br><br><br>
    <u>Ajouts récents :</u><br>
    <li>Dice mice</li>
    <li>Minecraft : Builders & Biomes</li>
    <br>
    Venez les tester !<br>
  </div>{# colonne 2 #}
  <div class=\"col-1\">
  </div>

{% endblock %} {# Fin du block laPage #}", "/accueil.html.twig", "/var/www/renardenjoue/templates/accueil.html.twig");
    }
}
