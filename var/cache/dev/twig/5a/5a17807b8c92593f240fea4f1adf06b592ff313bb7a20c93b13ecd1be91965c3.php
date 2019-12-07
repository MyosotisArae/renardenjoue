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
class __TwigTemplate_6165e4c761f99ecfdc8b412237ff090d897c98f2283d9104888d843c4dad7759 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main.html.twig"));

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
        $this->displayBlock('corps', $context, $blocks);
        // line 119
        $this->displayBlock('piedDePage', $context, $blocks);
        // line 121
        echo "  </body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_entete($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entete"));

        // line 5
        echo "  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["BScss_path"]) || array_key_exists("BScss_path", $context) ? $context["BScss_path"] : (function () { throw new RuntimeError('Variable "BScss_path" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["css_path"]) || array_key_exists("css_path", $context) ? $context["css_path"] : (function () { throw new RuntimeError('Variable "css_path" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "general.css\">
  
  <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["BSjs_path"]) || array_key_exists("BSjs_path", $context) ? $context["BSjs_path"] : (function () { throw new RuntimeError('Variable "BSjs_path" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
  <script src=\"https://kit.fontawesome.com/ac0e3984ff.js\"></script>
  
  <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>


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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 35
    public function block_corps($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "corps"));

        // line 36
        echo "  ";
        $context["isAdministrateur"] = false;
        // line 37
        echo "  ";
        $context["afficherConnexion"] = false;
        // line 38
        echo "
    <header class=\"row w-max\">
      <div class=\"col-12 container-fluid w-max\">
        <nav class=\"navbar navbar-expand-sm navbar-dark bg-primary w-max\">
            <div class=\"navbar-nav col-md-12 d-none d-md-block\"> ";
        // line 43
        echo "                <li class=\"nav-item\" style=\"width:10px;\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["img_path"]) || array_key_exists("img_path", $context) ? $context["img_path"] : (function () { throw new RuntimeError('Variable "img_path" does not exist.', 43, $this->source); })()), "html", null, true);
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
        if ((isset($context["isAdministrateur"]) || array_key_exists("isAdministrateur", $context) ? $context["isAdministrateur"] : (function () { throw new RuntimeError('Variable "isAdministrateur" does not exist.', 53, $this->source); })())) {
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
        echo "                ";
        if ((isset($context["afficherConnexion"]) || array_key_exists("afficherConnexion", $context) ? $context["afficherConnexion"] : (function () { throw new RuntimeError('Variable "afficherConnexion" does not exist.', 62, $this->source); })())) {
            // line 63
            echo "                <li class=\"nav-item";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getOngletActif("CNX"), "html", null, true);
            echo "\">
                  <a class=\"nav-link\" href=\"login\"><i class=\"fas fa-sign-in-alt\">&nbsp;</i>Se connecter</a>
                </li>
                <li class=\"nav-item";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getOngletActif("CMP"), "html", null, true);
            echo "\">
                  <a class=\"nav-link\" href=\"compte\"><i class=\"fas fa-address-card\">&nbsp;</i>Mon compte</a>
                </li>
                ";
        }
        // line 70
        echo "                <li class=\"nav-item";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getOngletActif("CTC"), "html", null, true);
        echo "\" title=\"Pour nous trouver ou nous envoyer un message\">
                  <a class=\"nav-link\" href=\"contact\"><i class=\"fas fa-comment\">&nbsp;</i>Contact</a>
                </li>
                <li class=\"nav-item\" title=\"Liens vers d'autres pages\">
                  <div class=\"btn-group\">";
        // line 75
        echo "                    <button type=\"button\" class=\"btn btn-default dropdown-toggle liens\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fas fa-link\">&nbsp;</i>Liens</button>
                    <ul class=\"dropdown-menu bg-primary\">
                      <a class=\"dropdown-item\" href=\"https://www.bussysaintgeorges.fr/education/petite-enfance/la-ludotheque/\" title=\"Ludothèque de Bussy, gratuite, pour les enfants de 0 à 12 ans, pour le moment ...\">Ludothèque de Bussy</a>
                      <a class=\"dropdown-item\" href=\"http://www.lavalleedesjeux.com/\" title=\"Ludothèque ouverte à tous, sur inscription (3O€)\">Ludothèque de Bailly Romainvilliers</a>
                      <div class=\"dropdown-divider\"></div>
                      <a class=\"dropdown-item\" href=\"https://ludiworld.com/newshop/84-jeux-de-societe\" title=\"Votre boutique de jeux, ici, à Bussy !\">Ludiworld</a>
                      <a class=\"dropdown-item\" href=\"http://www.ludhainaut.fr/\" title=\"Association de joueurs à Onnaing (Nord)\">Lud'Hainaut</a>
                    </ul>
                  </div>
                </li>
            </div> ";
        // line 86
        echo "
            <div class=\"navbar-nav col-12 d-md-none\"> ";
        // line 88
        echo "                <img src=\"";
        echo twig_escape_filter($this->env, (isset($context["img_path"]) || array_key_exists("img_path", $context) ? $context["img_path"] : (function () { throw new RuntimeError('Variable "img_path" does not exist.', 88, $this->source); })()), "html", null, true);
        echo "logo.gif\" class=\"logo\" style=\"height : 11vw;\">
                <i class=\"btn btn-default fas fa-bars enRelatif w-max burger align-self-end\" data-toggle=\"dropdown\"  aria-expanded=\"false\">&nbsp;</i>
                <div class=\"btn-group dropleft enAbsolu align-self-end\" style=\"min-width : 40em;\">
                  <ul class=\"dropdown-menu bg-primary enRelatif burgerMenu\" style=\"right : 0; box-sizing: border-box;\">
                      <a class=\"dropdown-item\" href=\"accueil\" title=\"Page d'accueil\">Accueil</a>
                      <a class=\"dropdown-item\" href=\"calendrier\" title=\"Calendrier des évènements\">Agenda</a>
                      <a class=\"dropdown-item\" href=\"jeux\" title=\"Liste de nos jeux\">Jeux</a>
                      <a class=\"dropdown-item\" href=\"contact\" title=\"Pour nous trouver ou nous envoyer un message\">Contact</a>
                      <div class=\"dropdown-divider\"></div>
                      <a class=\"dropdown-item\" href=\"https://www.bussysaintgeorges.fr/education/petite-enfance/la-ludotheque/\" title=\"Ludothèque de Bussy, gratuite, pour les enfants de 0 à 12 ans, pour le moment ...\">Ludothèque de Bussy</a>
                      <a class=\"dropdown-item\" href=\"http://www.lavalleedesjeux.com/\" title=\"Ludothèque ouverte à tous, sur inscription (3O€)\">Ludothèque de Bailly Romainvilliers</a>
                      <a class=\"dropdown-item\" href=\"https://ludiworld.com/newshop/84-jeux-de-societe\" title=\"Votre boutique de jeux, ici, à Bussy !\">Ludiworld</a>
                      <a class=\"dropdown-item\" href=\"http://www.ludhainaut.fr/\" title=\"Association de joueurs à Onnaing (Nord)\">Lud'Hainaut</a>
                    </ul>
                </div>
            </div> ";
        // line 104
        echo "
            </div>
        </nav>
      </div>
    </header>

    <img class=\"fond container-fluid d-none d-lg-block enAbsolu\" style=\"top:3em; background-size : cover;\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["img_path"]) || array_key_exists("img_path", $context) ? $context["img_path"] : (function () { throw new RuntimeError('Variable "img_path" does not exist.', 110, $this->source); })()), "html", null, true);
        echo "fond.png\">
    <img class=\"fond container-fluid d-lg-none enAbsolu\" style=\"top:3em; background-size : cover;\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["img_path"]) || array_key_exists("img_path", $context) ? $context["img_path"] : (function () { throw new RuntimeError('Variable "img_path" does not exist.', 111, $this->source); })()), "html", null, true);
        echo "fondVertical.png\">

    <div class=\"row retracter\" id=\"mainRow\">
          ";
        // line 114
        $this->displayBlock('laPage', $context, $blocks);
        // line 116
        echo "    </div> ";
        // line 117
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 114
    public function block_laPage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "laPage"));

        // line 115
        echo "          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 119
    public function block_piedDePage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "piedDePage"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "main.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  274 => 119,  267 => 115,  260 => 114,  252 => 117,  250 => 116,  248 => 114,  242 => 111,  238 => 110,  230 => 104,  211 => 88,  208 => 86,  196 => 75,  188 => 70,  181 => 66,  174 => 63,  171 => 62,  161 => 54,  159 => 53,  153 => 50,  147 => 47,  141 => 44,  136 => 43,  130 => 38,  127 => 37,  124 => 36,  117 => 35,  88 => 10,  83 => 8,  79 => 7,  75 => 5,  68 => 4,  60 => 121,  58 => 119,  56 => 35,  51 => 32,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"w-100\">
