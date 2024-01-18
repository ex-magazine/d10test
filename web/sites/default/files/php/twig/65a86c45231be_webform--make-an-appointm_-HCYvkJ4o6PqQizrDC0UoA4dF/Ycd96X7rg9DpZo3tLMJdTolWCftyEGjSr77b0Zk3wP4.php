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

/* themes/custom/solar/templates/webform/webform--make-an-appointment.html.twig */
class __TwigTemplate_fa695b04909bd162beffbc8686a97ce7 extends Template
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
        // line 41
        echo "<div class=\"rts-make-an-appoinemtn-area rts-section-gap reveal\">
    <form";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 42, $this->source), "html", null, true);
        echo ">
        <div class=\"container\">
            <div class=\"row align-items-center g-0 bg-appoinment\">
                ";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 45, $this->source), "html", null, true);
        echo "
                ";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 46, $this->source), "html", null, true);
        echo "
                ";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 47, $this->source), "html", null, true);
        echo "
            </div>
        </div>
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/webform/webform--make-an-appointment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 47,  52 => 46,  48 => 45,  42 => 42,  39 => 41,);
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
{# <div id=\"contact-form\" class=\"contact-page-form mt--30\">
<form{{ attributes}}>
{{ title_prefix }}\t
    <div class=\"name-email-wraper\">
        {{ element.elements.your_name }}
        {{ element.elements.your_email }}
    </div>
    {{ element.elements.select_subject }}
    {{ element.elements.type_your_message }}
    {{ element.elements.actions }}
    {{ element.form_build_id }}
    {{ element.form_token }}
    {{ element.form_id }}\t\t\t\t\t\t
    {{ element.confirmation }}
{{ title_suffix }}
</form>
</div> #}
<div class=\"rts-make-an-appoinemtn-area rts-section-gap reveal\">
    <form{{ attributes }}>
        <div class=\"container\">
            <div class=\"row align-items-center g-0 bg-appoinment\">
                {{ title_prefix }}
                {{ children }}
                {{ title_suffix }}
            </div>
        </div>
    </form>
</div>", "themes/custom/solar/templates/webform/webform--make-an-appointment.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/webform/webform--make-an-appointment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 42);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
