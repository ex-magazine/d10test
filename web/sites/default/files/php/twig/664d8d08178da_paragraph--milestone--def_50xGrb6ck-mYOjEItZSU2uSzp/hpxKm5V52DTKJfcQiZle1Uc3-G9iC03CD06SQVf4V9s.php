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

/* themes/custom/solar/templates/paragraph/paragraph--milestone--default.html.twig */
class __TwigTemplate_c2188568a9466b2f67d23fbf1259a6cb extends Template
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
        echo "<style>
   
      
      
      

</style>


";
        // line 18
        $this->displayBlock('paragraph', $context, $blocks);
        // line 67
        echo "

";
    }

    // line 18
    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 19), 19, $this->source), "html", null, true);
        echo ">
    ";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "    </div>
";
    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "         
    ";
        // line 21
        $context["count"] = twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_milestone", [], "any", false, false, true, 21)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null), 21, $this->source));
        echo "      
    <div class=\"container\">   
      <div class=\"pres-timeline\" id=\"this-timeline\">        
        <div class=\"periods-container\">
          ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_milestone", [], "any", false, false, true, 25)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#items"] ?? null) : null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            echo "        
          <section class=\"period-single\" period=\"period";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
            echo "\">
            <h4 class=\"year\">";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 27), "bp_card_title", [], "any", false, false, true, 27), "value", [], "any", false, false, true, 27), 27, $this->source));
            echo "</h4>           
          </section>                   
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "          <div class=\"btn-back\"></div>
          <div class=\"btn-next\"></div>
        </div>
        <div class=\"timeline-container\">      
          <div class=\"timeline\"></div>      
          <div class=\"btn-back\"><svg width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" xmlns=\"http://www.w3.org/2000/svg\"><path fill=\"none\" d=\"M0 0h30v30H0z\"/><path fill=\"#D8D8D8\" fill-rule=\"evenodd\" d=\"M11.828 15l7.89-7.89-2.83-2.828L6.283 14.89l.11.11-.11.11L16.89 25.72l2.828-2.83\"/></svg></div>
          <div class=\"btn-next\"><svg width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" xmlns=\"http://www.w3.org/2000/svg\"><path fill=\"none\" d=\"M0 0h30v30H0z\"/><path fill=\"#D8D8D8\" fill-rule=\"evenodd\" d=\"M18.172 14.718l-7.89-7.89L13.112 4l10.606 10.607-.11.11.11.11-10.608 10.61-2.828-2.83 7.89-7.89\"/></svg></div>
        </div>
        <div class=\"cards-container\">
          ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_milestone", [], "any", false, false, true, 39)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#items"] ?? null) : null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            echo "      
          ";
            // line 40
            if (($context["key"] == 0)) {
                echo "     
            <section class=\"card-single active\" period=\"period";
                // line 41
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
                echo "\">
          ";
            } else {
                // line 43
                echo "            <section class=\"card-single\" period=\"period";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
                echo "\">
          ";
            }
            // line 44
            echo "  
              <div class=\"content\">
                <div class='mil-left'>
                <img src=\"";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 47), "bp_image_field", [], "any", false, false, true, 47), "entity", [], "any", false, false, true, 47), "fileuri", [], "any", false, false, true, 47), 47, $this->source)), "html", null, true);
            echo "\" 
                alt=\"";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 48), "bp_image_field", [], "any", false, false, true, 48), "entity", [], "any", false, false, true, 48), "bp_image_field", [], "any", false, false, true, 48), "alt", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "\" 
                title=\"";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 49), "bp_image_field", [], "any", false, false, true, 49), "entity", [], "any", false, false, true, 49), "bp_image_field", [], "any", false, false, true, 49), "alt", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "\" /> 
                </div>
                <div class='mil-right'>
                  <h2 class=\"title\">";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 52), "bp_header", [], "any", false, false, true, 52), "value", [], "any", false, false, true, 52), 52, $this->source));
            echo "</h2>
                  ";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 53), "field_more_text", [], "any", false, false, true, 53), "value", [], "any", false, false, true, 53), 53, $this->source));
            echo "
                </div>
              </div>
            </section>         
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </div>

      </div>
    </div>
        

    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/paragraph/paragraph--milestone--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 58,  168 => 53,  164 => 52,  158 => 49,  154 => 48,  150 => 47,  145 => 44,  139 => 43,  134 => 41,  130 => 40,  124 => 39,  113 => 30,  104 => 27,  100 => 26,  94 => 25,  87 => 21,  81 => 20,  76 => 65,  74 => 20,  69 => 19,  65 => 18,  59 => 67,  57 => 18,  46 => 9,  44 => 6,  43 => 5,  42 => 4,  41 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/solar/templates/paragraph/paragraph--milestone--default.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/paragraph/paragraph--milestone--default.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "block" => 18, "for" => 25, "if" => 40);
        static $filters = array("clean_class" => 4, "escape" => 19, "length" => 21, "raw" => 27);
        static $functions = array("file_url" => 47);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'for', 'if'],
                ['clean_class', 'escape', 'length', 'raw'],
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
