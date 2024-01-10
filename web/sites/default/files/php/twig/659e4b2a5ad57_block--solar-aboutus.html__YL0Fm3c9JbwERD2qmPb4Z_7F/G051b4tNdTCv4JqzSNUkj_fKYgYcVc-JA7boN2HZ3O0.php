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

/* themes/custom/solar/templates/block/block--solar-aboutus.html.twig */
class __TwigTemplate_3b5eb91a5e1f29bbb892f700d539763a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "
";
        // line 36
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 38
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 38), 38, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 39
($context["plugin_id"] ?? null), 39, $this->source))), 3 => ((        // line 40
($context["layout"] ?? null)) ? (("layout--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["layout"] ?? null), 40, $this->source)))) : (""))];
        // line 43
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 43), 43, $this->source), "html", null, true);
        echo ">
  ";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 44, $this->source), "html", null, true);
        echo "
  ";
        // line 45
        if (($context["label"] ?? null)) {
            echo "  
    <span";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "stok-bg images-r left"], "method", false, false, true, 46), 46, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 46, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 48
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 48, $this->source), "html", null, true);
        echo "
  ";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        // line 135
        echo "</div>
";
    }

    // line 49
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "    <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "container"], "method", false, false, true, 50), 50, $this->source), "html", null, true);
        echo ">
      <div class=\"row align-items-center\">
        <div class=\"col-lg-6\">
            <div class=\"solari-about-left-content\">
                <div class=\"title-area-left mt skew-up\">
                    ";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title_first", [], "any", false, false, true, 55), 55, $this->source));
        echo "
                    <h2 class=\"title\">
                        ";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 57), 57, $this->source));
        echo "
                    </h2>
                </div>
                <div class=\"content-inner\">
                    <div class=\"disc\">
                      ";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 62), 62, $this->source));
        echo "                       
                    </div>
                    <div class=\"power-soalr-area\">
                        <div class=\"single\">
                            <div class=\"icon\">
                                <svg width=\"55\" height=\"55\" viewBox=\"0 0 55 55\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path d=\"M23.8916 52.4916H21.7666V50.9083C21.7666 50.2666 21.2416 49.7416 20.6 49.7416H19.4833V47.2999H28.525C28.9583 47.2999 29.3583 47.0833 29.5916 46.7166C29.825 46.35 29.8583 45.9 29.6833 45.5083L25.1 35.3249C24.9 34.8749 24.4416 34.575 23.9416 34.575H6.8833C6.3833 34.575 5.9333 34.8666 5.72497 35.3249L1.14164 45.5083C0.966637 45.9 0.99997 46.35 1.2333 46.7166C1.46664 47.0833 1.86664 47.2999 2.29997 47.2999H11.3416V49.7416H10.225C9.5833 49.7416 9.0583 50.2666 9.0583 50.9083V52.4916H6.94164C6.6083 52.4916 6.3333 52.7666 6.3333 53.1C6.3333 53.4333 6.6083 53.7083 6.94164 53.7083H23.8916C24.225 53.7083 24.5 53.4333 24.5 53.1C24.5 52.7666 24.2333 52.4916 23.8916 52.4916ZM28.5833 46.0083L28.5333 46.0833H23L22.4166 43.4916H27.4583L28.5833 46.0083ZM26.9083 42.2749H22.1416L21.5333 39.5916H25.7L26.9083 42.2749ZM23.95 35.7916C23.975 35.7916 23.9916 35.8083 24 35.825L25.15 38.3833H21.2583L20.675 35.7916H23.95ZM16.025 35.7916H19.4333L20.0166 38.3833H16.025V35.7916ZM16.025 39.5999H20.2916L20.9 42.2833H16.0333V39.5999H16.025ZM16.025 43.4916H21.1666L21.75 46.0833H16.0166V43.4916H16.025ZM18.275 47.2999V49.7416H12.5583V47.2999H18.275ZM11.4083 35.7916H14.8166V38.3833H10.825L11.4083 35.7916ZM14.8083 39.5999V42.2833H9.94164L10.55 39.5999H14.8083ZM6.8833 35.7916H10.1583L9.57497 38.3833H5.7083L6.8833 35.7916ZM7.84164 46.0833H2.29997L2.24997 46.0083L3.39164 43.4916H8.42497L7.84164 46.0833ZM3.94164 42.2749L5.1583 39.5916H9.29997L8.69164 42.2749H3.94164ZM9.0833 46.0833L9.66664 43.4916H14.8083V46.0833H9.0833ZM20.5583 52.4916H10.2666L10.2333 50.9499L20.5583 50.9083V52.4916Z\" fill=\"#4AAB3D\"></path>
                                    <path d=\"M51.1667 24.3167C50.8334 23.4501 50.075 22.8417 49.1834 22.7167L40.6417 21.4334C40.65 21.3417 40.6667 21.2501 40.6667 21.1584C40.6667 19.3834 39.5834 17.8584 38.05 17.2084V2.33339C38.05 1.88339 37.7834 1.50006 37.3584 1.35839C36.9417 1.20839 36.5 1.34173 36.225 1.68339L31.7584 7.20006C31.1917 7.90839 31.0334 8.86673 31.3667 9.72506L34.3917 17.3917C33.0334 18.1167 32.0917 19.5251 32.0917 21.1667C32.0917 21.4917 32.1334 21.8001 32.2 22.1001L19.2834 29.5584C18.9 29.7751 18.7084 30.2001 18.7834 30.6334C18.8667 31.0667 19.2 31.3917 19.6334 31.4584L26.6417 32.5667C26.7667 32.5834 26.9 32.5917 27.025 32.5917C27.7917 32.5917 28.5334 32.2417 29.0167 31.6334L34.3584 24.9167C34.9667 25.2417 35.65 25.4501 36.3834 25.4501C37.3667 25.4501 38.2584 25.1084 38.9834 24.5501L52.2417 32.1917C52.4084 32.2834 52.5834 32.3334 52.7584 32.3334C53 32.3334 53.2334 32.2501 53.4334 32.0751C53.7667 31.7834 53.875 31.3417 53.7167 30.9417L51.1667 24.3167ZM32.4917 9.27506C32.325 8.83339 32.4 8.32506 32.7 7.95839L36.8334 2.85006V16.9167C36.6834 16.9001 36.5334 16.8667 36.3834 16.8667C36.0917 16.8667 35.8 16.9001 35.525 16.9501L32.4917 9.27506ZM28.0667 30.8834C27.7667 31.2584 27.3084 31.4417 26.8334 31.3667L20.35 30.3417L32.65 23.2334C32.85 23.5917 33.0834 23.9251 33.375 24.2084L28.0667 30.8834ZM36.3834 24.2334C34.6834 24.2334 33.3084 22.8501 33.3084 21.1584C33.3084 19.4584 34.6917 18.0834 36.3834 18.0834C38.075 18.0834 39.4584 19.4667 39.4584 21.1584C39.4584 22.8584 38.075 24.2334 36.3834 24.2334ZM39.8584 23.6501C40.0834 23.3417 40.2584 22.9917 40.3917 22.6251L49.0084 23.9167C49.4667 23.9751 49.8584 24.3001 50.025 24.7501L52.3834 30.8751L39.8584 23.6501Z\" fill=\"#4AAB3D\"></path>
                                    <path d=\"M44.175 52.4917H42.5333L39 26.8334C38.9583 26.5001 38.65 26.2751 38.3166 26.3167C37.9833 26.3584 37.75 26.6667 37.8 27.0001L38.9 34.9751H36.9083C36.575 34.9751 36.3 35.2501 36.3 35.5834C36.3 35.9167 36.575 36.1917 36.9083 36.1917H39.0666L40.7 48.0501H37.0916C36.7583 48.0501 36.4833 48.3251 36.4833 48.6584C36.4833 48.9917 36.7583 49.2667 37.0916 49.2667H40.8666L41.3083 52.4917H31.5916L32.875 43.1501H36.3583C36.6916 43.1501 36.9666 42.8751 36.9666 42.5417C36.9666 42.2084 36.6916 41.9334 36.3583 41.9334H33.0416L35.0916 27.0501C35.1333 26.7167 34.9083 26.4084 34.575 26.3667C34.2333 26.3251 33.9333 26.5501 33.8916 26.8834L30.3666 52.4917H28.8083C28.475 52.4917 28.2 52.7667 28.2 53.1001C28.2 53.4334 28.475 53.7084 28.8083 53.7084H44.1666C44.5 53.7084 44.775 53.4334 44.775 53.1001C44.775 52.7667 44.5083 52.4917 44.175 52.4917Z\" fill=\"#4AAB3D\"></path>
                                    <path d=\"M20.25 13.9418C20.5833 13.9418 20.8583 13.6668 20.8583 13.3334C20.8583 11.6668 22.2166 10.3084 23.8833 10.3084C25.55 10.3084 26.9 11.6668 26.9 13.3334C26.9 15.0001 25.55 16.3501 23.8833 16.3501H10.2416C9.9083 16.3501 9.6333 16.6251 9.6333 16.9584C9.6333 17.2918 9.9083 17.5668 10.2416 17.5668H23.8833C26.2166 17.5668 28.1166 15.6668 28.1166 13.3334C28.1166 11.0001 26.2166 9.1001 23.8833 9.1001C21.55 9.1001 19.65 11.0001 19.65 13.3334C19.6416 13.6751 19.9083 13.9418 20.25 13.9418Z\" fill=\"#4AAB3D\"></path>
                                    <path d=\"M3.01654 11.9166H13.4165C15.7499 11.9166 17.6499 10.0166 17.6499 7.68329C17.6499 5.34995 15.7499 3.44995 13.4165 3.44995C11.0832 3.44995 9.1832 5.34995 9.1832 7.68329C9.1832 8.01662 9.4582 8.29162 9.79154 8.29162C10.1249 8.29162 10.3999 8.01662 10.3999 7.68329C10.3999 6.01662 11.7582 4.65828 13.4249 4.65828C15.0915 4.65828 16.4415 6.01662 16.4415 7.68329C16.4415 9.34995 15.0915 10.7 13.4249 10.7H3.01654C2.6832 10.7 2.4082 10.975 2.4082 11.3083C2.41654 11.6416 2.6832 11.9166 3.01654 11.9166Z\" fill=\"#4AAB3D\"></path>
                                    <path d=\"M42.4001 11.9167H50.2167C52.2834 11.9167 53.9584 10.2417 53.9584 8.17505C53.9584 6.10838 52.2834 4.42505 50.2167 4.42505C48.1501 4.42505 46.4667 6.10838 46.4667 8.17505C46.4667 8.50838 46.7417 8.78338 47.0751 8.78338C47.4084 8.78338 47.6834 8.50838 47.6834 8.17505C47.6834 6.77505 48.8167 5.64172 50.2167 5.64172C51.6084 5.64172 52.7417 6.77505 52.7417 8.17505C52.7417 9.56672 51.6084 10.7 50.2167 10.7H42.4001C42.0667 10.7 41.7917 10.975 41.7917 11.3084C41.8001 11.6417 42.0667 11.9167 42.4001 11.9167Z\" fill=\"#4AAB3D\"></path>
                                    <path d=\"M42.0082 16.3251H50.4166C50.7499 16.3251 51.0249 16.0501 51.0249 15.7167C51.0249 15.3834 50.7499 15.1084 50.4166 15.1084H42.0082C41.6749 15.1084 41.3999 15.3834 41.3999 15.7167C41.3999 16.0501 41.6666 16.3251 42.0082 16.3251Z\" fill=\"#4AAB3D\"></path>
                                    <path d=\"M4.73333 20.55C4.4 20.55 4.125 20.825 4.125 21.1584C4.125 21.4917 4.4 21.7667 4.73333 21.7667H16.125C16.4583 21.7667 16.7333 21.4917 16.7333 21.1584C16.7333 20.825 16.4583 20.55 16.125 20.55H4.73333Z\" fill=\"#4AAB3D\"></path>
                                </svg>
                            </div>
                            <div class=\"info\">
                                <h6 class=\"title\">";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_installed_capacity", [], "any", false, false, true, 79), 79, $this->source));
        echo "</h6>
                                <span>";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_installed_capacity", [], "any", false, false, true, 80)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#title"] ?? null) : null), 80, $this->source), "html", null, true);
        echo "</span>
                            </div>
                        </div>
                        <div class=\"single\">
                            <div class=\"icon\">
                                <svg width=\"51\" height=\"55\" viewBox=\"0 0 51 55\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path d=\"M49.2801 29.5011C48.9182 29.1392 48.4886 28.852 48.0157 28.6561C47.5428 28.4602 47.0359 28.3594 46.5241 28.3594C46.0122 28.3594 45.5054 28.4602 45.0325 28.6561C44.5596 28.852 44.1299 29.1392 43.768 29.5011L37.0962 36.173C36.8035 35.6311 36.3702 35.1782 35.8418 34.8618C35.3135 34.5454 34.7096 34.3772 34.0938 34.375H24.3343C23.4942 33.3581 22.4508 32.528 21.2711 31.9379C20.0914 31.3478 18.8015 31.0106 17.4839 30.9481C16.1664 30.8856 14.8503 31.099 13.62 31.5747C12.3897 32.0505 11.2724 32.778 10.3397 33.7107L6.59378 37.4567L5.48261 36.3455C5.40283 36.2657 5.30811 36.2024 5.20385 36.1592C5.0996 36.116 4.98785 36.0938 4.875 36.0938C4.76215 36.0938 4.65041 36.116 4.54615 36.1592C4.4419 36.2024 4.34718 36.2657 4.2674 36.3455L0.829899 39.783C0.75008 39.8628 0.686761 39.9575 0.643561 40.0618C0.60036 40.1661 0.578125 40.2778 0.578125 40.3907C0.578125 40.5035 0.60036 40.6152 0.643561 40.7195C0.686761 40.8238 0.75008 40.9185 0.829899 40.9983L14.5799 54.7483C14.6597 54.8281 14.7544 54.8914 14.8587 54.9346C14.9629 54.9778 15.0747 55 15.1875 55C15.3004 55 15.4121 54.9778 15.5164 54.9346C15.6206 54.8914 15.7153 54.8281 15.7951 54.7483L19.2326 51.3108C19.3124 51.231 19.3757 51.1363 19.4189 51.032C19.4621 50.9277 19.4844 50.816 19.4844 50.7032C19.4844 50.5903 19.4621 50.4786 19.4189 50.3743C19.3757 50.27 19.3124 50.1753 19.2326 50.0955L18.1215 48.9844L19.0853 48.0205C19.57 47.5389 20.2249 47.2677 20.9082 47.2656H33.4682C34.5972 47.2688 35.7157 47.0479 36.7588 46.6158C37.8019 46.1837 38.7489 45.549 39.545 44.7483L49.2801 35.0132C49.6421 34.6513 49.9293 34.2217 50.1252 33.7488C50.3211 33.2759 50.4219 32.7691 50.4219 32.2572C50.4219 31.7453 50.3211 31.2385 50.1252 30.7656C49.9293 30.2927 49.6421 29.863 49.2801 29.5011ZM15.1875 52.9254L2.65274 40.3906L4.87503 38.1683L17.4098 50.7031L15.1875 52.9254ZM48.0649 33.798L38.3298 43.5331C37.6928 44.1736 36.9352 44.6813 36.1007 45.027C35.2662 45.3726 34.3714 45.5493 33.4682 45.5469H20.9082C20.3437 45.5453 19.7846 45.6558 19.2631 45.8718C18.7416 46.0878 18.2682 46.4051 17.8701 46.8053L16.9063 47.7692L7.80899 38.6719L11.5549 34.926C12.3283 34.1527 13.2566 33.5518 14.2788 33.1629C15.3009 32.7739 16.3938 32.6058 17.4856 32.6694C18.5774 32.733 19.6434 33.027 20.6135 33.532C21.5836 34.037 22.4358 34.7416 23.1141 35.5994L23.2463 35.7669C23.3267 35.8688 23.4291 35.9511 23.5459 36.0077C23.6627 36.0644 23.7908 36.0938 23.9206 36.0938H34.0938C34.5496 36.0938 34.9868 36.2748 35.3091 36.5972C35.6314 36.9195 35.8125 37.3567 35.8125 37.8125C35.8125 38.2683 35.6314 38.7055 35.3091 39.0278C34.9868 39.3502 34.5496 39.5312 34.0938 39.5312H22.0625C21.8346 39.5312 21.616 39.6218 21.4549 39.783C21.2937 39.9441 21.2032 40.1627 21.2032 40.3906C21.2032 40.6185 21.2937 40.8371 21.4549 40.9983C21.616 41.1595 21.8346 41.25 22.0625 41.25H34.0938C34.9344 41.2474 35.7448 40.9361 36.3711 40.3754C36.9974 39.8147 37.396 39.0436 37.4913 38.2084L44.9833 30.7163C45.3984 30.32 45.9502 30.0989 46.5241 30.0989C47.098 30.0989 47.6499 30.32 48.0649 30.7163C48.2673 30.9187 48.4278 31.1589 48.5373 31.4233C48.6468 31.6876 48.7032 31.971 48.7032 32.2572C48.7032 32.5433 48.6468 32.8267 48.5373 33.091C48.4278 33.3554 48.2673 33.5957 48.0649 33.798Z\" fill=\"#4AAB3D\"></path>
                                    <path d=\"M14.9675 17.512C14.9555 17.5288 14.9374 17.5383 14.9265 17.5562C14.9237 17.5609 14.9239 17.5663 14.9211 17.571C12.3074 20.8906 10.8877 24.9936 10.8906 29.2186C10.8906 29.3592 10.8915 29.4989 10.9011 29.6391C10.9162 29.856 11.013 30.0591 11.1719 30.2076C11.3308 30.356 11.5401 30.4386 11.7576 30.4389C11.7777 30.4389 11.7978 30.438 11.818 30.4368C11.9306 30.429 12.0405 30.3991 12.1415 30.3488C12.2426 30.2985 12.3327 30.2287 12.4068 30.1436C12.4808 30.0585 12.5374 29.9596 12.5733 29.8526C12.6091 29.7455 12.6235 29.6325 12.6157 29.5199C12.6085 29.4192 12.6094 29.3189 12.6094 29.2186C12.6101 25.6065 13.7565 22.0877 15.8835 19.1683C18.3139 20.7552 19.7364 22.2883 19.7949 23.4304C19.705 24.5169 19.3619 25.5671 18.7929 26.497C18.5398 27.0194 18.2742 27.5691 18.0292 28.1579C17.9858 28.2621 17.9634 28.3738 17.9632 28.4866C17.963 28.5995 17.985 28.7113 18.0281 28.8157C18.1149 29.0264 18.282 29.194 18.4924 29.2816C18.5966 29.325 18.7084 29.3474 18.8212 29.3476C18.9341 29.3477 19.0459 29.3257 19.1502 29.2827C19.361 29.1958 19.5286 29.0288 19.6162 28.8183C19.8482 28.2611 20.1004 27.7407 20.34 27.246C21.0535 26.0634 21.4563 24.7195 21.5111 23.3394C21.4223 21.606 19.8828 19.7526 16.9648 17.8239C18.2806 16.3345 19.8434 15.0831 21.5845 14.1249C23.2583 17.3865 25.2723 19.108 27.4714 19.108C27.6314 19.108 27.7912 19.099 27.9502 19.0811C29.4737 18.9841 30.9279 18.4089 32.1056 17.4375C32.8622 16.8525 33.1756 16.6108 34.9103 17.2167C36.5305 17.7808 38.2384 17.0737 39.7857 15.2385C41.125 16.198 42.3196 17.3449 43.3327 18.6441C42.2982 19.7489 41.4842 21.041 40.9344 22.4511C40.2013 24.0515 39.7057 25.0372 38.7943 25.1228C38.2023 25.1596 37.6085 25.1571 37.0168 25.1152C34.7492 25.0036 31.929 24.8714 29.9144 28.8318C29.4576 29.7241 29.1507 30.6856 29.0059 31.6776C28.9743 31.9033 29.0337 32.1323 29.1709 32.3142C29.3082 32.4962 29.5121 32.6161 29.7377 32.6477C29.7776 32.6535 29.8179 32.6563 29.8581 32.6561C30.0652 32.6559 30.2652 32.5808 30.4213 32.4448C30.5775 32.3088 30.6792 32.121 30.7079 31.9159C30.8247 31.1111 31.0748 30.3313 31.4477 29.6085C32.9566 26.6418 34.7139 26.7286 36.935 26.8319C37.6066 26.8789 38.2807 26.8797 38.9525 26.8344C40.9016 26.6506 41.7127 24.8794 42.497 23.1665C42.9412 22.0427 43.5633 20.9978 44.3395 20.0717C45.4889 21.8905 46.2834 23.9105 46.681 26.0249C46.7016 26.1359 46.744 26.2418 46.8055 26.3365C46.8671 26.4311 46.9467 26.5127 47.0398 26.5766C47.1329 26.6404 47.2377 26.6853 47.3482 26.7087C47.4586 26.732 47.5726 26.7333 47.6836 26.7126C47.7946 26.6919 47.9004 26.6495 47.995 26.5878C48.0896 26.5262 48.1711 26.4465 48.2349 26.3533C48.2987 26.2602 48.3435 26.1553 48.3667 26.0448C48.39 25.9343 48.3912 25.8204 48.3704 25.7094C47.5792 21.5283 45.3995 17.7368 42.1844 14.9492C38.9693 12.1616 34.9073 10.5412 30.6563 10.3505V9.40098C30.6563 8.91969 30.7917 8.44811 31.047 8.04008C31.3022 7.63204 31.667 7.30399 32.0998 7.09335C32.5779 7.65046 33.1708 8.09766 33.8378 8.40434C34.5048 8.71101 35.2303 8.86992 35.9644 8.87017C36.6606 8.8642 37.3507 8.74019 38.0054 8.50342C39.1016 8.11974 40.1412 7.59049 41.0963 6.92989C41.5098 6.55875 42.0186 6.31011 42.5654 6.21183C43.1123 6.11355 43.6758 6.16953 44.1926 6.37348C44.3667 6.41813 44.5504 6.40709 44.7179 6.34191C44.8853 6.27674 45.0282 6.1607 45.1263 6.01013C45.2244 5.85956 45.2728 5.68203 45.2647 5.5025C45.2567 5.32298 45.1926 5.15049 45.0814 5.00931C44.8972 4.77513 40.5214 -0.706329 36.3093 0.0779364C32.2436 0.835768 31.7673 3.3018 31.5691 5.44038C30.864 5.73908 30.2521 6.22146 29.7969 6.83723C29.3418 6.22135 28.7297 5.73887 28.0246 5.44011C27.8263 3.30161 27.3501 0.835716 23.2844 0.0779364C19.0719 -0.710523 14.6966 4.77555 14.5123 5.00927C14.4012 5.15046 14.337 5.32294 14.329 5.50247C14.3209 5.682 14.3694 5.85953 14.4675 6.0101C14.5656 6.16067 14.7084 6.2767 14.8759 6.34188C15.0433 6.40705 15.227 6.41809 15.4011 6.37344C15.9179 6.16937 16.4814 6.11334 17.0283 6.21162C17.5752 6.3099 18.084 6.55861 18.4974 6.92985C19.4526 7.59046 20.4922 8.11971 21.5883 8.5034C22.243 8.74041 22.9331 8.86443 23.6294 8.87015C24.3635 8.86987 25.0889 8.71094 25.756 8.40425C26.423 8.09755 27.0159 7.65034 27.494 7.09323C27.9268 7.30389 28.2916 7.63197 28.5468 8.04003C28.8021 8.44808 28.9374 8.91967 28.9375 9.40098V10.3342C26.2297 10.4556 23.58 11.1597 21.1691 12.3984C18.7582 13.6371 16.6429 15.3813 14.9675 17.512ZM36.624 1.76731C38.5069 1.41358 40.7577 3.04882 42.2901 4.51286C41.5133 4.6743 40.783 5.00925 40.1539 5.49267C39.315 6.07617 38.4008 6.54326 37.4364 6.88118C36.8417 7.14066 36.1866 7.23015 35.5441 7.13969C34.9015 7.04923 34.2967 6.78237 33.7967 6.36878L36.068 5.41546C36.1724 5.372 36.2672 5.30836 36.3469 5.2282C36.4266 5.14804 36.4898 5.05294 36.5327 4.94834C36.5756 4.84374 36.5974 4.7317 36.597 4.61864C36.5965 4.50559 36.5737 4.39373 36.5299 4.28949C36.4861 4.18526 36.4222 4.09068 36.3418 4.01119C36.2614 3.9317 36.1661 3.86886 36.0614 3.82626C35.9567 3.78367 35.8446 3.76216 35.7315 3.76297C35.6185 3.76378 35.5067 3.78689 35.4026 3.83098L33.3899 4.67583C33.6288 3.20581 34.2323 2.21336 36.624 1.76731ZM22.1573 6.88118C21.1929 6.54326 20.2788 6.07617 19.4399 5.49267C18.8102 5.00852 18.0789 4.67339 17.3011 4.51247C18.831 3.04801 21.0751 1.41528 22.9697 1.76733C25.3615 2.21328 25.9649 3.20592 26.2038 4.6757L24.1912 3.83098C24.0872 3.78728 23.9756 3.76451 23.8627 3.76395C23.7499 3.76339 23.638 3.78506 23.5336 3.82773C23.4291 3.8704 23.3341 3.93322 23.2539 4.01262C23.1737 4.09201 23.1099 4.18643 23.0662 4.29046C23.0225 4.3945 22.9998 4.50613 22.9992 4.61897C22.9986 4.73181 23.0203 4.84366 23.063 4.94812C23.1056 5.05259 23.1685 5.14762 23.2479 5.22781C23.3273 5.30799 23.4217 5.37176 23.5257 5.41545L25.7975 6.36882C25.2973 6.78217 24.6923 7.04886 24.0498 7.1393C23.4072 7.22974 22.7522 7.1404 22.1573 6.88118ZM35.4768 15.5937C33.0447 14.7452 32.1463 15.2341 31.0544 16.0775C30.125 16.8538 28.9692 17.3082 27.76 17.3729C25.7239 17.6062 24.0851 15.2452 23.1213 13.381C25.5566 12.3543 28.1959 11.9031 30.834 12.0624C33.4721 12.2217 36.0379 12.9872 38.332 14.2995C37.5873 15.138 36.5368 15.964 35.4768 15.5937Z\" fill=\"#4AAB3D\"></path>
                                </svg>
                            </div>
                            <div class=\"info\">
                                <h6 class=\"title\">";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_save_world", [], "any", false, false, true, 91), 91, $this->source));
        echo "</h6>
                                <span>";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_save_world", [], "any", false, false, true, 92)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#title"] ?? null) : null), 92, $this->source), "html", null, true);
        echo "</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"solari-about-button-area mt--40\">
                        <a href=\"";
        // line 97
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_learn_more", [], "any", false, false, true, 97), 0, [], "any", false, false, true, 97)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#url"] ?? null) : null), 97, $this->source), "html", null, true);
        echo "\" class=\"rts-btn btn-primary\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_learn_more", [], "any", false, false, true, 97), 0, [], "any", false, false, true, 97)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#title"] ?? null) : null), 97, $this->source), "html", null, true);
        echo "</a>
                        <div class=\"call-button\">
                            <i class=\"fa-solid fa-phone\"></i>
                            <div class=\"info\">
                                <span>";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_callus247", [], "any", false, false, true, 101), 101, $this->source));
        echo "</span>
                                <a href=\"tel:";
        // line 102
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mobile", [], "any", false, false, true, 102), 102, $this->source)))), "html", null, true);
        echo "\">
                                    <h6 class=\"title\">";
        // line 103
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mobile", [], "any", false, false, true, 103), 103, $this->source)))), "html", null, true);
        echo "</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6 mt_md--50 mt_sm--40\">
            <div class=\"thumbnail-solari-about\">
                ";
        // line 113
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
        echo "
                <div class=\"vedio-icone\">
                    <a class=\"video-play-button play-video\" href=\"#\">
                        <span></span>
                        <p class=\"text\">
                            ";
        // line 118
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Intro Video"));
        echo "
                        </p>
                    </a>
                    <div class=\"video-overlay\">
                        <a class=\"video-overlay-close\">×</a>
                    </div>
                </div>
                <div class=\"experiencea-area images\">
                    <h3 class=\"title\">";
        // line 126
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_years_experience", [], "any", false, false, true, 126), 126, $this->source));
        echo "</h3>
                    <p>";
        // line 127
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_years_experience", [], "any", false, false, true, 127)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#title"] ?? null) : null), 127, $this->source), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
    </div>
     
  </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/solar/templates/block/block--solar-aboutus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 127,  205 => 126,  194 => 118,  186 => 113,  173 => 103,  169 => 102,  165 => 101,  156 => 97,  148 => 92,  144 => 91,  130 => 80,  126 => 79,  106 => 62,  98 => 57,  93 => 55,  84 => 50,  80 => 49,  75 => 135,  73 => 49,  68 => 48,  61 => 46,  57 => 45,  53 => 44,  48 => 43,  46 => 40,  45 => 39,  44 => 38,  43 => 36,  40 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/solar/templates/block/block--solar-aboutus.html.twig", "/var/www/html/adn.id.vn/d10test/web/themes/custom/solar/templates/block/block--solar-aboutus.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 36, "if" => 45, "block" => 49);
        static $filters = array("clean_class" => 38, "escape" => 43, "raw" => 55, "trim" => 102, "striptags" => 102, "render" => 102, "t" => 118);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 'raw', 'trim', 'striptags', 'render', 't'],
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
