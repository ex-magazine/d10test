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

/* themes/custom/solar/templates/content/node--teammember--full.html.twig */
class __TwigTemplate_8268db3db39edc74581de50ae9edd050 extends Template
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
    <div class=\"personal-info-area-start rts-section-gapTop pb--100\">
        <div class=\"container\">
            <div class=\"row g-0 align-items-center\">
                <div class=\"col-lg-5\">
                    <div class=\"thumbnail m-img\">
                        ";
        // line 90
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"personal-info-team\">
                        <div class=\"inner-content sal-animate\" data-sal=\"slide-up\" data-sal-delay=\"150\" data-sal-duration=\"900\">
                            <span class=\"pre-title\">
                                ";
        // line 97
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_position", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
        echo "
                            </span>                       
                            <h1";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "title animated fadeIn"], "method", false, false, true, 99), 99, $this->source), "html", null, true);
        echo ">
                                <a href=\"";
        // line 100
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 100, $this->source), "html", null, true);
        echo "\" rel=\"bookmark\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 100, $this->source), "html", null, true);
        echo "</a>
                            </h1>
                            <div class=\"disc\">
                                ";
        // line 103
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
        echo "                           
                            </div>
                            <!-- ingle information start -->
                            <div class=\"single-info\">
                                <div class=\"icon\">
                                    <i class=\"fa-light fa-envelope\"></i>
                                </div>
                                <div class=\"info\">
                                    <span>";
        // line 111
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_address", [], "any", false, false, true, 111)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#title"] ?? null) : null), 111, $this->source), "html", null, true);
        echo "</span>
                                    <a href=\"mailto:";
        // line 112
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_address", [], "any", false, false, true, 112), 112, $this->source)))), "html", null, true);
        echo "\" class=\"mail\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_address", [], "any", false, false, true, 112), 112, $this->source)))), "html", null, true);
        echo "</a>
                                </div>
                            </div>
                            <!-- ingle information end -->
                            <!-- ingle information start -->
                            <div class=\"single-info\">
                                <div class=\"icon\"> 
                                    <i class=\"fa-solid fa-phone-volume\"></i>
                                </div>
                                <div class=\"info\">
                                    <span>";
        // line 122
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_clients", [], "any", false, false, true, 122)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#title"] ?? null) : null), 122, $this->source), "html", null, true);
        echo "</span>
                                    <a href=\"tel:";
        // line 123
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_clients", [], "any", false, false, true, 123), 123, $this->source)))), "html", null, true);
        echo "\" class=\"mail\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_clients", [], "any", false, false, true, 123), 123, $this->source)))), "html", null, true);
        echo "</a>
                                </div>
                            </div>
                            <!-- ingle information end -->
                            <!-- ingle information start -->
                            <div class=\"single-info\">
                                <div class=\"icon\">
                                    <i class=\"fa-light fa-location-dot\"></i>
                                </div>
                                <div class=\"info\">
                                    <span>";
        // line 133
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_twitter", [], "any", false, false, true, 133)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#title"] ?? null) : null), 133, $this->source), "html", null, true);
        echo "</span>
                                    <a href=\"#\" class=\"mail\">";
        // line 134
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_twitter", [], "any", false, false, true, 134), 134, $this->source)))), "html", null, true);
        echo "</a>
                                </div>
                            </div>
                            <!-- ingle information end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class=\"rts-make-an-appoinemtn-area rts-section-gapBottom\">
        <div class=\"container\">
            <div class=\"row align-items-center g-0 bg-appoinment ptb--50\">              
                <div class=\"col-lg-8 offset-lg-2\">
                    <!-- appoinment inner content area start -->
                    <div class=\"appoinment-inner-content-wrapper\">                    
                        <h3 class=\"title animated fadeIn text-center\">
                            ";
        // line 152
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_webform", [], "any", false, false, true, 152)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#title"] ?? null) : null), 152, $this->source), "html", null, true);
        echo "
                        </h3>
                        ";
        // line 154
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_webform", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
        echo "                     
                    </div>
                    <!-- appoinment inner content area end -->
                </div>
            </div>
        </div>
    </div>
</article>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/content/node--teammember--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 154,  167 => 152,  146 => 134,  142 => 133,  127 => 123,  123 => 122,  108 => 112,  104 => 111,  93 => 103,  85 => 100,  81 => 99,  76 => 97,  66 => 90,  56 => 84,  54 => 81,  53 => 80,  52 => 79,  51 => 78,  50 => 77,  49 => 76,  48 => 75,  47 => 73,  44 => 71,  42 => 70,  39 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/solar/templates/content/node--teammember--full.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/content/node--teammember--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 70);
        static $filters = array("clean_class" => 70, "escape" => 84, "trim" => 112, "striptags" => 112, "render" => 112);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape', 'trim', 'striptags', 'render'],
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
