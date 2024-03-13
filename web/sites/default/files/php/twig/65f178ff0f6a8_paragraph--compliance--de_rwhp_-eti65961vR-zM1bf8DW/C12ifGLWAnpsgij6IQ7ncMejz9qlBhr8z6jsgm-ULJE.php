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

/* themes/custom/solar/templates/paragraph/paragraph--compliance--default.html.twig */
class __TwigTemplate_40fefbe78592077f85f5e8e1ce1131a4 extends Template
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
        // line 2
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 4
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 4), 4, $this->source))), 2 => ((        // line 5
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 5, $this->source)))) : ("")), 3 => (( !twig_get_attribute($this->env, $this->source,         // line 6
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 6)) ? ("paragraph--unpublished") : (""))];
        // line 9
        $this->displayBlock('paragraph', $context, $blocks);
        // line 61
        echo "

";
    }

    // line 9
    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 10), 10, $this->source), "html", null, true);
        echo ">
    ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "    </div>
";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "         
        <div class=\"wcu-item\">
            <div class=\"s-icon\">
                <div class=\"step\">
                    <p class=\"num-01\">01</p>
                    <p class=\"item-01\">";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_compliance", [], "any", false, false, true, 16), 0, [], "any", false, false, true, 16), "entity", [], "any", false, false, true, 16), "bp_card_title", [], "any", false, false, true, 16), "value", [], "any", false, false, true, 16), 16, $this->source));
        echo "</p>
                </div>
            </div>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "  
                <div class=\"po-item\">
                    <h3>";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_compliance", [], "any", false, false, true, 21), 0, [], "any", false, false, true, 21), "entity", [], "any", false, false, true, 21), "bp_modal_title", [], "any", false, false, true, 21)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), "value", [], "any", false, false, true, 21), 21, $this->source));
            echo "</h3>
                    <div class=\"pdf-item\">
                        ";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::viewFilter($this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_compliance", [], "any", false, false, true, 23), 0, [], "any", false, false, true, 23), "entity", [], "any", false, false, true, 23), "field_pdf", [], "any", false, false, true, 23)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null), 23, $this->source)), "html", null, true);
            echo "                
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </div>
        <div class=\"wcu-item\">
            <div class=\"s-icon\">
                <div class=\"step\">
                    <p class=\"num-01\">02</p>
                    <p class=\"item-01\">";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_compliance", [], "any", false, false, true, 32), 1, [], "any", false, false, true, 32), "entity", [], "any", false, false, true, 32), "bp_card_title", [], "any", false, false, true, 32), "value", [], "any", false, false, true, 32), 32, $this->source));
        echo "</p>
                </div>
            </div>
            <div class=\"po-item\">
                <div class=\"ps\">
                    ";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::viewFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_compliance", [], "any", false, false, true, 37), 1, [], "any", false, false, true, 37), "entity", [], "any", false, false, true, 37), "bp_card_image", [], "any", false, false, true, 37), 37, $this->source)), "html", null, true);
        echo "
                </div>
                <div class=\"item-02\">";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_compliance", [], "any", false, false, true, 39), 1, [], "any", false, false, true, 39), "entity", [], "any", false, false, true, 39), "field_section_content", [], "any", false, false, true, 39), "value", [], "any", false, false, true, 39), 39, $this->source));
        echo "</div>
            </div>
        </div>
        <div class=\"wcu-item\">
            <div class=\"s-icon\">
                <div class=\"step\">
                    <p class=\"num-01\">03</p>
                    <p class=\"item-01\">";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_compliance", [], "any", false, false, true, 46), 2, [], "any", false, false, true, 46), "entity", [], "any", false, false, true, 46), "bp_card_title", [], "any", false, false, true, 46), "value", [], "any", false, false, true, 46), 46, $this->source));
        echo "</p>
                </div>
            </div>
             <div class=\"po-item\">
                <div class=\"esd\">
                    ";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::viewFilter($this->sandbox->ensureToStringAllowed((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_compliance", [], "any", false, false, true, 51), 2, [], "any", false, false, true, 51), "entity", [], "any", false, false, true, 51), "bp_card_image", [], "any", false, false, true, 51)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), 51, $this->source)), "html", null, true);
        echo "
                    ";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::viewFilter($this->sandbox->ensureToStringAllowed((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_compliance", [], "any", false, false, true, 52), 2, [], "any", false, false, true, 52), "entity", [], "any", false, false, true, 52), "bp_card_image", [], "any", false, false, true, 52)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[1] ?? null) : null), 52, $this->source)), "html", null, true);
        echo "
                </div>
                <div class=\"item-02\">";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_compliance", [], "any", false, false, true, 54), 2, [], "any", false, false, true, 54), "entity", [], "any", false, false, true, 54), "field_section_content", [], "any", false, false, true, 54), "value", [], "any", false, false, true, 54), 54, $this->source));
        echo "</div>
            </div>            
        </div>

    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/paragraph/paragraph--compliance--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 54,  150 => 52,  146 => 51,  138 => 46,  128 => 39,  123 => 37,  115 => 32,  108 => 27,  98 => 23,  93 => 21,  86 => 19,  80 => 16,  70 => 11,  65 => 59,  63 => 11,  58 => 10,  54 => 9,  48 => 61,  46 => 9,  44 => 6,  43 => 5,  42 => 4,  41 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/solar/templates/paragraph/paragraph--compliance--default.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/paragraph/paragraph--compliance--default.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "block" => 9, "for" => 19);
        static $filters = array("clean_class" => 4, "escape" => 10, "raw" => 16, "view" => 23);
        static $functions = array("range" => 19);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'for'],
                ['clean_class', 'escape', 'raw', 'view'],
                ['range']
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
