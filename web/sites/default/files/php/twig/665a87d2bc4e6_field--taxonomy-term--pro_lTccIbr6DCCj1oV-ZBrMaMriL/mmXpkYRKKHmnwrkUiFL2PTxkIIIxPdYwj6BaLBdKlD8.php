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

/* themes/custom/solar/templates/field/field--taxonomy-term--projectcategory.html.twig */
class __TwigTemplate_f488f3f6a0f30b2e9e5a3d37b029087f extends Template
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
        echo "

";
        // line 43
        $context["classes"] = [0 => "field", 1 => "mt--50", 2 => ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 46
($context["field_name"] ?? null), 46, $this->source))), 3 => ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 47
($context["field_type"] ?? null), 47, $this->source))), 4 => ("field--label-" . $this->sandbox->ensureToStringAllowed(        // line 48
($context["label_display"] ?? null), 48, $this->source)), 5 => (((        // line 49
($context["label_display"] ?? null) == "inline")) ? ("clearfix") : (""))];
        // line 53
        $context["title_classes"] = [0 => "field__label", 1 => (((        // line 55
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 58
        echo "
";
        // line 59
        if (($context["label_hidden"] ?? null)) {
            // line 60
            echo "  ";
            if (($context["multiple"] ?? null)) {
                // line 61
                echo "    <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "field__items"], "method", false, false, true, 61), 61, $this->source), "html", null, true);
                echo ">
      ";
                // line 62
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 63
                    echo "        <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 63), "addClass", [0 => "field__item"], "method", false, false, true, 63), 63, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                    echo "</div>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "    </div>
  ";
            } else {
                // line 67
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 68
                    echo "      <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "field__item"], "method", false, false, true, 68), 68, $this->source), "html", null, true);
                    echo "><h1>";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 68), 68, $this->source)))), "html", null, true);
                    echo "</h1></div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "  ";
            }
        } else {
            // line 72
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 72), 72, $this->source), "html", null, true);
            echo ">
    <";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("label_tag", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["label_tag"] ?? null), 73, $this->source), "div")) : ("div")), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 73, $this->source), "html", null, true);
            echo ">
        ";
            // line 74
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 74, $this->source), "html", null, true);
            echo "
    </";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("label_tag", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["label_tag"] ?? null), 75, $this->source), "div")) : ("div")), "html", null, true);
            echo ">
    ";
            // line 76
            if (($context["multiple"] ?? null)) {
                // line 77
                echo "      <div class=\"field__items\">
    ";
            }
            // line 79
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 80
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 80), "addClass", [0 => "field__item"], "method", false, false, true, 80), 80, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                echo "</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "    ";
            if (($context["multiple"] ?? null)) {
                // line 83
                echo "      </div>
    ";
            }
            // line 85
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/field/field--taxonomy-term--projectcategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 85,  147 => 83,  144 => 82,  133 => 80,  128 => 79,  124 => 77,  122 => 76,  118 => 75,  114 => 74,  109 => 73,  104 => 72,  100 => 70,  89 => 68,  84 => 67,  80 => 65,  69 => 63,  65 => 62,  60 => 61,  57 => 60,  55 => 59,  52 => 58,  50 => 55,  49 => 53,  47 => 49,  46 => 48,  45 => 47,  44 => 46,  43 => 43,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/solar/templates/field/field--taxonomy-term--projectcategory.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/field/field--taxonomy-term--projectcategory.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 43, "if" => 59, "for" => 62);
        static $filters = array("clean_class" => 46, "escape" => 61, "trim" => 68, "striptags" => 68, "render" => 68, "default" => 73);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'escape', 'trim', 'striptags', 'render', 'default'],
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
