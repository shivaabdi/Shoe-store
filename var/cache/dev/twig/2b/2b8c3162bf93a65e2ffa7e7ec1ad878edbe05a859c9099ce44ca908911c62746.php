<?php

/* home/products/products.html.twig */
class __TwigTemplate_2229917a9aff77c6130316a855b37f38301b933d27b46ed34b2ae85ad957fa09 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("frontbase.html.twig", "home/products/products.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'slider' => array($this, 'block_slider'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "frontbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/products/products.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/products/products.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mert Bilgisayar Anasayfa";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    ";
        echo twig_include($this->env, $context, "home/_header.html.twig");
        echo "
    ";
        // line 7
        echo twig_include($this->env, $context, "alerts.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_menu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 11
        echo "    ";
        echo twig_include($this->env, $context, "home/_menu.html.twig");
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_slider($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        echo " ";
        echo twig_include($this->env, $context, "home/_slider.html.twig");
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 18
        echo "
    <div style=\"padding-bottom:40px;\" class=\"single-pro\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 21
            echo "        <div class=\"col-md-3 product-men\">
            <div class=\"men-pro-item simpleCart_shelfItem\">
                <div class=\"men-thumb-item\">

                    ";
            // line 25
            $context["break"] = false;
            // line 26
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["resimler"]) || array_key_exists("resimler", $context) ? $context["resimler"] : (function () { throw new Twig_Error_Runtime('Variable "resimler" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["resim"]) {
                if ( !(isset($context["break"]) || array_key_exists("break", $context) ? $context["break"] : (function () { throw new Twig_Error_Runtime('Variable "break" does not exist.', 26, $this->source); })())) {
                    // line 27
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "id", array()) == twig_get_attribute($this->env, $this->source, $context["resim"], "urunid", array()))) {
                        // line 28
                        echo "                            ";
                        $context["break"] = true;
                        // line 29
                        echo "                            <img height=\"250\" src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads"), "html", null, true);
                        echo "/images/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resim"], "resim", array()), "html", null, true);
                        echo "\" alt=\"\" class=\"pro-image-front\">
                            <img height=\"250\" src=\"";
                        // line 30
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads"), "html", null, true);
                        echo "/images/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resim"], "resim", array()), "html", null, true);
                        echo "\" alt=\"\" class=\"pro-image-back\">
                        ";
                    }
                    // line 32
                    echo "                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resim'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "
                    <div class=\"men-cart-pro\">
                        <div class=\"inner-men-cart-pro\">
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_detail", array("id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", array()))), "html", null, true);
            echo "\" class=\"link-product-add-cart\">İncele</a>
                        </div>
                    </div>

                </div>
                <div class=\"item-info-product \">
                    <h4><a href=\"single.html\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "urunadi", array()), "html", null, true);
            echo "</a></h4>
                    <div class=\"info-product-price\">
                        <span class=\"item_price\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "fiyat", array()), "html", null, true);
            echo " ₺</span>
                        ";
            // line 46
            echo "                    </div>
                    <div class=\"snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2\">
                        <form action=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_detail", array("id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", array()))), "html", null, true);
            echo "\" method=\"post\">
                            <fieldset>
                                <input type=\"submit\" name=\"submit\" value=\"Sepete Ekle\" class=\"button\">
                            </fieldset>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        <div class=\"clearfix\"></div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " ";
        echo twig_include($this->env, $context, "home/_footer.html.twig");
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/products/products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 64,  238 => 59,  221 => 48,  217 => 46,  213 => 44,  208 => 42,  199 => 36,  194 => 33,  187 => 32,  180 => 30,  173 => 29,  170 => 28,  167 => 27,  161 => 26,  159 => 25,  153 => 21,  149 => 20,  145 => 18,  136 => 17,  116 => 15,  102 => 11,  93 => 10,  81 => 7,  76 => 6,  67 => 5,  49 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'frontbase.html.twig' %}

{% block title %}Mert Bilgisayar Anasayfa{% endblock %}

{% block header %}
    {{ include ('home/_header.html.twig') }}
    {{ include ('alerts.html.twig') }}
{% endblock %}

{% block menu %}
    {{ include ('home/_menu.html.twig') }}

{% endblock %}

{% block slider %} {{ include ('home/_slider.html.twig') }} {% endblock %}

{% block main %}

    <div style=\"padding-bottom:40px;\" class=\"single-pro\">
        {% for product in products %}
        <div class=\"col-md-3 product-men\">
            <div class=\"men-pro-item simpleCart_shelfItem\">
                <div class=\"men-thumb-item\">

                    {% set break = false %}
                    {% for resim in resimler if not break %}
                        {% if product.id == resim.urunid %}
                            {% set break = true %}
                            <img height=\"250\" src=\"{{ asset('uploads') }}/images/{{ resim.resim }}\" alt=\"\" class=\"pro-image-front\">
                            <img height=\"250\" src=\"{{ asset('uploads') }}/images/{{ resim.resim }}\" alt=\"\" class=\"pro-image-back\">
                        {% endif %}
                    {% endfor %}

                    <div class=\"men-cart-pro\">
                        <div class=\"inner-men-cart-pro\">
                            <a href=\"{{ path('product_detail',{'id':product.id}) }}\" class=\"link-product-add-cart\">İncele</a>
                        </div>
                    </div>

                </div>
                <div class=\"item-info-product \">
                    <h4><a href=\"single.html\">{{ product.urunadi }}</a></h4>
                    <div class=\"info-product-price\">
                        <span class=\"item_price\">{{ product.fiyat }} ₺</span>
                        {#<del>\$189.71</del>#}
                    </div>
                    <div class=\"snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2\">
                        <form action=\"{{ path('product_detail',{'id':product.id}) }}\" method=\"post\">
                            <fieldset>
                                <input type=\"submit\" name=\"submit\" value=\"Sepete Ekle\" class=\"button\">
                            </fieldset>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        {% endfor %}
        <div class=\"clearfix\"></div>
    </div>

{% endblock %}

{% block footer %} {{ include ('home/_footer.html.twig') }} {% endblock %}", "home/products/products.html.twig", "/opt/lampp/htdocs/shivaphp/templates/home/products/products.html.twig");
    }
}
