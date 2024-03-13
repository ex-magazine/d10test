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

/* themes/custom/solar/templates/content/node--service--teaser.html.twig */
class __TwigTemplate_e7c33bf82dfc63d562a9b21027dae5e6 extends Template
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
($context["node"] ?? null), "bundle", [], "any", false, false, true, 75), 75, $this->source))), 2 => "blog-single-one text-center", 3 => ((        // line 77
($context["layout"] ?? null)) ? ("grid-full") : ("")), 4 => ((        // line 78
($context["layout"] ?? null)) ? ("ie11-autorow") : ("")), 5 => ((twig_get_attribute($this->env, $this->source,         // line 79
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 79)) ? ("node--promoted") : ("")), 6 => ((twig_get_attribute($this->env, $this->source,         // line 80
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 80)) ? ("node--sticky") : ("")), 7 => (( !twig_get_attribute($this->env, $this->source,         // line 81
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 81)) ? ("node--unpublished") : ("")), 8 => ((        // line 82
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 82, $this->source)))) : (""))];
        // line 85
        echo "<article ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 85), 85, $this->source), "html", null, true);
        echo ">    
    <a href=\"";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_linkto", [], "any", false, false, true, 86), 0, [], "any", false, false, true, 86)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#url"] ?? null) : null), 86, $this->source), "html", null, true);
        echo "\" class=\"thumbnail\">
        <div class=\"inner\">
            ";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
        echo "
        </div>
    </a>
    <div class=\"head\">
        <div class=\"date-area single-info\">
            <i class=\"fa-light fa-calendar-days\"></i>
            <p><time>";
        // line 94
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "published_at", [], "any", false, false, true, 94), "getString", [], "any", false, false, true, 94), 94, $this->source), "d M Y"), "html", null, true);
        echo "</time></p>
        </div>      
    </div>
    <div class=\"body text-start\">
        <a href=\"";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_linkto", [], "any", false, false, true, 98), 0, [], "any", false, false, true, 98)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#url"] ?? null) : null), 98, $this->source), "html", null, true);
        echo "\">
            <h5 class=\"title\">";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
        echo "</h5>
        </a>
        <a href=\"";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_linkto", [], "any", false, false, true, 101), 0, [], "any", false, false, true, 101)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#url"] ?? null) : null), 101, $this->source), "html", null, true);
        echo "\" class=\"rts-btn btn-border radious-0\">
            ";
        // line 102
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Read Details"));
        echo "
            <i class=\"fa-regular fa-arrow-up-right\"></i>
        </a>
    </div>
</article>";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/content/node--service--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 102,  91 => 101,  86 => 99,  82 => 98,  75 => 94,  66 => 88,  61 => 86,  56 => 85,  54 => 82,  53 => 81,  52 => 80,  51 => 79,  50 => 78,  49 => 77,  48 => 75,  47 => 73,  44 => 71,  42 => 70,  39 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/solar/templates/content/node--service--teaser.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/content/node--service--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 70);
        static $filters = array("clean_class" => 70, "escape" => 85, "date" => 94, "t" => 102);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape', 'date', 't'],
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
