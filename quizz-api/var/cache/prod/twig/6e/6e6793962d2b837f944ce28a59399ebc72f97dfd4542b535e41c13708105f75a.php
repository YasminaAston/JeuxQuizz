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

/* @DoctrineMigrations/Collector/migrations.html.twig */
class __TwigTemplate_59dd7a2ea7238c4995ae7f013c71144ad39412a92707f6cce68fda7ea2767a7d extends Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@DoctrineMigrations/Collector/migrations.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $context["unavailable_migrations"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 6), "unavailable_migrations", [], "any", false, false, false, 6));
        // line 7
        echo "    ";
        $context["new_migrations"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 7), "new_migrations", [], "any", false, false, false, 7));
        // line 8
        echo "    ";
        if (((1 === twig_compare(($context["unavailable_migrations"] ?? null), 0)) || (1 === twig_compare(($context["new_migrations"] ?? null), 0)))) {
            // line 9
            echo "        ";
            $context["executed_migrations"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 9), "executed_migrations", [], "any", false, false, false, 9));
            // line 10
            echo "        ";
            $context["available_migrations"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 10), "available_migrations", [], "any", false, false, false, 10));
            // line 11
            echo "        ";
            $context["status_color"] = (((1 === twig_compare(($context["unavailable_migrations"] ?? null), 0))) ? ("yellow") : (""));
            // line 12
            echo "        ";
            $context["status_color"] = (((1 === twig_compare(($context["new_migrations"] ?? null), 0))) ? ("red") : (($context["status_color"] ?? null)));
            // line 13
            echo "
        ";
            // line 14
            ob_start(function () { return ''; });
            // line 15
            echo "            ";
            echo twig_include($this->env, $context, "@DoctrineMigrations/Collector/icon.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 16
            echo twig_escape_filter($this->env, (($context["new_migrations"] ?? null) + ($context["unavailable_migrations"] ?? null)), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 18
            echo "
        ";
            // line 19
            ob_start(function () { return ''; });
            // line 20
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Current</b>
                <span>";
            // line 22
            (((1 === twig_compare(($context["executed_migrations"] ?? null), 0))) ? (print (twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 22), "executed_migrations", [], "any", false, false, false, 22)), "version", [], "any", false, false, false, 22), "\\")), "html", null, true))) : (print ("n/a")));
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Executed</b>
                <span class=\"sf-toolbar-status\">";
            // line 26
            echo twig_escape_filter($this->env, ($context["executed_migrations"] ?? null), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Executed Unavailable</b>
                <span class=\"sf-toolbar-status ";
            // line 30
            echo (((1 === twig_compare(($context["unavailable_migrations"] ?? null), 0))) ? ("sf-toolbar-status-yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, ($context["unavailable_migrations"] ?? null), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Available</b>
                <span class=\"sf-toolbar-status\">";
            // line 34
            echo twig_escape_filter($this->env, ($context["available_migrations"] ?? null), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>New</b>
                <span class=\"sf-toolbar-status ";
            // line 38
            echo (((1 === twig_compare(($context["new_migrations"] ?? null), 0))) ? ("sf-toolbar-status-red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, ($context["new_migrations"] ?? null), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 41
            echo "
        ";
            // line 42
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)]);
            echo "
    ";
        }
    }

    // line 47
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "    ";
        $context["unavailable_migrations"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 48), "unavailable_migrations", [], "any", false, false, false, 48));
        // line 49
        echo "    ";
        $context["new_migrations"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 49), "new_migrations", [], "any", false, false, false, 49));
        // line 50
        echo "    ";
        $context["label"] = (((1 === twig_compare(($context["unavailable_migrations"] ?? null), 0))) ? ("label-status-warning") : (""));
        // line 51
        echo "    ";
        $context["label"] = (((1 === twig_compare(($context["new_migrations"] ?? null), 0))) ? ("label-status-error") : (($context["label"] ?? null)));
        // line 52
        echo "    <span class=\"label ";
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "\">
        <span class=\"icon\">";
        // line 53
        echo twig_include($this->env, $context, "@DoctrineMigrations/Collector/icon.svg");
        echo "</span>
        <strong>Migrations</strong>
        ";
        // line 55
        if (((1 === twig_compare(($context["unavailable_migrations"] ?? null), 0)) || (1 === twig_compare(($context["new_migrations"] ?? null), 0)))) {
            // line 56
            echo "            <span class=\"count\">
                <span>";
            // line 57
            echo twig_escape_filter($this->env, (($context["new_migrations"] ?? null) + ($context["unavailable_migrations"] ?? null)), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 60
        echo "    </span>
";
    }

    // line 63
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "    <h2>Doctrine Migrations</h2>
    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 67
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 67), "executed_migrations", [], "any", false, false, false, 67)), "html", null, true);
        echo "</span>
            <span class=\"label\">Executed</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 71
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 71), "unavailable_migrations", [], "any", false, false, false, 71)), "html", null, true);
        echo "</span>
            <span class=\"label\">Executed Unavailable</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 75
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 75), "available_migrations", [], "any", false, false, false, 75)), "html", null, true);
        echo "</span>
            <span class=\"label\">Available</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 79
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 79), "new_migrations", [], "any", false, false, false, 79)), "html", null, true);
        echo "</span>
            <span class=\"label\">New</span>
        </div>
    </div>

    <h3>Configuration</h3>
    <table>
        <thead>
            <tr>
                <th colspan=\"2\" class=\"colored font-normal\">Storage</th>
            </tr>
        </thead>
        <tr>
            <td class=\"font-normal\">Type</td>
            <td class=\"font-normal\">";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 93), "storage", [], "any", false, false, false, 93), "html", null, true);
        echo "</td>
        </tr>
        ";
        // line 95
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 95), "table", [], "any", true, true, false, 95)) {
            // line 96
            echo "            <tr>
                <td class=\"font-normal\">Table Name</td>
                <td class=\"font-normal\">";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 98), "table", [], "any", false, false, false, 98), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 101
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 101), "column", [], "any", true, true, false, 101)) {
            // line 102
            echo "            <tr>
                <td class=\"font-normal\">Column Name</td>
                <td class=\"font-normal\">";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 104), "column", [], "any", false, false, false, 104), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 107
        echo "    </table>
    <table>
        <thead>
            <tr>
                <th colspan=\"2\" class=\"colored font-normal\">Database</th>
            </tr>
        </thead>
        <tr>
            <td class=\"font-normal\">Driver</td>
            <td class=\"font-normal\">";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 116), "driver", [], "any", false, false, false, 116), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td class=\"font-normal\">Name</td>
            <td class=\"font-normal\">";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 120), "name", [], "any", false, false, false, 120), "html", null, true);
        echo "</td>
        </tr>
    </table>
    <table>
        <thead>
            <tr>
                <th colspan=\"2\" class=\"colored font-normal\">Migration Namespaces</th>
            </tr>
        </thead>
        ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 129), "namespaces", [], "any", false, false, false, 129));
        foreach ($context['_seq'] as $context["namespace"] => $context["directory"]) {
            // line 130
            echo "            <tr>
                <td class=\"font-normal\">";
            // line 131
            echo twig_escape_filter($this->env, $context["namespace"], "html", null, true);
            echo "</td>
                <td class=\"font-normal\">";
            // line 132
            echo twig_escape_filter($this->env, $context["directory"], "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['namespace'], $context['directory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "    </table>

    <h3>Migrations</h3>
    <table>
        <thead>
            <tr>
                <th class=\"colored font-normal\">Version</th>
                <th class=\"colored font-normal\">Description</th>
                <th class=\"colored font-normal\">Status</th>
                <th class=\"colored font-normal\">Executed at</th>
                <th class=\"colored font-normal\">Execution time</th>
            </tr>
        </thead>
        ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 148), "new_migrations", [], "any", false, false, false, 148));
        foreach ($context['_seq'] as $context["_key"] => $context["migration"]) {
            // line 149
            echo "            ";
            echo twig_call_macro($macros["helper"], "macro_render_migration", [$context["migration"]], 149, $context, $this->getSourceContext());
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['migration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "
        ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 152), "executed_migrations", [], "any", false, false, false, 152)));
        foreach ($context['_seq'] as $context["_key"] => $context["migration"]) {
            // line 153
            echo "            ";
            echo twig_call_macro($macros["helper"], "macro_render_migration", [$context["migration"]], 153, $context, $this->getSourceContext());
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['migration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "    </table>
";
    }

    // line 158
    public function macro_render_migration($__migration__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "migration" => $__migration__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 159
            echo "
    <tr>
        <td class=\"font-normal\">
            ";
            // line 162
            if (twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "file", [], "any", false, false, false, 162)) {
                // line 163
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "file", [], "any", false, false, false, 163), 1), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "file", [], "any", false, false, false, 163), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "version", [], "any", false, false, false, 163), "html", null, true);
                echo "</a>
            ";
            } else {
                // line 165
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "version", [], "any", false, false, false, 165), "html", null, true);
                echo "
            ";
            }
            // line 167
            echo "        </td>
        <td class=\"font-normal\">";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "description", [], "any", false, false, false, 168), "html", null, true);
            echo "</td>
        <td class=\"font-normal\">
            ";
            // line 170
            if (twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "is_new", [], "any", false, false, false, 170)) {
                // line 171
                echo "                <span class=\"label status-error\">NOT EXECUTED</span>
            ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 172
($context["migration"] ?? null), "is_unavailable", [], "any", false, false, false, 172)) {
                // line 173
                echo "                <span class=\"label status-warning\">UNAVAILABLE</span>
            ";
            } else {
                // line 175
                echo "                <span class=\"label status-success\">EXECUTED</span>
            ";
            }
            // line 177
            echo "        </td>
        <td class=\"font-normal\">";
            // line 178
            ((twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "executed_at", [], "any", false, false, false, 178)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "executed_at", [], "any", false, false, false, 178)), "html", null, true))) : (print ("n/a")));
            echo "</td>
        <td class=\"font-normal\">";
            // line 179
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "execution_time", [], "any", true, true, false, 179)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "execution_time", [], "any", false, false, false, 179), "n/a")) : ("n/a")), "html", null, true);
            echo "</td>
    </tr>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@DoctrineMigrations/Collector/migrations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  432 => 179,  428 => 178,  425 => 177,  421 => 175,  417 => 173,  415 => 172,  412 => 171,  410 => 170,  405 => 168,  402 => 167,  396 => 165,  386 => 163,  384 => 162,  379 => 159,  366 => 158,  361 => 155,  352 => 153,  348 => 152,  345 => 151,  336 => 149,  332 => 148,  317 => 135,  308 => 132,  304 => 131,  301 => 130,  297 => 129,  285 => 120,  278 => 116,  267 => 107,  261 => 104,  257 => 102,  254 => 101,  248 => 98,  244 => 96,  242 => 95,  237 => 93,  220 => 79,  213 => 75,  206 => 71,  199 => 67,  194 => 64,  190 => 63,  185 => 60,  179 => 57,  176 => 56,  174 => 55,  169 => 53,  164 => 52,  161 => 51,  158 => 50,  155 => 49,  152 => 48,  148 => 47,  141 => 42,  138 => 41,  130 => 38,  123 => 34,  114 => 30,  107 => 26,  100 => 22,  96 => 20,  94 => 19,  91 => 18,  86 => 16,  81 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  64 => 9,  61 => 8,  58 => 7,  55 => 6,  51 => 5,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@DoctrineMigrations/Collector/migrations.html.twig", "/media/fadeil/5c4e4cc3-8032-41db-85a5-f43671b2a803/aston/projet_quizz/JeuxQuizz/quizz-api/vendor/doctrine/doctrine-migrations-bundle/Resources/views/Collector/migrations.html.twig");
    }
}
