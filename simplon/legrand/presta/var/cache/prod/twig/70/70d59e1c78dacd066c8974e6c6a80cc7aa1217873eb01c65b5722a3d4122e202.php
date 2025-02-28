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

/* @PrestaShop/Admin/Module/Includes/action_button.html.twig */
class __TwigTemplate_1968aeaefbb24de0c395929b7939fdf40871eac01f35994446beb6b99c1473ae extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $context["displayAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_replace_filter(twig_capitalize_string_filter($this->env, ($context["action"] ?? null)), ["_" => " "]), [], "Admin.Actions");
        // line 28
        if ((($context["action"] ?? null) == "configure")) {
            // line 29
            echo "
    <a class=\"";
            // line 30
            echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\">";
            // line 31
            echo twig_escape_filter($this->env, ($context["displayAction"] ?? null), "html", null, true);
            echo "
    </a>";
        } else {
            // line 35
            echo "
    <form class='";
            // line 36
            echo twig_escape_filter($this->env, (((isset($context["classes_form"]) || array_key_exists("classes_form", $context))) ? (_twig_default_filter(($context["classes_form"] ?? null))) : ("")), "html", null, true);
            echo "' method=\"post\" action=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\">
      <button type=\"submit\" class=\"";
            // line 37
            echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
            echo " module_action_menu_";
            echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
            echo "\" data-confirm_modal=\"module-modal-confirm-";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
            echo "\">";
            // line 38
            echo twig_escape_filter($this->env, ($context["displayAction"] ?? null), "html", null, true);
            echo "
      </button>
    </form>";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/action_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 38,  56 => 37,  50 => 36,  47 => 35,  42 => 31,  37 => 30,  34 => 29,  32 => 28,  30 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/action_button.html.twig", "/srv/http/presta/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/action_button.html.twig");
    }
}
