<?php

/* admin/products/product/show.html.twig */
class __TwigTemplate_16caffe6919a0a58470b016fb9795ce688150d7d6d088ce0db2430092dacb2ab extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/products/product/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/products/product/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/products/product/show.html.twig"));

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

        echo "Ürün Detayı";
        
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
        $this->loadTemplate("admin/navbar.twig", "admin/products/product/show.html.twig", 5)->display($context);
        
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
        $this->loadTemplate("admin/sidebar.twig", "admin/products/product/show.html.twig", 7)->display($context);
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
    <h4><i class=\"fa fa-angle-right\"></i> Ürün - ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 12, $this->source); })()), "id", array()), "html", null, true);
        echo "</h4>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Ana Kategori Adı</th>
                <td>
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 19
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 19, $this->source); })()), "categoryid", array()) == twig_get_attribute($this->env, $this->source, $context["cat"], "id", array()))) {
                // line 20
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "title", array()), "html", null, true);
                echo "
                        ";
            }
            // line 22
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                </td>
            </tr>
            <tr>
                <th>Alt Kategori Adı</th>
                <td>
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 29
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 29, $this->source); })()), "subcategoryid", array()) == twig_get_attribute($this->env, $this->source, $context["cat"], "id", array()))) {
                // line 30
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "title", array()), "html", null, true);
                echo "
                        ";
            }
            // line 32
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                </td>
            </tr>
            <tr>
                <th>Ürün Adı</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 37, $this->source); })()), "urunadi", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Marka</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 41, $this->source); })()), "marka", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fiyat</th>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 45, $this->source); })()), "fiyat", array()), "html", null, true);
        echo " ₺</td>
            </tr>
            <tr>
                <th>Stok</th>
                <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 49, $this->source); })()), "stok", array()), "html", null, true);
        echo " Adet</td>
            </tr>
            <tr>
                <th>Durum</th>
                <td>
                    ";
        // line 54
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 54, $this->source); })()), "durum", array()) == "true")) {
            // line 55
            echo "                        Aktif
                    ";
        } else {
            // line 57
            echo "                        Devre Dışı
                    ";
        }
        // line 59
        echo "                </td>
            </tr>
            <tr>
                <th>Teknik Özellikler</th>
                <td>";
        // line 63
        echo twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 63, $this->source); })()), "teknikozellikler", array());
        echo "</td>
            </tr>
            <tr>
                <th>Diğer Özellikler</th>
                <td>";
        // line 67
        echo twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 67, $this->source); })()), "digerozellikler", array());
        echo "</td>
            </tr>
            <tr>
                <th>Resimler</th>
                <td><a style=\"color:white;\" class=\"btn btn-primary\" onclick=\"openWin('";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_gallery", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 71, $this->source); })()), "id", array()))), "html", null, true);
        echo "',680,500)\">Galeri</a></td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn btn-primary\" href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        echo "\">Geri Dön</a>

    <a class=\"btn btn-info\" href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 78, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">Düzenle</a>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/products/product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 78,  244 => 76,  236 => 71,  229 => 67,  222 => 63,  216 => 59,  212 => 57,  208 => 55,  206 => 54,  198 => 49,  191 => 45,  184 => 41,  177 => 37,  171 => 33,  165 => 32,  159 => 30,  156 => 29,  152 => 28,  145 => 23,  139 => 22,  133 => 20,  130 => 19,  126 => 18,  117 => 12,  113 => 10,  104 => 9,  84 => 7,  65 => 5,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'adminbase.html.twig' %}

{% block title %}Ürün Detayı{% endblock %}

{% block navbar %} {% include 'admin/navbar.twig' %}{% endblock %}

{% block sidebar %} {% include 'admin/sidebar.twig' %} {% endblock %}

{% block content %}

<div class=\"form-panel\">
    <h4><i class=\"fa fa-angle-right\"></i> Ürün - {{ product.id }}</h4>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Ana Kategori Adı</th>
                <td>
                    {% for cat in categories %}
                        {% if product.categoryid == cat.id %}
                        {{ cat.title }}
                        {% endif %}
                    {% endfor %}
                </td>
            </tr>
            <tr>
                <th>Alt Kategori Adı</th>
                <td>
                    {% for cat in categories %}
                        {% if product.subcategoryid == cat.id %}
                            {{ cat.title }}
                        {% endif %}
                    {% endfor %}
                </td>
            </tr>
            <tr>
                <th>Ürün Adı</th>
                <td>{{ product.urunadi }}</td>
            </tr>
            <tr>
                <th>Marka</th>
                <td>{{ product.marka }}</td>
            </tr>
            <tr>
                <th>Fiyat</th>
                <td>{{ product.fiyat }} ₺</td>
            </tr>
            <tr>
                <th>Stok</th>
                <td>{{ product.stok }} Adet</td>
            </tr>
            <tr>
                <th>Durum</th>
                <td>
                    {% if product.durum == \"true\" %}
                        Aktif
                    {% else %}
                        Devre Dışı
                    {% endif %}
                </td>
            </tr>
            <tr>
                <th>Teknik Özellikler</th>
                <td>{{ product.teknikozellikler|raw }}</td>
            </tr>
            <tr>
                <th>Diğer Özellikler</th>
                <td>{{ product.digerozellikler|raw }}</td>
            </tr>
            <tr>
                <th>Resimler</th>
                <td><a style=\"color:white;\" class=\"btn btn-primary\" onclick=\"openWin('{{ path('product_gallery',{'id':product.id}) }}',680,500)\">Galeri</a></td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn btn-primary\" href=\"{{ path('product_index') }}\">Geri Dön</a>

    <a class=\"btn btn-info\" href=\"{{ path('product_edit', {'id': product.id}) }}\">Düzenle</a>
</div>

{% endblock %}
", "admin/products/product/show.html.twig", "C:\\xampp\\htdocs\\PhpOdev-2\\templates\\admin\\products\\product\\show.html.twig");
    }
}
