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

/* themes/custom/solar/templates/content/node--banner--card.html.twig */
class __TwigTemplate_e60642a8faa1fe79d66427ea9a2cb7d3 extends Template
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
        echo " ";
        // line 69
        echo "
";
        // line 70
        $context["layout"] = ((($context["layout"] ?? null)) ? (("layout--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["layout"] ?? null), 70, $this->source)))) : (""));
        // line 71
        echo "
";
        // line 73
        $context["classes"] = [0 => "node swiper-slide", 1 => "banner-two-main-wrapper-solaric", 2 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 76
($context["node"] ?? null), "bundle", [], "any", false, false, true, 76), 76, $this->source))), 3 => ((        // line 77
($context["layout"] ?? null)) ? ("grid-full") : ("")), 4 => ((        // line 78
($context["layout"] ?? null)) ? ("ie11-autorow") : ("")), 5 => ((twig_get_attribute($this->env, $this->source,         // line 79
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 79)) ? ("node--promoted") : ("")), 6 => ((twig_get_attribute($this->env, $this->source,         // line 80
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 80)) ? ("node--sticky") : ("")), 7 => (( !twig_get_attribute($this->env, $this->source,         // line 81
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 81)) ? ("node--unpublished") : ("")), 8 => ((        // line 82
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 82, $this->source)))) : (""))];
        // line 85
        echo "<style>
  .node--view-mode-card video{
    outline: none !important;
    overflow: hidden;
    position: relative;
    top: -10px;
    left: -10px;
    width: 100% !important;
    height: 100% !important;
  }
</style>

";
        // line 97
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_video", [], "any", false, false, true, 97), "entity", [], "any", false, false, true, 97), "uri", [], "any", false, false, true, 97), "value", [], "any", false, false, true, 97))) {
            // line 98
            echo "<article ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 98), 98, $this->source), "html", null, true);
            echo " data-slide-type=\"vdo\">
    <video
    id=\"my-player\"
    class=\"video-js\"   
      controls
      preload=\"auto\"    
      muted         
      data-setup='{}'>
      <source src=\"";
            // line 106
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_video", [], "any", false, false, true, 106), "entity", [], "any", false, false, true, 106), "uri", [], "any", false, false, true, 106), "value", [], "any", false, false, true, 106), 106, $this->source)), "html", null, true);
            echo "\" type=\"video/mp4\"></source>  
    </video>   
</article>
";
        } else {
            // line 110
            echo "  <article ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 110), 110, $this->source), "html", null, true);
            echo " data-slide-type=\"img\" style=\"background-image: url('";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_image", [], "any", false, false, true, 110), "entity", [], "any", false, false, true, 110), "fileuri", [], "any", false, false, true, 110), 110, $this->source)), "html", null, true);
            echo "');\">
    <span class=\"water-text images\"> ";
            // line 111
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_position", [], "any", false, false, true, 111), 111, $this->source));
            echo "</span>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"banner-solari-2-content ptb--200 ptb_sm--130\">                  
                    ";
            // line 116
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title_second", [], "any", false, false, true, 116), 116, $this->source));
            echo "
                    <h2 class=\"banner-title\">
                        ";
            // line 118
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 118, $this->source), "html", null, true);
            echo "
                    </h2>                  
                    <div class=\"disc\">
                      ";
            // line 121
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 121), 121, $this->source));
            echo "
                    </div>      
                      <div class=\"d-none\" id=\"youtube-embed-banner-";
            // line 123
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
            echo "\">
                          <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/";
            // line 124
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_youtube", [], "any", false, false, true, 124), 124, $this->source)))), "html", null, true);
            echo "\" title=\"CME Solar\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>
                      </div>                
                    <div class=\"button-solari-banner-area\">                      
                        <a href=\"";
            // line 127
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_lean_more", [], "any", false, false, true, 127), 0, [], "any", false, false, true, 127)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#url"] ?? null) : null), 127, $this->source), "html", null, true);
            echo "\" class=\"rts-btn btn-primary\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_lean_more", [], "any", false, false, true, 127), 0, [], "any", false, false, true, 127)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#title"] ?? null) : null), 127, $this->source), "html", null, true);
            echo "</a>
                        <div class=\"vedio-icone d-none\">
                            <a class=\"video-play-button play-video-banner-";
            // line 129
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
            echo "\" href=\"#\">
                                <span></span>
                                <p class=\"text\">
                                    ";
            // line 132
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Intro Video"));
            echo "
                                </p>
                            </a>
                            <div class=\"video-overlay\">
                                <a class=\"video-overlay-close\">×</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </article>
";
        }
        // line 146
        echo "


                        
                    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/content/node--banner--card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 146,  147 => 132,  141 => 129,  134 => 127,  128 => 124,  124 => 123,  119 => 121,  113 => 118,  108 => 116,  100 => 111,  93 => 110,  86 => 106,  74 => 98,  72 => 97,  58 => 85,  56 => 82,  55 => 81,  54 => 80,  53 => 79,  52 => 78,  51 => 77,  50 => 76,  49 => 73,  46 => 71,  44 => 70,  41 => 69,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/solar/templates/content/node--banner--card.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/content/node--banner--card.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 70, "if" => 97);
        static $filters = array("clean_class" => 70, "escape" => 98, "raw" => 111, "trim" => 124, "striptags" => 124, "render" => 124, "t" => 132);
        static $functions = array("file_url" => 106);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'raw', 'trim', 'striptags', 'render', 't'],
                ['file_url']
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
