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

/* themes/custom/solar/templates/navigation/menu--main.html.twig */
class __TwigTemplate_93d69f9634486bbc3a5c372baf01de81 extends Template
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
        // line 129
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

        ob_start();
        try {
            // line 32
            echo "  ";
            if ((($context["menu_level"] ?? null) == 0)) {
                // line 33
                echo "    ";
                $context["primary_nav_level"] = ("menu--level-" . (($context["menu_level"] ?? null) + 1));
                // line 34
                echo "  ";
            }
            // line 35
            echo "  ";
            if ((($context["menu_level"] ?? null) == 1)) {
                // line 36
                echo "    ";
                $context["primary_nav_level"] = ("submenu menu--level-" . (($context["menu_level"] ?? null) + 1));
                // line 37
                echo "  ";
            }
            // line 38
            echo "  ";
            if ((($context["menu_level"] ?? null) == 2)) {
                // line 39
                echo "    ";
                $context["primary_nav_level"] = ("submenu third-lvl base menu--level-" . (($context["menu_level"] ?? null) + 1));
                // line 40
                echo "  ";
            }
            // line 41
            echo "  ";
            $macros["menus"] = $this;
            // line 42
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 43
                echo "    <ul ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "menu", 1 => ($context["primary_nav_level"] ?? null)], "method", false, false, true, 43), 43, $this->source), "html", null, true);
                echo ">
      ";
                // line 44
                $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["primary_nav_level"] ?? null)], "method", false, false, true, 44);
                // line 45
                echo "      ";
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
                    // line 46
                    echo "
        ";
                    // line 47
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 47), "isRouted", [], "any", false, false, true, 47) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 47), "routeName", [], "any", false, false, true, 47) == "<nolink>"))) {
                        // line 48
                        echo "          ";
                        $context["menu_item_type"] = "nolink";
                        // line 49
                        echo "        ";
                    } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 49), "isRouted", [], "any", false, false, true, 49) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 49), "routeName", [], "any", false, false, true, 49) == "<button>"))) {
                        // line 50
                        echo "          ";
                        $context["menu_item_type"] = "button";
                        // line 51
                        echo "        ";
                    } else {
                        // line 52
                        echo "          ";
                        $context["menu_item_type"] = "link";
                        // line 53
                        echo "        ";
                    }
                    // line 54
                    echo "
        ";
                    // line 55
                    if ((($context["menu_level"] ?? null) == 0)) {
                        // line 56
                        echo "          ";
                        $context["item_classes"] = [0 => "menu__item", 1 => ("menu__item--" . $this->sandbox->ensureToStringAllowed(                        // line 58
($context["menu_item_type"] ?? null), 58, $this->source)), 2 => ("menu__item--level-" . (                        // line 59
($context["menu_level"] ?? null) + 1)), 3 => ((twig_get_attribute($this->env, $this->source,                         // line 60
$context["item"], "in_active_trail", [], "any", false, false, true, 60)) ? ("menu__item--active-trail") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,                         // line 61
$context["item"], "below", [], "any", false, false, true, 61)) ? ("menu__item--has-children has-dropdown") : (""))];
                        // line 64
                        echo "          ";
                        $context["link_classes"] = [0 => "menu__link", 1 => ("menu__link--" . $this->sandbox->ensureToStringAllowed(                        // line 66
($context["menu_item_type"] ?? null), 66, $this->source)), 2 => ("menu__link--level-" . (                        // line 67
($context["menu_level"] ?? null) + 1)), 3 => ((twig_get_attribute($this->env, $this->source,                         // line 68
$context["item"], "in_active_trail", [], "any", false, false, true, 68)) ? ("menu__link--active-trail") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,                         // line 69
$context["item"], "below", [], "any", false, false, true, 69)) ? ("menu__link--has-children nav-link") : (""))];
                        // line 72
                        echo "        ";
                    }
                    // line 73
                    echo "        ";
                    if ((($context["menu_level"] ?? null) == 1)) {
                        // line 74
                        echo "          ";
                        $context["item_classes"] = [0 => "menu__item", 1 => ("menu__item--" . $this->sandbox->ensureToStringAllowed(                        // line 76
($context["menu_item_type"] ?? null), 76, $this->source)), 2 => ("menu__item--level-" . (                        // line 77
($context["menu_level"] ?? null) + 1)), 3 => ((twig_get_attribute($this->env, $this->source,                         // line 78
$context["item"], "in_active_trail", [], "any", false, false, true, 78)) ? ("menu__item--active-trail") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,                         // line 79
$context["item"], "below", [], "any", false, false, true, 79)) ? ("menu__item--has-children sub-dropdown") : (""))];
                        // line 82
                        echo "          ";
                        $context["link_classes"] = [0 => "menu__link", 1 => ("menu__link--" . $this->sandbox->ensureToStringAllowed(                        // line 84
($context["menu_item_type"] ?? null), 84, $this->source)), 2 => ("menu__link--level-" . (                        // line 85
($context["menu_level"] ?? null) + 1)), 3 => ((twig_get_attribute($this->env, $this->source,                         // line 86
$context["item"], "in_active_trail", [], "any", false, false, true, 86)) ? ("menu__link--active-trail") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,                         // line 87
$context["item"], "below", [], "any", false, false, true, 87)) ? ("menu__link--has-children nav-link") : (""))];
                        // line 90
                        echo "        ";
                    }
                    // line 91
                    echo "        ";
                    if ((($context["menu_level"] ?? null) == 2)) {
                        // line 92
                        echo "          ";
                        $context["item_classes"] = [0 => "menu__item", 1 => ("menu__item--" . $this->sandbox->ensureToStringAllowed(                        // line 94
($context["menu_item_type"] ?? null), 94, $this->source)), 2 => ("menu__item--level-" . (                        // line 95
($context["menu_level"] ?? null) + 1)), 3 => ((twig_get_attribute($this->env, $this->source,                         // line 96
$context["item"], "in_active_trail", [], "any", false, false, true, 96)) ? ("menu__item--active-trail") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,                         // line 97
$context["item"], "below", [], "any", false, false, true, 97)) ? ("menu__item--has-children") : (""))];
                        // line 100
                        echo "          ";
                        $context["link_classes"] = [0 => "menu__link", 1 => "mobile-menu-link", 2 => ("menu__link--" . $this->sandbox->ensureToStringAllowed(                        // line 103
($context["menu_item_type"] ?? null), 103, $this->source)), 3 => ("menu__link--level-" . (                        // line 104
($context["menu_level"] ?? null) + 1)), 4 => ((twig_get_attribute($this->env, $this->source,                         // line 105
$context["item"], "in_active_trail", [], "any", false, false, true, 105)) ? ("menu__link--active-trail") : ("")), 5 => ((twig_get_attribute($this->env, $this->source,                         // line 106
$context["item"], "below", [], "any", false, false, true, 106)) ? ("menu__link--has-children nav-link") : (""))];
                        // line 109
                        echo "        ";
                    }
                    // line 110
                    echo "        <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 110), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 110), 110, $this->source), "html", null, true);
                    echo ">
          ";
                    // line 116
                    echo "          ";
                    $context["aria_id"] = \Drupal\Component\Utility\Html::getId((($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 116), 116, $this->source) . "-submenu-") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 116), 116, $this->source)));
                    // line 117
                    echo "
          ";
                    // line 118
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 118), 118, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 118), 118, $this->source), ["class" => ($context["link_classes"] ?? null)]), "html", null, true);
                    echo "

          ";
                    // line 120
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 120)) {
                        // line 121
                        echo "            ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 121), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 121, $context, $this->getSourceContext()));
                        echo "
          ";
                    }
                    // line 123
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
                // line 126
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
        return "themes/custom/solar/templates/navigation/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 126,  237 => 123,  231 => 121,  229 => 120,  224 => 118,  221 => 117,  218 => 116,  213 => 110,  210 => 109,  208 => 106,  207 => 105,  206 => 104,  205 => 103,  203 => 100,  201 => 97,  200 => 96,  199 => 95,  198 => 94,  196 => 92,  193 => 91,  190 => 90,  188 => 87,  187 => 86,  186 => 85,  185 => 84,  183 => 82,  181 => 79,  180 => 78,  179 => 77,  178 => 76,  176 => 74,  173 => 73,  170 => 72,  168 => 69,  167 => 68,  166 => 67,  165 => 66,  163 => 64,  161 => 61,  160 => 60,  159 => 59,  158 => 58,  156 => 56,  154 => 55,  151 => 54,  148 => 53,  145 => 52,  142 => 51,  139 => 50,  136 => 49,  133 => 48,  131 => 47,  128 => 46,  110 => 45,  108 => 44,  103 => 43,  100 => 42,  97 => 41,  94 => 40,  91 => 39,  88 => 38,  85 => 37,  82 => 36,  79 => 35,  76 => 34,  73 => 33,  70 => 32,  55 => 31,  50 => 129,  46 => 30,  44 => 29,  41 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * solar's theme implementation for the main menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 *
 * @ingroup themeable
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see https://twig.symfony.com/doc/1.x/tags/macro.html
#}
{% set attributes = attributes.addClass('menu') %}
{{ menus.menu_links(items, attributes, 0) }}
{% macro menu_links(items, attributes, menu_level) %}
  {% if menu_level == 0 %}
    {% set primary_nav_level = 'menu--level-' ~ (menu_level + 1) %}
  {% endif %}
  {% if menu_level == 1 %}
    {% set primary_nav_level = 'submenu menu--level-' ~ (menu_level + 1) %}
  {% endif %}
  {% if menu_level == 2 %}
    {% set primary_nav_level = 'submenu third-lvl base menu--level-' ~ (menu_level + 1) %}
  {% endif %}
  {% import _self as menus %}
  {% if items %}
    <ul {{ attributes.addClass('menu', primary_nav_level) }}>
      {% set attributes = attributes.removeClass(primary_nav_level) %}
      {% for item in items %}

        {% if item.url.isRouted and item.url.routeName == '<nolink>' %}
          {% set menu_item_type = 'nolink' %}
        {% elseif item.url.isRouted and item.url.routeName == '<button>' %}
          {% set menu_item_type = 'button' %}
        {% else %}
          {% set menu_item_type = 'link' %}
        {% endif %}

        {% if menu_level == 0 %}
          {% set item_classes = [
              'menu__item',
              'menu__item--' ~ menu_item_type,
              'menu__item--level-' ~ (menu_level + 1),
              item.in_active_trail ? 'menu__item--active-trail',
              item.below ? 'menu__item--has-children has-dropdown',
            ]
          %}
          {% set link_classes = [
              'menu__link',
              'menu__link--' ~ menu_item_type,
              'menu__link--level-' ~ (menu_level + 1),
              item.in_active_trail ? 'menu__link--active-trail',
              item.below ? 'menu__link--has-children nav-link',
            ]
          %}
        {% endif %}
        {% if menu_level == 1 %}
          {% set item_classes = [
              'menu__item',
              'menu__item--' ~ menu_item_type,
              'menu__item--level-' ~ (menu_level + 1),
              item.in_active_trail ? 'menu__item--active-trail',
              item.below ? 'menu__item--has-children sub-dropdown',
            ]
          %}
          {% set link_classes = [
              'menu__link',
              'menu__link--' ~ menu_item_type,
              'menu__link--level-' ~ (menu_level + 1),
              item.in_active_trail ? 'menu__link--active-trail',
              item.below ? 'menu__link--has-children nav-link',
            ]
          %}
        {% endif %}
        {% if menu_level == 2 %}
          {% set item_classes = [
              'menu__item',
              'menu__item--' ~ menu_item_type,
              'menu__item--level-' ~ (menu_level + 1),
              item.in_active_trail ? 'menu__item--active-trail',
              item.below ? 'menu__item--has-children',
            ]
          %}
          {% set link_classes = [
            'menu__link',
            'mobile-menu-link',
            'menu__link--' ~ menu_item_type,
            'menu__link--level-' ~ (menu_level + 1),
            item.in_active_trail ? 'menu__link--active-trail',
            item.below ? 'menu__link--has-children nav-link',
          ]
          %}
        {% endif %}
        <li{{ item.attributes.addClass(item_classes) }}>
          {#
            A unique HTML ID should be used, but that isn't available through
            Twig yet, so the |clean_id filter is used for now.
            @see https://www.drupal.org/project/drupal/issues/3115445
          #}
          {% set aria_id = (item.title ~ '-submenu-' ~ loop.index )|clean_id %}

          {{ link(item.title, item.url, { 'class': link_classes }) }}

          {% if item.below %}
            {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
          {% endif %}

        </li>
      {% endfor %}
    </ul>
  {% endif %}
{% endmacro %}

", "themes/custom/solar/templates/navigation/menu--main.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/navigation/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 23, "set" => 29, "macro" => 31, "if" => 32, "for" => 45);
        static $filters = array("escape" => 43, "clean_id" => 116);
        static $functions = array("link" => 118);

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
