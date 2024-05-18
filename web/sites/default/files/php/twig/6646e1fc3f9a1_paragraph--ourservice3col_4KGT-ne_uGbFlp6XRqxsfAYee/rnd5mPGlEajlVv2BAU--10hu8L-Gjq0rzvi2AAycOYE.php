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

/* themes/custom/solar/templates/paragraph/paragraph--ourservice3cols--default.html.twig */
class __TwigTemplate_f8ad27953233b4044c069bde6eb66a7d extends Template
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
        $context["classes"] = [0 => "paragraph", 1 => "rts-service-area rts-section-gap bg-service_s", 2 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 5
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 5), 5, $this->source))), 3 => ((        // line 6
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 6, $this->source)))) : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 7
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 7)) ? ("paragraph--unpublished") : (""))];
        // line 10
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 11), 11, $this->source), "html", null, true);
        echo ">
    ";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 114
        echo "    </div>
";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "        <div class=\"container\">
            <div class=\"row g-40\">
                <div class=\"col-lg-4 col-md-6 col-sm-12 col-12\">
                    <div class=\"service-single-s-main\">
                        <div class=\"icon\">                          
                            ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 18), 0, [], "any", false, false, true, 18), "entity", [], "any", false, false, true, 18), "bp_unrestricted", [], "any", false, false, true, 18), "value", [], "any", false, false, true, 18), 18, $this->source));
        echo "
                        </div>                       
                        ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 20), 0, [], "any", false, false, true, 20), "entity", [], "any", false, false, true, 20), "bp_card_link", [], "any", false, false, true, 20), 0, [], "any", false, false, true, 20), "url", [], "any", false, false, true, 20), "external", [], "any", false, false, true, 20)) {
            // line 21
            echo "                            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 21), 0, [], "any", false, false, true, 21), "entity", [], "any", false, false, true, 21), "bp_card_link", [], "any", false, false, true, 21), "uri", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "\">
                                <h5 class=\"title\">
                                    ";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 23), 0, [], "any", false, false, true, 23), "entity", [], "any", false, false, true, 23), "field_title", [], "any", false, false, true, 23), "value", [], "any", false, false, true, 23), 23, $this->source));
            echo "                                
                                </h5>
                            </a>                                      
                        ";
        } else {
            // line 26
            echo "         
                            <a href=\"";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 27), 0, [], "any", false, false, true, 27), "entity", [], "any", false, false, true, 27), "bp_card_link", [], "any", false, false, true, 27), 0, [], "any", false, false, true, 27), "url", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "\">
                                <h5 class=\"title\">
                                    ";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 29), 0, [], "any", false, false, true, 29), "entity", [], "any", false, false, true, 29), "field_title", [], "any", false, false, true, 29), "value", [], "any", false, false, true, 29), 29, $this->source));
            echo "                                
                                </h5>
                            </a>
                        ";
        }
        // line 32
        echo "                             
                        <p class=\"disc\">
                            ";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 34), 0, [], "any", false, false, true, 34), "entity", [], "any", false, false, true, 34), "bp_card_text", [], "any", false, false, true, 34), "value", [], "any", false, false, true, 34), 34, $this->source));
        echo "                          
                        </p>
                        ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 36), 0, [], "any", false, false, true, 36), "entity", [], "any", false, false, true, 36), "bp_card_link", [], "any", false, false, true, 36), 0, [], "any", false, false, true, 36), "url", [], "any", false, false, true, 36), "external", [], "any", false, false, true, 36)) {
            // line 37
            echo "                            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 37), 0, [], "any", false, false, true, 37), "entity", [], "any", false, false, true, 37), "bp_card_link", [], "any", false, false, true, 37), "uri", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "\" class=\"rts-btn btn-primary\">
                                ";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 38), 0, [], "any", false, false, true, 38), "entity", [], "any", false, false, true, 38), "bp_card_link", [], "any", false, false, true, 38), "title", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "&nbsp<i class=\"fa-regular fa-arrow-right\"></i>
                            </a>                                      
                        ";
        } else {
            // line 40
            echo "         
                            <a href=\"";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 41), 0, [], "any", false, false, true, 41), "entity", [], "any", false, false, true, 41), "bp_card_link", [], "any", false, false, true, 41), 0, [], "any", false, false, true, 41), "url", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "\" class=\"rts-btn btn-primary\">
                                ";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 42), 0, [], "any", false, false, true, 42), "entity", [], "any", false, false, true, 42), "bp_card_link", [], "any", false, false, true, 42), "title", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "&nbsp<i class=\"fa-regular fa-arrow-right\"></i>
                            </a>
                        ";
        }
        // line 44
        echo "                       
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 col-sm-12 col-12\">
                    <div class=\"service-single-s-main yellow-bg\">
                        <div class=\"icon\">                          
                            ";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 50), 1, [], "any", false, false, true, 50), "entity", [], "any", false, false, true, 50), "bp_unrestricted", [], "any", false, false, true, 50), "value", [], "any", false, false, true, 50), 50, $this->source));
        echo "
                        </div>
                        ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 52), 1, [], "any", false, false, true, 52), "entity", [], "any", false, false, true, 52), "bp_card_link", [], "any", false, false, true, 52), 0, [], "any", false, false, true, 52), "url", [], "any", false, false, true, 52), "external", [], "any", false, false, true, 52)) {
            // line 53
            echo "                            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 53), 1, [], "any", false, false, true, 53), "entity", [], "any", false, false, true, 53), "bp_card_link", [], "any", false, false, true, 53), "uri", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "\">
                                <h5 class=\"title\">
                                    ";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 55), 1, [], "any", false, false, true, 55), "entity", [], "any", false, false, true, 55), "field_title", [], "any", false, false, true, 55), "value", [], "any", false, false, true, 55), 55, $this->source));
            echo "                                
                                </h5>
                            </a>                                      
                        ";
        } else {
            // line 58
            echo "         
                            <a href=\"";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 59), 1, [], "any", false, false, true, 59), "entity", [], "any", false, false, true, 59), "bp_card_link", [], "any", false, false, true, 59), 0, [], "any", false, false, true, 59), "url", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            echo "\" >
                                <h5 class=\"title\">
                                    ";
            // line 61
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 61), 1, [], "any", false, false, true, 61), "entity", [], "any", false, false, true, 61), "field_title", [], "any", false, false, true, 61), "value", [], "any", false, false, true, 61), 61, $this->source));
            echo "                                
                                </h5>
                            </a>
                        ";
        }
        // line 64
        echo " 
                        <p class=\"disc\">
                            ";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 66), 1, [], "any", false, false, true, 66), "entity", [], "any", false, false, true, 66), "bp_card_text", [], "any", false, false, true, 66), "value", [], "any", false, false, true, 66), 66, $this->source));
        echo " 
                        </p>
                        ";
        // line 68
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 68), 1, [], "any", false, false, true, 68), "entity", [], "any", false, false, true, 68), "bp_card_link", [], "any", false, false, true, 68), 0, [], "any", false, false, true, 68), "url", [], "any", false, false, true, 68), "external", [], "any", false, false, true, 68)) {
            // line 69
            echo "                            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 69), 1, [], "any", false, false, true, 69), "entity", [], "any", false, false, true, 69), "bp_card_link", [], "any", false, false, true, 69), "uri", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
            echo "\" class=\"rts-btn btn-primary\">
                                ";
            // line 70
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 70), 1, [], "any", false, false, true, 70), "entity", [], "any", false, false, true, 70), "bp_card_link", [], "any", false, false, true, 70), "title", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
            echo "&nbsp<i class=\"fa-regular fa-arrow-right\"></i>
                            </a>                                      
                        ";
        } else {
            // line 72
            echo "         
                            <a href=\"";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 73), 1, [], "any", false, false, true, 73), "entity", [], "any", false, false, true, 73), "bp_card_link", [], "any", false, false, true, 73), 0, [], "any", false, false, true, 73), "url", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "\" class=\"rts-btn btn-primary\">
                                ";
            // line 74
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 74), 1, [], "any", false, false, true, 74), "entity", [], "any", false, false, true, 74), "bp_card_link", [], "any", false, false, true, 74), "title", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
            echo "&nbsp<i class=\"fa-regular fa-arrow-right\"></i>
                            </a>
                        ";
        }
        // line 76
        echo "             
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 col-sm-12 col-12\">
                    <div class=\"service-single-s-main\">
                        <div class=\"icon\">                          
                            ";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 82), 2, [], "any", false, false, true, 82), "entity", [], "any", false, false, true, 82), "bp_unrestricted", [], "any", false, false, true, 82), "value", [], "any", false, false, true, 82), 82, $this->source));
        echo "
                        </div>
                        ";
        // line 84
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 84), 2, [], "any", false, false, true, 84), "entity", [], "any", false, false, true, 84), "bp_card_link", [], "any", false, false, true, 84), 0, [], "any", false, false, true, 84), "url", [], "any", false, false, true, 84), "external", [], "any", false, false, true, 84)) {
            // line 85
            echo "                            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 85), 2, [], "any", false, false, true, 85), "entity", [], "any", false, false, true, 85), "bp_card_link", [], "any", false, false, true, 85), "uri", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
            echo "\">
                                <h5 class=\"title\">
                                    ";
            // line 87
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 87), 2, [], "any", false, false, true, 87), "entity", [], "any", false, false, true, 87), "field_title", [], "any", false, false, true, 87), "value", [], "any", false, false, true, 87), 87, $this->source));
            echo "                                
                                </h5>
                            </a>                                      
                        ";
        } else {
            // line 90
            echo "         
                            <a href=\"";
            // line 91
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 91), 2, [], "any", false, false, true, 91), "entity", [], "any", false, false, true, 91), "bp_card_link", [], "any", false, false, true, 91), 0, [], "any", false, false, true, 91), "url", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
            echo "\">
                                <h5 class=\"title\">
                                    ";
            // line 93
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 93), 2, [], "any", false, false, true, 93), "entity", [], "any", false, false, true, 93), "field_title", [], "any", false, false, true, 93), "value", [], "any", false, false, true, 93), 93, $this->source));
            echo "                                
                                </h5>
                            </a>
                        ";
        }
        // line 96
        echo " 
                        <p class=\"disc\">
                            ";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 98), 2, [], "any", false, false, true, 98), "entity", [], "any", false, false, true, 98), "bp_card_text", [], "any", false, false, true, 98), "value", [], "any", false, false, true, 98), 98, $this->source));
        echo " 
                        </p>
                        ";
        // line 100
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 100), 2, [], "any", false, false, true, 100), "entity", [], "any", false, false, true, 100), "bp_card_link", [], "any", false, false, true, 100), 0, [], "any", false, false, true, 100), "url", [], "any", false, false, true, 100), "external", [], "any", false, false, true, 100)) {
            // line 101
            echo "                            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 101), 2, [], "any", false, false, true, 101), "entity", [], "any", false, false, true, 101), "bp_card_link", [], "any", false, false, true, 101), "uri", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
            echo "\" class=\"rts-btn btn-primary\">
                                ";
            // line 102
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 102), 2, [], "any", false, false, true, 102), "entity", [], "any", false, false, true, 102), "bp_card_link", [], "any", false, false, true, 102), "title", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
            echo "&nbsp<i class=\"fa-regular fa-arrow-right\"></i>
                            </a>                                      
                        ";
        } else {
            // line 104
            echo "         
                            <a href=\"";
            // line 105
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 105), 2, [], "any", false, false, true, 105), "entity", [], "any", false, false, true, 105), "bp_card_link", [], "any", false, false, true, 105), 0, [], "any", false, false, true, 105), "url", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo "\" class=\"rts-btn btn-primary\">
                                ";
            // line 106
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourservice3cols", [], "any", false, false, true, 106), 2, [], "any", false, false, true, 106), "entity", [], "any", false, false, true, 106), "bp_card_link", [], "any", false, false, true, 106), "title", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
            echo "&nbsp<i class=\"fa-regular fa-arrow-right\"></i>
                            </a>
                        ";
        }
        // line 108
        echo " 
                    </div>
                </div>
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/paragraph/paragraph--ourservice3cols--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 108,  296 => 106,  292 => 105,  289 => 104,  283 => 102,  278 => 101,  276 => 100,  271 => 98,  267 => 96,  260 => 93,  255 => 91,  252 => 90,  245 => 87,  239 => 85,  237 => 84,  232 => 82,  224 => 76,  218 => 74,  214 => 73,  211 => 72,  205 => 70,  200 => 69,  198 => 68,  193 => 66,  189 => 64,  182 => 61,  177 => 59,  174 => 58,  167 => 55,  161 => 53,  159 => 52,  154 => 50,  146 => 44,  140 => 42,  136 => 41,  133 => 40,  127 => 38,  122 => 37,  120 => 36,  115 => 34,  111 => 32,  104 => 29,  99 => 27,  96 => 26,  89 => 23,  83 => 21,  81 => 20,  76 => 18,  69 => 13,  65 => 12,  60 => 114,  58 => 12,  53 => 11,  46 => 10,  44 => 7,  43 => 6,  42 => 5,  41 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/solar/templates/paragraph/paragraph--ourservice3cols--default.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/paragraph/paragraph--ourservice3cols--default.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "block" => 10, "if" => 20);
        static $filters = array("clean_class" => 5, "escape" => 11, "raw" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape', 'raw'],
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
