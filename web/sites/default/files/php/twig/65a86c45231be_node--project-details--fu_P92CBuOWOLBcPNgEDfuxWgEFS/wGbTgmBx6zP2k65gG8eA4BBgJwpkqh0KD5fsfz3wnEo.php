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

/* themes/custom/solar/templates/content/node--project-details--full.html.twig */
class __TwigTemplate_5a3f65de9def28e26e799d0762041426 extends Template
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
        // line 69
        echo "
";
        // line 70
        $context["layout"] = ((($context["layout"] ?? null)) ? (("layout--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["layout"] ?? null), 70, $this->source)))) : (""));
        // line 71
        echo "
";
        // line 73
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 75
($context["node"] ?? null), "bundle", [], "any", false, false, true, 75), 75, $this->source))), 2 => ((        // line 76
($context["layout"] ?? null)) ? ("grid-full") : ("")), 3 => ((        // line 77
($context["layout"] ?? null)) ? ("ie11-autorow") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,         // line 78
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 78)) ? ("node--promoted") : ("")), 5 => ((twig_get_attribute($this->env, $this->source,         // line 79
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 79)) ? ("node--sticky") : ("")), 6 => (( !twig_get_attribute($this->env, $this->source,         // line 80
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 80)) ? ("node--unpublished") : ("")), 7 => ((        // line 81
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 81, $this->source)))) : (""))];
        // line 84
        echo "  
