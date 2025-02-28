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

/* @PrestaShop/Admin/Common/Grid/Blocks/Table/headers_row.html.twig */
class __TwigTemplate_a16ac61922cceeaaa712340542d9934f6a8c1a9680e67dc29198473e62064068 extends \Twig\Template
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
        // line 25
        echo "
<tr class=\"column-headers";
        // line 26
        if ($this->getAttribute($this->getAttribute(($context["grid"] ?? null), "attributes", []), "is_empty_state", [])) {
            echo "d-none";
        }
        echo "\">";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["grid"] ?? null), "columns", []));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 28
            echo "    <th scope=\"col\">";
            // line 29
            echo $this->env->getExtension('PrestaShopBundle\Twig\Extension\GridExtension')->renderColumnHeader($context["column"], ($context["grid"] ?? null));
            echo "
    </th>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</tr>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Blocks/Table/headers_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 32,  44 => 29,  42 => 28,  38 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Blocks/Table/headers_row.html.twig", "/srv/http/presta/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Blocks/Table/headers_row.html.twig");
    }
}
