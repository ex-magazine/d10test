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

/* themes/custom/solar/templates/content/node--service--servicemain.html.twig */
class __TwigTemplate_693ff46e62dc56578d90efa1a88ec367 extends Template
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
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_servicecategory", [], "any", false, false, true, 71)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "value", [], "any", false, false, true, 71) == 2)) {
            // line 72
            echo "    ";
            $context["cils"] = "cils";
            // line 73
            echo "  ";
        } else {
            // line 74
            echo "  ";
            $context["cils"] = "non-cils";
            // line 75
            echo "  ";
        }
        // line 76
        echo "  ";
        // line 77
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 79
($context["node"] ?? null), "bundle", [], "any", false, false, true, 79), 79, $this->source))), 2 => ((        // line 80
($context["layout"] ?? null)) ? ("grid-full") : ("")), 3 => ((        // line 81
($context["cils"] ?? null)) ? (($context["cils"] ?? null)) : ("")), 4 => ((        // line 82
($context["layout"] ?? null)) ? ("ie11-autorow") : ("")), 5 => ((twig_get_attribute($this->env, $this->source,         // line 83
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 83)) ? ("node--promoted") : ("")), 6 => ((twig_get_attribute($this->env, $this->source,         // line 84
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 84)) ? ("node--sticky") : ("")), 7 => (( !twig_get_attribute($this->env, $this->source,         // line 85
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 85)) ? ("node--unpublished") : ("")), 8 => ((        // line 86
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 86, $this->source)))) : (""))];
        // line 88
        echo " 
  <article";
        // line 89
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 89), 89, $this->source), "html", null, true);
        echo "> 
    <div class=\"single-service-solari\">
        ";
        // line 91
        if ((twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_servicecategory", [], "any", false, false, true, 91)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), "value", [], "any", false, false, true, 91) == 2)) {
            echo "      
          <h2 class=\"title\"><span class=\"counter\">";
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 92, $this->source), "html", null, true);
            echo "</span>+</h2>
          <div class=\"icon-area\">
            <img src=\"";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_icon", [], "any", false, false, true, 94), "entity", [], "any", false, false, true, 94), "fileuri", [], "any", false, false, true, 94), 94, $this->source)), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_icon", [], "any", false, false, true, 94), "alt", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
            echo "\" />             
          </div>          
        ";
        } else {
            // line 97
            echo "          <h2 class=\"title\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 97, $this->source), "html", null, true);
            echo "</h2>
        ";
        }
        // line 99
        echo "        <div class=\"disc\">
          ";
        // line 100
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 100), 100, $this->source));
        echo "
        </div>     
    </div>
  </article>
  ";
        // line 105
        echo "  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/content/node--service--servicemain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 105,  105 => 100,  102 => 99,  96 => 97,  88 => 94,  83 => 92,  79 => 91,  74 => 89,  71 => 88,  69 => 86,  68 => 85,  67 => 84,  66 => 83,  65 => 82,  64 => 81,  63 => 80,  62 => 79,  61 => 77,  59 => 76,  56 => 75,  53 => 74,  50 => 73,  47 => 72,  44 => 71,  42 => 70,  39 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/solar/templates/content/node--service--servicemain.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/content/node--service--servicemain.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 70, "if" => 71);
        static $filters = array("clean_class" => 70, "escape" => 89, "raw" => 100);
        static $functions = array("file_url" => 94);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'raw'],
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
