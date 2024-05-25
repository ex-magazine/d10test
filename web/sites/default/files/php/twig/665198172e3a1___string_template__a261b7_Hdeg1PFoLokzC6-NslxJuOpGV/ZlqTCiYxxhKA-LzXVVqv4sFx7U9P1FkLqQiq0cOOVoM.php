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

/* __string_template__a261b7caf5b4f477bb74d33548197674 */
class __TwigTemplate_df1e512f3f1c0e6a4fbbe6dc626eeaaf extends Template
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
        echo "<style type=\"text/css\">
    .rts-bread-crumb-area.bg_image { 
      background: url('/sites/default/files/2024-05/solution_7.jpg'); 
    }  
</style>   
<div class=\"rts-bread-crumb-area bg_image\">

        <div class=\"container ptb--65\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
<div class=\"con-tent-main\">
                        <div class=\"wrapper\">
                            <span class=\"bg-text-stok\">Green Projects Details</span>
                            <div class=\"title skew-up\">
                                <a href=\"/green-projects\">Green projects</a>
                            </div>
                            <div class=\"slug skew-up\">
                                <a href=\"/\">HOME /</a>
                                <a class=\"active\" href=\"";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_taxonomy_term"] ?? null), 19, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 19, $this->source), "html", null, true);
        echo " </a>
                            </div>
                        </div>
                    </div>
         </div>
            </div>
        </div>
    </div> ";
    }

    public function getTemplateName()
    {
        return "__string_template__a261b7caf5b4f477bb74d33548197674";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 19,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a261b7caf5b4f477bb74d33548197674", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 19);
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
