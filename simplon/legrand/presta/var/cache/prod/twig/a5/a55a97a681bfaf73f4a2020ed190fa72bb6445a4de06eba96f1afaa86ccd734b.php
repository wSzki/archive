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

/* @PrestaShop/Admin/Common/Grid/Blocks/pagination.html.twig */
class __TwigTemplate_a2b3c4a5a5675ac9c97ae9141803cddbeb908a662b747b890106d4aa51b5be3c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'grid_pagination' => [$this, 'block_grid_pagination'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $this->displayBlock('grid_pagination', $context, $blocks);
    }

    public function block_grid_pagination($context, array $blocks = [])
    {
        // line 27
        if ((($this->getAttribute($this->getAttribute(($context["grid"] ?? null), "data", []), "records_total", []) > 10) || $this->getAttribute($this->getAttribute(($context["grid"] ?? null), "pagination", []), "offset", []))) {
            // line 28
            echo "    <div class=\"row\">
      <div class=\"col-md-12\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle:Admin\\Common:pagination", ["limit" => $this->getAttribute($this->getAttribute(            // line 31
($context["grid"] ?? null), "pagination", []), "limit", []), "offset" => $this->getAttribute($this->getAttribute(            // line 32
($context["grid"] ?? null), "pagination", []), "offset", []), "total" => $this->getAttribute($this->getAttribute(            // line 33
($context["grid"] ?? null), "data", []), "records_total", []), "prefix" => $this->getAttribute(            // line 34
($context["grid"] ?? null), "form_prefix", []), "caller_route" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 35
($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"), "caller_parameters" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 36
($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route_params"], "method")]));
            // line 37
            echo "
      </div>
    </div>";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Blocks/pagination.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 37,  48 => 36,  47 => 35,  46 => 34,  45 => 33,  44 => 32,  43 => 31,  42 => 30,  39 => 28,  37 => 27,  31 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Blocks/pagination.html.twig", "/srv/http/presta/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Blocks/pagination.html.twig");
    }
}
