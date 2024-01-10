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

/* themes/custom/solar/templates/layout/page.html.twig */
class __TwigTemplate_ad2e441e82e75cf4bdfc470e0e1590f1 extends Template
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

";
        // line 112
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 112)) {
            // line 113
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
            echo " 
";
        }
        // line 114
        echo "  

";
        // line 116
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 116) &&  !($context["is_front"] ?? null))) {
            echo "\t
    <div class=\"rts-service-details-area rts-section-gap\">
        <div class=\"container\">
            <div class=\"row g-40\">
                <div class=\"col-lg-8\">
";
        } elseif ( !        // line 121
($context["is_front"] ?? null)) {
            // line 122
            echo "    <div class=\"page-without-sidebar section-spacing inner-page\">
        <div class='container'>
";
        } else {
            // line 125
            echo "    <div class=\"page-without-sidebar section-spacing\">
";
        }
        // line 126
        echo "       
        ";
        // line 127
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
        echo "         
";
        // line 128
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 128) &&  !($context["is_front"] ?? null))) {
            echo "\t
                </div>
                <div class=\"col-xl-4 col-md-12 col-sm-12 col-12\">
                    ";
            // line 131
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
            echo "
                </div>
            </div>
        </div>
    </div>
";
        } elseif ( !        // line 136
($context["is_front"] ?? null)) {
            // line 137
            echo "        </div>
    </div>
";
        } else {
            // line 140
            echo "    </div>
";
        }
        // line 142
        echo "


<!-- banner two swiper start -->
";
        // line 146
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 146)) {
            // line 147
            echo "    <div class=\"banner-two-swiper-start\">
        ";
            // line 148
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
            echo "
    </div> 
";
        }
        // line 150
        echo "    
<!-- banner two swiper end -->

<!-- rts service area start -->
";
        // line 154
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_below", [], "any", false, false, true, 154)) {
            // line 155
            echo "    <div class=\"rts-secvice-area-solaric-banner-bottom start rts-section-gapBottom\">
        ";
            // line 156
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_below", [], "any", false, false, true, 156), 156, $this->source), "html", null, true);
            echo "
    </div> 
";
        }
        // line 158
        echo "   
<!-- rts service area end -->

<!-- rts about area starat -->
";
        // line 162
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "about_us", [], "any", false, false, true, 162)) {
            // line 163
            echo "    <div class=\"rts-about-area rts-section-gapBottom position-relative\">
        ";
            // line 164
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "about_us", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
            echo "
    </div> 
";
        }
        // line 167
        echo "<!-- rts about area end -->

<!-- service heign area start -->
";
        // line 170
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "service_area", [], "any", false, false, true, 170)) {
            // line 171
            echo "    <div class=\"rts-service-area-height-solari rts-section-gap position-relative\">
        ";
            // line 172
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "service_area", [], "any", false, false, true, 172), 172, $this->source), "html", null, true);
            echo "
    </div> 
";
        }
        // line 175
        echo "<!-- service heign area end -->

<!-- our working proces area start -->
";
        // line 178
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "working_process", [], "any", false, false, true, 178)) {
            // line 179
            echo "    <div class=\"our-working-process-start rts-section-gap\">
        ";
            // line 180
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "working_process", [], "any", false, false, true, 180), 180, $this->source), "html", null, true);
            echo "
    </div>
";
        }
        // line 183
        echo "<!-- our working proces area end -->

";
        // line 185
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cta", [], "any", false, false, true, 185)) {
            // line 186
            echo "    <div class=\"rts-cta-area rts-section-gapBottom\">
        <div class=\"container\">
            ";
            // line 188
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cta", [], "any", false, false, true, 188), 188, $this->source), "html", null, true);
            echo "
        </div>
    </div>
";
        }
        // line 192
        echo "<!-- rts cta area end -->


";
        // line 195
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "faq", [], "any", false, false, true, 195)) {
            // line 196
            echo "    <div class=\"faq-section-start-solar rts-section-gapBottom\">
        ";
            // line 197
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "faq", [], "any", false, false, true, 197), 197, $this->source), "html", null, true);
            echo "
    </div>
