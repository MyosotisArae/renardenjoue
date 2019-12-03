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

/* calendrier.html.twig */
class __TwigTemplate_0e602981629d5169f12e13275ab8f6fcc2f292c4c75ff65c07c9832d1ccbe04d extends \Twig\Template
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
        $this->parent = $this->loadTemplate("main.html.twig", "calendrier.html.twig", 1);
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

    <link href='";
        // line 6
        echo twig_escape_filter($this->env, ($context["css_path"] ?? null), "html", null, true);
        echo "/calendrier.css' rel='stylesheet' />
    <link href='";
        // line 7
        echo twig_escape_filter($this->env, ($context["fc_path"] ?? null), "html", null, true);
        echo "/core/main.css' rel='stylesheet' />
    <link href='";
        // line 8
        echo twig_escape_filter($this->env, ($context["fc_path"] ?? null), "html", null, true);
        echo "/bootstrap/main.css' rel='stylesheet' />
    <link href='";
        // line 9
        echo twig_escape_filter($this->env, ($context["fc_path"] ?? null), "html", null, true);
        echo "/daygrid/main.css' rel='stylesheet' />

    <script src='";
        // line 11
        echo twig_escape_filter($this->env, ($context["js_path"] ?? null), "html", null, true);
        echo "/calendrier.js'></script>

    <script src='";
        // line 13
        echo twig_escape_filter($this->env, ($context["fc_path"] ?? null), "html", null, true);
        echo "/core/main.js'></script>
    <script src='";
        // line 14
        echo twig_escape_filter($this->env, ($context["fc_path"] ?? null), "html", null, true);
        echo "/bootstrap/main.js'></script>
    <script src='";
        // line 15
        echo twig_escape_filter($this->env, ($context["fc_path"] ?? null), "html", null, true);
        echo "/daygrid/main.js'></script>
    <script src='";
        // line 16
        echo twig_escape_filter($this->env, ($context["fc_path"] ?? null), "html", null, true);
        echo "/interaction/main.js'></script>

    <script>
      ";
        // line 19
        $context["unEvt"] = null;
        // line 20
        echo "
      var listeDesc =
      {
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listeDates"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["evt"]) {
            // line 24
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 24)) {
                echo " ";
                $context["unEvt"] = $context["evt"];
                echo " ";
            }
            // line 25
            echo "
          ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo " : {
                         \"titre\": \"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "titre", [], "any", false, false, false, 27), "html", null, true);
            echo "\",
                         \"desc\" : \"";
            // line 28
            echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["evt"], "description", [], "any", false, false, false, 28), ["
" => "<br>", "" => "", "\"" => "&quot;"]);
            echo "\",
                         \"periode\" : \"";
            // line 29
            echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["evt"], "periode", [], "any", false, false, false, 29), ["
" => "<br>", "" => ""]);
            echo "\"
              }";
            // line 30
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 30)) {
                echo ",";
            }
            // line 31
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
      };
      var lesMois = [\"janvier\",\"février\",\"mars\",\"avril\",\"mai\",\"juin\",\"juillet\",\"août\",\"septembre\",\"octobre\",\"novembre\",\"décembre\"];
      var ceMoisCi = lesMois[new Date().getMonth()];

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: [ 'dayGrid','interaction','bootstrap' ],
          height : 500,
          buttonText : {
                         today : 'Revenir en '+ceMoisCi,
                         dayGridMonth : \"mois\",
                         dayGridWeek : \"semaine\",
                         dayGridDay  : \"jour\"
                       },
          firstDay : 1,
          header : {
                     center : 'title',
                     right : 'today prev next',
                     left :  'dayGridMonth dayGridWeek dayGridDay'
                   },
          businessHours: { daysOfWeek : [2,4,6] },
          events : [";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listeDates"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["evt"]) {
            // line 57
            echo "
                     {
                       id : ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "id", [], "any", false, false, false, 59), "html", null, true);
            echo ",
                       title : \"";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "titre", [], "any", false, false, false, 60), "html", null, true);
            echo "\",
                       start : \"";
            // line 61
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "dateDebut", [], "any", false, false, false, 61), "Y-m-d"), "html", null, true);
            echo "\"
                       ";
            // line 62
            if (twig_get_attribute($this->env, $this->source, $context["evt"], "aUneDateDeFin", [], "any", false, false, false, 62)) {
                echo ",end : \"";
                ((twig_get_attribute($this->env, $this->source, $context["evt"], "dateFin", [], "any", false, false, false, 62)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "dateFin", [], "any", false, false, false, 62), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "\"";
            }
            // line 63
            echo "
                     }";
            // line 64
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 64)) {
                echo ",";
            }
            // line 65
            echo "                   ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
                   ],
          eventClick : function(info) { detailEvt(listeDesc[info.event.id]); }
        });

        calendar.render();
      });

    </script>
";
    }

    // line 77
    public function block_corps($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "  ";
        $this->displayParentBlock("corps", $context, $blocks);
        echo "
";
    }

    // line 81
    public function block_laPage($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "<div class=\"container-fluid fondOpaque ascenseur\">
  <div class=\"row\">

    <div class=\"col-xs-12\" id='calendar'>
    </div>

    <div class=\"col-xs-4\">
        <div id='titreEvt'>
          ";
        // line 90
        if ((twig_length_filter($this->env, ($context["listeDates"] ?? null)) == 0)) {
            // line 91
            echo "          Aucun évènement ce mois-ci
          ";
        } elseif ((twig_length_filter($this->env,         // line 92
($context["listeDates"] ?? null)) == 1)) {
            // line 93
            echo "          ";
            $this->loadTemplate("_detailEvt.html.twig", "calendrier.html.twig", 93)->display($context);
            // line 94
            echo "          ";
        } else {
            // line 95
            echo "          ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["listeDates"] ?? null)), "html", null, true);
            echo " évènements ce mois-ci !
          ";
        }
        // line 105
        echo "        </div>
        <div id='dateEvt'></div>
    </div>
    <div class=\"col-xs-7 offset-1\" id='descEvt'>
    </div>

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "calendrier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 105,  305 => 95,  302 => 94,  299 => 93,  297 => 92,  294 => 91,  292 => 90,  282 => 82,  278 => 81,  271 => 78,  267 => 77,  254 => 66,  240 => 65,  236 => 64,  233 => 63,  227 => 62,  223 => 61,  219 => 60,  215 => 59,  211 => 57,  194 => 56,  168 => 32,  154 => 31,  150 => 30,  145 => 29,  140 => 28,  136 => 27,  132 => 26,  129 => 25,  122 => 24,  105 => 23,  100 => 20,  98 => 19,  92 => 16,  88 => 15,  84 => 14,  80 => 13,  75 => 11,  70 => 9,  66 => 8,  62 => 7,  58 => 6,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "calendrier.html.twig", "/var/www/renardenjoue/templates/calendrier.html.twig");
    }
}
