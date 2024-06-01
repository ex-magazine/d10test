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

/* themes/custom/solar/templates/views/views-view--ourproject.html.twig */
class __TwigTemplate_4e4895ca1b5ca2da693f4282ee3a32aa extends Template
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
        // line 33
        echo "  ";
        // line 34
        $context["classes"] = [0 => "view", 1 => "rts-project-page-project rts-section-gap", 2 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 37
($context["id"] ?? null), 37, $this->source))), 3 => ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 38
($context["id"] ?? null), 38, $this->source)), 4 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 39
($context["display_id"] ?? null), 39, $this->source)), 5 => ((        // line 40
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 40, $this->source))) : (""))];
        // line 43
        echo "  <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 43), 43, $this->source), "html", null, true);
        echo ">
    <div class=\"container\">
    ";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 45, $this->source), "html", null, true);
        echo "
    ";
        // line 46
        if (($context["title"] ?? null)) {
            // line 47
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 47, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 49
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 49, $this->source), "html", null, true);
        echo "
    ";
        // line 50
        if (($context["header"] ?? null)) {
            echo "  
        ";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 51, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 53
        echo "  
    ";
        // line 54
        if (($context["attachment_before"] ?? null)) {
            // line 55
            echo "      <div class=\"attachment attachment-before\">
        ";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 56, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 59
        echo "  
    ";
        // line 60
        if (($context["rows"] ?? null)) {
            // line 61
            echo "        <div class=\"row g-24\">     
          <div class=\"col-lg-9 col-md-9 col-sm-9 col-12\">
            <div class=\"row g-4\">
            ";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 64, $this->source), "html", null, true);
            echo "     
            </div>
          </div>            
          <div class=\"col-lg-3 col-md-3 col-sm-3 col-12\">
            ";
            // line 68
            if (($context["exposed"] ?? null)) {
                // line 69
                echo "              <div class=\"view-filters\">
                ";
                // line 70
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 70, $this->source), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 73
            echo "          </div>
        </div>
    ";
        } elseif (        // line 75
($context["empty"] ?? null)) {
            // line 76
            echo "    <div class=\"row g-24\">     
      <div class=\"col-lg-9 col-md-9 col-sm-9 col-12\">
        <div class=\"view-empty\">
          ";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 79, $this->source), "html", null, true);
            echo "
        </div>
      </div>            
      <div class=\"col-lg-3 col-md-3 col-sm-3 col-12\">
        ";
            // line 83
            if (($context["exposed"] ?? null)) {
                // line 84
                echo "          <div class=\"view-filters\">
            ";
                // line 85
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 85, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 88
            echo "      </div>
    </div>
      
    ";
        }
        // line 92
        echo "  
    ";
        // line 93
        if (($context["pager"] ?? null)) {
            // line 94
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 94, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 96
        echo "    ";
        if (($context["attachment_after"] ?? null)) {
            // line 97
            echo "      <div class=\"attachment attachment-after\">
        ";
            // line 98
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 98, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 101
        echo "    ";
        if (($context["more"] ?? null)) {
            // line 102
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 102, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 104
        echo "    ";
        if (($context["footer"] ?? null)) {
            // line 105
            echo "      <div class=\"view-footer\">
        ";
            // line 106
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 106, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 109
        echo "    ";
        if (($context["feed_icons"] ?? null)) {
            // line 110
            echo "      <div class=\"feed-icons\">
        ";
            // line 111
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 111, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 114
        echo "    </div>
  </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/views/views-view--ourproject.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 114,  206 => 111,  203 => 110,  200 => 109,  194 => 106,  191 => 105,  188 => 104,  182 => 102,  179 => 101,  173 => 98,  170 => 97,  167 => 96,  161 => 94,  159 => 93,  156 => 92,  150 => 88,  144 => 85,  141 => 84,  139 => 83,  132 => 79,  127 => 76,  125 => 75,  121 => 73,  115 => 70,  112 => 69,  110 => 68,  103 => 64,  98 => 61,  96 => 60,  93 => 59,  87 => 56,  84 => 55,  82 => 54,  79 => 53,  74 => 51,  70 => 50,  65 => 49,  59 => 47,  57 => 46,  53 => 45,  47 => 43,  45 => 40,  44 => 39,  43 => 38,  42 => 37,  41 => 34,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/solar/templates/views/views-view--ourproject.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/views/views-view--ourproject.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 34, "if" => 46);
        static $filters = array("clean_class" => 37, "escape" => 43);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
