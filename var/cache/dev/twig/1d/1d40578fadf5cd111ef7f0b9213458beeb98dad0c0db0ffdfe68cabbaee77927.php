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

/* /calendrier.html.twig */
class __TwigTemplate_d78ca418fe17f53fb0725e00c0e1a2428292bce4c2d826a63b2092915dd78e6c extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/calendrier.html.twig"));

        $this->parent = $this->loadTemplate("main.html.twig", "/calendrier.html.twig", 1);
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

    <link href='";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["css_path"]) || array_key_exists("css_path", $context) ? $context["css_path"] : (function () { throw new RuntimeError('Variable "css_path" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "/calendrier.css' rel='stylesheet' />
    <link href='";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["fc_path"]) || array_key_exists("fc_path", $context) ? $context["fc_path"] : (function () { throw new RuntimeError('Variable "fc_path" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "core/main.css' rel='stylesheet' />
    <link href='";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["fc_path"]) || array_key_exists("fc_path", $context) ? $context["fc_path"] : (function () { throw new RuntimeError('Variable "fc_path" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "bootstrap/main.css' rel='stylesheet' />
    <link href='";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["fc_path"]) || array_key_exists("fc_path", $context) ? $context["fc_path"] : (function () { throw new RuntimeError('Variable "fc_path" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "daygrid/main.css' rel='stylesheet' />
    <link href='";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["fc_path"]) || array_key_exists("fc_path", $context) ? $context["fc_path"] : (function () { throw new RuntimeError('Variable "fc_path" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "list/main.css' rel='stylesheet' />

    <script src='";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["js_path"]) || array_key_exists("js_path", $context) ? $context["js_path"] : (function () { throw new RuntimeError('Variable "js_path" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "/calendrier.js'></script>

    <script src='";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["fc_path"]) || array_key_exists("fc_path", $context) ? $context["fc_path"] : (function () { throw new RuntimeError('Variable "fc_path" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "core/main.js'></script>
    <script src='";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["fc_path"]) || array_key_exists("fc_path", $context) ? $context["fc_path"] : (function () { throw new RuntimeError('Variable "fc_path" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "bootstrap/main.js'></script>
    <script src='";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["fc_path"]) || array_key_exists("fc_path", $context) ? $context["fc_path"] : (function () { throw new RuntimeError('Variable "fc_path" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "daygrid/main.js'></script>
    <script src='";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["fc_path"]) || array_key_exists("fc_path", $context) ? $context["fc_path"] : (function () { throw new RuntimeError('Variable "fc_path" does not exist.', 17, $this->source); })()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["listeDates"]) || array_key_exists("listeDates", $context) ? $context["listeDates"] : (function () { throw new RuntimeError('Variable "listeDates" does not exist.', 23, $this->source); })()));
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
      var lesJours = [\"Dimanche\",\"Lundi\",\"Mardi\",\"Mercredi\",\"Jeudi\",\"Vendredi\",\"Samedi\"];
      var lesMois = [\"janvier\",\"février\",\"mars\",\"avril\",\"mai\",\"juin\",\"juillet\",\"août\",\"septembre\",\"octobre\",\"novembre\",\"décembre\"];
      var ceMoisCi = lesMois[new Date().getMonth()];

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('monCalendrier');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: [ 'dayGrid', 'bootstrap', 'list' ],
          height : 500,
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
          events : [";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeDates"]) || array_key_exists("listeDates", $context) ? $context["listeDates"] : (function () { throw new RuntimeError('Variable "listeDates" does not exist.', 62, $this->source); })()));
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
            // line 63
            echo "                     {
                       id : ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo ",
                       allDay : false,
                       textColor : '#FFFFFF',
                       ";
            // line 67
            if ((twig_get_attribute($this->env, $this->source, $context["evt"], "titre", [], "any", false, false, false, 67) == "Les renards jouent")) {
                echo "backgroundColor: '#ff0000',";
            }
            // line 68
            echo "                       title : \"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "heureDebut", [], "any", false, false, false, 68), "H"), "html", null, true);
            echo "h";
            if (twig_get_attribute($this->env, $this->source, $context["evt"], "aUneHeureDeFin", [], "any", false, false, false, 68)) {
                echo "-";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "heureFin", [], "any", false, false, false, 68), "H"), "html", null, true);
                echo "h";
            }
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "titre", [], "any", false, false, false, 68), "html", null, true);
            echo "\",
                       start : \"";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "dateDebut", [], "any", false, false, false, 69), "Y-m-d"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "heureDebut", [], "any", false, false, false, 69), "H:i"), "html", null, true);
            echo "\"
                       ";
            // line 70
            if (twig_get_attribute($this->env, $this->source, $context["evt"], "aUneDateDeFin", [], "any", false, false, false, 70)) {
                echo ",end : \"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "dateFin", [], "any", false, false, false, 70), "Y-m-d"), "html", null, true);
                echo "\"
                         ";
                // line 71
                if (twig_get_attribute($this->env, $this->source, $context["evt"], "aUneHeureDeFin", [], "any", false, false, false, 71)) {
                    // line 72
                    echo "                           +\" ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "heureFin", [], "any", false, false, false, 72), "H:i"), "html", null, true);
                    echo "\"
                         ";
                }
                // line 74
                echo "                       ";
            } else {
                // line 75
                echo "                         ";
                if (twig_get_attribute($this->env, $this->source, $context["evt"], "aUneHeureDeFin", [], "any", false, false, false, 75)) {
                    // line 76
                    echo "                           ,end : \"";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "dateDebut", [], "any", false, false, false, 76), "Y-m-d"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "heureFin", [], "any", false, false, false, 76), "H:i"), "html", null, true);
                    echo "\"
                         ";
                }
                // line 78
                echo "                       ";
            }
            // line 79
            echo "
                       ";
            // line 80
            if (twig_get_attribute($this->env, $this->source, $context["evt"], "aUneDateDeFin", [], "any", false, false, false, 80)) {
                // line 81
                echo "                       ,isMultipleDay: true,
                       multipleDayEvents: [
                         {
                           description : \"";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "titre", [], "any", false, false, false, 84), "html", null, true);
                echo " - Premier jour\",
                           start : \"";
                // line 85
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "dateDebut", [], "any", false, false, false, 85), "Y-m-d"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "heureDebut", [], "any", false, false, false, 85), "H:i"), "html", null, true);
                echo "\",
                           end   : \"";
                // line 86
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "dateDebut", [], "any", false, false, false, 86), "Y-m-d"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "heureFin", [], "any", false, false, false, 86), "H:i"), "html", null, true);
                echo "\"
                         },
                         {
                           description : \"";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "titre", [], "any", false, false, false, 89), "html", null, true);
                echo " - Deuxième jour\",
                           start : \"";
                // line 90
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "dateFin", [], "any", false, false, false, 90), "Y-m-d"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "heureDebut", [], "any", false, false, false, 90), "H:i"), "html", null, true);
                echo "\",
                           end   : \"";
                // line 91
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "dateFin", [], "any", false, false, false, 91), "Y-m-d"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evt"], "heureFin", [], "any", false, false, false, 91), "H:i"), "html", null, true);
                echo "\"
                         }
                       ]
                       ";
            }
            // line 95
            echo "
                     }";
            // line 96
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 96)) {
                echo ",";
            }
            // line 97
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
        // line 98
        echo "
                   ],
          eventClick : function(info) { detailEvt(listeDesc[info.event.id]); }
          /*,
          columnHeaderText: function(d) { return lesJours[d.getDay()]; }*/ // plus besoin de ça avec le parametre locale
        });

        calendar.render();
      });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 111
    public function block_corps($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "corps"));

        // line 112
        echo "  ";
        $this->displayParentBlock("corps", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 115
    public function block_laPage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "laPage"));

        // line 116
        echo "<div class=\"container-fluid fondOpaque ascenseur\">
  <div class=\"row\">

    <div class=\"col-12\" id='monCalendrier' style=\"margin-bottom : 5px;\">
    </div>

    <div class=\"col-4\">
        <div id='titreEvt'>
          ";
        // line 124
        if ((twig_length_filter($this->env, (isset($context["listeDates"]) || array_key_exists("listeDates", $context) ? $context["listeDates"] : (function () { throw new RuntimeError('Variable "listeDates" does not exist.', 124, $this->source); })())) == 0)) {
            // line 125
            echo "          Aucun évènement ce mois-ci ";
            // line 126
            echo "          ";
        } elseif ((twig_length_filter($this->env, (isset($context["listeDates"]) || array_key_exists("listeDates", $context) ? $context["listeDates"] : (function () { throw new RuntimeError('Variable "listeDates" does not exist.', 126, $this->source); })())) == 1)) {
            // line 127
            echo "          ";
            $this->loadTemplate("_detailEvt.html.twig", "/calendrier.html.twig", 127)->display($context);
            // line 128
            echo "          ";
            // line 132
            echo "          ";
        }
        // line 133
        echo "        </div>
        <div id='dateEvt'></div>
    </div>
    <div class=\"col-7 offset-1\" id='descEvt'>
    </div>

  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/calendrier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 133,  424 => 132,  422 => 128,  419 => 127,  416 => 126,  414 => 125,  412 => 124,  402 => 116,  395 => 115,  385 => 112,  378 => 111,  360 => 98,  346 => 97,  342 => 96,  339 => 95,  330 => 91,  324 => 90,  320 => 89,  312 => 86,  306 => 85,  302 => 84,  297 => 81,  295 => 80,  292 => 79,  289 => 78,  281 => 76,  278 => 75,  275 => 74,  269 => 72,  267 => 71,  261 => 70,  255 => 69,  242 => 68,  238 => 67,  232 => 64,  229 => 63,  212 => 62,  180 => 32,  166 => 31,  162 => 30,  157 => 29,  152 => 28,  148 => 27,  144 => 26,  141 => 25,  134 => 24,  117 => 23,  112 => 20,  110 => 19,  105 => 17,  101 => 16,  97 => 15,  93 => 14,  88 => 12,  83 => 10,  79 => 9,  75 => 8,  71 => 7,  67 => 6,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"main.html.twig\" %}

