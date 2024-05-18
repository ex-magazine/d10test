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

/* themes/custom/solar/templates/paragraph/paragraph--solarourprocess--default.html.twig */
class __TwigTemplate_f8b482ce1b6a8c417912ff41567ce1ba extends Template
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
        // line 148
        echo "  ";
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
        // line 147
        echo "    </div>
";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "         
        <div class=\"process--desktop\">
            <div class=\"section__process section__process__row\">
                <div class=\"p-left section__process__box__item section__process__box__title wow fadeIn\" data-wow-duration=\"1.5s\" data-wow-delay=\"0s\">
                    <span>";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 15), 0, [], "any", false, false, true, 15), "entity", [], "any", false, false, true, 15), "bp_card_title", [], "any", false, false, true, 15), "value", [], "any", false, false, true, 15), 15, $this->source));
        echo "</span>
                </div>
                <div class=\"p-center\">                  
                </div>
                <div class=\"p-right section__process__box__item wow fadeInDown\" data-wow-duration=\"1.5s\" data-wow-delay=\".5s\">                       
                    <img src=\"";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 20), 1, [], "any", false, false, true, 20), "entity", [], "any", false, false, true, 20), "bp_image_field", [], "any", false, false, true, 20), "entity", [], "any", false, false, true, 20), "fileuri", [], "any", false, false, true, 20), 20, $this->source)), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 20), 1, [], "any", false, false, true, 20), "entity", [], "any", false, false, true, 20), "bp_image_field", [], "any", false, false, true, 20), "alt", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 20), 1, [], "any", false, false, true, 20), "entity", [], "any", false, false, true, 20), "bp_image_field", [], "any", false, false, true, 20), "alt", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "\" />
                    <p>";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 21), 1, [], "any", false, false, true, 21), "entity", [], "any", false, false, true, 21), "bp_card_title", [], "any", false, false, true, 21), "value", [], "any", false, false, true, 21), 21, $this->source));
        echo "</p>
                </div>
            </div>
            <div class=\"section__process__row\">
                <div class=\"p-left\">                   
                </div>
                <div class=\"p-center\">                   
                </div>
                <div class=\"p-right section__process__row--right pull-right wow fadeInDown\" data-wow-duration=\"1.5s\" data-wow-delay=\"1.2s\">
                    <div class=\"section__process__week__box\">";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 30), 2, [], "any", false, false, true, 30), "entity", [], "any", false, false, true, 30), "bp_card_title", [], "any", false, false, true, 30), "value", [], "any", false, false, true, 30), 30, $this->source));
        echo "</div>
                    <div class=\"section__process__indicator\">
                        <img src=\"";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 32), 2, [], "any", false, false, true, 32), "entity", [], "any", false, false, true, 32), "bp_image_field", [], "any", false, false, true, 32), "entity", [], "any", false, false, true, 32), "fileuri", [], "any", false, false, true, 32), 32, $this->source)), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 32), 2, [], "any", false, false, true, 32), "entity", [], "any", false, false, true, 32), "bp_image_field", [], "any", false, false, true, 32), "alt", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 32), 2, [], "any", false, false, true, 32), "entity", [], "any", false, false, true, 32), "bp_image_field", [], "any", false, false, true, 32), "alt", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "\" />
                    </div>
                </div>                
            </div>
            <div class=\"section__process__row section__process__row--pair\">
                <div class=\"p-left section__process__box__item  wow fadeInDown\" data-wow-duration=\"1.5s\" data-wow-delay=\"3.6s\">                        
                    <img src=\"";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 38), 3, [], "any", false, false, true, 38), "entity", [], "any", false, false, true, 38), "bp_image_field", [], "any", false, false, true, 38), "entity", [], "any", false, false, true, 38), "fileuri", [], "any", false, false, true, 38), 38, $this->source)), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 38), 3, [], "any", false, false, true, 38), "entity", [], "any", false, false, true, 38), "bp_image_field", [], "any", false, false, true, 38), "alt", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 38), 3, [], "any", false, false, true, 38), "entity", [], "any", false, false, true, 38), "bp_image_field", [], "any", false, false, true, 38), "alt", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
        echo "\" />
                    <p>";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 39), 3, [], "any", false, false, true, 39), "entity", [], "any", false, false, true, 39), "bp_card_title", [], "any", false, false, true, 39), "value", [], "any", false, false, true, 39), 39, $this->source));
        echo "</p>
                </div>
                <div class=\"p-center wow fadeInRight\" data-wow-duration=\"1.5s\" data-wow-delay=\"3s\">
                    <img src=\"";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 42), 4, [], "any", false, false, true, 42), "entity", [], "any", false, false, true, 42), "bp_image_field", [], "any", false, false, true, 42), "entity", [], "any", false, false, true, 42), "fileuri", [], "any", false, false, true, 42), 42, $this->source)), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 42), 4, [], "any", false, false, true, 42), "entity", [], "any", false, false, true, 42), "bp_image_field", [], "any", false, false, true, 42), "alt", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 42), 4, [], "any", false, false, true, 42), "entity", [], "any", false, false, true, 42), "bp_image_field", [], "any", false, false, true, 42), "alt", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        echo "\" />
                    <div class=\"section__process__week__box\">
                        ";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 44), 4, [], "any", false, false, true, 44), "entity", [], "any", false, false, true, 44), "bp_card_title", [], "any", false, false, true, 44), "value", [], "any", false, false, true, 44), 44, $this->source));
        echo "
                    </div>
                </div>
                <div class=\"p-right section__process__box__item  wow fadeInRight\" data-wow-duration=\"1.5s\" data-wow-delay=\"2.3s\">
                    <img src=\"";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 48), 5, [], "any", false, false, true, 48), "entity", [], "any", false, false, true, 48), "bp_image_field", [], "any", false, false, true, 48), "entity", [], "any", false, false, true, 48), "fileuri", [], "any", false, false, true, 48), 48, $this->source)), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 48), 5, [], "any", false, false, true, 48), "entity", [], "any", false, false, true, 48), "bp_image_field", [], "any", false, false, true, 48), "alt", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 48), 5, [], "any", false, false, true, 48), "entity", [], "any", false, false, true, 48), "bp_image_field", [], "any", false, false, true, 48), "alt", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo "\" />
                    <p>";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 49), 5, [], "any", false, false, true, 49), "entity", [], "any", false, false, true, 49), "bp_card_title", [], "any", false, false, true, 49), "value", [], "any", false, false, true, 49), 49, $this->source));
        echo "</p>
                </div>
            </div>
            <div class=\"section__process__row wow fadeInDown\" data-wow-duration=\"1.5s\" data-wow-delay=\"4.5s\">                           
                <div class=\"p-left section__process__row--right\">
                    <div class=\"section__process__week__box\">
                        ";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 55), 6, [], "any", false, false, true, 55), "entity", [], "any", false, false, true, 55), "bp_card_title", [], "any", false, false, true, 55), "value", [], "any", false, false, true, 55), 55, $this->source));
        echo "
                    </div>
                    <div class=\"section__process__indicator\">
                        <img src=\"";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 58), 6, [], "any", false, false, true, 58), "entity", [], "any", false, false, true, 58), "bp_image_field", [], "any", false, false, true, 58), "entity", [], "any", false, false, true, 58), "fileuri", [], "any", false, false, true, 58), 58, $this->source)), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 58), 6, [], "any", false, false, true, 58), "entity", [], "any", false, false, true, 58), "bp_image_field", [], "any", false, false, true, 58), "alt", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 58), 6, [], "any", false, false, true, 58), "entity", [], "any", false, false, true, 58), "bp_image_field", [], "any", false, false, true, 58), "alt", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo "\" />
                    </div>                    
                </div>
                <div class=\"p-center\">                   
                </div>   
                <div class=\"p-right\">                   
                </div>
            </div>
            <div class=\"section__process__row section__process__row--pair\">
                <div class=\"p-left section__process__box__item  wow fadeInLeft\" data-wow-duration=\"1.5s\" data-wow-delay=\"5s\">
                    <img src=\"";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 68), 7, [], "any", false, false, true, 68), "entity", [], "any", false, false, true, 68), "bp_image_field", [], "any", false, false, true, 68), "entity", [], "any", false, false, true, 68), "fileuri", [], "any", false, false, true, 68), 68, $this->source)), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 68), 7, [], "any", false, false, true, 68), "entity", [], "any", false, false, true, 68), "bp_image_field", [], "any", false, false, true, 68), "alt", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 68), 7, [], "any", false, false, true, 68), "entity", [], "any", false, false, true, 68), "bp_image_field", [], "any", false, false, true, 68), "alt", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
        echo "\" />
                    <p> ";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 69), 7, [], "any", false, false, true, 69), "entity", [], "any", false, false, true, 69), "bp_card_title", [], "any", false, false, true, 69), "value", [], "any", false, false, true, 69), 69, $this->source));
        echo "</p>
                </div>
                <div class=\"p-center wow fadeInLeft\" data-wow-duration=\"1.5s\" data-wow-delay=\"6s\">
                    <div class=\"section__process__indicator\">
                        <img src=\"";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 73), 8, [], "any", false, false, true, 73), "entity", [], "any", false, false, true, 73), "bp_image_field", [], "any", false, false, true, 73), "entity", [], "any", false, false, true, 73), "fileuri", [], "any", false, false, true, 73), 73, $this->source)), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 73), 8, [], "any", false, false, true, 73), "entity", [], "any", false, false, true, 73), "bp_image_field", [], "any", false, false, true, 73), "alt", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 73), 8, [], "any", false, false, true, 73), "entity", [], "any", false, false, true, 73), "bp_image_field", [], "any", false, false, true, 73), "alt", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        echo "\" />
                    </div>      
                    
                    <div class=\"section__process__week__box\">
                        ";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 77), 8, [], "any", false, false, true, 77), "entity", [], "any", false, false, true, 77), "bp_card_title", [], "any", false, false, true, 77), "value", [], "any", false, false, true, 77), 77, $this->source));
        echo "
                    </div>
                </div>
                <div class=\"p-right section__process__box__item  wow fadeInLeft\" data-wow-duration=\"1.5s\" data-wow-delay=\"7s\">
                    <img src=\"";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 81), 9, [], "any", false, false, true, 81), "entity", [], "any", false, false, true, 81), "bp_image_field", [], "any", false, false, true, 81), "entity", [], "any", false, false, true, 81), "fileuri", [], "any", false, false, true, 81), 81, $this->source)), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 81), 9, [], "any", false, false, true, 81), "entity", [], "any", false, false, true, 81), "bp_image_field", [], "any", false, false, true, 81), "alt", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 81), 9, [], "any", false, false, true, 81), "entity", [], "any", false, false, true, 81), "bp_image_field", [], "any", false, false, true, 81), "alt", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
        echo "\" />
                    <p> ";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 82), 9, [], "any", false, false, true, 82), "entity", [], "any", false, false, true, 82), "bp_card_title", [], "any", false, false, true, 82), "value", [], "any", false, false, true, 82), 82, $this->source));
        echo "</p>
                </div>
            </div>
        </div> 
        <div class=\"process--mobile\">
            <div class=\"section__process__box__title\">
                <span>";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 88), 0, [], "any", false, false, true, 88), "entity", [], "any", false, false, true, 88), "bp_card_title", [], "any", false, false, true, 88), "value", [], "any", false, false, true, 88), 88, $this->source));
        echo "</span>
            </div>
            <div class=\"section__process__col\">
                <div class=\"section__process__box__item\">
                    <img src=\"";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 92), 1, [], "any", false, false, true, 92), "entity", [], "any", false, false, true, 92), "bp_image_field", [], "any", false, false, true, 92), "entity", [], "any", false, false, true, 92), "fileuri", [], "any", false, false, true, 92), 92, $this->source)), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 92), 1, [], "any", false, false, true, 92), "entity", [], "any", false, false, true, 92), "bp_image_field", [], "any", false, false, true, 92), "alt", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 92), 1, [], "any", false, false, true, 92), "entity", [], "any", false, false, true, 92), "bp_image_field", [], "any", false, false, true, 92), "alt", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
        echo "\" />
                    <p>";
        // line 93
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 93), 1, [], "any", false, false, true, 93), "entity", [], "any", false, false, true, 93), "bp_card_title", [], "any", false, false, true, 93), "value", [], "any", false, false, true, 93), 93, $this->source));
        echo "</p>
                </div>
                <div class=\"p-arrow\">                    
                    <div class=\"section__process__indicator\">
                        <img src=\"/themes/custom/solar/images/arrow-1.png\" />
                    </div>
                    <div class=\"section__process__week__box\">
                        ";
        // line 100
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 100), 2, [], "any", false, false, true, 100), "entity", [], "any", false, false, true, 100), "bp_card_title", [], "any", false, false, true, 100), "value", [], "any", false, false, true, 100), 100, $this->source));
        echo "
                    </div>
                </div>
                <div class=\"section__process__box__item\">
                    <img src=\"";
        // line 104
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 104), 3, [], "any", false, false, true, 104), "entity", [], "any", false, false, true, 104), "bp_image_field", [], "any", false, false, true, 104), "entity", [], "any", false, false, true, 104), "fileuri", [], "any", false, false, true, 104), 104, $this->source)), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 104), 3, [], "any", false, false, true, 104), "entity", [], "any", false, false, true, 104), "bp_image_field", [], "any", false, false, true, 104), "alt", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 104), 3, [], "any", false, false, true, 104), "entity", [], "any", false, false, true, 104), "bp_image_field", [], "any", false, false, true, 104), "alt", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
        echo "\" />
                    <p>";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 105), 3, [], "any", false, false, true, 105), "entity", [], "any", false, false, true, 105), "bp_card_title", [], "any", false, false, true, 105), "value", [], "any", false, false, true, 105), 105, $this->source));
        echo "</p>
                </div>
                <div class=\"p-arrow\">                    
                    <div class=\"section__process__indicator\">
                        <img src=\"/themes/custom/solar/images/arrow-1.png\" />
                    </div>
                    <div class=\"section__process__week__box\">
                        ";
        // line 112
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 112), 4, [], "any", false, false, true, 112), "entity", [], "any", false, false, true, 112), "bp_card_title", [], "any", false, false, true, 112), "value", [], "any", false, false, true, 112), 112, $this->source));
        echo "
                    </div>
                </div>
                <div class=\"section__process__box__item\">
                    <img src=\"";
        // line 116
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 116), 5, [], "any", false, false, true, 116), "entity", [], "any", false, false, true, 116), "bp_image_field", [], "any", false, false, true, 116), "entity", [], "any", false, false, true, 116), "fileuri", [], "any", false, false, true, 116), 116, $this->source)), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 116), 5, [], "any", false, false, true, 116), "entity", [], "any", false, false, true, 116), "bp_image_field", [], "any", false, false, true, 116), "alt", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 116), 5, [], "any", false, false, true, 116), "entity", [], "any", false, false, true, 116), "bp_image_field", [], "any", false, false, true, 116), "alt", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
        echo "\" />
                    <p>";
        // line 117
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 117), 5, [], "any", false, false, true, 117), "entity", [], "any", false, false, true, 117), "bp_card_title", [], "any", false, false, true, 117), "value", [], "any", false, false, true, 117), 117, $this->source));
        echo "</p>
                </div>
                <div class=\"p-arrow\">                    
                    <div class=\"section__process__indicator\">
                        <img src=\"/themes/custom/solar/images/arrow-1.png\" />
                    </div>
                    <div class=\"section__process__week__box\">
                        ";
        // line 124
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 124), 6, [], "any", false, false, true, 124), "entity", [], "any", false, false, true, 124), "bp_card_title", [], "any", false, false, true, 124), "value", [], "any", false, false, true, 124), 124, $this->source));
        echo "
                    </div>
                </div>
                
                <div class=\"section__process__box__item\">
                    <img src=\"";
        // line 129
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 129), 7, [], "any", false, false, true, 129), "entity", [], "any", false, false, true, 129), "bp_image_field", [], "any", false, false, true, 129), "entity", [], "any", false, false, true, 129), "fileuri", [], "any", false, false, true, 129), 129, $this->source)), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 129), 7, [], "any", false, false, true, 129), "entity", [], "any", false, false, true, 129), "bp_image_field", [], "any", false, false, true, 129), "alt", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 129), 7, [], "any", false, false, true, 129), "entity", [], "any", false, false, true, 129), "bp_image_field", [], "any", false, false, true, 129), "alt", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
        echo "\" />
                    <p>";
        // line 130
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 130), 7, [], "any", false, false, true, 130), "entity", [], "any", false, false, true, 130), "bp_card_title", [], "any", false, false, true, 130), "value", [], "any", false, false, true, 130), 130, $this->source));
        echo "</p>
                </div>
                <div class=\"p-arrow\">                   
                    <div class=\"section__process__indicator\">
                        <img src=\"/themes/custom/solar/images/arrow-1.png\" />
                    </div>
                    <div class=\"section__process__week__box\">
                        ";
        // line 137
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 137), 8, [], "any", false, false, true, 137), "entity", [], "any", false, false, true, 137), "bp_card_title", [], "any", false, false, true, 137), "value", [], "any", false, false, true, 137), 137, $this->source));
        echo "
                    </div>
                </div>
                <div class=\"section__process__box__item\">
                    <img src=\"";
        // line 141
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 141), 9, [], "any", false, false, true, 141), "entity", [], "any", false, false, true, 141), "bp_image_field", [], "any", false, false, true, 141), "entity", [], "any", false, false, true, 141), "fileuri", [], "any", false, false, true, 141), 141, $this->source)), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 141), 9, [], "any", false, false, true, 141), "entity", [], "any", false, false, true, 141), "bp_image_field", [], "any", false, false, true, 141), "alt", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 141), 9, [], "any", false, false, true, 141), "entity", [], "any", false, false, true, 141), "bp_image_field", [], "any", false, false, true, 141), "alt", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
        echo "\" />
                    <p>";
        // line 142
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ourprocess", [], "any", false, false, true, 142), 9, [], "any", false, false, true, 142), "entity", [], "any", false, false, true, 142), "bp_card_title", [], "any", false, false, true, 142), "value", [], "any", false, false, true, 142), 142, $this->source));
        echo "</p>
                </div>
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/paragraph/paragraph--solarourprocess--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 142,  351 => 141,  344 => 137,  334 => 130,  326 => 129,  318 => 124,  308 => 117,  300 => 116,  293 => 112,  283 => 105,  275 => 104,  268 => 100,  258 => 93,  250 => 92,  243 => 88,  234 => 82,  226 => 81,  219 => 77,  208 => 73,  201 => 69,  193 => 68,  176 => 58,  170 => 55,  161 => 49,  153 => 48,  146 => 44,  137 => 42,  131 => 39,  123 => 38,  110 => 32,  105 => 30,  93 => 21,  85 => 20,  77 => 15,  68 => 11,  63 => 147,  61 => 11,  56 => 10,  52 => 9,  48 => 148,  46 => 9,  44 => 6,  43 => 5,  42 => 4,  41 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/solar/templates/paragraph/paragraph--solarourprocess--default.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/paragraph/paragraph--solarourprocess--default.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "block" => 9);
        static $filters = array("clean_class" => 4, "escape" => 10, "raw" => 15);
        static $functions = array("file_url" => 20);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['clean_class', 'escape', 'raw'],
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
