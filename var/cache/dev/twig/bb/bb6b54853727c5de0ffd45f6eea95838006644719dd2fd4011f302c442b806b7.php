<?php

/* admin/products/product/new.html.twig */
class __TwigTemplate_352fa3d1965e04246ec1ecd4829444cc67a7e7fb291f68e4418b49f3a68cbd28 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/products/product/new.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/products/product/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/products/product/new.html.twig"));

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

        echo "Yeni Ürün";
        
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
        $this->loadTemplate("admin/navbar.twig", "admin/products/product/new.html.twig", 5)->display($context);
        
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
        $this->loadTemplate("admin/sidebar.twig", "admin/products/product/new.html.twig", 7)->display($context);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "
    <div class=\"form-panel\">
        <h4><i class=\"fa fa-angle-right\"></i> Yeni Ürün Ekleme</h4>
        <hr>
        <div class=\"form\">

            <form class=\"cmxform form-horizontal style-form\" name=\"product\" method=\"post\">
                <div id=\"product\">
                    <div class=\"form-group \">
                        <label class=\"control-label col-lg-2\">Kategori Adı</label>
                        <div class=\"col-lg-10\">
                            <select name=\"product[subcategoryid]\" class=\"form-control\">
                                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 24
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["cat"], "parentid", array()) != "0")) {
                // line 25
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 25, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 26
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["cat"], "parentid", array()) == twig_get_attribute($this->env, $this->source, $context["category"], "id", array()))) {
                        // line 27
                        echo "                                                <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", array()), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "title", array()), "html", null, true);
                        echo "</option>
                                            ";
                    }
                    // line 29
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "                                    ";
            }
            // line 31
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                            </select>
                        </div>
                    </div>
                    <div class=\"form-group \">
                        <label class=\"control-label col-lg-2\" for=\"product_urunadi\" class=\"required\">Ürün Adı</label>
                        <div class=\"col-lg-10\">
                            <input type=\"text\" class=\"form-control\" id=\"product_urunadi\" name=\"product[urunadi]\" required=\"required\" maxlength=\"255\">
                        </div> </div>
                    <div class=\"form-group \">
                        <label class=\"control-label col-lg-2\" for=\"product_marka\" class=\"required\">Ürün Markası</label>
                        <div class=\"col-lg-10\">
                            <input type=\"text\" class=\"form-control\" id=\"product_marka\" name=\"product[marka]\" required=\"required\" maxlength=\"255\">
                        </div> </div>
                    <div class=\"form-group \">
                        <label class=\"control-label col-lg-2\" for=\"product_fiyat\" class=\"required\">Ürün Fiyatı</label>
                        <div class=\"col-lg-10\">
                            <input type=\"number\" class=\"form-control\" id=\"product_fiyat\" name=\"product[fiyat]\" required=\"required\">
                        </div> </div>
                    <div class=\"form-group \">
                        <label class=\"control-label col-lg-2\" for=\"product_stok\" class=\"required\">Stok Bilgisi</label>
                        <div class=\"col-lg-10\">
                            <input type=\"number\" class=\"form-control\" id=\"product_stok\" name=\"product[stok]\" required=\"required\" maxlength=\"255\">
                        </div> </div>

                    <div class=\"form-group \">
                        <label class=\"control-label col-lg-2\">Teknik Özellikler</label>
                        <div class=\"col-lg-10\">
                            <textarea id=\"tko\" name=\"product[teknikozellikler]\" rows=\"10\" cols=\"100\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 59, $this->source); })()), "teknikozellikler", array()), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>
                    <div class=\"form-group \">
                        <label class=\"control-label col-lg-2\">Diğer Özellikler</label>
                        <div class=\"col-lg-10\">
                            <textarea id=\"dgo\" name=\"product[digerozellikler]\" rows=\"10\" cols=\"100\">";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 65, $this->source); })()), "digerozellikler", array()), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>
                    <div class=\"form-group \">
                        <label class=\"control-label col-lg-2\">Ürün Durumu</label>
                        <div class=\"col-lg-10\">
                            <select name=\"product[durum]\" class=\"form-control\">
                                <option value=\"true\">Aktif</option>
                                <option value=\"false\">Devre Dışı</option>
                            </select>
                        </div>
                    </div>
                    <input type=\"hidden\" id=\"product_form\" name=\"token\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("products-form"), "html", null, true);
        echo "\">

                    <a style=\"margin-left:10px\" class=\"btn btn-primary\" href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        echo "\">Geri Dön</a>
                    <input class=\"btn btn-primary\" type=\"submit\" value=\"Kaydet\">

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
        return "admin/products/product/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 79,  220 => 77,  205 => 65,  196 => 59,  167 => 32,  161 => 31,  158 => 30,  152 => 29,  142 => 27,  139 => 26,  134 => 25,  131 => 24,  127 => 23,  113 => 11,  104 => 10,  84 => 7,  65 => 5,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'adminbase.html.twig' %}

