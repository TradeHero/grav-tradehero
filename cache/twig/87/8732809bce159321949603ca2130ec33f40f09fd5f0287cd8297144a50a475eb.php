<?php

/* CHANGELOG.md.twig */
class __TwigTemplate_7894f0c77a2df495295178fafb8bf6d69d4c901d3ffca3a506e951a8045da483 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "# v0.1.0
##  ";
        // line 2
        echo twig_date_format_filter($this->env, "now", "m/d/Y");
        echo "

1. [](#new)
    * ChangeLog started...
";
    }

    public function getTemplateName()
    {
        return "CHANGELOG.md.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("# v0.1.0
##  {{ \"now\"|date(\"m/d/Y\") }}

1. [](#new)
    * ChangeLog started...
", "CHANGELOG.md.twig", "/home/viraj2252/grav.tradehero.mobi/user/plugins/devtools/components/theme/pure-blank/CHANGELOG.md.twig");
    }
}
