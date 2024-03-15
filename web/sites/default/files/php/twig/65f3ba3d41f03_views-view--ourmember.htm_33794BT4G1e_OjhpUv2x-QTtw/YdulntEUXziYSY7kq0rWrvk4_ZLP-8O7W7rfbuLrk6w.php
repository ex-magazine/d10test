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

/* themes/custom/solar/templates/views/views-view--ourmember.html.twig */
class __TwigTemplate_d19de69321f5411496ef74d49f6b70af extends Template
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
        // line 34
        $context["classes"] = [0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 36
($context["id"] ?? null), 36, $this->source))), 2 => ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 37
($context["id"] ?? null), 37, $this->source)), 3 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 38
($context["display_id"] ?? null), 38, $this->source)), 4 => ((        // line 39
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 39, $this->source))) : (""))];
        // line 42
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 42), 42, $this->source), "html", null, true);
        echo ">
  ";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 43, $this->source), "html", null, true);
        echo "
  ";
        // line 44
        if (($context["title"] ?? null)) {
            // line 45
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 45, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 47
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 47, $this->source), "html", null, true);
        echo "
  ";
        // line 48
        if (($context["header"] ?? null)) {
            echo "  
      ";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 49, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 51
        echo "  ";
        if (($context["exposed"] ?? null)) {
            // line 52
            echo "    <div class=\"view-filters\">
      ";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 53, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 56
        echo "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 57
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 58, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 61
        echo "
  ";
        // line 62
        if (($context["rows"] ?? null)) {
            // line 63
            echo "      <div class=\"row mt--70\">
        <div class=\"col-lg-12\">
          <div class=\"brand-area-h2\">
            ";
            // line 66
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 66, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
  ";
        } elseif (        // line 70
($context["empty"] ?? null)) {
            // line 71
            echo "    <div class=\"view-empty\">
      ";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 72, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 75
        echo "
  ";
        // line 76
        if (($context["pager"] ?? null)) {
            // line 77
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 77, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 79
        echo "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 80
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 81
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 81, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 84
        echo "  ";
        if (($context["more"] ?? null)) {
            // line 85
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 85, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 87
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 88
            echo "    <div class=\"view-footer\">
      ";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 89, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 92
        echo "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 93
            echo "    <div class=\"feed-icons\">
      ";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 94, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 97
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/views/views-view--ourmember.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 97,  178 => 94,  175 => 93,  172 => 92,  166 => 89,  163 => 88,  160 => 87,  154 => 85,  151 => 84,  145 => 81,  142 => 80,  139 => 79,  133 => 77,  131 => 76,  128 => 75,  122 => 72,  119 => 71,  117 => 70,  110 => 66,  105 => 63,  103 => 62,  100 => 61,  94 => 58,  91 => 57,  88 => 56,  82 => 53,  79 => 52,  76 => 51,  71 => 49,  67 => 48,  62 => 47,  56 => 45,  54 => 44,  50 => 43,  45 => 42,  43 => 39,  42 => 38,  41 => 37,  40 => 36,  39 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/solar/templates/views/views-view--ourmember.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/views/views-view--ourmember.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 34, "if" => 44);
        static $filters = array("clean_class" => 36, "escape" => 42);
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
