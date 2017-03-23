<?php

/* partials/navigation.html.twig */
class __TwigTemplate_12ca2d006b9229f625319f676e074ce90853fa08cbc8d3d4fc38672c129d10e4 extends Twig_Template
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
        echo "<ul id=\"nav\" class=\"nav navbar-nav navbar-right\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 3
            echo "        ";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 4
                echo "            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 5
                echo "                <li class=\"";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\">
                    <a href=\"";
                // line 6
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
                        ";
                // line 7
                echo $this->getAttribute($context["page"], "menu", array());
                echo "
                    </a>
                </li>
            ";
            }
            // line 11
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 13
            echo "            <li>
                <a href=\"";
            // line 14
            if (twig_in_filter("#", $this->getAttribute($context["mitem"], "link", array()))) {
                echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
                echo "/";
                echo $this->getAttribute($context["mitem"], "link", array());
            } else {
                echo $this->getAttribute($context["mitem"], "link", array());
            }
            echo "\" ";
            if (twig_in_filter( !"#", $this->getAttribute($context["mitem"], "link", array()))) {
                echo "class=\"smoothscroll\"";
            }
            echo ">";
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
        <li>
                        <a class=\"page-scroll\" href=\"#intro\">Intro</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#whytradehero\">Why TradeHero</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#academy\">Academy</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#heros\">Heros</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#blog\">Blog</a>
                    </li>
    </ul>        ";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 17,  62 => 14,  59 => 13,  54 => 12,  48 => 11,  41 => 7,  37 => 6,  32 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul id=\"nav\" class=\"nav navbar-nav navbar-right\">
    {% for page in pages.children %}
        {% if page.visible %}
            {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
                <li class=\"{{ current_page }}\">
                    <a href=\"{{ page.url }}\">
                        {{ page.menu }}
                    </a>
                </li>
            {% endif %}
        {% endfor %}
        {% for mitem in site.menu %}
            <li>
                <a href=\"{% if \"#\" in mitem.link %}{{ base_url_absolute }}/{{ mitem.link }}{% else %}{{ mitem.link }}{% endif %}\" {% if not \"#\" in mitem.link  %}class=\"smoothscroll\"{% endif %}>{{ mitem.text }}</a>
            </li>
        {% endfor %}

        <li>
                        <a class=\"page-scroll\" href=\"#intro\">Intro</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#whytradehero\">Why TradeHero</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#academy\">Academy</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#heros\">Heros</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#blog\">Blog</a>
                    </li>
    </ul>        ", "partials/navigation.html.twig", "/home/viraj2252/grav.tradehero.mobi/user/themes/vjtest/templates/partials/navigation.html.twig");
    }
}
