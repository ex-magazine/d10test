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

/* themes/custom/solar/templates/views/views-view--taxonomy-term--page-1.html.twig */
class __TwigTemplate_635f27556e4944a14c93d10164807502 extends Template
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
        // line 33
        echo "<div class=\"container pb--160\">
    ";
        // line 35
        $context["classes"] = [0 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 36
($context["id"] ?? null), 36, $this->source))), 1 => ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 37
($context["id"] ?? null), 37, $this->source)), 2 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 38
($context["display_id"] ?? null), 38, $this->source)), 3 => ((        // line 39
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 39, $this->source))) : (""))];
        // line 42
        echo "    <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 42), 42, $this->source), "html", null, true);
        echo ">
    ";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 43, $this->source), "html", null, true);
        echo "
    ";
        // line 44
        if (($context["title"] ?? null)) {
            // line 45
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 45, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 47
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 47, $this->source), "html", null, true);
        echo "
    ";
        // line 48
        if (($context["header"] ?? null)) {
            // line 49
            echo "        <div class=\"view-header\">
        ";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 50, $this->source), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 53
        echo "    ";
        if (($context["exposed"] ?? null)) {
            // line 54
            echo "        <div class=\"col top-toolbar wow fadeInUp\">  
            ";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 55, $this->source), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 58
        echo "    ";
        if (($context["attachment_before"] ?? null)) {
            // line 59
            echo "        <div class=\"attachment attachment-before\">
        ";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 60, $this->source), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 63
        echo "
    ";
        // line 64
        if (($context["rows"] ?? null)) {
            // line 65
            echo "        <div class=\"row g-24 mt--20\">
        ";
            // line 66
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 66, $this->source), "html", null, true);
            echo "
        </div>
    ";
        } elseif (        // line 68
($context["empty"] ?? null)) {
            // line 69
            echo "        <div class=\"view-empty\">
        ";
            // line 70
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 70, $this->source), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 73
        echo "
    ";
        // line 74
        if (($context["pager"] ?? null)) {
            // line 75
            echo "    <div class=\"wow fadeInUp\">
        ";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 76, $this->source), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 79
        echo "    ";
        if (($context["attachment_after"] ?? null)) {
            // line 80
            echo "        <div class=\"attachment attachment-after\">
        ";
            // line 81
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 81, $this->source), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 84
        echo "    ";
        if (($context["more"] ?? null)) {
            // line 85
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 85, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 87
        echo "    ";
        if (($context["footer"] ?? null)) {
            // line 88
            echo "        <div class=\"view-footer\">
        ";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 89, $this->source), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 92
        echo "    ";
        if (($context["feed_icons"] ?? null)) {
            // line 93
            echo "        <div class=\"feed-icons mt--20 mb--20\">
        ";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 94, $this->source), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 97
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/views/views-view--taxonomy-term--page-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 97,  182 => 94,  179 => 93,  176 => 92,  170 => 89,  167 => 88,  164 => 87,  158 => 85,  155 => 84,  149 => 81,  146 => 80,  143 => 79,  137 => 76,  134 => 75,  132 => 74,  129 => 73,  123 => 70,  120 => 69,  118 => 68,  113 => 66,  110 => 65,  108 => 64,  105 => 63,  99 => 60,  96 => 59,  93 => 58,  87 => 55,  84 => 54,  81 => 53,  75 => 50,  72 => 49,  70 => 48,  65 => 47,  59 => 45,  57 => 44,  53 => 43,  48 => 42,  46 => 39,  45 => 38,  44 => 37,  43 => 36,  42 => 35,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a main view template.
 *
 * Available variables:
 * - attributes: Remaining HTML attributes for the element.
 * - css_name: A CSS-safe version of the view name.
 * - css_class: The user-specified classes names, if any.
 * - header: The optional header.
 * - footer: The optional footer.
 * - rows: The results of the view query, if any.
 * - empty: The content to display if there are no rows.
 * - pager: The optional pager next/prev links to display.
 * - exposed: Exposed widget form/info to display.
 * - feed_icons: Optional feed icons to display.
 * - more: An optional link to the next page of results.
 * - title: Title of the view, only used when displaying in the admin preview.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the view title.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the view title.
 * - attachment_before: An optional attachment view to be displayed before the
 *   view content.
 * - attachment_after: An optional attachment view to be displayed after the
 *   view content.
 * - dom_id: Unique id for every view being printed to give unique class for
 *   Javascript.
 *
 * @see template_preprocess_views_view()
 */
#}
<div class=\"container pb--160\">
    {%
    set classes = [       
        'view-' ~ id|clean_class,
        'view-id-' ~ id,
        'view-display-id-' ~ display_id,
        dom_id ? 'js-view-dom-id-' ~ dom_id,
    ]
    %}
    <div{{ attributes.addClass(classes) }}>
    {{ title_prefix }}
    {% if title %}
        {{ title }}
    {% endif %}
    {{ title_suffix }}
    {% if header %}
        <div class=\"view-header\">
        {{ header }}
        </div>
    {% endif %}
    {% if exposed %}
        <div class=\"col top-toolbar wow fadeInUp\">  
            {{ exposed }}
        </div>
    {% endif %}
    {% if attachment_before %}
        <div class=\"attachment attachment-before\">
        {{ attachment_before }}
        </div>
    {% endif %}

    {% if rows %}
        <div class=\"row g-24 mt--20\">
        {{ rows }}
        </div>
    {% elseif empty %}
        <div class=\"view-empty\">
        {{ empty }}
        </div>
    {% endif %}

    {% if pager %}
    <div class=\"wow fadeInUp\">
        {{ pager }}
    </div>
    {% endif %}
    {% if attachment_after %}
        <div class=\"attachment attachment-after\">
        {{ attachment_after }}
        </div>
    {% endif %}
    {% if more %}
        {{ more }}
    {% endif %}
    {% if footer %}
        <div class=\"view-footer\">
        {{ footer }}
        </div>
    {% endif %}
    {% if feed_icons %}
        <div class=\"feed-icons mt--20 mb--20\">
        {{ feed_icons }}
        </div>
    {% endif %}
    </div>
</div>
", "themes/custom/solar/templates/views/views-view--taxonomy-term--page-1.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/views/views-view--taxonomy-term--page-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 35, "if" => 44);
        static $filters = array("clean_class" => 36, "escape" => 42);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                []
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
