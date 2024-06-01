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

/* themes/custom/solar/templates/views/views-view-unformatted--solarfaqpage.html.twig */
class __TwigTemplate_e8017e18d0f7e280f289674f84086812 extends Template
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
        // line 20
        if (($context["title"] ?? null)) {
            // line 21
            echo "  <h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 21, $this->source), "html", null, true);
            echo "</h3>
";
        }
        // line 23
        echo "
<div class=\"faq-area-start-one\">
    <div class=\"accordion\" id=\"accordionExample\">
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
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
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 27
            echo "        ";
            // line 28
            $context["row_classes"] = [0 => ((            // line 29
($context["default_row_class"] ?? null)) ? ("views-row accordion-item") : (""))];
            // line 32
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 32)) {
                // line 33
                echo "
        <div";
                // line 34
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 34), "addClass", [0 => ($context["row_classes"] ?? null)], "method", false, false, true, 34), 34, $this->source), "html", null, true);
                echo ">
            <h2 class=\"accordion-header\" id=\"heading";
                // line 35
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 35, $this->source), "html", null, true);
                echo "\">
                <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse";
                // line 36
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 36, $this->source), "html", null, true);
                echo "\" aria-expanded=\"true\" aria-controls=\"collapse";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 36, $this->source), "html", null, true);
                echo "\">
                    <div class=\"faq-title\">";
                // line 37
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 37)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#node"] ?? null) : null), "title", [], "any", false, false, true, 37)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "value", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                echo "</div>
                    <i class=\"fa-light fa-chevron-down\"></i>
                </button>
            </h2>
            <div id=\"collapse";
                // line 41
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 41, $this->source), "html", null, true);
                echo "\" class=\"accordion-collapse collapse show\" aria-labelledby=\"heading";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 41, $this->source), "html", null, true);
                echo "\" data-bs-parent=\"#accordionExample\">
                <div class=\"accordion-body\">
                    <div class=\"inner\">
                        <div class=\"thumb-area\">              
                            <img src=\"";
                // line 45
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 45)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#node"] ?? null) : null), "field_image", [], "any", false, false, true, 45), "entity", [], "any", false, false, true, 45), "uri", [], "any", false, false, true, 45), "value", [], "any", false, false, true, 45), 45, $this->source), "large")), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 45)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#node"] ?? null) : null), "field_image", [], "any", false, false, true, 45)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null), "alt", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                echo "\">              
                        </div>
                        <div class=\"content\">                          
                            <div class=\"disc\">
                                ";
                // line 49
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 49)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#node"] ?? null) : null), "body", [], "any", false, false, true, 49)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null), "value", [], "any", false, false, true, 49), 49, $this->source));
                echo " 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
            } else {
                // line 57
                echo "        <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 57), "addClass", [0 => ($context["row_classes"] ?? null)], "method", false, false, true, 57), 57, $this->source), "html", null, true);
                echo ">  
            <h2 class=\"accordion-header\" id=\"heading";
                // line 58
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 58, $this->source), "html", null, true);
                echo "\">
                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse";
                // line 59
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 59, $this->source), "html", null, true);
                echo "\" aria-expanded=\"false\" aria-controls=\"collapse";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 59, $this->source), "html", null, true);
                echo "\">
                    <div class=\"faq-title\">";
                // line 60
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 60)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#node"] ?? null) : null), "title", [], "any", false, false, true, 60)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null), "value", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                echo "</div>
                    <i class=\"fa-light fa-chevron-down\"></i>
                </button>
            </h2>
            <div id=\"collapse";
                // line 64
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 64, $this->source), "html", null, true);
                echo "\" class=\"accordion-collapse collapse\" aria-labelledby=\"heading";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 64, $this->source), "html", null, true);
                echo "\" data-bs-parent=\"#accordionExample\">
                <div class=\"accordion-body\">
                    <div class=\"inner\">
                        <div class=\"thumb-area\">                            
                            <img src=\"";
                // line 68
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 68)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["#node"] ?? null) : null), "field_image", [], "any", false, false, true, 68), "entity", [], "any", false, false, true, 68), "uri", [], "any", false, false, true, 68), "value", [], "any", false, false, true, 68), 68, $this->source), "large")), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 68)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["#node"] ?? null) : null), "field_image", [], "any", false, false, true, 68)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[0] ?? null) : null), "alt", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                echo "\" />              
                        </div>
                        <div class=\"content\">                            
                            <div class=\"disc\">
                                ";
                // line 72
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 72)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["#node"] ?? null) : null), "body", [], "any", false, false, true, 72)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[0] ?? null) : null), "value", [], "any", false, false, true, 72), 72, $this->source));
                echo " 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        ";
            }
            // line 80
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "    </div>
</div>

 ";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/views/views-view-unformatted--solarfaqpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 81,  181 => 80,  170 => 72,  161 => 68,  152 => 64,  145 => 60,  139 => 59,  135 => 58,  130 => 57,  119 => 49,  110 => 45,  101 => 41,  94 => 37,  88 => 36,  84 => 35,  80 => 34,  77 => 33,  74 => 32,  72 => 29,  71 => 28,  69 => 27,  52 => 26,  47 => 23,  41 => 21,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/solar/templates/views/views-view-unformatted--solarfaqpage.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/views/views-view-unformatted--solarfaqpage.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20, "for" => 26, "set" => 28);
        static $filters = array("escape" => 21, "image_style" => 45, "raw" => 49);
        static $functions = array("file_url" => 45);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'image_style', 'raw'],
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
