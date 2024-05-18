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

/* themes/custom/solar/templates/layout/page--landingpage--withoutsidebar.html.twig */
class __TwigTemplate_0a1491f6b281f82ea5a4c2249465e942 extends Template
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
        // line 48
        echo "

<div class=\"header-header-two\">
\t<!-- header two -->
\t";
        // line 52
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topbar", [], "any", false, false, true, 52)) {
            // line 53
            echo "\t\t<div class=\"header-two-solari header-top\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t";
            // line 57
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topbar", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 63
        echo "\t<!-- header two end -->
\t<!-- header man start -->
\t<div class=\"header-main-h2  header--sticky\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"main-haeder-wrapper-h2\">
\t\t\t\t\t\t";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t<div class=\"actions-area\">
                            ";
        // line 72
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "language", [], "any", false, false, true, 72)) {
            // line 73
            echo "\t\t\t\t\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "language", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
        }
        // line 75
        echo "\t\t\t\t\t\t\t<div class=\"search-btn\" id=\"search\">
\t\t\t\t\t\t\t\t\t<svg width=\"17\" height=\"16\" viewBox=\"0 0 17 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M15.75 14.7188C16.0625 15.0312 16.0625 15.5 15.75 15.7812C15.625 15.9375 15.4375 16 15.25 16C15.0312 16 14.8438 15.9375 14.6875 15.7812L10.5 11.5938C9.375 12.5 7.96875 13 6.46875 13C2.90625 13 0 10.0938 0 6.5C0 2.9375 2.875 0 6.46875 0C10.0312 0 12.9688 2.9375 12.9688 6.5C12.9688 8.03125 12.4688 9.4375 11.5625 10.5312L15.75 14.7188ZM1.5 6.5C1.5 9.28125 3.71875 11.5 6.5 11.5C9.25 11.5 11.5 9.28125 11.5 6.5C11.5 3.75 9.25 1.5 6.5 1.5C3.71875 1.5 1.5 3.75 1.5 6.5Z\" fill=\"#4AAB3D\"></path>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"menu-btn\" id=\"menu-btn\">
\t\t\t\t\t\t\t\t\t<svg width=\"20\" height=\"16\" viewBox=\"0 0 20 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t<rect y=\"14\" width=\"20\" height=\"2\" fill=\"#4AAB3D\"></rect>
\t\t\t\t\t\t\t\t\t\t\t<rect y=\"7\" width=\"20\" height=\"2\" fill=\"#4AAB3D\"></rect>
\t\t\t\t\t\t\t\t\t\t\t<rect width=\"20\" height=\"2\" fill=\"#4AAB3D\"></rect>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 87
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 87)) {
            // line 88
            echo "\t\t\t\t\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
        }
        // line 90
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- header man end -->
</div>
<!-- header style two End -->

";
        // line 100
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 100) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 100))) {
            // line 101
            echo "    <div class='page-highlighted'>
        <div class=\"container\">
            <div class=\"row g-24\">
                ";
            // line 104
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
            echo "
                ";
            // line 105
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page", [], "any", false, false, true, 105), "secondary_menu", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo "
            </div>
        </div>
    </div>
";
        }
        // line 110
        echo "

<div id=\"main\">
    ";
        // line 113
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 113)) {
            // line 114
            echo "    <div class=\"main-above\">
        ";
            // line 115
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
            echo "
    </div> 
    ";
        }
        // line 117
        echo "  
    ";
        // line 118
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
        echo "    
</div>

<!-- banner two swiper start -->
";
        // line 122
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 122)) {
            // line 123
            echo "    <div class=\"banner-two-swiper-start\">
        ";
            // line 124
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
            echo "
    </div> 
";
        }
        // line 126
        echo "    
<!-- banner two swiper end -->

<!-- rts service area start -->
";
        // line 130
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_below", [], "any", false, false, true, 130)) {
            // line 131
            echo "    <div class=\"rts-secvice-area-solaric-banner-bottom start rts-section-gapBottom\">
        ";
            // line 132
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_below", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
            echo "
    </div> 
";
        }
        // line 134
        echo "   
<!-- rts service area end -->

<!-- rts about area starat -->
";
        // line 138
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "about_us", [], "any", false, false, true, 138)) {
            // line 139
            echo "    <div class=\"rts-about-area rts-section-gapBottom position-relative\">
        ";
            // line 140
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "about_us", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
            echo "
    </div> 
";
        }
        // line 143
        echo "<!-- rts about area end -->

<!-- service heign area start -->
";
        // line 146
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "service_area", [], "any", false, false, true, 146)) {
            // line 147
            echo "    <div class=\"rts-service-area-height-solari rts-section-gap position-relative\">
        ";
            // line 148
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "service_area", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
            echo "
    </div> 
";
        }
        // line 151
        echo "<!-- service heign area end -->

