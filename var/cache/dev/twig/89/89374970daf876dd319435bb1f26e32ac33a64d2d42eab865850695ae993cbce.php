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

/* gerer_date_ajout.html.twig */
class __TwigTemplate_475261fd235710f27302209a26f557ed74066255f88335f37ae0d393232b6318 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gerer_date_ajout.html.twig"));

        $this->parent = $this->loadTemplate("gerer.html.twig", "gerer_date_ajout.html.twig", 1);
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
    .input2
    {
      text-align : right;
      width : 2.5rem;
    }
    .input4
    {
      text-align : left;
      width : 4rem;
    }
    textarea
    {
      width : 100%;
      height : 10rem;
    }
    button.basDroite
    {
      position : absolute;
      right : 1rem;
      bottom : 1rem;
    }
  </style>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_corps($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "corps"));

        // line 32
        echo "  ";
        $this->displayParentBlock("corps", $context, $blocks);
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_laPage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "laPage"));

        // line 36
        echo "<form action='save_evt_0' method='post' style='font-size : 1.5rem; height : 100%;'>
  <div class='container-fluid' style='padding-top : 1rem; height : 100%;'>
    <div class='row' style='height : 100%;'>
      <div class='col-2'>
        Titre&nbsp;:&nbsp;
      </div>
      <div class='col-10'>
        <input name='chTitre' style='width : 100%;' value=\"Les renards jouent\">
      </div>
      <div class='col-2'>
        Capacité&nbsp;:&nbsp;
      </div>
      <div class='col-2'>
        <input name='chCapacite' style='width : 100%;' value='8' min='2' max='8'>
      </div>
      <div class='col-8'>
      </div>
      <div class='col-2'>
        Description:
      </div>
      <div class='col-10'><textarea name='chDesc'></textarea></div>
      <div class='col-4'>
        Date début&nbsp;:<input name='chDdeb-j' class='input2' placeholder='j'>/<input name='chDdeb-m' class='input2'  value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["today"] ?? null), "m"), "html", null, true);
        echo "\">/<input name='chDdeb-a' class='input4' value=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["today"] ?? null), "Y"), "html", null, true);
        echo "\">
      </div>
      <div class='col-8'>
        Date fin&nbsp;:&nbsp;<input name='chDfin-j' class='input2' placeholder='j'>/<input name='chDfin-m' class='input2'  value=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["today"] ?? null), "m"), "html", null, true);
        echo "\">/<input name='chDfin-a' class='input4' value=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["today"] ?? null), "Y"), "html", null, true);
        echo "\">
      </div>
      <div class='col-4'>
        heure début&nbsp;:&nbsp;<input name='chHdeb-h' class='input2' value='14'>:<input name='chHdeb-m' class='input2' value='00'>
      </div>
      <div class='col-8'>
        heure fin&nbsp;:&nbsp;<input name='chHfin-h' class='input2' placeholder='h'>:<input name='chHfin-m' class='input2' value='00'>
      </div>
      <div class='col-12 enRelatif'><button class='btn-primary btn basDroite' type='submit'>Ajouter cette date</button><br><br>
      </div>
    </div>
  </div>
</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gerer_date_ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 61,  143 => 58,  119 => 36,  112 => 35,  102 => 32,  95 => 31,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "gerer_date_ajout.html.twig", "/var/www/renardenjoue/templates/gerer_date_ajout.html.twig");
    }
}
