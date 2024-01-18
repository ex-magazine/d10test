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

/* themes/custom/solar/templates/webform/webform--call-to-action.html.twig */
class __TwigTemplate_cd799faa0c72f8bbcabf43e4594613d5 extends Template
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
        // line 24
        echo "
<div class=\"row\">
\t<div class=\"col-lg-12\">
\t\t<div class=\"cta-solari-wrapper\">
\t\t\t<div class=\"left-area\">
\t\t\t\t";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "elements", [], "any", false, false, true, 29), "processed_text", [], "any", false, false, true, 29), 29, $this->source));
        echo "
\t\t\t</div>
\t\t\t<div class=\"right-area\">\t
\t\t\t\t<form";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 32, $this->source), "html", null, true);
        echo " >\t
\t\t\t\t\t<div class=\"cta-form\">\t\t\t\t\t
\t\t\t\t\t\t";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 34, $this->source), "html", null, true);
        echo "\t
\t\t\t\t\t\t<div class=\"single-input\">
\t\t\t\t\t\t\t";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "elements", [], "any", false, false, true, 36), "your_name", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"single-input\">
\t\t\t\t\t\t\t";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "elements", [], "any", false, false, true, 39), "your_email", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "elements", [], "any", false, false, true, 41), "actions", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "form_build_id", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "form_token", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "form_id", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "\t\t\t\t\t\t
            ";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "confirmation", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 46, $this->source), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</form>\t\t\t\t
\t\t\t</div>\t\t\t
\t\t</div>
\t</div>
</div>


";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/webform/webform--call-to-action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 46,  89 => 45,  85 => 44,  81 => 43,  77 => 42,  73 => 41,  68 => 39,  62 => 36,  57 => 34,  52 => 32,  46 => 29,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme implementation for a 'webform' element.
 *
 * This is an copy of the webform.html.twig theme_wrapper which includes the
 * 'title_prefix' and 'title_suffix' variables needed for
 * contextual links to appear.
 *
 * Available variables
 * - attributes: A list of HTML attributes for the wrapper element.
 * - children: The child elements of the webform.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_webform()
 * @see _webform_form_after_build()
 *
 * @ingroup themeable
 */
#}

<div class=\"row\">
\t<div class=\"col-lg-12\">
\t\t<div class=\"cta-solari-wrapper\">
\t\t\t<div class=\"left-area\">
\t\t\t\t{{ element.elements.processed_text|raw }}
\t\t\t</div>
\t\t\t<div class=\"right-area\">\t
\t\t\t\t<form{{ attributes}} >\t
\t\t\t\t\t<div class=\"cta-form\">\t\t\t\t\t
\t\t\t\t\t\t{{ title_prefix }}\t
\t\t\t\t\t\t<div class=\"single-input\">
\t\t\t\t\t\t\t{{ element.elements.your_name }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"single-input\">
\t\t\t\t\t\t\t{{ element.elements.your_email }}\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{{ element.elements.actions }}
\t\t\t\t\t\t{{ element.form_build_id }}
\t\t\t\t\t\t{{ element.form_token }}
\t\t\t\t\t\t{{ element.form_id }}\t\t\t\t\t\t
            {{ element.confirmation }}
\t\t\t\t\t\t{{ title_suffix }}
\t\t\t\t\t</div>
\t\t\t\t</form>\t\t\t\t
\t\t\t</div>\t\t\t
\t\t</div>
\t</div>
</div>


", "themes/custom/solar/templates/webform/webform--call-to-action.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/webform/webform--call-to-action.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("raw" => 29, "escape" => 32);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['raw', 'escape'],
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
