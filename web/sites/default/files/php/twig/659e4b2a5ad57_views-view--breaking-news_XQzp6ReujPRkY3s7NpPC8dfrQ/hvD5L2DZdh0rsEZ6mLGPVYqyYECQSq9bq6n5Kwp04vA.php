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

/* themes/custom/solar/templates/views/views-view--breaking-news.html.twig */
class __TwigTemplate_40d27d42d0445979c7f87686e2001d6c extends Template
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
        // line 63
        if (($context["rows"] ?? null)) {
            // line 64
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 64, $this->source), "html", null, true);
            echo "    
  ";
        } elseif (        // line 65
($context["empty"] ?? null)) {
            // line 66
            echo "    <div class=\"view-empty\">
      ";
            // line 67
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 67, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 70
        echo "

  ";
        // line 72
        if (($context["pager"] ?? null)) {
            // line 73
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 73, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 75
        echo "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 76
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 77
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 77, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 80
        echo "  ";
        if (($context["more"] ?? null)) {
            // line 81
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 81, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 83
        echo "
    ";
        // line 84
        if (($context["footer"] ?? null)) {
            echo "    sadsas
      ";
            // line 85
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 85, $this->source), "html", null, true);
            echo "   
    ";
        }
        // line 87
        echo " 
  ";
        // line 88
        if (($context["feed_icons"] ?? null)) {
            // line 89
            echo "    <div class=\"feed-icons\">
      ";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 90, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 93
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/views/views-view--breaking-news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 93,  175 => 90,  172 => 89,  170 => 88,  167 => 87,  162 => 85,  158 => 84,  155 => 83,  149 => 81,  146 => 80,  140 => 77,  137 => 76,  134 => 75,  128 => 73,  126 => 72,  122 => 70,  116 => 67,  113 => 66,  111 => 65,  106 => 64,  104 => 63,  100 => 61,  94 => 58,  91 => 57,  88 => 56,  82 => 53,  79 => 52,  76 => 51,  71 => 49,  67 => 48,  62 => 47,  56 => 45,  54 => 44,  50 => 43,  45 => 42,  43 => 39,  42 => 38,  41 => 37,  40 => 36,  39 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/solar/templates/views/views-view--breaking-news.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/views/views-view--breaking-news.html.twig");
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
