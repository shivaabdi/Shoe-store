<?php

/* admin/categories/yeni.twig */
class __TwigTemplate_cff8c5ee02e0775fa2f67839c82b0983964e99c581f51db7abcb43202093d0f4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/categories/yeni.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/categories/yeni.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/categories/yeni.twig"));

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

        echo "Yeni Kategori";
        
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
        $this->loadTemplate("admin/navbar.twig", "admin/categories/yeni.twig", 5)->display($context);
        
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
        $this->loadTemplate("admin/sidebar.twig", "admin/categories/yeni.twig", 7)->display($context);
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
        echo "    <div class=\"form-panel\">
        <h4><i class=\"fa fa-angle-right\"></i> Kategori Ekle</h4>
        <hr>
        <div class=\"form\">
            <form class=\"cmxform form-horizontal style-form\" method=\"post\">
                <div class=\"form-group \">
                    <label class=\"control-label col-lg-2\">??st Kategori Ad??</label>
                    <div class=\"col-lg-10\">
                        <select name=\"categories[parentid]\" class=\"form-control\">
                            <option value=\"0\">Ana Kategori</option>
                            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cats"]) || array_key_exists("cats", $context) ? $context["cats"] : (function () { throw new Twig_Error_Runtime('Variable "cats" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 21
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "title", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                        </select>
                    </div>
                </div>
                <div class=\"form-group \">
                    <label class=\"control-label col-lg-2\">Ba??l??k</label>
                    <div class=\"col-lg-10\">
                        <input class=\"form-control\" type=\"text\" id=\"title\" name=\"categories[title]\" maxlength=\"50\"
                               value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 30, $this->source); })()), "title", array()), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"form-group \">
                    <label class=\"control-label col-lg-2\">Anahtar Kelimeler</label>
                    <div class=\"col-lg-10\">
                        <input class=\"form-control\" type=\"text\" id=\"keywords\" name=\"categories[keywords]\"
                               maxlength=\"255\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 37, $this->source); })()), "keywords", array()), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"form-group \">
                    <label class=\"control-label col-lg-2\">A????klama</label>
                    <div class=\"col-lg-10\">
                        <input class=\"form-control\" type=\"text\" id=\"description\" name=\"categories[description]\"
                               maxlength=\"255\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 44, $this->source); })()), "description", array()), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"form-group \">
                    <label class=\"control-label col-lg-2\">Kategori Durumu</label>
                    <div class=\"col-lg-10\">
                        <select name=\"categories[status]\" class=\"form-control\">
                            <option value=\"true\">Aktif</option>
                            <option value=\"false\">Devre D??????</option>
                        </select>
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"col-lg-offset-2 col-lg-10\">
                        <button class=\"btn btn-theme\" type=\"submit\">Ekle</button>
                        <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kategoriler_index");
        echo "\">
                            <button class=\"btn btn-theme04\" type=\"button\">??ptal</button>
                        </a>
                    </div>
                </div>
                <input type=\"hidden\" id=\"categories__token\" name=\"categories[_token]\" value=\"8UqPlI0U0gVzk5l848cc4SoYz2kWEPNj6AqEZCbMfI4\">
            </form>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/categories/yeni.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 59,  169 => 44,  159 => 37,  149 => 30,  140 => 23,  129 => 21,  125 => 20,  113 => 10,  104 => 9,  84 => 7,  65 => 5,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'adminbase.html.twig' %}

{% block title %}Yeni Kategori{% endblock %}

{% block navbar %} {% include 'admin/navbar.twig' %}{% endblock %}

{% block sidebar %} {% include 'admin/sidebar.twig' %} {% endblock %}

{% block content %}
    <div class=\"form-panel\">
        <h4><i class=\"fa fa-angle-right\"></i> Kategori Ekle</h4>
        <hr>
        <div class=\"form\">
            <form class=\"cmxform form-horizontal style-form\" method=\"post\">
                <div class=\"form-group \">
                    <label class=\"control-label col-lg-2\">??st Kategori Ad??</label>
                    <div class=\"col-lg-10\">
                        <select name=\"categories[parentid]\" class=\"form-control\">
                            <option value=\"0\">Ana Kategori</option>
                            {% for cat in cats %}
                            <option value=\"{{ cat.id }}\">{{ cat.title }}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
                <div class=\"form-group \">
                    <label class=\"control-label col-lg-2\">Ba??l??k</label>
                    <div class=\"col-lg-10\">
                        <input class=\"form-control\" type=\"text\" id=\"title\" name=\"categories[title]\" maxlength=\"50\"
                               value=\"{{ category.title }}\">
                    </div>
                </div>
                <div class=\"form-group \">
                    <label class=\"control-label col-lg-2\">Anahtar Kelimeler</label>
                    <div class=\"col-lg-10\">
                        <input class=\"form-control\" type=\"text\" id=\"keywords\" name=\"categories[keywords]\"
                               maxlength=\"255\" value=\"{{ category.keywords }}\">
                    </div>
                </div>
                <div class=\"form-group \">
                    <label class=\"control-label col-lg-2\">A????klama</label>
                    <div class=\"col-lg-10\">
                        <input class=\"form-control\" type=\"text\" id=\"description\" name=\"categories[description]\"
                               maxlength=\"255\" value=\"{{ category.description }}\">
                    </div>
                </div>
                <div class=\"form-group \">
                    <label class=\"control-label col-lg-2\">Kategori Durumu</label>
                    <div class=\"col-lg-10\">
                        <select name=\"categories[status]\" class=\"form-control\">
                            <option value=\"true\">Aktif</option>
                            <option value=\"false\">Devre D??????</option>
                        </select>
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"col-lg-offset-2 col-lg-10\">
                        <button class=\"btn btn-theme\" type=\"submit\">Ekle</button>
                        <a href=\"{{ path('kategoriler_index') }}\">
                            <button class=\"btn btn-theme04\" type=\"button\">??ptal</button>
                        </a>
                    </div>
                </div>
                <input type=\"hidden\" id=\"categories__token\" name=\"categories[_token]\" value=\"8UqPlI0U0gVzk5l848cc4SoYz2kWEPNj6AqEZCbMfI4\">
            </form>
        </div>
    </div>
{% endblock %}
", "admin/categories/yeni.twig", "C:\\xampp\\htdocs\\PhpOdev-2\\templates\\admin\\categories\\yeni.twig");
    }
}
