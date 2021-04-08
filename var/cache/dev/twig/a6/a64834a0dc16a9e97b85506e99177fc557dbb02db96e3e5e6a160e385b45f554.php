<?php

/* admin/products/product/edit.html.twig */
class __TwigTemplate_c22948b99a9685339c0692b0bea4dd190becaf211b95cad6f24b24325f25a1a1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/products/product/edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar' => array($this, 'block_navbar'),
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "adminbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/products/product/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/products/product/edit.html.twig"));

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

        echo "Ürün Düzenleme";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        echo " ";
        $this->loadTemplate("admin/navbar.twig", "admin/products/product/edit.html.twig", 5)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        echo " ";
        $this->loadTemplate("admin/sidebar.twig", "admin/products/product/edit.html.twig", 7)->display($context);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
    <div class=\"form-panel\">
        <h4><i class=\"fa fa-angle-right\"></i> Ürün Düzenle</h4>
        <hr>
        <div class=\"form\">

            <form class=\"cmxform form-horizontal style-form\" name=\"product\" method=\"post\">
                <div id=\"product\">
                    <div class=\"form-group \">
                        <label class=\"control-label col-lg-2\">Kategori Adı</label>
                        <div class=\"col-lg-10\">
                            <select name=\"product[subcategoryid]\" class=\"form-control\">
                                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 23
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 23, $this->source); })()), "categoryid", array()) == twig_get_attribute($this->env, $this->source, $context["cat"], "id", array()))) {
                // line 24
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 24, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 25
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 25, $this->source); })()), "subcategoryid", array()) == twig_get_attribute($this->env, $this->source, $context["category"], "id", array()))) {
                        // line 26
                        echo "                                                <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "title", array()), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", array()), "html", null, true);
                        echo "</option>
                                            ";
                    }
                    // line 28
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "                                    ";
            }
            // line 30
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 32
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["cat"], "parentid", array()) != "0")) {
                // line 33
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 33, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 34
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["cat"], "parentid", array()) == twig_get_attribute($this->env, $this->source, $context["category"], "id", array()))) {
                        // line 35
                        echo "                                                <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", array()), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "title", array()), "html", null, true);
                        echo "</option>
                                            ";
                    }
                    // line 37
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "                                    ";
            }
            // line 39
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                            </select>
                        </div>
                    </div>
                    <div class=\"form-group \">
                        <label class=\"control-label col-lg-2\" for=\"product_urunadi\" class=\"required\">Ürün Adı</label>
                        <div class=\"col-lg-10\">
                            <input type=\"text\" class=\"form-control\" id=\"product_urunadi\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 46, $this->source); })()), "urunadi", array()), "html", null, true);
        echo "\" name=\"product[urunadi]\" required=\"required\" maxlength=\"255\">
                        </div> </div>
                    <div class=\"form-group \">
                        <label class=\"control-label col-lg-2\" for=\"product_marka\" class=\"required\">Ürün Markası</label>
                        <div class=\"col-lg-10\">
                            <input type=\"text\" class=\"form-control\" id=\"product_marka\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 51, $this->source); })()), "marka", array()), "html", null, true);
        echo "\" name=\"product[marka]\" required=\"required\" maxlength=\"255\">
                        </div> </div>
                    <div class=\"form-group \">
                        <label class=\"control-label col-lg-2\" for=\"product_fiyat\" class=\"required\">Ürün Fiyatı</label>
                        <div class=\"col-lg-10\">
                            <input type=\"number\" class=\"form-control\" id=\"product_fiyat\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 56, $this->source); })()), "fiyat", array()), "html", null, true);
        echo "\" name=\"product[fiyat]\" required=\"required\">
                        </div> </div>
                    <div class=\"form-group \">
                        <label class=\"control-label col-lg-2\" for=\"product_stok\" class=\"required\">Stok Bilgisi</label>
                        <div class=\"col-lg-10\">
                            <input type=\"number\" class=\"form-control\" id=\"product_stok\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 61, $this->source); })()), "stok", array()), "html", null, true);
        echo "\" name=\"product[stok]\" required=\"required\" maxlength=\"255\">
                        </div> </div>

                    <div class=\"form-group \">
                        <label class=\"control-label col-lg-2\">Teknik Özellikler</label>
                        <div class=\"col-lg-10\">
                            <textarea id=\"tko\" name=\"product[teknikozellikler]\" rows=\"10\" cols=\"100\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 67, $this->source); })()), "teknikozellikler", array()), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>
                    <div class=\"form-group \">
                        <label class=\"control-label col-lg-2\">Diğer Özellikler</label>
                        <div class=\"col-lg-10\">
                            <textarea id=\"dgo\" name=\"product[digerozellikler]\" rows=\"10\" cols=\"100\">";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 73, $this->source); })()), "digerozellikler", array()), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>
                    <div class=\"form-group \">
                        <label class=\"control-label col-lg-2\">Ürün Durumu</label>
                        <div class=\"col-lg-10\">
                            <select name=\"product[durum]\" class=\"form-control\">
                                <option value=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 80, $this->source); })()), "durum", array()), "html", null, true);
        echo "\">
                                    ";
        // line 81
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 81, $this->source); })()), "durum", array()) == "true")) {
            // line 82
            echo "                                        Aktif
                                    ";
        } else {
            // line 84
            echo "                                        Devre Dışı
                                    ";
        }
        // line 86
        echo "                                </option>
                                <option value=\"true\">Aktif</option>
                                <option value=\"false\">Devre Dışı</option>
                            </select>
                        </div>
                    </div>
                    <input type=\"hidden\" id=\"product__token\" name=\"product[categoryid]\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 92, $this->source); })()), "categoryid", array()), "html", null, true);
        echo "\"></div>
                <input type=\"hidden\" id=\"product__token\" name=\"product[_token]\" value=\"EUB1lr1fI0RN4itnQHzaDK_-PUkUDcDvZZ0Mk4aVXL8\"></div>
        <a style=\"margin-left:10px\" class=\"btn btn-primary\" href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        echo "\">Geri Dön</a>
        <input class=\"btn btn-info\" type=\"submit\" value=\"Kaydet\">

        <script>
            CKEDITOR.replace('tko');
            CKEDITOR.replace('dgo');
        </script>
        </form>

        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/products/product/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 94,  290 => 92,  282 => 86,  278 => 84,  274 => 82,  272 => 81,  268 => 80,  258 => 73,  249 => 67,  240 => 61,  232 => 56,  224 => 51,  216 => 46,  208 => 40,  202 => 39,  199 => 38,  193 => 37,  183 => 35,  180 => 34,  175 => 33,  172 => 32,  167 => 31,  161 => 30,  158 => 29,  152 => 28,  142 => 26,  139 => 25,  134 => 24,  131 => 23,  127 => 22,  113 => 10,  104 => 9,  84 => 7,  65 => 5,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'adminbase.html.twig' %}

