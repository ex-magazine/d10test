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

/* themes/custom/solar/templates/content/node--project-details--latestcasestudies.html.twig */
class __TwigTemplate_f6fcb2edd240dec87d573ccfc85a0f47 extends Template
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
        $context["classes"] = [0 => "node", 1 => "single-case-ac", 2 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 76
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
  <a href=\"";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 86, $this->source), "html", null, true);
        echo "\" rel=\"bookmark\" class=\"thumbnail\">
    ";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
        echo "
  </a>  
  <div class=\"inner-content\">
      <div class=\"inner\">
          <div class=\"pre\">";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_category", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
        echo "</div>
          <a href=\"";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 92, $this->source), "html", null, true);
        echo "\" rel=\"bookmark\">
              <h2 class=\"title\">";
        // line 93
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_projectname", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
        echo "</h2>
          </a>
      </div>
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/content/node--project-details--latestcasestudies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 93,  76 => 92,  72 => 91,  65 => 87,  61 => 86,  56 => 85,  54 => 82,  53 => 81,  52 => 80,  51 => 79,  50 => 78,  49 => 77,  48 => 76,  47 => 73,  44 => 71,  42 => 70,  39 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/solar/templates/content/node--project-details--latestcasestudies.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/content/node--project-details--latestcasestudies.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 70);
        static $filters = array("clean_class" => 70, "escape" => 85);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape'],
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
