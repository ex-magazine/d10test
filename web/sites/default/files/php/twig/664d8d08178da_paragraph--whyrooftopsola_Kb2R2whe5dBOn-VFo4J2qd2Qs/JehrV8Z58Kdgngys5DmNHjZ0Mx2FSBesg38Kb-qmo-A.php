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

/* themes/custom/solar/templates/paragraph/paragraph--whyrooftopsolar--default.html.twig */
class __TwigTemplate_9ca45f1fc9b045bfc84b315125cdb49c extends Template
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
        echo "  ";
        $this->displayBlock('paragraph', $context, $blocks);
        // line 283
        echo "  
  
  
          ";
    }

    // line 9
    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "      <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 10), 10, $this->source), "html", null, true);
        echo ">
      ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 281
        echo "      </div>
  ";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "         
              <div class=\"process--desktop\">
                  <div class=\"process--desktop-inner\">
                      <div class=\"wrt-process-left\">
                          <div class=\"wrt-one wow fadeIn\" data-wow-duration=\"0.5s\" data-wow-delay=\"0.2s\">
                              <div class=\"s-icon\">
                                  <div class=\"step\">
                                      <p class=\"num-01\">01</p>
                                      <p class=\"item-01\">";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 19), 0, [], "any", false, false, true, 19), "entity", [], "any", false, false, true, 19), "bp_tab_section_title", [], "any", false, false, true, 19), "value", [], "any", false, false, true, 19), 19, $this->source));
        echo "</p>
                                  </div>
                              </div>        
                              ";
        // line 22
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 22), 0, [], "any", false, false, true, 22), "entity", [], "any", false, false, true, 22), "bp_card_image", [], "any", false, false, true, 22), "entity", [], "any", false, false, true, 22), "fileuri", [], "any", false, false, true, 22))) {
            // line 23
            echo "                                  <div class=\"item-02-ov\"> 
                                      ";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::viewFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 24), 0, [], "any", false, false, true, 24), "entity", [], "any", false, false, true, 24), "bp_card_image", [], "any", false, false, true, 24), 24, $this->source)), "html", null, true);
            echo "                   
                                      <p class=\"item-02\">";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 25), 0, [], "any", false, false, true, 25), "entity", [], "any", false, false, true, 25), "bp_statistic_header", [], "any", false, false, true, 25), "value", [], "any", false, false, true, 25), 25, $this->source));
            echo "</p>
                                  </div>
                              ";
        } else {
            // line 28
            echo "                                  <p class=\"item-02\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 28), 0, [], "any", false, false, true, 28), "entity", [], "any", false, false, true, 28), "bp_statistic_header", [], "any", false, false, true, 28), "value", [], "any", false, false, true, 28), 28, $this->source));
            echo "</p>
                              ";
        }
        // line 30
        echo "                          </div>
  
                          <div class=\"wrt-two wow fadeInDown\" data-wow-duration=\"0.5s\" data-wow-delay=\"0.2s\">
                              <div class=\"s-icon\">
                                  <div class=\"step\">
                                      <p class=\"num-01\">02</p>
                                      <p class=\"item-01\">";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 36), 1, [], "any", false, false, true, 36), "entity", [], "any", false, false, true, 36), "bp_tab_section_title", [], "any", false, false, true, 36), "value", [], "any", false, false, true, 36), 36, $this->source));
        echo "</p>
                                  </div>
                              </div>
                              ";
        // line 39
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 39), 1, [], "any", false, false, true, 39), "entity", [], "any", false, false, true, 39), "bp_card_image", [], "any", false, false, true, 39), "entity", [], "any", false, false, true, 39), "fileuri", [], "any", false, false, true, 39))) {
            // line 40
            echo "                                  <div class=\"item-02-ov\"> 
                                      ";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::viewFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 41), 1, [], "any", false, false, true, 41), "entity", [], "any", false, false, true, 41), "bp_card_image", [], "any", false, false, true, 41), 41, $this->source)), "html", null, true);
            echo "                   
                                      <p class=\"item-02\">";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 42), 1, [], "any", false, false, true, 42), "entity", [], "any", false, false, true, 42), "bp_statistic_header", [], "any", false, false, true, 42), "value", [], "any", false, false, true, 42), 42, $this->source));
            echo "</p>
                                  </div>
                              ";
        } else {
            // line 45
            echo "                                  <p class=\"item-02\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 45), 1, [], "any", false, false, true, 45), "entity", [], "any", false, false, true, 45), "bp_statistic_header", [], "any", false, false, true, 45), "value", [], "any", false, false, true, 45), 45, $this->source));
            echo "</p>
                              ";
        }
        // line 46
        echo "                            
                          </div>
  
                          <div class=\"wrt-three wow fadeInDown\" data-wow-duration=\"0.5s\" data-wow-delay=\"0.2s\">
                              <div class=\"s-icon\">
                                  <div class=\"step\">
                                      <p class=\"num-01\">03</p>
                                      <p class=\"item-01\">";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 53), 2, [], "any", false, false, true, 53), "entity", [], "any", false, false, true, 53), "bp_tab_section_title", [], "any", false, false, true, 53), "value", [], "any", false, false, true, 53), 53, $this->source));
        echo "</p>
                                  </div>
                              </div>
                              ";
        // line 56
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 56), 2, [], "any", false, false, true, 56), "entity", [], "any", false, false, true, 56), "bp_card_image", [], "any", false, false, true, 56), "entity", [], "any", false, false, true, 56), "fileuri", [], "any", false, false, true, 56))) {
            // line 57
            echo "                                  <div class=\"item-02-ov\"> 
                                      ";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::viewFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 58), 2, [], "any", false, false, true, 58), "entity", [], "any", false, false, true, 58), "bp_card_image", [], "any", false, false, true, 58), 58, $this->source)), "html", null, true);
            echo "                   
                                      <p class=\"item-02\">";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 59), 2, [], "any", false, false, true, 59), "entity", [], "any", false, false, true, 59), "bp_statistic_header", [], "any", false, false, true, 59), "value", [], "any", false, false, true, 59), 59, $this->source));
            echo "</p>
                                  </div>
                              ";
        } else {
            // line 62
            echo "                                  <p class=\"item-02\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 62), 2, [], "any", false, false, true, 62), "entity", [], "any", false, false, true, 62), "bp_statistic_header", [], "any", false, false, true, 62), "value", [], "any", false, false, true, 62), 62, $this->source));
            echo "</p>
                              ";
        }
        // line 64
        echo "                          </div>
                          <div class=\"wrt-four wow fadeInDown\" data-wow-duration=\"0.5s\" data-wow-delay=\"0.2s\">
                              <div class=\"s-icon\">
                                  <div class=\"step\">
                                      <p class=\"num-01\">04</p>
                                      <p class=\"item-01\">";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 69), 3, [], "any", false, false, true, 69), "entity", [], "any", false, false, true, 69), "bp_tab_section_title", [], "any", false, false, true, 69), "value", [], "any", false, false, true, 69), 69, $this->source));
        echo "</p>
                                  </div>
                              </div>
                               ";
        // line 72
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 72), 3, [], "any", false, false, true, 72), "entity", [], "any", false, false, true, 72), "bp_card_image", [], "any", false, false, true, 72), "entity", [], "any", false, false, true, 72), "fileuri", [], "any", false, false, true, 72))) {
            // line 73
            echo "                                  <div class=\"item-02-ov\"> 
                                      ";
            // line 74
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::viewFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 74), 3, [], "any", false, false, true, 74), "entity", [], "any", false, false, true, 74), "bp_card_image", [], "any", false, false, true, 74), 74, $this->source)), "html", null, true);
            echo "                   
                                      <p class=\"item-02\">";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 75), 3, [], "any", false, false, true, 75), "entity", [], "any", false, false, true, 75), "bp_statistic_header", [], "any", false, false, true, 75), "value", [], "any", false, false, true, 75), 75, $this->source));
            echo "</p>
                                  </div>
                              ";
        } else {
            // line 78
            echo "                                  <p class=\"item-02\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 78), 3, [], "any", false, false, true, 78), "entity", [], "any", false, false, true, 78), "bp_statistic_header", [], "any", false, false, true, 78), "value", [], "any", false, false, true, 78), 78, $this->source));
            echo "</p>
                              ";
        }
        // line 80
        echo "                          </div>
                      </div>
                      <div class=\"wrt-process-center\">                   
                          <div class=\"wrt-six wow fadeInDown\" data-wow-duration=\"0.5s\" data-wow-delay=\"0.2s\">
                              <img src=\"";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 84), 4, [], "any", false, false, true, 84), "entity", [], "any", false, false, true, 84), "bp_card_image", [], "any", false, false, true, 84), "entity", [], "any", false, false, true, 84), "fileuri", [], "any", false, false, true, 84), 84, $this->source)), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 84), 4, [], "any", false, false, true, 84), "entity", [], "any", false, false, true, 84), "bp_card_image", [], "any", false, false, true, 84), "alt", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 84), 4, [], "any", false, false, true, 84), "entity", [], "any", false, false, true, 84), "bp_card_image", [], "any", false, false, true, 84), "alt", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
        echo "\" />
                              <div class=\"s-des\">
                                  <p class=\"item-03\"><i class=\"fa-solid fa-caret-right\"></i>  ";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 86), 4, [], "any", false, false, true, 86), "entity", [], "any", false, false, true, 86), "bp_tab_section_title", [], "any", false, false, true, 86), "value", [], "any", false, false, true, 86), 86, $this->source));
        echo "</p>
                                  <p class=\"item-04\"><i class=\"fa-solid fa-caret-right\"></i>  ";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 87), 4, [], "any", false, false, true, 87), "entity", [], "any", false, false, true, 87), "bp_statistic_header", [], "any", false, false, true, 87), "value", [], "any", false, false, true, 87), 87, $this->source));
        echo "</p>
                              </div>
                          </div>
                      </div>
                      <div class=\"wrt-process-right\">
                          <div class=\"wrt-seven wow fadeInDown\" data-wow-duration=\"0.5s\" data-wow-delay=\"0.2s\">
                              <div class=\"s-icon\">
                                  <div class=\"step\">
                                      <p class=\"num-01\">05</p>
                                      <p class=\"item-01\">";
        // line 96
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 96), 5, [], "any", false, false, true, 96), "entity", [], "any", false, false, true, 96), "bp_tab_section_title", [], "any", false, false, true, 96), "value", [], "any", false, false, true, 96), 96, $this->source));
        echo "</p>
                                  </div>
                              </div>
                              ";
        // line 99
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 99), 5, [], "any", false, false, true, 99), "entity", [], "any", false, false, true, 99), "bp_card_image", [], "any", false, false, true, 99), "entity", [], "any", false, false, true, 99), "fileuri", [], "any", false, false, true, 99))) {
            // line 100
            echo "                                  <div class=\"item-02-ov\"> 
                                      ";
            // line 101
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::viewFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 101), 5, [], "any", false, false, true, 101), "entity", [], "any", false, false, true, 101), "bp_card_image", [], "any", false, false, true, 101), 101, $this->source)), "html", null, true);
            echo "                   
                                      <p class=\"item-02\">";
            // line 102
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 102), 5, [], "any", false, false, true, 102), "entity", [], "any", false, false, true, 102), "bp_statistic_header", [], "any", false, false, true, 102), "value", [], "any", false, false, true, 102), 102, $this->source));
            echo "</p>
                                  </div>
                              ";
        } else {
            // line 105
            echo "                                  <p class=\"item-02\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 105), 5, [], "any", false, false, true, 105), "entity", [], "any", false, false, true, 105), "bp_statistic_header", [], "any", false, false, true, 105), "value", [], "any", false, false, true, 105), 105, $this->source));
            echo "</p>
                              ";
        }
        // line 106
        echo "                           
                          </div>
  
                          <div class=\"wrt-eight wow fadeInDown\" data-wow-duration=\"0.5s\" data-wow-delay=\"0.2s\">
                              <div class=\"s-icon\">
                                  <div class=\"step\">
                                      <p class=\"num-01\">06</p>
                                      <p class=\"item-01\">";
        // line 113
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 113), 6, [], "any", false, false, true, 113), "entity", [], "any", false, false, true, 113), "bp_tab_section_title", [], "any", false, false, true, 113), "value", [], "any", false, false, true, 113), 113, $this->source));
        echo "</p>
                                  </div>
                              </div>
                              ";
        // line 116
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 116), 6, [], "any", false, false, true, 116), "entity", [], "any", false, false, true, 116), "bp_card_image", [], "any", false, false, true, 116), "entity", [], "any", false, false, true, 116), "fileuri", [], "any", false, false, true, 116))) {
            // line 117
            echo "                                  <div class=\"item-02-ov\"> 
                                      ";
            // line 118
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::viewFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 118), 6, [], "any", false, false, true, 118), "entity", [], "any", false, false, true, 118), "bp_card_image", [], "any", false, false, true, 118), 118, $this->source)), "html", null, true);
            echo "                   
                                      <p class=\"item-02\">";
            // line 119
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 119), 6, [], "any", false, false, true, 119), "entity", [], "any", false, false, true, 119), "bp_statistic_header", [], "any", false, false, true, 119), "value", [], "any", false, false, true, 119), 119, $this->source));
            echo "</p>
                                  </div>
                              ";
        } else {
            // line 122
            echo "                                  <p class=\"item-02\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 122), 6, [], "any", false, false, true, 122), "entity", [], "any", false, false, true, 122), "bp_statistic_header", [], "any", false, false, true, 122), "value", [], "any", false, false, true, 122), 122, $this->source));
            echo "</p>
                              ";
        }
        // line 123
        echo "                           
                          </div>
  
                          <div class=\"wrt-nine wow fadeInDown\" data-wow-duration=\"0.5s\" data-wow-delay=\"0.2s\">
                              <div class=\"s-icon\">
                                  <div class=\"step\">
                                      <p class=\"num-01\">07</p>
                                      <p class=\"item-01\">";
        // line 130
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 130), 7, [], "any", false, false, true, 130), "entity", [], "any", false, false, true, 130), "bp_tab_section_title", [], "any", false, false, true, 130), "value", [], "any", false, false, true, 130), 130, $this->source));
        echo "</p>
                                  </div>
                              </div>
                              ";
        // line 133
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 133), 7, [], "any", false, false, true, 133), "entity", [], "any", false, false, true, 133), "bp_card_image", [], "any", false, false, true, 133), "entity", [], "any", false, false, true, 133), "fileuri", [], "any", false, false, true, 133))) {
            // line 134
            echo "                                  <div class=\"item-02-ov\"> 
                                      ";
            // line 135
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::viewFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 135), 7, [], "any", false, false, true, 135), "entity", [], "any", false, false, true, 135), "bp_card_image", [], "any", false, false, true, 135), 135, $this->source)), "html", null, true);
            echo "                   
                                      <p class=\"item-02\">";
            // line 136
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 136), 7, [], "any", false, false, true, 136), "entity", [], "any", false, false, true, 136), "bp_statistic_header", [], "any", false, false, true, 136), "value", [], "any", false, false, true, 136), 136, $this->source));
            echo "</p>
                                  </div>
                              ";
        } else {
            // line 139
            echo "                                  <p class=\"item-02\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 139), 7, [], "any", false, false, true, 139), "entity", [], "any", false, false, true, 139), "bp_statistic_header", [], "any", false, false, true, 139), "value", [], "any", false, false, true, 139), 139, $this->source));
            echo "</p>
                              ";
        }
        // line 140
        echo "                              
                          </div>                   
                      </div>     
                  </div>           
              </div> 
              <div class=\"process--mobile\">
                    <div class=\"process--desktop-inner\">
                      <div class=\"wrt-process-center\">                   
                          <div class=\"wrt-six\">
                              <img src=\"";
        // line 149
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 149), 4, [], "any", false, false, true, 149), "entity", [], "any", false, false, true, 149), "bp_card_image", [], "any", false, false, true, 149), "entity", [], "any", false, false, true, 149), "fileuri", [], "any", false, false, true, 149), 149, $this->source)), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 149), 4, [], "any", false, false, true, 149), "entity", [], "any", false, false, true, 149), "bp_card_image", [], "any", false, false, true, 149), "alt", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 149), 4, [], "any", false, false, true, 149), "entity", [], "any", false, false, true, 149), "bp_card_image", [], "any", false, false, true, 149), "alt", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
        echo "\" />
                              <div class=\"s-des\">
                                  <p class=\"item-03\"><i class=\"fa-solid fa-caret-right\"></i> ";
        // line 151
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 151), 4, [], "any", false, false, true, 151), "entity", [], "any", false, false, true, 151), "bp_tab_section_title", [], "any", false, false, true, 151), "value", [], "any", false, false, true, 151), 151, $this->source));
        echo "</p>
                                  <p class=\"item-04\"><i class=\"fa-solid fa-caret-right\"></i> ";
        // line 152
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 152), 4, [], "any", false, false, true, 152), "entity", [], "any", false, false, true, 152), "bp_statistic_header", [], "any", false, false, true, 152), "value", [], "any", false, false, true, 152), 152, $this->source));
        echo "</p>
                              </div>
                          </div>
                      </div>
                      <div class=\"wrt-process-left\">
                          <div class=\"wrt-one\">
                              <div class=\"s-icon\">
                                  <div class=\"step\">
                                      <p class=\"num-01\">01</p>
                                      <p class=\"item-01\">";
        // line 161
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 161), 0, [], "any", false, false, true, 161), "entity", [], "any", false, false, true, 161), "bp_tab_section_title", [], "any", false, false, true, 161), "value", [], "any", false, false, true, 161), 161, $this->source));
        echo "</p>
                                  </div>
                              </div>    
                              ";
        // line 164
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 164), 0, [], "any", false, false, true, 164), "entity", [], "any", false, false, true, 164), "bp_card_image", [], "any", false, false, true, 164), "entity", [], "any", false, false, true, 164), "fileuri", [], "any", false, false, true, 164))) {
            // line 165
            echo "                                  <div class=\"item-02-ov\"> 
                                      ";
            // line 166
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::viewFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 166), 0, [], "any", false, false, true, 166), "entity", [], "any", false, false, true, 166), "bp_card_image", [], "any", false, false, true, 166), 166, $this->source)), "html", null, true);
            echo "                   
                                      <p class=\"item-02\">";
            // line 167
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 167), 0, [], "any", false, false, true, 167), "entity", [], "any", false, false, true, 167), "bp_statistic_header", [], "any", false, false, true, 167), "value", [], "any", false, false, true, 167), 167, $this->source));
            echo "</p>
                                  </div>
                              ";
        } else {
            // line 170
            echo "                                  <p class=\"item-02\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 170), 0, [], "any", false, false, true, 170), "entity", [], "any", false, false, true, 170), "bp_statistic_header", [], "any", false, false, true, 170), "value", [], "any", false, false, true, 170), 170, $this->source));
            echo "</p>
                              ";
        }
        // line 171
        echo "   
                          </div>
  
                          <div class=\"wrt-two\">
                              <div class=\"s-icon\">
                                 <div class=\"step\">
                                      <p class=\"num-01\">02</p>
                                      <p class=\"item-01\">";
        // line 178
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 178), 1, [], "any", false, false, true, 178), "entity", [], "any", false, false, true, 178), "bp_tab_section_title", [], "any", false, false, true, 178), "value", [], "any", false, false, true, 178), 178, $this->source));
        echo "</p>
                                  </div>
                              </div>
                              ";
        // line 181
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 181), 1, [], "any", false, false, true, 181), "entity", [], "any", false, false, true, 181), "bp_card_image", [], "any", false, false, true, 181), "entity", [], "any", false, false, true, 181), "fileuri", [], "any", false, false, true, 181))) {
            // line 182
            echo "                                  <div class=\"item-02-ov\"> 
                                      ";
            // line 183
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::viewFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 183), 1, [], "any", false, false, true, 183), "entity", [], "any", false, false, true, 183), "bp_card_image", [], "any", false, false, true, 183), 183, $this->source)), "html", null, true);
            echo "                   
                                      <p class=\"item-02\">";
            // line 184
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 184), 1, [], "any", false, false, true, 184), "entity", [], "any", false, false, true, 184), "bp_statistic_header", [], "any", false, false, true, 184), "value", [], "any", false, false, true, 184), 184, $this->source));
            echo "</p>
                                  </div>
                              ";
        } else {
            // line 187
            echo "                                  <p class=\"item-02\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 187), 1, [], "any", false, false, true, 187), "entity", [], "any", false, false, true, 187), "bp_statistic_header", [], "any", false, false, true, 187), "value", [], "any", false, false, true, 187), 187, $this->source));
            echo "</p>
                              ";
        }
        // line 188
        echo "                            
                          </div>
  
                          <div class=\"wrt-three\">
                              <div class=\"s-icon\">
                                  <div class=\"step\">
                                      <p class=\"num-01\">03</p>
                                      <p class=\"item-01\">";
        // line 195
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 195), 2, [], "any", false, false, true, 195), "entity", [], "any", false, false, true, 195), "bp_tab_section_title", [], "any", false, false, true, 195), "value", [], "any", false, false, true, 195), 195, $this->source));
        echo "</p>
                                  </div>
                              </div>
                              ";
        // line 198
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 198), 2, [], "any", false, false, true, 198), "entity", [], "any", false, false, true, 198), "bp_card_image", [], "any", false, false, true, 198), "entity", [], "any", false, false, true, 198), "fileuri", [], "any", false, false, true, 198))) {
            // line 199
            echo "                                  <div class=\"item-02-ov\"> 
                                      ";
            // line 200
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::viewFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 200), 2, [], "any", false, false, true, 200), "entity", [], "any", false, false, true, 200), "bp_card_image", [], "any", false, false, true, 200), 200, $this->source)), "html", null, true);
            echo "                   
                                      <p class=\"item-02\">";
            // line 201
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 201), 2, [], "any", false, false, true, 201), "entity", [], "any", false, false, true, 201), "bp_statistic_header", [], "any", false, false, true, 201), "value", [], "any", false, false, true, 201), 201, $this->source));
            echo "</p>
                                  </div>
                              ";
        } else {
            // line 204
            echo "                                  <p class=\"item-02\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 204), 2, [], "any", false, false, true, 204), "entity", [], "any", false, false, true, 204), "bp_statistic_header", [], "any", false, false, true, 204), "value", [], "any", false, false, true, 204), 204, $this->source));
            echo "</p>
                              ";
        }
        // line 205
        echo "                        
                          </div>
                          <div class=\"wrt-four\">
                              <div class=\"s-icon\">
                                  <div class=\"step\">
                                      <p class=\"num-01\">04</p>
                                      <p class=\"item-01\">";
        // line 211
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 211), 3, [], "any", false, false, true, 211), "entity", [], "any", false, false, true, 211), "bp_tab_section_title", [], "any", false, false, true, 211), "value", [], "any", false, false, true, 211), 211, $this->source));
        echo "</p>
                                  </div>
                              </div>
                              ";
        // line 214
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 214), 3, [], "any", false, false, true, 214), "entity", [], "any", false, false, true, 214), "bp_card_image", [], "any", false, false, true, 214), "entity", [], "any", false, false, true, 214), "fileuri", [], "any", false, false, true, 214))) {
            // line 215
            echo "                                  <div class=\"item-02-ov\"> 
                                      ";
            // line 216
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::viewFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 216), 3, [], "any", false, false, true, 216), "entity", [], "any", false, false, true, 216), "bp_card_image", [], "any", false, false, true, 216), 216, $this->source)), "html", null, true);
            echo "                   
                                      <p class=\"item-02\">";
            // line 217
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 217), 3, [], "any", false, false, true, 217), "entity", [], "any", false, false, true, 217), "bp_statistic_header", [], "any", false, false, true, 217), "value", [], "any", false, false, true, 217), 217, $this->source));
            echo "</p>
                                  </div>
                              ";
        } else {
            // line 220
            echo "                                  <p class=\"item-02\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 220), 3, [], "any", false, false, true, 220), "entity", [], "any", false, false, true, 220), "bp_statistic_header", [], "any", false, false, true, 220), "value", [], "any", false, false, true, 220), 220, $this->source));
            echo "</p>
                              ";
        }
        // line 221
        echo "                           
                          </div>
                      </div>                 
                      <div class=\"wrt-process-right\">
                          <div class=\"wrt-seven\">
                              <div class=\"s-icon\">
                                  <div class=\"step\">
                                      <p class=\"num-01\">05</p>
                                      <p class=\"item-01\">";
        // line 229
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 229), 5, [], "any", false, false, true, 229), "entity", [], "any", false, false, true, 229), "bp_tab_section_title", [], "any", false, false, true, 229), "value", [], "any", false, false, true, 229), 229, $this->source));
        echo "</p>
                                  </div>
                              </div>
                              ";
        // line 232
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 232), 5, [], "any", false, false, true, 232), "entity", [], "any", false, false, true, 232), "bp_card_image", [], "any", false, false, true, 232), "entity", [], "any", false, false, true, 232), "fileuri", [], "any", false, false, true, 232))) {
            // line 233
            echo "                                  <div class=\"item-02-ov\"> 
                                      ";
            // line 234
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::viewFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 234), 5, [], "any", false, false, true, 234), "entity", [], "any", false, false, true, 234), "bp_card_image", [], "any", false, false, true, 234), 234, $this->source)), "html", null, true);
            echo "                   
                                      <p class=\"item-02\">";
            // line 235
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 235), 5, [], "any", false, false, true, 235), "entity", [], "any", false, false, true, 235), "bp_statistic_header", [], "any", false, false, true, 235), "value", [], "any", false, false, true, 235), 235, $this->source));
            echo "</p>
                                  </div>
                              ";
        } else {
            // line 238
            echo "                                  <p class=\"item-02\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 238), 5, [], "any", false, false, true, 238), "entity", [], "any", false, false, true, 238), "bp_statistic_header", [], "any", false, false, true, 238), "value", [], "any", false, false, true, 238), 238, $this->source));
            echo "</p>
                              ";
        }
        // line 239
        echo "                            
                          </div>
  
                          <div class=\"wrt-eight\">
                              <div class=\"s-icon\">
                                  <div class=\"step\">
                                      <p class=\"num-01\">06</p>
                                      <p class=\"item-01\">";
        // line 246
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 246), 6, [], "any", false, false, true, 246), "entity", [], "any", false, false, true, 246), "bp_tab_section_title", [], "any", false, false, true, 246), "value", [], "any", false, false, true, 246), 246, $this->source));
        echo "</p>
                                  </div>
                              </div>
                               ";
        // line 249
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 249), 6, [], "any", false, false, true, 249), "entity", [], "any", false, false, true, 249), "bp_card_image", [], "any", false, false, true, 249), "entity", [], "any", false, false, true, 249), "fileuri", [], "any", false, false, true, 249))) {
            // line 250
            echo "                                  <div class=\"item-02-ov\"> 
                                      ";
            // line 251
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::viewFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 251), 6, [], "any", false, false, true, 251), "entity", [], "any", false, false, true, 251), "bp_card_image", [], "any", false, false, true, 251), 251, $this->source)), "html", null, true);
            echo "                   
                                      <p class=\"item-02\">";
            // line 252
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 252), 6, [], "any", false, false, true, 252), "entity", [], "any", false, false, true, 252), "bp_statistic_header", [], "any", false, false, true, 252), "value", [], "any", false, false, true, 252), 252, $this->source));
            echo "</p>
                                  </div>
                              ";
        } else {
            // line 255
            echo "                                  <p class=\"item-02\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 255), 6, [], "any", false, false, true, 255), "entity", [], "any", false, false, true, 255), "bp_statistic_header", [], "any", false, false, true, 255), "value", [], "any", false, false, true, 255), 255, $this->source));
            echo "</p>
                              ";
        }
        // line 256
        echo "                            
                          </div>
  
                          <div class=\"wrt-nine\">
                              <div class=\"s-icon\">
                                  <div class=\"step\">
                                      <p class=\"num-01\">07</p>
                                      <p class=\"item-01\">";
        // line 263
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 263), 7, [], "any", false, false, true, 263), "entity", [], "any", false, false, true, 263), "bp_tab_section_title", [], "any", false, false, true, 263), "value", [], "any", false, false, true, 263), 263, $this->source));
        echo "</p>
                                  </div>
                              </div>
                               ";
        // line 266
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 266), 7, [], "any", false, false, true, 266), "entity", [], "any", false, false, true, 266), "bp_card_image", [], "any", false, false, true, 266), "entity", [], "any", false, false, true, 266), "fileuri", [], "any", false, false, true, 266))) {
            // line 267
            echo "                                  <div class=\"item-02-ov\"> 
                                      ";
            // line 268
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::viewFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 268), 7, [], "any", false, false, true, 268), "entity", [], "any", false, false, true, 268), "bp_card_image", [], "any", false, false, true, 268), 268, $this->source)), "html", null, true);
            echo "                   
                                      <p class=\"item-02\">";
            // line 269
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 269), 7, [], "any", false, false, true, 269), "entity", [], "any", false, false, true, 269), "bp_statistic_header", [], "any", false, false, true, 269), "value", [], "any", false, false, true, 269), 269, $this->source));
            echo "</p>
                                  </div>
                              ";
        } else {
            // line 272
            echo "                                  <p class=\"item-02\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_whyrooftopsolar", [], "any", false, false, true, 272), 7, [], "any", false, false, true, 272), "entity", [], "any", false, false, true, 272), "bp_statistic_header", [], "any", false, false, true, 272), "value", [], "any", false, false, true, 272), 272, $this->source));
            echo "</p>
                              ";
        }
        // line 273
        echo "                           
                          </div>                   
                      </div>     
                  </div>
                 
              </div>           
          
      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/paragraph/paragraph--whyrooftopsolar--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  626 => 273,  620 => 272,  614 => 269,  610 => 268,  607 => 267,  605 => 266,  599 => 263,  590 => 256,  584 => 255,  578 => 252,  574 => 251,  571 => 250,  569 => 249,  563 => 246,  554 => 239,  548 => 238,  542 => 235,  538 => 234,  535 => 233,  533 => 232,  527 => 229,  517 => 221,  511 => 220,  505 => 217,  501 => 216,  498 => 215,  496 => 214,  490 => 211,  482 => 205,  476 => 204,  470 => 201,  466 => 200,  463 => 199,  461 => 198,  455 => 195,  446 => 188,  440 => 187,  434 => 184,  430 => 183,  427 => 182,  425 => 181,  419 => 178,  410 => 171,  404 => 170,  398 => 167,  394 => 166,  391 => 165,  389 => 164,  383 => 161,  371 => 152,  367 => 151,  358 => 149,  347 => 140,  341 => 139,  335 => 136,  331 => 135,  328 => 134,  326 => 133,  320 => 130,  311 => 123,  305 => 122,  299 => 119,  295 => 118,  292 => 117,  290 => 116,  284 => 113,  275 => 106,  269 => 105,  263 => 102,  259 => 101,  256 => 100,  254 => 99,  248 => 96,  236 => 87,  232 => 86,  223 => 84,  217 => 80,  211 => 78,  205 => 75,  201 => 74,  198 => 73,  196 => 72,  190 => 69,  183 => 64,  177 => 62,  171 => 59,  167 => 58,  164 => 57,  162 => 56,  156 => 53,  147 => 46,  141 => 45,  135 => 42,  131 => 41,  128 => 40,  126 => 39,  120 => 36,  112 => 30,  106 => 28,  100 => 25,  96 => 24,  93 => 23,  91 => 22,  85 => 19,  72 => 11,  67 => 281,  65 => 11,  60 => 10,  56 => 9,  49 => 283,  46 => 9,  44 => 6,  43 => 5,  42 => 4,  41 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/solar/templates/paragraph/paragraph--whyrooftopsolar--default.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/paragraph/paragraph--whyrooftopsolar--default.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "block" => 9, "if" => 22);
        static $filters = array("clean_class" => 4, "escape" => 10, "raw" => 19, "view" => 24);
        static $functions = array("file_url" => 84);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape', 'raw', 'view'],
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
