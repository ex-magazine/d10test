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

/* themes/custom/solar/templates/content/node--news--ournewsleft.html.twig */
class __TwigTemplate_35673affe0b41f33bbb62370d2f35a4f extends Template
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
        // line 71
        echo "
";
        // line 72
        $context["layout"] = ((($context["layout"] ?? null)) ? (("layout--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["layout"] ?? null), 72, $this->source)))) : (""));
        // line 73
        echo "
";
        // line 75
        $context["classes"] = [0 => "node single-blog-solaric-lg", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 77
($context["node"] ?? null), "bundle", [], "any", false, false, true, 77), 77, $this->source))), 2 => ((        // line 78
($context["layout"] ?? null)) ? ("grid-full") : ("")), 3 => ((        // line 79
($context["layout"] ?? null)) ? ("ie11-autorow") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,         // line 80
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 80)) ? ("node--promoted") : ("")), 5 => ((twig_get_attribute($this->env, $this->source,         // line 81
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 81)) ? ("node--sticky") : ("")), 6 => (( !twig_get_attribute($this->env, $this->source,         // line 82
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 82)) ? ("node--unpublished") : ("")), 7 => ((        // line 83
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 83, $this->source)))) : (""))];
        // line 86
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 86), 86, $this->source), "html", null, true);
        echo ">
    <a href=\"";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 87, $this->source), "html", null, true);
        echo "\" rel=\"bookmark\" class=\"thumbnail\">
      ";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
        echo "
    </a>
    <div class=\"inner-content-solari-blog\">
      <div class=\"head\">
          <div class=\"single\">
              <i class=\"fa-regular fa-clock\"></i>
              <span>";
        // line 94
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "created", [], "any", false, false, true, 94), "value", [], "any", false, false, true, 94), 94, $this->source), "d M, Y"), "html", null, true);
        echo "</span>
          </div>
          <div class=\"single\">
              <i class=\"fa-regular fa-user\"></i>
              <span";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 98, $this->source), "html", null, true);
        echo ">
                ";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("By"));
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 99, $this->source), "html", null, true);
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_0_));
        // line 100
        echo "              </span>
          </div>
          <div class=\"single\">
              <i class=\"fa-light fa-phone-office\"></i>
              ";
        // line 104
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_time_to_read", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
        echo "
          </div>
      </div>
      <div class=\"body\"> 
        <a href=\"";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 108, $this->source), "html", null, true);
        echo "\" rel=\"bookmark\">
            <h2 class=\"title\">";
        // line 109
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 109, $this->source), "html", null, true);
        echo "</h2>
        </a>
        <a href=\"";
        // line 111
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 111, $this->source), "html", null, true);
        echo "\" rel=\"bookmark\" class=\"rts-btn btn-primary\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Read More"));
        echo "</a>
      </div>
    </div>
</article>";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/content/node--news--ournewsleft.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 111,  113 => 109,  109 => 108,  102 => 104,  96 => 100,  89 => 99,  85 => 98,  78 => 94,  69 => 88,  65 => 87,  60 => 86,  58 => 83,  57 => 82,  56 => 81,  55 => 80,  54 => 79,  53 => 78,  52 => 77,  51 => 75,  48 => 73,  46 => 72,  43 => 71,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/solar/templates/content/node--news--ournewsleft.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/content/node--news--ournewsleft.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 72, "apply" => 99);
        static $filters = array("clean_class" => 72, "escape" => 86, "date" => 94, "t" => 99, "spaceless" => 99);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'apply'],
                ['clean_class', 'escape', 'date', 't', 'spaceless'],
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
