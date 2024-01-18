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

/* __string_template__dbd79c9e8ee593da7468533c54993336 */
class __TwigTemplate_4a6c851c57614079cb9bfafd0c710291 extends Template
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
        // line 1
        echo "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
  <tr>
    <td align=\"center\" valign=\"top\" bgcolor=\"#838383\" style=\"background-color:#838383;\"><br>
    <br>
    <table width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
      <tr>
        <td align=\"left\" valign=\"top\">
          <img src=\"http://solar.adn.id.vn/themes/custom/solar/images/top.png\" width=\"600\" height=\"177\" style=\"display:block;\">
        </td>
      </tr>
      <tr>
        <td align=\"center\" valign=\"top\" bgcolor=\"#d3be6c\" style=\"background-color:#d3be6c; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000000; padding:0px 15px 10px 15px;\">
          <div><img src=\"http://solar.adn.id.vn/themes/custom/solar/images/divider.png\" width=\"517\" height=\"10\"></div>
          <div style=\"font-size:48px; color:#838383;\"><b>Make An Appointment</b></div>
          <div><img src=\"http://solar.adn.id.vn/themes/custom/solar/images/divider.png\" width=\"517\" height=\"10\"></div>
          <div style=\"font-size:24px; color:#555100;\"><br>
            Submitted on ";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\webform\Twig\WebformTwigExtension']->webformToken("[webform_submission:created]", $this->sandbox->ensureToStringAllowed(($context["webform_submission"] ?? null), 17, $this->source), [], $this->sandbox->ensureToStringAllowed(($context["options"] ?? null), 17, $this->source)), "html", null, true);
        echo " <br>
           </div>
          <div><br>
            ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\webform\Twig\WebformTwigExtension']->webformToken("[webform_submission:values:webform_token_options_html:webform_token_options_email]", $this->sandbox->ensureToStringAllowed(($context["webform_submission"] ?? null), 20, $this->source), [], $this->sandbox->ensureToStringAllowed(($context["options"] ?? null), 20, $this->source)), "html", null, true);
        echo "
          <br>
            <br>
            <br>
            <br>
            <b>CME Groups</b><br>
            Toà nhà M Building
09 đường số 08, Khu A, Đô thị mới Nam Thành phố P, Quận 7, Thành phố Hồ Chí Minh<br>
Phone: 02873002998 <br>
<a href=\"http://solar.cmenergy.vn\" target=\"_blank\" style=\"color:#000000; text-decoration:none;\"> solar.cmenergy.vn</a></div></td>
      </tr>
      <tr>
        <td align=\"left\" valign=\"top\"><img src=\"http://solar.adn.id.vn/themes/custom/solar/images/bot.png\" width=\"600\" height=\"18\" style=\"display:block;\"></td>
      </tr>
  </table>
    <br>
    <br></td>
  </tr>
</table>";
    }

    public function getTemplateName()
    {
        return "__string_template__dbd79c9e8ee593da7468533c54993336";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 20,  57 => 17,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
  <tr>
    <td align=\"center\" valign=\"top\" bgcolor=\"#838383\" style=\"background-color:#838383;\"><br>
    <br>
    <table width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
      <tr>
        <td align=\"left\" valign=\"top\">
          <img src=\"http://solar.adn.id.vn/themes/custom/solar/images/top.png\" width=\"600\" height=\"177\" style=\"display:block;\">
        </td>
      </tr>
      <tr>
        <td align=\"center\" valign=\"top\" bgcolor=\"#d3be6c\" style=\"background-color:#d3be6c; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000000; padding:0px 15px 10px 15px;\">
          <div><img src=\"http://solar.adn.id.vn/themes/custom/solar/images/divider.png\" width=\"517\" height=\"10\"></div>
          <div style=\"font-size:48px; color:#838383;\"><b>Make An Appointment</b></div>
          <div><img src=\"http://solar.adn.id.vn/themes/custom/solar/images/divider.png\" width=\"517\" height=\"10\"></div>
          <div style=\"font-size:24px; color:#555100;\"><br>
            Submitted on {{ webform_token('[webform_submission:created]', webform_submission, [], options) }} <br>
           </div>
          <div><br>
            {{ webform_token('[webform_submission:values:webform_token_options_html:webform_token_options_email]', webform_submission, [], options) }}
          <br>
            <br>
            <br>
            <br>
            <b>CME Groups</b><br>
            Toà nhà M Building
09 đường số 08, Khu A, Đô thị mới Nam Thành phố P, Quận 7, Thành phố Hồ Chí Minh<br>
Phone: 02873002998 <br>
<a href=\"http://solar.cmenergy.vn\" target=\"_blank\" style=\"color:#000000; text-decoration:none;\"> solar.cmenergy.vn</a></div></td>
      </tr>
      <tr>
        <td align=\"left\" valign=\"top\"><img src=\"http://solar.adn.id.vn/themes/custom/solar/images/bot.png\" width=\"600\" height=\"18\" style=\"display:block;\"></td>
      </tr>
  </table>
    <br>
    <br></td>
  </tr>
</table>", "__string_template__dbd79c9e8ee593da7468533c54993336", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 17);
        static $functions = array("webform_token" => 17);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['webform_token']
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
