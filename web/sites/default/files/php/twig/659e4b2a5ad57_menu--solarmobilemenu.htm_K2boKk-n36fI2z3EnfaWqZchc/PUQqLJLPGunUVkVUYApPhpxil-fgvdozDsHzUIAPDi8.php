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

/* themes/custom/solar/templates/navigation/menu--solarmobilemenu.html.twig */
class __TwigTemplate_c76786a8056601a647c0d3152868270f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 24
        echo "
";
        // line 29
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "menu"], "method", false, false, true, 29);
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 30, $context, $this->getSourceContext()));
        echo "
";
        // line 139
        echo "
";
    }

    // line 31
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 32
            echo " 
  ";
            // line 33
            $macros["menus"] = $this;
            // line 34
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 35
                echo "        ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 36
                    echo "            ";
                    $context["primary_nav_level"] = ("menu--level-" . (($context["menu_level"] ?? null) + 1));
                    // line 37
                    echo "            <ul ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "mainmenu metismenu", 1 => ($context["primary_nav_level"] ?? null)], "method", false, false, true, 37), 37, $this->source), "html", null, true);
                    echo " id=\"mobile-menu-active\">
        ";
                }
                // line 39
                echo "        ";
                if ((($context["menu_level"] ?? null) == 1)) {
                    // line 40
                    echo "            ";
                    $context["primary_nav_level"] = ("mm-collapse menu--level-" . (($context["menu_level"] ?? null) + 1));
                    // line 41
                    echo "            <ul ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "submenu", 1 => ($context["primary_nav_level"] ?? null)], "method", false, false, true, 41), 41, $this->source), "html", null, true);
                    echo ">
        ";
                }
                // line 43
                echo "        ";
                if ((($context["menu_level"] ?? null) == 2)) {
                    // line 44
                    echo "            ";
                    $context["primary_nav_level"] = ("mm-collapse menu--level-" . (($context["menu_level"] ?? null) + 1));
                    // line 45
                    echo "            <ul ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "submenu-third-lvl", 1 => ($context["primary_nav_level"] ?? null)], "method", false, false, true, 45), 45, $this->source), "html", null, true);
                    echo ">
        ";
                }
                // line 47
                echo "
        ";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 49
                    echo "
        ";
                    // line 50
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 50), "isRouted", [], "any", false, false, true, 50) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 50), "routeName", [], "any", false, false, true, 50) == "<nolink>"))) {
                        // line 51
                        echo "          ";
                        $context["menu_item_type"] = "nolink";
                        // line 52
                        echo "        ";
                    } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 52), "isRouted", [], "any", false, false, true, 52) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 52), "routeName", [], "any", false, false, true, 52) == "<button>"))) {
                        // line 53
                        echo "          ";
                        $context["menu_item_type"] = "button";
                        // line 54
                        echo "        ";
                    } else {
                        // line 55
                        echo "          ";
                        $context["menu_item_type"] = "link";
                        // line 56
                        echo "        ";
                    }
                    // line 57
                    echo "
        ";
                    // line 58
                    if ((($context["menu_level"] ?? null) == 0)) {
                        // line 59
                        echo "          ";
                        $context["item_classes"] = [0 => "menu__item", 1 => ("menu__item--" . $this->sandbox->ensureToStringAllowed(                        // line 61
($context["menu_item_type"] ?? null), 61, $this->source)), 2 => ("menu__item--level-" . (                        // line 62
($context["menu_level"] ?? null) + 1)), 3 => ((twig_get_attribute($this->env, $this->source,                         // line 63
$context["item"], "in_active_trail", [], "any", false, false, true, 63)) ? ("menu__item--active-trail") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,                         // line 64
$context["item"], "below", [], "any", false, false, true, 64)) ? ("menu__item--has-children has-droupdown") : (""))];
                        // line 67
                        echo "          ";
                        $context["link_classes"] = [0 => "menu__link main", 1 => ("menu__link--" . $this->sandbox->ensureToStringAllowed(                        // line 69
($context["menu_item_type"] ?? null), 69, $this->source)), 2 => ("menu__link--level-" . (                        // line 70
($context["menu_level"] ?? null) + 1)), 3 => ((twig_get_attribute($this->env, $this->source,                         // line 71
$context["item"], "in_active_trail", [], "any", false, false, true, 71)) ? ("menu__link--active-trail") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,                         // line 72
$context["item"], "below", [], "any", false, false, true, 72)) ? ("menu__link--has-children") : (""))];
                        // line 75
                        echo "           <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 75), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 75), 75, $this->source), "html", null, true);
                        echo ">
            
             ";
                        // line 77
                        $context["aria_id"] = \Drupal\Component\Utility\Html::getId((($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 77), 77, $this->source) . "-submenu-") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 77), 77, $this->source)));
                        // line 78
                        echo "
            ";
                        // line 79
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 79), 79, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 79), 79, $this->source), ["class" => ($context["link_classes"] ?? null)]), "html", null, true);
                        echo "
        ";
                    }
                    // line 81
                    echo "        ";
                    if ((($context["menu_level"] ?? null) == 1)) {
                        // line 82
                        echo "          ";
                        $context["item_classes"] = [0 => "menu__item", 1 => ("menu__item--" . $this->sandbox->ensureToStringAllowed(                        // line 84
($context["menu_item_type"] ?? null), 84, $this->source)), 2 => ("menu__item--level-" . (                        // line 85
($context["menu_level"] ?? null) + 1)), 3 => ((twig_get_attribute($this->env, $this->source,                         // line 86
$context["item"], "in_active_trail", [], "any", false, false, true, 86)) ? ("menu__item--active-trail") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,                         // line 87
$context["item"], "below", [], "any", false, false, true, 87)) ? ("menu__item--has-children has-droupdown third-lvl") : (""))];
                        // line 90
                        echo "          ";
                        $context["link_classes"] = [0 => "menu__link", 1 => "mobile-menu-link", 2 => ("menu__link--" . $this->sandbox->ensureToStringAllowed(                        // line 93
($context["menu_item_type"] ?? null), 93, $this->source)), 3 => ("menu__link--level-" . (                        // line 94
($context["menu_level"] ?? null) + 1)), 4 => ((twig_get_attribute($this->env, $this->source,                         // line 95
$context["item"], "in_active_trail", [], "any", false, false, true, 95)) ? ("menu__link--active-trail") : ("")), 5 => ((twig_get_attribute($this->env, $this->source,                         // line 96
$context["item"], "below", [], "any", false, false, true, 96)) ? ("menu__link--has-children") : (""))];
                        // line 99
                        echo "            <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 99), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 99), 99, $this->source), "html", null, true);
                        echo ">

            ";
                        // line 101
                        $context["aria_id"] = \Drupal\Component\Utility\Html::getId((($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 101), 101, $this->source) . "-submenu-") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 101), 101, $this->source)));
                        // line 102
                        echo "
            ";
                        // line 103
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 103), 103, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 103), 103, $this->source), ["class" => ($context["link_classes"] ?? null)]), "html", null, true);
                        echo "
        ";
                    }
                    // line 105
                    echo "        ";
                    if ((($context["menu_level"] ?? null) == 2)) {
                        // line 106
                        echo "          ";
                        $context["item_classes"] = [0 => "menu__item", 1 => ("menu__item--" . $this->sandbox->ensureToStringAllowed(                        // line 108
($context["menu_item_type"] ?? null), 108, $this->source)), 2 => ("menu__item--level-" . (                        // line 109
($context["menu_level"] ?? null) + 1)), 3 => ((twig_get_attribute($this->env, $this->source,                         // line 110
$context["item"], "in_active_trail", [], "any", false, false, true, 110)) ? ("menu__item--active-trail") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,                         // line 111
$context["item"], "below", [], "any", false, false, true, 111)) ? ("menu__item--has-children") : (""))];
                        // line 114
                        echo "          ";
                        $context["link_classes"] = [0 => "menu__link", 1 => "mobile-menu-link", 2 => ("menu__link--" . $this->sandbox->ensureToStringAllowed(                        // line 117
($context["menu_item_type"] ?? null), 117, $this->source)), 3 => ("menu__link--level-" . (                        // line 118
($context["menu_level"] ?? null) + 1)), 4 => ((twig_get_attribute($this->env, $this->source,                         // line 119
$context["item"], "in_active_trail", [], "any", false, false, true, 119)) ? ("menu__link--active-trail") : ("")), 5 => ((twig_get_attribute($this->env, $this->source,                         // line 120
$context["item"], "below", [], "any", false, false, true, 120)) ? ("menu__link--has-children") : (""))];
                        // line 123
                        echo "        <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 123), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 123), 123, $this->source), "html", null, true);
                        echo ">

        ";
                        // line 125
                        $context["aria_id"] = \Drupal\Component\Utility\Html::getId((($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 125), 125, $this->source) . "-submenu-") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 125), 125, $this->source)));
                        // line 126
                        echo "
        ";
                        // line 127
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 127), 127, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 127), 127, $this->source), ["class" => ($context["link_classes"] ?? null)]), "html", null, true);
                        echo "
        ";
                    }
                    // line 129
                    echo "
          ";
                    // line 130
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 130)) {
                        // line 131
                        echo "            ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 131), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 131, $context, $this->getSourceContext()));
                        echo "
          ";
                    }
                    // line 133
                    echo "
        </li>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 136
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/navigation/menu--solarmobilemenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 136,  269 => 133,  263 => 131,  261 => 130,  258 => 129,  253 => 127,  250 => 126,  248 => 125,  242 => 123,  240 => 120,  239 => 119,  238 => 118,  237 => 117,  235 => 114,  233 => 111,  232 => 110,  231 => 109,  230 => 108,  228 => 106,  225 => 105,  220 => 103,  217 => 102,  215 => 101,  209 => 99,  207 => 96,  206 => 95,  205 => 94,  204 => 93,  202 => 90,  200 => 87,  199 => 86,  198 => 85,  197 => 84,  195 => 82,  192 => 81,  187 => 79,  184 => 78,  182 => 77,  176 => 75,  174 => 72,  173 => 71,  172 => 70,  171 => 69,  169 => 67,  167 => 64,  166 => 63,  165 => 62,  164 => 61,  162 => 59,  160 => 58,  157 => 57,  154 => 56,  151 => 55,  148 => 54,  145 => 53,  142 => 52,  139 => 51,  137 => 50,  134 => 49,  117 => 48,  114 => 47,  108 => 45,  105 => 44,  102 => 43,  96 => 41,  93 => 40,  90 => 39,  84 => 37,  81 => 36,  78 => 35,  75 => 34,  73 => 33,  70 => 32,  55 => 31,  50 => 139,  46 => 30,  44 => 29,  41 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/solar/templates/navigation/menu--solarmobilemenu.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/navigation/menu--solarmobilemenu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 23, "set" => 29, "macro" => 31, "if" => 34, "for" => 48);
        static $filters = array("escape" => 37, "clean_id" => 77);
        static $functions = array("link" => 79);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set', 'macro', 'if', 'for'],
                ['escape', 'clean_id'],
                ['link']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
