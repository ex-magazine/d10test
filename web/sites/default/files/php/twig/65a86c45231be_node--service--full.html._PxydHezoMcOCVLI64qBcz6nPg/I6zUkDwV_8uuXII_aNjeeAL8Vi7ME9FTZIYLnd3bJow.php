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

/* themes/custom/solar/templates/content/node--service--full.html.twig */
class __TwigTemplate_7dc82bb236f1f4c67bd6bfdeb5e5fb18 extends Template
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
        // line 69
        echo "
";
        // line 70
        $context["layout"] = ((($context["layout"] ?? null)) ? (("layout--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["layout"] ?? null), 70, $this->source)))) : (""));
        // line 71
        echo "
";
        // line 73
        $context["classes"] = [0 => "node", 1 => "blog-single-post-listing details mb--0", 2 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 76
($context["node"] ?? null), "bundle", [], "any", false, false, true, 76), 76, $this->source))), 3 => ((        // line 77
($context["layout"] ?? null)) ? ("grid-full") : ("")), 4 => ((        // line 78
($context["layout"] ?? null)) ? ("ie11-autorow") : ("")), 5 => ((twig_get_attribute($this->env, $this->source,         // line 79
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 79)) ? ("node--promoted") : ("")), 6 => ((twig_get_attribute($this->env, $this->source,         // line 80
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 80)) ? ("node--sticky") : ("")), 7 => (( !twig_get_attribute($this->env, $this->source,         // line 81
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 81)) ? ("node--unpublished") : ("")), 8 => ((        // line 82
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 82, $this->source)))) : (""))];
        // line 85
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 85), 85, $this->source), "html", null, true);
        echo ">
    <div class=\"thumbnail\">
        ";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
        echo "
    </div>
    <div class=\"blog-listing-content\">
        <div class=\"user-info\">
            <!-- single info -->
            <div class=\"single\">
                <i class=\"far fa-user-circle\"></i>
                <span";
        // line 94
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 94, $this->source), "html", null, true);
        echo ">
                ";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("By"));
        echo " ";
        ob_start();
        echo "<span class=\"node__author\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 95, $this->source), "html", null, true);
        echo "</span>";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_0_));
        // line 96
        echo "                </span>
                ";
        // line 97
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 97, $this->source), "html", null, true);
        echo "            
                            
            </div>
            <!-- single infoe end -->
            <!-- single info -->
            <div class=\"single\">
                <i class=\"far fa-clock\"></i>
                <span><time>";
        // line 104
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "published_at", [], "any", false, false, true, 104), "getString", [], "any", false, false, true, 104), 104, $this->source), "d M Y"), "html", null, true);
        echo "</time></span>
            </div>
            <!-- single infoe end -->
            <!-- single info -->         
            <div class=\"single\">
              <i class=\"fa-light fa-phone-office\"></i>
              ";
        // line 110
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_time_to_read", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
        echo "
            </div>
            <!-- single infoe end -->
        </div>
        <h1";
        // line 114
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "title animated fadeIn"], "method", false, false, true, 114), 114, $this->source), "html", null, true);
        echo ">
            <a href=\"";
        // line 115
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 115, $this->source), "html", null, true);
        echo "\" rel=\"bookmark\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 115, $this->source), "html", null, true);
        echo "</a>
        </h1>
        ";
        // line 117
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
        echo "
        
        <div class=\"row  align-items-center\">
            <div class=\"col-lg-6 col-md-12\">
                <!-- tags details -->
              
                <!-- tags details End -->
            </div>
            <div class=\"col-lg-6 col-md-12\">
                <div class=\"details-share\">
                    ";
        // line 127
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 127, $this->source), "comment", "body", "field_tags", "field_time_to_read", "field_subjects", "field_image", "field_abstract", "field_servicecategory", "field_icon_svg", "field_svg", "field_paragraph"), "html", null, true);
        // line 129
        echo "
                                        
                </div>
            </div>
        </div>
        <div class=\"author-area reveal\">
            <div class=\"thumbnail details mb_sm--15\">                
                <img src=\"";
        // line 136
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "Owner", [], "any", false, false, true, 136), "user_picture", [], "any", false, false, true, 136), 0, [], "any", false, false, true, 136), "entity", [], "any", false, false, true, 136), "fileuri", [], "any", false, false, true, 136), 136, $this->source), "large")), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "uid", [], "any", false, false, true, 136), "entity", [], "any", false, false, true, 136), "field_fullname", [], "any", false, false, true, 136), 0, [], "any", false, false, true, 136), "value", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
        echo "\">
            </div>
            <div class=\"author-details team\">
                <span class=\"title-g\">";
        // line 139
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "uid", [], "any", false, false, true, 139), "entity", [], "any", false, false, true, 139), "field_position", [], "any", false, false, true, 139), 0, [], "any", false, false, true, 139), "value", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
        echo "</span>
                <h5 class=\"title-g\">";
        // line 140
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "uid", [], "any", false, false, true, 140), "entity", [], "any", false, false, true, 140), "field_fullname", [], "any", false, false, true, 140), 0, [], "any", false, false, true, 140), "value", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
        echo "</h5>
                <p class=\"disc title-g\">";
        // line 141
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "uid", [], "any", false, false, true, 141), "entity", [], "any", false, false, true, 141), "field_des", [], "any", false, false, true, 141), 0, [], "any", false, false, true, 141), "value", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>

                    
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/content/node--service--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 141,  161 => 140,  157 => 139,  149 => 136,  140 => 129,  138 => 127,  125 => 117,  118 => 115,  114 => 114,  107 => 110,  98 => 104,  88 => 97,  85 => 96,  76 => 95,  72 => 94,  62 => 87,  56 => 85,  54 => 82,  53 => 81,  52 => 80,  51 => 79,  50 => 78,  49 => 77,  48 => 76,  47 => 73,  44 => 71,  42 => 70,  39 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("{#
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
    'node',
    'blog-single-post-listing details mb--0',
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
    <div class=\"thumbnail\">
        {{ content.field_image }}
    </div>
    <div class=\"blog-listing-content\">
        <div class=\"user-info\">
            <!-- single info -->
            <div class=\"single\">
                <i class=\"far fa-user-circle\"></i>
                <span{{ author_attributes }}>
                {{ 'By'|t }} {% apply spaceless %}<span class=\"node__author\">{{ author_name }}</span>{% endapply %}
                </span>
                {{ metadata }}            
                            
            </div>
            <!-- single infoe end -->
            <!-- single info -->
            <div class=\"single\">
                <i class=\"far fa-clock\"></i>
                <span><time>{{ node.published_at.getString|date(\"d M Y\") }}</time></span>
            </div>
            <!-- single infoe end -->
            <!-- single info -->         
            <div class=\"single\">
              <i class=\"fa-light fa-phone-office\"></i>
              {{ content.field_time_to_read }}
            </div>
            <!-- single infoe end -->
        </div>
        <h1{{ title_attributes.addClass('title animated fadeIn') }}>
            <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
        </h1>
        {{ content.body }}
        
        <div class=\"row  align-items-center\">
            <div class=\"col-lg-6 col-md-12\">
                <!-- tags details -->
              
                <!-- tags details End -->
            </div>
            <div class=\"col-lg-6 col-md-12\">
                <div class=\"details-share\">
                    {{ content|without('comment','body', 'field_tags', 'field_time_to_read', 
                    'field_subjects', 'field_image', 'field_abstract',
                    'field_servicecategory', 'field_icon_svg', 'field_svg', 'field_paragraph') }}
                                        
                </div>
            </div>
        </div>
        <div class=\"author-area reveal\">
            <div class=\"thumbnail details mb_sm--15\">                
                <img src=\"{{ file_url(node.Owner.user_picture.0.entity.fileuri|image_style('large')) }}\" alt=\"{{ node.uid.entity.field_fullname.0.value }}\">
            </div>
            <div class=\"author-details team\">
                <span class=\"title-g\">{{ node.uid.entity.field_position.0.value }}</span>
                <h5 class=\"title-g\">{{ node.uid.entity.field_fullname.0.value }}</h5>
                <p class=\"disc title-g\">{{ node.uid.entity.field_des.0.value }}</p>
            </div>
        </div>
    </div>

                    
</article>
", "themes/custom/solar/templates/content/node--service--full.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/content/node--service--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 70, "apply" => 95);
        static $filters = array("clean_class" => 70, "escape" => 85, "t" => 95, "spaceless" => 95, "date" => 104, "without" => 127, "image_style" => 136);
        static $functions = array("file_url" => 136);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'apply'],
                ['clean_class', 'escape', 't', 'spaceless', 'date', 'without', 'image_style'],
                ['file_url']
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
