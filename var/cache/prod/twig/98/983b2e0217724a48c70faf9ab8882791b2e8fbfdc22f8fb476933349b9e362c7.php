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
class __TwigTemplate_e61a4ccfb07c758cd7dbcdf4067ddda0e1c45cf05398ff28c9e5f7b8a87bd14a extends \Twig\Template
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
        $this->parent = $this->loadTemplate("main.html.twig", "accueil.html.twig", 1);
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
        echo "accueil.css\">
<style>
  .grosTitre
  {
    color : white;
    text-shadow : 1px 0px 5px black, -1px 0px 1px black, 0px 1px 1px black, 0px -1px 1px black, 2px 0px 1px black, -2px 0px 1px black, 0px 2px 1px black, 0px -2px 1px black;
    text-align : left;
  }
</style>
";
    }

    // line 16
    public function block_laPage($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "
<div class=\"row\">
  <div class=\"col-1\">
  </div>
  <div class=\"col-11\">
    <br><br>
    <h1 class=\"grosTitre\"><a class=\"grosTitre\" href=\"jeux\">Nos jeux</a></h1>
  </div>
  <div class=\"col-2\">
  </div>
  <div class=\"col-10\">
    <br><br>
    <h1 class=\"grosTitre\"><a class=\"grosTitre\" href=\"contact\">Infos et contact</a></h1>
  </div>
  <div class=\"col-4\">
  </div>
  <div class=\"col-8\">
    <br><br>
    <h1 class=\"grosTitre\"><a class=\"grosTitre\" href=\"calendrier\">Les évènements à venir</a></h1>
  </div>
  <div class=\"col-3\">
  </div>
  <div class=\"col-9\">
    <br><br>
    <h1 class=\"grosTitre\"><a class=\"grosTitre\" href=\"https://lerenardenjoue.forumactif.com/\">Notre forum</a></h1>
  </div>
</div>";
        // line 44
        echo "
";
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
        return array (  102 => 44,  74 => 17,  70 => 16,  56 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "accueil.html.twig", "/var/www/renardenjoue/templates/accueil.html.twig");
    }
}