";
        }
        // line 200
        echo "
<!-- rts case studies area start -->
";
        // line 202
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "our_latest_case_studies", [], "any", false, false, true, 202)) {
            // line 203
            echo "    <div class=\"rts-case-studyes rts-section-gapBottom bg-white\">
        ";
            // line 204
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "our_latest_case_studies", [], "any", false, false, true, 204), 204, $this->source), "html", null, true);
            echo "
    </div>
";
        }
        // line 207
        echo "<!-- rts-case studyes ends -->

<!-- rts- clients review area start -->
";
        // line 210
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "customer_feedbacks", [], "any", false, false, true, 210)) {
            // line 211
            echo "    <div class=\"rts-client-review-area-h2 rts-section-gapBottom\">
        ";
            // line 212
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "customer_feedbacks", [], "any", false, false, true, 212), 212, $this->source), "html", null, true);
            echo "
    </div>
";
        }
        // line 215
        echo "<!-- rts- clients review area end -->


    <!-- rts blog area start -->
";
        // line 219
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "our_news", [], "any", false, false, true, 219)) {
            // line 220
            echo "<div class=\"rts-solari-blog-area-start rts-section-gap reveal\" id=\"blog\">
    ";
            // line 221
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "our_news", [], "any", false, false, true, 221), 221, $this->source), "html", null, true);
            echo "
</div>
";
        }
        // line 224
        echo "

<!-- rts brand area start -->
";
        // line 227
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_client", [], "any", false, false, true, 227)) {
            echo "   
<div class=\"rts-brand-area rts-section-gap\">
    ";
            // line 229
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_client", [], "any", false, false, true, 229), 229, $this->source), "html", null, true);
            echo " 
</div>
";
        }
        // line 232
        echo "<!-- rts brand area end -->




<!-- header style two -->
<div id=\"side-bar\" class=\"side-bar header-two\">
    <button class=\"close-icon-menu\"><i class=\"far fa-times\"></i></button>
    <!-- inner menu area desktop start -->
    ";
        // line 241
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("node", 222, "hero"), "html", null, true);
        echo "

    <!-- mobile menu area start -->    
    <div class=\"mobile-menu-main\">
        ";
        // line 245
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "mobile_menu", [], "any", false, false, true, 245)) {
            echo "   
            ";
            // line 246
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "mobile_menu", [], "any", false, false, true, 246), 246, $this->source), "html", null, true);
            echo " 
        ";
        }
        // line 248
        echo "
        <div class=\"rts-social-style-one pl--20 mt--100\">
            <ul>
                <li>
                    <a href=\"";
        // line 252
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["solar_social_link_facebook"] ?? null), 252, $this->source), "html", null, true);
        echo "\" target='_blank'>
                        <i class=\"fa-brands fa-facebook-f\"></i>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 257
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["solar_social_link_twitter"] ?? null), 257, $this->source), "html", null, true);
        echo "\" target='_blank'>
                        <i class=\"fa-brands fa-x-twitter\"></i>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 262
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["solar_social_link_youtube"] ?? null), 262, $this->source), "html", null, true);
        echo "\" target='_blank'>
                        <i class=\"fa-brands fa-youtube\"></i>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 267
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["solar_social_link_linkedin"] ?? null), 267, $this->source), "html", null, true);
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
        // line 283
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["solar_path"] ?? null), 283, $this->source), "html", null, true);
        echo "/images/07_1.png\" alt=\"shape-footer\">
        </div>
        <div class=\"container\">
            <div class=\"row pt--90  pb--55 pb_sm--40\">
                <div class=\"col-lg-12\">
                    <div class=\"single-footer-one-wrapper two\">
                        <div class=\"single-footer-component first\">
                            <a href=\"/\" class=\"logo-area-footer\">
                                <img src=\"";
        // line 291
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["solar_path"] ?? null), 291, $this->source), "html", null, true);
        echo "/images/logo-02.png\" alt=\"logo\">
                            </a>
                            <div class=\"body mt--45\">
                            \t";
        // line 294
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 294), 294, $this->source), "html", null, true);
        echo "                           
                                <div class=\"rts-social-style-one\">
                                    <ul>
                                        <li>
                                            <a href=\"";
        // line 298
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["solar_social_link_facebook"] ?? null), 298, $this->source), "html", null, true);
        echo "\" target='_blank'>
                                                <i class=\"fa-brands fa-facebook-f\"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 303
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["solar_social_link_twitter"] ?? null), 303, $this->source), "html", null, true);
        echo "\" target='_blank'>
                                                <i class=\"fa-brands fa-x-twitter\"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 308
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["solar_social_link_youtube"] ?? null), 308, $this->source), "html", null, true);
        echo "\" target='_blank'>
                                                <i class=\"fa-brands fa-youtube\"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 313
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["solar_social_link_instagram"] ?? null), 313, $this->source), "html", null, true);
        echo "\" target='_blank'>
                                                <i class=\"fa-brands fa-instagram\"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 318
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["solar_social_link_linkedin"] ?? null), 318, $this->source), "html", null, true);
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
        // line 327
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 327), 327, $this->source), "html", null, true);
        echo "
                        </div>
                        <div class=\"single-footer-component\">
                            ";
        // line 330
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 330), 330, $this->source), "html", null, true);
        echo "
                        </div>
                        <div class=\"single-footer-component last\">
                            ";
        // line 333
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_four", [], "any", false, false, true, 333), 333, $this->source), "html", null, true);
        echo "                            
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row pb--20 pt--20 border-top-copyright\">
                <div class=\"col-lg-12\">       
                    ";
        // line 340
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_copyright", [], "any", false, false, true, 340)) {
            echo "        
                        ";
            // line 341
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_copyright", [], "any", false, false, true, 341), 341, $this->source), "html", null, true);
            echo "
                   \t";
        }
        // line 342
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
        <div class=\"search-input-inner\">
            <div class=\"input-div\">
                <input id=\"searchInput1\" class=\"search-input\" type=\"text\" placeholder=\"";
        // line 378
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Search by keyword or"));
        echo " #\">
                <button><i class=\"far fa-search\"></i></button>
            </div>
        </div>
    </div>
    <div id=\"close\" class=\"search-close-icon\"><i class=\"far fa-times\"></i></div>
