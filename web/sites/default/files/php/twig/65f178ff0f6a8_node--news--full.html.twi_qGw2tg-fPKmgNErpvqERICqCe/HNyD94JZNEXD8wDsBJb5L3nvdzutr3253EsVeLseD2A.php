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

/* themes/custom/solar/templates/content/node--news--full.html.twig */
class __TwigTemplate_a759172a734ed9e0dd3d23a2bc022442 extends Template
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
        ob_start(function () { return ''; });
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "created", [], "any", false, false, true, 104), "value", [], "any", false, false, true, 104), 104, $this->source), "d M, Y"), "html", null, true);
        echo "</time></span>
                ";
        // line 108
        echo "            </div>
            <!-- single infoe end -->
            <!-- single info -->
            <div class=\"single\">
                <i class=\"far fa-tags\"></i>
                ";
        // line 113
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_subjects", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
        echo "
            </div>
            <div class=\"single\">
              <i class=\"fa-light fa-phone-office\"></i>
              ";
        // line 117
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_time_to_read", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
        echo "
            </div>
            <!-- single infoe end -->
        </div>
        <h1";
        // line 121
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "title animated fadeIn"], "method", false, false, true, 121), 121, $this->source), "html", null, true);
        echo ">
            <a href=\"";
        // line 122
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 122, $this->source), "html", null, true);
        echo "\" rel=\"bookmark\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 122, $this->source), "html", null, true);
        echo "</a>
        </h1>
        ";
        // line 124
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
        echo "
        
        <div class=\"row  align-items-center\">
            <div class=\"col-lg-8 col-md-12\">
                <!-- tags details -->
                <div class=\"details-tag\">
                    ";
        // line 130
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tags", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
        echo "                  
                </div>
                <!-- tags details End -->
            </div>
            <div class=\"col-lg-4 col-md-12\">
                <div class=\"details-share\">
                    ";
        // line 136
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 136, $this->source), "comment", "body", "field_tags", "field_ldbackground", "field_lean_more", "field_time_to_read", "field_subjects", "field_image", "field_abstract"), "html", null, true);
        // line 138
        echo "
                                        
                </div>
            </div>
        </div>
        ";
        // line 143
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("author", "block_1"), "html", null, true);
        echo "        
            
            ";
        // line 155
        echo "       

        ";
        // line 157
        if ( !twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_abstract", [], "any", false, false, true, 157)))))) {
            // line 158
            echo "            <div class=\"title-ref\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_lean_more", [], "any", false, false, true, 158), 158, $this->source));
            echo "</div>      
            <div class=\"ref-area reveal\">
                <div class=\"thumbnail details mb_sm--15\">                
                    ";
            // line 161
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ldbackground", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
            echo "
                </div>
                <div class=\"author-details team\">                             
                    <p class=\"disc title-g\">";
            // line 164
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_abstract", [], "any", false, false, true, 164), 164, $this->source));
            echo "</p>
                </div>
            </div>
        ";
        }
        // line 168
        echo "
        ";
        // line 169
        if ( !twig_test_empty(views_get_view_result("suggestedblogs", "block_1"))) {
            // line 170
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("suggestedblogs", "block_1"), "html", null, true);
            echo "                    
        ";
        }
        // line 171
        echo "       
    </div>

                    
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/content/node--news--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 171,  197 => 170,  195 => 169,  192 => 168,  185 => 164,  179 => 161,  172 => 158,  170 => 157,  166 => 155,  161 => 143,  154 => 138,  152 => 136,  143 => 130,  134 => 124,  127 => 122,  123 => 121,  116 => 117,  109 => 113,  102 => 108,  98 => 104,  88 => 97,  85 => 96,  76 => 95,  72 => 94,  62 => 87,  56 => 85,  54 => 82,  53 => 81,  52 => 80,  51 => 79,  50 => 78,  49 => 77,  48 => 76,  47 => 73,  44 => 71,  42 => 70,  39 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/solar/templates/content/node--news--full.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/content/node--news--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 70, "apply" => 95, "if" => 157);
        static $filters = array("clean_class" => 70, "escape" => 85, "t" => 95, "spaceless" => 95, "date" => 104, "without" => 136, "trim" => 157, "striptags" => 157, "render" => 157, "raw" => 158);
        static $functions = array("drupal_view" => 143, "drupal_view_result" => 169);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'apply', 'if'],
                ['clean_class', 'escape', 't', 'spaceless', 'date', 'without', 'trim', 'striptags', 'render', 'raw'],
                ['drupal_view', 'drupal_view_result']
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