<article";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 85), 85, $this->source), "html", null, true);
        echo ">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            ";
        // line 88
        if ((twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_pcategory", [], "any", false, false, true, 88)))) == "normal")) {
            // line 89
            echo "            <div class=\"project-details-area-main\">
                <div class=\"thumbnail\">
                    ";
            // line 91
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
            echo "                   
                </div>
            </div>
            ";
        }
        // line 95
        echo "           
            
            ";
        // line 97
        if ((twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_pcategory", [], "any", false, false, true, 97)))) == "video")) {
            // line 98
            echo "                <div class=\"vedio-area-project-details\">
                    <iframe width=\"750\" height=\"720\" src=\"";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_youtube", [], "any", false, false, true, 99), 99, $this->source)))), "html", null, true);
            echo "\" title=\"Solar Project\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"\"></iframe>
                </div>
            ";
        }
        // line 102
        echo "            ";
        if ((twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_pcategory", [], "any", false, false, true, 102)))) == "carousel")) {
            // line 103
            echo "                ";
            $context["count"] = (twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_multi_images", [], "any", false, false, true, 103), "value", [], "any", false, false, true, 103), 103, $this->source)) - 1);
            echo "                   
                <div class=\"project-details-carousel-big\">
                    <div class=\"swiper project-details-carousel\">
                        <div class=\"swiper-wrapper\">
                            ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ($context["count"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 108
                echo "                                <div class=\"swiper-slide\">
                                    <div class=\"project-details-area-main\">
                                        <div class=\"thumbnail\">                                                                        
                                            <img src=\"";
                // line 111
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_multi_images", [], "any", false, false, true, 111)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), "entity", [], "any", false, false, true, 111), "fileuri", [], "any", false, false, true, 111), 111, $this->source), "project1320x720")), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_multi_images", [], "any", false, false, true, 111)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null), "alt", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
                echo "\">
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "                        </div>
                        <div class=\"swiper-button-next\"></div>
                        <div class=\"swiper-button-prev\"></div>
                    </div>
                </div>
            ";
        }
        // line 122
        echo "            ";
        if ((twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_pcategory", [], "any", false, false, true, 122)))) == "gallery")) {
            // line 123
            echo "                ";
            $context["count"] = (twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_multi_images", [], "any", false, false, true, 123), "getvalue", [], "any", false, false, true, 123), 123, $this->source)) - 1);
            echo "  
                <section id=\"gallery\">
                    <div class=\"container\">
                        <div id=\"image-gallery\">
                            <div class=\"row\">
                                ";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ($context["count"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 129
                echo "                                    <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12 image\">
                                        <div class=\"img-wrapper\">
                                            <a href=\"";
                // line 131
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_multi_images", [], "any", false, false, true, 131)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["i"]] ?? null) : null), "entity", [], "any", false, false, true, 131), "fileuri", [], "any", false, false, true, 131), 131, $this->source), "project1320x720")), "html", null, true);
                echo "\">                                               
                                                <img src=\"";
                // line 132
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_multi_images", [], "any", false, false, true, 132)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["i"]] ?? null) : null), "entity", [], "any", false, false, true, 132), "fileuri", [], "any", false, false, true, 132), 132, $this->source), "wide")), "html", null, true);
                echo "\" class=\"img-responsive\"  alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_multi_images", [], "any", false, false, true, 132)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["i"]] ?? null) : null), "alt", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
                echo "\">
                                            </a>
                                            <div class=\"img-overlay\">
                                                <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                                            </div>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "                              
                             
                            </div><!-- End row -->
                        </div><!-- End image gallery -->
                    </div><!-- End container -->
                </section>
            ";
        }
        // line 146
        echo "        </div>
    </div> 

    <div class=\"row\">
        <div class=\"col-lg-8 pr--30\">
            <div class=\"portfolio-disc-content\">
                <div class=\"title-area\">                    
                     <div class=\"pr-align-items-center mb--30\">                        
                        <!-- tags details -->                     
                        <div class=\"details-tag\">
                            <i class=\"fas fa-map-marker-alt\"></i>
                            ";
        // line 157
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_growth", [], "any", false, false, true, 157), 157, $this->source), "html", null, true);
        echo "                  
                        </div>
                        <div class=\"single\">
                            <i class=\"fa-light fa-phone-office\"></i>
                            ";
        // line 161
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_time_to_read", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
        echo "
                        </div>
                        <!-- tags details End -->     
                        <div class=\"details-share\">
                            ";
        // line 165
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 165, $this->source), "comment", "body", "field_tags", "field_time_to_read", "field_the_challenge_of_project", "field_image", "field_address", "field_category", "field_co2emissions", "field_growth", "field_commercialdate", "field_categoryv2", "field_projectname", "field_projectlogo", "field_multi_images", "field_youtube", "field_pcategory", "field_clients"), "html", null, true);
        // line 171
        echo "                                                
                        </div>                        
                    </div>                                                           
                    <h1";
        // line 174
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "title animated fadeIn"], "method", false, false, true, 174), 174, $this->source), "html", null, true);
        echo ">
                        <a href=\"";
        // line 175
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 175, $this->source), "html", null, true);
        echo "\" rel=\"bookmark\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 175), 175, $this->source), "html", null, true);
        echo "</a>
                    </h1>
                </div>               
                ";
        // line 178
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 178), 178, $this->source), "html", null, true);
        echo "             
                ";
        // line 179
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_projectlogo", [], "any", false, false, true, 179), 179, $this->source), "html", null, true);
        echo "
                ";
        // line 180
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_the_challenge_of_project", [], "any", false, false, true, 180), 180, $this->source), "html", null, true);
        echo "
                ";
        // line 181
        if ( !twig_test_empty(views_get_view_result("suggestedgreenprojects", "block_1"))) {
            // line 182
            echo "                    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("suggestedgreenprojects", "block_1"), "html", null, true);
            echo "                    
                ";
        }
        // line 183
        echo "                
            </div>
        </div>
        <div class=\"col-lg-4\">
            <div class=\"big-bg-porduct-details\">
                <div class=\"project-info\">
                    <div class=\"info-head\">
                        <h5 class=\"title\">";
        // line 190
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Project Information"));
        echo "</h5>
                    </div>
                    <div class=\"info-body\">
                        <!-- single info -->
                        <div class=\"single-info\">
                            <div class=\"info-ico\">
                                <i class=\"fas fa-project-diagram\"></i>
                            </div>
                            <div class=\"info-details\">
                                ";
        // line 199
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_projectname", [], "any", false, false, true, 199), 199, $this->source), "html", null, true);
        echo "                                 
                            </div>
                        </div>
                        <!-- end single info -->
                          <!-- single info -->
                        <div class=\"single-info\">
                            <div class=\"info-ico\">
                                <i class=\"fas fa-chart-bar\"></i>
                            </div>
                            <div class=\"info-details\">
                                ";
        // line 209
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_clients", [], "any", false, false, true, 209), 209, $this->source), "html", null, true);
        echo "                                 
                            </div>
                        </div>
                        <!-- end single info -->
                        <!-- single info -->
                        <div class=\"single-info\">
                            <div class=\"info-ico\">
                                <i class=\"fas fa-chart-pie\"></i>
                            </div>
                            <div class=\"info-details\">
                                ";
        // line 219
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_address", [], "any", false, false, true, 219), 219, $this->source), "html", null, true);
        echo "                       
                            </div>
                        </div>
                        <!-- end single info -->

                        <!-- single info -->
                        <div class=\"single-info\">
                            <div class=\"info-ico\">
                                <i class=\"fas fa-industry\"></i>
                            </div>
                            <div class=\"info-details\">
                                ";
        // line 230
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_category", [], "any", false, false, true, 230), 230, $this->source), "html", null, true);
        echo "                                 
                            </div>
                        </div>
                        <!-- end single info -->

                        <!-- single info -->
                        <div class=\"single-info\">
                            <div class=\"info-ico\">
                                <i class=\"fas fa-percent\"></i>
                            </div>
                            <div class=\"info-details\">
                                ";
        // line 241
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_co2emissions", [], "any", false, false, true, 241), 241, $this->source), "html", null, true);
        echo "                                 
                            </div>
                        </div>
                        <!-- end single info -->
                       
                        <!-- single info -->
                        <div class=\"single-info\">
                            <div class=\"info-ico\">
                                <i class=\"fas fa-map-marker-alt\"></i>
                            </div>
                            <div class=\"info-details\">
                                ";
        // line 252
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_categoryv2", [], "any", false, false, true, 252), 252, $this->source), "html", null, true);
        echo "                              
                            </div>
                        </div> 
                        <!-- end single info -->

                         <!-- single info -->
                        <div class=\"single-info last\">
                            <div class=\"info-ico\">
                                <i class=\"fas fa-calendar-alt\"></i>
                            </div>
                           <div class=\"info-details\">
                                ";
        // line 263
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_commercialdate", [], "any", false, false, true, 263), 263, $this->source), "html", null, true);
        echo "                              
                            </div>
                        </div>
                        <!-- end single info -->
                    </div>
                </div>
            </div>
        </div>
    </div>  
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/content/node--project-details--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 263,  338 => 252,  324 => 241,  310 => 230,  296 => 219,  283 => 209,  270 => 199,  258 => 190,  249 => 183,  243 => 182,  241 => 181,  237 => 180,  233 => 179,  229 => 178,  221 => 175,  217 => 174,  212 => 171,  210 => 165,  203 => 161,  196 => 157,  183 => 146,  174 => 139,  158 => 132,  154 => 131,  150 => 129,  146 => 128,  137 => 123,  134 => 122,  126 => 116,  113 => 111,  108 => 108,  104 => 107,  96 => 103,  93 => 102,  87 => 99,  84 => 98,  82 => 97,  78 => 95,  71 => 91,  67 => 89,  65 => 88,  59 => 85,  56 => 84,  54 => 81,  53 => 80,  52 => 79,  51 => 78,  50 => 77,  49 => 76,  48 => 75,  47 => 73,  44 => 71,  42 => 70,  39 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * solar's theme implementation to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: (optional) The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: (optional) Themed creation date field.
 * - author_name: (optional) Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 */
