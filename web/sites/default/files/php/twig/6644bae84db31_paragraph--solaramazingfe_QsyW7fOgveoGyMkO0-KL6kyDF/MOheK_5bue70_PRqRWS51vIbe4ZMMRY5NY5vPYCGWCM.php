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

/* themes/custom/solar/templates/paragraph/paragraph--solaramazingfeedback--default.html.twig */
class __TwigTemplate_da4b3a1f00f33594a1525c10db14e6e8 extends Template
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
        // line 1
        echo "<!-- our clients feedback start -->
";
        // line 3
        $context["classes"] = [0 => "paragraph d-none", 1 => "rts-clients-feedback rts-section-gapBottom bg-feedback-about bg_image", 2 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 6
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 6), 6, $this->source))), 3 => ((        // line 7
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 7, $this->source)))) : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 8
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 8)) ? ("paragraph--unpublished") : (""))];
        // line 11
        $this->displayBlock('paragraph', $context, $blocks);
        // line 154
        echo "<!-- our clients feedback end -->
";
    }

    // line 11
    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "  <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 12), 12, $this->source), "html", null, true);
        echo ">
    ";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 152
        echo "  </div>
";
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"rts-solution-left-area-left\">
                        <div class=\"thumbnail\">
                            ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_card_image", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo " 
                        </div>
                        <div class=\"small-image images\">                            
                            ";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_image_field", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo " 
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 pl--90 pl_md--10 pl_sm--10 mt_md--50 mt_sm--30\">

                    <div class=\"feed-back-about-wrapper reveal\">
                        <div class=\"title-area-left title-g\">
                            ";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_unrestricted", [], "any", false, false, true, 31), 31, $this->source));
        echo "     
                            <h2 class=\"title skew-up\">
                                ";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "  
                            </h2>
                        </div>
                        <div class=\"swiper mySwiper-about-feedback\">
                            <div class=\"swiper-wrapper\">
                                ";
        // line 38
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 38), 0, [], "any", false, false, true, 38), "entity", [], "any", false, false, true, 38), "field_section_content", [], "any", false, false, true, 38), "value", [], "any", false, false, true, 38))) {
            // line 39
            echo "                                <div class=\"swiper-slide\">
                                    <div class=\"feedback-about-swiper-wrapper\">
                                        <div class=\"single-feedback-about\">
                                            <div class=\"head\">
                                                <a href=\"javascript:void(0)\" class=\"thumbnail\">                                                   
                                                    <img src=\"";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 44), 0, [], "any", false, false, true, 44), "entity", [], "any", false, false, true, 44), "bp_card_image", [], "any", false, false, true, 44), "entity", [], "any", false, false, true, 44), "fileuri", [], "any", false, false, true, 44), 44, $this->source), "thumbnail")), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 44), 0, [], "any", false, false, true, 44), "entity", [], "any", false, false, true, 44), "bp_card_image", [], "any", false, false, true, 44), "alt", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 44), 0, [], "any", false, false, true, 44), "entity", [], "any", false, false, true, 44), "bp_card_image", [], "any", false, false, true, 44), "alt", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "\" />                                            
                                                </a>
                                                <div class=\"info\">
                                                    <h5 class=\"title\">";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 47), 0, [], "any", false, false, true, 47), "entity", [], "any", false, false, true, 47), "field_title", [], "any", false, false, true, 47), "value", [], "any", false, false, true, 47), 47, $this->source));
            echo "</h5>
                                                    <span>";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 48), 0, [], "any", false, false, true, 48), "entity", [], "any", false, false, true, 48), "field_source", [], "any", false, false, true, 48), "value", [], "any", false, false, true, 48), 48, $this->source));
            echo "</span>
                                                </div>
                                            </div>
                                            <div class=\"body\">
                                                ";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 52), 0, [], "any", false, false, true, 52), "entity", [], "any", false, false, true, 52), "field_section_content", [], "any", false, false, true, 52), "value", [], "any", false, false, true, 52), 52, $this->source));
            echo "  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
        }
        // line 58
        echo "                                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 58), 1, [], "any", false, false, true, 58), "entity", [], "any", false, false, true, 58), "field_section_content", [], "any", false, false, true, 58), "value", [], "any", false, false, true, 58))) {
            // line 59
            echo "                                <div class=\"swiper-slide\">
                                    <div class=\"feedback-about-swiper-wrapper\">
                                        <div class=\"single-feedback-about\">
                                            <div class=\"head\">
                                                <a href=\"javascript:void(0)\" class=\"thumbnail\">                                                   
                                                    <img src=\"";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 64), 1, [], "any", false, false, true, 64), "entity", [], "any", false, false, true, 64), "bp_card_image", [], "any", false, false, true, 64), "entity", [], "any", false, false, true, 64), "fileuri", [], "any", false, false, true, 64), 64, $this->source), "thumbnail")), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 64), 0, [], "any", false, false, true, 64), "entity", [], "any", false, false, true, 64), "bp_card_image", [], "any", false, false, true, 64), "alt", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 64), 0, [], "any", false, false, true, 64), "entity", [], "any", false, false, true, 64), "bp_card_image", [], "any", false, false, true, 64), "alt", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "\" />                                            
                                                </a>
                                                <div class=\"info\">
                                                    <h5 class=\"title\">";
            // line 67
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 67), 1, [], "any", false, false, true, 67), "entity", [], "any", false, false, true, 67), "field_title", [], "any", false, false, true, 67), "value", [], "any", false, false, true, 67), 67, $this->source));
            echo "</h5>
                                                    <span>";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 68), 1, [], "any", false, false, true, 68), "entity", [], "any", false, false, true, 68), "field_source", [], "any", false, false, true, 68), "value", [], "any", false, false, true, 68), 68, $this->source));
            echo "</span>
                                                </div>
                                            </div>
                                            <div class=\"body\">
                                                ";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 72), 1, [], "any", false, false, true, 72), "entity", [], "any", false, false, true, 72), "field_section_content", [], "any", false, false, true, 72), "value", [], "any", false, false, true, 72), 72, $this->source));
            echo "  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
        }
        // line 78
        echo "                                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 78), 2, [], "any", false, false, true, 78), "entity", [], "any", false, false, true, 78), "field_section_content", [], "any", false, false, true, 78), "value", [], "any", false, false, true, 78))) {
            // line 79
            echo "                                <div class=\"swiper-slide\">
                                    <div class=\"feedback-about-swiper-wrapper\">
                                        <div class=\"single-feedback-about\">
                                            <div class=\"head\">
                                                <a href=\"javascript:void(0)\" class=\"thumbnail\">                                                   
                                                    <img src=\"";
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 84), 2, [], "any", false, false, true, 84), "entity", [], "any", false, false, true, 84), "bp_card_image", [], "any", false, false, true, 84), "entity", [], "any", false, false, true, 84), "fileuri", [], "any", false, false, true, 84), 84, $this->source), "thumbnail")), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 84), 0, [], "any", false, false, true, 84), "entity", [], "any", false, false, true, 84), "bp_card_image", [], "any", false, false, true, 84), "alt", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 84), 0, [], "any", false, false, true, 84), "entity", [], "any", false, false, true, 84), "bp_card_image", [], "any", false, false, true, 84), "alt", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
            echo "\" />                                            
                                                </a>
                                                <div class=\"info\">
                                                    <h5 class=\"title\">";
            // line 87
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 87), 2, [], "any", false, false, true, 87), "entity", [], "any", false, false, true, 87), "field_title", [], "any", false, false, true, 87), "value", [], "any", false, false, true, 87), 87, $this->source));
            echo "</h5>
                                                    <span>";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 88), 2, [], "any", false, false, true, 88), "entity", [], "any", false, false, true, 88), "field_source", [], "any", false, false, true, 88), "value", [], "any", false, false, true, 88), 88, $this->source));
            echo "</span>
                                                </div>
                                            </div>
                                            <div class=\"body\">
                                                ";
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 92), 2, [], "any", false, false, true, 92), "entity", [], "any", false, false, true, 92), "field_section_content", [], "any", false, false, true, 92), "value", [], "any", false, false, true, 92), 92, $this->source));
            echo "  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
        }
        // line 98
        echo "                                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 98), 3, [], "any", false, false, true, 98), "entity", [], "any", false, false, true, 98), "field_section_content", [], "any", false, false, true, 98), "value", [], "any", false, false, true, 98))) {
            // line 99
            echo "                                <div class=\"swiper-slide\">
                                    <div class=\"feedback-about-swiper-wrapper\">
                                        <div class=\"single-feedback-about\">
                                            <div class=\"head\">
                                                <a href=\"javascript:void(0)\" class=\"thumbnail\">                                                   
                                                    <img src=\"";
            // line 104
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 104), 3, [], "any", false, false, true, 104), "entity", [], "any", false, false, true, 104), "bp_card_image", [], "any", false, false, true, 104), "entity", [], "any", false, false, true, 104), "fileuri", [], "any", false, false, true, 104), 104, $this->source), "thumbnail")), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 104), 0, [], "any", false, false, true, 104), "entity", [], "any", false, false, true, 104), "bp_card_image", [], "any", false, false, true, 104), "alt", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 104), 0, [], "any", false, false, true, 104), "entity", [], "any", false, false, true, 104), "bp_card_image", [], "any", false, false, true, 104), "alt", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
            echo "\" />                                            
                                                </a>
                                                <div class=\"info\">
                                                    <h5 class=\"title\">";
            // line 107
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 107), 3, [], "any", false, false, true, 107), "entity", [], "any", false, false, true, 107), "field_title", [], "any", false, false, true, 107), "value", [], "any", false, false, true, 107), 107, $this->source));
            echo "</h5>
                                                    <span>";
            // line 108
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 108), 3, [], "any", false, false, true, 108), "entity", [], "any", false, false, true, 108), "field_source", [], "any", false, false, true, 108), "value", [], "any", false, false, true, 108), 108, $this->source));
            echo "</span>
                                                </div>
                                            </div>
                                            <div class=\"body\">
                                                ";
            // line 112
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 112), 3, [], "any", false, false, true, 112), "entity", [], "any", false, false, true, 112), "field_section_content", [], "any", false, false, true, 112), "value", [], "any", false, false, true, 112), 112, $this->source));
            echo "  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
        }
        // line 118
        echo "                                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 118), 4, [], "any", false, false, true, 118), "entity", [], "any", false, false, true, 118), "field_section_content", [], "any", false, false, true, 118), "value", [], "any", false, false, true, 118))) {
            // line 119
            echo "                                <div class=\"swiper-slide\">
                                    <div class=\"feedback-about-swiper-wrapper\">
                                        <div class=\"single-feedback-about\">
                                            <div class=\"head\">
                                                <a href=\"javascript:void(0)\" class=\"thumbnail\">                                                   
                                                    <img src=\"";
            // line 124
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 124), 4, [], "any", false, false, true, 124), "entity", [], "any", false, false, true, 124), "bp_card_image", [], "any", false, false, true, 124), "entity", [], "any", false, false, true, 124), "fileuri", [], "any", false, false, true, 124), 124, $this->source), "thumbnail")), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 124), 0, [], "any", false, false, true, 124), "entity", [], "any", false, false, true, 124), "bp_card_image", [], "any", false, false, true, 124), "alt", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 124), 0, [], "any", false, false, true, 124), "entity", [], "any", false, false, true, 124), "bp_card_image", [], "any", false, false, true, 124), "alt", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
            echo "\" />                                            
                                                </a>
                                                <div class=\"info\">
                                                    <h5 class=\"title\">";
            // line 127
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 127), 4, [], "any", false, false, true, 127), "entity", [], "any", false, false, true, 127), "field_title", [], "any", false, false, true, 127), "value", [], "any", false, false, true, 127), 127, $this->source));
            echo "</h5>
                                                    <span>";
            // line 128
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 128), 4, [], "any", false, false, true, 128), "entity", [], "any", false, false, true, 128), "field_source", [], "any", false, false, true, 128), "value", [], "any", false, false, true, 128), 128, $this->source));
            echo "</span>
                                                </div>
                                            </div>
                                            <div class=\"body\">
                                                ";
            // line 132
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_amazingfeedback", [], "any", false, false, true, 132), 4, [], "any", false, false, true, 132), "entity", [], "any", false, false, true, 132), "field_section_content", [], "any", false, false, true, 132), "value", [], "any", false, false, true, 132), 132, $this->source));
            echo "  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
        }
        // line 138
        echo "                               
                               
                            </div>
                            <!-- <div class=\"swiper-button-next\"></div>
                            <div class=\"swiper-button-prev\"></div> -->
                            <div class=\"swiper-pagination\"></div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/paragraph/paragraph--solaramazingfeedback--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 138,  304 => 132,  297 => 128,  293 => 127,  283 => 124,  276 => 119,  273 => 118,  264 => 112,  257 => 108,  253 => 107,  243 => 104,  236 => 99,  233 => 98,  224 => 92,  217 => 88,  213 => 87,  203 => 84,  196 => 79,  193 => 78,  184 => 72,  177 => 68,  173 => 67,  163 => 64,  156 => 59,  153 => 58,  144 => 52,  137 => 48,  133 => 47,  123 => 44,  116 => 39,  114 => 38,  106 => 33,  101 => 31,  90 => 23,  84 => 20,  76 => 14,  72 => 13,  67 => 152,  65 => 13,  60 => 12,  56 => 11,  51 => 154,  49 => 11,  47 => 8,  46 => 7,  45 => 6,  44 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/solar/templates/paragraph/paragraph--solaramazingfeedback--default.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/paragraph/paragraph--solaramazingfeedback--default.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "block" => 11, "if" => 38);
        static $filters = array("clean_class" => 6, "escape" => 12, "raw" => 31, "image_style" => 44);
        static $functions = array("file_url" => 44);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape', 'raw', 'image_style'],
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
