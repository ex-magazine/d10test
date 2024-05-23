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

/* themes/custom/solar/templates/paragraph/paragraph--committedproject--default.html.twig */
class __TwigTemplate_fbd8474d825f8c542c12efee57548802 extends Template
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
        $context["classes"] = [0 => "paragraph", 1 => "rts-clients-feedback rts-section-gapBottom bg-feedback-about bg_image", 2 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 5
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
        // line 400
        echo "    </div>
";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "

    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"pb--40\">
            ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_section_content", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "      
            </div>                
        </div>
    </div>
    <div class=\"row g-5\">
      <div class=\"col-lg-12 col-md-12 col-sm-12 col-12\">
            <div class=\"day-columns\">
                <div class=\"day-column co-01\">
                    <div class=\"day-header\"></div>
                    <div class=\"day-content\">
                        <div class=\"event gray\">
                            <span class=\"title\">";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_committedproject", [], "any", false, false, true, 29), 0, [], "any", false, false, true, 29), "entity", [], "any", false, false, true, 29), "bp_accordion_section_title", [], "any", false, false, true, 29), "value", [], "any", false, false, true, 29), 29, $this->source));
        echo "</span>                        
                        </div>
                        <div class=\"event green\">
                            <span class=\"title\">";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_committedproject", [], "any", false, false, true, 32), 1, [], "any", false, false, true, 32), "entity", [], "any", false, false, true, 32), "bp_accordion_section_title", [], "any", false, false, true, 32), "value", [], "any", false, false, true, 32), 32, $this->source));
        echo "</span>                     
                        </div>
                        <div class=\"event turquoise\">
                            <span class=\"title\">";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_committedproject", [], "any", false, false, true, 35), 2, [], "any", false, false, true, 35), "entity", [], "any", false, false, true, 35), "bp_accordion_section_title", [], "any", false, false, true, 35), "value", [], "any", false, false, true, 35), 35, $this->source));
        echo "</span>                       
                        </div>
                        <div class=\"event navy\">
                            <span class=\"title\">";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_committedproject", [], "any", false, false, true, 38), 3, [], "any", false, false, true, 38), "entity", [], "any", false, false, true, 38), "bp_accordion_section_title", [], "any", false, false, true, 38), "value", [], "any", false, false, true, 38), 38, $this->source));
        echo "</span>                     
                        </div>
                        <div class=\"event blue\">
                            <span class=\"title\">";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_committedproject", [], "any", false, false, true, 41), 4, [], "any", false, false, true, 41), "entity", [], "any", false, false, true, 41), "bp_accordion_section_title", [], "any", false, false, true, 41), "value", [], "any", false, false, true, 41), 41, $this->source));
        echo "</span>                       
                        </div>
                        <div class=\"event purple\">
                            <span class=\"title\">";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_committedproject", [], "any", false, false, true, 44), 5, [], "any", false, false, true, 44), "entity", [], "any", false, false, true, 44), "bp_accordion_section_title", [], "any", false, false, true, 44), "value", [], "any", false, false, true, 44), 44, $this->source));
        echo "</span>                        
                        </div>
                        <div class=\"event yellow\">
                            <span class=\"title\">";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_committedproject", [], "any", false, false, true, 47), 6, [], "any", false, false, true, 47), "entity", [], "any", false, false, true, 47), "bp_accordion_section_title", [], "any", false, false, true, 47), "value", [], "any", false, false, true, 47), 47, $this->source));
        echo "</span>                       
                        </div>
                    </div>
                
                </div>
                <div class=\"day-column co-02 co-03\">
                    <div class=\"day-header\">";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_modal_title", [], "any", false, false, true, 53), 0, [], "any", false, false, true, 53), 53, $this->source));
        echo "</div>
                    <div class=\"day-content\">
                        <div class=\"event gray\">
                            <span class=\"rank-12\"></span>         
                            <span class=\"title\">";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_committedproject", [], "any", false, false, true, 57), 0, [], "any", false, false, true, 57), "entity", [], "any", false, false, true, 57), "bp_card_title", [], "any", false, false, true, 57), "value", [], "any", false, false, true, 57), 57, $this->source));
        echo "</span>                                      
                        </div>
                        <div class=\"event green\">
                            <span class=\"rank-1012\"></span>
                            <span class=\"title\">";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_committedproject", [], "any", false, false, true, 61), 1, [], "any", false, false, true, 61), "entity", [], "any", false, false, true, 61), "bp_card_title", [], "any", false, false, true, 61), "value", [], "any", false, false, true, 61), 61, $this->source));
        echo "</span>                                               
                        </div>
                        <div class=\"event turquoise bg-none\">
                            <span class=\"title\"></span>                      
                        </div>
                        <div class=\"event navy bg-none\">
                            <span class=\"title\"></span>                       
                        </div>
                        <div class=\"event blue\">
                            <span class=\"rank-53045\"></span>
                            <span class=\"title\">";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_committedproject", [], "any", false, false, true, 71), 4, [], "any", false, false, true, 71), "entity", [], "any", false, false, true, 71), "bp_card_title", [], "any", false, false, true, 71), "value", [], "any", false, false, true, 71), 71, $this->source));
        echo "</span>                     
                        </div>
                        <div class=\"event purple bg-none\">
                            <span class=\"title\"></span>                       
                        </div>
                        <div class=\"event yellow bg-none\">
                            <span class=\"title\"></span>                       
                        </div>
                    </div>
                    
                </div>
                <div class=\"day-column co-02 co-04\">
                    <div class=\"day-header\">";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_modal_title", [], "any", false, false, true, 83), 1, [], "any", false, false, true, 83), 83, $this->source));
        echo "</div>
                    <div class=\"day-content\">
                    <div class=\"event gray bg-none\">
                        <span class=\"title\"></span>               
                    </div>
                    
                    <div class=\"event green bg-none\">
                        <span class=\"title\"></span>                                
                    </div>
                        <div class=\"event turquoise\">
                            <span class=\"rank-30102\"></span>    
                            <span class=\"title\">";
        // line 94
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_committedproject", [], "any", false, false, true, 94), 2, [], "any", false, false, true, 94), "entity", [], "any", false, false, true, 94), "bp_card_title", [], "any", false, false, true, 94), "value", [], "any", false, false, true, 94), 94, $this->source));
        echo "</span>                                          
                        </div>
                        <div class=\"event navy\">
                            <span class=\"rank-40507\"></span>   
                            <span class=\"title\">";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_committedproject", [], "any", false, false, true, 98), 3, [], "any", false, false, true, 98), "entity", [], "any", false, false, true, 98), "bp_card_title", [], "any", false, false, true, 98), "value", [], "any", false, false, true, 98), 98, $this->source));
        echo "</span>                          
                        </div>
                        <div class=\"event blue bg-none\">
                            <span class=\"title\"></span>                      
                        </div>
                        <div class=\"event purple bg-none\">
                            <span class=\"title\"></span>                       
                        </div>
                        <div class=\"event yellow bg-none\">
                            <span class=\"title\"></span>                       
                        </div>
                    </div>
                  
                </div>
                <div class=\"day-column co-02 co-05\">
                    <div class=\"day-header\">";
        // line 113
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_modal_title", [], "any", false, false, true, 113), 2, [], "any", false, false, true, 113), 113, $this->source));
        echo "</div>
                    <div class=\"day-content\">
                    <div class=\"event gray bg-none\">
                        <span class=\"title\"></span>                 
                    </div>
                    <div class=\"event green bg-none\">
                        <span class=\"title\"></span>                 
                    </div>
                    <div class=\"event turquoise bg-none\">
                        <span class=\"title\"></span>            
                    </div>
                    <div class=\"event navy bg-none\">                        
                        <span class=\"title\"></span>                                 
                    </div>
                    <div class=\"event blue bg-none\">
                        <span class=\"title\"></span>                      
                    </div>
                    <div class=\"event purple bg-none\">
                        <span class=\"title\"></span>                       
                    </div>
                    <div class=\"event yellow bg-none\">
                        <span class=\"title\"></span>                       
                    </div>
                    </div>
                    
                </div>
                <div class=\"day-column co-02 co-06\">
                    <div class=\"day-header\">";
        // line 140
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_modal_title", [], "any", false, false, true, 140), 3, [], "any", false, false, true, 140), 140, $this->source));
        echo "</div>
                    <div class=\"day-content\">
                    <div class=\"event gray bg-none\">
                        <span class=\"title\"></span>               
                    </div>
                    <div class=\"event green bg-none\">
                        <span class=\"title\"></span>            
                    </div>
                    <div class=\"event turquoise bg-none\">
                        <span class=\"title\"></span>                
                    </div>
                    <div class=\"event navy bg-none\">
                        <span class=\"title\"></span>                 
                    </div>
                    <div class=\"event blue bg-none\">
                        <span class=\"title\"></span>              
                    </div>
                    <div class=\"event purple bg-none\">
                        <span class=\"title\"></span>                       
                    </div>
                    <div class=\"event yellow bg-none\">
                        <span class=\"title\"></span>                       
                    </div>
                    </div>
                   
                </div>
                <div class=\"day-column co-02 co-07\">
                    <div class=\"day-header\">";
        // line 167
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_modal_title", [], "any", false, false, true, 167), 4, [], "any", false, false, true, 167), 167, $this->source));
        echo "</div>
                    <div class=\"day-content\">
                    <div class=\"event gray bg-none\">
                        <span class=\"title\"></span>              
                    </div>
                    <div class=\"event green bg-none\">
                        <span class=\"title\"></span>               
                    </div>
                    <div class=\"event turquoise bg-none\">
                        <span class=\"title\"></span>               
                    </div>
                    <div class=\"event navy bg-none\">
                        <span class=\"title\"></span>              
                    </div>
                    <div class=\"event blue bg-none\">
                        <span class=\"title\"></span>              
                    </div>
                    <div class=\"event purple\">
                        <span class=\"rank-63540\"></span>     
                        <span class=\"title\">";
        // line 186
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_committedproject", [], "any", false, false, true, 186), 5, [], "any", false, false, true, 186), "entity", [], "any", false, false, true, 186), "bp_card_title", [], "any", false, false, true, 186), "value", [], "any", false, false, true, 186), 186, $this->source));
        echo "</span>             
                    </div>
                    <div class=\"event yellow bg-none\">
                        <span class=\"title\"></span>               
                    </div>
                    </div>
                    
                </div>
                <div class=\"day-column co-02 co-08\">
                    <div class=\"day-header\">";
        // line 195
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_modal_title", [], "any", false, false, true, 195), 5, [], "any", false, false, true, 195), 195, $this->source));
        echo "</div>
                    <div class=\"day-content\">
                    <div class=\"event gray bg-none\">
                        <span class=\"title\"></span>               
                    </div>
                    <div class=\"event green bg-none\">
                        <span class=\"title\"></span>               
                    </div>
                    <div class=\"event turquoise bg-none\">
                        <span class=\"title\"></span>                
                    </div>
                    <div class=\"event navy bg-none\">
                        <span class=\"title\"></span>              
                    </div>
                    <div class=\"event blue bg-none\">
                        <span class=\"title\"></span>                                                   
                    </div>
                    <div class=\"event purple bg-none\">
                        <span class=\"title\"></span>               
                    </div>
                    <div class=\"event yellow bg-none\">
                        <span class=\"title\"></span>               
                    </div>
                    </div>
                    
                </div>
                <div class=\"day-column co-02 co-09\">
                <div class=\"day-header\">";
        // line 222
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_modal_title", [], "any", false, false, true, 222), 6, [], "any", false, false, true, 222), 222, $this->source));
        echo "</div>
                    <div class=\"day-content\">
                        <div class=\"event gray bg-none\">
                            <span class=\"title\"></span>                               
                        </div>
                        <div class=\"event green bg-none\">
                            <span class=\"title\"></span>                             
                        </div>
                        <div class=\"event turquoise bg-none\">
                            <span class=\"title\"></span>                
                        </div>
                        <div class=\"event navy bg-none\">
                            <span class=\"title\"></span>              
                        </div>
                        <div class=\"event blue bg-none\">
                            <span class=\"title\"></span>                           
                        </div>
                        <div class=\"event purple bg-none\">
                            <span class=\"title\"></span>               
                        </div>
                        <div class=\"event yellow bg-none\">
                            <span class=\"title\"></span>               
                        </div>
                    </div>
                    
                </div>
               


                <div class=\"day-column co-02 co-10\">
                    <div class=\"day-header\">";
        // line 252
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_modal_title", [], "any", false, false, true, 252), 7, [], "any", false, false, true, 252), 252, $this->source));
        echo "</div>
                        <div class=\"day-content\">
                            <div class=\"event gray bg-none\">
                                <span class=\"title\"></span>                              
                            </div>
                            <div class=\"event green bg-none\">
                                <span class=\"title\"></span>                              
                            </div>
                            <div class=\"event turquoise bg-none\">
                                <span class=\"title\"></span>                
                            </div>
                            <div class=\"event navy bg-none\">
                                <span class=\"title\"></span>              
                            </div>
                            <div class=\"event blue bg-none\">
                                <span class=\"title\"></span>                               
                            </div>
                            <div class=\"event purple bg-none\">
                                <span class=\"title\"></span>               
                            </div>
                            <div class=\"event yellow bg-none\">
                                <span class=\"title\"></span>               
                            </div>

                        </div>
                          
                </div>

                <div class=\"day-column co-02 co-11\">
                    <div class=\"day-header\">";
        // line 281
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_modal_title", [], "any", false, false, true, 281), 8, [], "any", false, false, true, 281), 281, $this->source));
        echo "</div>
                        <div class=\"day-content\">
                            <div class=\"event gray bg-none\">
                                <span class=\"title\"></span>                                
                            </div>
                            <div class=\"event green bg-none\">
                                <span class=\"title\"></span>                               
                            </div>
                            <div class=\"event turquoise bg-none\">
                                <span class=\"title bg-none\"></span>                
                            </div>
                            <div class=\"event navy bg-none\">
                                <span class=\"title\"></span>              
                            </div>
                            <div class=\"event blue bg-none\">
                                <span class=\"title\"></span>                               
                            </div>
                            <div class=\"event purple bg-none\">
                                <span class=\"title\"></span>               
                            </div>
                            <div class=\"event yellow bg-none\">
                                <span class=\"title\"></span>               
                            </div>
                        </div>
                             
                </div>


                <div class=\"day-column co-02 co-12\">
                    <div class=\"day-header\">";
        // line 310
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_modal_title", [], "any", false, false, true, 310), 9, [], "any", false, false, true, 310), 310, $this->source));
        echo "</div>
                        <div class=\"day-content\">
                            <div class=\"event gray bg-none\">
                                <span class=\"title\"></span>                           
                            </div>
                            <div class=\"event green bg-none\">
                                <span class=\"title\"></span>                             
                            </div>
                            <div class=\"event turquoise bg-none\">
                                <span class=\"title\"></span>                              
                            </div>
                            <div class=\"event navy bg-none\">
                                <span class=\"title\"></span>                           
                            </div>
                            <div class=\"event blue bg-none\">
                                <span class=\"title\"></span>                        
                            </div>
                            <div class=\"event purple bg-none\">                                
                                <span class=\"title\"></span>                                                        
                            </div>
                            <div class=\"event yellow bg-none\">
                                <span class=\"title\"></span>               
                            </div>
                        </div>
                     
                </div>


                <div class=\"day-column co-02 co-13\">
                    <div class=\"day-header\">";
        // line 339
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_modal_title", [], "any", false, false, true, 339), 10, [], "any", false, false, true, 339), 339, $this->source));
        echo "</div>
                        <div class=\"day-content\">
                            <div class=\"event gray bg-none\">
                                <span class=\"title\"></span>                              
                            </div>
                            <div class=\"event green bg-none\">
                                <span class=\"title\"></span>                              
                            </div>
                            <div class=\"event turquoise bg-none\">
                                <span class=\"title\"></span>                           
                            </div>
                            <div class=\"event navy bg-none\">
                                <span class=\"title\"></span>                               
                            </div>
                            <div class=\"event blue bg-none\">
                                <span class=\"title\"></span>                             
                            </div>
                            <div class=\"event purple bg-none\">
                                <span class=\"title\"></span>                                                              
                            </div>
                            <div class=\"event yellow\">
                                <span class=\"rank-70407\"></span>   
                                <span class=\"title\">";
        // line 361
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_committedproject", [], "any", false, false, true, 361), 6, [], "any", false, false, true, 361), "entity", [], "any", false, false, true, 361), "bp_card_title", [], "any", false, false, true, 361), "value", [], "any", false, false, true, 361), 361, $this->source));
        echo "</span>                                                       
                            </div>
                        </div>
                        
                </div>

                <div class=\"day-column co-02 co-14\">
                    <div class=\"day-header\">";
        // line 368
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_modal_title", [], "any", false, false, true, 368), 11, [], "any", false, false, true, 368), 368, $this->source));
        echo "</div>
                        <div class=\"day-content\">
                            <div class=\"event gray bg-none\">
                                <span class=\"title\"></span>                             
                            </div>
                            <div class=\"event green bg-none\">
                                <span class=\"title\"></span>                             
                            </div>
                             <div class=\"event turquoise bg-none\">
                                <span class=\"title\"></span>                           
                            </div>
                            <div class=\"event navy bg-none\">
                                <span class=\"title\"></span>                         
                            </div>
                             <div class=\"event blue bg-none\">
                                <span class=\"title\"></span>                             
                            </div>
                            <div class=\"event purple bg-none\">
                                <span class=\"title\"></span>                            
                            </div>
                             <div class=\"event yellow bg-none\">
                                <span class=\"title\"></span>                  
                            </div>
                        </div>                     
                </div>


            </div>
        </div>
    </div>

    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/paragraph/paragraph--committedproject--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  504 => 368,  494 => 361,  469 => 339,  437 => 310,  405 => 281,  373 => 252,  340 => 222,  310 => 195,  298 => 186,  276 => 167,  246 => 140,  216 => 113,  198 => 98,  191 => 94,  177 => 83,  162 => 71,  149 => 61,  142 => 57,  135 => 53,  126 => 47,  120 => 44,  114 => 41,  108 => 38,  102 => 35,  96 => 32,  90 => 29,  76 => 18,  69 => 13,  65 => 12,  60 => 400,  58 => 12,  53 => 11,  46 => 10,  44 => 7,  43 => 6,  42 => 5,  41 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/solar/templates/paragraph/paragraph--committedproject--default.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/paragraph/paragraph--committedproject--default.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "block" => 10);
        static $filters = array("clean_class" => 5, "escape" => 11, "raw" => 29);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
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
