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

/* themes/custom/solar/templates/paragraph/paragraph--wcuagp--default.html.twig */
class __TwigTemplate_d994ccaaf12c52f3513ad7d5da97aad1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 4
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 4), 4, $this->source))), 2 => ((        // line 5
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 5, $this->source)))) : ("")), 3 => (( !twig_get_attribute($this->env, $this->source,         // line 6
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 6)) ? ("paragraph--unpublished") : (""))];
        // line 9
        $this->displayBlock('paragraph', $context, $blocks);
        // line 84
        echo "

";
    }

    // line 9
    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 10), 10, $this->source), "html", null, true);
        echo ">
    ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 82
        echo "    </div>
";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "         
        <div class=\"wcu-item\">
            <div class=\"s-icon\">
                <div class=\"step\">
                    <p class=\"num-01\">01</p>
                    <p class=\"item-01\">";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_wcuagp", [], "any", false, false, true, 16), 0, [], "any", false, false, true, 16), "entity", [], "any", false, false, true, 16), "bp_tab_section_title", [], "any", false, false, true, 16), "value", [], "any", false, false, true, 16), 16, $this->source));
        echo "</p>
                </div>
            </div>
            <p class=\"item-02\">";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_wcuagp", [], "any", false, false, true, 19), 0, [], "any", false, false, true, 19), "entity", [], "any", false, false, true, 19), "bp_unrestricted", [], "any", false, false, true, 19), "value", [], "any", false, false, true, 19), 19, $this->source));
        echo "</p>
        </div>
        <div class=\"wcu-item\">
            <div class=\"s-icon\">
                <div class=\"step\">
                    <p class=\"num-01\">02</p>
                    <p class=\"item-01\">";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_wcuagp", [], "any", false, false, true, 25), 1, [], "any", false, false, true, 25), "entity", [], "any", false, false, true, 25), "bp_tab_section_title", [], "any", false, false, true, 25), "value", [], "any", false, false, true, 25), 25, $this->source));
        echo "</p>
                </div>
            </div>
            <p class=\"item-02\">";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_wcuagp", [], "any", false, false, true, 28), 1, [], "any", false, false, true, 28), "entity", [], "any", false, false, true, 28), "bp_unrestricted", [], "any", false, false, true, 28), "value", [], "any", false, false, true, 28), 28, $this->source));
        echo "</p>
        </div>
        <div class=\"wcu-item\">
            <div class=\"s-icon\">
                <div class=\"step\">
                    <p class=\"num-01\">03</p>
                    <p class=\"item-01\">";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_wcuagp", [], "any", false, false, true, 34), 2, [], "any", false, false, true, 34), "entity", [], "any", false, false, true, 34), "bp_tab_section_title", [], "any", false, false, true, 34), "value", [], "any", false, false, true, 34), 34, $this->source));
        echo "</p>
                </div>
            </div>
            <p class=\"item-02\">";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_wcuagp", [], "any", false, false, true, 37), 2, [], "any", false, false, true, 37), "entity", [], "any", false, false, true, 37), "bp_unrestricted", [], "any", false, false, true, 37), "value", [], "any", false, false, true, 37), 37, $this->source));
        echo "</p>
        </div>
        <div class=\"wcu-item\">
            <div class=\"s-icon\">
                <div class=\"step\">
                    <p class=\"num-01\">04</p>
                    <p class=\"item-01\">";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_wcuagp", [], "any", false, false, true, 43), 3, [], "any", false, false, true, 43), "entity", [], "any", false, false, true, 43), "bp_tab_section_title", [], "any", false, false, true, 43), "value", [], "any", false, false, true, 43), 43, $this->source));
        echo "</p>
                </div>
            </div>
            <p class=\"item-02\">";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_wcuagp", [], "any", false, false, true, 46), 3, [], "any", false, false, true, 46), "entity", [], "any", false, false, true, 46), "bp_unrestricted", [], "any", false, false, true, 46), "value", [], "any", false, false, true, 46), 46, $this->source));
        echo "</p>
        </div>
        ";
        // line 48
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_wcuagp", [], "any", false, false, true, 48), 4, [], "any", false, false, true, 48), "entity", [], "any", false, false, true, 48), "bp_tab_section_title", [], "any", false, false, true, 48), "value", [], "any", false, false, true, 48))) {
            // line 49
            echo "            <div class=\"wcu-item\">
                <div class=\"s-icon\">
                    <div class=\"step\">
                        <p class=\"num-01\">05</p>
                        <p class=\"item-01\">";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_wcuagp", [], "any", false, false, true, 53), 4, [], "any", false, false, true, 53), "entity", [], "any", false, false, true, 53), "bp_tab_section_title", [], "any", false, false, true, 53), "value", [], "any", false, false, true, 53), 53, $this->source));
            echo "</p>
                    </div>
                </div>
                <p class=\"item-02\">";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_wcuagp", [], "any", false, false, true, 56), 4, [], "any", false, false, true, 56), "entity", [], "any", false, false, true, 56), "bp_unrestricted", [], "any", false, false, true, 56), "value", [], "any", false, false, true, 56), 56, $this->source));
            echo "</p>           
                ";
            // line 57
            $context["bonus"] = (twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_wcuagp", [], "any", false, false, true, 57), 4, [], "any", false, false, true, 57), "entity", [], "any", false, false, true, 57), "field_wcuagpitems", [], "any", false, false, true, 57), 57, $this->source)) - 1);
            // line 58
            echo "                <div class=\"swiper mySwiper-about-feedback\">
                    <div class=\"swiper-wrapper\">
                        ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ($context["bonus"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "  
                            <div class=\"swiper-slide\">
                                <div class=\"feedback-about-swiper-wrapper\">
                                    <div class=\"single-feedback-about\">
                                        <div class=\"head\">                                                                            
                                            <img src=\"";
                // line 65
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_wcuagp", [], "any", false, false, true, 65), 4, [], "any", false, false, true, 65), "entity", [], "any", false, false, true, 65), "field_wcuagpitems", [], "any", false, false, true, 65)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), "entity", [], "any", false, false, true, 65), "field_background_image", [], "any", false, false, true, 65), "entity", [], "any", false, false, true, 65), "fileuri", [], "any", false, false, true, 65), 65, $this->source), "project1320x720")), "html", null, true);
                echo "\" 
                                            alt=\"";
                // line 66
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_wcuagp", [], "any", false, false, true, 66), 4, [], "any", false, false, true, 66), "entity", [], "any", false, false, true, 66), "field_wcuagpitems", [], "any", false, false, true, 66)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null), "entity", [], "any", false, false, true, 66), "field_background_image", [], "any", false, false, true, 66), "alt", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                echo "\" 
                                            title=\"";
                // line 67
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_wcuagp", [], "any", false, false, true, 67), 4, [], "any", false, false, true, 67), "entity", [], "any", false, false, true, 67), "field_wcuagpitems", [], "any", false, false, true, 67)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["i"]] ?? null) : null), "entity", [], "any", false, false, true, 67), "field_background_image", [], "any", false, false, true, 67), "alt", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                echo "\">
                                        </div>
                                        <div class=\"body\">
                                            <h5 class=\"title\">";
                // line 70
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_wcuagp", [], "any", false, false, true, 70), 4, [], "any", false, false, true, 70), "entity", [], "any", false, false, true, 70), "field_wcuagpitems", [], "any", false, false, true, 70)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["i"]] ?? null) : null), "entity", [], "any", false, false, true, 70), "bp_statistic_description", [], "any", false, false, true, 70), "value", [], "any", false, false, true, 70), 70, $this->source));
                echo "</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>                       
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                    </div>
                </div>             
            </div>
        ";
        }
        // line 79
        echo "      

    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/paragraph/paragraph--wcuagp--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 79,  196 => 76,  184 => 70,  178 => 67,  174 => 66,  170 => 65,  160 => 60,  156 => 58,  154 => 57,  150 => 56,  144 => 53,  138 => 49,  136 => 48,  131 => 46,  125 => 43,  116 => 37,  110 => 34,  101 => 28,  95 => 25,  86 => 19,  80 => 16,  70 => 11,  65 => 82,  63 => 11,  58 => 10,  54 => 9,  48 => 84,  46 => 9,  44 => 6,  43 => 5,  42 => 4,  41 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{%
  set classes = [
    'paragraph',  
    'paragraph--type--' ~ paragraph.bundle|clean_class,
    view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
    not paragraph.isPublished() ? 'paragraph--unpublished'
  ]
%}
{% block paragraph %}
    <div{{ attributes.addClass(classes) }}>
    {% block content %}         
        <div class=\"wcu-item\">
            <div class=\"s-icon\">
                <div class=\"step\">
                    <p class=\"num-01\">01</p>
                    <p class=\"item-01\">{{ paragraph.field_wcuagp.0.entity.bp_tab_section_title.value|raw  }}</p>
                </div>
            </div>
            <p class=\"item-02\">{{ paragraph.field_wcuagp.0.entity.bp_unrestricted.value|raw  }}</p>
        </div>
        <div class=\"wcu-item\">
            <div class=\"s-icon\">
                <div class=\"step\">
                    <p class=\"num-01\">02</p>
                    <p class=\"item-01\">{{ paragraph.field_wcuagp.1.entity.bp_tab_section_title.value|raw  }}</p>
                </div>
            </div>
            <p class=\"item-02\">{{ paragraph.field_wcuagp.1.entity.bp_unrestricted.value|raw  }}</p>
        </div>
        <div class=\"wcu-item\">
            <div class=\"s-icon\">
                <div class=\"step\">
                    <p class=\"num-01\">03</p>
                    <p class=\"item-01\">{{ paragraph.field_wcuagp.2.entity.bp_tab_section_title.value|raw  }}</p>
                </div>
            </div>
            <p class=\"item-02\">{{ paragraph.field_wcuagp.2.entity.bp_unrestricted.value|raw  }}</p>
        </div>
        <div class=\"wcu-item\">
            <div class=\"s-icon\">
                <div class=\"step\">
                    <p class=\"num-01\">04</p>
                    <p class=\"item-01\">{{ paragraph.field_wcuagp.3.entity.bp_tab_section_title.value|raw  }}</p>
                </div>
            </div>
            <p class=\"item-02\">{{ paragraph.field_wcuagp.3.entity.bp_unrestricted.value|raw  }}</p>
        </div>
        {% if paragraph.field_wcuagp.4.entity.bp_tab_section_title.value is not empty %}
            <div class=\"wcu-item\">
                <div class=\"s-icon\">
                    <div class=\"step\">
                        <p class=\"num-01\">05</p>
                        <p class=\"item-01\">{{ paragraph.field_wcuagp.4.entity.bp_tab_section_title.value|raw  }}</p>
                    </div>
                </div>
                <p class=\"item-02\">{{ paragraph.field_wcuagp.4.entity.bp_unrestricted.value|raw  }}</p>           
                {% set bonus = paragraph.field_wcuagp.4.entity.field_wcuagpitems|length - 1 %}
                <div class=\"swiper mySwiper-about-feedback\">
                    <div class=\"swiper-wrapper\">
                        {% for i in 0..bonus  %}  
                            <div class=\"swiper-slide\">
                                <div class=\"feedback-about-swiper-wrapper\">
                                    <div class=\"single-feedback-about\">
                                        <div class=\"head\">                                                                            
                                            <img src=\"{{ file_url(paragraph.field_wcuagp.4.entity.field_wcuagpitems[i].entity.field_background_image.entity.fileuri|image_style('project1320x720') ) }}\" 
                                            alt=\"{{ paragraph.field_wcuagp.4.entity.field_wcuagpitems[i].entity.field_background_image.alt }}\" 
                                            title=\"{{ paragraph.field_wcuagp.4.entity.field_wcuagpitems[i].entity.field_background_image.alt }}\">
                                        </div>
                                        <div class=\"body\">
                                            <h5 class=\"title\">{{ paragraph.field_wcuagp.4.entity.field_wcuagpitems[i].entity.bp_statistic_description.value|raw  }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>                       
                        {% endfor %}
                    </div>
                </div>             
            </div>
        {% endif %}      

    {% endblock %}
    </div>
{% endblock paragraph %}


", "themes/custom/solar/templates/paragraph/paragraph--wcuagp--default.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/paragraph/paragraph--wcuagp--default.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "block" => 9, "if" => 48, "for" => 60);
        static $filters = array("clean_class" => 4, "escape" => 10, "raw" => 16, "length" => 57, "image_style" => 65);
        static $functions = array("range" => 60, "file_url" => 65);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'for'],
                ['clean_class', 'escape', 'raw', 'length', 'image_style'],
                ['range', 'file_url']
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