{% block title %}Ürün Düzenleme{% endblock %}

{% block navbar %} {% include 'admin/navbar.twig' %}{% endblock %}

{% block sidebar %} {% include 'admin/sidebar.twig' %} {% endblock %}

{% block content %}

    <div class=\"form-panel\">
        <h4><i class=\"fa fa-angle-right\"></i> Ürün Düzenle</h4>
        <hr>
        <div class=\"form\">

            <form class=\"cmxform form-horizontal style-form\" name=\"product\" method=\"post\">
                <div id=\"product\">
                    <div class=\"form-group \">
                        <label class=\"control-label col-lg-2\">Kategori Adı</label>
                        <div class=\"col-lg-10\">
                            <select name=\"product[subcategoryid]\" class=\"form-control\">
                                {% for cat in categories %}
                                    {% if product.categoryid == cat.id %}
                                        {% for category in categories %}
                                            {% if product.subcategoryid == category.id %}
                                                <option value=\"{{ category.id }}\">{{ cat.title }} - {{ category.title }}</option>
                                            {% endif %}
                                        {% endfor %}
                                    {% endif %}
                                {% endfor %}
                                {% for cat in categories %}
                                    {% if cat.parentid != '0' %}
                                        {% for category in categories %}
                                            {% if cat.parentid == category.id %}
                                                <option value=\"{{ cat.id }}\">{{ category.title }} - {{ cat.title }}</option>
                                            {% endif %}
                                        {% endfor %}
                                    {% endif %}
                                {% endfor %}
                            </select>
                        </div>
                    </div>
                    <div class=\"form-group \">
                        <label class=\"control-label col-lg-2\" for=\"product_urunadi\" class=\"required\">Ürün Adı</label>
                        <div class=\"col-lg-10\">
                            <input type=\"text\" class=\"form-control\" id=\"product_urunadi\" value=\"{{ product.urunadi }}\" name=\"product[urunadi]\" required=\"required\" maxlength=\"255\">
                        </div> </div>
                    <div class=\"form-group \">
                        <label class=\"control-label col-lg-2\" for=\"product_marka\" class=\"required\">Ürün Markası</label>
                        <div class=\"col-lg-10\">
                            <input type=\"text\" class=\"form-control\" id=\"product_marka\" value=\"{{ product.marka }}\" name=\"product[marka]\" required=\"required\" maxlength=\"255\">
                        </div> </div>
                    <div class=\"form-group \">
                        <label class=\"control-label col-lg-2\" for=\"product_fiyat\" class=\"required\">Ürün Fiyatı</label>
                        <div class=\"col-lg-10\">
                            <input type=\"number\" class=\"form-control\" id=\"product_fiyat\" value=\"{{ product.fiyat }}\" name=\"product[fiyat]\" required=\"required\">
                        </div> </div>
                    <div class=\"form-group \">
                        <label class=\"control-label col-lg-2\" for=\"product_stok\" class=\"required\">Stok Bilgisi</label>
                        <div class=\"col-lg-10\">
                            <input type=\"number\" class=\"form-control\" id=\"product_stok\" value=\"{{ product.stok }}\" name=\"product[stok]\" required=\"required\" maxlength=\"255\">
                        </div> </div>

                    <div class=\"form-group \">
                        <label class=\"control-label col-lg-2\">Teknik Özellikler</label>
                        <div class=\"col-lg-10\">
                            <textarea id=\"tko\" name=\"product[teknikozellikler]\" rows=\"10\" cols=\"100\">{{ product.teknikozellikler }}</textarea>
                        </div>
                    </div>
                    <div class=\"form-group \">
                        <label class=\"control-label col-lg-2\">Diğer Özellikler</label>
                        <div class=\"col-lg-10\">
                            <textarea id=\"dgo\" name=\"product[digerozellikler]\" rows=\"10\" cols=\"100\">{{ product.digerozellikler }}</textarea>
                        </div>
                    </div>
                    <div class=\"form-group \">
                        <label class=\"control-label col-lg-2\">Ürün Durumu</label>
                        <div class=\"col-lg-10\">
                            <select name=\"product[durum]\" class=\"form-control\">
                                <option value=\"{{ product.durum }}\">
                                    {% if product.durum == \"true\" %}
                                        Aktif
                                    {% else %}
                                        Devre Dışı
                                    {% endif %}
                                </option>
                                <option value=\"true\">Aktif</option>
                                <option value=\"false\">Devre Dışı</option>
                            </select>
                        </div>
                    </div>
                    <input type=\"hidden\" id=\"product__token\" name=\"product[categoryid]\" value=\"{{ product.categoryid }}\"></div>
                <input type=\"hidden\" id=\"product__token\" name=\"product[_token]\" value=\"EUB1lr1fI0RN4itnQHzaDK_-PUkUDcDvZZ0Mk4aVXL8\"></div>
        <a style=\"margin-left:10px\" class=\"btn btn-primary\" href=\"{{ path('product_index') }}\">Geri Dön</a>
        <input class=\"btn btn-info\" type=\"submit\" value=\"Kaydet\">

        <script>
            CKEDITOR.replace('tko');
            CKEDITOR.replace('dgo');
        </script>
        </form>

        </div>
    </div>

{% endblock %}
", "admin/products/product/edit.html.twig", "/opt/lampp/htdocs/shivaphp/templates/admin/products/product/edit.html.twig");
    }
}
