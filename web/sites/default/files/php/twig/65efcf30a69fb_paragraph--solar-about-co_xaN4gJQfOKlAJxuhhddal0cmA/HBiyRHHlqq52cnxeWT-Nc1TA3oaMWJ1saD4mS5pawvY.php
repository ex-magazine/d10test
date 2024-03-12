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

/* themes/custom/solar/templates/paragraph/paragraph--solar-about-company--default.html.twig */
class __TwigTemplate_1257a6d4c8ef904816e9e09336ce654c extends Template
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
        echo "<!-- rts about area start --> 
";
        // line 3
        $context["classes"] = [0 => "paragraph", 1 => "rts-about-area rts-section-gap", 2 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 6
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 6), 6, $this->source))), 3 => ((        // line 7
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 7, $this->source)))) : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 8
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 8)) ? ("paragraph--unpublished") : (""))];
        // line 11
        $this->displayBlock('paragraph', $context, $blocks);
        // line 297
        echo "
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
        // line 295
        echo "  </div>
";
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6\">
                    <!-- about inner solar energy -->
                    <div class=\"rts-about-left-image-area\">
                        <div class=\"thumbnail\">                           
                            ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_card_image", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo " 
                        </div>
                    </div>
                    <!-- about inner solar energy end -->
                </div>
                <div class=\"col-lg-6\">
                    <!-- about nrighht content area start -->
                    <div class=\"about-right-content-area-solar-energy\">
                        <div class=\"title-area-left\">
                            ";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_unrestricted", [], "any", false, false, true, 29), 29, $this->source));
        echo "                         
                            <h2 class=\"title skew-up\">                            
                                ";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "                                
                            </h2>
                        </div>
                        <!-- tab area start about -->
                        <ul class=\"nav custom-nav-soalr-about nav-pills\" id=\"pills-tab\" role=\"tablist\">
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link active\" id=\"pills-home-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-home\" type=\"button\" role=\"tab\" aria-controls=\"pills-home\" aria-selected=\"true\">";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 37), 0, [], "any", false, false, true, 37), "entity", [], "any", false, false, true, 37), "bp_modal_title", [], "any", false, false, true, 37), "value", [], "any", false, false, true, 37), 37, $this->source));
        echo "</button>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link\" id=\"pills-profile-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-profile\" type=\"button\" role=\"tab\" aria-controls=\"pills-profile\" aria-selected=\"false\">";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 40), 1, [], "any", false, false, true, 40), "entity", [], "any", false, false, true, 40), "bp_modal_title", [], "any", false, false, true, 40), "value", [], "any", false, false, true, 40), 40, $this->source));
        echo "</button>
                            </li>
                            ";
        // line 42
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 42), 2, [], "any", false, false, true, 42), "entity", [], "any", false, false, true, 42), "bp_modal_title", [], "any", false, false, true, 42), "value", [], "any", false, false, true, 42))) {
            // line 43
            echo "                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link\" id=\"pills-contact-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-contact\" type=\"button\" role=\"tab\" aria-controls=\"pills-contact\" aria-selected=\"false\">";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 44), 2, [], "any", false, false, true, 44), "entity", [], "any", false, false, true, 44), "bp_modal_title", [], "any", false, false, true, 44), "value", [], "any", false, false, true, 44), 44, $this->source));
            echo "</button>
                            </li>
                            ";
        }
        // line 47
        echo "                        </ul>

                        <!-- nav content start -->
                        <div class=\"tab-content\" id=\"pills-tabContent\">
                            <div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
                                <!-- single nav content start -->
                                <div class=\"single-about-content-solar\">
                                    <div class=\"disc\">
                                        ";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 55), 0, [], "any", false, false, true, 55), "entity", [], "any", false, false, true, 55), "field_section_content", [], "any", false, false, true, 55), "value", [], "any", false, false, true, 55), 55, $this->source));
        echo "                                        
                                    </div>
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-lg-6\">
                                            <div class=\"left-area-wrapper\">             
                                                <img src=\"";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 60), 0, [], "any", false, false, true, 60), "entity", [], "any", false, false, true, 60), "bp_card_image", [], "any", false, false, true, 60), "entity", [], "any", false, false, true, 60), "fileuri", [], "any", false, false, true, 60), 60, $this->source), "wide")), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 60), 0, [], "any", false, false, true, 60), "entity", [], "any", false, false, true, 60), "bp_card_image", [], "any", false, false, true, 60), "alt", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 60), 0, [], "any", false, false, true, 60), "entity", [], "any", false, false, true, 60), "bp_card_image", [], "any", false, false, true, 60), "alt", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "\" />                                            
                                               
                                            </div>
                                        </div>
                                        <div class=\"col-lg-6\">
                                            
                                            ";
        // line 66
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 66), 0, [], "any", false, false, true, 66), "entity", [], "any", false, false, true, 66), "field_items", [], "any", false, false, true, 66), 0, [], "any", false, false, true, 66), "entity", [], "any", false, false, true, 66), "bp_text", [], "any", false, false, true, 66), "value", [], "any", false, false, true, 66))) {
            // line 67
            echo "                                            <div class=\"single-ckeck-wrapper\">
                                                <img src=\"/themes/custom/solar/images/dt.png\" alt=\"CME Solar\" />                                        
                                                ";
            // line 69
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 69), 0, [], "any", false, false, true, 69), "entity", [], "any", false, false, true, 69), "field_items", [], "any", false, false, true, 69), 0, [], "any", false, false, true, 69), "entity", [], "any", false, false, true, 69), "bp_text", [], "any", false, false, true, 69), "value", [], "any", false, false, true, 69), 69, $this->source));
            echo "   
                                            </div>
                                            ";
        }
        // line 72
        echo "                                            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 72), 0, [], "any", false, false, true, 72), "entity", [], "any", false, false, true, 72), "field_items", [], "any", false, false, true, 72), 1, [], "any", false, false, true, 72), "entity", [], "any", false, false, true, 72), "bp_text", [], "any", false, false, true, 72), "value", [], "any", false, false, true, 72))) {
            // line 73
            echo "                                            <div class=\"single-ckeck-wrapper\">
                                                <img src=\"/themes/custom/solar/images/dt.png\" alt=\"CME Solar\" />                                        
                                                ";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 75), 0, [], "any", false, false, true, 75), "entity", [], "any", false, false, true, 75), "field_items", [], "any", false, false, true, 75), 1, [], "any", false, false, true, 75), "entity", [], "any", false, false, true, 75), "bp_text", [], "any", false, false, true, 75), "value", [], "any", false, false, true, 75), 75, $this->source));
            echo "   
                                            </div>
                                            ";
        }
        // line 78
        echo "                                              ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 78), 0, [], "any", false, false, true, 78), "entity", [], "any", false, false, true, 78), "field_items", [], "any", false, false, true, 78), 2, [], "any", false, false, true, 78), "entity", [], "any", false, false, true, 78), "bp_text", [], "any", false, false, true, 78), "value", [], "any", false, false, true, 78))) {
            // line 79
            echo "                                            <div class=\"single-ckeck-wrapper\">
                                                <img src=\"/themes/custom/solar/images/dt.png\" alt=\"CME Solar\" />                                     
                                                ";
            // line 81
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 81), 0, [], "any", false, false, true, 81), "entity", [], "any", false, false, true, 81), "field_items", [], "any", false, false, true, 81), 2, [], "any", false, false, true, 81), "entity", [], "any", false, false, true, 81), "bp_text", [], "any", false, false, true, 81), "value", [], "any", false, false, true, 81), 81, $this->source));
            echo "   
                                            </div>
                                            ";
        }
        // line 84
        echo "                                              ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 84), 0, [], "any", false, false, true, 84), "entity", [], "any", false, false, true, 84), "field_items", [], "any", false, false, true, 84), 3, [], "any", false, false, true, 84), "entity", [], "any", false, false, true, 84), "bp_text", [], "any", false, false, true, 84), "value", [], "any", false, false, true, 84))) {
            // line 85
            echo "                                            <div class=\"single-ckeck-wrapper\">
                                                <img src=\"/themes/custom/solar/images/dt.png\" alt=\"CME Solar\" />                                        
                                                ";
            // line 87
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 87), 0, [], "any", false, false, true, 87), "entity", [], "any", false, false, true, 87), "field_items", [], "any", false, false, true, 87), 3, [], "any", false, false, true, 87), "entity", [], "any", false, false, true, 87), "bp_text", [], "any", false, false, true, 87), "value", [], "any", false, false, true, 87), 87, $this->source));
            echo "   
                                            </div>
                                            ";
        }
        // line 90
        echo "                                              ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 90), 0, [], "any", false, false, true, 90), "entity", [], "any", false, false, true, 90), "field_items", [], "any", false, false, true, 90), 4, [], "any", false, false, true, 90), "entity", [], "any", false, false, true, 90), "bp_text", [], "any", false, false, true, 90), "value", [], "any", false, false, true, 90))) {
            // line 91
            echo "                                            <div class=\"single-ckeck-wrapper\">
                                                <img src=\"/themes/custom/solar/images/dt.png\" alt=\"CME Solar\" />                                        
                                                ";
            // line 93
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 93), 0, [], "any", false, false, true, 93), "entity", [], "any", false, false, true, 93), "field_items", [], "any", false, false, true, 93), 4, [], "any", false, false, true, 93), "entity", [], "any", false, false, true, 93), "bp_text", [], "any", false, false, true, 93), "value", [], "any", false, false, true, 93), 93, $this->source));
            echo "   
                                            </div>
                                            ";
        }
        // line 96
        echo "                                          
                                        </div>
                                    </div>
                                    <!-- vedio area start -->
                                    <div class=\"vedio-area-start\">                                   
                                        ";
        // line 101
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 101), 0, [], "any", false, false, true, 101), "entity", [], "any", false, false, true, 101), "bp_card_link", [], "any", false, false, true, 101), 0, [], "any", false, false, true, 101), "url", [], "any", false, false, true, 101), "external", [], "any", false, false, true, 101)) {
            // line 102
            echo "                                            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 102), 0, [], "any", false, false, true, 102), "entity", [], "any", false, false, true, 102), "bp_card_link", [], "any", false, false, true, 102), "uri", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
            echo "\" class=\"rts-btn btn-primary\">
                                                ";
            // line 103
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 103), 0, [], "any", false, false, true, 103), "entity", [], "any", false, false, true, 103), "bp_card_link", [], "any", false, false, true, 103), "title", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
            echo "
                                                <i class=\"fa-regular fa-arrow-right\"></i>
                                            </a>                                      
                                        ";
        } else {
            // line 106
            echo "         
                                            <a href=\"";
            // line 107
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 107), 0, [], "any", false, false, true, 107), "entity", [], "any", false, false, true, 107), "bp_card_link", [], "any", false, false, true, 107), 0, [], "any", false, false, true, 107), "url", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo "\" class=\"rts-btn btn-primary\">
                                                ";
            // line 108
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 108), 0, [], "any", false, false, true, 108), "entity", [], "any", false, false, true, 108), "bp_card_link", [], "any", false, false, true, 108), "title", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            echo "
                                                <i class=\"fa-regular fa-arrow-right\"></i>
                                            </a>
                                        ";
        }
        // line 111
        echo "                                        
                                        <div class=\"d-none\" id=\"youtube-embed\">
                                            <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/";
        // line 113
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 113), 0, [], "any", false, false, true, 113), "entity", [], "any", false, false, true, 113), "bp_card_title", [], "any", false, false, true, 113), "value", [], "any", false, false, true, 113), 113, $this->source)))), "html", null, true);
        echo "\" title=\"CME Solar\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>
                                        </div>
                                        <div class=\"vedio-icone\">
                                            <a class=\" play-video video-play-button\" href=\"#\"> 
                                                <span></span>
                                                <p class=\"text\">
                                                    ";
        // line 119
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 119), 0, [], "any", false, false, true, 119), "entity", [], "any", false, false, true, 119), "bp_accordion_section_title", [], "any", false, false, true, 119), "value", [], "any", false, false, true, 119), 119, $this->source));
        echo "  
                                                </p>
                                            </a>
                                            <div class=\"video-overlay\">
                                                <a class=\"video-overlay-close\">×</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- vedio area end -->
                                </div>
                                <!-- single nav content end -->
                            </div>
                            <div class=\"tab-pane fade\" id=\"pills-profile\" role=\"tabpanel\" aria-labelledby=\"pills-profile-tab\">
                                <!-- single nav content start -->
                                <div class=\"single-about-content-solar\">
                                    <div class=\"disc\">
                                        ";
        // line 135
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 135), 1, [], "any", false, false, true, 135), "entity", [], "any", false, false, true, 135), "field_section_content", [], "any", false, false, true, 135), "value", [], "any", false, false, true, 135), 135, $this->source));
        echo "                                        
                                    </div>
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-lg-6\">
                                            <div class=\"left-area-wrapper\">
                                                <img src=\"";
        // line 140
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 140), 1, [], "any", false, false, true, 140), "entity", [], "any", false, false, true, 140), "bp_card_image", [], "any", false, false, true, 140), "entity", [], "any", false, false, true, 140), "fileuri", [], "any", false, false, true, 140), 140, $this->source), "wide")), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 140), 1, [], "any", false, false, true, 140), "entity", [], "any", false, false, true, 140), "bp_card_image", [], "any", false, false, true, 140), "alt", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 140), 1, [], "any", false, false, true, 140), "entity", [], "any", false, false, true, 140), "bp_card_image", [], "any", false, false, true, 140), "alt", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
        echo "\" />    
                                            </div>
                                        </div>
                                        <div class=\"col-lg-6\">
                                            ";
        // line 144
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 144), 1, [], "any", false, false, true, 144), "entity", [], "any", false, false, true, 144), "field_items", [], "any", false, false, true, 144), 0, [], "any", false, false, true, 144), "entity", [], "any", false, false, true, 144), "bp_text", [], "any", false, false, true, 144), "value", [], "any", false, false, true, 144))) {
            // line 145
            echo "                                            <div class=\"single-ckeck-wrapper\">
                                                <img src=\"/themes/custom/solar/images/dt.png\" alt=\"CME Solar\" />                                         
                                                ";
            // line 147
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 147), 1, [], "any", false, false, true, 147), "entity", [], "any", false, false, true, 147), "field_items", [], "any", false, false, true, 147), 0, [], "any", false, false, true, 147), "entity", [], "any", false, false, true, 147), "bp_text", [], "any", false, false, true, 147), "value", [], "any", false, false, true, 147), 147, $this->source));
            echo "   
                                            </div>
                                            ";
        }
        // line 150
        echo "                                            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 150), 1, [], "any", false, false, true, 150), "entity", [], "any", false, false, true, 150), "field_items", [], "any", false, false, true, 150), 1, [], "any", false, false, true, 150), "entity", [], "any", false, false, true, 150), "bp_text", [], "any", false, false, true, 150), "value", [], "any", false, false, true, 150))) {
            // line 151
            echo "                                            <div class=\"single-ckeck-wrapper\">
                                                <img src=\"/themes/custom/solar/images/dt.png\" alt=\"CME Solar\" />                                      
                                                ";
            // line 153
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 153), 1, [], "any", false, false, true, 153), "entity", [], "any", false, false, true, 153), "field_items", [], "any", false, false, true, 153), 1, [], "any", false, false, true, 153), "entity", [], "any", false, false, true, 153), "bp_text", [], "any", false, false, true, 153), "value", [], "any", false, false, true, 153), 153, $this->source));
            echo "   
                                            </div>
                                            ";
        }
        // line 156
        echo "                                              ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 156), 1, [], "any", false, false, true, 156), "entity", [], "any", false, false, true, 156), "field_items", [], "any", false, false, true, 156), 2, [], "any", false, false, true, 156), "entity", [], "any", false, false, true, 156), "bp_text", [], "any", false, false, true, 156), "value", [], "any", false, false, true, 156))) {
            // line 157
            echo "                                            <div class=\"single-ckeck-wrapper\">
                                                <img src=\"/themes/custom/solar/images/dt.png\" alt=\"CME Solar\" />                                          
                                                ";
            // line 159
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 159), 1, [], "any", false, false, true, 159), "entity", [], "any", false, false, true, 159), "field_items", [], "any", false, false, true, 159), 2, [], "any", false, false, true, 159), "entity", [], "any", false, false, true, 159), "bp_text", [], "any", false, false, true, 159), "value", [], "any", false, false, true, 159), 159, $this->source));
            echo "   
                                            </div>
                                            ";
        }
        // line 162
        echo "                                              ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 162), 1, [], "any", false, false, true, 162), "entity", [], "any", false, false, true, 162), "field_items", [], "any", false, false, true, 162), 3, [], "any", false, false, true, 162), "entity", [], "any", false, false, true, 162), "bp_text", [], "any", false, false, true, 162), "value", [], "any", false, false, true, 162))) {
            // line 163
            echo "                                            <div class=\"single-ckeck-wrapper\">
                                                <img src=\"/themes/custom/solar/images/dt.png\" alt=\"CME Solar\" />                                      
                                                ";
            // line 165
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 165), 1, [], "any", false, false, true, 165), "entity", [], "any", false, false, true, 165), "field_items", [], "any", false, false, true, 165), 3, [], "any", false, false, true, 165), "entity", [], "any", false, false, true, 165), "bp_text", [], "any", false, false, true, 165), "value", [], "any", false, false, true, 165), 165, $this->source));
            echo "   
                                            </div>
                                            ";
        }
        // line 168
        echo "                                              ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 168), 1, [], "any", false, false, true, 168), "entity", [], "any", false, false, true, 168), "field_items", [], "any", false, false, true, 168), 4, [], "any", false, false, true, 168), "entity", [], "any", false, false, true, 168), "bp_text", [], "any", false, false, true, 168), "value", [], "any", false, false, true, 168))) {
            // line 169
            echo "                                            <div class=\"single-ckeck-wrapper\">
                                                <img src=\"/themes/custom/solar/images/dt.png\" alt=\"CME Solar\" />                                         
                                                ";
            // line 171
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 171), 1, [], "any", false, false, true, 171), "entity", [], "any", false, false, true, 171), "field_items", [], "any", false, false, true, 171), 4, [], "any", false, false, true, 171), "entity", [], "any", false, false, true, 171), "bp_text", [], "any", false, false, true, 171), "value", [], "any", false, false, true, 171), 171, $this->source));
            echo "   
                                            </div>
                                            ";
        }
        // line 174
        echo "                                        </div>
                                    </div>
                                    <!-- vedio area start -->
                                    <div class=\"vedio-area-start\">
                                         ";
        // line 178
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 178), 1, [], "any", false, false, true, 178), "entity", [], "any", false, false, true, 178), "bp_card_link", [], "any", false, false, true, 178), 0, [], "any", false, false, true, 178), "url", [], "any", false, false, true, 178), "external", [], "any", false, false, true, 178)) {
            // line 179
            echo "                                            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 179), 1, [], "any", false, false, true, 179), "entity", [], "any", false, false, true, 179), "bp_card_link", [], "any", false, false, true, 179), "uri", [], "any", false, false, true, 179), 179, $this->source), "html", null, true);
            echo "\" class=\"rts-btn btn-primary\">
                                                ";
            // line 180
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 180), 1, [], "any", false, false, true, 180), "entity", [], "any", false, false, true, 180), "bp_card_link", [], "any", false, false, true, 180), "title", [], "any", false, false, true, 180), 180, $this->source), "html", null, true);
            echo "
                                                <i class=\"fa-regular fa-arrow-right\"></i>
                                            </a>                                      
                                        ";
        } else {
            // line 183
            echo "         
                                            <a href=\"";
            // line 184
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 184), 1, [], "any", false, false, true, 184), "entity", [], "any", false, false, true, 184), "bp_card_link", [], "any", false, false, true, 184), 0, [], "any", false, false, true, 184), "url", [], "any", false, false, true, 184), 184, $this->source), "html", null, true);
            echo "\" class=\"rts-btn btn-primary\">
                                                ";
            // line 185
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 185), 1, [], "any", false, false, true, 185), "entity", [], "any", false, false, true, 185), "bp_card_link", [], "any", false, false, true, 185), "title", [], "any", false, false, true, 185), 185, $this->source), "html", null, true);
            echo "
                                                <i class=\"fa-regular fa-arrow-right\"></i>
                                            </a>
                                        ";
        }
        // line 188
        echo "   
                                        <div class=\"d-none\" id=\"youtube-embed-tab-second\">
                                            <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/";
        // line 190
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 190), 1, [], "any", false, false, true, 190), "entity", [], "any", false, false, true, 190), "bp_card_title", [], "any", false, false, true, 190), "value", [], "any", false, false, true, 190), 190, $this->source)))), "html", null, true);
        echo "\" title=\"CME Solar\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>
                                        </div>
                                        <div class=\"vedio-icone\">
                                            <a class=\" play-video-second video-play-button\" href=\"#\">
                                                <span></span>
                                                <p class=\"text\">
                                                   ";
        // line 196
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 196), 1, [], "any", false, false, true, 196), "entity", [], "any", false, false, true, 196), "bp_accordion_section_title", [], "any", false, false, true, 196), "value", [], "any", false, false, true, 196), 196, $this->source));
        echo "  
                                                </p>
                                            </a>
                                            <div class=\"video-overlay\">
                                                <a class=\"video-overlay-close\">×</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- vedio area end -->
                                </div>
                                <!-- single nav content end -->
                            </div>
                            ";
        // line 208
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 208), 2, [], "any", false, false, true, 208), "entity", [], "any", false, false, true, 208), "field_section_content", [], "any", false, false, true, 208), "value", [], "any", false, false, true, 208))) {
            // line 209
            echo "                            <div class=\"tab-pane fade\" id=\"pills-contact\" role=\"tabpanel\" aria-labelledby=\"pills-contact-tab\">
                                <!-- single nav content start -->
                                <div class=\"single-about-content-solar\">
                                    <div class=\"disc\">
                                        ";
            // line 213
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 213), 2, [], "any", false, false, true, 213), "entity", [], "any", false, false, true, 213), "field_section_content", [], "any", false, false, true, 213), "value", [], "any", false, false, true, 213), 213, $this->source));
            echo "                                        
                                    </div>
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-lg-6\">
                                            <div class=\"left-area-wrapper\">
                                                <img src=\"";
            // line 218
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 218), 2, [], "any", false, false, true, 218), "entity", [], "any", false, false, true, 218), "bp_card_image", [], "any", false, false, true, 218), "entity", [], "any", false, false, true, 218), "fileuri", [], "any", false, false, true, 218), 218, $this->source), "wide")), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 218), 2, [], "any", false, false, true, 218), "entity", [], "any", false, false, true, 218), "bp_card_image", [], "any", false, false, true, 218), "alt", [], "any", false, false, true, 218), 218, $this->source), "html", null, true);
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 218), 2, [], "any", false, false, true, 218), "entity", [], "any", false, false, true, 218), "bp_card_image", [], "any", false, false, true, 218), "alt", [], "any", false, false, true, 218), 218, $this->source), "html", null, true);
            echo "\" />    
                                            </div>
                                        </div>
                                        <div class=\"col-lg-6\">
                                            ";
            // line 222
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 222), 2, [], "any", false, false, true, 222), "entity", [], "any", false, false, true, 222), "field_items", [], "any", false, false, true, 222), 0, [], "any", false, false, true, 222), "entity", [], "any", false, false, true, 222), "bp_text", [], "any", false, false, true, 222), "value", [], "any", false, false, true, 222))) {
                // line 223
                echo "                                            <div class=\"single-ckeck-wrapper\">
                                                <img src=\"/themes/custom/solar/images/dt.png\" alt=\"CME Solar\" />                                         
                                                ";
                // line 225
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 225), 2, [], "any", false, false, true, 225), "entity", [], "any", false, false, true, 225), "field_items", [], "any", false, false, true, 225), 0, [], "any", false, false, true, 225), "entity", [], "any", false, false, true, 225), "bp_text", [], "any", false, false, true, 225), "value", [], "any", false, false, true, 225), 225, $this->source));
                echo "   
                                            </div>
                                            ";
            }
            // line 228
            echo "                                            ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 228), 2, [], "any", false, false, true, 228), "entity", [], "any", false, false, true, 228), "field_items", [], "any", false, false, true, 228), 1, [], "any", false, false, true, 228), "entity", [], "any", false, false, true, 228), "bp_text", [], "any", false, false, true, 228), "value", [], "any", false, false, true, 228))) {
                // line 229
                echo "                                            <div class=\"single-ckeck-wrapper\">
                                                <img src=\"/themes/custom/solar/images/dt.png\" alt=\"CME Solar\" />                                       
                                                ";
                // line 231
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 231), 2, [], "any", false, false, true, 231), "entity", [], "any", false, false, true, 231), "field_items", [], "any", false, false, true, 231), 1, [], "any", false, false, true, 231), "entity", [], "any", false, false, true, 231), "bp_text", [], "any", false, false, true, 231), "value", [], "any", false, false, true, 231), 231, $this->source));
                echo "   
                                            </div>
                                            ";
            }
            // line 234
            echo "                                              ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 234), 2, [], "any", false, false, true, 234), "entity", [], "any", false, false, true, 234), "field_items", [], "any", false, false, true, 234), 2, [], "any", false, false, true, 234), "entity", [], "any", false, false, true, 234), "bp_text", [], "any", false, false, true, 234), "value", [], "any", false, false, true, 234))) {
                // line 235
                echo "                                            <div class=\"single-ckeck-wrapper\">
                                                <img src=\"/themes/custom/solar/images/dt.png\" alt=\"CME Solar\" />                                         
                                                ";
                // line 237
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 237), 2, [], "any", false, false, true, 237), "entity", [], "any", false, false, true, 237), "field_items", [], "any", false, false, true, 237), 2, [], "any", false, false, true, 237), "entity", [], "any", false, false, true, 237), "bp_text", [], "any", false, false, true, 237), "value", [], "any", false, false, true, 237), 237, $this->source));
                echo "   
                                            </div>
                                            ";
            }
            // line 240
            echo "                                              ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 240), 2, [], "any", false, false, true, 240), "entity", [], "any", false, false, true, 240), "field_items", [], "any", false, false, true, 240), 3, [], "any", false, false, true, 240), "entity", [], "any", false, false, true, 240), "bp_text", [], "any", false, false, true, 240), "value", [], "any", false, false, true, 240))) {
                // line 241
                echo "                                            <div class=\"single-ckeck-wrapper\">
                                                <img src=\"/themes/custom/solar/images/dt.png\" alt=\"CME Solar\" />                                         
                                                ";
                // line 243
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 243), 2, [], "any", false, false, true, 243), "entity", [], "any", false, false, true, 243), "field_items", [], "any", false, false, true, 243), 3, [], "any", false, false, true, 243), "entity", [], "any", false, false, true, 243), "bp_text", [], "any", false, false, true, 243), "value", [], "any", false, false, true, 243), 243, $this->source));
                echo "   
                                            </div>
                                            ";
            }
            // line 246
            echo "                                              ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 246), 2, [], "any", false, false, true, 246), "entity", [], "any", false, false, true, 246), "field_items", [], "any", false, false, true, 246), 4, [], "any", false, false, true, 246), "entity", [], "any", false, false, true, 246), "bp_text", [], "any", false, false, true, 246), "value", [], "any", false, false, true, 246))) {
                // line 247
                echo "                                            <div class=\"single-ckeck-wrapper\">
                                                <img src=\"/themes/custom/solar/images/dt.png\" alt=\"CME Solar\" />                                            
                                                ";
                // line 249
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 249), 2, [], "any", false, false, true, 249), "entity", [], "any", false, false, true, 249), "field_items", [], "any", false, false, true, 249), 4, [], "any", false, false, true, 249), "entity", [], "any", false, false, true, 249), "bp_text", [], "any", false, false, true, 249), "value", [], "any", false, false, true, 249), 249, $this->source));
                echo "   
                                            </div>
                                            ";
            }
            // line 252
            echo "                                        </div>
                                    </div>
                                    <!-- vedio area start -->
                                    <div class=\"vedio-area-start\">
                                        ";
            // line 256
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 256), 2, [], "any", false, false, true, 256), "entity", [], "any", false, false, true, 256), "bp_card_link", [], "any", false, false, true, 256), 0, [], "any", false, false, true, 256), "url", [], "any", false, false, true, 256), "external", [], "any", false, false, true, 256)) {
                // line 257
                echo "                                            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 257), 2, [], "any", false, false, true, 257), "entity", [], "any", false, false, true, 257), "bp_card_link", [], "any", false, false, true, 257), "uri", [], "any", false, false, true, 257), 257, $this->source), "html", null, true);
                echo "\" class=\"rts-btn btn-primary\">
                                                ";
                // line 258
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 258), 2, [], "any", false, false, true, 258), "entity", [], "any", false, false, true, 258), "bp_card_link", [], "any", false, false, true, 258), "title", [], "any", false, false, true, 258), 258, $this->source), "html", null, true);
                echo "
                                                <i class=\"fa-regular fa-arrow-right\"></i>
                                            </a>                                      
                                        ";
            } else {
                // line 261
                echo "         
                                            <a href=\"";
                // line 262
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 262), 2, [], "any", false, false, true, 262), "entity", [], "any", false, false, true, 262), "bp_card_link", [], "any", false, false, true, 262), 0, [], "any", false, false, true, 262), "url", [], "any", false, false, true, 262), 262, $this->source), "html", null, true);
                echo "\" class=\"rts-btn btn-primary\">
                                                ";
                // line 263
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 263), 2, [], "any", false, false, true, 263), "entity", [], "any", false, false, true, 263), "bp_card_link", [], "any", false, false, true, 263), "title", [], "any", false, false, true, 263), 263, $this->source), "html", null, true);
                echo "
                                                <i class=\"fa-regular fa-arrow-right\"></i>
                                            </a>
                                        ";
            }
            // line 267
            echo "                                        
                                        <div class=\"vedio-icone\">
                                            <a class=\" play-video video-play-button\" href=\"#\">
                                                <span></span>
                                                <p class=\"text\">
                                                    ";
            // line 272
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tabs", [], "any", false, false, true, 272), 2, [], "any", false, false, true, 272), "entity", [], "any", false, false, true, 272), "bp_accordion_section_title", [], "any", false, false, true, 272), "value", [], "any", false, false, true, 272), 272, $this->source));
            echo "  
                                                </p>
                                            </a>
                                            <div class=\"video-overlay\">
                                                <a class=\"video-overlay-close\">×</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- vedio area end -->
                                </div>
                                <!-- single nav content end -->
                            </div>
                            ";
        }
        // line 285
        echo "                        </div>
                        <!-- nav content end -->
                        <!-- tab area start about end -->

                    </div>
                    <!-- about nrighht content area end -->
                </div>
            </div>
        </div>    
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/paragraph/paragraph--solar-about-company--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  587 => 285,  571 => 272,  564 => 267,  557 => 263,  553 => 262,  550 => 261,  543 => 258,  538 => 257,  536 => 256,  530 => 252,  524 => 249,  520 => 247,  517 => 246,  511 => 243,  507 => 241,  504 => 240,  498 => 237,  494 => 235,  491 => 234,  485 => 231,  481 => 229,  478 => 228,  472 => 225,  468 => 223,  466 => 222,  455 => 218,  447 => 213,  441 => 209,  439 => 208,  424 => 196,  415 => 190,  411 => 188,  404 => 185,  400 => 184,  397 => 183,  390 => 180,  385 => 179,  383 => 178,  377 => 174,  371 => 171,  367 => 169,  364 => 168,  358 => 165,  354 => 163,  351 => 162,  345 => 159,  341 => 157,  338 => 156,  332 => 153,  328 => 151,  325 => 150,  319 => 147,  315 => 145,  313 => 144,  302 => 140,  294 => 135,  275 => 119,  266 => 113,  262 => 111,  255 => 108,  251 => 107,  248 => 106,  241 => 103,  236 => 102,  234 => 101,  227 => 96,  221 => 93,  217 => 91,  214 => 90,  208 => 87,  204 => 85,  201 => 84,  195 => 81,  191 => 79,  188 => 78,  182 => 75,  178 => 73,  175 => 72,  169 => 69,  165 => 67,  163 => 66,  150 => 60,  142 => 55,  132 => 47,  126 => 44,  123 => 43,  121 => 42,  116 => 40,  110 => 37,  101 => 31,  96 => 29,  84 => 20,  76 => 14,  72 => 13,  67 => 295,  65 => 13,  60 => 12,  56 => 11,  51 => 297,  49 => 11,  47 => 8,  46 => 7,  45 => 6,  44 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/solar/templates/paragraph/paragraph--solar-about-company--default.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/paragraph/paragraph--solar-about-company--default.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "block" => 11, "if" => 42);
        static $filters = array("clean_class" => 6, "escape" => 12, "raw" => 29, "image_style" => 60, "trim" => 113, "striptags" => 113, "render" => 113);
        static $functions = array("file_url" => 60);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape', 'raw', 'image_style', 'trim', 'striptags', 'render'],
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
