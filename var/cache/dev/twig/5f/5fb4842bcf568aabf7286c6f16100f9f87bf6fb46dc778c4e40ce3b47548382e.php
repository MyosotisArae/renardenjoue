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

/* evtDetail.html.twig */
class __TwigTemplate_e3a2d7f4cd80d8f53f715002698d45522183bf969bb54f0f556fdb37bef1c4f5 extends \Twig\Template
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
        return "main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evtDetail.html.twig"));

        $this->parent = $this->loadTemplate("main.html.twig", "evtDetail.html.twig", 1);
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

    <link href='";
        // line 6
        echo twig_escape_filter($this->env, ($context["css_path"] ?? null), "html", null, true);
        echo "/calendrier.css' rel='stylesheet' />
    <link href='";
        // line 7
        echo twig_escape_filter($this->env, ($context["fc_path"] ?? null), "html", null, true);
        echo "core/main.css' rel='stylesheet' />
    <link href='";
        // line 8
        echo twig_escape_filter($this->env, ($context["fc_path"] ?? null), "html", null, true);
        echo "bootstrap/main.css' rel='stylesheet' />
    <link href='";
        // line 9
        echo twig_escape_filter($this->env, ($context["fc_path"] ?? null), "html", null, true);
        echo "daygrid/main.css' rel='stylesheet' />
    <link href='";
        // line 10
        echo twig_escape_filter($this->env, ($context["fc_path"] ?? null), "html", null, true);
        echo "list/main.css' rel='stylesheet' />

    <script src='";
        // line 12
        echo twig_escape_filter($this->env, ($context["fc_path"] ?? null), "html", null, true);
        echo "core/main.js'></script>
    <script src='";
        // line 13
        echo twig_escape_filter($this->env, ($context["fc_path"] ?? null), "html", null, true);
        echo "bootstrap/main.js'></script>
    <script src='";
        // line 14
        echo twig_escape_filter($this->env, ($context["fc_path"] ?? null), "html", null, true);
        echo "daygrid/main.js'></script>
    <script src='";
        // line 15
        echo twig_escape_filter($this->env, ($context["fc_path"] ?? null), "html", null, true);
        echo "list/main.js'></script>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_corps($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "corps"));

        // line 20
        echo "  ";
        $this->displayParentBlock("corps", $context, $blocks);
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_laPage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "laPage"));

        // line 24
        echo "<div class='container-fluid fondOpaque' style='padding : 0; margin : 1em;'>
  <div class='row' style='height : 100%;'>
    <div class='col-12'>
      <div class='enRelatif'>
        <a href='calendrier'><img src='";
        // line 28
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "fermer.png' class='enAbsolu' style='right : 0;top:0;'></a>
      </div>
      <br>
    </div>
    <div class='col-12'>
      <br>
    </div>

    ";
        // line 36
        if ((isset($context["evt"]) || array_key_exists("evt", $context))) {
            // line 37
            echo "    <div class='col-md-4 col-12'>
        <div><h3>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evt"] ?? null), "titre", [], "any", false, false, false, 38), "html", null, true);
            echo "</h3></div>
        ";
            // line 39
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evt"] ?? null), "periode", [], "any", false, false, false, 39)) > 0)) {
                // line 40
                echo "        <div><h5>";
                echo $this->extensions['App\Twig\AppExtension']->retourChariot(twig_get_attribute($this->env, $this->source, ($context["evt"] ?? null), "periode", [], "any", false, false, false, 40));
                echo "</h5></div>
        ";
            }
            // line 42
            echo "        <div>
          <br>
          ";
            // line 45
            echo "          ";
            if ((($context["cas"] ?? null) > 0)) {
                // line 46
                echo "            ";
                // line 47
                echo "            ";
                $context["nbJoueurs"] = 1;
                // line 48
                echo "            ";
                if (twig_in_filter("memberConnected", twig_get_array_keys_filter(($context["session"] ?? null)))) {
                    // line 49
                    echo "            ";
                    $context["nbJoueurs"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "memberConnected", [], "any", false, false, false, 49), "nbJoueurs", [], "any", false, false, false, 49);
                    // line 50
                    echo "            ";
                }
                // line 51
                echo "
            ";
                // line 52
                echo twig_escape_filter($this->env, ($context["surcharge"] ?? null), "html", null, true);
                echo "<br>

            ";
                // line 54
                if (((($context["capacite"] ?? null) - ($context["combien"] ?? null)) <= 0)) {
                    // line 55
                    echo "              <img class='enAbsolu' style='top : 2em; left : 8em; width : 9em; height : auto;' src='";
                    echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
                    echo "complet.gif'>
            ";
                }
                // line 57
                echo "
            ";
                // line 58
                if ((($context["cas"] ?? null) == 12)) {
                    // line 59
                    echo "              ";
                    if ((($context["combien"] ?? null) == 0)) {
                        // line 60
                        echo "              <img class='enAbsolu' style='top : -2em; left : 3em; width : 9em; height : auto;' src='";
                        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
                        echo "annule.gif'>
              Personne ne s'est inscrit. Pas de jeux chez nous ce week-end.
              ";
                    } else {
                        // line 63
                        echo "              Les inscriptions sont closes.<br>
              Nous serons ";
                        // line 64
                        echo twig_escape_filter($this->env, ($context["combien"] ?? null), "html", null, true);
                        echo ".
              ";
                    }
                    // line 66
                    echo "            ";
                } elseif ((($context["cas"] ?? null) == 222)) {
                    // line 67
                    echo "              Vous devez vous connecter pour vous inscrire.<br><br>
              <a href='login' class='bouton bg-primary'>Page de connexion</a>
            ";
                } elseif ((                // line 69
($context["cas"] ?? null) == 211)) {
                    // line 70
                    echo "              Vous êtes déjà inscrit.<br><br>
              <a href='desinscription";
                    // line 71
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evt"] ?? null), "id", [], "any", false, false, false, 71), "html", null, true);
                    echo "' class='bouton bg-primary'>Désinscription</a>
            ";
                } elseif ((                // line 72
($context["cas"] ?? null) == 2124)) {
                    // line 73
                    echo "              Inscriptions ouvertes jusqu'au ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["limite"] ?? null), "d/m/Y"), "html", null, true);
                    echo " au soir.<br>
              Venez jouer !<br><br>
              <a href='inscription";
                    // line 75
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evt"] ?? null), "id", [], "any", false, false, false, 75), "html", null, true);
                    echo "' class='bouton bg-primary'>Inscription</a>
            ";
                }
                // line 77
                echo "
          ";
            }
            // line 79
            echo "

          <br><br>
        </div>
    </div>
    <div class='col-md-7 offset-md-1 col-12' style='height:auto;padding-right : 1em;'>
      <div class='enBleu text-justify'>";
            // line 85
            echo $this->extensions['App\Twig\AppExtension']->retourChariot(twig_get_attribute($this->env, $this->source, ($context["evt"] ?? null), "description", [], "any", false, false, false, 85));
            echo "</div>
    </div>
    ";
        } else {
            // line 88
            echo "    <h3>Cet évènement n'existe pas.</h3>
    ";
        }
        // line 90
        echo "
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "evtDetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 90,  275 => 88,  269 => 85,  261 => 79,  257 => 77,  252 => 75,  246 => 73,  244 => 72,  240 => 71,  237 => 70,  235 => 69,  231 => 67,  228 => 66,  223 => 64,  220 => 63,  213 => 60,  210 => 59,  208 => 58,  205 => 57,  199 => 55,  197 => 54,  192 => 52,  189 => 51,  186 => 50,  183 => 49,  180 => 48,  177 => 47,  175 => 46,  172 => 45,  168 => 42,  162 => 40,  160 => 39,  156 => 38,  153 => 37,  151 => 36,  140 => 28,  134 => 24,  127 => 23,  117 => 20,  110 => 19,  100 => 15,  96 => 14,  92 => 13,  88 => 12,  83 => 10,  79 => 9,  75 => 8,  71 => 7,  67 => 6,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "evtDetail.html.twig", "/var/www/renardenjoue/templates/evtDetail.html.twig");
    }
}
