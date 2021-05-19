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

/* @Doctrine/Collector/db.html.twig */
class __TwigTemplate_c579392b231de04e89458c1aeecfef84b18738b792fcafc8c3d78e83b1027a89 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
            'queries' => [$this, 'block_queries'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "isXmlHttpRequest", [], "any", false, false, false, 1)) ? ("@WebProfiler/Profiler/ajax_layout.html.twig") : ("@WebProfiler/Profiler/layout.html.twig")), "@Doctrine/Collector/db.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Doctrine/Collector/db.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 6) > 0) || (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 6) > 0))) {
            // line 7
            echo "
        ";
            // line 8
            $context["profiler_markup_version"] = (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context))) ? (_twig_default_filter(($context["profiler_markup_version"] ?? null), 1)) : (1));
            // line 9
            echo "
        ";
            // line 10
            ob_start(function () { return ''; });
            // line 11
            echo "            ";
            if ((($context["profiler_markup_version"] ?? null) == 1)) {
                // line 12
                echo "
                <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\" />
                    <span class=\"sf-toolbar-value sf-toolbar-status ";
                // line 14
                if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 14) > 50)) {
                    echo "sf-toolbar-status-yellow";
                }
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 14), "html", null, true);
                echo "</span>
                    ";
                // line 15
                if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 15) > 0)) {
                    // line 16
                    echo "                        <span class=\"sf-toolbar-info-piece-additional-detail\">in ";
                    echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, false, 16) * 1000)), "html", null, true);
                    echo " ms</span>
                    ";
                }
                // line 18
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 18) > 0)) {
                    // line 19
                    echo "                        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-red\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 19), "html", null, true);
                    echo "</span>
                    ";
                }
                // line 21
                echo "
            ";
            } else {
                // line 23
                echo "
                ";
                // line 24
                $context["status"] = (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 24) > 0)) ? ("red") : ((((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 24) > 50)) ? ("yellow") : (""))));
                // line 25
                echo "
                ";
                // line 26
                echo twig_include($this->env, $context, "@Doctrine/Collector/icon.svg");
                echo "

                ";
                // line 28
                if (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 28) == 0) && (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 28) > 0))) {
                    // line 29
                    echo "                    <span class=\"sf-toolbar-value\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 29), "html", null, true);
                    echo "</span>
                    <span class=\"sf-toolbar-label\">errors</span>
                ";
                } else {
                    // line 32
                    echo "                    <span class=\"sf-toolbar-value\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 32), "html", null, true);
                    echo "</span>
                    <span class=\"sf-toolbar-info-piece-additional-detail\">
                        <span class=\"sf-toolbar-label\">in</span>
                        <span class=\"sf-toolbar-value\">";
                    // line 35
                    echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, false, 35) * 1000)), "html", null, true);
                    echo "</span>
                        <span class=\"sf-toolbar-label\">ms</span>
                    </span>
                ";
                }
                // line 39
                echo "
            ";
            }
            // line 41
            echo "        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 42
            echo "
        ";
            // line 43
            ob_start(function () { return ''; });
            // line 44
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status ";
            // line 46
            echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 46) > 50)) ? ("sf-toolbar-status-yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 46), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>";
            // line 50
            echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, false, 50) * 1000)), "html", null, true);
            echo " ms</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Invalid entities</b>
                <span class=\"sf-toolbar-status ";
            // line 54
            echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 54) > 0)) ? ("sf-toolbar-status-red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 54), "html", null, true);
            echo "</span>
            </div>
            ";
            // line 56
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheEnabled", [], "any", false, false, false, 56)) {
                // line 57
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache hits</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheHitsCount", [], "any", false, false, false, 59), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache misses</b>
                    <span class=\"sf-toolbar-status ";
                // line 63
                echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheMissesCount", [], "any", false, false, false, 63) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheMissesCount", [], "any", false, false, false, 63), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache puts</b>
                    <span class=\"sf-toolbar-status ";
                // line 67
                echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cachePutsCount", [], "any", false, false, false, 67) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cachePutsCount", [], "any", false, false, false, 67), "html", null, true);
                echo "</span>
                </div>
            ";
            } else {
                // line 70
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Second Level Cache</b>
                    <span class=\"sf-toolbar-status\">disabled</span>
                </div>
            ";
            }
            // line 75
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 76
            echo "
        ";
            // line 77
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => (((isset($context["status"]) || array_key_exists("status", $context))) ? (_twig_default_filter(($context["status"] ?? null), "")) : (""))]);
            echo "

    ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 82
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 83
        echo "    ";
        $context["profiler_markup_version"] = (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context))) ? (_twig_default_filter(($context["profiler_markup_version"] ?? null), 1)) : (1));
        // line 84
        echo "
    ";
        // line 85
        if ((($context["profiler_markup_version"] ?? null) == 1)) {
            // line 86
            echo "
        <span class=\"label\">
            <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
            <strong>Doctrine</strong>
            <span class=\"count\">
                <span>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 91), "html", null, true);
            echo "</span>
                <span>";
            // line 92
            echo twig_escape_filter($this->env, sprintf("%0.0f", (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, false, 92) * 1000)), "html", null, true);
            echo " ms</span>
            </span>
        </span>

    ";
        } else {
            // line 97
            echo "
        <span class=\"label ";
            // line 98
            echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 98) > 0)) ? ("label-status-error") : (""));
            echo " ";
            echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 98) == 0)) ? ("disabled") : (""));
            echo "\">
            <span class=\"icon\">";
            // line 99
            echo twig_include($this->env, $context, "@Doctrine/Collector/icon.svg");
            echo "</span>
            <strong>Doctrine</strong>
            ";
            // line 101
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 101)) {
                // line 102
                echo "                <span class=\"count\">
                    <span>";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 103), "html", null, true);
                echo "</span>
                </span>
            ";
            }
            // line 106
            echo "        </span>

    ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 112
        echo "    ";
        $context["profiler_markup_version"] = (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context))) ? (_twig_default_filter(($context["profiler_markup_version"] ?? null), 1)) : (1));
        // line 113
        echo "
    ";
        // line 114
        if (("explain" == ($context["page"] ?? null))) {
            // line 115
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("Doctrine\\Bundle\\DoctrineBundle\\Controller\\ProfilerController::explainAction", ["token" =>             // line 116
($context["token"] ?? null), "panel" => "db", "connectionName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 118
($context["request"] ?? null), "query", [], "any", false, false, false, 118), "get", [0 => "connection"], "method", false, false, false, 118), "query" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 119
($context["request"] ?? null), "query", [], "any", false, false, false, 119), "get", [0 => "query"], "method", false, false, false, 119)]));
            // line 120
            echo "
    ";
        } else {
            // line 122
            echo "        ";
            $this->displayBlock("queries", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 126
    public function block_queries($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "queries"));

        // line 127
        echo "    <style>
        ";
        // line 128
        if ((($context["profiler_markup_version"] ?? null) == 1)) {
            // line 129
            echo "            .hidden { display: none; }
            .queries-table td, .queries-table th { vertical-align: top; }
            .queries-table td > div { margin-bottom: 6px; }
            .highlight pre { margin: 0; white-space: pre-wrap; }
            .highlight .keyword   { color: #8959A8; font-weight: bold; }
            .highlight .word      { color: #222222; }
            .highlight .variable  { color: #916319; }
            .highlight .symbol    { color: #222222; }
            .highlight .comment   { color: #999999; }
            .highlight .backtick  { color: #718C00; }
            .highlight .string    { color: #718C00; }
            .highlight .number    { color: #F5871F; font-weight: bold; }
            .highlight .error     { color: #C82829; }
        ";
        }
        // line 143
        echo "
        .time-container { position: relative; }
        .time-container .nowrap { position: relative; z-index: 1; text-shadow: 0 0 2px #fff; }
        .time-bar { display: block; position: absolute; top: 0; left: 0; bottom: 0; background: #e0e0e0; }
        .sql-runnable.sf-toggle-content.sf-toggle-visible { display: flex; flex-direction: column; }
        .sql-runnable button { align-self: end; }
    </style>

    ";
        // line 151
        if ((($context["profiler_markup_version"] ?? null) > 1)) {
            // line 152
            echo "        <h2>Query Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 156), "html", null, true);
            echo "</span>
                <span class=\"label\">Database Queries</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "groupedQueryCount", [], "any", false, false, false, 161), "html", null, true);
            echo "</span>
                <span class=\"label\">Different statements</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 166
            echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, false, 166) * 1000)), "html", null, true);
            echo " ms</span>
                <span class=\"label\">Query time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 171
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 171), "html", null, true);
            echo "</span>
                <span class=\"label\">Invalid entities</span>
            </div>

            ";
            // line 175
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheEnabled", [], "any", false, false, false, 175)) {
                // line 176
                echo "                <div class=\"metric\">
                \t<span class=\"value\">";
                // line 177
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheHitsCount", [], "any", false, false, false, 177), "html", null, true);
                echo "</span>
                \t<span class=\"label\">Cache hits</span>
                </div>
                <div class=\"metric\">
                \t<span class=\"value\">";
                // line 181
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheMissesCount", [], "any", false, false, false, 181), "html", null, true);
                echo "</span>
                \t<span class=\"label\">Cache misses</span>
                </div>
                <div class=\"metric\">
                \t<span class=\"value\">";
                // line 185
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cachePutsCount", [], "any", false, false, false, 185), "html", null, true);
                echo "</span>
                \t<span class=\"label\">Cache puts</span>
                </div>
            ";
            }
            // line 189
            echo "        </div>
    ";
        }
        // line 191
        echo "
    ";
        // line 192
        $context["group_queries"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "query", [], "any", false, false, false, 192), "getBoolean", [0 => "group"], "method", false, false, false, 192);
        // line 193
        echo "    ";
        if (($context["group_queries"] ?? null)) {
            // line 194
            echo "        <h2>Grouped Statements</h2>
        <p><a href=\"";
            // line 195
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["panel" => "db", "token" => ($context["token"] ?? null)]), "html", null, true);
            echo "\">Show all queries</a></p>
    ";
        } else {
            // line 197
            echo "        <h2>Queries</h2>
        <p><a href=\"";
            // line 198
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["panel" => "db", "token" => ($context["token"] ?? null), "group" => true]), "html", null, true);
            echo "\">Group similar statements</a></p>
    ";
        }
        // line 200
        echo "
    ";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "queries", [], "any", false, false, false, 201));
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
        foreach ($context['_seq'] as $context["connection"] => $context["queries"]) {
            // line 202
            echo "        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "connections", [], "any", false, false, false, 202)) > 1)) {
                // line 203
                echo "            <h3>";
                echo twig_escape_filter($this->env, $context["connection"], "html", null, true);
                echo " <small>connection</small></h3>
        ";
            }
            // line 205
            echo "
        ";
            // line 206
            if (twig_test_empty($context["queries"])) {
                // line 207
                echo "            <div class=\"empty\">
                <p>No database queries were performed.</p>
            </div>
        ";
            } else {
                // line 211
                echo "            ";
                if (($context["group_queries"] ?? null)) {
                    // line 212
                    echo "                ";
                    $context["queries"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "groupedQueries", [], "any", false, false, false, 212)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["connection"]] ?? null) : null);
                    // line 213
                    echo "            ";
                }
                // line 214
                echo "            <table class=\"alt queries-table\">
                <thead>
                <tr>
                    ";
                // line 217
                if (($context["group_queries"] ?? null)) {
                    // line 218
                    echo "                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 218), "html", null, true);
                    echo "')\" data-sort-direction=\"1\" style=\"cursor: pointer;\">Time<span class=\"text-muted\">&#9660;</span></th>
                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-";
                    // line 219
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 219), "html", null, true);
                    echo "')\" style=\"cursor: pointer;\">Count<span></span></th>
                    ";
                } else {
                    // line 221
                    echo "                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 221), "html", null, true);
                    echo "')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-";
                    // line 222
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 222), "html", null, true);
                    echo "')\" style=\"cursor: pointer;\">Time<span></span></th>
                    ";
                }
                // line 224
                echo "                    <th style=\"width: 100%;\">Info</th>
                </tr>
                </thead>
                <tbody id=\"queries-";
                // line 227
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 227), "html", null, true);
                echo "\">
                    ";
                // line 228
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["queries"]);
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
                foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                    // line 229
                    echo "                        ";
                    $context["i"] = ((($context["group_queries"] ?? null)) ? (twig_get_attribute($this->env, $this->source, $context["query"], "index", [], "any", false, false, false, 229)) : ($context["i"]));
                    // line 230
                    echo "                        <tr id=\"queryNo-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 230), "loop", [], "any", false, false, false, 230), "index", [], "any", false, false, false, 230), "html", null, true);
                    echo "\">
                            ";
                    // line 231
                    if (($context["group_queries"] ?? null)) {
                        // line 232
                        echo "                                <td class=\"time-container\">
                                    <span class=\"time-bar\" style=\"width:";
                        // line 233
                        echo twig_escape_filter($this->env, sprintf("%0.2f", twig_get_attribute($this->env, $this->source, $context["query"], "executionPercent", [], "any", false, false, false, 233)), "html", null, true);
                        echo "%\"></span>
                                    <span class=\"nowrap\">";
                        // line 234
                        echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, $context["query"], "executionMS", [], "any", false, false, false, 234) * 1000)), "html", null, true);
                        echo "&nbsp;ms<br />(";
                        echo twig_escape_filter($this->env, sprintf("%0.2f", twig_get_attribute($this->env, $this->source, $context["query"], "executionPercent", [], "any", false, false, false, 234)), "html", null, true);
                        echo "%)</span>
                                </td>
                                <td class=\"nowrap\">";
                        // line 236
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "count", [], "any", false, false, false, 236), "html", null, true);
                        echo "</td>
                            ";
                    } else {
                        // line 238
                        echo "                                <td class=\"nowrap\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 238), "html", null, true);
                        echo "</td>
                                <td class=\"nowrap\">";
                        // line 239
                        echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, $context["query"], "executionMS", [], "any", false, false, false, 239) * 1000)), "html", null, true);
                        echo "&nbsp;ms</td>
                            ";
                    }
                    // line 241
                    echo "                            <td>
                                ";
                    // line 242
                    echo $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->prettifySql(twig_get_attribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 242));
                    echo "

                                <div>
                                    <strong class=\"font-normal text-small\">Parameters</strong>: ";
                    // line 245
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "params", [], "any", false, false, false, 245), 2);
                    echo "
                                </div>

                                <div class=\"text-small font-normal\">
                                    <a href=\"#\" ";
                    // line 249
                    echo (((($context["profiler_markup_version"] ?? null) == 1)) ? ("onclick=\"return toggleRunnableQuery(this);\"") : (""));
                    echo " class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 249), "loop", [], "any", false, false, false, 249), "index", [], "any", false, false, false, 249), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide formatted query\">View formatted query</a>

                                    ";
                    // line 251
                    if (twig_get_attribute($this->env, $this->source, $context["query"], "runnable", [], "any", false, false, false, 251)) {
                        // line 252
                        echo "                                        &nbsp;&nbsp;
                                        <a href=\"#\" ";
                        // line 253
                        echo (((($context["profiler_markup_version"] ?? null) == 1)) ? ("onclick=\"return toggleRunnableQuery(this);\"") : (""));
                        echo " class=\"sf-toggle link-inverse\" data-toggle-selector=\"#original-query-";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 253), "loop", [], "any", false, false, false, 253), "index", [], "any", false, false, false, 253), "html", null, true);
                        echo "\" data-toggle-alt-content=\"Hide runnable query\">View runnable query</a>
                                    ";
                    }
                    // line 255
                    echo "
                                    ";
                    // line 256
                    if (twig_get_attribute($this->env, $this->source, $context["query"], "explainable", [], "any", false, false, false, 256)) {
                        // line 257
                        echo "                                        &nbsp;&nbsp;
                                        <a class=\"link-inverse\" href=\"";
                        // line 258
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["panel" => "db", "token" => ($context["token"] ?? null), "page" => "explain", "connection" => $context["connection"], "query" => $context["i"]]), "html", null, true);
                        echo "\" onclick=\"return explain(this);\" data-target-id=\"explain-";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 258), "loop", [], "any", false, false, false, 258), "index", [], "any", false, false, false, 258), "html", null, true);
                        echo "\">Explain query</a>
                                    ";
                    }
                    // line 260
                    echo "
                                    ";
                    // line 261
                    if (twig_get_attribute($this->env, $this->source, $context["query"], "backtrace", [], "any", true, true, false, 261)) {
                        // line 262
                        echo "                                        &nbsp;&nbsp;
                                        <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#backtrace-";
                        // line 263
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 263), "loop", [], "any", false, false, false, 263), "index", [], "any", false, false, false, 263), "html", null, true);
                        echo "\" data-toggle-alt-content=\"Hide query backtrace\">View query backtrace</a>
                                    ";
                    }
                    // line 265
                    echo "                                </div>

                                <div id=\"formatted-query-";
                    // line 267
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 267), "loop", [], "any", false, false, false, 267), "index", [], "any", false, false, false, 267), "html", null, true);
                    echo "\" class=\"sql-runnable hidden\">
                                    ";
                    // line 268
                    echo $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatSql(twig_get_attribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 268), true);
                    echo "
                                    <button class=\"btn btn-sm\" data-clipboard-text=\"";
                    // line 269
                    echo twig_escape_filter($this->env, $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatSql(twig_get_attribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 269), false), "html_attr");
                    echo "\">Copy</button>
                                </div>

                                ";
                    // line 272
                    if (twig_get_attribute($this->env, $this->source, $context["query"], "runnable", [], "any", false, false, false, 272)) {
                        // line 273
                        echo "                                    <div id=\"original-query-";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 273), "loop", [], "any", false, false, false, 273), "index", [], "any", false, false, false, 273), "html", null, true);
                        echo "\" class=\"sql-runnable hidden\">
                                        ";
                        // line 274
                        $context["runnable_sql"] = $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->replaceQueryParameters((twig_get_attribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 274) . ";"), twig_get_attribute($this->env, $this->source, $context["query"], "params", [], "any", false, false, false, 274));
                        // line 275
                        echo "                                        ";
                        echo $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->prettifySql(($context["runnable_sql"] ?? null));
                        echo "
                                        <button class=\"btn btn-sm\" data-clipboard-text=\"";
                        // line 276
                        echo twig_escape_filter($this->env, ($context["runnable_sql"] ?? null), "html_attr");
                        echo "\">Copy</button>
                                    </div>
                                ";
                    }
                    // line 279
                    echo "
                                ";
                    // line 280
                    if (twig_get_attribute($this->env, $this->source, $context["query"], "explainable", [], "any", false, false, false, 280)) {
                        // line 281
                        echo "                                    <div id=\"explain-";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 281), "loop", [], "any", false, false, false, 281), "index", [], "any", false, false, false, 281), "html", null, true);
                        echo "\" class=\"sql-explain\"></div>
                                ";
                    }
                    // line 283
                    echo "
                                ";
                    // line 284
                    if (twig_get_attribute($this->env, $this->source, $context["query"], "backtrace", [], "any", true, true, false, 284)) {
                        // line 285
                        echo "                                    <div id=\"backtrace-";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 285), "loop", [], "any", false, false, false, 285), "index", [], "any", false, false, false, 285), "html", null, true);
                        echo "\" class=\"hidden\">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th scope=\"col\">#</th>
                                                    <th scope=\"col\">File/Call</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
                        // line 294
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, false, false, 294));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                            // line 295
                            echo "                                                    <tr>
                                                        <td>";
                            // line 296
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 296), "html", null, true);
                            echo "</td>
                                                        <td>
                                                            <span class=\"text-small\">
                                                                ";
                            // line 299
                            $context["line_number"] = ((twig_get_attribute($this->env, $this->source, $context["trace"], "line", [], "any", true, true, false, 299)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["trace"], "line", [], "any", false, false, false, 299), 1)) : (1));
                            // line 300
                            echo "                                                                ";
                            if (twig_get_attribute($this->env, $this->source, $context["trace"], "file", [], "any", true, true, false, 300)) {
                                // line 301
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 301), ($context["line_number"] ?? null)), "html", null, true);
                                echo "\">
                                                                ";
                            }
                            // line 303
                            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["trace"], "class", [], "any", true, true, false, 303)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["trace"], "class", [], "any", false, false, false, 303))) : ("")) . ((twig_get_attribute($this->env, $this->source, $context["trace"], "class", [], "any", true, true, false, 303)) ? (((twig_get_attribute($this->env, $this->source, $context["trace"], "type", [], "any", true, true, false, 303)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["trace"], "type", [], "any", false, false, false, 303), "::")) : ("::"))) : (""))), "html", null, true);
                            // line 304
                            echo "<span class=\"status-warning\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trace"], "function", [], "any", false, false, false, 304), "html", null, true);
                            echo "</span>
                                                                ";
                            // line 305
                            if (twig_get_attribute($this->env, $this->source, $context["trace"], "file", [], "any", true, true, false, 305)) {
                                // line 306
                                echo "                                                                    </a>
                                                                ";
                            }
                            // line 308
                            echo "                                                                (line ";
                            echo twig_escape_filter($this->env, ($context["line_number"] ?? null), "html", null, true);
                            echo ")
                                                            </span>
                                                        </td>
                                                    </tr>
                                                ";
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 313
                        echo "                                            </tbody>
                                        </table>
                                    </div>
                                ";
                    }
                    // line 317
                    echo "                            </td>
                        </tr>
                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 320
                echo "                </tbody>
            </table>
        ";
            }
            // line 323
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['connection'], $context['queries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 324
        echo "
    <h2>Database Connections</h2>

    ";
        // line 327
        if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "connections", [], "any", false, false, false, 327)) {
            // line 328
            echo "        <div class=\"empty\">
            <p>There are no configured database connections.</p>
        </div>
    ";
        } else {
            // line 332
            echo "        ";
            echo twig_call_macro($macros["helper"], "macro_render_simple_table", ["Name", "Service", twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "connections", [], "any", false, false, false, 332)], 332, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 334
        echo "
    <h2>Entity Managers</h2>

    ";
        // line 337
        if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "managers", [], "any", false, false, false, 337)) {
            // line 338
            echo "        <div class=\"empty\">
            <p>There are no configured entity managers.</p>
        </div>
    ";
        } else {
            // line 342
            echo "        ";
            echo twig_call_macro($macros["helper"], "macro_render_simple_table", ["Name", "Service", twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "managers", [], "any", false, false, false, 342)], 342, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 344
        echo "
    <h2>Second Level Cache</h2>

    ";
        // line 347
        if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheEnabled", [], "any", false, false, false, 347)) {
            // line 348
            echo "        <div class=\"empty\">
            <p>Second Level Cache is not enabled.</p>
        </div>
    ";
        } else {
            // line 352
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheCounts", [], "any", false, false, false, 352)) {
                // line 353
                echo "            <div class=\"empty\">
                <p>Second level cache information is not available.</p>
            </div>
        ";
            } else {
                // line 357
                echo "            ";
                if ((($context["profiler_markup_version"] ?? null) == 1)) {
                    // line 358
                    echo "                ";
                    echo twig_call_macro($macros["helper"], "macro_render_simple_table", ["Key", "Value", twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheCounts", [], "any", false, false, false, 358)], 358, $context, $this->getSourceContext());
                    echo "
            ";
                } else {
                    // line 360
                    echo "                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">";
                    // line 362
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheCounts", [], "any", false, false, false, 362), "hits", [], "any", false, false, false, 362), "html", null, true);
                    echo "</span>
                        <span class=\"label\">Hits</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
                    // line 367
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheCounts", [], "any", false, false, false, 367), "misses", [], "any", false, false, false, 367), "html", null, true);
                    echo "</span>
                        <span class=\"label\">Misses</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
                    // line 372
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheCounts", [], "any", false, false, false, 372), "puts", [], "any", false, false, false, 372), "html", null, true);
                    echo "</span>
                        <span class=\"label\">Puts</span>
                    </div>
                </div>
            ";
                }
                // line 377
                echo "
            ";
                // line 378
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", [], "any", false, false, false, 378), "hits", [], "any", false, false, false, 378)) {
                    // line 379
                    echo "                <h3>Number of cache hits</h3>
                ";
                    // line 380
                    echo twig_call_macro($macros["helper"], "macro_render_simple_table", ["Region", "Hits", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", [], "any", false, false, false, 380), "hits", [], "any", false, false, false, 380)], 380, $context, $this->getSourceContext());
                    echo "
            ";
                }
                // line 382
                echo "
            ";
                // line 383
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", [], "any", false, false, false, 383), "misses", [], "any", false, false, false, 383)) {
                    // line 384
                    echo "                <h3>Number of cache misses</h3>
                ";
                    // line 385
                    echo twig_call_macro($macros["helper"], "macro_render_simple_table", ["Region", "Misses", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", [], "any", false, false, false, 385), "misses", [], "any", false, false, false, 385)], 385, $context, $this->getSourceContext());
                    echo "
            ";
                }
                // line 387
                echo "
            ";
                // line 388
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", [], "any", false, false, false, 388), "puts", [], "any", false, false, false, 388)) {
                    // line 389
                    echo "                <h3>Number of cache puts</h3>
                ";
                    // line 390
                    echo twig_call_macro($macros["helper"], "macro_render_simple_table", ["Region", "Puts", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", [], "any", false, false, false, 390), "puts", [], "any", false, false, false, 390)], 390, $context, $this->getSourceContext());
                    echo "
            ";
                }
                // line 392
                echo "        ";
            }
            // line 393
            echo "    ";
        }
        // line 394
        echo "
    ";
        // line 395
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "entities", [], "any", false, false, false, 395)) > 0)) {
            // line 396
            echo "        <h2>Entities Mapping</h2>

        ";
            // line 398
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "entities", [], "any", false, false, false, 398));
            foreach ($context['_seq'] as $context["manager"] => $context["classes"]) {
                // line 399
                echo "            ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "managers", [], "any", false, false, false, 399)) > 1)) {
                    // line 400
                    echo "                <h3>";
                    echo twig_escape_filter($this->env, $context["manager"], "html", null, true);
                    echo " <small>entity manager</small></h3>
            ";
                }
                // line 402
                echo "
            ";
                // line 403
                if (twig_test_empty($context["classes"])) {
                    // line 404
                    echo "                <div class=\"empty\">
                    <p>No loaded entities.</p>
                </div>
            ";
                } else {
                    // line 408
                    echo "                <table>
                    <thead>
                    <tr>
                        <th scope=\"col\">Class</th>
                        <th scope=\"col\">Mapping errors</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
                    // line 416
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["classes"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                        // line 417
                        echo "                        ";
                        $context["contains_errors"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", [], "any", false, true, false, 417), $context["manager"], [], "array", true, true, false, 417) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", [], "any", false, true, false, 417), $context["manager"], [], "array", false, true, false, 417), $context["class"], [], "array", true, true, false, 417));
                        // line 418
                        echo "                        <tr class=\"";
                        echo ((($context["contains_errors"] ?? null)) ? ("status-error") : (""));
                        echo "\">
                            <td>";
                        // line 419
                        echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                        echo "</td>
                            <td class=\"font-normal\">
                                ";
                        // line 421
                        if (($context["contains_errors"] ?? null)) {
                            // line 422
                            echo "                                    <ul>
                                        ";
                            // line 423
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", [], "any", false, false, false, 423)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["manager"]] ?? null) : null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["class"]] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                                // line 424
                                echo "                                            <li>";
                                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                                echo "</li>
                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 426
                            echo "                                    </ul>
                                ";
                        } else {
                            // line 428
                            echo "                                    No errors.
                                ";
                        }
                        // line 430
                        echo "                            </td>
                        </tr>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 433
                    echo "                    </tbody>
                </table>
            ";
                }
                // line 436
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['manager'], $context['classes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 437
            echo "    ";
        }
        // line 438
        echo "
    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var targetId = link.getAttribute('data-target-id');
            var targetElement = document.getElementById(targetId);

            if (targetElement.style.display != 'block') {
                Sfjs.load(targetId, link.href, null, function(xhr, el) {
                    el.innerHTML = 'An error occurred while loading the query explanation.';
                });

                targetElement.style.display = 'block';
                link.innerHTML = 'Hide query explanation';
            } else {
                targetElement.style.display = 'none';
                link.innerHTML = 'Explain query';
            }

            return false;
        }

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '<span class=\"text-muted\">&#9650;</span>' : '<span class=\"text-muted\">&#9660;</span>';

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

        ";
        // line 496
        if ((($context["profiler_markup_version"] ?? null) == 1)) {
            // line 497
            echo "            function toggleRunnableQuery(target) {
                var targetSelector = target.getAttribute('data-toggle-selector');
                var targetDataAltContent = target.getAttribute('data-toggle-alt-content');
                var targetElement = document.querySelector(targetSelector);
                target.setAttribute('data-toggle-alt-content', target.innerHTML);

                if (targetElement.style.display != 'block') {
                    targetElement.style.display = 'block';
                    target.innerHTML = targetDataAltContent;
                } else {
                    targetElement.style.display = 'none';
                    target.innerHTML = targetDataAltContent;
                }

                return false;
            }
        ";
        }
        // line 514
        echo "
        document.querySelectorAll('[data-clipboard-text]').forEach(function(button) {
            button.addEventListener('click', function() {
                navigator.clipboard.writeText(button.getAttribute('data-clipboard-text'));
            })
        });

        //]]></script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 524
    public function macro_render_simple_table($__label1__ = null, $__label2__ = null, $__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label1" => $__label1__,
            "label2" => $__label2__,
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_simple_table"));

            // line 525
            echo "    <table>
        <thead>
        <tr>
            <th scope=\"col\" class=\"key\">";
            // line 528
            echo twig_escape_filter($this->env, ($context["label1"] ?? null), "html", null, true);
            echo "</th>
            <th scope=\"col\">";
            // line 529
            echo twig_escape_filter($this->env, ($context["label2"] ?? null), "html", null, true);
            echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 533
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 534
                echo "            <tr>
                <th scope=\"row\">";
                // line 535
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</th>
                <td>";
                // line 536
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 539
            echo "        </tbody>
    </table>
";
            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@Doctrine/Collector/db.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1278 => 539,  1269 => 536,  1265 => 535,  1262 => 534,  1258 => 533,  1251 => 529,  1247 => 528,  1242 => 525,  1224 => 524,  1209 => 514,  1190 => 497,  1188 => 496,  1128 => 438,  1125 => 437,  1119 => 436,  1114 => 433,  1106 => 430,  1102 => 428,  1098 => 426,  1089 => 424,  1085 => 423,  1082 => 422,  1080 => 421,  1075 => 419,  1070 => 418,  1067 => 417,  1063 => 416,  1053 => 408,  1047 => 404,  1045 => 403,  1042 => 402,  1036 => 400,  1033 => 399,  1029 => 398,  1025 => 396,  1023 => 395,  1020 => 394,  1017 => 393,  1014 => 392,  1009 => 390,  1006 => 389,  1004 => 388,  1001 => 387,  996 => 385,  993 => 384,  991 => 383,  988 => 382,  983 => 380,  980 => 379,  978 => 378,  975 => 377,  967 => 372,  959 => 367,  951 => 362,  947 => 360,  941 => 358,  938 => 357,  932 => 353,  929 => 352,  923 => 348,  921 => 347,  916 => 344,  910 => 342,  904 => 338,  902 => 337,  897 => 334,  891 => 332,  885 => 328,  883 => 327,  878 => 324,  864 => 323,  859 => 320,  843 => 317,  837 => 313,  817 => 308,  813 => 306,  811 => 305,  806 => 304,  804 => 303,  798 => 301,  795 => 300,  793 => 299,  787 => 296,  784 => 295,  767 => 294,  752 => 285,  750 => 284,  747 => 283,  739 => 281,  737 => 280,  734 => 279,  728 => 276,  723 => 275,  721 => 274,  714 => 273,  712 => 272,  706 => 269,  702 => 268,  696 => 267,  692 => 265,  685 => 263,  682 => 262,  680 => 261,  677 => 260,  668 => 258,  665 => 257,  663 => 256,  660 => 255,  651 => 253,  648 => 252,  646 => 251,  637 => 249,  630 => 245,  624 => 242,  621 => 241,  616 => 239,  611 => 238,  606 => 236,  599 => 234,  595 => 233,  592 => 232,  590 => 231,  583 => 230,  580 => 229,  563 => 228,  559 => 227,  554 => 224,  549 => 222,  544 => 221,  539 => 219,  534 => 218,  532 => 217,  527 => 214,  524 => 213,  521 => 212,  518 => 211,  512 => 207,  510 => 206,  507 => 205,  501 => 203,  498 => 202,  481 => 201,  478 => 200,  473 => 198,  470 => 197,  465 => 195,  462 => 194,  459 => 193,  457 => 192,  454 => 191,  450 => 189,  443 => 185,  436 => 181,  429 => 177,  426 => 176,  424 => 175,  417 => 171,  409 => 166,  401 => 161,  393 => 156,  387 => 152,  385 => 151,  375 => 143,  359 => 129,  357 => 128,  354 => 127,  347 => 126,  336 => 122,  332 => 120,  330 => 119,  329 => 118,  328 => 116,  326 => 115,  324 => 114,  321 => 113,  318 => 112,  311 => 111,  301 => 106,  295 => 103,  292 => 102,  290 => 101,  285 => 99,  279 => 98,  276 => 97,  268 => 92,  264 => 91,  257 => 86,  255 => 85,  252 => 84,  249 => 83,  242 => 82,  231 => 77,  228 => 76,  225 => 75,  218 => 70,  210 => 67,  201 => 63,  194 => 59,  190 => 57,  188 => 56,  181 => 54,  174 => 50,  165 => 46,  161 => 44,  159 => 43,  156 => 42,  153 => 41,  149 => 39,  142 => 35,  135 => 32,  128 => 29,  126 => 28,  121 => 26,  118 => 25,  116 => 24,  113 => 23,  109 => 21,  103 => 19,  100 => 18,  94 => 16,  92 => 15,  84 => 14,  80 => 12,  77 => 11,  75 => 10,  72 => 9,  70 => 8,  67 => 7,  64 => 6,  57 => 5,  50 => 1,  48 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Doctrine/Collector/db.html.twig", "/var/www/renardenjoue/vendor/doctrine/doctrine-bundle/Resources/views/Collector/db.html.twig");
    }
}