</div>

<div id=\"anywhere-home\" class=\"ah\"></div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  597 => 378,  559 => 342,  554 => 341,  550 => 340,  540 => 333,  534 => 330,  528 => 327,  516 => 318,  508 => 313,  500 => 308,  492 => 303,  484 => 298,  477 => 294,  471 => 291,  460 => 283,  441 => 267,  433 => 262,  425 => 257,  417 => 252,  411 => 248,  406 => 246,  402 => 245,  395 => 241,  384 => 232,  378 => 229,  373 => 227,  368 => 224,  362 => 221,  359 => 220,  357 => 219,  351 => 215,  345 => 212,  342 => 211,  340 => 210,  335 => 207,  329 => 204,  326 => 203,  324 => 202,  320 => 200,  314 => 197,  311 => 196,  309 => 195,  304 => 192,  297 => 188,  293 => 186,  291 => 185,  287 => 183,  281 => 180,  278 => 179,  276 => 178,  271 => 175,  265 => 172,  262 => 171,  260 => 170,  255 => 167,  249 => 164,  246 => 163,  244 => 162,  238 => 158,  232 => 156,  229 => 155,  227 => 154,  221 => 150,  215 => 148,  212 => 147,  210 => 146,  204 => 142,  200 => 140,  195 => 137,  193 => 136,  185 => 131,  179 => 128,  175 => 127,  172 => 126,  168 => 125,  163 => 122,  161 => 121,  153 => 116,  149 => 114,  143 => 113,  141 => 112,  137 => 110,  129 => 105,  125 => 104,  120 => 101,  118 => 100,  106 => 90,  100 => 88,  98 => 87,  84 => 75,  78 => 73,  76 => 72,  71 => 70,  62 => 63,  53 => 57,  47 => 53,  45 => 52,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/solar/templates/layout/page.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 52);
        static $filters = array("escape" => 57, "t" => 378);
        static $functions = array("drupal_entity" => 241);

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
