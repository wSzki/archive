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

/* @PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_page.html.twig */
class __TwigTemplate_ba59ab355af350161b14f9b2714716ac354a5a4bdd07f2233469eab0d7907bd7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'product_preferences_page' => [$this, 'block_product_preferences_page'],
            'product_page_preferences_form_rest' => [$this, 'block_product_page_preferences_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_page.html.twig", 27);
        // line 29
        $this->displayBlock('product_preferences_page', $context, $blocks);
    }

    public function block_product_preferences_page($context, array $blocks = [])
    {
        // line 30
        echo "<div class=\"col-xl-10\">
  <div class=\"card\" id=\"configuration_fieldset_fo_product_page\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">shopping_basket</i>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product page", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"form-group row\">
          <label class=\"form-control-label\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display available quantities on the product page", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? null), "display_quantities", []), 'errors');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? null), "display_quantities", []), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">";
        // line 47
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display remaining quantities when the quantity is lower than", [], "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set to \"0\" to disable this feature.", [], "Admin.Shopparameters.Help"));
        echo "
          <div class=\"col-sm\">";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? null), "display_last_quantities", []), 'errors');
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? null), "display_last_quantities", []), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"form-control-label\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display unavailable product attributes on the product page", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? null), "display_unavailable_attributes", []), 'errors');
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? null), "display_unavailable_attributes", []), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">";
        // line 63
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display the \"add to cart\" button when a product has attributes", [], "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display or hide the \"add to cart\" button on category pages for products that have attributes forcing customers to see product details.", [], "Admin.Shopparameters.Help"));
        echo "
          <div class=\"col-sm\">";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? null), "allow_add_variant_to_cart_from_listing", []), 'errors');
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? null), "allow_add_variant_to_cart_from_listing", []), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"form-control-label\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Separator of attribute anchor on the product links", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? null), "attribute_anchor_separator", []), 'errors');
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? null), "attribute_anchor_separator", []), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"form-control-label\">";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display discounted price", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? null), "display_discount_price", []), 'errors');
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? null), "display_discount_price", []), 'widget');
        echo "
            <small class=\"form-text\">";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("In the volume discounts board, display the new price with the applied discount instead of showing the discount (ie. \"-5%\").", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
          </div>
        </div>
      </div>";
        // line 90
        $this->displayBlock('product_page_preferences_form_rest', $context, $blocks);
        // line 93
        echo "    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
</div>";
    }

    // line 90
    public function block_product_page_preferences_form_rest($context, array $blocks = [])
    {
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["pageForm"] ?? null), 'rest');
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 91,  152 => 90,  143 => 96,  138 => 93,  136 => 90,  130 => 85,  126 => 84,  124 => 83,  119 => 80,  112 => 75,  110 => 74,  105 => 71,  98 => 66,  96 => 65,  92 => 63,  86 => 59,  84 => 58,  79 => 55,  72 => 50,  70 => 49,  66 => 47,  60 => 43,  58 => 42,  53 => 39,  45 => 33,  40 => 30,  34 => 29,  32 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_page.html.twig", "/srv/http/presta/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/Blocks/product_preferences_page.html.twig");
    }
}
