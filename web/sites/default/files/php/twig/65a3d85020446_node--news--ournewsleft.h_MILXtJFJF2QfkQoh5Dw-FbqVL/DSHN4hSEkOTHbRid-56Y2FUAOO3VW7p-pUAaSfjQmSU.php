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

/* themes/custom/solar/templates/content/node--news--ournewsleft.html.twig */
class __TwigTemplate_d61008b70ce258420cc8a2bfa8c515fb extends Template
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
        // line 1
        echo "

";
        // line 71
        echo "
";
        // line 72
        $context["layout"] = ((($context["layout"] ?? null)) ? (("layout--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["layout"] ?? null), 72, $this->source)))) : (""));
        // line 73
        echo "
";
        // line 75
        $context["classes"] = [0 => "node single-blog-solaric-lg", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 77
($context["node"] ?? null), "bundle", [], "any", false, false, true, 77), 77, $this->source))), 2 => ((        // line 78
($context["layout"] ?? null)) ? ("grid-full") : ("")), 3 => ((        // line 79
($context["layout"] ?? null)) ? ("ie11-autorow") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,         // line 80
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 80)) ? ("node--promoted") : ("")), 5 => ((twig_get_attribute($this->env, $this->source,         // line 81
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 81)) ? ("node--sticky") : ("")), 6 => (( !twig_get_attribute($this->env, $this->source,         // line 82
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 82)) ? ("node--unpublished") : ("")), 7 => ((        // line 83
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 83, $this->source)))) : (""))];
        // line 86
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 86), 86, $this->source), "html", null, true);
        echo ">
    <a href=\"";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 87, $this->source), "html", null, true);
        echo "\" rel=\"bookmark\" class=\"thumbnail\">
      ";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
        echo "
    </a>
    <div class=\"inner-content-solari-blog\">
      <div class=\"head\">
          <div class=\"single\">
              <i class=\"fa-regular fa-clock\"></i>
              <span>";
        // line 94
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "created", [], "any", false, false, true, 94), "value", [], "any", false, false, true, 94), 94, $this->source), "d M, Y"), "html", null, true);
        echo "</span>
          </div>
          <div class=\"single\">
              <i class=\"fa-regular fa-user\"></i>
              <span";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 98, $this->source), "html", null, true);
        echo ">
                ";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("By"));
        echo " ";
        ob_start();
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 99, $this->source), "html", null, true);
        $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_2_));
        // line 100
        echo "              </span>
          </div>
          <div class=\"single\">
              <i class=\"fa-light fa-phone-office\"></i>
              ";
        // line 104
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_time_to_read", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
        echo "
          </div>
      </div>
      <div class=\"body\"> 
        <a href=\"";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 108, $this->source), "html", null, true);
        echo "\" rel=\"bookmark\">
            <h2 class=\"title\">";
        // line 109
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 109, $this->source), "html", null, true);
        echo "</h2>
        </a>
        <a href=\"";
        // line 111
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 111, $this->source), "html", null, true);
        echo "\" rel=\"bookmark\" class=\"rts-btn btn-primary\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Read More"));
        echo "</a>
      </div>
    </div>
</article>";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/content/node--news--ournewsleft.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 111,  113 => 109,  109 => 108,  102 => 104,  96 => 100,  89 => 99,  85 => 98,  78 => 94,  69 => 88,  65 => 87,  60 => 86,  58 => 83,  57 => 82,  56 => 81,  55 => 80,  54 => 79,  53 => 78,  52 => 77,  51 => 75,  48 => 73,  46 => 72,  43 => 71,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{#
/**
 * @file
 * solar's theme implementation to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: (optional) The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: (optional) Themed creation date field.
 * - author_name: (optional) Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 */
#}

{% set layout = layout ? 'layout--' ~ layout|clean_class %}

{%
  set classes = [
    'node single-blog-solaric-lg',
    'node--type-' ~ node.bundle|clean_class,
    layout ? 'grid-full',
    layout ? 'ie11-autorow',
    node.isPromoted() ? 'node--promoted',
    node.isSticky() ? 'node--sticky',
    not node.isPublished() ? 'node--unpublished',
    view_mode ? 'node--view-mode-' ~ view_mode|clean_class,
  ]
%}
<article{{ attributes.addClass(classes) }}>
    <a href=\"{{ url }}\" rel=\"bookmark\" class=\"thumbnail\">
      {{ content.field_image }}
    </a>
    <div class=\"inner-content-solari-blog\">
      <div class=\"head\">
          <div class=\"single\">
              <i class=\"fa-regular fa-clock\"></i>
              <span>{{ node.created.value|date(\"d M, Y\") }}</span>
          </div>
          <div class=\"single\">
              <i class=\"fa-regular fa-user\"></i>
              <span{{ author_attributes }}>
                {{ 'By'|t }} {% apply spaceless %}{{ author_name }}{% endapply %}
              </span>
          </div>
          <div class=\"single\">
              <i class=\"fa-light fa-phone-office\"></i>
              {{ content.field_time_to_read }}
          </div>
      </div>
      <div class=\"body\"> 
        <a href=\"{{ url }}\" rel=\"bookmark\">
            <h2 class=\"title\">{{ label }}</h2>
        </a>
        <a href=\"{{ url }}\" rel=\"bookmark\" class=\"rts-btn btn-primary\">{{ 'Read More'|t }}</a>
      </div>
    </div>
</article>", "themes/custom/solar/templates/content/node--news--ournewsleft.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/content/node--news--ournewsleft.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 72, "apply" => 99);
        static $filters = array("clean_class" => 72, "escape" => 86, "date" => 94, "t" => 99, "spaceless" => 99);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'apply'],
                ['clean_class', 'escape', 'date', 't', 'spaceless'],
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
