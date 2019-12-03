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
class __TwigTemplate_77d2bad0bc015b46cb3fa29bf4c2a0de36a098eb675402e724272955e3399520 extends \Twig\Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
";
        // line 4
        $this->displayBlock('entete', $context, $blocks);
        // line 20
        echo "</head>

  <body>
";
        // line 23
        $this->displayBlock('corps', $context, $blocks);
        // line 122
        $this->displayBlock('piedDePage', $context, $blocks);
        // line 124
        echo "  </body>
</html>";
    }

    // line 4
    public function block_entete($context, array $blocks = [])
    {
        $macros = $this->macros;
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

  <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["BSjs_path"] ?? null), "html", null, true);
        echo "\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
  <script src=\"https://kit.fontawesome.com/ac0e3984ff.js\"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
  <![endif]-->
  
";
    }

    // line 23
    public function block_corps($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "  ";
        $context["isAdministrateur"] = false;
        // line 25
        echo "  ";
        $context["afficherConnexion"] = false;
        // line 26
        echo "    <img class=\"fond container-fluid d-none d-md-block\" src=\"";
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "fond.png\">
    <img class=\"fond container-fluid d-md-none\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "fondVertical.png\">

    <header class=\"row\">
      <div class=\"col-xs-12 container-fluid\">
        <nav class=\"navbar navbar-expand-sm navbar-dark bg-primary\">
            <a class=\"navbar-brand col-xs-1\" href=\"#\"><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "logo.gif\" class=\"logo\"></a>
            <ul class=\"navbar-nav col-xs-11\">
              <div class=\"d-none d-md-block\"> ";
        // line 35
        echo "                <li class=\"nav-item";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getOngletActif("ACC"), "html", null, true);
        echo "\">
                  <a class=\"nav-link\" href=\"accueil\"><i class=\"fas fa-home\">&nbsp;</i>Accueil <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getOngletActif("CAL"), "html", null, true);
        echo "\">
                  <a class=\"nav-link\" href=\"calendrier\"><i class=\"fas fa-calendar-alt\">&nbsp;</i>Agenda</a>
                </li>
                <li class=\"nav-item";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getOngletActif("JEU"), "html", null, true);
        echo "\">
                  <a class=\"nav-link\" href=\"jeux\"><i class=\"fas fa-dice\">&nbsp;</i>Jeux</a>
                </li>
                ";
        // line 44
        if (($context["isAdministrateur"] ?? null)) {
            // line 45
            echo "                <li class=\"nav-item\">
                  <select class=\"nav-link bg-primary\">
                    <option>Administrateur</option>
                    <option>Evènements</option>
                    <option>Jeux</option>
                  </select>
                </li>
                ";
        }
        // line 53
        echo "                ";
        if (($context["afficherConnexion"] ?? null)) {
            // line 54
            echo "                <li class=\"nav-item";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getOngletActif("CNX"), "html", null, true);
            echo "\">
                  <a class=\"nav-link\" href=\"login\"><i class=\"fas fa-sign-in-alt\">&nbsp;</i>Se connecter</a>
                </li>
                <li class=\"nav-item";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getOngletActif("CMP"), "html", null, true);
            echo "\">
                  <a class=\"nav-link\" href=\"compte\"><i class=\"fas fa-address-card\">&nbsp;</i>Mon compte</a>
                </li>
                ";
        }
        // line 61
        echo "                <li class=\"nav-item";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getOngletActif("CTC"), "html", null, true);
        echo "\">
                  <a class=\"nav-link\" href=\"contact\"><i class=\"fas fa-comment\">&nbsp;</i>Contact</a>
                </li>
              </div> ";
        // line 65
        echo "              <div class=\"navbar-nav col-xs-11 d-md-none\"> ";
        // line 66
        echo "                <li class=\"nav-item";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getOngletActif("ACC"), "html", null, true);
        echo "\" title=\"Page d'accueil\">
                  <a class=\"nav-link\" href=\"accueil\"><i class=\"fas fa-home\">&nbsp;</i><span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getOngletActif("CAL"), "html", null, true);
        echo "\" title=\"Calendrier des évènements\">
                  <a class=\"nav-link\" href=\"calendrier\"><i class=\"fas fa-calendar-alt\">&nbsp;</i></a>
                </li>
                <li class=\"nav-item";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getOngletActif("JEU"), "html", null, true);
        echo "\" title=\"Nos jeux\">
                  <a class=\"nav-link\" href=\"jeux\"><i class=\"fas fa-dice\">&nbsp;</i></a>
                </li>
                ";
        // line 75
        if (($context["isAdministrateur"] ?? null)) {
            // line 76
            echo "                <li class=\"nav-item\">
                  <select class=\"nav-link bg-primary\">
                    <option>Administrateur</option>
                    <option>Evènements</option>
                    <option>Jeux</option>
                  </select>
                </li>
                ";
        }
        // line 84
        echo "                ";
        if (($context["afficherConnexion"] ?? null)) {
            // line 85
            echo "                <li class=\"nav-item";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getOngletActif("CNX"), "html", null, true);
            echo "\">
                  <a class=\"nav-link\" href=\"login\"><i class=\"fas fa-sign-in-alt\">&nbsp;</i></a>
                </li>
                <li class=\"nav-item";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getOngletActif("CMP"), "html", null, true);
            echo "\">
                  <a class=\"nav-link\" href=\"compte\"><i class=\"fas fa-address-card\">&nbsp;</i></a>
                </li>
                ";
        }
        // line 92
        echo "                <li class=\"nav-item";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getOngletActif("CTC"), "html", null, true);
        echo "\" title=\"Formulaire de contact\">
                  <a class=\"nav-link\" href=\"contact\"><i class=\"fas fa-comment\">&nbsp;</i></a>
                </li>
              </div> ";
        // line 96
        echo "            </ul>
        </nav>
      </div>
    </header>

    <div class=\"row\">
      <div class=\"col-xs-3 col-sm-2 col-md-1\">
          <fieldset class=\"cadrePointilles bg-primary\">
            <legend class=\"bg-primary\">Liens</legend>
            <a href=\"https://lerenardenjoue.forumactif.com/\" title=\"Discutez des jeux que vous aimez (ou pas), proposez vos propres soirées jeux, ...\">Notre forum</a><br>
            <a href=\"https://ludiworld.com/newshop/84-jeux-de-societe\" title=\"Votre boutique de jeux, ici, à Bussy !\">Ludiworld</a><br>
            <a href=\"https://www.bussysaintgeorges.fr/education/petite-enfance/la-ludotheque/\" title=\"Ludothèque de Bussy, pour les enfants de 0 à 12 ans\">Ludothèque</a><br>
            <a href=\"http://www.ludhainaut.fr/\" title=\"Association de joueurs à Onnaing\">Lud'Hainaut</a><br>
          </fieldset>
      </div> ";
        // line 111
        echo "      <div class=\"col-xs-9 col-sm-10 col-md-11\">
        <div class=\"container-fluid\">
          <div class=\"row\">
          ";
        // line 114
        $this->displayBlock('laPage', $context, $blocks);
        // line 116
        echo "          </div>
        </div>
      </div> ";
        // line 119
        echo "    </div> ";
        // line 120
        echo "
";
    }

    // line 114
    public function block_laPage($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        echo "          ";
    }

    // line 122
    public function block_piedDePage($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "main.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  275 => 122,  271 => 115,  267 => 114,  262 => 120,  260 => 119,  256 => 116,  254 => 114,  249 => 111,  233 => 96,  226 => 92,  219 => 88,  212 => 85,  209 => 84,  199 => 76,  197 => 75,  191 => 72,  185 => 69,  178 => 66,  176 => 65,  169 => 61,  162 => 57,  155 => 54,  152 => 53,  142 => 45,  140 => 44,  134 => 41,  128 => 38,  121 => 35,  116 => 32,  108 => 27,  103 => 26,  100 => 25,  97 => 24,  93 => 23,  79 => 10,  74 => 8,  70 => 7,  66 => 5,  62 => 4,  57 => 124,  55 => 122,  53 => 23,  48 => 20,  46 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main.html.twig", "/var/www/renardenjoue/templates/main.html.twig");
    }
}
