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

/* themes/custom/solar/templates/views/views-view-unformatted--faq.html.twig */
class __TwigTemplate_6a2f7e2ca72df90bcc9708c3148bd3db extends Template
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
        // line 20
        if (($context["title"] ?? null)) {
            // line 21
            echo "  <h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 21, $this->source), "html", null, true);
            echo "</h3>
";
        }
        // line 23
        echo "<div class=\"row g-24 align-items-start\">
  <div class=\"col-lg-6\">
    ";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "solar_questionforus"), "html", null, true);
        echo "
    <div class=\"accordion-solar-faq\">
      <div class=\"accordion\" id=\"accordionExample\">
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 29
            echo "          ";
            // line 30
            $context["row_classes"] = [0 => ((            // line 31
($context["default_row_class"] ?? null)) ? ("views-row accordion-item") : (""))];
            // line 34
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 34)) {
                // line 35
                echo "            <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 35), "addClass", [0 => ($context["row_classes"] ?? null)], "method", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "> 
              <h2 class=\"accordion-header\" id=\"heading";
                // line 36
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 36, $this->source), "html", null, true);
                echo "\">
                <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse";
                // line 37
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 37, $this->source), "html", null, true);
                echo "\" aria-expanded=\"true\" aria-controls=\"collapse";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 37, $this->source), "html", null, true);
                echo "\">
                  ";
                // line 38
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 38)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#node"] ?? null) : null), "title", [], "any", false, false, true, 38)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "value", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                echo " 
                </button>
              </h2>
              <div id=\"collapse";
                // line 41
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 41, $this->source), "html", null, true);
                echo "\" class=\"accordion-collapse collapse show\" aria-labelledby=\"heading";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 41, $this->source), "html", null, true);
                echo "\" data-bs-parent=\"#accordionExample\">
                <div class=\"accordion-body\">
                  ";
                // line 43
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 43)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#node"] ?? null) : null), "body", [], "any", false, false, true, 43)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), "value", [], "any", false, false, true, 43), 43, $this->source));
                echo " 
                </div>
              </div>
            </div>
          ";
            } else {
                // line 48
                echo "            <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 48), "addClass", [0 => ($context["row_classes"] ?? null)], "method", false, false, true, 48), 48, $this->source), "html", null, true);
                echo ">             
              <h2 class=\"accordion-header\" id=\"heading";
                // line 49
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 49, $this->source), "html", null, true);
                echo "\">
                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse";
                // line 50
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 50, $this->source), "html", null, true);
                echo "\" aria-expanded=\"false\" aria-controls=\"collapse";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 50, $this->source), "html", null, true);
                echo "\">
                  ";
                // line 51
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 51)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#node"] ?? null) : null), "title", [], "any", false, false, true, 51)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[0] ?? null) : null), "value", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                echo " 
                </button>
              </h2>
              <div id=\"collapse";
                // line 54
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 54, $this->source), "html", null, true);
                echo "\" class=\"accordion-collapse collapse\" aria-labelledby=\"heading";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 54, $this->source), "html", null, true);
                echo "\" data-bs-parent=\"#accordionExample\">
                <div class=\"accordion-body\">
                  ";
                // line 56
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 56)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["#node"] ?? null) : null), "body", [], "any", false, false, true, 56)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[0] ?? null) : null), "value", [], "any", false, false, true, 56), 56, $this->source));
                echo "
                </div>
              </div>
            </div>  
          ";
            }
            // line 61
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "      </div>
    </div>
  </div>
  <div class=\"col-lg-6 pl--40\">
    <div class=\"faq-solari-image-area\">
      <div class=\"thumbnail-small\">
          <img src=\"/themes/custom/solar/images/04_1.png\" alt=\"solar\">
          <div class=\"video-area-start\">
              <div class=\"vedio-icone\">
                  <a class=\"video-play-button play-video\" href=\"#\">
                      <span></span>
                      <p class=\"text\">                          
                        ";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Watch Our Intro"));
        echo " 
                      </p>
                  </a>
                  <div class=\"video-overlay\">
                      <a class=\"video-overlay-close\">×</a>
                  </div>
              </div>
          </div>
      </div>
      <div class=\"thumbnail-large-bottom\">
          <img src=\"/themes/custom/solar/images/05_1.png\" alt=\"solar\">
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/views/views-view-unformatted--faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 74,  168 => 62,  154 => 61,  146 => 56,  139 => 54,  133 => 51,  127 => 50,  123 => 49,  118 => 48,  110 => 43,  103 => 41,  97 => 38,  91 => 37,  87 => 36,  82 => 35,  79 => 34,  77 => 31,  76 => 30,  74 => 29,  57 => 28,  51 => 25,  47 => 23,  41 => 21,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/solar/templates/views/views-view-unformatted--faq.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/views/views-view-unformatted--faq.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20, "for" => 28, "set" => 30);
        static $filters = array("escape" => 21, "raw" => 43, "t" => 74);
        static $functions = array("drupal_entity" => 25);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'raw', 't'],
                ['drupal_entity']
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
