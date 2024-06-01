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

/* themes/custom/solar/templates/paragraph/paragraph--ataglance--default.html.twig */
class __TwigTemplate_07f8895365f7214ef974b5332785abee extends Template
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
        echo "  
";
        // line 10
        $this->displayBlock('paragraph', $context, $blocks);
        // line 33
        echo " 
  ";
    }

    // line 10
    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 11), 11, $this->source), "html", null, true);
        echo ">
    ";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "    </div>
";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "     
        <div class=\"container\"> 
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ataglance", [], "any", false, false, true, 14)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null));
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
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            echo "     
        ";
            // line 15
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 15) % 2 != 0)) {
                // line 16
                echo "            <div class=\"row g-24\">   
        ";
            }
            // line 18
            echo "            <div class=\"col-lg-6 col-md-6 cols-md-12 col-12\">              
                <div class=\"single-service-solari gl";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
            echo "\">
                    <h2>";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 20), "bp_header", [], "any", false, false, true, 20), "value", [], "any", false, false, true, 20), 20, $this->source));
            echo "<span class=\"counter\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 20), "bp_card_title", [], "any", false, false, true, 20), "value", [], "any", false, false, true, 20), 20, $this->source)), "html", null, true);
            echo "</span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 20), "bp_statistic_header", [], "any", false, false, true, 20), "value", [], "any", false, false, true, 20), 20, $this->source));
            echo "</h2>      
                    <div class=\"disc\">
                        ";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 22), "field_text", [], "any", false, false, true, 22), "value", [], "any", false, false, true, 22), 22, $this->source));
            echo "
                    </div>     
                </div>
            </div>
        ";
            // line 26
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 26) % 2 == 0) || twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 26))) {
                // line 27
                echo "            </div>
        ";
            }
            // line 29
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/paragraph/paragraph--ataglance--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 30,  133 => 29,  129 => 27,  127 => 26,  120 => 22,  111 => 20,  107 => 19,  104 => 18,  100 => 16,  98 => 15,  79 => 14,  72 => 12,  67 => 32,  65 => 12,  60 => 11,  56 => 10,  51 => 33,  49 => 10,  46 => 9,  44 => 6,  43 => 5,  42 => 4,  41 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/solar/templates/paragraph/paragraph--ataglance--default.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/paragraph/paragraph--ataglance--default.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "block" => 10, "for" => 14, "if" => 15);
        static $filters = array("clean_class" => 4, "escape" => 11, "raw" => 20, "number_format" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'for', 'if'],
                ['clean_class', 'escape', 'raw', 'number_format'],
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
