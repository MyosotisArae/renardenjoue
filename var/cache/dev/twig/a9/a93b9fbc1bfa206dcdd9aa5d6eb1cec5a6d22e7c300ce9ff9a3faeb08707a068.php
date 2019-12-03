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

/* /contact.html.twig */
class __TwigTemplate_b1f1a22ce79e2b36fae86a00d4fa4f67059394771682ae3bfee10d25e721ad37 extends \Twig\Template
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
            'piedDePage' => [$this, 'block_piedDePage'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/contact.html.twig"));

        $this->parent = $this->loadTemplate("main.html.twig", "/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_entete($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entete"));

        // line 4
        echo "  ";
        $this->displayParentBlock("entete", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["css_path"]) || array_key_exists("css_path", $context) ? $context["css_path"] : (function () { throw new RuntimeError('Variable "css_path" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "jeux.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["css_path"]) || array_key_exists("css_path", $context) ? $context["css_path"] : (function () { throw new RuntimeError('Variable "css_path" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "toolTip.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_corps($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "corps"));

        // line 10
        echo "  ";
        $this->displayParentBlock("corps", $context, $blocks);
        echo "
  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_laPage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "laPage"));

        // line 15
        echo "
      <div class=\"fondOpaque ascenseur\">
        Notre association a été fondée en 2019.<br>
        Son but est de permettre aux joueurs de Bussy Saint Georges de se retrouver pour jouer à des jeux de société <a href=\"\" title=\"Vers les années 90, les auteurs ont commencé à plancher sérieusement sur le rapport entre l'intérêt et la durée des parties. Les jeux ont commencé à faire l'objet de tests plus sérieux avant la sortie de leur version définitive. Les jeux dits ''familiaux'', où les choix sont généralement très restreints, voire inexistants, existent encore, mais servent plus à permettre à mamie de jouer avec ses petits enfants le soir de Noël qu'à jouer régulièrement.
Cela ne veut pas dire pour autant qu'on va vous faire jouer à des jeux hyper compliqués. Le jeu moderne vous impose de faire des choix, certes. Mais quelle que soit votre capacité à retenir des règles plus ou moins longues, plus ou moins complexes, il existe forcément des jeux qui peuvent vous plaire.  \">\"modernes\"</a>.<br>
        <br>
        Le <a href=\"https://lerenardenjoue.forumactif.com/\" title=\"Postez des annonces pour vos soirées jeux.\">forum</a> vous offre la possibilité d'organiser des parties chez vous et d'inviter des joueurs. Mais nous proposons aussi, régulièrement des après-midi-jeux au siège de l'asso:<br>
        <table>
          <tr>
            <td style=\"vertical-align : top;\">
              4 boulevard Pierre Mendès France<br>
              77600 Bussy Saint Georges<br>
              <br>
              Ce sera dans ce cas indiqué dans le calendrier. Pour y participer, il suffit de nous prévenir par mail à cette adresse :<br>
              <a href=\"mailto:webmaster@lerenardenjoue.webou.net\" target=\"_blank\">webmaster@lerenardenjoue.webou.net</a><br>
              Vous n'aurez à préciser à quelle heure vous pensez arriver, et je vous répondrai en mentionnant mon numéro de téléphone. Une fois devant la porte, vous m'appelez et je viens vous chercher. On discute avec tout le monde du genre de jeu auquel on veut jouer (durée, style, thème...) et on joue !<br>
              <br>
              Les inscriptions sont ouvertes jusqu'à 2 jours avant la date prévue. Ensuite, si personne ne s'est manifesté pour participer, la date est annulée. Si cette date tombe un samedi ou un dimanche, la date limite d'inscription est le jeudi. Au-delà, je risque de partir en week-end sans même voir votre message.<br>
              <br>
            </td>
            <td>
              <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["img_path"]) || array_key_exists("img_path", $context) ? $context["img_path"] : (function () { throw new RuntimeError('Variable "img_path" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "planQuartier.png\">
            </td>
          </tr>
        </table>
        <br>
        <br><br>
      </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 46
    public function block_piedDePage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "piedDePage"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 46,  128 => 36,  105 => 15,  98 => 14,  87 => 10,  80 => 9,  71 => 6,  67 => 5,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"main.html.twig\" %}

{% block entete %}
  {{ parent() }}
  <link rel=\"stylesheet\" href=\"{{css_path}}jeux.css\">
  <link rel=\"stylesheet\" href=\"{{css_path}}toolTip.css\">
{% endblock %}

{% block corps %}
  {{ parent() }}
  
{% endblock %}

{% block laPage %}

      <div class=\"fondOpaque ascenseur\">
        Notre association a été fondée en 2019.<br>
        Son but est de permettre aux joueurs de Bussy Saint Georges de se retrouver pour jouer à des jeux de société <a href=\"\" title=\"Vers les années 90, les auteurs ont commencé à plancher sérieusement sur le rapport entre l'intérêt et la durée des parties. Les jeux ont commencé à faire l'objet de tests plus sérieux avant la sortie de leur version définitive. Les jeux dits ''familiaux'', où les choix sont généralement très restreints, voire inexistants, existent encore, mais servent plus à permettre à mamie de jouer avec ses petits enfants le soir de Noël qu'à jouer régulièrement.
Cela ne veut pas dire pour autant qu'on va vous faire jouer à des jeux hyper compliqués. Le jeu moderne vous impose de faire des choix, certes. Mais quelle que soit votre capacité à retenir des règles plus ou moins longues, plus ou moins complexes, il existe forcément des jeux qui peuvent vous plaire.  \">\"modernes\"</a>.<br>
        <br>
        Le <a href=\"https://lerenardenjoue.forumactif.com/\" title=\"Postez des annonces pour vos soirées jeux.\">forum</a> vous offre la possibilité d'organiser des parties chez vous et d'inviter des joueurs. Mais nous proposons aussi, régulièrement des après-midi-jeux au siège de l'asso:<br>
        <table>
          <tr>
            <td style=\"vertical-align : top;\">
              4 boulevard Pierre Mendès France<br>
              77600 Bussy Saint Georges<br>
              <br>
              Ce sera dans ce cas indiqué dans le calendrier. Pour y participer, il suffit de nous prévenir par mail à cette adresse :<br>
              <a href=\"mailto:webmaster@lerenardenjoue.webou.net\" target=\"_blank\">webmaster@lerenardenjoue.webou.net</a><br>
              Vous n'aurez à préciser à quelle heure vous pensez arriver, et je vous répondrai en mentionnant mon numéro de téléphone. Une fois devant la porte, vous m'appelez et je viens vous chercher. On discute avec tout le monde du genre de jeu auquel on veut jouer (durée, style, thème...) et on joue !<br>
              <br>
              Les inscriptions sont ouvertes jusqu'à 2 jours avant la date prévue. Ensuite, si personne ne s'est manifesté pour participer, la date est annulée. Si cette date tombe un samedi ou un dimanche, la date limite d'inscription est le jeudi. Au-delà, je risque de partir en week-end sans même voir votre message.<br>
              <br>
            </td>
            <td>
              <img src=\"{{ img_path }}planQuartier.png\">
            </td>
          </tr>
        </table>
        <br>
        <br><br>
      </div>

{% endblock %}

{% block piedDePage %}
{% endblock %}", "/contact.html.twig", "/var/www/renardenjoue/templates/contact.html.twig");
    }
}
