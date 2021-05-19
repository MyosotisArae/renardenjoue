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

/* contact.html.twig */
class __TwigTemplate_afeeff878e25ad1d01fbcd9c44e8cdb23c587637e1a152d62e17f7593b8b95c2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $this->parent = $this->loadTemplate("main.html.twig", "contact.html.twig", 1);
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
  <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["css_path"] ?? null), "html", null, true);
        echo "jeux.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["css_path"] ?? null), "html", null, true);
        echo "toolTip.css\">
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_corps($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "corps"));

        // line 10
        echo "  ";
        $this->displayParentBlock("corps", $context, $blocks);
        echo "
  
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_laPage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "laPage"));

        // line 15
        echo "
      <div class='col-12 fondOpaque ascenseur text-justify'>
        <div class='row text-justify'>
          <div class='col-12'>
            Notre association a été fondée en 2019.<br>
            Son but est de permettre aux joueurs de Bussy Saint Georges de se retrouver pour jouer à des jeux de société <a href=\"\" title=\"Vers les années 90, les auteurs ont commencé à plancher sérieusement sur le rapport entre l'intérêt et la durée des parties. Les jeux ont commencé à faire l'objet de tests plus sérieux avant la sortie de leur version définitive. Les jeux dits ''familiaux'', où les choix sont généralement très restreints, voire inexistants, existent encore, mais servent plus à permettre à mamie de jouer avec ses petits enfants le soir de Noël qu'à jouer régulièrement.
            Cela ne veut pas dire pour autant qu'on va vous faire jouer à des jeux hyper compliqués. Le jeu moderne vous impose de faire des choix, certes. Mais quelle que soit votre capacité à retenir des règles plus ou moins longues, plus ou moins complexes, il existe forcément des jeux qui peuvent vous plaire.  \">\"modernes\"</a>.<br>
            <br>
            Le <a href=\"https://lerenardenjoue.forumactif.com/\" title=\"Postez des annonces pour vos soirées jeux.\">forum</a> vous offre la possibilité d'organiser des parties chez vous et d'inviter des joueurs. Mais nous proposons aussi, environ une semaine sur deux, des après-midi-jeux au siège de l'asso (voir plan) :<br>
        </div>
        <div class='col-6'>
          <div class='custom-control custom-checkbox'>
            <b>4 boulevard Pierre Mendès France<br>
            77600 Bussy Saint Georges<br></b>
          </div>
          Elles sont indiqués dans le calendrier.<br>
          Pour y participer, créez un compte puis saisissez une adresse mail. Allez ensuite sur la date souhaitée et inscrivez-vous. Vous recevrez un mail au cours de la semaine précédant l'évènement. Mon numéro de téléphone y sera mentionné.<br>
          <table>
            <tr>
              <td>
                En cas de question, consultez les &nbsp;
              </td>
              <td>
                <form method='post' action='infos'><button class='btn-primary btn float-right' type='submit'>Infos détaillées</button></form>
              </td>
            </tr>
          </table>
          ou joignez-moi par mail :<br>
          <div class='custom-control custom-checkbox'><b><a href=\"mailto:myosotis.arae@gmail.com\" target=\"_blank\">myosotis.arae@gmail.com</a></b><br></div>
            A l'heure de début, ou sur un appel de votre part si vous venez plus tard (me le signaler, dans ce cas), je descendrai chercher les participants devant l'immeuble.<br>
            <br>
            L'inscription à une soirée jeux reste possible jusqu'à 2 jours avant la date prévue. Ensuite, si personne ne s'y est inscrit, elle est annulée. Si la date tombe un samedi ou un dimanche, l'inscription est close le jeudi qui précéde.<br>
            <br>
        </div>
        <div class='col-6'>
          <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "planQuartier.png\" style='width : 100%;'>
        </div>
        <br>
        <br><br>
        </div>
      </div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_piedDePage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "piedDePage"));

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 59,  142 => 50,  105 => 15,  98 => 14,  87 => 10,  80 => 9,  71 => 6,  67 => 5,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact.html.twig", "/var/www/renardenjoue/templates/contact.html.twig");
    }
}
