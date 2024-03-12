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

/* themes/custom/solar/templates/content/node--landingpage--sidebarright.html.twig */
class __TwigTemplate_11216e60e69e3bfd805d68c6a40cb355 extends Template
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
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 75
($context["node"] ?? null), "bundle", [], "any", false, false, true, 75), 75, $this->source))), 2 => ((        // line 76
($context["layout"] ?? null)) ? ("grid-full") : ("")), 3 => ((        // line 77
($context["layout"] ?? null)) ? ("ie11-autorow") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,         // line 78
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 78)) ? ("node--promoted") : ("")), 5 => ((twig_get_attribute($this->env, $this->source,         // line 79
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 79)) ? ("node--sticky") : ("")), 6 => (( !twig_get_attribute($this->env, $this->source,         // line 80
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 80)) ? ("node--unpublished") : ("")), 7 => ((        // line 81
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 81, $this->source)))) : (""))];
        // line 84
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 84), 84, $this->source), "html", null, true);
        echo ">
    <!-- rts breadcrumb area -->
    <div class=\"rts-bread-crumb-area bg_image\" style=\"background-image: url('";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_ldbackground", [], "any", false, false, true, 86), "entity", [], "any", false, false, true, 86), "fileuri", [], "any", false, false, true, 86), 86, $this->source)), "html", null, true);
        echo "');\">
        <div class=\"container ptb--65\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"con-tent-main\">
                        <div class=\"wrapper\">
                            <span class=\"bg-text-stok\">";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 92, $this->source), "html", null, true);
        echo "</span>
                            <div class=\"title skew-up\">                               
                                 ";
        // line 94
        if ( !twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_titlesecond", [], "any", false, false, true, 94)))))) {
            // line 95
            echo "                                    <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 95, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_titlesecond", [], "any", false, false, true, 95), 95, $this->source)))), "html", null, true);
            echo "</a>
                                ";
        } else {
            // line 97
            echo "                                <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 97, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 97, $this->source), "html", null, true);
            echo "</a>
                                ";
        }
        // line 98
        echo "                                 
                            </div>
                            <div class=\"slug skew-up\">
                                <a href=\"/\">";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
        echo " /</a>  
                                <h1";
        // line 102
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node-about-us"], "method", false, false, true, 102), 102, $this->source), "html", null, true);
        echo ">
                                     <a class=\"active\" href=\"";
        // line 103
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 103, $this->source), "html", null, true);
        echo "\" rel=\"bookmark\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 103, $this->source), "html", null, true);
        echo "</a>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumb area end -->
    <div class=\"rts-blog-list-area rts-section-gap\">
        <div class=\"container\">
            <div class=\"row g-5\">
                <div class=\"col-xl-8 col-md-12 col-sm-12 col-12\">
                     ";
        // line 117
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 117))) {
            // line 118
            echo "                        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
            echo " 
                    ";
        }
        // line 120
        echo "                    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_paragraphs", [], "any", false, false, true, 120))) {
            // line 121
            echo "                        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_paragraphs", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
            echo "
                    ";
        }
        // line 123
        echo "                    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_viewreference", [], "any", false, false, true, 123))) {
            // line 124
            echo "                        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_viewreference", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
            echo "  
                    ";
        }
        // line 126
        echo "                    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_pdf", [], "any", false, false, true, 126))) {
            // line 127
            echo "                        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_pdf", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
            echo " 
                    ";
        }
        // line 129
        echo "                    
                
                </div>
                <div class=\"col-xl-4 col-md-12 col-sm-12 col-12\">  
                    ";
        // line 133
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalRegion("sidebar", "solar"), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"rts-secvice-area-solaric-banner-bottom start rts-section-gapBottom\">     
        ";
        // line 140
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalRegion("content_below", "solar"), "html", null, true);
        echo "
    </div> 

    
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/content/node--landingpage--sidebarright.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 140,  167 => 133,  161 => 129,  155 => 127,  152 => 126,  146 => 124,  143 => 123,  137 => 121,  134 => 120,  128 => 118,  126 => 117,  107 => 103,  103 => 102,  99 => 101,  94 => 98,  86 => 97,  78 => 95,  76 => 94,  71 => 92,  62 => 86,  56 => 84,  54 => 81,  53 => 80,  52 => 79,  51 => 78,  50 => 77,  49 => 76,  48 => 75,  47 => 73,  44 => 71,  42 => 70,  39 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/solar/templates/content/node--landingpage--sidebarright.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/content/node--landingpage--sidebarright.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 70, "if" => 94);
        static $filters = array("clean_class" => 70, "escape" => 84, "trim" => 94, "striptags" => 94, "render" => 94, "t" => 101);
        static $functions = array("file_url" => 86, "drupal_region" => 133);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'trim', 'striptags', 'render', 't'],
                ['file_url', 'drupal_region']
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
