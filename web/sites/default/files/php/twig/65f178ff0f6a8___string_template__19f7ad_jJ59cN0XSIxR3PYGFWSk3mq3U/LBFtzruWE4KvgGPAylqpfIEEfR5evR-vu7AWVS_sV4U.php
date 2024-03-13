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

/* __string_template__19f7adf96a56aaee143b202324e7b0aa */
class __TwigTemplate_f667c75e42d30a8add17efe3d0567256 extends Template
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
        // line 1
        ob_start(function () { return ''; });
        // line 2
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "location", [], "any", false, false, true, 2) == "North")) {
            echo "      
    ";
            // line 3
            $context["sqm_out"] = ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "sqm", [], "any", false, false, true, 3) / 7500) * 1000);
            // line 4
            echo "    <div id=\"efficiency\">
        <h3 class=\"title animated fadeIn\">Congratulations!</h3>
        <p>You have done the first step towards saving your electricity bill and our environment</p>
        <p>Based on the estimation of your roof space area, the installed capacity and generated electricity are below:</p>
        <div class=\"efficiency-result\">
                <div class=\"capacity\">
                    <h4>Capacity (kWp)</h4>
                    <h5>";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["sqm_out"] ?? null), 11, $this->source), 0, ".", ","), "html", null, true);
            echo "</h5>
                </div>
                <div class=\"generation\">
                    <h4>Generation (kWh/year)</h4>
                    <h5>";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, ((($context["sqm_out"] ?? null) * 1000000) / 1000), 1, ".", ","), "html", null, true);
            echo "</h5>
                </div>
                <div class=\"emission\">
                    <h4>CO2 Emission (Tons/year) </h4>
                    <h5>";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, ((($context["sqm_out"] ?? null) * 1023) / 1000), 0, ".", ","), "html", null, true);
            echo "</h5>
                </div>
            </div>
            <p>Disclaimer: Electricity generation in each province will vary, and this calculation will be based on the average electricity production from both the south and north regions of Vietnam.</p>
        </div>
    </div>
";
        }
        // line 26
        echo "
    ";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "location", [], "any", false, false, true, 27) == "South")) {
            echo "      
    ";
            // line 28
            $context["sqm_out"] = ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "sqm", [], "any", false, false, true, 28) / 7500) * 1000);
            // line 29
            echo "    <div id=\"efficiency\">
        <h3 class=\"title animated fadeIn\">Congratulations!</h3>
        <p>You have done the first step towards saving your electricity bill and our environment</p>
        <p>Based on the estimation of your roof space area, the installed capacity and generated electricity are below:</p>
        <div class=\"efficiency-result\">
                <div class=\"capacity\">
                    <h4>Capacity (kWp)</h4>
                    <h5>";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["sqm_out"] ?? null), 36, $this->source), 0, ".", ","), "html", null, true);
            echo "</h5>
                </div>
                <div class=\"generation\">
                    <h4>Generation (kWh/year)</h4>
                    <h5>";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, ((($context["sqm_out"] ?? null) * 1400000) * 1000), 1, ".", ","), "html", null, true);
            echo "</h5>
                </div>
                <div class=\"emission\">
                    <h4>CO2 Emission (Tons/year) </h4>
                    <h5>";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, ((($context["sqm_out"] ?? null) * 1023) / 1000), 0, ".", ","), "html", null, true);
            echo "</h5>
                </div>
            </div>
            <p>Disclaimer: Electricity generation in each province will vary, and this calculation will be based on the average electricity production from both the south and north regions of Vietnam.</p>
        </div>
    </div>
";
        }
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_0_));
    }

    public function getTemplateName()
    {
        return "__string_template__19f7adf96a56aaee143b202324e7b0aa";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 1,  112 => 44,  105 => 40,  98 => 36,  89 => 29,  87 => 28,  83 => 27,  80 => 26,  70 => 19,  63 => 15,  56 => 11,  47 => 4,  45 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__19f7adf96a56aaee143b202324e7b0aa", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 1, "if" => 2, "set" => 3);
        static $filters = array("escape" => 11, "number_format" => 11, "spaceless" => 1);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'if', 'set'],
                ['escape', 'number_format', 'spaceless'],
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