#}

{% set layout = layout ? 'layout--' ~ layout|clean_class %}

{%
  set classes = [
    'node',
    'node--type-' ~ node.bundle|clean_class,
    layout ? 'grid-full',
    layout ? 'ie11-autorow',
    node.isPromoted() ? 'node--promoted',
    node.isSticky() ? 'node--sticky',
    not node.isPublished() ? 'node--unpublished',
    view_mode ? 'node--view-mode-' ~ view_mode|clean_class,
  ]
%}
  
<article{{ attributes.addClass(classes) }}>
    <div class=\"row\">
        <div class=\"col-lg-12\">
            {% if content.field_pcategory|render|striptags|trim   == 'normal' %}
            <div class=\"project-details-area-main\">
                <div class=\"thumbnail\">
                    {{ content.field_image }}                   
                </div>
            </div>
            {% endif %}
           
            
            {% if content.field_pcategory|render|striptags|trim  == 'video' %}
                <div class=\"vedio-area-project-details\">
                    <iframe width=\"750\" height=\"720\" src=\"{{ content.field_youtube|render|striptags|trim }}\" title=\"Solar Project\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"\"></iframe>
                </div>
            {% endif %}
            {% if content.field_pcategory|render|striptags|trim  == 'carousel' %}
                {% set count = node.field_multi_images.value|length - 1%}                   
                <div class=\"project-details-carousel-big\">
                    <div class=\"swiper project-details-carousel\">
                        <div class=\"swiper-wrapper\">
                            {% for i in 0..count %}
                                <div class=\"swiper-slide\">
                                    <div class=\"project-details-area-main\">
                                        <div class=\"thumbnail\">                                                                        
                                            <img src=\"{{ file_url(node.field_multi_images[i].entity.fileuri|image_style('project1320x720')) }}\" alt=\"{{ node.field_multi_images[i].alt }}\">
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                        <div class=\"swiper-button-next\"></div>
                        <div class=\"swiper-button-prev\"></div>
                    </div>
                </div>
            {% endif %}
            {% if content.field_pcategory|render|striptags|trim  == 'gallery' %}
                {% set count = node.field_multi_images.getvalue|length - 1 %}  
                <section id=\"gallery\">
                    <div class=\"container\">
                        <div id=\"image-gallery\">
                            <div class=\"row\">
                                {% for i in 0..count %}
                                    <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12 image\">
                                        <div class=\"img-wrapper\">
                                            <a href=\"{{ file_url(node.field_multi_images[i].entity.fileuri|image_style('project1320x720')) }}\">                                               
                                                <img src=\"{{ file_url(node.field_multi_images[i].entity.fileuri|image_style('wide')) }}\" class=\"img-responsive\"  alt=\"{{ node.field_multi_images[i].alt }}\">
                                            </a>
                                            <div class=\"img-overlay\">
                                                <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}                              
                             
                            </div><!-- End row -->
                        </div><!-- End image gallery -->
                    </div><!-- End container -->
                </section>
            {% endif %}
        </div>
    </div> 

    <div class=\"row\">
        <div class=\"col-lg-8 pr--30\">
            <div class=\"portfolio-disc-content\">
                <div class=\"title-area\">                    
                     <div class=\"pr-align-items-center mb--30\">                        
                        <!-- tags details -->                     
                        <div class=\"details-tag\">
                            <i class=\"fas fa-map-marker-alt\"></i>
                            {{ content.field_growth }}                  
                        </div>
                        <div class=\"single\">
                            <i class=\"fa-light fa-phone-office\"></i>
                            {{ content.field_time_to_read }}
                        </div>
                        <!-- tags details End -->     
                        <div class=\"details-share\">
                            {{ content|without('comment','body', 'field_tags', 
                            'field_time_to_read', 'field_the_challenge_of_project', 'field_image', 
                            'field_address', 'field_category', 'field_co2emissions', 
                            'field_growth', 'field_commercialdate', 'field_categoryv2', 
                            'field_projectname', 'field_projectlogo',
                            'field_multi_images', 'field_youtube', 'field_pcategory',
                            'field_clients') }}                                                
                        </div>                        
                    </div>                                                           
                    <h1{{ title_attributes.addClass('title animated fadeIn') }}>
                        <a href=\"{{ url }}\" rel=\"bookmark\">{{ node.label }}</a>
                    </h1>
                </div>               
                {{ content.body }}             
                {{ content.field_projectlogo }}
                {{ content.field_the_challenge_of_project }}
                {% if drupal_view_result('suggestedgreenprojects', 'block_1') is not empty %}
                    {{ drupal_view('suggestedgreenprojects', 'block_1') }}                    
                {% endif %}                
            </div>
        </div>
        <div class=\"col-lg-4\">
            <div class=\"big-bg-porduct-details\">
                <div class=\"project-info\">
                    <div class=\"info-head\">
                        <h5 class=\"title\">{{ 'Project Information'|t }}</h5>
                    </div>
                    <div class=\"info-body\">
                        <!-- single info -->
                        <div class=\"single-info\">
                            <div class=\"info-ico\">
                                <i class=\"fas fa-project-diagram\"></i>
                            </div>
                            <div class=\"info-details\">
                                {{ content.field_projectname }}                                 
                            </div>
                        </div>
                        <!-- end single info -->
                          <!-- single info -->
                        <div class=\"single-info\">
                            <div class=\"info-ico\">
                                <i class=\"fas fa-chart-bar\"></i>
                            </div>
                            <div class=\"info-details\">
                                {{ content.field_clients }}                                 
                            </div>
                        </div>
                        <!-- end single info -->
                        <!-- single info -->
                        <div class=\"single-info\">
                            <div class=\"info-ico\">
                                <i class=\"fas fa-chart-pie\"></i>
                            </div>
                            <div class=\"info-details\">
                                {{ content.field_address }}                       
                            </div>
                        </div>
                        <!-- end single info -->

                        <!-- single info -->
                        <div class=\"single-info\">
                            <div class=\"info-ico\">
                                <i class=\"fas fa-industry\"></i>
                            </div>
                            <div class=\"info-details\">
                                {{ content.field_category }}                                 
                            </div>
                        </div>
                        <!-- end single info -->

                        <!-- single info -->
                        <div class=\"single-info\">
                            <div class=\"info-ico\">
                                <i class=\"fas fa-percent\"></i>
                            </div>
                            <div class=\"info-details\">
                                {{ content.field_co2emissions }}                                 
                            </div>
                        </div>
                        <!-- end single info -->
                       
                        <!-- single info -->
                        <div class=\"single-info\">
                            <div class=\"info-ico\">
                                <i class=\"fas fa-map-marker-alt\"></i>
                            </div>
                            <div class=\"info-details\">
                                {{ content.field_categoryv2 }}                              
                            </div>
                        </div> 
                        <!-- end single info -->

                         <!-- single info -->
                        <div class=\"single-info last\">
                            <div class=\"info-ico\">
                                <i class=\"fas fa-calendar-alt\"></i>
                            </div>
                           <div class=\"info-details\">
                                {{ content.field_commercialdate }}                              
                            </div>
                        </div>
                        <!-- end single info -->
                    </div>
                </div>
            </div>
        </div>
    </div>  
</article>
", "themes/custom/solar/templates/content/node--project-details--full.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/content/node--project-details--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 70, "if" => 88, "for" => 107);
        static $filters = array("clean_class" => 70, "escape" => 85, "trim" => 88, "striptags" => 88, "render" => 88, "length" => 103, "image_style" => 111, "without" => 165, "t" => 190);
        static $functions = array("range" => 107, "file_url" => 111, "drupal_view_result" => 181, "drupal_view" => 182);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'escape', 'trim', 'striptags', 'render', 'length', 'image_style', 'without', 't'],
                ['range', 'file_url', 'drupal_view_result', 'drupal_view']
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
