<?php

/* admin/categories/listele.twig */
class __TwigTemplate_591d763b538c6b578df4f20d448ade461be6cf598abfad4f0dff851b6e5e64b9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/categories/listele.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/categories/listele.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/categories/listele.twig"));

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

        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
        
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
        $this->loadTemplate("admin/navbar.twig", "admin/categories/listele.twig", 5)->display($context);
        
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
        $this->loadTemplate("admin/sidebar.twig", "admin/categories/listele.twig", 7)->display($context);
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
        echo "    ";
        echo twig_include($this->env, $context, "alerts.html.twig");
        echo "
    <div class=\"content-panel\">
        <h4><i class=\"fa fa-angle-right\"></i> Kategori Listesi</h4>  <a
                style=\"float:right;margin-top:-40px;margin-right:20px;\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kategori_ekle");
        echo "\">
            <button type=\"button\" class=\"btn btn-info\">Yeni Kategori</button>
        </a>
        <hr>
        <table class=\"table table-striped table-advance table-hover\">
            <thead>
            <tr>
                <th></th>
                <th>Kategori Türü</th>
                <th>Üst Kategori Adı</th>
                <th>Başlık</th>
                <th>Anahtar Kelimeler</th>
                <th>Açıklama</th>
                <th>Kategori Durumu</th>
                <th>İşlemler</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 31, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 32
            echo "                <tr>
                    <td></td>
                    <td>
                        ";
            // line 35
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "parentid", array()) == "0")) {
                // line 36
                echo "                            Ana Kategori
                        ";
            } else {
                // line 38
                echo "                            Alt Kategori
                        ";
            }
            // line 40
            echo "                    </td>
                    <td>
                        ";
            // line 42
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "parentid", array()) == "0")) {
                // line 43
                echo "                            Üst Kategori Yok
                        ";
            } else {
                // line 45
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 45, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 46
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["cat"], "id", array()) == twig_get_attribute($this->env, $this->source, $context["category"], "parentid", array()))) {
                        // line 47
                        echo "                                    ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "title", array()), "html", null, true);
                        echo "
                                ";
                    }
                    // line 49
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "                        ";
            }
            // line 51
            echo "                    </td>
                    <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "keywords", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "description", array()), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 56
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "status", array()) == "true")) {
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kategori_goster", array("id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", array()))), "html", null, true);
            echo "\">
                            <button class=\"btn btn-info btn-xs\"><i class=\"fa fa-info-circle\"></i></button>
                        </a>
                        <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kategori_guncelle", array("id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", array()))), "html", null, true);
            echo "\">
                            <button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button>
                        </a>
                        <a onclick=\"return confirm('Kategoriyi silmek istediğinize emin misiniz ?')\"
                           href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kategori_sil", array("id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", array()))), "html", null, true);
            echo "\">
                            <button class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o \"></i></button>
                        </a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 76
            echo "                <tr>
                    <td rowspan=\"9\" colspan=\"9\">Kayıt Bulunamadı</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/categories/listele.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 80,  248 => 76,  237 => 70,  230 => 66,  224 => 63,  220 => 61,  216 => 59,  212 => 57,  210 => 56,  205 => 54,  201 => 53,  197 => 52,  194 => 51,  191 => 50,  185 => 49,  179 => 47,  176 => 46,  171 => 45,  167 => 43,  165 => 42,  161 => 40,  157 => 38,  153 => 36,  151 => 35,  146 => 32,  141 => 31,  120 => 13,  113 => 10,  104 => 9,  84 => 7,  65 => 5,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'adminbase.html.twig' %}

{% block title %}{{ title }}{% endblock %}

{% block navbar %} {% include 'admin/navbar.twig' %}{% endblock %}

{% block sidebar %} {% include 'admin/sidebar.twig' %} {% endblock %}

{% block content %}
    {{ include('alerts.html.twig') }}
    <div class=\"content-panel\">
        <h4><i class=\"fa fa-angle-right\"></i> Kategori Listesi</h4>  <a
                style=\"float:right;margin-top:-40px;margin-right:20px;\" href=\"{{ path('kategori_ekle') }}\">
            <button type=\"button\" class=\"btn btn-info\">Yeni Kategori</button>
        </a>
        <hr>
        <table class=\"table table-striped table-advance table-hover\">
            <thead>
            <tr>
                <th></th>
                <th>Kategori Türü</th>
                <th>Üst Kategori Adı</th>
                <th>Başlık</th>
                <th>Anahtar Kelimeler</th>
                <th>Açıklama</th>
                <th>Kategori Durumu</th>
                <th>İşlemler</th>
            </tr>
            </thead>
            <tbody>
            {% for category in categories %}
                <tr>
                    <td></td>
                    <td>
                        {% if category.parentid == '0' %}
                            Ana Kategori
                        {% else %}
                            Alt Kategori
                        {% endif %}
                    </td>
                    <td>
                        {% if category.parentid == '0' %}
                            Üst Kategori Yok
                        {% else %}
                            {% for cat in categories %}
                                {% if cat.id == category.parentid %}
                                    {{ cat.title }}
                                {% endif %}
                            {% endfor %}
                        {% endif %}
                    </td>
                    <td>{{ category.title }}</td>
                    <td>{{ category.keywords }}</td>
                    <td>{{ category.description }}</td>
                    <td>
                        {% if category.status == 'true' %}
                            Aktif
                        {% else %}
                            Devre Dışı
                        {% endif %}
                    </td>
                    <td>
                        <a href=\"{{ path('kategori_goster',{'id':category.id}) }}\">
                            <button class=\"btn btn-info btn-xs\"><i class=\"fa fa-info-circle\"></i></button>
                        </a>
                        <a href=\"{{ path('kategori_guncelle',{'id': category.id}) }}\">
                            <button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button>
                        </a>
                        <a onclick=\"return confirm('Kategoriyi silmek istediğinize emin misiniz ?')\"
                           href=\"{{ path('kategori_sil',{'id': category.id}) }}\">
                            <button class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o \"></i></button>
                        </a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td rowspan=\"9\" colspan=\"9\">Kayıt Bulunamadı</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}


", "admin/categories/listele.twig", "C:\\xampp\\htdocs\\PhpOdev-2\\templates\\admin\\categories\\listele.twig");
    }
}
