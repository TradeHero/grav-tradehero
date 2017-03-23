<?php

/* partials/header.html.twig */
class __TwigTemplate_8aa3892c0b5313afc2084f0ec9324ce9cbcc0fbea2e154a0d132aa4193ae6b54 extends Twig_Template
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
        echo "<header id=\"header\">
  <nav id=\"mainNav\" class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container\">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span> Menu <i class=\"fa fa-bars\"></i>
                </button>
        <a class=\"navbar-brand page-scroll\" href=\"#page-top\">
          <img src=\"";
        // line 10
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/logo.png\" alt=\"\" style=\"max-width: 265px\" class=\"logo\">
        </a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        ";
        // line 15
        $this->loadTemplate("partials/navigation.html.twig", "partials/header.html.twig", 15)->display($context);
        // line 16
        echo "      </div>
    </div>
  </nav>
  
</header>";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 16,  38 => 15,  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header id=\"header\">
  <nav id=\"mainNav\" class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container\">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span> Menu <i class=\"fa fa-bars\"></i>
                </button>
        <a class=\"navbar-brand page-scroll\" href=\"#page-top\">
          <img src=\"{{ theme_url }}/images/logo.png\" alt=\"\" style=\"max-width: 265px\" class=\"logo\">
        </a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        {% include 'partials/navigation.html.twig' %}
      </div>
    </div>
  </nav>
  
</header>", "partials/header.html.twig", "/home/viraj2252/grav.tradehero.mobi/user/themes/vjtest/templates/partials/header.html.twig");
    }
}