<head>
{% block entete %}
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <link rel=\"stylesheet\" href=\"{{ BScss_path }}\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"{{css_path}}general.css\">
  
  <script src=\"{{ BSjs_path }}\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
  <script src=\"https://kit.fontawesome.com/ac0e3984ff.js\"></script>
  
  <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>


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

{% endblock %}
</head>

  <body class=\"w-max\">
{% block corps %}
  {% set isAdministrateur = false %}
  {% set afficherConnexion = false %}

    <header class=\"row w-max\">
      <div class=\"col-12 container-fluid w-max\">
        <nav class=\"navbar navbar-expand-sm navbar-dark bg-primary w-max\">
            <div class=\"navbar-nav col-md-12 d-none d-md-block\"> {# Menu pour grand ecran #}
                <li class=\"nav-item\" style=\"width:10px;\"><img src=\"{{img_path}}logo.gif\" class=\"logo\">&nbsp;</li>
                <li class=\"nav-item{{ ongletActif(\"ACC\") }}\" title=\"Page d'accueil\">
                  <a class=\"nav-link visible-block\" href=\"accueil\"><i class=\"fas fa-home\">&nbsp;</i>Accueil</a>
                </li>
                <li class=\"nav-item{{ ongletActif(\"CAL\") }}\" title=\"Calendrier des évènements\">
                  <a class=\"nav-link\" href=\"calendrier\"><i class=\"fas fa-calendar-alt\">&nbsp;</i>Agenda</a>
                </li>
                <li class=\"nav-item{{ ongletActif(\"JEU\") }}\" title=\"Liste de nos jeux\">
                  <a class=\"nav-link\" href=\"jeux\"><i class=\"fas fa-dice\">&nbsp;</i>Jeux</a>
                </li>
                {% if isAdministrateur %}
                <li class=\"nav-item\">
                  <select class=\"nav-link bg-primary\">
                    <option>Administrateur</option>
                    <option>Evènements</option>
                    <option>Jeux</option>
                  </select>
                </li>
                {% endif %}
                {% if afficherConnexion %}
                <li class=\"nav-item{{ ongletActif(\"CNX\") }}\">
                  <a class=\"nav-link\" href=\"login\"><i class=\"fas fa-sign-in-alt\">&nbsp;</i>Se connecter</a>
                </li>
                <li class=\"nav-item{{ ongletActif(\"CMP\") }}\">
                  <a class=\"nav-link\" href=\"compte\"><i class=\"fas fa-address-card\">&nbsp;</i>Mon compte</a>
                </li>
                {% endif %}
                <li class=\"nav-item{{ ongletActif(\"CTC\") }}\" title=\"Pour nous trouver ou nous envoyer un message\">
                  <a class=\"nav-link\" href=\"contact\"><i class=\"fas fa-comment\">&nbsp;</i>Contact</a>
                </li>
                <li class=\"nav-item\" title=\"Liens vers d'autres pages\">
                  <div class=\"btn-group\">{# Nécessaire pour que les sous-menus soient alignés avec le menu Liens #}
                    <button type=\"button\" class=\"btn btn-default dropdown-toggle liens\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fas fa-link\">&nbsp;</i>Liens</button>
                    <ul class=\"dropdown-menu bg-primary\">
                      <a class=\"dropdown-item\" href=\"https://www.bussysaintgeorges.fr/education/petite-enfance/la-ludotheque/\" title=\"Ludothèque de Bussy, gratuite, pour les enfants de 0 à 12 ans, pour le moment ...\">Ludothèque de Bussy</a>
                      <a class=\"dropdown-item\" href=\"http://www.lavalleedesjeux.com/\" title=\"Ludothèque ouverte à tous, sur inscription (3O€)\">Ludothèque de Bailly Romainvilliers</a>
                      <div class=\"dropdown-divider\"></div>
                      <a class=\"dropdown-item\" href=\"https://ludiworld.com/newshop/84-jeux-de-societe\" title=\"Votre boutique de jeux, ici, à Bussy !\">Ludiworld</a>
                      <a class=\"dropdown-item\" href=\"http://www.ludhainaut.fr/\" title=\"Association de joueurs à Onnaing (Nord)\">Lud'Hainaut</a>
                    </ul>
                  </div>
                </li>
            </div> {# Menu pour grand ecran #}

            <div class=\"navbar-nav col-12 d-md-none\"> {# Menu pour petit ecran #}
                <img src=\"{{img_path}}logo.gif\" class=\"logo\" style=\"height : 11vw;\">
                <i class=\"btn btn-default fas fa-bars enRelatif w-max burger align-self-end\" data-toggle=\"dropdown\"  aria-expanded=\"false\">&nbsp;</i>
                <div class=\"btn-group dropleft enAbsolu align-self-end\" style=\"min-width : 40em;\">
                  <ul class=\"dropdown-menu bg-primary enRelatif burgerMenu\" style=\"right : 0; box-sizing: border-box;\">
                      <a class=\"dropdown-item\" href=\"accueil\" title=\"Page d'accueil\">Accueil</a>
                      <a class=\"dropdown-item\" href=\"calendrier\" title=\"Calendrier des évènements\">Agenda</a>
                      <a class=\"dropdown-item\" href=\"jeux\" title=\"Liste de nos jeux\">Jeux</a>
                      <a class=\"dropdown-item\" href=\"contact\" title=\"Pour nous trouver ou nous envoyer un message\">Contact</a>
                      <div class=\"dropdown-divider\"></div>
                      <a class=\"dropdown-item\" href=\"https://www.bussysaintgeorges.fr/education/petite-enfance/la-ludotheque/\" title=\"Ludothèque de Bussy, gratuite, pour les enfants de 0 à 12 ans, pour le moment ...\">Ludothèque de Bussy</a>
                      <a class=\"dropdown-item\" href=\"http://www.lavalleedesjeux.com/\" title=\"Ludothèque ouverte à tous, sur inscription (3O€)\">Ludothèque de Bailly Romainvilliers</a>
                      <a class=\"dropdown-item\" href=\"https://ludiworld.com/newshop/84-jeux-de-societe\" title=\"Votre boutique de jeux, ici, à Bussy !\">Ludiworld</a>
                      <a class=\"dropdown-item\" href=\"http://www.ludhainaut.fr/\" title=\"Association de joueurs à Onnaing (Nord)\">Lud'Hainaut</a>
                    </ul>
                </div>
            </div> {# Menu pour petit ecran #}

            </div>
        </nav>
      </div>
    </header>

    <img class=\"fond container-fluid d-none d-lg-block enAbsolu\" style=\"top:3em; background-size : cover;\" src=\"{{img_path}}fond.png\">
    <img class=\"fond container-fluid d-lg-none enAbsolu\" style=\"top:3em; background-size : cover;\" src=\"{{img_path}}fondVertical.png\">

    <div class=\"row retracter\" id=\"mainRow\">
          {% block laPage %}
          {% endblock %}
    </div> {# div principale #}

{% endblock %}
{% block piedDePage %}
{% endblock %}
  </body>
</html>", "main.html.twig", "/var/www/renardenjoue/templates/main.html.twig");
    }
}
