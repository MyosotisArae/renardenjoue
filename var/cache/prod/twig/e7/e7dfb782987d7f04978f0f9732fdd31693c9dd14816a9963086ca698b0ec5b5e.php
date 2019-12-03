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

/* security/login.html.twig */
class __TwigTemplate_c511b0ae048762ff86c140f7d2b632076febc034c86c1a78af4d376f8d387f22 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("main.html.twig", "security/login.html.twig", 1);
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
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 18)) {
            // line 19
            echo "        <div class=\"checkbox mb-3\">Heureux de vous voir, ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 19), "username", [], "any", false, false, false, 19), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
    ";
        } else {
            // line 21
            echo "
    <h1 class=\"h3 mb-3 font-weight-normal\">Connectez-vous ici :</h1>
    ";
            // line 23
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formulaire"] ?? null), 'form');
            echo "

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\">

    <br>
    <div class=\"checkbox mb-3\">
        <label>
            &nbsp;<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\"> Se souvenir de moi
        </label>
    </div>
    ";
        }
        // line 34
        echo "
</div>

<div class=\"col-2\">
</div>

<div class=\"col-3 enBleu centrer\">
  <form method=\"POST\" action=\"newUser\">
    <br>
    <a href=\"newUser\" class=\"bouton bg-primary\">
        Création de compte
    </a>
    <br>
    <br>
  </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 34,  107 => 25,  102 => 23,  98 => 21,  90 => 19,  88 => 18,  82 => 14,  78 => 13,  71 => 10,  67 => 9,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/var/www/renardenjoue/templates/security/login.html.twig");
    }
}
