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

/* security/connecte.html.twig */
class __TwigTemplate_45ed5fe74a50b871dec7ceb97a16194ea64972b190bc141c18f3c0a3abb4f5da extends \Twig\Template
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
        $this->parent = $this->loadTemplate("main.html.twig", "security/connecte.html.twig", 1);
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
<div class=\"col-3 enBleu\">

    ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 19)) {
            // line 20
            echo "        <div class=\"checkbox mb-3\">Heureux de vous voir, ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 20), "username", [], "any", false, false, false, 20), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
    ";
        }
        // line 22
        echo "
    <h1 class=\"h3 mb-3 font-weight-normal\">Mon compte :</h1>
    ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formulaire"] ?? null), 'form');
        echo "

</div>

";
    }

    public function getTemplateName()
    {
        return "security/connecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 24,  99 => 22,  91 => 20,  89 => 19,  82 => 14,  78 => 13,  71 => 10,  67 => 9,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/connecte.html.twig", "/var/www/renardenjoue/templates/security/connecte.html.twig");
    }
}
