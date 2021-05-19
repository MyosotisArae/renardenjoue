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
class __TwigTemplate_03a4195395380a99cfae9505b2d03dc0c13979da53d6625731120337daeb65df extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/connecte.html.twig"));

        $this->parent = $this->loadTemplate("main.html.twig", "security/connecte.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_laPage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "laPage"));

        // line 6
        echo "<div class=\"col-12\">
  <br>
</div>
<div class=\"col-1\">
  <br>
</div>
";
        // line 13
        $context["isAdmin"] = false;
        // line 14
        $context["role"] = 0;
        // line 15
        $context["largeurFenetre"] = 7;
        // line 16
        $context["pourcentBoutons"] = 30;
        // line 17
        $context["isUser"] = false;
        // line 18
        if (twig_in_filter("memberConnected", twig_get_array_keys_filter(($context["session"] ?? null)))) {
            // line 19
            $context["isUser"] = true;
            // line 20
            $context["role"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "memberConnected", [], "any", false, false, false, 20), "roles", [], "any", false, false, false, 20);
            // line 21
            if ((($context["role"] ?? null) >= 8)) {
                // line 22
                $context["isAdmin"] = true;
                // line 23
                $context["largeurFenetre"] = 10;
                // line 24
                $context["pourcentBoutons"] = 14;
            }
        }
        // line 27
        echo "<div class=\"col-md-";
        echo twig_escape_filter($this->env, ($context["largeurFenetre"] ?? null), "html", null, true);
        echo " col-11 enBleu\">

  ";
        // line 29
        if (($context["isUser"] ?? null)) {
            // line 30
            echo "    <table class='w-100'> 

      <tr>
        <td style='width : 70%;'>
          <h1 class=\"h3 mb-3 font-weight-normal\">Compte de ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "memberConnected", [], "any", false, false, false, 34), "nom", [], "any", false, false, false, 34), "html", null, true);
            echo " :</h1>
        </td>
        <td style='width : ";
            // line 36
            echo twig_escape_filter($this->env, ($context["pourcentBoutons"] ?? null), "html", null, true);
            echo "%;'>
          <form method='post' action='logout'>
            <button class='btn-primary btn float-right' type='submit'>Déconnexion</button>
          </form>
        </td>
        ";
            // line 41
            if (($context["isAdmin"] ?? null)) {
                // line 42
                echo "        <td style='width : 16%;'>
          <form method='post' action='gestion'>
            <button class='btn-primary btn float-right' type='submit'>Administrateur</button>
          </form>
        </td>
        ";
            }
            // line 48
            echo "      </tr>
    </table>    
    ";
            // line 50
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formulaire"] ?? null), 'form');
            echo "
  ";
        } else {
            // line 52
            echo "    <meta http-equiv= \"refresh\" content=\"0; login\" />
  ";
        }
        // line 54
        echo "
</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  157 => 54,  153 => 52,  148 => 50,  144 => 48,  136 => 42,  134 => 41,  126 => 36,  121 => 34,  115 => 30,  113 => 29,  107 => 27,  103 => 24,  101 => 23,  99 => 22,  97 => 21,  95 => 20,  93 => 19,  91 => 18,  89 => 17,  87 => 16,  85 => 15,  83 => 14,  81 => 13,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/connecte.html.twig", "/var/www/renardenjoue/templates/security/connecte.html.twig");
    }
}
