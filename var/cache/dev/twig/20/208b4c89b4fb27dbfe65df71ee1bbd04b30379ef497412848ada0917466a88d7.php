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

/* _alert.html.twig */
class __TwigTemplate_a3a49bd19136a57207ba1c18a8725d8ceb4cf75ab19d027129925ec92c817a40 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_alert.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 1), "get", [0 => "msgAlert"], "method", true, true, false, 1)) {
            // line 2
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 2), "get", [0 => "msgAlert"], "method", false, false, false, 2)) > 1)) {
                // line 3
                echo "
<style>

.montrerMessage
{
  position : absolute;
  z-index : 9000;
  top : -50vh;
  left : 35vw;
  width : 30vw;
  text-align : center;
  border : 4px solid #428bca;
  border-radius : 1em;
  background : Ivory;
  color : #428bca;
  text-shadow : 1px 0px 1px black, -1px 0px 1px black, 0px 1px 1px black, 0px -1px 1px black;
  animation-timing-function: ease-in;

  -webkit-animation: fadeinout 20s; /* Safari, Chrome and Opera > 12.1 */
     -moz-animation: fadeinout 20s; /* Firefox < 16 */
      -ms-animation: fadeinout 20s; /* Internet Explorer */
       -o-animation: fadeinout 20s; /* Opera < 12.1 */
          animation: fadeinout 20s;
}
@keyframes fadeinout
{
    from { opacity: 0; top : -40vh;  left : 35vw; }
    10%  { opacity: 1; top : 40vh;   left : 35vw; }
    to   { opacity: 0; top : -50vh; left : 35vw; }
}

</style>

      <div class=\"montrerMessage\">
        <h2>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 37), "get", [0 => "msgAlert"], "method", false, false, false, 37), "html", null, true);
                echo "</h2>
      </div>
      ";
                // line 40
                echo "      ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 40), "set", [0 => "msgAlert", 1 => ""], "method", false, false, false, 40), "html", null, true);
                echo "

";
            }
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "_alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 40,  80 => 37,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_alert.html.twig", "/var/www/renardenjoue/templates/_alert.html.twig");
    }
}
