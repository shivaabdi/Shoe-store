<?php

/* admin/products/product/index.html.twig */
class __TwigTemplate_dfdc6a4768f368a2e8eed902908fda1ccbbf49327bf6c71ef3183286383e6ccc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/products/product/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/products/product/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/products/product/index.html.twig"));

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

        echo "Ürünler";
        
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
        $this->loadTemplate("admin/navbar.twig", "admin/products/product/index.html.twig", 5)->display($context);
        
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
        $this->loadTemplate("admin/sidebar.twig", "admin/products/product/index.html.twig", 7)->display($context);
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
        echo "    ";
        echo twig_include($this->env, $context, "alerts.html.twig");
        echo "
    <br>
    <div class=\"content-panel\">
        <h4><i class=\"fa fa-angle-right\"></i> Ürün Listesi</h4>
        <a style=\"float:right;margin-top:-40px;margin-right:20px;\" class=\"btn btn-theme\"
           href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_new");
        echo "\">Yeni Ürün Ekle</a>
        <hr>
        <table class=\"table\">
            <thead>
            <tr>
                <th></th>
                <th>Ana Kategori</th>
                <th>Alt Kategori</th>
                <th>Ürün Adı</th>
                <th>Marka</th>
                <th>Fiyat</th>
                <th>Stok</th>
                <th>Durum</th>
                <th>İşlemler</th>
                <th>Resimler</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 34, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 35
            echo "                <tr>
                    <td></td>
                    <td>
                        ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 38, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 39
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "categoryid", array()) == twig_get_attribute($this->env, $this->source, $context["cat"], "id", array()))) {
                    // line 40
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "title", array()), "html", null, true);
                    echo "
                            ";
                }
                // line 42
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                    </td>
                    <td>
                        ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 45, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 46
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "subcategoryid", array()) == twig_get_attribute($this->env, $this->source, $context["cat"], "id", array()))) {
                    // line 47
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "title", array()), "html", null, true);
                    echo "
                            ";
                }
                // line 49
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                    </td>
                    <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "urunadi", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "marka", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "fiyat", array()), "html", null, true);
            echo " ₺</td>
                    <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "stok", array()), "html", null, true);
            echo " Adet</td>
                    <td>
                        ";
            // line 56
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "durum", array()) == "true")) {
                // line 57
                echo "                            Aktif
                        ";
            } else {
                // line 59
                echo "                            Devre Dışı
                        ";
            }
            // line 61
            echo "                    </td>
                    <td>
                        <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", array("id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", array()))), "html", null, true);
            echo "\">
                            <button class=\"btn btn-info btn-xs\"><i class=\"fa fa-file-text-o\"></i></button>
                        </a>
                        <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", array()))), "html", null, true);
            echo "\">
                            <button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button>
                        </a>
                    </td>
                    <td><a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resimler_new", array("id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", array()))), "html", null, true);
            echo "\">
                            <button class=\"btn btn-primary btn-xs\">Resim Ekle</button>
                        </a></td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 75
            echo "                <tr>
                    <td colspan=\"13\">Kayıt Bulunamadı</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "            </tbody>
        </table>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/products/product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 79,  252 => 75,  242 => 70,  235 => 66,  229 => 63,  225 => 61,  221 => 59,  217 => 57,  215 => 56,  210 => 54,  206 => 53,  202 => 52,  198 => 51,  195 => 50,  189 => 49,  183 => 47,  180 => 46,  176 => 45,  172 => 43,  166 => 42,  160 => 40,  157 => 39,  153 => 38,  148 => 35,  143 => 34,  122 => 16,  113 => 11,  104 => 10,  84 => 7,  65 => 5,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'adminbase.html.twig' %}

{% block title %}Ürünler{% endblock %}

{% block navbar %} {% include 'admin/navbar.twig' %}{% endblock %}

{% block sidebar %} {% include 'admin/sidebar.twig' %} {% endblock %}


{% block content %}
    {{ include('alerts.html.twig') }}
    <br>
    <div class=\"content-panel\">
        <h4><i class=\"fa fa-angle-right\"></i> Ürün Listesi</h4>
        <a style=\"float:right;margin-top:-40px;margin-right:20px;\" class=\"btn btn-theme\"
           href=\"{{ path('product_new') }}\">Yeni Ürün Ekle</a>
        <hr>
        <table class=\"table\">
            <thead>
            <tr>
                <th></th>
                <th>Ana Kategori</th>
                <th>Alt Kategori</th>
                <th>Ürün Adı</th>
                <th>Marka</th>
                <th>Fiyat</th>
                <th>Stok</th>
                <th>Durum</th>
                <th>İşlemler</th>
                <th>Resimler</th>
            </tr>
            </thead>
            <tbody>
            {% for product in products %}
                <tr>
                    <td></td>
                    <td>
                        {% for cat in categories %}
                            {% if product.categoryid == cat.id %}
                                {{ cat.title }}
                            {% endif %}
                        {% endfor %}
                    </td>
                    <td>
                        {% for cat in categories %}
                            {% if product.subcategoryid == cat.id %}
                                {{ cat.title }}
                            {% endif %}
                        {% endfor %}
                    </td>
                    <td>{{ product.urunadi }}</td>
                    <td>{{ product.marka }}</td>
                    <td>{{ product.fiyat }} ₺</td>
                    <td>{{ product.stok }} Adet</td>
                    <td>
                        {% if product.durum == 'true' %}
                            Aktif
                        {% else %}
                            Devre Dışı
                        {% endif %}
                    </td>
                    <td>
                        <a href=\"{{ path('product_show',{'id': product.id}) }}\">
                            <button class=\"btn btn-info btn-xs\"><i class=\"fa fa-file-text-o\"></i></button>
                        </a>
                        <a href=\"{{ path('product_edit',{'id': product.id}) }}\">
                            <button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button>
                        </a>
                    </td>
                    <td><a href=\"{{ path('resimler_new', {'id': product.id}) }}\">
                            <button class=\"btn btn-primary btn-xs\">Resim Ekle</button>
                        </a></td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"13\">Kayıt Bulunamadı</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

    </div>
{% endblock %}
", "admin/products/product/index.html.twig", "C:\\xampp\\htdocs\\PhpOdev-2\\templates\\admin\\products\\product\\index.html.twig");
    }
}