{% block entete %}
  {{ parent() }}

    <link href='{{ css_path }}/calendrier.css' rel='stylesheet' />
    <link href='{{ fc_path }}core/main.css' rel='stylesheet' />
    <link href='{{ fc_path }}bootstrap/main.css' rel='stylesheet' />
    <link href='{{ fc_path }}daygrid/main.css' rel='stylesheet' />
    <link href='{{ fc_path }}list/main.css' rel='stylesheet' />

    <script src='{{ js_path }}/calendrier.js'></script>

    <script src='{{ fc_path }}core/main.js'></script>
    <script src='{{ fc_path }}bootstrap/main.js'></script>
    <script src='{{ fc_path }}daygrid/main.js'></script>
    <script src='{{ fc_path }}list/main.js'></script>
    <script>
      {% set unEvt = null %}

      var listeDesc =
      {
        {% for evt in listeDates %}
          {% if loop.first %} {% set unEvt = evt %} {% endif %}

          {{evt.id}} : {
                         \"titre\": \"{{evt.titre}}\",
                         \"desc\" : \"{{ evt.description|replace({'\\n':'<br>','\\r':'','\"':'&quot;'})|raw }}\",
                         \"periode\" : \"{{ evt.periode|replace({'\\n':'<br>','\\r':''})|raw }}\"
              }{% if (not loop.last) %},{% endif %}
        {% endfor %}

      };
      var lesJours = [\"Dimanche\",\"Lundi\",\"Mardi\",\"Mercredi\",\"Jeudi\",\"Vendredi\",\"Samedi\"];
      var lesMois = [\"janvier\",\"février\",\"mars\",\"avril\",\"mai\",\"juin\",\"juillet\",\"août\",\"septembre\",\"octobre\",\"novembre\",\"décembre\"];
      var ceMoisCi = lesMois[new Date().getMonth()];

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('monCalendrier');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: [ 'dayGrid', 'bootstrap', 'list' ],
          height : 500,
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
          events : [{% for evt in listeDates %}
                     {
                       id : {{evt.id}},
                       allDay : false,
                       textColor : '#FFFFFF',
                       {% if evt.titre==\"Les renards jouent\" %}backgroundColor: '#ff0000',{% endif %}
                       title : \"{{evt.heureDebut|date('H')}}h{% if evt.aUneHeureDeFin %}-{{evt.heureFin|date('H')}}h{% endif %} {{evt.titre}}\",
                       start : \"{{evt.dateDebut|date('Y-m-d')}} {{evt.heureDebut|date('H:i')}}\"
                       {% if evt.aUneDateDeFin %},end : \"{{evt.dateFin|date('Y-m-d')}}\"
                         {% if evt.aUneHeureDeFin %}
                           +\" {{evt.heureFin|date('H:i')}}\"
                         {% endif %}
                       {% else %}
                         {% if evt.aUneHeureDeFin %}
                           ,end : \"{{evt.dateDebut|date('Y-m-d')}} {{evt.heureFin|date('H:i')}}\"
                         {% endif %}
                       {% endif %}

                       {% if evt.aUneDateDeFin %}
                       ,isMultipleDay: true,
                       multipleDayEvents: [
                         {
                           description : \"{{evt.titre}} - Premier jour\",
                           start : \"{{evt.dateDebut|date('Y-m-d')}} {{evt.heureDebut|date('H:i')}}\",
                           end   : \"{{evt.dateDebut|date('Y-m-d')}} {{evt.heureFin|date('H:i')}}\"
                         },
                         {
                           description : \"{{evt.titre}} - Deuxième jour\",
                           start : \"{{evt.dateFin|date('Y-m-d')}} {{evt.heureDebut|date('H:i')}}\",
                           end   : \"{{evt.dateFin|date('Y-m-d')}} {{evt.heureFin|date('H:i')}}\"
                         }
                       ]
                       {% endif %}

                     }{% if (not loop.last) %},{% endif %}
                   {% endfor %}

                   ],
          eventClick : function(info) { detailEvt(listeDesc[info.event.id]); }
          /*,
          columnHeaderText: function(d) { return lesJours[d.getDay()]; }*/ // plus besoin de ça avec le parametre locale
        });

        calendar.render();
      });

    </script>
{% endblock %}

{% block corps %}
  {{ parent() }}
{% endblock %}

{% block laPage %}
<div class=\"container-fluid fondOpaque ascenseur\">
  <div class=\"row\">

    <div class=\"col-12\" id='monCalendrier' style=\"margin-bottom : 5px;\">
    </div>

    <div class=\"col-4\">
        <div id='titreEvt'>
          {% if listeDates|length == 0 %}
          Aucun évènement ce mois-ci {# Pb : cette liste contient tous les evts, pas juste ceux de ce mois #}
          {% elseif listeDates|length == 1 %}
          {% include(\"_detailEvt.html.twig\") %}
          {#}
          {% else %}
          {{listeDates|length}} évènements ce mois-ci !
          #}
          {% endif %}
        </div>
        <div id='dateEvt'></div>
    </div>
    <div class=\"col-7 offset-1\" id='descEvt'>
    </div>

  </div>
</div>
{% endblock %}", "/calendrier.html.twig", "/var/www/renardenjoue/templates/calendrier.html.twig");
    }
}
