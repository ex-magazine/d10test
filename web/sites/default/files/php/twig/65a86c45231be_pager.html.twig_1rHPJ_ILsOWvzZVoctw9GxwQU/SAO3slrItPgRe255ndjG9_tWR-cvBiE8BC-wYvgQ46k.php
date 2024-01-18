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

/* themes/custom/solar/templates/navigation/pager.html.twig */
class __TwigTemplate_cec26273e43966b12803b3d485b90a35 extends Template
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
        // line 32
        echo " 
";
        // line 33
        if (($context["items"] ?? null)) {
            // line 34
            echo "<div class=\"row mt--50\">
  <div class=\"col-lg-12\">
    <div class=\"rts-elevate-pagination\">
      <nav class=\"pager layout--content-medium\" role=\"navigation\" aria-labelledby=\"";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 37, $this->source), "html", null, true);
            echo "\">
        <h4 id=\"";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 38, $this->source), "html", null, true);
            echo "\" class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            echo "</h4>
        <ul class=\"pagination\">
          ";
            // line 41
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 41)) {
                // line 42
                echo "            ";
                ob_start();
                // line 43
                echo "              <li class=\"page-item page-item--control page-item--first\">
                <a href=\"";
                // line 44
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 44), "href", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                echo "\" class=\"page-link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 44), "attributes", [], "any", false, false, true, 44), 44, $this->source), "href", "title", "class"), "html", null, true);
                echo ">
                  <span class=\"visually-hidden\">";
                // line 45
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                echo "</span>
                  &laquo;
                </a>
              </li>
            ";
                $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 42
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_0_));
                // line 50
                echo "          ";
            }
            // line 51
            echo "
          ";
            // line 53
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 53)) {
                // line 54
                echo "            ";
                ob_start();
                // line 55
                echo "              <li class=\"page-item page-item--control page-item--previous\">
                <a href=\"";
                // line 56
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 56), "href", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                echo "\" class=\"page-link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 56), "attributes", [], "any", false, false, true, 56), 56, $this->source), "href", "title", "rel", "class"), "html", null, true);
                echo ">
                  <span class=\"visually-hidden\">";
                // line 57
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                echo "</span>
                  &#8249;
                </a>
              </li>
            ";
                $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 54
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_1_));
                // line 62
                echo "          ";
            }
            // line 63
            echo "
          ";
            // line 65
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 65)) {
                // line 66
                echo "            <li class=\"page-item page-item--ellipsis\" role=\"presentation\">&hellip;</li>
          ";
            }
            // line 68
            echo "
          ";
            // line 70
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 70));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 71
                echo "            ";
                ob_start();
                // line 72
                echo "              <li class=\"page-item";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" page-item--active") : ("")));
                echo " page-item--number\">
                ";
                // line 73
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 74
                    echo "                  ";
                    $context["title"] = t("Current page");
                    // line 75
                    echo "                ";
                } else {
                    // line 76
                    echo "                  ";
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                    // line 77
                    echo "                ";
                }
                // line 78
                echo "                ";
                if ((($context["current"] ?? null) != $context["key"])) {
                    // line 79
                    echo "                  <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                    echo "\" class=\"page-link";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" is-active") : ("")));
                    echo "\" title=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 79, $this->source), "html", null, true);
                    echo "\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 79), 79, $this->source), "href", "title", "class"), "html", null, true);
                    echo ">
                  ";
                } else {
                    // line 81
                    echo "                  <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
                    echo "\" class=\"page-link";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" is-active") : ("")));
                    echo " disabled\" title=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 81, $this->source), "html", null, true);
                    echo "\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 81), 81, $this->source), "href", "title", "class"), "html", null, true);
                    echo ">              
                ";
                }
                // line 83
                echo "                <span class=\"visually-hidden\">
                  ";
                // line 84
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                echo "
                </span>
                ";
                // line 86
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 86, $this->source), "html", null, true);
                echo "
                ";
                // line 87
                if ((($context["current"] ?? null) != $context["key"])) {
                    // line 88
                    echo "                  </a>
                ";
                } else {
                    // line 90
                    echo "                </a>
                ";
                }
                // line 92
                echo "              </li>
            ";
                $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 71
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_2_));
                // line 94
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "
          ";
            // line 97
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 97)) {
                // line 98
                echo "            <li class=\"page-item page-item--ellipsis\" role=\"presentation\">&hellip;</li>
          ";
            }
            // line 100
            echo "
          ";
            // line 102
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 102)) {
                // line 103
                echo "            ";
                ob_start();
                // line 104
                echo "              <li class=\"page-item page-item--control page-item--next\">
                <a href=\"";
                // line 105
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 105), "href", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
                echo "\" class=\"page-link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 105), "attributes", [], "any", false, false, true, 105), 105, $this->source), "href", "title", "rel", "class"), "html", null, true);
                echo ">
                  <span class=\"visually-hidden\">";
                // line 106
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                echo "</span>
                  &#8250;
                </a>
              </li>
            ";
                $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 103
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_3_));
                // line 111
                echo "          ";
            }
            // line 112
            echo "
          ";
            // line 114
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 114)) {
                // line 115
                echo "            ";
                ob_start();
                // line 116
                echo "              <li class=\"page-item page-item--control page-item--last\">
                <a href=\"";
                // line 117
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 117), "href", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
                echo "\" class=\"page-link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 117), "attributes", [], "any", false, false, true, 117), 117, $this->source), "href", "title", "class"), "html", null, true);
                echo ">
                  <span class=\"visually-hidden\">";
                // line 118
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
                echo "</span>
                  &raquo;
                </a>
              </li>
            ";
                $___internal_parse_4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 115
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_4_));
                // line 123
                echo "          ";
            }
            // line 124
            echo "        </ul>
      </nav>
    </div>
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/navigation/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 124,  297 => 123,  295 => 115,  287 => 118,  279 => 117,  276 => 116,  273 => 115,  270 => 114,  267 => 112,  264 => 111,  262 => 103,  254 => 106,  246 => 105,  243 => 104,  240 => 103,  237 => 102,  234 => 100,  230 => 98,  227 => 97,  224 => 95,  218 => 94,  216 => 71,  212 => 92,  208 => 90,  204 => 88,  202 => 87,  198 => 86,  193 => 84,  190 => 83,  178 => 81,  166 => 79,  163 => 78,  160 => 77,  157 => 76,  154 => 75,  151 => 74,  149 => 73,  144 => 72,  141 => 71,  136 => 70,  133 => 68,  129 => 66,  126 => 65,  123 => 63,  120 => 62,  118 => 54,  110 => 57,  102 => 56,  99 => 55,  96 => 54,  93 => 53,  90 => 51,  87 => 50,  85 => 42,  77 => 45,  69 => 44,  66 => 43,  63 => 42,  60 => 41,  53 => 38,  49 => 37,  44 => 34,  42 => 33,  39 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a pager.
 *
 * Available variables:
 * - heading_id: Pagination heading ID.
 * - items: List of pager items.
 *   The list is keyed by the following elements:
 *   - first: Item for the first page; not present on the first page of results.
 *   - previous: Item for the previous page; not present on the first page
 *     of results.
 *   - next: Item for the next page; not present on the last page of results.
 *   - last: Item for the last page; not present on the last page of results.
 *   - pages: List of pages, keyed by page number.
 *   Sub-sub elements:
 *   items.first, items.previous, items.next, items.last, and each item inside
 *   items.pages contain the following elements:
 *   - href: URL with appropriate query parameters for the item.
 *   - attributes: A keyed list of HTML attributes for the item.
 *   - text: The visible text used for the item link, such as \"‹ Previous\"
 *     or \"Next ›\".
 * - current: The page number of the current page.
 * - ellipses: If there are more pages than the quantity allows, then an
 *   ellipsis before or after the listed pages may be present.
 *   - previous: Present if the currently visible list of pages does not start
 *     at the first page.
 *   - next: Present if the visible list of pages ends before the last page.
 *
 * @see template_preprocess_pager()
 */
