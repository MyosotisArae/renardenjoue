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
class __TwigTemplate_7520b98ad713cea5b08d08f37adb09b54a7e3dbbbdfb824b05bd6c3825bbb322 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("main.html.twig", "contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_entete($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 9
    public function block_corps($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "  ";
        $this->displayParentBlock("corps", $context, $blocks);
        echo "
  
";
    }

    // line 14
    public function block_laPage($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "
  <div class='container-fluid'>
    <div class='row'>
      <div class='col-12'>
        <div class=\"fondOpaque ascenseur\">
        <br>
        Notre association a été fondée en 2019.<br>
        Son but est de permettre aux joueurs de Bussy Saint Georges de se retrouver pour jouer à des jeux de société <a href=\"\" title=\"        Vers les années 90, les auteurs ont commencé à plancher sérieusement sur le rapport entre l'intérêt et la durée des parties. Les jeux ont commencé à faire l'objet de tests plus sérieux avant la sortie de leur version définitive. Les jeux dits ''familiaux'', où les choix sont généralement très restreints, voire inexistants, existent encore, mais servent plus à permettre à mamie de jouer avec ses petits enfants le soir de Noël.
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
              <a href=\"mailto:webmaster@lerenardenjoue.webou.net\">webmaster@lerenardenjoue.webou.net</a><br>
              Vous n'aurez à préciser à quelle heure vous pensez arriver, et je vous répondrai en mentionnant mon numéro de téléphone. Une fois devant la porte, vous m'appelez et je viens vous chercher. On discute avec tout le monde du genre de jeu auquel on veut jouer (durée, style, thème...) et on joue !<br>
              <br>
              Les inscriptions sont ouvertes jusqu'à 2 jours avant la date prévue. Ensuite, si personne ne s'est manifesté pour participer, la date est annulée. Si cette date tombe un samedi ou un dimanche, la date limite d'inscription est le jeudi. Au-delà, je risque de partir en week-end sans même voir votre message.<br>
              <br>
            </td>
            <td>
              <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
        echo "planQuartier.png\">
            </td>
          </tr>
        </table>
        <br>
        <br><br>
        </div>
      </div>
    </div>
  </div>

";
    }

    // line 53
    public function block_piedDePage($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  127 => 53,  111 => 40,  84 => 15,  80 => 14,  72 => 10,  68 => 9,  62 => 6,  58 => 5,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact.html.twig", "/var/www/renardenjoue/templates/contact.html.twig");
    }
}