{% block title %}Yeni Ürün{% endblock %}

{% block navbar %} {% include 'admin/navbar.twig' %}{% endblock %}

{% block sidebar %} {% include 'admin/sidebar.twig' %} {% endblock %}


{% block content %}

    <div class=\"form-panel\">
        <h4><i class=\"fa fa-angle-right\"></i> Yeni Ürün Ekleme</h4>
        <hr>
        <div class=\"form\">

            <form class=\"cmxform form-horizontal style-form\" name=\"product\" method=\"post\">
                <div id=\"product\">
                    <div class=\"form-group \">
                        <label class=\"control-label col-lg-2\">Kategori Adı</label>
                        <div class=\"col-lg-10\">
                            <select name=\"product[subcategoryid]\" class=\"form-control\">
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
                            <input type=\"text\" class=\"form-control\" id=\"product_urunadi\" name=\"product[urunadi]\" required=\"required\" maxlength=\"255\">
                        </div> </div>
                    <div class=\"form-group \">
                        <label class=\"control-label col-lg-2\" for=\"product_marka\" class=\"required\">Ürün Markası</label>
                        <div class=\"col-lg-10\">
                            <input type=\"text\" class=\"form-control\" id=\"product_marka\" name=\"product[marka]\" required=\"required\" maxlength=\"255\">
                        </div> </div>
                    <div class=\"form-group \">
                        <label class=\"control-label col-lg-2\" for=\"product_fiyat\" class=\"required\">Ürün Fiyatı</label>
                        <div class=\"col-lg-10\">
                            <input type=\"number\" class=\"form-control\" id=\"product_fiyat\" name=\"product[fiyat]\" required=\"required\">
                        </div> </div>
                    <div class=\"form-group \">
                        <label class=\"control-label col-lg-2\" for=\"product_stok\" class=\"required\">Stok Bilgisi</label>
                        <div class=\"col-lg-10\">
                            <input type=\"number\" class=\"form-control\" id=\"product_stok\" name=\"product[stok]\" required=\"required\" maxlength=\"255\">
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
                                <option value=\"true\">Aktif</option>
                                <option value=\"false\">Devre Dışı</option>
                            </select>
                        </div>
                    </div>
                    <input type=\"hidden\" id=\"product_form\" name=\"token\" value=\"{{ csrf_token('products-form') }}\">

                    <a style=\"margin-left:10px\" class=\"btn btn-primary\" href=\"{{ path('product_index') }}\">Geri Dön</a>
                    <input class=\"btn btn-primary\" type=\"submit\" value=\"Kaydet\">

                    <script>
                        CKEDITOR.replace('tko');
                        CKEDITOR.replace('dgo');
                    </script>
            </form>
        </div>
    </div>
{% endblock %}
", "admin/products/product/new.html.twig", "C:\\xampp\\htdocs\\PhpOdev-2\\templates\\admin\\products\\product\\new.html.twig");
    }
}
