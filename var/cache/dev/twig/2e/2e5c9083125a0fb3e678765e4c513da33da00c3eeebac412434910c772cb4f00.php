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

/* gerer_membres.html.twig */
class __TwigTemplate_cfdf422915a94e845fe797cad08b1675667aa996f036a8044d2532bebb1b9c95 extends \Twig\Template
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
        return "gerer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gerer_membres.html.twig"));

        $this->parent = $this->loadTemplate("gerer.html.twig", "gerer_membres.html.twig", 1);
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
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_corps($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "corps"));

        // line 8
        echo "  ";
        $this->displayParentBlock("corps", $context, $blocks);
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_laPage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "laPage"));

        // line 12
        echo "
<div class='container-fluid' style='padding-top : 1rem; font-size : 1.5rem;'>
  <div class='row'>
    <div class='col-1'>id</div>
    <div class='col-2'>Nom</div>
    <div class='col-4'>E-mail</div>
    <div class='col-3'>Arrivé le</div>
    <div class='col-2'></div>
  </div>
  <div class='row listeD'>
";
        // line 22
        $context["isOdd"] = 1;
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["membres"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["joueur"]) {
            // line 24
            echo "  ";
            $context["isOdd"] = (1 - ($context["isOdd"] ?? null));
            // line 25
            echo "
    <div class='col-1 styleLigne";
            // line 26
            echo twig_escape_filter($this->env, ($context["isOdd"] ?? null), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "</div>
    <div class='col-2 styleLigne";
            // line 27
            echo twig_escape_filter($this->env, ($context["isOdd"] ?? null), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "nom", [], "any", false, false, false, 27), "html", null, true);
            echo "</div>
    <div class='col-4 styleLigne";
            // line 28
            echo twig_escape_filter($this->env, ($context["isOdd"] ?? null), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "email", [], "any", false, false, false, 28), "html", null, true);
            echo "</div>
    <div class='col-3 styleLigne";
            // line 29
            echo twig_escape_filter($this->env, ($context["isOdd"] ?? null), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "dateDentree", [], "any", false, false, false, 29), "d/m/Y - H:i"), "html", null, true);
            echo "</div>
    <div class='col-2 styleLigne";
            // line 30
            echo twig_escape_filter($this->env, ($context["isOdd"] ?? null), "html", null, true);
            echo "'>
      <form action='del_user";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "'>
        <button class='btn-danger btn float-right' type='submit'>Supprimer id ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "</button>
      </form>
    </div>
    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['joueur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "  </div>
</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gerer_membres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 37,  151 => 32,  147 => 31,  143 => 30,  137 => 29,  131 => 28,  125 => 27,  119 => 26,  116 => 25,  113 => 24,  109 => 23,  107 => 22,  95 => 12,  88 => 11,  78 => 8,  71 => 7,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "gerer_membres.html.twig", "/var/www/renardenjoue/templates/gerer_membres.html.twig");
    }
}