<!-- our working proces area start -->
";
        // line 154
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "working_process", [], "any", false, false, true, 154)) {
            // line 155
            echo "    <div class=\"our-working-process-start rts-section-gap\">
        ";
            // line 156
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "working_process", [], "any", false, false, true, 156), 156, $this->source), "html", null, true);
            echo "
    </div>
";
        }
        // line 159
        echo "<!-- our working proces area end -->

";
        // line 161
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cta", [], "any", false, false, true, 161)) {
            // line 162
            echo "    <div class=\"rts-cta-area rts-section-gapBottom\">
        <div class=\"container\">
            ";
            // line 164
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cta", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
            echo "
        </div>
    </div>
";
        }
        // line 168
        echo "<!-- rts cta area end -->


";
        // line 171
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "faq", [], "any", false, false, true, 171)) {
            // line 172
            echo "    <div class=\"faq-section-start-solar rts-section-gapBottom\">
        ";
            // line 173
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "faq", [], "any", false, false, true, 173), 173, $this->source), "html", null, true);
            echo "
    </div>
";
        }
        // line 176
        echo "
<!-- rts case studies area start -->
";
        // line 178
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "our_latest_case_studies", [], "any", false, false, true, 178)) {
            // line 179
            echo "    <div class=\"rts-case-studyes rts-section-gapBottom bg-white\">
        ";
            // line 180
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "our_latest_case_studies", [], "any", false, false, true, 180), 180, $this->source), "html", null, true);
            echo "
    </div>
";
        }
        // line 183
        echo "<!-- rts-case studyes ends -->

<!-- rts- clients review area start -->
";
        // line 186
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "customer_feedbacks", [], "any", false, false, true, 186)) {
            // line 187
            echo "    <div class=\"rts-client-review-area-h2 rts-section-gapBottom\">
        ";
            // line 188
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "customer_feedbacks", [], "any", false, false, true, 188), 188, $this->source), "html", null, true);
            echo "
    </div>
";
        }
        // line 191
        echo "<!-- rts- clients review area end -->


    <!-- rts blog area start -->
";
        // line 195
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "our_news", [], "any", false, false, true, 195)) {
            // line 196
            echo "<div class=\"rts-solari-blog-area-start rts-section-gap reveal\" id=\"blog\">
    ";
            // line 197
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "our_news", [], "any", false, false, true, 197), 197, $this->source), "html", null, true);
            echo "
</div>
";
        }
        // line 200
        echo "

<!-- rts brand area start -->
";
        // line 203
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_client", [], "any", false, false, true, 203)) {
            echo "   
<div class=\"rts-brand-area rts-section-gap\">
    ";
            // line 205
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_client", [], "any", false, false, true, 205), 205, $this->source), "html", null, true);
            echo " 
</div>
";
        }
        // line 208
        echo "<!-- rts brand area end -->




<!-- header style two -->
<div id=\"side-bar\" class=\"side-bar header-two\">
    <button class=\"close-icon-menu\"><i class=\"far fa-times\"></i></button>
    <!-- inner menu area desktop start -->
    ";
        // line 217
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("node", 222, "hero"), "html", null, true);
        echo "

    <!-- mobile menu area start -->    
    <div class=\"mobile-menu-main\">
        ";
        // line 221
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "mobile_menu", [], "any", false, false, true, 221)) {
            echo "   
            ";
            // line 222
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "mobile_menu", [], "any", false, false, true, 222), 222, $this->source), "html", null, true);
            echo " 
        ";
        }
        // line 224
        echo "
        <div class=\"rts-social-style-one pl--20 mt--100\">
            <ul>
                <li>
                    <a href=\"";
        // line 228
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["solar_social_link_facebook"] ?? null), 228, $this->source), "html", null, true);
        echo "\" target='_blank'>
                        <i class=\"fa-brands fa-facebook-f\"></i>
                    </a>
                </li>
              
                <li>
                    <a href=\"";
        // line 234
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["solar_social_link_youtube"] ?? null), 234, $this->source), "html", null, true);
        echo "\" target='_blank'>
                        <i class=\"fa-brands fa-youtube\"></i>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 239
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["solar_social_link_linkedin"] ?? null), 239, $this->source), "html", null, true);
        echo "\" target='_blank'>
                        <i class=\"fa-brands fa-linkedin-in\"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- mobile menu area end -->
</div>
<!-- header style two End -->


