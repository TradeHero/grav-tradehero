<?php

/* theme.php.twig */
class __TwigTemplate_25734b09e65050b0b0a6d3f21bedf990796c8239b55aa78a62e183c2d00cdf70 extends Twig_Template
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
        echo "<?php
namespace Grav\\Theme;

use Grav\\Common\\Theme;

class ";
        // line 6
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("camel", $this->getAttribute((isset($context["component"]) ? $context["component"] : null), "name", array()));
        echo " extends Theme
{
    // Access plugin events in this class
}
";
    }

    public function getTemplateName()
    {
        return "theme.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php
namespace Grav\\Theme;

use Grav\\Common\\Theme;

class {{ component.name|camelize }} extends Theme
{
    // Access plugin events in this class
}
", "theme.php.twig", "/home/viraj2252/grav.tradehero.mobi/user/plugins/devtools/components/theme/pure-blank/theme.php.twig");
    }
}