#} 
{% if items %}
<div class=\"row mt--50\">
  <div class=\"col-lg-12\">
    <div class=\"rts-elevate-pagination\">
      <nav class=\"pager layout--content-medium\" role=\"navigation\" aria-labelledby=\"{{ heading_id }}\">
        <h4 id=\"{{ heading_id }}\" class=\"visually-hidden\">{{ 'Pagination'|t }}</h4>
        <ul class=\"pagination\">
          {# Print first item if we are not on the first page. #}
          {% if items.first %}
            {% apply spaceless %}
              <li class=\"page-item page-item--control page-item--first\">
                <a href=\"{{ items.first.href }}\" class=\"page-link\" title=\"{{ 'Go to first page'|t }}\"{{ items.first.attributes|without('href', 'title', 'class') }}>
                  <span class=\"visually-hidden\">{{ 'First page'|t }}</span>
                  &laquo;
                </a>
              </li>
            {% endapply %}
          {% endif %}

          {# Print previous item if we are not on the first page. #}
          {% if items.previous %}
            {% apply spaceless %}
              <li class=\"page-item page-item--control page-item--previous\">
                <a href=\"{{ items.previous.href }}\" class=\"page-link\" title=\"{{ 'Go to previous page'|t }}\" rel=\"prev\"{{ items.previous.attributes|without('href', 'title', 'rel', 'class') }}>
                  <span class=\"visually-hidden\">{{ 'Previous page'|t }}</span>
                  &#8249;
                </a>
              </li>
            {% endapply %}
          {% endif %}

          {# Add an ellipsis if there are further previous pages. #}
          {% if ellipses.previous %}
            <li class=\"page-item page-item--ellipsis\" role=\"presentation\">&hellip;</li>
          {% endif %}

          {# Now generate the actual pager piece. #}
          {% for key, item in items.pages %}
            {% apply spaceless %}
              <li class=\"page-item{{ current == key ? ' page-item--active' : '' }} page-item--number\">
                {% if current == key %}
                  {% set title = 'Current page'|t %}
                {% else %}
                  {% set title = 'Go to page @key'|t({'@key': key}) %}
                {% endif %}
                {% if current != key %}
                  <a href=\"{{ item.href }}\" class=\"page-link{{ current == key ? ' is-active' }}\" title=\"{{ title }}\"{{ item.attributes|without('href', 'title', 'class') }}>
                  {% else %}
                  <a href=\"{{ item.href }}\" class=\"page-link{{ current == key ? ' is-active' }} disabled\" title=\"{{ title }}\"{{ item.attributes|without('href', 'title', 'class') }}>              
                {% endif %}
                <span class=\"visually-hidden\">
                  {{ current == key ? 'Current page'|t : 'Page'|t }}
                </span>
                {{ key }}
                {% if current != key %}
                  </a>
                {% else %}
                </a>
                {% endif %}
              </li>
            {% endapply %}
          {% endfor %}

          {# Add an ellipsis if there are further next pages. #}
          {% if ellipses.next %}
            <li class=\"page-item page-item--ellipsis\" role=\"presentation\">&hellip;</li>
          {% endif %}

          {# Print next item if we are not on the last page. #}
          {% if items.next %}
            {% apply spaceless %}
              <li class=\"page-item page-item--control page-item--next\">
                <a href=\"{{ items.next.href }}\" class=\"page-link\" title=\"{{ 'Go to next page'|t }}\" rel=\"next\"{{ items.next.attributes|without('href', 'title', 'rel', 'class') }}>
                  <span class=\"visually-hidden\">{{ 'Next page'|t }}</span>
                  &#8250;
                </a>
              </li>
            {% endapply %}
          {% endif %}

          {# Print last item if we are not on the last page. #}
          {% if items.last %}
            {% apply spaceless %}
              <li class=\"page-item page-item--control page-item--last\">
                <a href=\"{{ items.last.href }}\" class=\"page-link\" title=\"{{ 'Go to last page'|t }}\"{{ items.last.attributes|without('href', 'title', 'class') }}>
                  <span class=\"visually-hidden\">{{ 'Last page'|t }}</span>
                  &raquo;
                </a>
              </li>
            {% endapply %}
          {% endif %}
        </ul>
      </nav>
    </div>
  </div>
</div>
{% endif %}
", "themes/custom/solar/templates/navigation/pager.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/navigation/pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 33, "apply" => 42, "for" => 70, "set" => 74);
        static $filters = array("escape" => 37, "t" => 38, "without" => 44, "spaceless" => 42);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'apply', 'for', 'set'],
                ['escape', 't', 'without', 'spaceless'],
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
