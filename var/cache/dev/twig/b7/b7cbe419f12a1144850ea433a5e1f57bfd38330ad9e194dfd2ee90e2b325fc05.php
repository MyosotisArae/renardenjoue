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
class __TwigTemplate_c4c163c39dfd0dd6487cda1093ec9d456da02ffd78b49f529ee56a8874feb334 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendrier.html.twig"));

        $this->parent = $this->loadTemplate("main.html.twig", "calendrier.html.twig", 1);
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
        echo twig_escape_filter($this->env, ($context["js_path"] ?? null), "html", null, true);
        echo "/calendrier.js'></script>

    <script src='";
        // line 14
        echo twig_escape_filter($this->env, ($context["fc_path"] ?? null), "html", null, true);
        echo "core/main.js'></script>
    <script src='";
        // line 15
        echo twig_escape_filter($this->env, ($context["fc_path"] ?? null), "html", null, true);
        echo "bootstrap/main.js'></script>
    <script src='";
        // line 16
        echo twig_escape_filter($this->env, ($context["fc_path"] ?? null), "html", null, true);
        echo "daygrid/main.js'></script>
    <script src='";
        // line 17
        echo twig_escape_filter($this->env, ($context["fc_path"] ?? null), "html", null, true);
        echo "list/main.js'></script>
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
                         \"id\": \"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "\",
                         \"debut\": \"";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "dateDebut", [], "any", false, false, false, 28), "Y/m/d"), "html", null, true);
            echo "\",
                         \"titre\": \"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "titre", [], "any", false, false, false, 29), "html", null, true);
            echo "\",
                         \"desc\" : \"";
            // line 30
            echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["evt"], "description", [], "any", false, false, false, 30), ["
" => "<br>", "" => "", "\"" => "&quot;"]);
            echo "\",
                         \"periode\" : \"";
            // line 31
            echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["evt"], "periode", [], "any", false, false, false, 31), ["
" => "<br>", "" => ""]);
            echo "\"
              }";
            // line 32
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 32)) {
                echo ",";
            }
            // line 33
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
        // line 34
        echo "
      };
      var lesJours = [\"Dimanche\",\"Lundi\",\"Mardi\",\"Mercredi\",\"Jeudi\",\"Vendredi\",\"Samedi\"];
      var lesMois = [\"janvier\",\"février\",\"mars\",\"avril\",\"mai\",\"juin\",\"juillet\",\"août\",\"septembre\",\"octobre\",\"novembre\",\"décembre\"];
      var ceMoisCi = lesMois[new Date().getMonth()];

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('monCalendrier');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: [ 'dayGrid', 'bootstrap', 'list' ],
          height : 'parent',
          buttonText : {
                         today : 'Revenir en '+ceMoisCi,
                         dayGridMonth : \"mois\",
                         dayGridWeek : \"semaine\",
                         dayGridDay  : \"jour\",
                         listYear : \"année\"
                       },
          firstDay : 1,
          defaultView : \"dayGridMonth\",
          displayEventTime: false,
          locale : \"fr\",
          noEventsMessage : \"Aucun évènement de prévu pour l'instant.\",
          header : {
                     center : 'title',
                     right : 'today prev next',
                     left :  'listYear dayGridMonth dayGridWeek dayGridDay'
                   },
          businessHours: { daysOfWeek : [2,4,6] },
          eventLimit : false,
          views: {
                   dayGridMonth: { eventLimit: 2 }
                 },
          eventLimitText :function(nb) { if (nb<2) return '+ un autre'; return '+'+nb+' autres'; },
          events : [";
        // line 69
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
            // line 70
            echo "                     {
                       id : ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "id", [], "any", false, false, false, 71), "html", null, true);
            echo ",
                       allDay : false,
                       textColor : '#FFFFFF',
                       ";
            // line 74
            if ((twig_get_attribute($this->env, $this->source, $context["evt"], "titre", [], "any", false, false, false, 74) == "Les renards jouent")) {
                echo "backgroundColor: '#ff0000',";
            }
            // line 75
            echo "                       title : \"";
            echo twig_get_attribute($this->env, $this->source, $context["evt"], "titre", [], "any", false, false, false, 75);
            echo "\",
                       start : \"";
            // line 76
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "dateDebut", [], "any", false, false, false, 76), "Y-m-d"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "heureDebut", [], "any", false, false, false, 76), "H:i"), "html", null, true);
            echo "\"
                       ";
            // line 77
            if (twig_get_attribute($this->env, $this->source, $context["evt"], "aUneDateDeFin", [], "any", false, false, false, 77)) {
                echo ",end : \"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "dateFin", [], "any", false, false, false, 77), "Y-m-d"), "html", null, true);
                echo "\"
                         ";
                // line 78
                if (twig_get_attribute($this->env, $this->source, $context["evt"], "aUneHeureDeFin", [], "any", false, false, false, 78)) {
                    // line 79
                    echo "                           +\" ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "heureFin", [], "any", false, false, false, 79), "H:i"), "html", null, true);
                    echo "\"
                         ";
                }
                // line 81
                echo "                       ";
            } else {
                // line 82
                echo "                         ";
                if (twig_get_attribute($this->env, $this->source, $context["evt"], "aUneHeureDeFin", [], "any", false, false, false, 82)) {
                    // line 83
                    echo "                           ,end : \"";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "dateDebut", [], "any", false, false, false, 83), "Y-m-d"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "heureFin", [], "any", false, false, false, 83), "H:i"), "html", null, true);
                    echo "\"
                         ";
                }
                // line 85
                echo "                       ";
            }
            // line 86
            echo "
                       ";
            // line 87
            if (twig_get_attribute($this->env, $this->source, $context["evt"], "aUneDateDeFin", [], "any", false, false, false, 87)) {
                // line 88
                echo "                       ,isMultipleDay: true,
                       multipleDayEvents: [
                         {
                           description : \"";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "titre", [], "any", false, false, false, 91), "html", null, true);
                echo " - Premier jour\",
                           start : \"";
                // line 92
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "dateDebut", [], "any", false, false, false, 92), "Y-m-d"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "heureDebut", [], "any", false, false, false, 92), "H:i"), "html", null, true);
                echo "\",
                           end   : \"";
                // line 93
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "dateDebut", [], "any", false, false, false, 93), "Y-m-d"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "heureFin", [], "any", false, false, false, 93), "H:i"), "html", null, true);
                echo "\"
                         },
                         {
                           description : \"";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "titre", [], "any", false, false, false, 96), "html", null, true);
                echo " - Deuxième jour\",
                           start : \"";
                // line 97
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "dateFin", [], "any", false, false, false, 97), "Y-m-d"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "heureDebut", [], "any", false, false, false, 97), "H:i"), "html", null, true);
                echo "\",
                           end   : \"";
                // line 98
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "dateFin", [], "any", false, false, false, 98), "Y-m-d"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "heureFin", [], "any", false, false, false, 98), "H:i"), "html", null, true);
                echo "\"
                         }
                       ]
                       ";
            }
            // line 102
            echo "
                     }";
            // line 103
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 103)) {
                echo ",";
            }
            // line 104
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
        // line 105
        echo "
                   ],
          eventClick : function(info) { window.open(\"/afficherEvt\"+listeDesc[info.event.id].id,\"_self\"); return false; }
        });

        calendar.render();
      });

    </script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 116
    public function block_corps($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "corps"));

        // line 117
        echo "  ";
        $this->displayParentBlock("corps", $context, $blocks);
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 120
    public function block_laPage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "laPage"));

        // line 121
        echo "<div class='container-fluid fondOpaque' id='partieBlanche' style='width : 95%;height : 100vh; overflow-y : auto; margin-bottom : 25vh;'>
  <div class='row' style='height : 100%;'>
    <div class='col-12' id='monCalendrier' style='height : 90%;'>
    </div>

    <div class='col-12'>
      <br>&nbsp;
    </div>

  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  405 => 121,  398 => 120,  388 => 117,  381 => 116,  365 => 105,  351 => 104,  347 => 103,  344 => 102,  335 => 98,  329 => 97,  325 => 96,  317 => 93,  311 => 92,  307 => 91,  302 => 88,  300 => 87,  297 => 86,  294 => 85,  286 => 83,  283 => 82,  280 => 81,  274 => 79,  272 => 78,  266 => 77,  260 => 76,  255 => 75,  251 => 74,  245 => 71,  242 => 70,  225 => 69,  188 => 34,  174 => 33,  170 => 32,  165 => 31,  160 => 30,  156 => 29,  152 => 28,  148 => 27,  144 => 26,  141 => 25,  134 => 24,  117 => 23,  112 => 20,  110 => 19,  105 => 17,  101 => 16,  97 => 15,  93 => 14,  88 => 12,  83 => 10,  79 => 9,  75 => 8,  71 => 7,  67 => 6,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "calendrier.html.twig", "/var/www/renardenjoue/templates/calendrier.html.twig");
    }
}
