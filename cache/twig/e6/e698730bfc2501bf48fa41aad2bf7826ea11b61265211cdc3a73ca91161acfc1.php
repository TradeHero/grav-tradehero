<?php

/* modular/subscribe.html.twig */
class __TwigTemplate_9a004fa173bf86224f995b6a5f0e1618a7274dd3d6d19d326fd26e735fc8e127 extends Twig_Template
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
        echo "<section id=\"subscribe\">
  ";
        // line 2
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
</section>";
    }

    public function getTemplateName()
    {
        return "modular/subscribe.html.twig";
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
        return new Twig_Source("<section id=\"subscribe\">
  {{ content }}
</section>", "modular/subscribe.html.twig", "/home/viraj2252/grav.tradehero.mobi/user/themes/woo/templates/modular/subscribe.html.twig");
    }
}
