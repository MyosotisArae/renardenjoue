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

/* security/newUser.html.twig */
class __TwigTemplate_bca58439da6b716a9cedc1fee1025af841f5f6efc55976890b7d2f2da2046797 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("main.html.twig", "security/newUser.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Log in!";
    }

    // line 5
    public function block_entete($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  ";
        $this->displayParentBlock("entete", $context, $blocks);
        echo "
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

    // line 13
    public function block_laPage($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "<div class=\"col-12\">
  <br>
</div>
<div class=\"col-3 enBleu centrer\">
    <br>
    <a href=\"login\" class=\"bouton bg-primary\">
        Connexion
    </a>
    <br>
    <br>
</div>

<div class=\"col-2\">
</div>

<div class=\"col-5 enBleu\">
    <h1 class=\"h3 mb-3 font-weight-normal\">Inscrivez-vous ici :</h1>
    ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formulaire"] ?? null), 'form');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "security/newUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 31,  82 => 14,  78 => 13,  71 => 10,  67 => 9,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/newUser.html.twig", "/var/www/renardenjoue/templates/security/newUser.html.twig");
    }
}
