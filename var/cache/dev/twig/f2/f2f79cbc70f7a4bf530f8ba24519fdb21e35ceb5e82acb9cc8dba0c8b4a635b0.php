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

/* main.html.twig */
class __TwigTemplate_352f0200e99343f2a7aa4f6f69ddcfdd9cbc2a5a3cf51f69ca4f73ca721677fa extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'entete' => [$this, 'block_entete'],
            'corps' => [$this, 'block_corps'],
            'laPage' => [$this, 'block_laPage'],
            'piedDePage' => [$this, 'block_piedDePage'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"w-100\">
<head>
";
        // line 4
        $this->displayBlock('entete', $context, $blocks);
        // line 32
        echo "</head>

  <body class=\"w-max\">
    ";
        // line 35
        $this->loadTemplate("_alert.html.twig", "main.html.twig", 35)->display($context);
        // line 36
        $this->displayBlock('corps', $context, $blocks);
        // line 101
        $this->displayBlock('piedDePage', $context, $blocks);
        // line 103
        echo "  </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_entete($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entete"));

        // line 5
        echo "  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["BScss_path"] ?? null), "html", null, true);
        echo "\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["css_path"] ?? null), "html", null, true);
        echo "general.css\">
  
  <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>

  <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["BSjs_path"] ?? null), "html", null, true);
        echo "\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
  <script src=\"https://kit.fontawesome.com/ac0e3984ff.js\"></script>
  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
  <![endif]-->
  <script>
    (function ( \$ ) { 

    // put all that \"wl_alert\" code here   

    }( jQuery ));
  </script>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_corps($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "corps"));

        // line 37
        echo "  ";
        $context["isAdministrateur"] = false;
        // line 38
        echo "
    <header class=\"row w-max\" id=\"blocBarreMenu\">
      <div class=\"col-12 container-fluid w-max\">
        <nav class=\"navbar navbar-expand-sm navbar-dark bg-primary w-max\">
            <div class=\"navbar-nav col-12\">
                <li class=\"nav-item\" style=\"width:10px;\"><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "logo.gif\" class=\"logo\">&nbsp;</li>
                <li class=\"nav-item";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getOngletActif("ACC"), "html", null, true);
        echo "\" title=\"Page d'accueil\">
                  <a class=\"nav-link visible-block\" href=\"accueil\"><i class=\"fas fa-home\">&nbsp;</i>Accueil</a>
                </li>
                <li class=\"nav-item";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getOngletActif("CAL"), "html", null, true);
        echo "\" title=\"Calendrier des évènements\">
                  <a class=\"nav-link\" href=\"calendrier\"><i class=\"fas fa-calendar-alt\">&nbsp;</i>Agenda</a>
                </li>
                <li class=\"nav-item";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getOngletActif("JEU"), "html", null, true);
        echo "\" title=\"Liste de nos jeux\">
                  <a class=\"nav-link\" href=\"jeux\"><i class=\"fas fa-dice\">&nbsp;</i>Jeux</a>
                </li>
                ";
        // line 53
        if (($context["isAdministrateur"] ?? null)) {
            // line 54
            echo "                <li class=\"nav-item\">
                  <select class=\"nav-link bg-primary\">
                    <option>Administrateur</option>
                    <option>Evènements</option>
                    <option>Jeux</option>
                  </select>
                </li>
                ";
        }
        // line 62
        echo "                <li class=\"nav-item";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getOngletActif("CNX"), "html", null, true);
        echo "\">
                ";
        // line 63
        if (twig_in_filter("memberConnected", twig_get_array_keys_filter(($context["session"] ?? null)))) {
            // line 64
            echo "                  <a class=\"nav-link\" href=\"compte\"><i class=\"fas fa-address-card\">&nbsp;</i>Mon compte</a>
                ";
        } else {
            // line 66
            echo "                  <a class=\"nav-link\" href=\"login\"><i class=\"fas fa-sign-in-alt\">&nbsp;</i>Se connecter</a>
                ";
        }
        // line 68
        echo "                </li>
                <li class=\"nav-item";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getOngletActif("CTC"), "html", null, true);
        echo "\" title=\"Pour nous trouver ou nous envoyer un message\">
                  <a class=\"nav-link\" href=\"contact\"><i class=\"fas fa-comment\">&nbsp;</i>Contact</a>
                </li>
                <li class=\"nav-item\" title=\"Liens vers d'autres pages\">
                  <div class=\"btn-group\">";
        // line 74
        echo "                    <button type=\"button\" class=\"btn btn-default dropdown-toggle liens\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fas fa-link\">&nbsp;</i>Liens</button>
                    <ul class=\"dropdown-menu bg-primary\">
                      <a class=\"dropdown-item\" href=\"https://www.bussysaintgeorges.fr/education/petite-enfance/la-ludotheque/\" title=\"Ludothèque de Bussy, gratuite, pour les enfants de 0 à 12 ans, pour le moment ...\">Ludothèque de Bussy</a>
                      <a class=\"dropdown-item\" href=\"http://www.lavalleedesjeux.com/\" title=\"Ludothèque ouverte à tous, sur inscription (3O€)\">Ludothèque de Bailly Romainvilliers</a>
                      <div class=\"dropdown-divider\"></div>
                      <a class=\"dropdown-item\" href=\"https://ludiworld.com/newshop/84-jeux-de-societe\" title=\"Votre boutique de jeux, ici, à Bussy !\">Ludiworld</a>
                      <a class=\"dropdown-item\" href=\"http://www.ludhainaut.fr/\" title=\"Association de joueurs à Onnaing (Nord) - Se réunit le deuxième dimanche de chaque mois\">Lud'Hainaut</a>
                      <a class=\"dropdown-item\" href=\"https://www.ludinord.fr/\" title=\"Organisation sous l'égide de la Fédéjeux\">LudiNord</a>
                    </ul>
                  </div>
                </li>
            </div>

          ";
        // line 88
        echo "        </nav>
      </div>
    </header>

    <img class=\"fond container-fluid d-none d-lg-block enAbsolu\" style=\"top:3em; background-size : cover;\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "fond.png\">
    <img class=\"fond container-fluid d-lg-none enAbsolu\" style=\"top:3em; background-size : cover;\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "fondVertical.png\">

    <div class=\"row retracter\" id=\"mainRow\">
          ";
        // line 96
        $this->displayBlock('laPage', $context, $blocks);
        // line 98
        echo "    </div> ";
        // line 99
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
    public function block_laPage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "laPage"));

        // line 97
        echo "          ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
    public function block_piedDePage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "piedDePage"));

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 101,  245 => 97,  238 => 96,  230 => 99,  228 => 98,  226 => 96,  220 => 93,  216 => 92,  210 => 88,  195 => 74,  188 => 69,  185 => 68,  181 => 66,  177 => 64,  175 => 63,  170 => 62,  160 => 54,  158 => 53,  152 => 50,  146 => 47,  140 => 44,  136 => 43,  129 => 38,  126 => 37,  119 => 36,  94 => 14,  85 => 8,  81 => 7,  77 => 5,  70 => 4,  62 => 103,  60 => 101,  58 => 36,  56 => 35,  51 => 32,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main.html.twig", "/var/www/renardenjoue/templates/main.html.twig");
    }
}
