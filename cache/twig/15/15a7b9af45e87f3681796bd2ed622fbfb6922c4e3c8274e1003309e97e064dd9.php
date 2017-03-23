<?php

/* partials/base.html.twig */
class __TwigTemplate_e32c1ddc953650b048a0722f594a3a76991bc4bd91fa8333bc84bc1d072e5434 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<!--[if lt IE 8 ]><html class=\"no-js ie ie7\" lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\"> <![endif]-->
<!--[if IE 8 ]><html class=\"no-js ie ie8\" lang=\"";
        // line 4
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\"> <![endif]-->
<!--[if IE 9 ]><html class=\"no-js ie ie9\" lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class=\"no-js\" lang=\"";
        // line 6
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\"> <!--<![endif]-->
<head>
";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 35
        echo "<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body id=\"top\" class=\"";
        // line 42
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">

    <div id=\"preloader\">
            <div id=\"status\">
                <img src=\"";
        // line 46
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/preloader.gif\" height=\"64\" width=\"64\" alt=\"\">
            </div>
    </div>

    ";
        // line 50
        $this->displayBlock('header', $context, $blocks);
        // line 53
        echo "
    ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "
    ";
        // line 58
        $this->displayBlock('footer', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 76
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
</body>
</html>
";
    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        // line 9
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 10
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 14
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 14)->display($context);
        // line 15
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 16
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 17
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "    
    
    <script src=\"";
        // line 33
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/js/modernizr.js\"></script>
";
    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 20
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://lib/bootstrap/css/bootstrap.min.css", 1 => 101), "method");
        // line 21
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "https://fonts.googleapis.com/css?family=Lato", 1 => 100), "method");
        // line 22
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900", 1 => 99), "method");
        // line 23
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "https://fonts.googleapis.com/css?family=Muli", 1 => 98), "method");
        // line 24
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://lib/font-awesome/css/font-awesome.min.css", 1 => 97), "method");
        // line 25
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://lib/simple-line-icons/css/simple-line-icons.css", 1 => 96), "method");
        // line 26
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://lib/device-mockups/device-mockups.min.css", 1 => 95), "method");
        // line 27
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/new-age.min.css", 1 => 94), "method");
        // line 28
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css", 1 => 93), "method");
        // line 29
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/toggle.css", 1 => 92), "method");
        // line 30
        echo "    ";
    }

    // line 50
    public function block_header($context, array $blocks = array())
    {
        // line 51
        echo "        ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 51)->display($context);
        // line 52
        echo "    ";
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        // line 55
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "    ";
    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
    }

    // line 58
    public function block_footer($context, array $blocks = array())
    {
        // line 59
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 59)->display($context);
        // line 60
        echo "    ";
    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        // line 63
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 64
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://lib/bootstrap/js/bootstrap.min.js"), "method");
        // line 65
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"), "method");
        // line 66
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery-migrate-1.2.1.min.js"), "method");
        // line 67
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.flexslider.js"), "method");
        // line 68
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/waypoints.js"), "method");
        // line 69
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.fittext.js"), "method");
        // line 70
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.fitvids.js"), "method");
        // line 71
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/imagelightbox.js"), "method");
        // line 72
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.prettyPhoto.js"), "method");
        // line 73
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/main.js"), "method");
        // line 74
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/new-age.min.js"), "method");
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 74,  248 => 73,  245 => 72,  242 => 71,  239 => 70,  236 => 69,  233 => 68,  230 => 67,  227 => 66,  224 => 65,  221 => 64,  218 => 63,  215 => 62,  211 => 60,  208 => 59,  205 => 58,  200 => 55,  196 => 56,  193 => 55,  190 => 54,  186 => 52,  183 => 51,  180 => 50,  176 => 30,  173 => 29,  170 => 28,  167 => 27,  164 => 26,  161 => 25,  158 => 24,  155 => 23,  152 => 22,  149 => 21,  146 => 20,  143 => 19,  137 => 33,  131 => 31,  129 => 19,  124 => 17,  120 => 16,  117 => 15,  115 => 14,  104 => 10,  101 => 9,  98 => 8,  90 => 76,  88 => 62,  85 => 61,  83 => 58,  80 => 57,  78 => 54,  75 => 53,  73 => 50,  66 => 46,  59 => 42,  50 => 35,  48 => 8,  43 => 6,  39 => 5,  35 => 4,  31 => 3,  28 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<!--[if lt IE 8 ]><html class=\"no-js ie ie7\" lang=\"{{ grav.language.getLanguage ?: 'en' }}\"> <![endif]-->
<!--[if IE 8 ]><html class=\"no-js ie ie8\" lang=\"{{ grav.language.getLanguage ?: 'en' }}\"> <![endif]-->
<!--[if IE 9 ]><html class=\"no-js ie ie9\" lang=\"{{ grav.language.getLanguage ?: 'en' }}\"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class=\"no-js\" lang=\"{{ grav.language.getLanguage ?: 'en' }}\"> <!--<![endif]-->
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('theme://lib/bootstrap/css/bootstrap.min.css', 101) %}
        {% do assets.addCss('https://fonts.googleapis.com/css?family=Lato', 100) %}
        {% do assets.addCss('https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900', 99) %}
        {% do assets.addCss('https://fonts.googleapis.com/css?family=Muli', 98) %}
        {% do assets.addCss('theme://lib/font-awesome/css/font-awesome.min.css', 97) %}
        {% do assets.addCss('theme://lib/simple-line-icons/css/simple-line-icons.css', 96) %}
        {% do assets.addCss('theme://lib/device-mockups/device-mockups.min.css', 95) %}
        {% do assets.addCss('theme://css/new-age.min.css', 94) %}
        {% do assets.addCss('theme://css/custom.css', 93) %}
        {% do assets.addCss('theme://css/toggle.css', 92) %}
    {% endblock %}
    {{ assets.css() }}    
    
    <script src=\"{{ theme_url }}/js/modernizr.js\"></script>
{% endblock head%}
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">

    <div id=\"preloader\">
            <div id=\"status\">
                <img src=\"{{ theme_url }}/images/preloader.gif\" height=\"64\" width=\"64\" alt=\"\">
            </div>
    </div>

    {% block header %}
        {% include 'partials/header.html.twig' %}
    {% endblock %}

    {% block body %}
        {% block content %}{% endblock %}
    {% endblock %}

    {% block footer %}
        {% include 'partials/footer.html.twig' %}
    {% endblock %}

{% block javascripts %}
    {% do assets.add('jquery',101) %}
    {% do assets.addJs('theme://lib/bootstrap/js/bootstrap.min.js') %}
    {% do assets.addJs('https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js') %}
    {% do assets.addJs('theme://js/jquery-migrate-1.2.1.min.js') %}
    {% do assets.addJs('theme://js/jquery.flexslider.js') %}
    {% do assets.addJs('theme://js/waypoints.js') %}
    {% do assets.addJs('theme://js/jquery.fittext.js') %}
    {% do assets.addJs('theme://js/jquery.fitvids.js') %}
    {% do assets.addJs('theme://js/imagelightbox.js') %}
    {% do assets.addJs('theme://js/jquery.prettyPhoto.js') %}
    {% do assets.addJs('theme://js/main.js') %}
    {% do assets.addJs('theme://js/new-age.min.js') %}
{% endblock %}
{{ assets.js() }}
</body>
</html>
", "partials/base.html.twig", "/home/viraj2252/grav.tradehero.mobi/user/themes/vjtest/templates/partials/base.html.twig");
    }
}