<!-- Footer style two -->
<!-- rts footer two area start -->
    <div class=\"rts-footer-one  footer-bg-two\">
        <div class=\"shape-image-f-2\">
            <img src=\"";
        // line 255
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["solar_path"] ?? null), 255, $this->source), "html", null, true);
        echo "/images/07_1.png\" alt=\"CME Solar\" />
        </div>
        <div class=\"container\">
            <div class=\"row pt--90   pb_sm--40\">
                <div class=\"col-lg-12\">
                    <div class=\"single-footer-one-wrapper two\">
                        <div class=\"single-footer-component first\">
                            <a href=\"/\" class=\"logo-area-footer\">
                                <img src=\"";
        // line 263
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["solar_path"] ?? null), 263, $this->source), "html", null, true);
        echo "/images/logo-02.png\" alt=\"CME Solar\" />
                            </a>
                            <div class=\"body mt--20\">
                            \t";
        // line 266
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 266), 266, $this->source), "html", null, true);
        echo "                           
                                <div class=\"rts-social-style-one\">
                                    <ul>
                                        <li>
                                            <a href=\"";
        // line 270
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["solar_social_link_facebook"] ?? null), 270, $this->source), "html", null, true);
        echo "\" target='_blank'>
                                                <i class=\"fa-brands fa-facebook-f\"></i>
                                            </a>
                                        </li>
                                      
                                        <li>
                                            <a href=\"";
        // line 276
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["solar_social_link_youtube"] ?? null), 276, $this->source), "html", null, true);
        echo "\" target='_blank'>
                                                <i class=\"fa-brands fa-youtube\"></i>
                                            </a>
                                        </li>
                                    
                                        <li>
                                            <a href=\"";
        // line 282
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["solar_social_link_linkedin"] ?? null), 282, $this->source), "html", null, true);
        echo "\" target='_blank'>
                                                <i class=\"fa-brands fa-linkedin-in\"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"single-footer-component\">
                            ";
        // line 291
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 291), 291, $this->source), "html", null, true);
        echo "
                        </div>
                        <div class=\"single-footer-component\">
                            ";
        // line 294
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 294), 294, $this->source), "html", null, true);
        echo "
                        </div>
                        <div class=\"single-footer-component last\">
                            ";
        // line 297
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_four", [], "any", false, false, true, 297), 297, $this->source), "html", null, true);
        echo "                            
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row pb--20 pt--20 border-top-copyright\">
                <div class=\"col-lg-12\">       
                    ";
        // line 304
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_copyright", [], "any", false, false, true, 304)) {
            echo "        
                        ";
            // line 305
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_copyright", [], "any", false, false, true, 305), 305, $this->source), "html", null, true);
            echo "
                   \t";
        }
        // line 306
        echo "    
                </div>
            </div>
        </div>
    </div>

<!-- rts footer area one end -->
<!-- Footer style two End -->



<div class=\"progress-wrap\">
    <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
        <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" style=\"transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;\"></path>
    </svg>
</div>


<!-- pre loader start -->
<div id=\"elevate-load\">
    <div class=\"loader-wrapper\">
        <div class=\"lds-ellipsis\">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<!-- pre loader end -->


<div class=\"search-input-area\">
    <div class=\"container\">
        <form action=\"";
        // line 340
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["searchprefix"] ?? null), 340, $this->source), "html", null, true);
        echo "/solar-search\" method=\"get\" class=\"search-form-wrapper\">
            <div class=\"search-input-inner\">
            <div class=\"input-div\">            
                <input id=\"searchInput1\" class=\"search-input\" type=\"text\" name=\"keyword\" placeholder=\"";
        // line 343
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Search by keyword or"));
        echo " #\">
                <button><i class=\"far fa-search\"></i></button>            
            </div>
            </div>
        </form>
    </div>
    <div id=\"close\" class=\"search-close-icon\"><i class=\"far fa-times\"></i></div>
</div>

<div id=\"anywhere-home\" class=\"ah\"></div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/layout/page--landingpage--withoutsidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  533 => 343,  527 => 340,  491 => 306,  486 => 305,  482 => 304,  472 => 297,  466 => 294,  460 => 291,  448 => 282,  439 => 276,  430 => 270,  423 => 266,  417 => 263,  406 => 255,  387 => 239,  379 => 234,  370 => 228,  364 => 224,  359 => 222,  355 => 221,  348 => 217,  337 => 208,  331 => 205,  326 => 203,  321 => 200,  315 => 197,  312 => 196,  310 => 195,  304 => 191,  298 => 188,  295 => 187,  293 => 186,  288 => 183,  282 => 180,  279 => 179,  277 => 178,  273 => 176,  267 => 173,  264 => 172,  262 => 171,  257 => 168,  250 => 164,  246 => 162,  244 => 161,  240 => 159,  234 => 156,  231 => 155,  229 => 154,  224 => 151,  218 => 148,  215 => 147,  213 => 146,  208 => 143,  202 => 140,  199 => 139,  197 => 138,  191 => 134,  185 => 132,  182 => 131,  180 => 130,  174 => 126,  168 => 124,  165 => 123,  163 => 122,  156 => 118,  153 => 117,  147 => 115,  144 => 114,  142 => 113,  137 => 110,  129 => 105,  125 => 104,  120 => 101,  118 => 100,  106 => 90,  100 => 88,  98 => 87,  84 => 75,  78 => 73,  76 => 72,  71 => 70,  62 => 63,  53 => 57,  47 => 53,  45 => 52,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/solar/templates/layout/page--landingpage--withoutsidebar.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/layout/page--landingpage--withoutsidebar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 52);
        static $filters = array("escape" => 57, "t" => 343);
        static $functions = array("drupal_entity" => 217);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
