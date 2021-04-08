<?php

/* home/_menu.html.twig */
class __TwigTemplate_a933940cc1e0c1b8b86e14abbdec989220b7dad1a1d56a2f9deb588c572a5a58 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/_menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/_menu.html.twig"));

        // line 1
        echo "<style>
    .menu-content {
        margin-left:160px;
        margin-top:-40px;
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .menu-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        background: white;
    }

    .menu-content a:hover {background-color: #2fdab8;color:white;}

    .menu:hover .menu-content {display: block;}

</style>

<div class=\"ban-top\">
    <div class=\"container\">
        <div class=\"top_nav_left\">
            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse menu--shylock\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav menu__list\">
                            <li class=\"active menu__item menu__item--current\"><a class=\"menu__link\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home <span class=\"sr-only\">(current)</span></a></li>
                            <li class=\" menu__item\"><a class=\"menu__link\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_aboutus");
        echo "\">About</a></li>

                            <li class=\"menu__item dropdown menu__item--current\">
                                <a class=\"menu__link\" href=\"#\" data-toggle=\"dropdown\" aria-expanded=\"true\">Categories<b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu agile_short_dropdown\">
                                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 51
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "parentid", array()) == "0")) {
                // line 52
                echo "                                        <li class=\"menu\">
                                                <a href=\"#\">";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", array()), "html", null, true);
                echo "</a>
                                            <div class=\"menu-content\">
                                                ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 55, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 56
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["cat"], "parentid", array()) == twig_get_attribute($this->env, $this->source, $context["category"], "id", array()))) {
                        // line 57
                        echo "                                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_products", array("id" => twig_get_attribute($this->env, $this->source, $context["cat"], "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "title", array()), "html", null, true);
                        echo "</a>
                                                ";
                    }
                    // line 59
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "                                            </div>
                                        </li>

                                    ";
            }
            // line 64
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                                </ul>
                            </li>
                            <li class=\" menu__item\"><a class=\"menu__link\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_contact");
        echo "\">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class=\"top_nav_right\">
            <div class=\"wthreecartaits wthreecartaits2 cart cart box_1\">

                <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shopcart_index");
        echo "\"><button class=\"w3view-cart\" type=\"submit\" name=\"submit\" value=\"\"><i class=\"fa fa-cart-arrow-down\" aria-hidden=\"true\"></i></button></a>

            </div>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 76,  138 => 67,  134 => 65,  128 => 64,  122 => 60,  116 => 59,  108 => 57,  105 => 56,  101 => 55,  96 => 53,  93 => 52,  90 => 51,  86 => 50,  78 => 45,  74 => 44,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style>
    .menu-content {
        margin-left:160px;
        margin-top:-40px;
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .menu-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        background: white;
    }

    .menu-content a:hover {background-color: #2fdab8;color:white;}

    .menu:hover .menu-content {display: block;}

</style>

<div class=\"ban-top\">
    <div class=\"container\">
        <div class=\"top_nav_left\">
            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse menu--shylock\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav menu__list\">
                            <li class=\"active menu__item menu__item--current\"><a class=\"menu__link\" href=\"{{ path('home') }}\">Home <span class=\"sr-only\">(current)</span></a></li>
                            <li class=\" menu__item\"><a class=\"menu__link\" href=\"{{ path('home_aboutus') }}\">About</a></li>

                            <li class=\"menu__item dropdown menu__item--current\">
                                <a class=\"menu__link\" href=\"#\" data-toggle=\"dropdown\" aria-expanded=\"true\">Categories<b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu agile_short_dropdown\">
                                    {% for category in categories %}
                                    {% if category.parentid == '0' %}
                                        <li class=\"menu\">
                                                <a href=\"#\">{{ category.title }}</a>
                                            <div class=\"menu-content\">
                                                {% for cat in categories %}
                                                {% if cat.parentid == category.id %}
                                                <a href=\"{{ path('home_products',{'id':cat.id}) }}\">{{ cat.title }}</a>
                                                {% endif %}
                                                {% endfor %}
                                            </div>
                                        </li>

                                    {% endif %}
                                    {% endfor %}
                                </ul>
                            </li>
                            <li class=\" menu__item\"><a class=\"menu__link\" href=\"{{ path('home_contact') }}\">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class=\"top_nav_right\">
            <div class=\"wthreecartaits wthreecartaits2 cart cart box_1\">

                <a href=\"{{ path('shopcart_index') }}\"><button class=\"w3view-cart\" type=\"submit\" name=\"submit\" value=\"\"><i class=\"fa fa-cart-arrow-down\" aria-hidden=\"true\"></i></button></a>

            </div>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
</div>", "home/_menu.html.twig", "C:\\xampp\\htdocs\\PhpOdev-2\\templates\\home\\_menu.html.twig");
    }
}
