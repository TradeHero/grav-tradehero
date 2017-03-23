<?php

/* modular/showcase.html.twig */
class __TwigTemplate_ef16e33d51d5b2f1dcb892f360b7edb404154907c7fedbe2ff833c69fd580157 extends Twig_Template
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
        echo "<section id=\"hero\">
";
        // line 2
        $context["hour"] = twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "G");
        // line 3
        if ((((isset($context["hour"]) ? $context["hour"] : null) >= 9) && ((isset($context["hour"]) ? $context["hour"] : null) < 17))) {
            // line 4
            echo "    <p>Time for cookies!</p>
";
        } else {
            // line 6
            echo "    <p>Time to bake more cookies!</p>
";
        }
        // line 8
        echo " <div class=\"row\">
   <div class=\"twelve columns\">
     <div class=\"hero-text\">
      <h1 class=\"responsive-headline\">";
        // line 11
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h1>
      ";
        // line 12
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
    </div>

    ";
        // line 15
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "buttons", array())) {
            // line 16
            echo "     <div class=\"buttons\">
       ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "buttons", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 18
                echo "         <a class=\"";
                echo $this->getAttribute($context["button"], "class", array());
                echo "\" href=\"";
                echo $this->getAttribute($context["button"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["button"], "text", array());
                echo "</a>
       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "     </div>
   ";
        }
        // line 22
        echo "
   <div class=\"hero-image\">
    ";
        // line 24
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "showcase_image", array()), array(), "array"), "html", array(), "method");
        echo "
  </div>
</div>
</div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/showcase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 24,  75 => 22,  71 => 20,  58 => 18,  54 => 17,  51 => 16,  49 => 15,  43 => 12,  39 => 11,  34 => 8,  30 => 6,  26 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"hero\">
{% set hour = now | date(\"G\") %}
{% if hour >= 9 and hour < 17 %}
    <p>Time for cookies!</p>
{% else %}
    <p>Time to bake more cookies!</p>
{% endif %}
 <div class=\"row\">
   <div class=\"twelve columns\">
     <div class=\"hero-text\">
      <h1 class=\"responsive-headline\">{{ page.header.title }}</h1>
      {{ content }}
    </div>

    {% if page.header.buttons %}
     <div class=\"buttons\">
       {% for button in page.header.buttons %}
         <a class=\"{{ button.class }}\" href=\"{{ button.url }}\">{{ button.text }}</a>
       {% endfor %}
     </div>
   {% endif %}

   <div class=\"hero-image\">
    {{ page.media[page.header.showcase_image].html() }}
  </div>
</div>
</div>
</section>", "modular/showcase.html.twig", "/home/viraj2252/grav.tradehero.mobi/user/themes/woo/templates/modular/showcase.html.twig");
    }
}
