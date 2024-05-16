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

/* themes/custom/cme/templates/layout/page.html.twig */
class __TwigTemplate_3a82b79c8070437378bf33e8ed8f8d73 extends Template
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

<video class=\"bg-video\" playsinline=\"playsinline\" autoplay=\"autoplay\" muted=\"muted\" loop=\"loop\"><source src=\"/themes/custom/cme/assets/mp4/bg.mp4\" type=\"video/mp4\" /></video>
<!-- Masthead-->
<div class=\"masthead\">
\t<div class=\"masthead-content text-white\">
\t\t<div class=\"container-fluid px-4 px-lg-0\">
\t\t\t<h1 class=\"fst-italic lh-1 mb-4\">Our Website is Coming Soon</h1>
\t\t\t<p class=\"mb-5\">We're working hard to finish the development of this site. Sign up below to receive updates and to be notified when we launch!</p>
\t\t
\t\t</div>
\t</div>
</div>

<div class=\"social-icons\">
\t<div class=\"d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0\">
\t\t<a class=\"btn btn-dark m-3\" href=\"#!\"><i class=\"fab fa-twitter\"></i></a>
\t\t<a class=\"btn btn-dark m-3\" href=\"#!\"><i class=\"fab fa-facebook-f\"></i></a>
\t\t<a class=\"btn btn-dark m-3\" href=\"#!\"><i class=\"fab fa-instagram\"></i></a>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/cme/templates/layout/page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/cme/templates/layout/page.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/cme/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
