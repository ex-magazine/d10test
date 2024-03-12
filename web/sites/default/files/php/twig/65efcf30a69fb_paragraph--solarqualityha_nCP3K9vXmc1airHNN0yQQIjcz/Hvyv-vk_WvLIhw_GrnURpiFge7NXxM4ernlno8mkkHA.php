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

/* themes/custom/solar/templates/paragraph/paragraph--solarqualityhandymansolution--default.html.twig */
class __TwigTemplate_83a8899a4cc5a6255e6c4507ac4f1ae9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- rts easy step area start -->
";
        // line 3
        $context["classes"] = [0 => "paragraph", 1 => "rts-easy-step-area rts-section-gapBottom reveal", 2 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 6
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 6), 6, $this->source))), 3 => ((        // line 7
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 7, $this->source)))) : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 8
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 8)) ? ("paragraph--unpublished") : (""))];
        // line 11
        $this->displayBlock('paragraph', $context, $blocks);
        // line 104
        echo "<!-- rts easy step area end -->";
    }

    // line 11
    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "  <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 12), 12, $this->source), "html", null, true);
        echo ">
    ";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 102
        echo "  </div>
";
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "  
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"title-area-center title-g\">
                         ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_unrestricted", [], "any", false, false, true, 18), 18, $this->source));
        echo "   
                        <h2 class=\"title skew-up\">
                            ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "    
                        </h2>
                    </div>
                </div>
            </div>
            <div class=\"row mt--10 g-24\">
                <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12\">
                    <!-- single working steps area -->
                    <div class=\"rts-single-working-process\">
                        <div class=\"icon\">
                            ";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_qualityhandyman", [], "any", false, false, true, 30), 0, [], "any", false, false, true, 30), "entity", [], "any", false, false, true, 30), "bp_text", [], "any", false, false, true, 30), "value", [], "any", false, false, true, 30), 30, $this->source));
        echo "
                        </div>
                        <div class=\"content\">
                            <h5 class=\"title\">";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_qualityhandyman", [], "any", false, false, true, 33), 0, [], "any", false, false, true, 33), "entity", [], "any", false, false, true, 33), "bp_header", [], "any", false, false, true, 33), "value", [], "any", false, false, true, 33), 33, $this->source));
        echo "</h5>
                            <p class=\"disc\">
                                ";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_qualityhandyman", [], "any", false, false, true, 35), 0, [], "any", false, false, true, 35), "entity", [], "any", false, false, true, 35), "field_citation", [], "any", false, false, true, 35), "value", [], "any", false, false, true, 35), 35, $this->source));
        echo "
                            </p>
                            <div class=\"step_number\">
                                <span>01</span>
                            </div>
                        </div>
                    </div>
                    <!-- single working steps area end -->
                </div>
                <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mt--70\">
                    <!-- single working steps area -->
                    <div class=\"rts-single-working-process\">
                        <div class=\"icon\">
                            ";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_qualityhandyman", [], "any", false, false, true, 48), 1, [], "any", false, false, true, 48), "entity", [], "any", false, false, true, 48), "bp_text", [], "any", false, false, true, 48), "value", [], "any", false, false, true, 48), 48, $this->source));
        echo "
                        </div>
                        <div class=\"content\">
                            <h5 class=\"title\">";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_qualityhandyman", [], "any", false, false, true, 51), 1, [], "any", false, false, true, 51), "entity", [], "any", false, false, true, 51), "bp_header", [], "any", false, false, true, 51), "value", [], "any", false, false, true, 51), 51, $this->source));
        echo "</h5>
                            <p class=\"disc\">
                                ";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_qualityhandyman", [], "any", false, false, true, 53), 1, [], "any", false, false, true, 53), "entity", [], "any", false, false, true, 53), "field_citation", [], "any", false, false, true, 53), "value", [], "any", false, false, true, 53), 53, $this->source));
        echo "
                            </p>
                            <div class=\"step_number\">
                                <span>02</span>
                            </div>
                        </div>
                    </div>
                    <!-- single working steps area end -->
                </div>
                <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12\">
                    <!-- single working steps area -->
                    <div class=\"rts-single-working-process\">
                        <div class=\"icon\">
                            ";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_qualityhandyman", [], "any", false, false, true, 66), 2, [], "any", false, false, true, 66), "entity", [], "any", false, false, true, 66), "bp_text", [], "any", false, false, true, 66), "value", [], "any", false, false, true, 66), 66, $this->source));
        echo "
                        </div>
                        <div class=\"content\">
                           <h5 class=\"title\">";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_qualityhandyman", [], "any", false, false, true, 69), 2, [], "any", false, false, true, 69), "entity", [], "any", false, false, true, 69), "bp_header", [], "any", false, false, true, 69), "value", [], "any", false, false, true, 69), 69, $this->source));
        echo "</h5>
                            <p class=\"disc\">
                                ";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_qualityhandyman", [], "any", false, false, true, 71), 2, [], "any", false, false, true, 71), "entity", [], "any", false, false, true, 71), "field_citation", [], "any", false, false, true, 71), "value", [], "any", false, false, true, 71), 71, $this->source));
        echo "
                            </p>
                            <div class=\"step_number\">
                                <span>03</span>
                            </div>
                        </div>
                    </div>
                    <!-- single working steps area end -->
                </div>
                <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mt--70\">
                    <!-- single working steps area -->
                    <div class=\"rts-single-working-process\">
                        <div class=\"icon\">
                            ";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_qualityhandyman", [], "any", false, false, true, 84), 3, [], "any", false, false, true, 84), "entity", [], "any", false, false, true, 84), "bp_text", [], "any", false, false, true, 84), "value", [], "any", false, false, true, 84), 84, $this->source));
        echo "
                        </div>
                        <div class=\"content\">
                            <h5 class=\"title\">";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_qualityhandyman", [], "any", false, false, true, 87), 3, [], "any", false, false, true, 87), "entity", [], "any", false, false, true, 87), "bp_header", [], "any", false, false, true, 87), "value", [], "any", false, false, true, 87), 87, $this->source));
        echo "</h5>
                            <p class=\"disc\">
                                ";
        // line 89
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_qualityhandyman", [], "any", false, false, true, 89), 3, [], "any", false, false, true, 89), "entity", [], "any", false, false, true, 89), "field_citation", [], "any", false, false, true, 89), "value", [], "any", false, false, true, 89), 89, $this->source));
        echo "
                            </p>
                            <div class=\"step_number\">
                                <span>04</span>
                            </div>
                        </div>
                    </div>
                    <!-- single working steps area end -->
                </div>
            </div>
        </div>
    
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/paragraph/paragraph--solarqualityhandymansolution--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 89,  186 => 87,  180 => 84,  164 => 71,  159 => 69,  153 => 66,  137 => 53,  132 => 51,  126 => 48,  110 => 35,  105 => 33,  99 => 30,  86 => 20,  81 => 18,  71 => 13,  66 => 102,  64 => 13,  59 => 12,  55 => 11,  51 => 104,  49 => 11,  47 => 8,  46 => 7,  45 => 6,  44 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/solar/templates/paragraph/paragraph--solarqualityhandymansolution--default.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/paragraph/paragraph--solarqualityhandymansolution--default.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "block" => 11);
        static $filters = array("clean_class" => 6, "escape" => 12, "raw" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['clean_class', 'escape', 'raw'],
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
