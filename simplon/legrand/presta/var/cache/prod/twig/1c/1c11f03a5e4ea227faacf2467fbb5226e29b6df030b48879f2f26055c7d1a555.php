<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Configure/AdvancedParameters/administration.html.twig */
class __TwigTemplate_6222d67d236027121fc3ede539fb73c7138cdfa01daf14728c50f91ba9898955 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/administration.html.twig", 25);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'administration_form_general' => [$this, 'block_administration_form_general'],
            'administration_form_upload_quota' => [$this, 'block_administration_form_upload_quota'],
            'administration_form_notifications' => [$this, 'block_administration_form_notifications'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/administration.html.twig", 27);
        // line 29
        list($context["generalForm"], $context["uploadQuotaForm"], $context["notificationsForm"]) =         [$this->getAttribute(($context["form"] ?? null), "general", []), $this->getAttribute(($context["form"] ?? null), "upload_quota", []), $this->getAttribute(($context["form"] ?? null), "notifications", [])];
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "form"]]);
        echo "
  <div class=\"row justify-content-center\">";
        // line 34
        $this->displayBlock('administration_form_general', $context, $blocks);
        // line 82
        $this->displayBlock('administration_form_upload_quota', $context, $blocks);
        // line 123
        $this->displayBlock('administration_form_notifications', $context, $blocks);
        // line 170
        echo "  </div>";
        // line 171
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
    }

    // line 34
    public function block_administration_form_general($context, array $blocks = [])
    {
        // line 35
        echo "      <div class=\"col-xl-10\">
        <div class=\"card\" id=\"configuration_fieldset_general\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">settings</i>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General", [], "Admin.Global"), "html", null, true);
        echo "
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"form-group row\">";
        // line 43
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Automatically check for module updates", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New modules and updates are displayed on the modules page.", [], "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "check_modules_update", []), 'errors');
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "check_modules_update", []), 'widget', ["attr" => ["class" => "custom-select"]]);
        echo "
                </div>
              </div>
              <div class=\"form-group row\">";
        // line 50
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Check the cookie's IP address", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Check the IP address of the cookie in order to prevent your cookie from being stolen.", [], "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "check_ip_address", []), 'errors');
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "check_ip_address", []), 'widget', ["attr" => ["class" => "custom-select"]]);
        echo "
                </div>
              </div>
              <div class=\"form-group row\">";
        // line 57
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Lifetime of front office cookies", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set the amount of hours during which the front office cookies are valid. After that amount of time, the customer will have to log in again.", [], "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "front_cookie_lifetime", []), 'errors');
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "front_cookie_lifetime", []), 'widget');
        echo "
                </div>
              </div>
              <div class=\"form-group row\">";
        // line 64
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Lifetime of back office cookies", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set the amount of hours during which the back office cookies are valid. After that amount of time, the PrestaShop user will have to log in again.", [], "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "back_cookie_lifetime", []), 'errors');
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "back_cookie_lifetime", []), 'widget');
        echo "
                </div>
              </div>";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["generalForm"] ?? null), 'rest');
        echo "
            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
            </div>
          </div>
        </div>
      </div>";
    }

    // line 82
    public function block_administration_form_upload_quota($context, array $blocks = [])
    {
        // line 83
        echo "      <div class=\"col-xl-10\">
        <div class=\"card\" id=\"configuration_fieldset_upload\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">file_upload</i>";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Upload quota", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"form-group row\">";
        // line 91
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Maximum size for attached files", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set the maximum size allowed for attachment files (in megabytes). This value has to be lower or equal to the maximum file upload allotted by your server (currently: %size% MB).", ["%size%" => $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_ATTACHMENT_MAXIMUM_SIZE")], "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["uploadQuotaForm"] ?? null), "max_size_attached_files", []), 'errors');
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["uploadQuotaForm"] ?? null), "max_size_attached_files", []), 'widget');
        echo "
                </div>
              </div>
              <div class=\"form-group row\">";
        // line 98
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Maximum size for a downloadable product", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Define the upload limit for a downloadable product (in megabytes). This value has to be lower or equal to the maximum file upload allotted by your server (currently: %size% MB).", ["%size%" => $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_LIMIT_UPLOAD_FILE_VALUE")], "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["uploadQuotaForm"] ?? null), "max_size_downloadable_product", []), 'errors');
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["uploadQuotaForm"] ?? null), "max_size_downloadable_product", []), 'widget');
        echo "
                </div>
              </div>
              <div class=\"form-group row\">";
        // line 105
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Maximum size for a product's image", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Define the upload limit for an image (in megabytes). This value has to be lower or equal to the maximum file upload allotted by your server (currently: %size% MB).", ["%size%" => $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_LIMIT_UPLOAD_IMAGE_VALUE")], "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["uploadQuotaForm"] ?? null), "max_size_product_image", []), 'errors');
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["uploadQuotaForm"] ?? null), "max_size_product_image", []), 'widget');
        echo "
                </div>
              </div>";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["uploadQuotaForm"] ?? null), 'rest');
        echo "
            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
            </div>
          </div>
        </div>
      </div>";
    }

    // line 123
    public function block_administration_form_notifications($context, array $blocks = [])
    {
        // line 124
        echo "      <div class=\"col-xl-10\">
        <div class=\"card\" id=\"configuration_fieldset_notifications\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">priority_high</i>";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Notifications", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">

              <div class=\"row\">
                <div class=\"col\">";
        // line 134
        echo $context["ps"]->getinfotip($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Notifications are numbered bubbles displayed at the very top of your back office, right next to the shop's name. They display the number of new items since you last clicked on them.", [], "Admin.Advparameters.Help"));
        echo "
                </div>
              </div>

              <div class=\"form-group row\">";
        // line 139
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show notifications for new orders", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will display notifications when new orders are made in your shop.", [], "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["notificationsForm"] ?? null), "show_notifs_new_orders", []), 'errors');
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["notificationsForm"] ?? null), "show_notifs_new_orders", []), 'widget', ["attr" => ["class" => "custom-select"]]);
        echo "
                </div>
              </div>
              <div class=\"form-group row\">";
        // line 146
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show notifications for new customers", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will display notifications every time a new customer registers in your shop.", [], "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["notificationsForm"] ?? null), "show_notifs_new_customers", []), 'errors');
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["notificationsForm"] ?? null), "show_notifs_new_customers", []), 'widget', ["attr" => ["class" => "custom-select"]]);
        echo "
                </div>
              </div>
              <div class=\"form-group row\">";
        // line 153
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show notifications for new messages", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will display notifications when new messages are posted in your shop.", [], "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["notificationsForm"] ?? null), "show_notifs_new_messages", []), 'errors');
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["notificationsForm"] ?? null), "show_notifs_new_messages", []), 'widget', ["attr" => ["class" => "custom-select"]]);
        echo "
                </div>
              </div>";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["notificationsForm"] ?? null), 'rest');
        echo "
            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
            </div>
          </div>
        </div>
      </div>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/administration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 164,  271 => 159,  266 => 156,  264 => 155,  260 => 153,  254 => 149,  252 => 148,  248 => 146,  242 => 142,  240 => 141,  236 => 139,  229 => 134,  220 => 127,  215 => 124,  212 => 123,  203 => 116,  195 => 111,  190 => 108,  188 => 107,  184 => 105,  178 => 101,  176 => 100,  172 => 98,  166 => 94,  164 => 93,  160 => 91,  153 => 86,  148 => 83,  145 => 82,  136 => 75,  128 => 70,  123 => 67,  121 => 66,  117 => 64,  111 => 60,  109 => 59,  105 => 57,  99 => 53,  97 => 52,  93 => 50,  87 => 46,  85 => 45,  81 => 43,  74 => 38,  69 => 35,  66 => 34,  62 => 171,  60 => 170,  58 => 123,  56 => 82,  54 => 34,  50 => 32,  47 => 31,  43 => 25,  41 => 29,  39 => 27,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/administration.html.twig", "/srv/http/presta/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/administration.html.twig");
    }
}
